<div class="page-data">
    <h2 class="page-title"><?= $page_title ?></h2>
        <div id="contact_text_holder">
            <h3>Our contact details</h3><br>
            <?php 
                if($contact_data['tel']!= '') {
                echo '<p>Tel:' .$contact_data['tel']. '</p>';
                }
                            if($contact_data['mob']!= '') {
                echo '<p>Mobile:' .$contact_data['mob']. '</p>';
                }
            ?>   
            <p>Email: <?=$contact_data['email'] ?></p>
            <br/>
            <p><?=$contact_data['address'] ?></p>
        </div>   
        <div id="contact_form_holder">
       <?php
            if(isset($_POST["submit"])){
                $name=$_POST["name"];
                $email=$_POST["email"];
                $mobile=$_POST["mob"];
                $mess=$_POST["msg"];
            }
            function input_test($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }
            ?>     
            <h3>Send us a message</h3><br>
            <!-- Contact Form -->
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<table>
			<tr>
				<td>Name: </td><td><input name="name"  type="text" value="<?php if(isset($name)){echo $name;}?>"></td><td><span class="red">*</span></td>
			</tr>
			<tr>
				<td>Email: </td><td><input name="email"  type="email" value="<?php if(isset($email)){echo $email;}?>"></td><td><span class="red">*</span></td>
			</tr>
			<tr>
				<td>Mobile: </td><td><input name="mob"  type="tel" value="<?php if(isset($mobile)){echo $mobile;}?>"></td>
			</tr>
			<tr>
				<td>Message: </td><td><textarea name="msg"><?php if(isset($message)){echo $mess;}?></textarea></td><td><span class="red">*</span></td>
			</tr>
			<tr>
				<td></td><td><input id="send" name="submit" type="submit" value="Send Enquiry"></td>
			</tr>
		</table>
	</form>
<?php
	if(isset($_POST["submit"])){
		$name= input_test($_POST["name"]);
		$email= input_test($_POST["email"]);
		$mobile= input_test($_POST["mob"]);
		$mess= input_test($_POST["msg"]);
		// Checking For Blank Fields..
		if($_POST["name"]==""||$_POST["email"]==""||$_POST["msg"]==""){
			$error= "<h3 style='color:red;'>Please Fill All Required Fields..</h3>";
		}else{
			// Check if the "Sender's Email" input field is filled out
			$email=$_POST['email'];
			// Sanitize E-mail Address
			$email =filter_var($email, FILTER_SANITIZE_EMAIL);
			// Validate E-mail Address
			$email= filter_var($email, FILTER_VALIDATE_EMAIL);
		if (!$email){
			echo "Invalid Sender's Email";
		}
		else{
			$mobile= $_POST['mob'];
			$subject = 'Website enquiry';
			$message = $_POST['msg']."\r\n".'Senders contact: '.$mobile;
			$headers = 'From:'. $email . "\r\n"; // Sender's Email
			// Message lines should not exceed 70 characters (PHP rule), so wrap it
			$message = wordwrap($message, 70);
			// Send Mail By PHP Mail Function
			mail("tascanham@gmail.com", $subject, $message, $headers);
			echo "Your mail has been sent successfuly !";
		}
		}
	}
?>	
<?php if(isset($error)){echo $error;}?>
        </div>
           <div class="clearfix"></div>






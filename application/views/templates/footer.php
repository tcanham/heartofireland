<?php
            if(isset($_POST["submit"])){
                $name=$_POST["name"];
                $email=$_POST["email"];
                $mobile=$_POST["mob"];
                $mess=$_POST["msg"];
            }
            function testInput($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }
?>            
<footer> 
            <div class="footer-top"> 
                
                    <div class="donate-button-holder footer-div">
                        <?= $footer_donations['content']; ?>
                    </div> 
                    <div class="links-holder footer-div ">
                        <?php foreach($footer_links as $link): ?>
                        <a href="<?= $link['link'];?>" target="_blank"><button class="links-btn"><?= $link['title'];?></button></a>
                        <?php endforeach; ?>
                    </div>
                 

                    <div class="enquiry-holder footer-div">
                        <h3>Need some advice </h3>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<table>
			<tr>
				<td>Name: </td><td><input name="name"  type="text" value="<?php if(isset($name)){echo $name;}?>"></td><td><span class="red">*</span></td>
			</tr>
			<tr>
				<td>Email: </td><td><input name="email"  type="email" value="<?php if(isset($email)){echo $email;}?>"></td><td><span class="red">*</span></td>
			</tr>
			<tr>
				<td>Question: </td><td><textarea name="msg"><?php if(isset($message)){echo $mess;}?></textarea></td><td><span class="red">*</span></td>
			</tr>
			<tr>
				<td></td><td><input id="send" name="submit" type="submit" value="Ask us"></td>
			</tr>
		</table>
	</form>
<?php
	if(isset($_POST["submit"])){
		$name= testInput($_POST["name"]);
		$email= testInput($_POST["email"]);
		$mess= testInput($_POST["msg"]);
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
			$subject = 'Request for Information from the website';
			$message = $_POST['msg']."\r\n".'Senders contact: '.$email;
			$headers = 'From:'. $email . "\r\n"; // Sender's Email
			// Message lines should not exceed 70 characters (PHP rule), so wrap it
			$message = wordwrap($message, 70);
			// Send Mail By PHP Mail Function
			mail("tascanham@gmail.com", $subject, $message, $headers);
			echo "Your request for information has been recieved, we will reply by email a soon as possable";
		  }
		}
	}
?>	
<?php if(isset($error)){echo $error;}?>   
                    </div>
                </div>   
                <div class="clearfix"></div>
           
            <div class="footer-bottom">
                <a href="<?= BASE_URL?>login" id="login_button" target="_blank">Login</a>    
                <p>&copy;<?=date('Y');?>&nbsp;Heart of Ireland Animal Rescue</p>
            </div>
        </footer>
</body>
</html>
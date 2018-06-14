<?php
class Site_functions{
//Function to upload the profile images
     public function profile_image_upload(){
        $target_dir = "./assets/uploads/profile_images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            if($imageFileType !=''){
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    //echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    // echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
          //  echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
       if ($_FILES["fileToUpload"]["size"] > 500000) {
          //   echo "Sorry, your file is too large.";
          $uploadOk = 0;
       }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        //   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
          //  echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
              //  echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } else {
          //     echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    
    //Format date function
    public function fix_date($date){
        $fixed = strtotime($date );
        $date = date("d/m/Y",$fixed);
        return $date;
    }
    
    //function to return a welcome message dependant on the current time
    public function time_greeting(){
         date_default_timezone_set('Europe/Dublin');	
        $time = (int)date("H");
        if($time >=0 && $time < 12 ){
            $result = 'good morning';
        }elseif($time >= 12 && $time < 17){
            $result = 'good afternoon';
        }elseif($time >=17 && $time <=24){
            $result = 'good evening';
        }

        return $result;
    }
    
    //function to limit out put and add read more link
    public function limit_output($text){
        if (strlen($text) > 220) {
                $text = substr($text, 0, 220);
            }
        return $text;
    }
}
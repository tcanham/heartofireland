<div id="page_content">
<?php
echo '<div class="profile-holder-single">';  
echo '<img src='.BASE_URL.'assets/uploads/profile_images/'.$profile["image"].'>'; 
echo '<div class="text-holder">';
echo '<h4>My name is:&nbsp;' . $profile['title'] .'</h4>';   
echo '<p'. $profile['text'] .'</p>';  
echo '</div>'; 
echo '</div>';
echo '<div>';
echo '<p class="profile-date">Uploaded/amended:&nbsp;' . $profile['created'] .'</p>';     
echo '</div>';  
echo '<div class="clearfix"></div>'; 
   
?>  
</div>
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
echo '<p class="profile-date">' . $profile['title'] .'&#39;s&nbsp;profile&nbsp;uploaded on:&nbsp;' . $this->site_functions->fix_date($profile['created']) .'</p>';      
echo '</div>';  
echo '<div class="clearfix"></div>'; 
   
?>  
</div>

<div>
<h3><?= $page?></h3>
<?php

foreach($profiles as $profile):
echo '<p>Name:&nbsp;' . $profile['title'] .'</p>';
    
echo '<div class="profile-main"><img src="#"><p>' . $profile['text'] .'</p>';
echo '<div class="clearfix"></div>';   
echo '<div><p>Author:&nbsp;' . $profile['author'] .'</p>';
echo '<p>Uploaded/amended:&nbsp;' . $profile['date'] .'</p></div>';
endforeach;
    
?>  
</div>

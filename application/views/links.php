
<div id="page_content">
<h3 class="page-title"><?= $page?></h3>
<?php

foreach($links as $link):
echo '<div class="link-holder">';
echo '<p class="links-page-link"><a href="'.$link['link'].'" target="_blank">' . $link['title'] .'</a></p>';    
echo '<p>' . $link['text'] .'</p>';
echo '</div>';  
echo '<div class="clearfix"></div>';   
endforeach;
    
?>  
</div>
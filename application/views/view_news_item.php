<div class="page-content">
<?php 
    echo '<h3 class="news-item-heading">'.$news_item['title'].'</h3><p>'.$news_item['text'].'</p><hr/><p>Author: <em>'.$news_item['author'].'</em> Uploaded: '.$this->site_functions->fix_date($news_item['created']).'</p>';
?>
</div>
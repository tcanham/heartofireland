<div class="page-content">
<?php foreach($news_items as $news_item): ?>
<?php
    echo '<div class="news-item"><h3 class="news-item-heading">'.$news_item['title'].'</h3><p>'.$news_item['text'].'</p><br><p>Author: <em>'.$news_item['author'].'</em> Uploaded: '.$this->site_functions->fix_date($news_item['created']).'</p></div>';
?>
 <?php endforeach; ?>
</div>
<div id="page_content"> 
    <div class="greeting">
        <p><?php $greeting = $this->site_functions->time_greeting(); echo ucfirst($greeting); ?>&nbsp;and welcome to our website</p>
        <h1>The Heart of Ireland Animal Rescue &amp; Rehabilitation</h1>
    </div>    
    <div id="scroll_holder"> 
        <?php include'./application/views/templates/Scroller.php'?>  
    </div>
    <div id="right_bar_home">
        <h2>Our Sponsors</h2>
    </div>
    <div id="clearfix"></div>
    <div id="news_section">
        <h2>Latest News</h2>
        <?php foreach($news_items as $item): ?>
        <?php
            echo '<div class="news-item"><h3>'.$item['title'].'</h3><p>'.$this->site_functions->limit_output($item['text']).'... <a href="'.BASE_URL.'">Read More</a></p></div>';
        ?>
        <?php endforeach; ?>
    </div>
</div>

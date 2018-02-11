<div id="page_content"> 
    <div class="greeting">
        <p><?php $greeting = $this->site_functions->time_greeting(); echo ucfirst($greeting); ?>&nbsp;and welcome to our website</p>
        <h1>The Heart of Ireland Animal Rescue &amp; Rehabilitation</h1>
    </div>    
    <div id="scroll_holder"> 
        <?php include'./application/views/templates/Scroller.php'?>  
    </div>
</div>

        <footer> 
            <div class="footer-top"> 
                <div class="footer_divs_outer">
                    <div class="donate-button-holder footer-div">
                       <?= html_entity_decode($footer_donations["content"]);?>     
                    </div> 
                    <div class="links-holder footer-div ">
                        <?php foreach($footer_links as $link): ?>
                        <a href="<?= $link['link'];?>" target="_blank"><button class="links-btn"><?= $link['title'];?></button></a>
                        <?php endforeach; ?>
                    </div>
                </div>  
                <div class="footer_divs_outer">
                    <div class="footer-div">
                    </div>
                    <div class="map-holder footer-div">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18849.95720068698!2d-8.627697962278367!3d53.80293024811451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTPCsDQ4JzEwLjUiTiA4wrAzNiczNi43Ilc!5e0!3m2!1sen!2sie!4v1517082425840" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    </div>
                <div class="clearfix"></div>
            </div>    
            <div class="footer-bottom">
                <a href="<?= BASE_URL?>login" id="login_button" target="_blank">Login</a>    
                <p>&copy;<?=date('Y');?>&nbsp;Heart of Ireland Animal Rescue</p>
            </div>
        </footer>
    </div>
</body>
</html>
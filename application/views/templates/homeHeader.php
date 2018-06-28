<!DOCTYPE html>
<html>
<head>
        <title>Heart of Ireland Animal Rescue/<?= $page_title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>/assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>/assets/css/sliderStyles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="<?= BASE_URL ?>/assets/js/script.js"></script>
        <script src="<?= BASE_URL ?>/assets/js/scroll-scripts/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="<?= BASE_URL ?>/assets/js/scroll-scripts/jssor.slider-26.7.0.min.js" type="text/javascript"></script>
        <script src="<?= BASE_URL ?>/assets/js/scroll-scripts/script.js" type="text/javascript"></script>
        <meta charset="UTF-8">
</head>
<body>

    <div id="container">
    <header>
        <div id="top_bar">
            <h3 class="top-bar-phone">
               <a href="tel:087 187 4268"> Tel:&nbsp;<?= $contact_data['mob'];?></a>
            </h3>
            <h3 class="top-bar-email">
               <a href="mailto:info@heartofireland.com"> Email:&nbsp;<?= $contact_data['email'];?></a>
            </h3>
        </div>
        <div class="clearfix"></div>
        <div id="banner_div">
            <div class="icon-holder">
            </div>
        </div>
        <div class="topnav" id="myTopnav">
            <a class="top-link" href="<?= BASE_URL ?>">Home</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            <a class="top-link" href="<?= BASE_URL ?>about">About Us</a>
                        <div class="dropdown">
                          <a class="top-link">Our Animals</a>
                          <div class="dropdown-content">
                            <a class="drop-link"href="<?= BASE_URL ?>">All</a>  
                            <a class="drop-link"href="<?= BASE_URL ?>">Dogs</a>
                            <a class="drop-link"href="<?= BASE_URL ?>">Cats</a> 
                          </div>
                        </div>            
            <a class="top-link" href="<?= BASE_URL ?>welfare">Animal Welfare</a>
            <a class="top-link" href="<?= BASE_URL ?>info">Information</a>    
            <a class="top-link" href="<?= BASE_URL ?>shop">Items for Sale</a>    
            <a class="top-link" href="<?= BASE_URL ?>contact">Contact</a>
            <a class="top-link" href="<?= BASE_URL ?>news">News</a>
            <a class="top-link" href="<?= BASE_URL ?>gallery">gallery</a>
        </div>
        <div class="clearfix"></div>
    </header>

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
        <div id="banner_div"><img src="<?= BASE_URL?>assets/uploads/hoiLogo.jpg"></div>
        <div class="topnav" id="myTopnav">
            <a href="<?= BASE_URL ?>">Home</a>
            <a href="<?= BASE_URL ?>about">About Us</a>
            <a href="<?= BASE_URL ?>our-animals">Our Animals</a>
            <a href="<?= BASE_URL ?>welfare">Animal Welfare</a> 
            <a href="<?= BASE_URL ?>info">Information</a>    
            <a href="<?= BASE_URL ?>donations">Donate</a>
            <a href="<?= BASE_URL ?>shop">Items for Sale</a>    
            <a href="<?= BASE_URL ?>home/links">Links</a>
            <a href="<?= BASE_URL ?>contact">Contact</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </header>
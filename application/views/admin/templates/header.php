<?php 
if(!isset($_SESSION['user_name'])){
  header('Location:' . BASE_URL);  
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin/Dashboard</title> 
    <link href="<?=BASE_URL?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=BASE_URL?>assets/css/admin_styles.css" rel="stylesheet">
    <script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?= BASE_URL?>admin">Admin Home Page<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= BASE_URL?>" target="_blank">Site Home Page</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= BASE_URL?>login/logout">Log Out</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
<?php if($_SESSION['level'] !='admin') header('Location:' . BASE_URL. 'users');?>
<div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">Overview <span class="sr-only">(current)</span></a>
            </li>
            <?php foreach($admin_links as $link):?>
            <li class="nav-item">
              <a class="nav-link" href="<?= BASE_URL?><?= $link['link']?>"><?= $link['title']?></a>
            </li> 
            <?php endforeach;?>
          </ul>
        </nav>
        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
            <h4>Are you sure you want to delete <?= $user['username'];?>!!</h4>
            <a href="<?=BASE_URL?>users/delete_user/<?=$user["id"]?>"><button class="alert alert-danger">Yes</button></a>
        </main>
      </div>
    </div>

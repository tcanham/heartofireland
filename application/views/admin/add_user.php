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
            <li class="nav-item">
              <a class="nav-link active" href="#">Pages <span class="sr-only">(current)</span></a>
            </li>
            <?php foreach($page_list as $page):?>
            <li class="nav-item">
              <a class="nav-link" href="<?= BASE_URL?>pages/<?= $page['link']?>"><?= $page['title']?></a>
            </li> 
            <?php endforeach;?>              
          </ul>
        </nav>
        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1><?= $page_title ?></h1>
                <form action="save_user" method="post">
                    <div class="error-box"><?php echo validation_errors(); ?></div>
                    <table>
                        <tr>
                            <td>First name:&nbsp;</td><td><input type="text"name="first_name" id="first_name"value="<?php echo set_value('first_name'); ?>"></td>
                        </tr>
                        <tr>
                            <td>Surname:&nbsp;</td><td><input type="text"name="surname" id="surname" value="<?php echo set_value('surname'); ?>"></td>
                        </tr>
                        <tr>
                            <td>Username:&nbsp;</td><td><input type="text"name="username" id="username" value="<?php echo set_value('username'); ?>"></td><td><?php if(isset($username_error)) echo $username_error;?></td>
                        </tr>                       
                        <tr>
                            <td>Password:&nbsp;</td><td><input type="text"name="password" id="password"value="<?php echo set_value('password'); ?>"></td>
                        </tr>
                        <tr>
                            <td>Email:&nbsp;</td><td><input type="text"name="email" id="email"value="<?php echo set_value('email'); ?>"></td>
                        </tr>
                        <tr>
                        <tr>
                            <td>User type:&nbsp;</td><td> 
                            <select name="type" id="type">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                            </select></td>
                        </tr>
                        <tr>   
                            <td></td><td><input type="submit" value="Save User" name="submit"></td>
                        </tr>   
                    </table>  
                </form>
        </main>
      </div>
    </div>
<script>
    CKEDITOR.replace(add_profile_text) ;
</script>
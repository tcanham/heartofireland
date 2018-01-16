<?php if($_SESSION['level'] !='admin') header('Location:' . BASE_URL. 'users');?>
<div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">Overview <span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="<?= BASE_URL?>users">Users</a>
            </li>             
            <li class="nav-item">
              <a class="nav-link" href="<?= BASE_URL?>profiles">Profiles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Items for sale</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= BASE_URL?>admin/links">Links</a>
            </li>
          </ul>
        </nav>
        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>Edit <?php echo $user['username']; ?> account</h1>
            <h3>You must either re-enter the existing password or enter a new password</h3>
                <form action="<?= BASE_URL?>users/update_user" method="post">
                    <div class="error-box"><?php echo validation_errors(); ?></div>
                    <table>
                        <tr>
                            <td><input type="hidden"name="id" id="id"value="<?php echo $user['id']; ?>"></td>
                        </tr>                      
                        <tr>
                            <td>First name:&nbsp;</td><td><input type="text"name="first_name" id="first_name"value="<?php echo $user['first_name']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Surname:&nbsp;</td><td><input type="text"name="surname" id="surname" value="<?php echo $user['surname']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Username:&nbsp;</td><td><input type="text"name="username" id="username" value="<?php echo $user['username']; ?>"></td>
                        </tr>                       
                        <tr>
                            <td>Password:&nbsp;</td><td><input type="text"name="password" id="password"></td>
                        </tr>
                        <tr>
                            <td>Email:&nbsp;</td><td><input type="text"name="email" id="email"value="<?php echo $user['email']; ?>"></td>
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
                            <td></td><td><input type="submit" value="Edit User" name="submit"></td>
                        </tr>   
                    </table>  
                </form>
        </main>
      </div>
    </div>
<script>
    CKEDITOR.replace(add_profile_text) ;
</script>
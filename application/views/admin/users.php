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
          <h1><?= $page_title?></h1>
            <a href="<?=BASE_URL?>users/add_user"><button class="alert alert-primary top-button">Add User</button></a>
            <table class="table table-responsive">
                <thead>
                    <tr>                      
                      <th scope="col">Id</th>                          
                      <th scope="col">Name</th>
                      <th scope="col">Username</th>                       
                      <th scope="col">Email</th>
                      <th scope="col">Type</th> 
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach($users as $user):?>
                      <?= 
                      '<tr><td>'.$user["id"].'</td>
                      <td>'.$user["first_name"].' '.$user["surname"].'</td>
                      <td>'.$user["username"].'</td>
                      <td>'.$user["email"].'</td>
                      <td>' .$user["type"]. '</td>
                      <td><a href="'.BASE_URL.'users/edit_user/'.$user["username"].'"><button class="alert alert-success">Edit</button></a></td>
                      <td><a href="'.BASE_URL.'users/check_delete_user/'.$user["id"].'"><button class="alert alert-danger">Delete</button></a></td></tr>'
                      ?>
                      <?php endforeach ?>
                  </tbody> 
            </table> 
        </main>
      </div>
    </div>



















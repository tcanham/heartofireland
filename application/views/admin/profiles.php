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
          <h1 class="page-title">Animal Profiles</h1>
            <a href="<?=BASE_URL?>profiles/add_profile"><button class="alert alert-primary top-button">Add Profile</button></a>
            <table class="table table-responsive">
                <thead>
                    <tr>                      
                      <th scope="col">Id</th>
                      <th scope="col">Category</th>
                      <th scope="col">Name</th>
                      <th scope="col">Me</th>                        
                      <th scope="col">Created/updated</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach($profiles as $profile):?>
                      <?php echo
                      '<tr><td>'.$profile["id"].'</td><td>'.$profile["category"].'</td><td>'.$profile["title"].'</td><td>';
                        if ($profile["image"] != ''){
                            echo '<img src='.BASE_URL.'assets/uploads/profile_images/'.$profile["image"].'>';
                        }
                        echo '</td>';
                        ?>
                        <?php  echo
                      '<td>'.$this->site_functions->fix_date($profile["created"]).'</td>
                      <td><a href="profiles/view_profile/'.$profile["slug"].'" target="_blank"><button class="alert alert-primary">View</button></a></td>
                      <td><a href="profiles/edit_profile/'.$profile["slug"].'"><button class="alert alert-success">Edit</button></a></td>
                      <td><a href="profiles/check_delete_profile/'.$profile['id'].'"><button class="alert alert-danger">Delete</button></td></tr></a>'
                      ?>
                      <?php endforeach ?>
                  </tbody> 
            </table> 
        </main>
      </div>
    </div>



















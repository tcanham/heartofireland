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
          <h1><?= $page?></h1>
             <a href="<?=BASE_URL?>links/add_link"><button class="alert alert-primary top-button">Add Link</button></a>
            <table class="table table-responsive">
                <thead>
                    <tr>                      
                      <th scope="col">Id</th>                          
                      <th scope="col">Title</th>
                      <th scope="col">Link</th>                       
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach($links as $link):?>
                      <?= 
                      '<tr><td>'.$link["id"].'</td>'.
                      '<td>'.$link["title"].'</td>'.
                      '<td>'.$link["link"].'</td>
                      <td><a href="'.BASE_URL.'links/edit_link/'.$link["id"].'"><button class="alert alert-success">Edit</button></a></td>
                      <td><a href="'.BASE_URL.'links/check_delete_link/'.$link["id"].'"><button class="alert alert-danger">Delete</button></a></td></tr>'
                      ?>
                      <?php endforeach ?>
                  </tbody> 
            </table>          

        </main>
      </div>
    </div>
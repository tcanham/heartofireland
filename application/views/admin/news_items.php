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
          <h1 class="page-title">News Items</h1>
            <a href="<?=BASE_URL?>news/add_news"><button class="alert alert-primary top-button">Add News Item</button></a>
            <table class="table table-responsive">
                <thead>
                    <tr>                      
                      <th scope="col">Id</th>                          
                      <th scope="col">Title</th>
                      <th scope="col">Author</th>    
                      <th scope="col">Created/updated</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach($news_items as $item):?>
                      <?php echo'<tr><td>'.$item["id"].'</td>'.
                        '<td>'.$item["title"].
                        '<td>'.$item["author"].'</td>'.
                        '<td>'.$this->site_functions->fix_date($item['created']).'</td>'.
                        '</td><td><a href="'.BASE_URL.'news/edit_news_item/'.$item["id"].'"><button class="alert alert-success">Edit</button></a></td>
                        <td><a href="'.BASE_URL.'news/check_delete_item/'.$item["id"].'"><button class="alert alert-danger">Delete</button></a></td></tr>'
                      ?>
                      <?php endforeach ?>
                  </tbody> 
            </table> 
            
        </main>
      </div>
    </div>
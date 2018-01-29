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
            <h1>Edit <?php echo $about_data['title']; ?></h1>
               <form action="<?= BASE_URL?>Pages/update_about_page/<?= $about_data['id']?>" method="post" enctype="multipart/form-data">
                    <div class="error-box"><?php echo validation_errors(); ?></div>
                    <table>
                        <tr>
                            <td><input type="hidden"name="id" id="name"value="<?php echo $about_data['id']; ?>"></td>
                        </tr>                        
                        <tr>
                            <td></td><td><textarea name="about_content" id="about_content"><?php echo $about_data['content']; ?></textarea></td>
                        </tr>
                        <tr>
                            <td></td><td><input type="submit" value="Edit About Page" name="submit"></td>
                        </tr>   
                    </table>  
                </form>
        </main> 
      </div>
 <script>
    CKEDITOR.replace(about_content) ;
</script>   </div>


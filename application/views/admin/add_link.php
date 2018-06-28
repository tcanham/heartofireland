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
                <form action="<?= BASE_URL?>links/save_link" method="post">
                    <div class="error-box"><?php echo validation_errors(); ?></div>
                    <table>
                        <tr>
                            <td>Title:&nbsp;</td><td><input type="text"name="title" id="title"value="<?php echo set_value('title'); ?>"></td>
                        </tr>
                        <tr>
                            <td>Link:&nbsp;</td><td><input type="text"name="link" id="link"value="<?php echo set_value('link'); ?>"></td>
                        </tr>  
                            <td></td><td><textarea name="add_link_text" id="add_link_text"><?php echo set_value('add_link_text'); ?></textarea></td>
                        <tr>
                        </tr>
                        <tr>
                            <td></td><td><input type="submit" value="Save link" name="submit"></td>
                        </tr>   
                    </table>  
                </form>        
            
          </main>
      </div>
    </div>

<script>
    CKEDITOR.replace(add_link_text) ;
</script>

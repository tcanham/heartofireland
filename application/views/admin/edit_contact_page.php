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
            <h1>Edit <?php echo $contact_data['title']; ?></h1>
                <form action="<?= BASE_URL?>pages/update_contact_page" method="post">
                    <div class="error-box"><?php echo validation_errors(); ?></div>
                    <table>
                        <tr>
                            <td><input type="hidden"name="id" id="id"value="<?php echo $contact_data['id']; ?>"></td>
                        </tr>                      
                        <tr>
                            <td>Tel:&nbsp;</td><td><input type="text"name="tel" id="tel"value="<?php echo $contact_data['tel']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Mob:&nbsp;</td><td><input type="text"name="mob" id="mob" value="<?php echo $contact_data['mob']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Address</td><td><textarea name="address" id="address"><?php echo $contact_data['address']; ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Email:&nbsp;</td><td><input type="text"name="email" id="email"value="<?php echo $contact_data['email']; ?>"></td>
                        </tr>
                        <tr>   
                            <td></td><td><input type="submit" value="Edit Page" name="submit"></td>
                        </tr>   
                    </table>  
                </form>  
        </main> 
      </div>
    </div>
<script>
    CKEDITOR.replace(address) ;
</script>


 

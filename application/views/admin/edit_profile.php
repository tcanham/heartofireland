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
          <h1>Edit <?php echo $profile['title'] ?></h1>
            <p class="red">When editing a profile it is neccesary to re-upload an image and re-enter the category!</p>
                <form action="<?= BASE_URL?>profiles/update_profile/<?= $profile['slug']?>" method="post" enctype="multipart/form-data">
                    <div class="error-box"><?php echo validation_errors(); ?></div>
                    <table>
                        <tr>
                            <td><input type="hidden"name="id" id="name"value="<?php echo $profile['id']; ?>"></td>
                        </tr>                        
                        <tr>
                            <td>Name:&nbsp;</td><td><input type="text"name="name" id="name"value="<?php echo $profile['title']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Category:&nbsp;</td>
                            <td>
                                <select name="category" id="category">
                                    <option name="other">Other</option>
                                    <option name="dog">Dog</option>
                                    <option name="cat">Cat</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Image:&nbsp;</td><td><input type="file" name="fileToUpload" id="fileToUpload"></td>
                        </tr>  
                        <tr>
                            <td></td><td><textarea name="add_profile_text" id="add_profile_text"><?php echo $profile['text']; ?></textarea></td>
                        </tr>
                        <tr>
                            <td></td><td><input type="submit" value="Edit profile" name="submit"></td>
                        </tr>   
                    </table>  
                </form>
        </main>
      </div>
    </div>
<script>
    CKEDITOR.replace(add_profile_text) ;
</script>

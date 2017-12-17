   <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">Overview <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= BASE_URL?>profiles">Profiles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Items for sale</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Links</a>
            </li>
          </ul>
        </nav>
        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1><?= $page ?></h1>
                <form action="save_profile" method="post" enctype="multipart/form-data">
                    <div class="error-box"><?php echo validation_errors(); ?></div>
                    <table>
                        <tr>
                            <td>Name:&nbsp;</td><td><input type="text"name="name" id="name"value="<?php echo set_value('name'); ?>"</td>
                        </tr>
                        <tr>
                            <td>Image:&nbsp;</td><td><input type="file" name="fileToUpload" id="fileToUpload"></td>
                        </tr>  
                            <td></td><td><textarea name="add_profile_text" id="add_profile_text"><?php echo set_value('add_profile_text'); ?></textarea></td>
                        <tr>
                        </tr>
                        <tr>
                            <td></td><td><input type="submit" value="Save profile" name="submit"></td>
                        </tr>   
                    </table>  
                </form>
        </main>
      </div>
    </div>
<script>
    CKEDITOR.replace(add_profile_text) ;
</script>
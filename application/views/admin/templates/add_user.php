 

<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1><?= $page ?></h1>
                <form action="save_profile" method="post" enctype="multipart/form-data">
                    <div class="error-box"><?php echo validation_errors(); ?></div>
                    <table>
                        <tr>
                            <td>Name:&nbsp;</td><td><input type="text"name="name" id="name"value="<?php echo set_value('name'); ?>"></td>
                        </tr>
                        <tr>
                            <td>Image:&nbsp;</td><td><input type="file" name="fileToUpload" id="fileToUpload"></td>
                        </tr>  
                            <td></td><td><textarea name="add_profile_text" id="add_profile_text"><?php echo set_value('add_profile_text'); ?></textarea></td>
                        <tr>
                        </tr>
                        <tr>
                            <td>  </td><td><input type="submit" value="Save profile" name="submit"></td>
                        </tr> 
                       
                    </table>  
                </form>
        </main>
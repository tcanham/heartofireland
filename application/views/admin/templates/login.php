<div id="login_page_content">
    <div id="login_holder">
        <div class="error-box"><?php echo validation_errors(); ?></div>
        <form action="<?=BASE_URL?>login/login_check" method="post">
            <table>
                <tr>
                    <td>Username:</td><td><input type=text id="username" name="username"></td>
                </tr>
                 <tr>
                    <td>Password:</td><td><input type=password id="password" name="password"></td>
                </tr>
                <tr>
                    <td></td><td><input type="submit" id="submit" value="Login"></td>
                </tr>
            </table>
        </form>
    </div>

</div>

            
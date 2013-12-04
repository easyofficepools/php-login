<section>
    <?php 
        if (isset($this->errors)) {
            foreach ($this->errors as $error) {
                echo '<div class="system_message alert">'.$error.'</div>';
            }
        }
    ?>
    <div class="content">
        <h1>Change your email adress</h1>
        <form action="<?php echo URL; ?>login/edituseremail_action" method="post">
            
            <label>
                <em>Email</em>
                <input type="text" name="user_email" value="<?php echo Session::get('user_email'); ?>" required />
            </label>
            
            <label>
                <em>Confirm password</em>
                <input type="password" name="user_password" required />
            </label>
            
            <div class="buttons">
                <input type="submit" value="Submit" class="btn"/>
            </div>
        </form>
        
    </div>
</section>
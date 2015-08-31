<?php include('_header.php'); ?>
<div id="formstyle" class="12u">
<!-- show registration form, but only if we didn't submit already -->
<?php if (!$registration->registration_successful && !$registration->verification_successful) { ?>
<header>
    <h2>Register</h2>
    <br />
  
</header>
<div class="container"><div class="row">
    <div class="1u"><br></div>
        <div class="10u">
            
                <form method="post" action="register.php" name="registerform">
 
                        <label for="user_name">User Name (2-64 char)</label>
                          <input id="user_name" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
                        
                         <label for="user_email">User's Email(verification will send)</label>
                        <input id="user_email" type="email" name="user_email" required />
                        
                        <label for="user_password_new"><?php echo WORDING_REGISTRATION_PASSWORD; ?></label>
                           <input id="user_password_new" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
                           
                           <label for="user_password_repeat"><?php echo WORDING_REGISTRATION_PASSWORD_REPEAT; ?></label>
                            <input id="user_password_repeat" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
                        
                        <div class="row">  
                         <div class="4u"> <br> </div>
                         <div class="4u"> <img src="tools/showCaptcha.php" alt="captcha" /></div>
                         <div class="4u"> <br> </div>
                        </div>
                                <label><?php echo WORDING_REGISTRATION_CAPTCHA; ?></label>
                        <input type="text" name="captcha" required />
                        
                        <div class="row">  
                         <div class="4u"> <br> </div>  
                               <div class="4u">  <input type="submit" name="register" value="<?php echo WORDING_REGISTER; ?>" /></div>
                              <div class="4u"> <br> </div>
                        </div>
                </form>
            </div>
        
            <div class="1u"><br></div></div>
</div>
<?php } ?>


</div>


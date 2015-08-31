<?php include('_header.php'); ?>

<div id="formstyle" class="8u">
<form method="post" action="index.php" name="loginform">
    <label for="user_name">User name:  
    <input id="user_name" type="text" name="user_name" required /></label>
    <label for="user_password">Password:  
    <input id="user_password" type="password" name="user_password" autocomplete="off" required /></label>
    <input type="checkbox" id="user_rememberme" name="user_rememberme" value="1" />
    <label for="user_rememberme">Remember</label>
    <input type="submit" name="login" value="Login" />
</form>

<a href="register.php"><?php echo "Register"; ?></a>
<a href="password_reset.php"><?php echo "Reset Password"; ?></a>
</div>

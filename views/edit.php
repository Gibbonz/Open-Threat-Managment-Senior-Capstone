<?php include('_header.php'); ?>

<!-- clean separation of HTML and PHP -->

			
		<div id="header-wrapper">
				<div id="header" class="container">
				
				

				
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.php" class="icon fa-home"><span>Back to Home</span></a></li>
							
								<a href="index.php?logout"><span id="logout">Logout</span></a>
						
							</ul>
						</nav>
                                           
							<div id="usernav" class="12u">
                                                                        
									<!--echo WORDING_PROFILE_PICTURE . '<br/><img src="' . $login->user_gravatar_image_url . '" />;-->
									<span id="profile"><?php echo  $login->user_gravatar_image_tag . "<br />";?>
									<!--if you need the user's information, just put them into the $_SESSION variable and output them here-->
									<h2>Edit Account</h2></span>
								
							
								
						</div>
                                </div>
                </div>
<div id="features-wrapper">
				<section id="features" class="container">
<div id="formstyle" class="12u">
<!-- edit form for username / this form uses HTML5 attributes, like "required" and type="email" -->
<form method="post" action="edit.php" name="user_edit_form_name">
  <div class="row">
   <div class="4u"><label for="user_name">New UserName (Letters and Numbers only)</label></div> 
    <div class="8u"><input id="user_name" type="text" name="user_name" pattern="[a-zA-Z0-9]{2,64}" required /> (<?php echo WORDING_CURRENTLY; ?>: <?php echo $_SESSION['user_name']; ?>)
    <p></p><input type="submit" name="user_edit_submit_name" value="<?php echo WORDING_CHANGE_USERNAME; ?>" /></div></div>
</form><hr/>

<!-- edit form for user email / this form uses HTML5 attributes, like "required" and type="email" -->
<form method="post" action="edit.php" name="user_edit_form_email">
   <div class="row">
   <div class="4u">   <label for="user_email"><?php echo WORDING_NEW_EMAIL; ?></label></div>
   <div class="8u"> <input id="user_email" type="email" name="user_email" required /> (<?php echo WORDING_CURRENTLY; ?>: <?php echo $_SESSION['user_email']; ?>)
   <p></p> <input type="submit" name="user_edit_submit_email" value="<?php echo WORDING_CHANGE_EMAIL; ?>" /></div>
   </div>
</form><hr/>

<!-- edit form for user's password / this form uses the HTML5 attribute "required" -->
<form method="post" action="edit.php" name="user_edit_form_password">
<div class="row">
    <div class="4u"><label for="user_password_old"><?php echo WORDING_OLD_PASSWORD; ?></label></div>
    <div class="8u"><input id="user_password_old" type="password" name="user_password_old" autocomplete="off" /></div>
</div>
<div class="row">
    <div class="4u"><label for="user_password_new"><?php echo WORDING_NEW_PASSWORD; ?></label></div>
    <div class="8u"><input id="user_password_new" type="password" name="user_password_new" autocomplete="off" /></div>
</div>
<div class="row">
    <div class="4u"><label for="user_password_repeat"><?php echo WORDING_NEW_PASSWORD_REPEAT; ?></label></div>
    <div class="8u"><input id="user_password_repeat" type="password" name="user_password_repeat" autocomplete="off" />

    <p></p><input type="submit" name="user_edit_submit_password" value="<?php echo WORDING_CHANGE_PASSWORD; ?>" /></div>
   </div>
</form><hr/>
</div>
<!-- backlink -->




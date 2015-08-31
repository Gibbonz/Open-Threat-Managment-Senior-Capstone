<?php include('_header.php'); ?>

			
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
									<h2>File Upload</h2></span>
								
							
								
						</div>
                                </div>
                </div>
<div id="features-wrapper">
				<section id="features" class="container">
<div class="container"><div class="row">
    <div class="3u"><br></div>
        <div class="6u">
<?php if ($upload->wasFileUploaded() == true) { 
echo "File was uploaded successfully";
 } else { ?>		
	<form enctype="multipart/form-data" action="import.php" method="POST">
		
		<label for="file">Choose a file to upload : <input name="file" type="file" /></label><br>
		<p><input type="submit" value="Upload File" name="upload" /></p>
		
	</form>
<?php } ?>
</div>
        
            <div class="3u"><br></div></div>
</div>

</body>
</html>

<?php include('_header.php'); ?>

<body class="homepage">
<div  id="section-1"></div>
		<!-- Header -->
			<div id="header-wrapper">
                           <div id="background-wrapper">
                            <video prload="auto" loop>
				<source src="videos/video2.mp4" type="video/mp4">						  
			    </video>
                            
				<div id="header" class="container">
					
					<!-- Logo -->
					
						<h1 id="logo"><a href="index.html">Open Threat <br> Managment</a></h1>
                                                    
                                                     <div class="lines">
                                                        <!--<a href="javascript:ajaxpage('login_form.php', 'dropdown');" class="click"><strong>Login</strong></a>
                                                         --- or --- -->
                                                       Login or <a href="javascript:ajaxpage('register.php', 'dropdown');" onclick="$('#section-5').animatescroll({scrollSpeed:1000,});" class="click"><strong>Register</strong></a>
                                                    </p><div class="12u">
                                           
                                                <div id="dropdown" class="dropdown"></div>
						<div id="exit" class="exit"></div>
                                          </div>
					<!-- Nav -->
						<!--<nav id="nav">
							<ul>
								<li><a class="icon fa-home" onclick="$('#section-1').animatescroll({scrollSpeed:1000,});"><span>Login &amp; Registration</span></a></li>
								<li><a class="icon fa-cog" onclick="$('#section-2').animatescroll({scrollSpeed:1000,});"><span>About Us</span></a></li>
								<li><a class="icon fa-retweet" onclick="$('#section-3').animatescroll({scrollSpeed:1000,});"><span>Tools</span></a></li>
								<li><a class="icon fa-sitemap" onclick="$('#section-4').animatescroll({scrollSpeed:1000,});"><span>Contact Info</span></a></li>
							</ul>
						</nav>-->
                                                <p></p>
                                                <div class="row">
                                                <div class="12u">
                                                <form class="loginform" method="post" action="index.php" name="loginform">
                                                   <div class="row">
                                                        <div class="3u"><br></div>
                                                             <div class="6u">
                                                                 <input id="user_name" type="text" name="user_name" placeholder="<?php echo WORDING_USERNAME; ?>" required />
                                                                 <br>
                                                                 <input id="user_password" type="password" name="user_password" autocomplete="off" placeholder="<?php echo WORDING_PASSWORD; ?>" required />
                                                             
                                                              <div id="message"> <?php
                                                                // show potential errors / feedback (from login object)
                                                                if (isset($login)) {
                                                                    if ($login->errors) {
                                                                        foreach ($login->errors as $error) {
                                                                            echo $error;
                                                                        }
                                                                    }
                                                                    if ($login->messages) {
                                                                        foreach ($login->messages as $message) {
                                                                            echo $message;
                                                                        }
                                                                    }
                                                                }
                                                                ?>
                                                                
                                                                <?php
                                                                // show potential errors / feedback (from registration object)
                                                                if (isset($registration)) {
                                                                    if ($registration->errors) {
                                                                        foreach ($registration->errors as $error) {
                                                                            echo $error;
                                                                        }
                                                                    }
                                                                    if ($registration->messages) {
                                                                        foreach ($registration->messages as $message) {
                                                                            echo $message;
                                                                        }
                                                                    }
                                                                }
                                                                ?></div></div>
                                                        <div class="3u"><br></div>
                                                   </div>
                                                   <div class="row">
                                                        <div class="5u"><br></div>
                                                        <div class="4u">
                                                          
                                                                    <label for="user_rememberme">Remember me<input type="checkbox" id="user_rememberme" name="user_rememberme" value="1" /></label>
                                                                
                                                        </div>
                                                        <div class="3u"><br></div>
                                                   </div>
                                                    <input type="submit" name="login" value="<?php echo WORDING_LOGIN; ?>" />
                                                    
                                                </form>
                                                    
                                                 <div  id="section-5"></div>
                                                <a href="password_reset.php"><strong>Forgot Password</strong></a>
                                              </div>
                                                </div>
                                          </div>
                                             
                                    </div>
                       
                                </div>
                           </div> 
			


<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Open Threat Managment</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="../js/ajax.js"></script>
		<script src="../js/jquery.min.js"></script>
		<script src="../js/jquery.scrolly.min.js"></script>
		<script src="../js/jquery.scrollzer.min.js"></script>
	
		<script src="../js/skel.min.js"></script>
		<script src="../js/skel-layers.min.js"></script>
		<script src="../js/init.js"></script>
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="../css/skel.css" />
			<link rel="stylesheet" href="../css/style.css" />
			<link rel="stylesheet" href="../css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="../css/ie/v8.css" /><![endif]-->
		
<script>
var $div = $('.dropdown');
var height = $div.height();
$div.hide().css({ height : 0 });

$('.click').click(function () {
  if ( $div.is(':visible') ) {
    $div.animate({ height: 0 },{ duration: 3000, complete: function () {
        $div.hide();
      } 
    });
  } else {
    $div.slideDown('slow').animate({ height : height }, { duration: 3000 });
  }
    
  return false;
});	
</script>
<script>
  $(document).ready(function() {              
  $(".click").click(function() {
    
        if ($(".dropdown").is(':visible'))
            $(".dropdown").slideUp().delay(300);
            
  });
            $(".click").click(function() {    
            $(".dropdown").slideDown('slow');
            $(".exit").fadeIn('slow');
         
   
    });
    $(".exit").click(function(){
    $(".dropdown").slideUp();
    $(".exit").fadeOut();

});
});
   
</script>

 </head>



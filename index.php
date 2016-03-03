<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$maintenance = file_get_contents("udrzba/status.txt");
$ip=$_SERVER["REMOTE_ADDR"];
$whitelist = file_get_contents("udrzba/whitelist.txt");
$whitelist = explode("\n", $whitelist);
if($maintenance == 1 && !in_array($ip,$whitelist)){
	header("Location: /udrzba/");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Chochrun.eu</title>
<link href="http://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css" />
<!-- Included CSS Files -->
<link rel="stylesheet" href="stylesheets/main.css" />
<link rel="stylesheet" href="stylesheets/devices.css" />
<link rel="stylesheet" href="stylesheets/paralax_slider.css" />
<link rel="stylesheet" href="stylesheets/post.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<link rel="stylesheet" href="stylesheets/jquery.fancybox1c51.css?v=2.1.2" type="text/css"  media="screen" />
<!--[if IE]>
<link rel="stylesheet" href="stylesheets/ie.css"> 
<![endif]-->


</head>

<body>

<!--********************************************* Main wrapper Start *********************************************-->
<div id="footer_image">
  <div id="main_wrapper"> 
    
    <!--********************************************* Logo Start *********************************************-->
    <div id="logo"> <a href="/"><img alt="alt_example" src="images/logo.png"  /></a>
      <div id="social_ctn"> 
      
      <a class="social_t"><img alt="alt_example" src="images/social_tleft.png" /></a> 
  
      <a href="#" id="facebook"><img alt="alt_example" src="images/blank.gif" width="100%" height="37px" /></a>  
      <a href="#" id="google_plus"><img alt="alt_example" src="images/blank.gif" width="100%" height="37px" /></a>
      <a href="#" id="you_tube"><img alt="alt_example" src="images/blank.gif" width="100%" height="37px" /></a> 
    
	  <a class="social_t" ><img alt="alt_example" src="images/social_tright.png" /></a> 
      
      </div>
    
    </div>
    <!--********************************************* Logo end *********************************************--> 
    
    <!--********************************************* Main_in Start *********************************************-->
    <div id="main_in"> 
    
    <!--********************************************* Mainmenu Start *********************************************-->
    <div id="menu_wrapper">
      <div id="menu_left"></div>
      <ul id="menu">
        <li><a href="/">Domovská stránka</a></li>
		<li><a href="/novinky">Novinky</a></li>
        <li><a href="/jak-se-pripojit">Jak se připojit na server?</a></li>
        <li><a href="/podminky-sluzby">Podmínky služby</a></li>
        <li><a href="/kontakt">Kontakt</a></li>
          <li><a href="/o-nas">Několik slov o nás</a></li>
      </ul>
        <a href="#" id="pull">Menu</a>
      <div id="menu_right"></div>
      <div class="clear"></div>
    </div>
    
    <!--********************************************* Mainmenu end *********************************************--> 
    
    
	<?php 
		  #remove the directory path we don't want
	$request  = str_replace("/envato/pretty/php/", "", $_SERVER['REQUEST_URI']);
 
	  #split the path by '/'
	  $params = explode("/", $request);
	  $page = $params[1];
	  $file = $page.".php";
	  if(file_exists($file)){
		  include $file;
	  }else{
		  include "domu.php";
	  }

	?>
	
  
  </div>
  <!--********************************************* Main_in end *********************************************--> 
  
  <a id="cop_text" href="#">Webserver: <?= apache_get_version() ?> | Verze PHP: <?= phpversion(); ?></a>
  </div>
</div>
<!--********************************************* Main wrapper end *********************************************--> 

<script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="javascript/jquery.carouFredSel-6.1.0.js" type="text/javascript"></script>
<script src="javascript/jquery.cslider.js" type="text/javascript" ></script> 
<script src="javascript/modernizr.custom.28468.js" type="text/javascript"></script> 
<script src="javascript/getTweet.js" type="text/javascript" ></script> 
<script src="javascript/jquery.fancybox62ba.js?v=2.1.3" type="text/javascript" ></script>
<script src="javascript/snow.js" type="text/javascript"></script>
<script src="javascript/ee.js" type="text/javascript"></script>

<!--******* Javascript Code for the Hot news carousel *******--> 
<script type="text/javascript">
	$(document).ready(function() {
	
		// Using default configuration
		$("#sd").carouFredSel();
		
		// Using custom configuration
		$("#hot_news_box").carouFredSel({
			items				: 3,
			direction			: "right",
			prev: '#prev',
			next: '#next',
			scroll : {
				items			: 1,
				height			: 250,
				easing			: "quadratic",
				duration		: 2000,							
				pauseOnHover	: true
			}	
		});	
	})
</script> 


<!--******* Javascript Code for the Main banner *******--> 
<script type="text/javascript">
	$(function() {
	
		$('#da-slider').cslider({
			autoplay	: true,
			bgincrement	: 450,
            interval	: 7000
		});
	
	});
</script> 

<!--******* Javascript Code for the image shadowbox *******--> 
<script type="text/javascript">
$(document).ready(function() {
	/*
	*  Simple image gallery. Uses default settings
	*/
	
	$('.shadowbox').fancybox();
});
</script>

<!--******* Javascript Code for the menu *******-->

<script type="text/javascript">
    $(document).ready(function() {
        $('#menu li').bind('mouseover', openSubMenu);
        $('#menu > li').bind('mouseout', closeSubMenu);

        function openSubMenu() {
            $(this).find('ul').css('visibility', 'visible');
        };

        function closeSubMenu() {
            $(this).find('ul').css('visibility', 'hidden');
        };
    });
</script>

<script type="text/javascript">
    $(function() {
        var pull    = $('#pull');
        menu 		= $('ul#menu');

        $(pull).on('click', function(e) {
            e.preventDefault();
            menu.slideToggle();
        });

        $(window).resize(function(){
            var w = $(window).width();
            if(w > 767 && $('ul#menu').css('visibility', 'hidden')) {
                $('ul#menu').removeAttr('style');
            };
            var menu = $('#menu_wrapper').width();
            $('#pull').width(menu - 20);
        });
    });
</script>

<script type="text/javascript">
    $(function() {
        var menu = $('#menu_wrapper').width();
        $('#pull').width(menu - 20);
    });
</script>
</body>
</html>

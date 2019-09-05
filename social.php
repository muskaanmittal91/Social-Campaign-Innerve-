<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Responsive -->
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> -->
<link href="css/responsive.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Innerve-IGDTUW</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--   <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/> -->
<link rel="apple-touch-icon" sizes="57x57" href="logo/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="logo/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="logo/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="logo/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="logo/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="logo/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="logo/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="logo/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="logo/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="logo/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="logo/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="logo/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="logo/favicon-16x16.png">    
<script>

	$(document).ready(function(){
	  var mouseX, mouseY;
	  var ww = $( window ).width();
	  var wh = $( window ).height();
	  var traX, traY;
	  $(document).mousemove(function(e){
		mouseX = e.pageX;
		mouseY = e.pageY;
		traX = ((4 * mouseX) / 570) + 40;
		traY = ((4 * mouseY) / 570) + 50;
		console.log(traX);
		$(".title").css({"background-position": traX + "%" + traY + "%"});
  });
});
</script>
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
		<div class="stars"></div>
        <div class="twinkling"></div>
        <div class="clouds"></div>
			<div class="container" style="float: right">
				<div class="row" style="float: right">
					<div class="col-xs-7 .col-sm-7	.col-md-8	.col-lg-8">
					</div>
					<div class="col-xs-3 .col-sm-3	.col-md-3	.col-lg-3">
						<h5 style="color: white;float: right"><?php echo (isset($_SESSION['username']) ? $_SESSION['username'] : ""); ?></h5>
					</div>
						   <div class="col-xs-1 .col-sm-1 .col-md-1	.col-lg-1" >
						   	
						   	<a href="../index.php"><i class="fa fa-times fa-2x" style="float: right;color:blue" aria-hidden="true"></i></a>
                                 </div>

					</div>
				</div>
    
    <div class="container">
	<div class="title" style="text-align:center">SOCIAL  CAMPAIGN</div>
	</div>
	
	
	
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
    <!-- Main Slider -->
    <section class="main-slider style-two default-banner">
    	
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>
                    
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/1.jpg"  data-saveperformance="off"  data-title="Donation is Better"> 
                    <img src="images/1.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption lft tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-24"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="title"><h2><strong >SAMRIDHI</strong></h2></div></div>
                    
          
                    <div class="tp-caption lfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="70"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="line"></div></div>
                    
                    </li>
                    
                    <li data-transition="slideup" data-slotamount="1" data-masterspeed="1000" data-thumb="images/2.jpg"  data-saveperformance="off"  data-title="Donation is Better"> 
                    <img src="images/2.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption lfl tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-24"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"></div>
                    
                    <div class="tp-caption lfb tp-resizeme"
                    data-x="center" data-hoffset="-80"
                    data-y="center" data-voffset="110"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"></div>
                    
                    <div class="tp-caption lfb tp-resizeme"
                    data-x="center" data-hoffset="80"
                    data-y="center" data-voffset="110"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"></div>
                    
                    
                    </li>
                    
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/3.jpg"  data-saveperformance="off"  data-title="Donation is Better"> 
                    <img src="images/15.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption lfr tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-24"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"></div>
                    
                    
                    <div class="tp-caption lfb tp-resizeme"
                    data-x="center" data-hoffset="-80"
                    data-y="center" data-voffset="110"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"></div>
                    
                    <div class="tp-caption lfb tp-resizeme"
                    data-x="center" data-hoffset="80"
                    data-y="center" data-voffset="110"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"></div>
                    
                    
                    </li>
                    
                    
                    
                </ul>
                
            	
            </div>
        </div>
    </section>
    
    
    
    <!--Tri Column Fluid-->
    <section class="tri-column-fluid">
    	<div class="tri-column-outer clearfix">
        	
            <!--Column-->
            <article class="column default-column">
            	<div class="pattern-layer"></div>
                
                <div class="column-inner">	
                    
                    <h4>At Innerve, while practical knowledge is meant to be uncompromising, we believe in promoting human welfare and social reforms for creating a better world and to
 reach those in need.Henceforth, Innerve'18 is delighted to introduce for the first time its social awareness campaign. </h4>
                    
                </div>
            </article>
            
            <!--Carousel Column-->
            <article class="column carousel-column" style="background-image:url('images/5.jpg');">
            	<div class="pattern-layer"></div>
                
                <div class="column-inner">
                	
                    <h4>While Menstrual cycle is considered a taboo in 
						Indian Society, we aim at removing the stigma around menstruation with our campaign named “SAMRIDHI”, which is<br>
						S — SANITATION<br>
						A — AWARENESS ON<br>
						M—MENSTRUAL<br>
						R — ROUTINES<br>
						I —  INSISTING ON<br>
						D – DAILY<br>
						H – HYGIENE BY<br>
						I – INNERVE FOR WOMEN</h4>
                    
                </div>
                
            </article>
            
            <!--Progress Column-->
            <article class="column progress-column">
            	<div class="pattern-layer"></div>
                
                <div class="column-inner">	
                    
                    <h4>An initiative to impart knowledge regarding menstruation, maintaining personal hygiene and in breaking the vicious cycle of menstrual taboos.
 We hope to not only give knowledge but radiate confidence that women can truly do anything, period.</h4>
                    
                   
                </div>
            </article>
            
        </div>
    </section>
    
    <!--Two Column-->
    <section class="two-column no-padd-bottom">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Text Column-->
                <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                	<div class="text-column">
                    	<div class="sec-title">
                        	<h2 style="color:white"><strong>Become a part of the world</strong></h2>
                        </div>
                        <div class="text">
                        	<p style="color:white">Awareness is the key to transformation. Hence, Innerve'18 joined hands with Rahnuma- The Dramatics Society of IGDTUW and 
							took applauded initiative to educate the school girls about "Menstrual Hygiene". Under the banner of SAMRIDHI, 
							a play was organized to make them aware of the 'Natural Period' of every woman's life. This answered many queries and 
							doubts that are caged in a girl's mind, behind the bars of taboo that society holds. Innerve would like to thank Rahnuma 
							for giving this Social Campaign a sharp expression.</p>
							</div>
                        <br>
                        
                    </div>
                </div>
                
                <!--Video Column-->
                <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                	<div class="responsive-video">
                    	<iframe height="300" width = "100%" allowfullscreen="" src="images/VID-20180922-WA0010.mp4"></iframe>
                    </div>
                </div>
            
            
            </div>
        </div>
    </section>
    
    <!--Four Column / Current Projects-->
    <section class="four-column current-projects no-padd-top">
    	<div class="auto-container">
        	
                        
        	<div class="row clearfix">
            	
                <!--Project Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 column project-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                	<article class="column-inner hvr-float-shadow">
                    	<figure class="image-box">
                        	<img src="images/11.jpg" alt="" >
                        	
                        </figure>
                        
                    </article>
                </div>
                
                <!--Project Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 column project-column wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                	<article class="column-inner hvr-float-shadow">
                    	<figure class="image-box">
                        	<img src="images/8.jpg" alt="">
                        	
                        </figure>
                        
                    </article>
                </div>
                
                <!--Project Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 column project-column wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1000ms">
                	<article class="column-inner hvr-float-shadow">
                    	<figure class="image-box">
                        	<img src="images/9.jpg" alt="" >
                        	
                        </figure>
                        
                    </article>
                </div>
                
                <!--Project Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 column project-column wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1000ms">
                	<article class="column-inner hvr-float-shadow">
                    	<figure class="image-box">
                        	<img src="images/10.jpg" alt="" >
                        	
                        </figure>
                       
                    </article>
                </div>
            
            
            </div>
        </div>
    </section>  
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/rev-plugins.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/fitvids.js"></script>
<script src="js/jquery-parallax.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/validate.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/googlemaps.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var $_Tawk_API={},$_Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/569cfc09aeafd72017dd6ea9/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-15521914-3', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
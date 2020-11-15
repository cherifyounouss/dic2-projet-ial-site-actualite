<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Responsive Metatag -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Page Description and Author -->
<meta name="description" content="Venue - Responsive HTML5 Template">
<meta name="author" content="Square Media">

<!-- Bootstrap CSS  -->
<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" type="text/css" media="screen">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css" media="screen">

<!-- Venue CSS Styles  -->
<link rel="stylesheet" type="text/css" href="/css/style.css" media="screen">

<!-- Revolution Slider CSS Styles  -->
<link href="/css/settings.css" rel="stylesheet" type="text/css" media="screen" />

<!-- Responsive CSS Styles  -->
<link rel="stylesheet" type="text/css" href="/css/responsive.css" media="screen">

<!-- Css3 Transitions Styles  -->
<link rel="stylesheet" type="text/css" href="/css/animate.css" media="screen">
<link rel="stylesheet" type="text/css" href="/css/style2.css" media="screen">

<!-- Color CSS Styles  -->
<link rel="stylesheet" type="text/css" href="/css/colors/blue.css" title="blue" media="screen" />

	<title>Teranga immob</title>
</head>
<body>
	

		@include('layouts/_masternavadmin')
		@yield('slider')
		@yield('content')


	



<script type="text/javascript" src="/js/jquery.js"></script> 
<script type="text/javascript" src="/js/jquery.min.js"></script> 
<script type="text/javascript" src="/js/jquery.migrate.js"></script> 
<script type="text/javascript" src="/js/modernizrr.js"></script> 
<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="/js/jquery.fitvids.js"></script> 
<script type="text/javascript" src="/js/jquery.appear.js"></script> 
<script type="text/javascript" src="/js/jquery.easing-1.3.pack.js"></script> 
<script type="text/javascript" src="/js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="/js/nivo-lightbox.min.js"></script> 
<script type="text/javascript" src="/js/jquery.isotope.min.js"></script> 
<script type="text/javascript" src="/js/count-to.js"></script> 
<script type="text/javascript" src="/js/jquery.textillate.js"></script> 
<script type="text/javascript" src="/js/jquery.lettering.js"></script> 
<script type="text/javascript" src="/js/jquery.nicescroll.min.js"></script> 
<script type="text/javascript" src="/js/jquery.themepunch.plugins.min.js"></script> 
<script type="text/javascript" src="/js/jquery.themepunch.revolution.js"></script> 
<script type="text/javascript" src="/js/custom-revslider.js"></script> 
<script type="text/javascript" src="/js/script.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

   $(".dmodal").click(function(){ 

      var inphide=$(".dmodal").next();
      var valeur=$(this).siblings('input').val();
     $(".idd").attr("value",valeur);
      
    });
      $(".nonactive").click(function(){ 

     $(".nonactive").attr("class","active");
     $(".active").attr("class","nonactive");
      
    });



})

  
</script>

</body>
</html>

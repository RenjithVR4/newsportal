<!DOCTYPE HTML>
<html>
<head>
<title>NewsPortal | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
<!--Custom-Theme-files-->
	<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
	<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"> </script>
<!--/script-->
<script type="text/javascript" src="<?php echo base_url('assets/js/move-top.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/easing.js'); ?>"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>

</head>
<body>
	<!-- header-section-starts -->

	<div class="full">
		<div class="col-md-3 top-nav">
				<a class="" href="<?php echo site_url('home/index'); ?>"><h1>NewsPortal</h1></a>
				<div class="top-menu">
				 <span class="menu"> </span>

				<ul class="cl-effect-16 ">
					<li><a href = "<?php echo site_url('home/index'); ?>" >Home</a></li>
					<li><a href = "<?php echo site_url('user/register'); ?>" >Register</a></li>
					<li><a href = "<?php echo site_url('user/login'); ?>"   >Login</a></li>
					<li><a href = "<?php echo site_url('home/about'); ?>"   >About</a></li>
					<li><a href = "<?php echo site_url('home/contact'); ?>"  >Contact us</a></li>
				</ul>
				<!-- script-for-nav -->
				<script>
					$( "span.menu" ).click(function() {
					  $( ".top-menu ul" ).slideToggle(300, function() {
						// Animation complete.
					  });
					});
				</script>
			<!-- script-for-nav -->
				<ul class="side-icons">
						<li><a class="fb" href="#"></a></li>
						<li><a class="twitt" href="#"></a></li>
						<li><a class="goog" href="#"></a></li>
						<li><a class="drib" href="#"></a></li>
				   </ul>
		    </div>
		 </div>

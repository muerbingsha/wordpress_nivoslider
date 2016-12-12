<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta http-equiv="content-type" content="type:text/html;charset:<?php bloginfo('charset');?>" />
		<meta name="viewport" content="width:device-width;user-scalable:no;maximum-scale:1.0" />
		<meta name="description" content="This theme is a practise for nivo-slider"/>
		<meta name="keywords" content="wordpress-plugin nivo-slider" />
		<title><?php bloginfo('name');echo " | ";bloginfo('description');?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/nivo-slider.css" media="screen"/>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.1.min.js" ></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.nivo.slider.js" ></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.nivo.slider.pack.js" ></script>
		
		<div id="slider" class="nivoSlider">
			<img src="<?php echo get_template_directory_uri(); ?>/images/nemo.jpg" data-thumb="<?php get_template_directory_uri(); ?>/images/nemo.jpg" alt="" />
			<img src="<?php echo get_template_directory_uri(); ?>/images/toystory.jpg" data-thumb="<?php get_template_directory_uri(); ?>/images/nemo.jpg" alt="" />
			<img src="<?php echo get_template_directory_uri(); ?>/images/up.jpg" data-thumb="<?php get_template_directory_uri(); ?>/images/nemo.jpg" alt="" />
			<img src="<?php echo get_template_directory_uri(); ?>/images/walle.jpg" data-thumb="<?php get_template_directory_uri(); ?>/images/nemo.jpg" alt="" />
		</div>
		<script type="text/javascript">
		$(window).load(function() {
		$('#slider').nivoSlider({
		effect: 'random',
		slices: 15,
		boxCols: 8,
		boxRows: 4,
		animSpeed: 500,
		pauseTime: 3000,
		startSlide: 0,
		directionNav: true,
		controlNav: true,
		controlNavThumbs: false,
		pauseOnHover: true,
		manualAdvance: false,
		prevText: 'Prev',
		nextText: 'Next',
		randomStart: false,
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){},
		lastSlide: function(){},
		afterLoad: function(){}
		});
		});
		</script>
		</script>
	</head>
</html>
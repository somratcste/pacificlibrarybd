<!DOCTYPE html>
<head>
   <title>
       <?php bloginfo('name'); ?>
	</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <link href="<?php echo  get_template_directory_uri(); ?>/css/menu-second.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="<?php echo  get_template_directory_uri(); ?>/css/iconic.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="<?php echo  get_template_directory_uri(); ?>/js/prefix-free.js"></script>
	<link rel="stylesheet" href="<?php echo  get_template_directory_uri(); ?>/scroll-style.css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>

<script>
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
	  
<?php wp_head(); ?>

</head>
<div id="top"></div>
<body>

<div id="wrapper">
  <a id="toTop" href="#top"></a>

   <div class="header">
    <div class="top-left"> 
	     <a href="<?php bloginfo('home'); ?>"><div class="logo"> 
		    <img src="<?php echo  get_template_directory_uri(); ?>/images/logo.jpg"/>
		 </div></a> <!-- logo -->
	 </div> <!-- topleft -->
      <div class="top-right"> 
	      <div class="help-line clear">
		       <span class="para">Hotline : </span>
			 <span class="number">01823-542994</span>
		  </div> <!-- helpline -->
		    <div class="search clear"> 
			   <form id="searchForm" method="post">
					<fieldset>		

					 <form method="get" id="searchform" action="<?php echo home_url(); ?>/">
							<input type="text" value="<?php esc_attr_e( 'Search', 'brightpage' ); ?>" name="s" id="s" onfocus="if (this.value == '<?php esc_attr_e( 'Search', 'brightpage' ); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php esc_attr_e( 'Search', 'brightpage' ); ?>';}" />
							<input type="submit" id="submitButton" value="<?php esc_attr_e( 'Search', 'brightpage' ); ?>" />
							<input type="hidden" name="post_type" value="post">
					</form>					
																		   
					</fieldset>
				</form>
			</div> <!-- search -->
	   </div> <!-- top-right  -->  
       <div class="menu-sec">
				  <nav>
				<ul class="menu-second">
					<li><a href="<?php bloginfo('home'); ?>"><span class="iconic home"></span> Home</a></li>
					<li><a href="http://pacificlibrarybd.com/subject"><span class="iconic plus-alt"></span>Subject</a>
					
					</li>
					<li><a href="http://pacificlibrarybd.com/authors"><span class="iconic magnifying-glass"></span>Author's</a>
						
					</li>
					<li><a href="http://pacificlibrarybd.com/publishers"><span class="iconic map-pin"></span>Publisher's</a>
						
					</li>
					<li><a href="#"><span class="iconic mail"></span> Contact</a></li>
				</ul>
				<div class="clearfix"></div>
			</nav>
	   </div>
      	 
      </div> <!-- header -->  
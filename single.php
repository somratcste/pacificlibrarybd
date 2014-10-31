<?php get_header(); ?>
  
	  <div class="content">  
	      <div class="main-content">
		   	  
		  <div class="full-body-wrapper">
		 
		  
				 <?php if(have_posts()) : ?>
<?php while(have_posts())  : the_post(); ?>

			   <div class="full-body-header-wrapper">
               <span id="header-wrapper-link">
			   <div class="menu-holder">
			     <ul>
				 <li><a href="#"><?php the_category(','); ?></a></li> 
				
				 
			
				 </ul>
				 </div> <!--menu holder-->
				 </span>
				   <div class="deal-top-wrapper">
                    <div class="deal-top-left-wrapper">
					  <div class="image-thumbail-wrapper">
                      <?php the_post_thumbnail('single-image', array('class' => 'post-thumb')); ?>
					   </div>
					   
					    
					</div> <!--deal top left wrapper-->
		
	  <div class="deal-top-right-wrapper">
                         <div class="page-product-name-header"> 
						         <?php the_title(); ?>		
						 </div>
							<div class="page-product-short-des">
									<?php echo get_post_meta($post->ID, 'Author', true);?>
							 </div>
							<div class="DealDetailsTextWrappar">
								 <div class="page-product-price">Price: <?php echo get_post_meta($post->ID, 'Price', true);?> Tk.</div>
								 <div class="page-market-price">Market Price: <?php echo get_post_meta($post->ID, 'Market Price', true);?> Tk.</div>
								 <div class="page-market-price">Discount: <?php echo get_post_meta($post->ID, 'Discount', true);?> Tk.</div>
								 <div class="page-market-price">Deal Code: <?php echo get_post_meta($post->ID, 'Deal Code', true);?> </div>
							</div>
						
						 <div class="DealDetailsBuyButton">
							<div class="deal_purchase_wrapper">
								   <div><a id="BuyCoupon" class="deal_buy_button_text" href="#">Order Here </br>01823-542994</a></div>
							 </div><!--End of deal_purchase_wrapper -->
						   </div> <!--DealDetailsBuyButton-->
					           </div> <!--deal top right wrapper-->
						 <div class="Highlightsenglish clear">
						  <hr>
							<p><?php the_content(); ?></p>
							</div> <!--highlightsenglish-->
						
	   
<?php endwhile; ?>

<?php else : ?>
	<h3><?php _e('404 Error&#58; Not Found'); ?></h3>
<?php endif; ?>
					
					   
		 
					 
					 <div class="deal-bottom-wrapper">
				  <div class="deal-bottom-left-wrapper">
				    <div class="all-title">
					   Order, Delivery &amp; Cash in.
					
					
					<div class="highlightsenglish">
						 <ul>
						    <li>You can give us oder in online or telephone (01823 3875185/09612 007007).</li>
							<li>Across the country,home delivery (Delivery Charge Tk 40 in Dhaka,50 Tk out of the Dhaka.) </li>
							<li>Cash-on-delivery is applicable in Dhaka, Chittagong and Sylhet.</li>
							<li> Dhaka, Chittagong and Sylhet city to pay in advance if you want to take delivery of
     Visa/Master Card,DBBL debit/credit card or you can pay through the development.</li>
							<li>Dhaka, Chittagong and Sylhet city closest to your area outside of the delivery of goods to the office to receive a courier service may be</li>
							</ul>
						</div> <!--highlightsenglish-->
					 </div> <!--all title-->
					 
					 <div class="all-title">
                        Rules
					<div class="highlightsenglish">
						 <ul>
						    <li>This offer is only applicable to consumers in achinto.com of the registered </li>
							<li>If lost or damaged goods received immediately contact us.</li>
							</ul>
							</div> <!--highlightsenglish-->
					 </div> <!--all title-->
					 
					 <div class="all-title">
                       Order By Phone : 
					<div class="highlightsenglish">
						 <ul>
						    <img src="<?php echo  get_template_directory_uri(); ?>/images/orderbyphone.png">
							
							</ul>
							</div> <!--highlightsenglish-->
					 </div> <!--all title-->
					
				   </div>
				 </div>
					
				 </div> <!-- deal top wrapper -->

			</div> <!--full body header wrapper -->	 
		  
          <div class="brand"> </div> <!-- brand -->
	 </div>
		  
		  		  
          <div class="brand"> </div> <!-- brand -->
		
	 </div> <!-- main content -->

         <?php get_template_part('left_sidebar_home'); ?>       

        </div> <!-- content  -->
  
       <?php get_footer(); ?> 
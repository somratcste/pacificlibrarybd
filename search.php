<?php get_header(); ?>
  
	  <div class="content">  
	      <div class="main-content">
		   	  
		  <div class="full-body-wrapper">
				<div class="latest_from_category">
					
					
						<h2 class="latest_frm_cat_title archive_title"><?php printf( __( 'Search Results for: %s', 'brightpage' ), '<span>' . get_search_query() . '</span>' ); ?></h2>	
						
						
					
						<?php if(have_posts()): ?>
					<?php while(have_posts()): the_post(); ?>

									<div class="deal-content">
										<?php the_post_thumbnail('post-image', array('class' => 'post-thumb')); ?>		   
									   <p class="product-name clear"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
									   <p class="product-price clear">Price:<?php echo get_post_meta($post->ID, 'Price', true);?></p>
									   <p class="product-view clear"><a href="#">See More Related Books</a></p>
									</div>
						
					<?php endwhile; ?>

					<?php else : ?>
						<?php get_template_part('404'); ?>
					<?php endif; ?>												
					</div>
			</div> <!--full body header wrapper -->	 
		
		</div> <!-- main content -->
  

        </div> <!-- content  -->
  
       <?php get_footer(); ?> 
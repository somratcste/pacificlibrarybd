<div class="deal clear"> 
				<h2>Microbiology</h2>
				<hr />

<?php if(!is_paged()){ ?>
<?php
	$args = array( 'post_type' => 'post','category_name' => 'Microbiology', 'posts_per_page' => 4 );
	$loop = new WP_Query( $args );
?>
<?php while( $loop->have_posts()): $loop->the_post(); ?>

<div class="deal-content">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-image', array('class' => 'post-thumb')); ?></a>			   
				   <p class="product-name clear"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
				   <p class="product-price clear">Price: <?php echo get_post_meta($post->ID, 'Price', true);?> Tk.</p>
				   <p class="product-view clear"><a href="#">See More Related Books</a></p>
				</div>
		
	
<?php endwhile; ?>
<?php wp_reset_query(); ?>
<?php } ?>



	</div> <!--  deal -->
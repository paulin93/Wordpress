	<?php get_header(); ?>
	<div id="ktMain">
	<div class="container">
		<div class="row">
		  <div class="col-md-8">
			<div class="row">
			<div class="col-md-12">
				   <p id="kt-latest"><?php _e('Latest <span>Posts</span>', 'greekrestaurant'); ?></p>
				   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				   <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				   <div class="kt-article">
				   <div class="row">
					   <div class="col-md-2 kt-date">
					   <p><?php the_time(get_option('date_format')); ?></p>
					   </div>
					   <div class="col-md-10">
					   <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php 
							$thetitle = get_the_title($post->ID);
							$origpostdate = get_the_date('M d, Y', $post->post_parent);
							$origposttime = get_the_time('M d, Y', $post->post_parent);
							$dateline = $origpostdate.' '.$origposttime;
							//var_dump($thetitle);
							if($thetitle==null){echo $dateline;}else{
							the_title();                     
							}
						?></a></h1>
						<p><?php _e('Posted by', 'greekrestaurant'); ?> <?php the_author_posts_link() ?>, <a href="<?php comments_link(); ?>"><?php comments_number( 'no responses', 'one response', '% responses' ); ?></a></p>
						</div>
					</div>
					<?php if(has_post_thumbnail()) { ?>
					<div class="row">
						<div class="col-md-5">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail();  ?></a>
						</div>
						<div class="col-md-7">
						<?php the_excerpt(); ?>
						
						<div class="clearfix"></div>
						<?php if(get_post_meta($post->ID, 'ketchupthemes_price', true))  : ?>
						<div class="kt-divider clearfix"></div>
						<p class="kt-price"><?php _e('Price: ', 'greekrestaurant'); echo get_post_meta($post->ID, 'ketchupthemes_price', true); ?></p>
						<?php endif; ?>
						</div>
					</div> 
					<?php } else { ?>
					<div class="row">
						<div class="col-md-12">
						<?php the_excerpt(); ?>
						
						<div class="clearfix"></div>
						<?php if(get_post_meta($post->ID, 'ketchupthemes_price', true))  : ?>
						<div class="kt-divider clearfix"></div>
						<p class="kt-price"><?php _e('Price: ', 'greekrestaurant'); echo get_post_meta($post->ID, 'ketchupthemes_price', true); ?></p>
						<?php endif; ?>
						</div>
					</div> 
					<?php } ?>
				  </div> 
				  </div>
				  <?php endwhile; else: ?>
				  <p><?php _e('Sorry, no posts matched your criteria.', 'greekrestaurant'); ?></p>
				  <?php endif; ?>
				  
				 
			  
			</div>
			</div>
			
			<div class="clearfix"></div>
			
			<div id="kt-pagination">
				<div class="alignleft"><?php previous_posts_link(__( '&laquo; Newer posts', 'greekrestaurant' )) ?></div>
				<div class="alignright"><?php next_posts_link(__( 'Older posts &raquo;', 'greekrestaurant' )) ?></div>
			</div>
		  </div>
		  <?php get_sidebar(); ?>
		</div>
	</div>
	</div>
	<?php get_footer(); ?>   
<?php get_header(); ?>

	<div id="wrap">
		
		<div id="title">
		<a href="/">herrhorn</a>
		</div>

		<div id="navigation">
		
		<?php wp_nav_menu( array( 'theme_location' => 'top-menu' )); ?>
		
		</div>
		
		<div id="main">
		
			<?php 
			if (have_posts() ) : 
				while (have_posts() ) : 
					the_post(); ?>
		
					<div class="post">
						<div class="page_name">						
						<p><?php the_title(); ?></p>
						</div>
						<?php the_content(); ?>
					</div>
			
				<?php endwhile;
			endif; ?>

		</div>
	
	</div>
			
<?php get_footer(); ?>
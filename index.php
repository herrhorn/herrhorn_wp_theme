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
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
					<?php the_content(); ?>
						<div class="meta">
							<p class="date"><?php the_time('d/m/Y') ?></p>
							<p>|</p>
							<p class="category"><?php the_category(', ') ?></p>
						</div>
					</div>
			
				<?php endwhile;
			endif; ?>

		</div>
	
	</div>
			
<?php get_footer(); ?>
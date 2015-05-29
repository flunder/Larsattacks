<?php get_header(); ?>
	
	<div id="content">
		<section>
			<h2><?php the_title(); ?></h2>
			<div class="copy">
				<?php if (have_posts()) : while (have_posts()) : the_post();?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
		</section>
	</div>
	
<?php get_footer(); ?>
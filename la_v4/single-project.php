<?php get_header(); ?>
	
	<section id="mainSection">

	<div class="container singleProject">	
		<section>
			<h2><?php the_title(); ?></h2>
			<div class="copy">
				<?php if (have_posts()) : while (have_posts()) : the_post();?>
					<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
				<?php endwhile; endif; ?>
			</div>
		</section>
	</div>
	
	</section>	
	
<?php get_footer(); ?>
<?php get_header(); ?>


<!-- Next gen plug in -->
<!-- contact form plug in -->
<!-- div styling -->

<article class="blogcontain_wit" style="display: inline-flex; width: 100%;">
 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



	<article class="section-fixed">
			<div class="article-img">
					<?php the_post_thumbnail('large'); ?>
			</div>

			<div class="article-text">
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
			</div>

	</article>




	<?php endwhile; else: ?>
    <p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

		
	</div>


</article>

<?php get_footer(); ?>


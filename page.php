<?php get_header(); ?>

<header> 
	<div class="home-banner">
				<?php
		if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>

		    <div id="header-widget-area" class="header-widget-area widget-area" role="complementary">
		    <?php dynamic_sidebar( 'custom-header-widget' ); ?>
		    </div>
     
<?php endif; ?>
	</div>
</header>

<h1> <br>  
</h1>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article class="section">
		<div class="col-dk-6 col-md-12 col-sm-12 wrap">
			<div class="legacy-img">
				<?php the_post_thumbnail('large'); ?>
			</div>
		</div>
		
		<div class="col-dk-6 col-md-12 col-sm-12 wrap">
			<div  class="legacy-h2">
				<h2> <?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
		</div>
	<article>

<?php endwhile; else: ?>
    <p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>


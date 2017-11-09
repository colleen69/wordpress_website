<?php get_header(); ?>

<h1> <br>  
</h1>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<div class="col-dk-6 col-md-12 col-sm-12 wrap" style="width: 100%;">
			<div>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
		</div>
	<article>

<?php endwhile; else: ?>
    <p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<style>
		.wrap {
		    max-width: 100%;
		    display: block;
		    margin-left: auto;
		    margin-right: auto;
		    text-align: left;
		    height: 100%;
		    display: flex;
		    flex-wrap: wrap;
		    justify-content: center;
		    padding-bottom: 20px;
		}

		.col-dk-6 {
		    width: 100%;
		}
		.home-banner {
			display: none;
		}
</style>

<?php get_footer(); ?>



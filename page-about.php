<?php get_header(); ?>
	<div class="home-banner">
				<?php
		if ( is_active_sidebar( 'custom-header-widget-about' ) ) : ?>

		    <div id="header-widget-area" class="header-widget-area widget-area" role="complementary">
		    <?php dynamic_sidebar( 'custom-header-widget-about' ); ?>
		    </div>
     
		<?php endif; ?>
	</div>

<h1> <br>  
</h1>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article class="section-fixed">
			<div class="article-img">
					<img src= <?php echo wp_get_attachment_url(get_theme_mod('wit_about_article_top_img')) ?>>
			</div>

			<div class="article-text">
					<h2><?php echo get_theme_mod('wit_about_article_top_headline') ?></h2>
					<p><?php echo wpautop(get_theme_mod('wit_about_article_top_text')) ?></p>
			</div>

	</article>

	<article class="section-fixed">
			<div class="article-img">
					<img src= <?php echo wp_get_attachment_url(get_theme_mod('wit_about_article_middle_img')) ?>>
			</div>

			<div class="article-text">
					<h2><?php echo get_theme_mod('wit_about_article_middle_headline') ?></h2>
					<p><?php echo wpautop(get_theme_mod('wit_about_article_middle_text')) ?></p>
			</div>

	</article>

	<article class="section-fixed">
			<div class="article-img">
					<img src= <?php echo wp_get_attachment_url(get_theme_mod('wit_about_article_bottom_img')) ?>>
			</div>

			<div class="article-text">
					<h2><?php echo get_theme_mod('wit_about_article_bottom_headline') ?></h2>
					<p><?php echo wpautop(get_theme_mod('wit_about_article_bottom_text')) ?></p>
			</div>

	</article>

<?php endwhile; else: ?>
    <p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>

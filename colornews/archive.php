<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ThemeGrill
 * @subpackage ColorNews
 * @since ColorNews 1.0
 */
get_header(); ?>

   <?php do_action( 'colornews_before_body_content' ); ?>

   <div id="main" class="clearfix">
      <div class="tg-container">
         <div class="tg-inner-wrap clearfix">
            <div id="main-content-section clearfix">
               <div id="primary">

            		<?php if ( have_posts() ) : ?>

            			<header class="page-header">
            				<?php
            					colornews_archive_title( '<h1 class="page-title">', '</h1>' );
            					colornews_archive_description( '<div class="taxonomy-description">', '</div>' );
            				?>
            			</header><!-- .page-header -->

            			<?php /* Start the Loop */ ?>
            			<?php while ( have_posts() ) : the_post(); ?>

            				<?php

            					/*
            					 * Include the Post-Format-specific template for the content.
            					 * If you want to override this in a child theme, then include a file
            					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
            					 */
            					get_template_part( 'template-parts/content', get_post_format() );
            				?>

            			<?php endwhile; ?>

            			<?php colornews_posts_navigation(); ?>

            		<?php else : ?>

            			<?php get_template_part( 'template-parts/content', 'none' ); ?>

            		<?php endif; ?>

         		</div><!-- #primary end -->
               <?php colornews_sidebar_select(); ?>
            </div><!-- #main-content-section end -->
         </div><!-- .tg-inner-wrap -->
      </div><!-- .tg-container -->
   </div><!-- #main -->

   <?php do_action( 'colornews_after_body_content' ); ?>

<?php get_footer(); ?>

<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php if ( have_posts() ) : ?>

	<header class="page-header">
		<?php
				the_archive_title( '<h2 class="page-title">', '</h2>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
	</header><!-- .page-header -->

	<section class="galerie">

		<?php
			/* Start the Loop */
			
			while ( have_posts() ) :
				the_post();?>

				<div>
                <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('thumbnail');?></a>
               </div>
			   <?php endwhile; ?>

    </section>

	     <?php endif; ?>
	
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
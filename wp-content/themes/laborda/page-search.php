<?php
/**
 * Template Name: Search Page
 */

get_header();
?>

<div class="container">
	<div class="row">
		<section id="primary" class="content-area col-12 col-md-8 offset-md-2">
			<main id="main" class="site-main">
				<header class="page-header mb-4">
					<h1 class="page-title">
						<?php the_title() ?>
					</h1>
					<?php get_search_form(); ?>
				</header><!-- .page-header -->

				<?php
					while ( have_posts() ) :
						the_post();
						the_content();
					endwhile;
				?>
			</main><!-- #main -->
		</section><!-- #primary -->
	</div><!-- .row -->
</div><!-- .container -->

<?php if ( get_field( 'jumbo_show' ) ) : ?>
	<div class="container-jumbo">
		<div class="container container-content">
			<?php get_template_part( 'template-parts/content', 'jumbo-guia' ); ?>
		</div><!-- .container -->
	</div><!-- .container-jumbo -->
<?php endif; ?>

<?php
get_footer();

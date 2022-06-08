<?php get_header( longriver_template_base() ); ?>

	<?php longriver_site_breadcrumbs(); ?>

	<div <?php longriver_content_wrap_class(); ?>>

		<div class="row">

			<div id="primary" <?php longriver_primary_content_class(); ?>>

				<main id="main" class="site-main" role="main">

					<?php include longriver_template_path(); ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- .container -->

<?php get_footer( longriver_template_base() ); ?>

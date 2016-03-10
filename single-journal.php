<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="single-post" role="main" class="row">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article class="journal-single clearfix" id="post-<?php the_ID(); ?>">
		
		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		

		<?php if ( has_post_thumbnail() ) : ?>

				<div class="column">
					<?php the_post_thumbnail( '', array('class' => 'th') ); ?>
				</div>

		<?php endif; ?>

		<div class="large-12 columns">

			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php foundationpress_entry_meta(); ?>
			</header>

			<?php the_content(); ?>
			
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>

		</div>

	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer(); ?>

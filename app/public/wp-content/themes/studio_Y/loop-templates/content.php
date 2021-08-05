<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">



	</header><!-- .entry-header -->


	<div class="entry-content">
		
	
		<div class="row content-block">
			<div class="col-lg-4 post-thumbnail">
				<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
			</div>
				
			<div class="col-lg-8">
				<?php
					the_title(
						sprintf( '<h2 class="content-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
						'</a></h2>'
					);
					?>
					<?php if ( 'post' === get_post_type() ) : ?>
						<!-- <div class="entry-meta">
								<?php understrap_posted_on(); ?>
						</div> -->
						
						<!-- .entry-meta -->
					<?php endif; ?>
					<br>
					<?php the_excerpt(); ?>

			</div>
		</div>

	</div><!-- .entry-content -->


</article><!-- #post-## -->

<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Landlistening_PDX
 */
$featured_imgs = get_the_post_thumbnail_url(get_the_ID(),'full'); 
$img_url = $featured_imgs[0];
?>
<script>
    console.log(<?= json_encode($post); ?>);
</script>
content.php
<section id="post-<?php the_title(); ?>" <?php post_class(); ?>  role="page" style="background: url('<? echo $img_url;  ?>'); ">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' );?>
	</header><!-- .entry-header -->

	<?php landlistening_pdx_post_thumbnail(); ?>

	<div class="entry-content">
			
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'landlistening-pdx' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'landlistening-pdx' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
</section><!-- #post-<?php the_ID(); ?> -->

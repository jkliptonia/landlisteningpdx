<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Landlistening_PDX
 */
?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');?>
<script>
    console.log(<?= json_encode($backgroundImg); ?>);
</script>
content.php
<section id="post-<?php the_title(); ?>" <?php post_class(); ?>  role="page" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">
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

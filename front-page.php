<?php get_header();?>
<article>
	<h1>article heading</h1>
	<?php if(have_posts()) : while(have_posts()) : the_post();?>
	<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2><?php the_title();?></h2>
		<?php the_content();?>
	</section>
	<?php endwhile; else : ?>
	no post
	<?php endif;?>
</article>
<?php get_footer();?>
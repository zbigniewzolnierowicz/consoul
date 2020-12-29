<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage themename
 */

get_header(); ?>

<?php while(have_posts()) : the_post(); ?>

	<article class="post-standalone">
		<section class="post-standalone__data">
			<p class="post-standalone__start"><span class="keyword">const</span> <span class="variable post-standalone__start__title"><?php the_title(); ?></span> = {</a>
			<p class="post-standalone__entry">
				<span class="post-standalone__entry__title">title</span>: <span class="post-standalone__entry__content"><?php the_title(); ?></span>
			</p>
			<p class="post-standalone__entry">
				<span class="post-standalone__entry__title">postedAt</span>: <span class="post-standalone__entry__content"><?php the_time(get_option('date_format')); ?></span>
			</p>
			<p>}</p>
		</section>
		<section class="post-standalone__content">
			<?php the_content(); ?>
		</section>
	</article>
<?php endwhile; ?>

<?php get_footer(); ?>

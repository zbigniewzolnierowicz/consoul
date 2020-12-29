<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage themename
 */

get_header(); ?>

<?php while(have_posts()) : the_post(); ?>
	<article class="post-on-index">
		<a href="<?php the_permalink(); ?>" class="post-on-index__start"><span class="keyword">const</span> <span class="variable post-on-index__start__title"><?php the_title(); ?></span> = {</a>
		<p class="post-on-index__entry">
			<span class="post-on-index__entry__title">title</span>: <span class="post-on-index__entry__content"><?php the_title(); ?></span>
		</p>
		<p class="post-on-index__entry">
			<span class="post-on-index__entry__title">postedAt</span>: <span class="post-on-index__entry__content"><?php the_time(get_option('date_format')); ?></span>
		</p>
		<div class="post-on-index__entry">
			<span class="post-on-index__entry__title">excerpt</span>: `
				<div class="post-on-index__entry__content-excerpt"><?php the_excerpt(); ?></div>
			`
		</div>
		<p>}</p>
	</article>
<?php endwhile; ?>

<?php get_footer(); ?>

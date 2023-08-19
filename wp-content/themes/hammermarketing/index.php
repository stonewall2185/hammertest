<?php get_header(); ?>
	<section id="main_content">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header>
				<div class="date"><?php the_time(__ ( 'M j', 'pbp')); ?> <span><?php the_time( 'y' ); ?></span></div>
				<h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<div class="author"><?php printf(__ ( 'by %s', 'pbp'), get_the_author()); ?></div>
			</header><!--end post header-->
			
			<div class="entry clear">
				<?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail( array(250,9999), array( 'class' => ' alignleft border' )); ?>
				<?php the_content(__( 'read more...', 'pbp')); ?>
				<?php edit_post_link(__( '<div class="social"><i class="fa fa-pencil hoverable"></i></div>', 'pbp')); ?>
				<?php wp_link_pages(); ?>
			</div><!--end entry-->
			
			<footer>
				<div class="comments"><?php comments_popup_link(__ ( 'Leave a comment', 'pbp'), __ ( '1 Comment', 'pbp'), __ngettext ( '% Comment', '% Comments', get_comments_number (),'pbp')); ?></div>
			</footer><!--end post footer-->
			
		</article><!--end post-->
		
		<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
		<div class="navigation index">
			<div class="alignleft"><?php next_posts_link(__ ( '&laquo; Older Entries', 'pbp')); ?></div>
			<div class="alignright"><?php previous_posts_link(__ ( 'Newer Entries &raquo;', 'pbp')); ?></div>
		</div><!--end navigation-->
	</section><!--end main content-->
	
		<?php else : ?>
		<?php endif; ?>
		<?php get_sidebar(); ?>
		
</section><!--end main container-->
<?php get_footer(); ?>
<?php get_header(); ?>
                
<!-- START CONTENT -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="content" class="single">
    <strong class="breadcrumb"><?php if (function_exists('bcn_display')) { bcn_display(); } ?></strong>
        <h2><?php the_title(); ?></h2>     
    <p class="postmetadata">
    	<span class="date">Posted on <?php the_time('F jS, Y') ?></span> in 
		<span class="cat"><?php the_category(', ') ?></span>
		<span class="author">by <?php the_author_posts_link(); ?></span>
        <span class="comments">with <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
    </p>
    <?php the_content('More &raquo;'); ?>
    <p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?>
		<nav class="post-nav">            
			<div class="alignleft"><?php previous_post_link('&laquo; %link', '%title', true) ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;', '%title', true) ?></div>
    </nav>
    
    <?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
	<?php comments_template(); ?>
    <?php endwhile; else: ?>
    <p>Sorry, we can't help you find your posts</p>
    <?php endif; ?>
</div>
<!-- END CONTENT -->

<!-- PRIMARY SIDEBAR -->
<?php get_sidebar('primary'); ?>

<!-- FOOTER -->
<?php get_footer(); ?>

 
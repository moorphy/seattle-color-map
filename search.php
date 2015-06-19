<?php get_header(); ?>



<!-- START CONTENT -->

<div id="content" class="search">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">What We Found:</h2>
    <?php while (have_posts()) : the_post(); ?>
    	<div class="post-box">
    	<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
            
            <!--POST META DATA/ AND POST NAV FROM PAGE.PHP-->
        <p class="postmetadata">
    	<span class="date">Posted on <?php the_time('F jS, Y') ?></span> in 
		<span class="cat"><?php the_category(', ') ?></span>
		<span class="author">by <?php the_author_posts_link(); ?></span>
        <span class="comments">with <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
        </p>
		<?php the_content(); ?>
        
        <nav class="post-nav">            
			<div class="alignleft"><?php previous_post_link('&laquo; %link', '%title', true) ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;', '%title', true) ?></div>
		</nav>
        
        <?php edit_post_link('Edit this entry.', '<p class="clear"><small>', '</small></p>'); ?>
	</div>
    <?php endwhile; ?>

	<?php else : ?>
		<h2>Sorry, Neighbor</h2>
    <br />
        <h4>We couldn't find anything matching your request</h4>
        <h4>Why don't you give it another shot in the search bar to the right -></h4>
    <br />
        <h4>-MGMT</h4>

	<?php endif; ?>
		
</div>
<!-- END CONTENT -->
<!-- START SIDEBAR -->
<?php get_sidebar('primary'); ?>
<!-- END SIDEBAR -->
<?php get_footer(); ?>
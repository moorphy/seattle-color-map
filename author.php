<?php get_header(); ?>



<div id="content" class="author">

    
<!-- Create variable for the Creator of Post -->
        <?php
          if(isset($_GET['author_name'])) : $postAuthor = get_userdatabylogin($author_name);
          else : $postAuthor = get_userdata(intval($author));
          endif;
        ?>
<?php

    if(isset($_GET['author_name'])) :
        $postAuthor = get_userdatabylogin($author_name);
    else :
        $postAuthor = get_userdata(intval($author));
    endif;
    ?>
    
    <!--INFORMATION ABOUT THE AUTHOR-->
    
    <h2>About: <?php echo $postAuthor->nickname; ?></h2>
    <dl>
        <dt>Website: </dt>
        <dd><a href="<?php echo $postAuthor->user_url; ?>"><?php echo $postAuthor->user_url; ?></a></dd>
        <dt>Profile: </dt>
        <dd><?php echo $postAuthor->user_description; ?></dd>
    </dl> 
        <!--END INFORMATION ABOUT THE AUTHOR-->
        
        
        
<!-- LOOP FOR POSTS BY AUTHOR-->
<?php if (have_posts()) : ?>
    
		<h2>By: <?php the_author(); ?></h2>

    <?php while (have_posts()) : the_post(); ?>
    	<div class="post-box">
    	<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
        <p class="postmetadata">
            <span class="date">Posted on <?php the_time('F jS, Y') ?></span> in 
            <span class="cat"><?php the_category(', ') ?></span>
        </p>
		<?php the_excerpt(); ?>
        </div><!-- DIV CLASS .post-box -->
    <?php endwhile; ?>

    
	<?php else : ?>
        <!--NO POST FOUND BY AUTHOR-->
        <p>Sorry, we were unable to find posts by <?php echo $postAuthor->display_name; ?></p>
    <?php endif; ?>
<!-- End Loop -->

</div><!-- END CONTENT -->


<!-- START SIDEBAR -->
<?php get_sidebar('primary'); ?>
<!-- END SIDEBAR -->
    
    
<?php get_footer(); ?>
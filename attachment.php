<?php get_header(); ?>




<div id="content" class="attachment">
    <strong class="breadcrumb"><?php if (function_exists('bcn_display')) { bcn_display(); } ?></strong>
    
            <?php if (have_posts()) : while (have_posts()) : the_post(); //LOOP ?>
            <?php $attachment_link = get_the_attachment_link($post->ID, true, array(523, 1000)); // Populates size for the next line ?>
            <?php $_post = &get_post($post->ID); $classname = ($_post->iconsize[0] <= 50 ? 'small' : '') . 'attachment'; //For Style ?>
    
    
        <h2><?php the_title(); ?></h2>
        <p class="<?php echo $classname; ?>"><?php echo $attachment_link; ?><?php /*echo basename($post->guid);*/ ?></p>
        <?php the_content(); ?>
        <h3>Posted By: <?php the_author();?></h3>
        <h3>Date: <?php the_date();?></h3>
    
        </div>
            
            <nav class="attachment-nav">  
                
                <p id="previous-image" class="alignleft"><?php previous_image_link( false, '&laquo; Previous Image' ); ?></p>
                <p id="next-image" class="alignright"><?php next_image_link( false, 'Next Image &raquo;' ); ?></p>
            </nav>
            
        

        <?php endwhile; else: ?>
        <p>Sorry, the Attachment done gone missing</p>
        <?php endif; ?>
    
</div>
<!-- END CONTENT -->

<?php get_footer(); ?>

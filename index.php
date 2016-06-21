<?php
/**
 * The main template file.
 *
 * @since Kimmia 1.0
 */
 
get_header(); 
if(((is_home() && !is_front_page()) || is_category()|| is_tag() || is_date()) && (intval(get_option('page_for_posts')) > 0) ) {
	//when you use custom page for blog will use the page layout
	$layout = penguin_get_page_layout(get_option('page_for_posts'));
	$sidebar_name = get_post_meta(get_option('page_for_posts'), 'sidebar-type', true);
	if($sidebar_name == ""){$sidebar_name = '0';}
}else{
	// index default will use global layout 
	$layout = penguin_get_page_layout('global'); 
	$sidebar_name = '0';
}
?>

<section class="site-content">
    <div class="container">
        <div class="row-fluid">
        	<?php if($layout == 2) { ?> 
                <div class="span4"><?php generated_dynamic_sidebar($sidebar_name); ?></div>
            <?php } ?>
        	<div class="<?php echo $layout == 1 ? 'span12' : 'span8'; ?>">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() );?>
                <?php 
					endwhile; 
					penguin_content_pagination('nav-bottom' , 'pagination-centered');
				else: ?>
                <article id="post-0" <?php post_class();?> >
                    <p><?php _e('Sorry, this page does not exist.' , 'kimmia' ); ?></p>
                </article>
                <?php endif; ?>
    		</div>
            <?php if($layout == 3) { ?> 
                <div class="span4"><?php generated_dynamic_sidebar($sidebar_name); ?></div>
            <?php } ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
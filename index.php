<?php
/**
 * The main template file.
 *
 * @since Kimmia 1.0
 */
 
get_header(); ?>

<section class="site-content">
    <main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" role="article">

<header class="article-header">
<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
</header>

<section class="entry-content cf">
<?php the_content(); ?>
</section>

</article>

<?php endwhile; ?>

<?php endif; ?>


</main>
</section>

</div><!-- /container -->

<script src="<?php echo THEME_DIR; ?>/js/classie.js"></script>
<script src="<?php echo THEME_DIR; ?>/js/main4.js"></script>

<?php get_footer(); ?>
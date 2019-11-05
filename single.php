<?php get_header();?>

<?php while ( have_posts() ) : the_post(); ?>

<h1 class="post-title"><?php the_title(); ?></h1>

<?php if (has_post_thumbnail($post->ID)): ?>
<div class="featuredimage">
    <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
</div>
<?php endif; ?>
<div class="articlecontent">
    <?php the_content() ?>
</div>

<!-- to include template parts  -->
<?php get_template_part( 'template-parts/article','head' ); ?>

<?php endwhile; ?>

<?php get_footer();?>
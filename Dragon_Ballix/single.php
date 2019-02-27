<?php get_header(); ?>

<?php if ( have_posts() ) : the_post(); ?>
    <section class="content-area content-thin col-md-9" style="float:left; margin-top:50px;">
        <h1><?php the_title(); ?></h1>
        <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?> </time>
        <?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?>
        <?php the_category(); ?>
        <?php the_content(); ?>
        <address>Por <?php the_author_posts_link() ?></address>
        <?php comments_template(); ?>
    </section>
<?php else : ?>
    <p><?php_e('Cuidado pequeño saltamontes, la entrada que buscas no existe.'); ?></p>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

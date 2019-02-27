<?php get_header(); ?>
<p>Resultados de búsqueda para <strong><?php echo get_search_query() ?></strong></p>
<?php if ( have_posts() ) : ?>

<section>
    <?php while ( have_posts() ) : the_post(); ?>
        <article>
            <header>
                <h1> <a href="<?php the_permalink();?>"><?php the_title(); ?></a> </h1>
                <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
                <?php the_category(); ?>    
            </header>
            <?php the_excerpt(); ?>
            <footer>
                <?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?;>
                <address>Por<?php the_author_posts_link() ?></address>
            </footer>
            </article>
        <?php endwhile; ?>
        <div class="">
            <span class=""><?php next_posts_link('Entradas antiguas'); ?></span>
            <span class=""><?php previous_posts_link('Entradas antiguas'); ?></span>
        </div>
       </section>
      <?php else : ?>
        <p><?php_e('No hay ninguna entrada.'); ?></p>
      <?php endif; ?>
      <?php get_sidebar(); ?>
      <?php get_footer(); ?>

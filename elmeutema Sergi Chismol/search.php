<?php get_header();?>
<!--Busqueda-->
<p>Resultados de busqueda para<strong><?php echo get_search_query()?></strong></p>
<!-- Listado de posts -->
<?php if (have_post()):?>
<section>
<?php while (have_posts()):the_post();?>
<article>
<header>
<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
<time datatime="<?php the_time('Y-m-j');?>"><?php the_time('j F,Y');?></time>
</header>
<?php the_excerpt();?>
<footer>
<address>Por<?php the_author_posts_link()?></address>
</footer>
</article>
<?php endwhile;?>
<div class="pagination">
 <span class="in-left"><?php next_posts_lik('<<Entradas antiguas');?></span>
 <span class="in-right"><?php previous_posts_link('Entradas más recientes>>');)></span>
</div>
</section>
<?php else:?>
<p><?php_e('no hay entradas);?></p>
<?php endif;?>
<!--Archivo de barra lateral por defecto -->
<?php get_sidebar();?>
<!--Archivo de pié global de Wordpress -->
<?php get_footer();?>
<header>
<h1><a href="<?php the permalink();?>"><?php the_title();?></a></h1>
<time datatime="<?php the_time('Y-m-j');?>"><?php the_time('j F,Y');?></time>
<?php the_category ();?>
</header>
<footer>
<?php the_tags('<ul><li>','</li><li>','</li></ul>');?>
<address>Por<?php the_author_posts_link()?></address>
</footer>
<?php the_tags('al inicio','al final');?>

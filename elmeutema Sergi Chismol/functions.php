<?php
/**
*Crear nuestros menus gestionables desde el
*administrador de Wordpress.
*/

function mis_menus(){
 register_nav_menus(
  array(
   'navegation'=>_('Menú de navegación'),
   )
  );
 }
add_action('init','mis_menus');
/**
*Crear una zona de widgets que podremos gestionar 
*fácilmente desde administrador de Wordpress.
*/
function mis_widgets(){
 register_sidebar(
  array(
   'name'	=>'Sidebar',
   'id'		=>'sidebar',
   'description'  => 'Descripción de ejemplo',
   'before_widget' => '<div class="widget">',
   'after_widget'  => '</div>',
   'before_title'  => '<h3>',
   'after_title'   => '</h3>',
  )
 );
}
add_action('init','mis_widgets');

/**
*Filtrar resultados de búsqueda para que solo muestre 
*posts en el listado
*/

function buscar_solo_posts($query){
if($query->is_search){
$query->set('post_type','post');
}
return $query;
}
add_filter('pre_gets_posts','buscar_solo_posts');

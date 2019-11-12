<?php 

/**
 * Chargement de feuilles de styles et/ou fichiers javascript
 * Il est possible de charger des ressources internes et externes
 * Voir l'exemple ci-dessous, le chargement de la Google Font Hind
 **/
function my_scripts() {
  // Chargement Google fonts Hind
  wp_enqueue_style('hind-font', 'https://fonts.googleapis.com/css?family=Hind:400,600');

  // Chargement feuille de styles main.css
  wp_enqueue_style('my-styles', get_template_directory_uri() . '/assets/css/main.css', 1.0);

  // Chargement fichier javascript main.js
  wp_enqueue_script('my-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'my_scripts');


/**
 * Déclaration de menus administrables
 * La clef (nav_main par exemple) correspond à l'identifiant du menu
 * On utilisera cet identifiant pour afficher le menu à l'aide de la méthode wp_nav_menu()
 * Vous trouverez un exemple pour le menu principal dans le fichier header.php
 */
register_nav_menus( array(
  'nav_main' => __('Menu principal'),
  'nav_xxx' => __('Menu xxx...'),
  'nav_xyz' => __('Menu xyz...'),
) );

?>
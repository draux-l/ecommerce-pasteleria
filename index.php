<?php
/**
 * The main template file
 *
 * Esta es una plantilla de emergencia para forzar la carga de la página de inicio
 * tras problemas de jerarquía y caché.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dulciela_tema
 */

get_header();

// Incluimos directamente el diseño de la página de inicio.
// Esto ignorará cualquier otra página genérica o loop.
include( get_template_directory() . '/page-home.php' ); 

get_footer();
<?php
/* A mettre dans wp-content/mu-plugins/auto_update.php */


/**
* Must-Use Functions
* * 3 filtres qui activent automatiquement les màj (wordpress / plugins / themes)
* * @package WordPress
* @subpackage auto_update
*/

/*
* Auto màj du wordpress
* Fera les màj mineures (de 4.0.0 -> 4.0.5) et majeures (de 4.05 -> 4.1)
*/
//add_filter( 'allow_major_auto_core_updates', '__return_true' );

/*
* Auto màj du wordpress
* Fera les màj mineures (de 4.0.0 -> 4.0.5) uniquement
*/
add_filter( 'allow_minor_auto_core_updates', '__return_true' );

/*
* Auto màj des plugins
*/
add_filter( 'auto_update_plugin', '__return_true' );

/*
* Auto màj des thèmes
*/
add_filter( 'auto_update_theme', '__return_true' );

/*
* Envoi de mail lors de màj automatique
*
* @param bool $send Si on envoie l'email ou pas. Default true.
* @param string $type Le type d'email à envoyer:
* Peut avoir une de ses valeurs: 'success', 'fail', 'critical'.
* @param object $core_update La màj qui a été tentée.
* @param mixed $result Le résultat pour la màj du Wordpress. Peut-être WP_Error.
*/
//apply_filters( 'auto_core_update_send_email', true, $type, $core_update, $result );
apply_filters( 'auto_core_update_send_email', '__return_true' );

?>

<?php

/**
 * Plugin Name:       Plataforma Covid Brasil CPT
 * Plugin URI:        https://github.com/trydostudio/plataforma-covid-brasil-cpt
 * Description:       Wordpress Custom Post Types to Plataforma Covid Brasil - OPAS/OMS.
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           0.2.0
 * Author:            http://trydo.com.br
 * License:           Unlisenced
 * Text Domain:       pcbcpt
 *
 * @package           pcbcpt
 */

require_once plugin_dir_path(__FILE__) . 'inc/registerCustomPost.php';
require_once plugin_dir_path(__FILE__) . 'inc/routes/searchRoute.php';
require_once plugin_dir_path(__FILE__) . 'inc/filterApi.php';

<?php
/**
 * Plugin Name: CustomFunctions
 * Plugin URI:  https://github.com/ungatech/customfunctions
 * Description: Run custom code snippets normally added to your theme's functions.php allowing for switching themes easily. All functions found in the plugin directory under enabled ending in .php will be loaded.
 * Author:      Traek Malan
 * Author URI:  ungatech.com
 * Version:     1.0.0
 * Text Domain: customfunctions
*/

#include_once for all php files under 'enabled' plugin directory
foreach ( glob( plugin_dir_path( __FILE__ ) . "enabled/*.php" ) as $filename ) {
    include_once $filename;
}

?>

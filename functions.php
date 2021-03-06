<?php
/**
 * PHP methods calling file
 *
 * PHP version 5
 *
 * @category Theme
 * @package  hiwelo-blog
 * @author   Damien Senger <damien@raccoon.studio>
 * @link     https://codex.wordpress.org/Functions_File_Explained
 */

/**
 * Necessary files inclusion :
 * - contants definition file
 * - PSR-4 autoloading system
 */
require_once 'constants.php';
require_once 'vendor/autoload.php';

/**
 * Theme init
 */
$timber = new \Timber\Timber();


/**
 * Custom context for Timber
 *
 * Context additionnal data for Timber::get_context() function
 */
add_filter('timber_context', function ($data) {
    $data['navigations']['blog'] = new TimberMenu('blog');
    $data['navigations']['social'] = new TimberMenu('social');
    $data['site']->logo = get_custom_logo();
    return $data;
});

/**
 * Custom image sizes
 */
add_image_size('article-overview', 1400, 900, true);

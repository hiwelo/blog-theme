<?php
/**
 * Template index file
 *
 * PHP version 5
 *
 * @category Theme
 * @package  hiwelo-blog
 * @author   Damien Senger <damien@raccoon.studio>
 * @link     https://codex.wordpress.org/Template_Hierarchy
 */

$context = Timber::get_context();

Timber::render('layout.twig', $context);

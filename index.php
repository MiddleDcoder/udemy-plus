<?php
/*
 * Plugin Name:       Udemy Plus
 * Plugin URI:        https://udemy.com
 * Description:       A plugin for adding blocks to a theme.
 * Version:           1.0.0
 * Requires at least: 5.9
 * Requires PHP:      7.2
 * Author:            Udemy JLA
 * Author URI:        https://udemy.com
 * Text Domain:       udemy-plus
 * Domain Path:       /languages
 */

 // Make sure we don't expose any info if called directly
if(!function_exists('add_action')) {
    echo 'Seems like you stumbled here by accident. 😛';
    exit;
}
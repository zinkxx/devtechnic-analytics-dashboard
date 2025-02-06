<?php
/**
 * Plugin Name: DevTechnic Google Analytics Dashboard
 * Plugin URI: https://devtechnic.online
 * Description: WordPress admin paneline Google Analytics verilerini entegre eden bir eklenti.
 * Version: 1.0
 * Author: DevTechnic
 * Author URI: https://devtechnic.online
 * License: GPL2
 */

if (!defined('ABSPATH')) {
    exit; // Doğrudan erişimi engelle
}

// Admin paneline menü ekleme
function devtechnic_add_admin_menu() {
    add_menu_page(
        'Analytics Dashboard',
        'Analytics',
        'manage_options',
        'devtechnic-analytics-dashboard',
        'devtechnic_render_dashboard',
        'dashicons-chart-area',
        100
    );
}
add_action('admin_menu', 'devtechnic_add_admin_menu');

// Dashboard sayfasını yükleme
function devtechnic_render_dashboard() {
    require_once plugin_dir_path(__FILE__) . 'includes/admin-dashboard.php';
}

// CSS ve JS dosyalarını yükleme
function devtechnic_enqueue_scripts($hook) {
    if ($hook != 'toplevel_page_devtechnic-analytics-dashboard') {
        return;
    }
    wp_enqueue_style('devtechnic-style', plugins_url('assets/style.css', __FILE__));
    wp_enqueue_script('devtechnic-script', plugins_url('assets/script.js', __FILE__), array('jquery'), null, true);
}
add_action('admin_enqueue_scripts', 'devtechnic_enqueue_scripts');
?>

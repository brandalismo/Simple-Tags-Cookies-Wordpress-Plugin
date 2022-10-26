<?php
/*
Plugin Name: Simple Tags & Cookies
Description: Simple Tags & Cookies es un plugin muy simple para agregar los pixeles de Facebook, Twitter, Linkedin, Pinterest, Tik Tok y/o Google Analytics 4 a tu sitio web y cumplir la RGPD. 
Author: Brandalismo
Author URI: https://www.brandalismo.es/
Version: 1.0
License: GPL2
*/

if(!defined('ABSPATH')){
	exit;
}

// ACTIVAR PLUGIN
register_activation_hook( __FILE__, 'simtagcoo_install' );
function simtagcoo_install() {
	$simtagcoo_options = array(
    	'fb_id' 				=> '',
		'fb_in' 				=> '0',
		'fb_vc'					=> '0',
		'fb_ac'					=> '0',
		'fb_ic'					=> '0',
		'fb_pc'					=> '0',
		'tw_id' 				=> '',
		'tw_in' 				=> '0',
		'tw_vc'					=> '0',
		'tw_ac'					=> '0',
		'tw_ic'					=> '0',
		'tw_pc'					=> '0',
		'in_id' 				=> '',
		'in_in' 				=> '0',
		'in_vc' 				=> '',
		'in_ac' 				=> '',
		'in_ic' 				=> '',
		'in_pc' 				=> '',	
		'pn_id' 				=> '',
		'pn_in' 				=> '0',
		'pn_vc' 				=> '0',
		'pn_ac' 				=> '0',
		'pn_ic' 				=> '0',
		'pn_pc' 				=> '0',		
		'tt_id' 				=> '',
		'tt_in' 				=> '0',
		'tt_vc' 				=> '0',
		'tt_ac' 				=> '0',
		'tt_ic' 				=> '0',
		'tt_pc' 				=> '0',	
		'ga_id' 				=> '',
		'ga_in' 				=> '0',
		'ga_vi' 				=> '0',
		'ga_ac' 				=> '0',
		'ga_bc' 				=> '0',
		'ga_cp' 				=> '0',
		'ga_pc' 				=> '0',
		'wo_sk'					=> '1',	
		'wo_tx'					=> '0',
		'ct_in'					=> '0',
		'ct_ck'					=> '',
		'ct_pk'					=> '',
		'ct_nk'					=> '',
		'co_dc'					=> esc_html__('Usamos cookies propias y de terceros con fines analíticos y para mostrarte publicidad en base a un perfil elaborado a partir de tus hábitos de navegación. Más información en nuestra [url]POLÍTICA DE COOKIES[/url].','simple-tags-cookies'),
		'co_ur'					=> '#',
		'co_ma'					=> '365',
		'co_bg'					=> '#F3F3F3',
		'co_tx'					=> '#333333',
	);
	if(!get_option('simtagcoo_options')) {
		update_option('simtagcoo_options', $simtagcoo_options);
	}
}

// INICIAR PLUGIN
add_action('plugins_loaded', 'simtagcoo_setup');
function simtagcoo_setup() {
	include_once dirname(__FILE__).'/simple-tags-cookies-public.php';
	include_once dirname(__FILE__).'/simple-tags-cookies-admin.php';
	add_shortcode('configurar_cookies', 'simtagcoo_revoke_shortcode');
	add_action('admin_menu', 'simtagcoo_menu');
	add_action('admin_init', 'simtagcoo_admin_init');
	add_action('wp_head', 'simtagcoo_header', 1);
	add_action('wp_head', 'simtagcoo_frontend_styles',100);	
	add_action('wp_footer', 'simtagcoo_banner', 100);
	add_action('wp_footer', 'simtagcoo_frontend_scripts', 999);
	add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'simtagcoo_settings_link');
}

// CARGAR MENU ADMIN
function simtagcoo_menu(){
	add_options_page('Simple Tags & Cookies', 'Simple Tags & Cookies','manage_options', 'simple-tags-cookies', 'simtagcoo_conf', 7);
}

// CARGAR AJUSTES EN PLUGIN
function simtagcoo_settings_link($links){ 
	$settings_link = '<a href="options-general.php?page=simple-tags-cookies">'.esc_html__('Ajustes','simple-tags-cookies').'</a>'; 
	array_unshift($links, $settings_link); 
	return $links; 
}

// CARGAR OPCIONES ADMIN
function simtagcoo_admin_init(){
	register_setting('simtagcoo_options','simtagcoo_options','simtagcoo_validate');	
}
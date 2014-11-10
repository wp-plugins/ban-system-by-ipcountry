<?php   
    /* 
    Plugin Name: Ban System by IP and Country
    Plugin URI: http://www.artur99.net/blog/
    Description: Plugin for banning visitors by ip or country
    Author: artur99
    Version: 1.1 
    Author URI: http://artur99.net
    */  
add_action('wp_head', 'child_theme_head_script');
add_action("admin_menu", "createMyMenus");
function myplugin_aaactivate() {
    update_option( 'version', "1.1");
    update_option( 'cnr', "0");
    update_option( 'nr', "0");
    update_option( 'id', "0");
    update_option( 'cookie', "0");
    update_option( 'c', '<div style="margin-left:10px; font-size:40px; line-height: 50px;">
You are banned
</div>
<hr>
<div style="margin-left:10px; font-size:25px; line-height: 30px;">
Your country is banned!
</div>');
    update_option( 'b', '<div style="margin-left:10px; font-size:40px; line-height: 50px;">
You are banned
</div>
<hr>
<div style="margin-left:10px; font-size:25px; line-height: 30px;">
You cannot access this page!
<br><br>
<span style="color:red">
Reason: [reason]
</span>
</div>');
    date_default_timezone_set(get_option('timezone_string'));
    $d = date("ymd");
    $dy = date("ymd", time() - 86400);
    update_option( 'date', $d);
    update_option( 'datey', $dy);
    update_option( 'today', "");
    update_option( 'yesterday', "");
    update_option( 'c_xml', '<?xml version="1.0" encoding="utf-8"?><CountryList/>');
    update_option( 'b_xml', '<?xml version="1.0" encoding="utf-8"?><BanList/>');
    wp_register_style( 'style', plugins_url('style.css', __FILE__) );
}
register_activation_hook( __FILE__, 'myplugin_aaactivate' ); 
function createMyMenus() {
    add_menu_page("Ban", "Ban", 0, "bans", "open_home", plugins_url( 'ban-system-by-ipcountry/images/icon.png' ), 'add.php');
    add_submenu_page("bans", "Add", "Add", 0, "bansadd", "open_add");
    add_submenu_page("bans", "Options", "Options", 0, "bansopt", "open_opt");
    add_submenu_page("bans", "Statistics", "Statistics", 0, "bansstat", "open_stat");
}
function open_home(){
    $dir = plugin_dir_path( __FILE__ );
    wp_enqueue_style( 'prefix-style', plugins_url('style.css', __FILE__) );
    include $dir."page.php";
}
function open_add(){
    $dir = plugin_dir_path( __FILE__ );
    wp_enqueue_style( 'prefix-style', plugins_url('style.css', __FILE__) );
    include $dir."add.php";
}
function open_opt(){
    $dir = plugin_dir_path( __FILE__ );
    wp_enqueue_style( 'prefix-style', plugins_url('style.css', __FILE__) );
    include $dir."opt.php";
}
function open_stat(){
    $dir = plugin_dir_path( __FILE__ );
    wp_enqueue_style( 'prefix-style', plugins_url('style.css', __FILE__) );
    include $dir."stat.php";
}
$sh = get_option(get_option('yesterday'));
function child_theme_head_script() {
    $dir = plugin_dir_path( __FILE__ );
    include $dir."chk.php";
}


?>
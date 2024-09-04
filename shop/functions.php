<?php
function eco_shop_scripts() {
    wp_enqueue_style( 'eco-shop-google-font', '//fonts.googleapis.com/css?family=Lora:ital,wght@0,400..700;1,400..700&display=swap', false, null, 'all' );
	  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_script( 'child-style', get_stylesheet_directory_uri() . '/css/style.css', array(), '1.0.0', true );
    wp_enqueue_script( 'child-script', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'eco_shop_scripts' );


function remove_menus() {
  // remove_menu_page( 'edit.php?post_type=page' ); // 固定ページ
}
add_action( 'admin_menu', 'remove_menus', 999 );






// function my_script_init()
// { // WordPressに含まれているjquery.jsを読み込まない
//     wp_deregister_script('jquery');
//     // jQueryの読み込み
//     wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), "3.7.1", true);
//     wp_enqueue_style( 'NotoSansJP', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap' );
//     wp_enqueue_style( 'Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap' );
//     wp_enqueue_style( 'Oswald', '//fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap' );
//     wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', false);
//     wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
//     wp_enqueue_style('reset-css', get_stylesheet_directory_uri()  . '/css/reset.css', array(), '1.0.1');
//     wp_enqueue_style('main-style', get_stylesheet_directory_uri()  . '/css/style.css', array(), '1.0.1');
//     wp_enqueue_script('main-js', get_stylesheet_directory_uri()  . '/js/script.js', array('jquery'), '1.0.1', true);

//     // wp_enqueue_style( 'eco-shop-google-font', '//fonts.googleapis.com/css?family=Lora:ital,wght@0,400..700;1,400..700&display=swap', false, null, 'all' );
//     // wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
//     // wp_enqueue_script( 'child-script', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true );

// }
// add_action('wp_enqueue_scripts', 'my_script_init');




function slider(){
    echo '<div class="slider-wrapper">
  <ul class="slider">
    <li class="slide">
      <img src="http://shop.local/wp-content/uploads/2024/08/about-sw-1.jpg" alt="">
    </li>
    <li class="slide">
      <img src="http://shop.local/wp-content/uploads/2024/08/about-sw-2.jpg" alt="">
    </li>
    <li class="slide">
      <img src="http://shop.local/wp-content/uploads/2024/08/about-sw-3.jpg" alt="">
    </li>
  </ul>
  <ul class="slider">
    <li class="slide">
      <img src="http://shop.local/wp-content/uploads/2024/08/about-sw-4.jpg" alt="">
    </li>
    <li class="slide">
      <img src="http://shop.local/wp-content/uploads/2024/08/about-sw-5.jpg" alt="">
    </li>
    <li class="slide">
      <img src="http://shop.local/wp-content/uploads/2024/08/about-sw-6.jpg" alt="">
    </li>
  </ul>
</div>';
}
add_action( 'lightning_breadcrumb_before', 'slider' );


function scroll(){
    echo
    '<div class="scroll">
    <div class="scroll-inner">
        <span class="txt">Scroll</span>
    </div>
    </div>';
}
add_action( 'lightning_site_body_prepend', 'scroll' );









?>


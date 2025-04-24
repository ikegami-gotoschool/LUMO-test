<?php
/* CSSの読み込み
---------------------------------------------------------- */
function register_stylesheet()
{ //読み込むCSSを登録する
  wp_register_style('lumoplus-style', esc_url(get_template_directory_uri()) . '/assets/css/common.css');
  // wp_register_style('lumoplus-block', esc_url(get_template_directory_uri()) . '/css/block.css');
}
function add_stylesheet()
{ //登録したCSSを以下の順番で読み込む
  register_stylesheet();
  wp_enqueue_style('lumoplus-style', '', array(), '1.0', false);
  // wp_enqueue_style('lumoplus-block', '', array(), '1.0', false);
}
add_action('wp_enqueue_scripts', 'add_stylesheet');


/* スクリプトの読み込み
---------------------------------------------------------- */
function add_scripts()
{
  // if ( !is_admin() ) {
  //   wp_deregister_script('jquery');
  //   wp_enqueue_script('jquery', esc_url(get_template_directory_uri()) . '/assets/js/jquery-3.5.1.min.js', array(), false, true);
  // }
  // wp_enqueue_script('mediumzoom', 'https://cdn.jsdelivr.net/npm/medium-zoom@1.0.6/dist/medium-zoom.min.js', array(), false, true);
  wp_enqueue_script('gsap', esc_url(get_template_directory_uri()) . '/assets/js/gsap.min.js', array(), false, true);
  wp_enqueue_script('gsap-scroll', esc_url(get_template_directory_uri()) . '/assets/js/ScrollTrigger.min.js', array(), false, true);
  wp_enqueue_script('script', esc_url(get_template_directory_uri()) . '/assets/js/common.js', array('gsap','gsap-scroll'), false, true);

}

add_action('wp_enqueue_scripts', 'add_scripts');



/**
 * エディター用のJS・CSSを読み込み
 * ------------------------------------------------ */
add_action('enqueue_block_editor_assets', function () {
  wp_enqueue_script('lumoplus-selector', esc_url(get_template_directory_uri()) . '/assets/js/blockstyle.js', ['wp-blocks']);
  wp_enqueue_style('lumoplus-editor', esc_url(get_template_directory_uri()) . '/assets/css/editorstyle.css');
});


/**
 * Ajax用URL読み込み
 * ------------------------------------------------ */
function add_ajaxurl()
{
?>
  <script>
    var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
  </script>
<?php
}
add_action('wp_footer', 'add_ajaxurl', 1);

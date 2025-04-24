<?php

/**
 * Theme SetUp
 */

function theme_setup()
{

  // エディターのCSS
  add_editor_style();

  add_theme_support( 'title-tag' );

  // HTML5で出力
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption'
  ));

  // 投稿フォーマットのサポート
  add_theme_support('post-formats', array(
    'aside',
    'image',
    'video',
    'quote',
    'link',
    'gallery',
    'status',
    'audio',
    'chat'
  ));

  // 固定ページの抜粋をサポート
  add_post_type_support('page', 'excerpt');

  // アイキャッチ画像の設定
  add_theme_support('post-thumbnails');

  // RSSのlink要素を出力
  add_theme_support('automatic-feed-links');

  // gutenberg スタイル適用
  add_theme_support('wp-block-styles');
  add_theme_support('editor-styles');
  // add_editor_style('style-editor.css');
}
add_action('after_setup_theme', 'theme_setup');



//  カスタムポストタイプ、pageのスラッグをbody_classにつかう
add_filter('body_class', 'add_posttype_classes');
function add_posttype_classes($classes)
{
  $postype = get_query_var('post_type');
  // $classes[] = $postype;
  if(is_front_page()){
    $classes[] = 'p-frontpage';
    $classes[] = 'headermenu-white';
  }
  if(is_single() && !(is_page_template('single-matome.php'))){
    $classes[] = 'p-single';
  }
  if(is_singular('material')){
    $classes[] = 'p-material';
    $classes[] = 'p-gyakusan';
  }
  if(is_page_template('single-matome.php')){
    $classes[] = 'headermenu-white';
  }
  if(is_404()){
    $classes[] = 'p-page';
    $classes[] = 'headermenu-white';
  }
  if(is_archive()){
    $classes[] = 'headermenu-white';
  }
  if(is_tax()){
    $classes[] = 'headermenu-white';
    $classes[] = 'p-gyakusan';
  }
  if(is_search()){
    $classes[] = 'headermenu-white';
  }
  if (!$postype == "") {
    $m_key = array_search('home', $classes);
    unset($classes[${'m_key'}]);
  } elseif (is_page()) {
    $page = get_post(get_the_ID());
    $classes[] = $page->post_name;
    $classes[] = 'p-page';
    $classes[] = 'headermenu-white';
    $parent_id = $page->post_parent;
    if (0 == $parent_id) {
      $classes[] = get_post($parent_id)->post_name;
    } else {
      $progenitor_ids = get_ancestors($page->ID, 'page', 'post_type');
      $progenitor_id = array_pop($progenitor_ids);
      $classes[] = get_post($progenitor_id)->post_name . '-child';
    }
  }
  return $classes;
}

/**
 * コメントとPing機能を停止
 */
add_filter('comments_open', '__return_false');
add_filter('pings_open', '__return_false');

/**
 * authorアーカイブの非表示
 */
function MY_disable_author_archive()
{
  if (is_admin()) {
    return;
  }

  if (isset($_GET['author']) || preg_match('#/author/.+#', $_SERVER['REQUEST_URI'])) {
    wp_redirect(home_url());
    exit;
  }
}
add_action('init', 'MY_disable_author_archive');
add_filter('author_rewrite_rules', '__return_empty_array');

/**
 * ダッシュボードの不要ウィジェットを削除
 */
function remove_dashboard_widgets()
{
  remove_action('welcome_panel', 'wp_welcome_panel');
  $remove_wiggets = array('dashboard_activity', 'dashboard_quick_press', 'dashboard_primary');
  foreach ($remove_wiggets as $remove_wigget) {
    remove_meta_box($remove_wigget, 'dashboard', 'normal');
  }
}
add_action('admin_init', 'remove_dashboard_widgets');



/**
 * wp_head cleanup
 */

function cubic_head_cleanup()
{
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'feed_links', 2);
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'parent_post_rel_link', 10, 0);
  remove_action('wp_head', 'start_post_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_head', 'rel_canonical');
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_action('wp_head', 'wp_shortlink_wp_head');
}

add_action('init', 'cubic_head_cleanup');


/**
 * SVG uplload を許可
 *
 * wp-config.phpに下記追記する
 * define('ALLOW_UNFILTERED_UPLOADS', true);
 *
 */
function add_file_types_to_uploads($file_types)
{

  $new_filetypes = array();
  $new_filetypes['svg'] = 'image/svg+xml';
  $file_types = array_merge($file_types, $new_filetypes);

  return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

add_filter('upload_mimes', function ($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
});

add_filter('manage_media_columns', function ($columns) {
  echo '<style>.media-icon img[src$=".svg"]{width:100%;}</style>';
  return $columns;
});


/**
 * 固定ページにカテゴリーを追加する
 */
add_action( 'init', 'my_add_pages_categories' ) ;

function my_add_pages_categories()
{
    register_taxonomy_for_object_type( 'category', 'page' ) ;
}

add_action( 'pre_get_posts', 'my_set_page_categories' ) ;

function my_set_page_categories( $query )
{
    if ( $query->is_category== true && $query->is_main_query()){
        $query->set( 'post_type', array( 'post', 'page', 'nav_menu_item' )) ;
    }
}


/**
 * 投稿一覧にサムネイルを追加する
 */
function customize_manage_posts_columns($columns) {
  $columns['thumbnail'] = __('Thumbnail');
  return $columns;
}
add_filter( 'manage_posts_columns', 'customize_manage_posts_columns' );

//サムネイル画像表示
function customize_manage_posts_custom_column($column_name, $post_id) {
  if ( 'thumbnail' == $column_name) {
      $thum = get_the_post_thumbnail($post_id, 'small', array( 'style'=>'width:100px;height:auto;' ));
  } if ( isset($thum) && $thum ) {
      echo $thum;
  } else {
      echo __('None');
  }
}
add_action( 'manage_posts_custom_column', 'customize_manage_posts_custom_column', 10, 2 );

/**
 * 抜粋の[...]を変更
 *
 */

function twpp_change_excerpt_more($more)
{
  return '...';
}
add_filter('excerpt_more', 'twpp_change_excerpt_more');


/**
 * REST API でのユーザー名取得対応
 *
 */
function my_filter_rest_endpoints( $endpoints ) {
  if ( isset( $endpoints['/wp/v2/users'] ) ) {
      unset( $endpoints['/wp/v2/users'] );
  }
  if ( isset( $endpoints['/wp/v2/users/(?P[\d]+)'] ) ) {
      unset( $endpoints['/wp/v2/users/(?P[\d]+)'] );
  }
  return $endpoints;
}
add_filter( 'rest_endpoints', 'my_filter_rest_endpoints', 10, 1 );


/**
 * 配色を追加
 */
add_theme_support('editor-color-palette', [
  [
      'name'  => 'ブルー',
      'slug'  => 'wl-blue',
      'color' => '#086ec9',
  ],
  [
      'name'  => 'レッド',
      'slug'  => 'wl-red',
      'color' => '#FF6658',
  ],
  [
      'name'  => 'イエロー',
      'slug'  => 'wl-yellow',
      'color' => '#F4AE32',
  ],
  [
      'name'  => 'グリーン',
      'slug'  => 'wl-green',
      'color' => '#02C898',
  ],
  [
      'name'  => 'ライトブルー',
      'slug'  => 'wl-lightblue',
      'color' => '#CEE7FD',
  ],
]);


function add_ad_before_h2($the_content) {
  //1つ目の広告タグを挿入
  $ad1 = <<< EOF
  <div class="p-adsense-col-2">
  <div>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9056922644741297"
    crossorigin="anonymous"></script>
  <!-- 記事内_スクエア_2枚_01 -->
  <ins class="adsbygoogle"
    style="display:inline-block;width:300px;height:250px"
    data-ad-client="ca-pub-9056922644741297"
    data-ad-slot="9622138952"></ins>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
  </div>
  <div>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9056922644741297"
    crossorigin="anonymous"></script>
  <!-- 記事内_スクエア_2枚_01 -->
  <ins class="adsbygoogle"
    style="display:inline-block;width:300px;height:250px"
    data-ad-client="ca-pub-9056922644741297"
    data-ad-slot="9622138952"></ins>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
  </div>
  </div>
  EOF;
  //2つ目の広告タグを挿入
  $ad2 = <<< EOF
  <div class="p-adsense-col-2">
  <div>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9056922644741297"
  crossorigin="anonymous"></script>
  <!-- 記事内_スクエア_2枚_02 -->
  <ins class="adsbygoogle"
  style="display:inline-block;width:300px;height:250px"
  data-ad-client="ca-pub-9056922644741297"
  data-ad-slot="9361999093"></ins>
  <script>
  (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
  </div>
  <div>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9056922644741297"
  crossorigin="anonymous"></script>
  <!-- 記事内_スクエア_2枚_02 -->
  <ins class="adsbygoogle"
  style="display:inline-block;width:300px;height:250px"
  data-ad-client="ca-pub-9056922644741297"
  data-ad-slot="9361999093"></ins>
  <script>
  (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
  </div>
  </div>
  EOF;

    if ( is_single() && !is_singular('material') ) {//投稿ページ
      $h2 = '/^<h2.*?>.+?<\/h2>$/im';//H2見出しのパターン
      if ( preg_match_all( $h2, $the_content, $h2s )) {//H2見出しが本文中にあるかどうか
        if ( $h2s[0] ) {//チェックは不要と思うけど一応
          if ( $h2s[0][0] ) {//1番目のH2見出し手前に広告を挿入
            $the_content  = str_replace($h2s[0][0], $ad1.$h2s[0][0], $the_content);
          }
          if ( $h2s[0][4] ) {//5番目のH2見出し手前に広告を挿入
            $the_content  = str_replace($h2s[0][4], $ad2.$h2s[0][4], $the_content);
          }
        }
      }
    }
    return $the_content;
  }
add_filter('the_content','add_ad_before_h2');

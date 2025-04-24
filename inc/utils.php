<?php

/**
 * 現在のURLを取得
 */
function get_current_link()
{
  return (is_ssl() ? 'https' : 'http') . '://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
}


/**
 * 現在のアーカイブページのタクソノミーを取得
 *
 */
function get_current_term()
{

  $id;
  $tax_slug;

  if (is_category()) {
    $tax_slug = "category";
    $id = get_query_var('cat');
  } else if (is_tag()) {
    $tax_slug = "post_tag";
    $id = get_query_var('tag_id');
  } else if (is_tax()) {
    $tax_slug = get_query_var('taxonomy');
    $term_slug = get_query_var('term');
    $term = get_term_by("slug", $term_slug, $tax_slug);
    $id = $term->term_id;
  }

  return get_term($id, $tax_slug);
}

/**
 * クローラーのアクセス判別
 *
 */
function is_bot()
{
  $ua = $_SERVER['HTTP_USER_AGENT'];

  $bot = array(
    "googlebot",
    "msnbot",
    "yahoo"
  );
  foreach ($bot as $bot) {
    if (stripos($ua, $bot) !== false) {
      return true;
    }
  }
  return false;
}



function my_wp_head_tel_link(){
  if(!wp_is_mobile()): ?>
  <style type="text/css">
  a[href*="tel:"] {
  pointer-events: none;
  cursor: default;
  text-decoration: none;
  }
  </style>
  <?php endif;
  }
  add_action('wp_head', 'my_wp_head_tel_link');

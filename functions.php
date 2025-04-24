<?php

add_filter('show_admin_bar', '__return_false');

/*
  Set Up
------------------------------------------------ */

// 初期設定をまとめたもの
require_once('inc/init.php');
// CSS、JSの読み込み
require_once('inc/register.php');
// その他
require_once('inc/utils.php');


/*
  navigation
------------------------------------------------ */
add_action('after_setup_theme', 'register_my_menu');
function register_my_menu()
{
  register_nav_menu('headermenu', __('グローバルナビメニュー', 'wp_lumoplus'));
  register_nav_menu('footercontentmenu', __('フッターコンテンツメニュー', 'wp_lumoplus'));
}



/**
 * mw wp form 設定変更
 *
 */

 function autoback_my_mail( $Mail_raw, $values, $Data ) {

  $subject = $Data->get( 'u_subject' );

  if($subject ==  '就労移行支援事業所のご利用について'){
    $Mail_raw->to = 'lumo-plus.abeno@gotoschoolinc.com';

  }elseif($subject == '就労継続支援A型事業所のご利用について'){
    $Mail_raw->to = 'gts.nagomi@gotoschoolinc.com';

  }elseif($subject == 'フランチャイズご加盟についてのお問い合わせ・説明会の予約'){
    $Mail_raw->to = 'gts.nagomi@gotoschoolinc.com';
  }elseif($subject == 'その他'){
    $Mail_raw->to = 'lumo-plus@gotoschoolinc.com';
  }


  return $Mail_raw;
}
add_filter( 'mwform_admin_mail_mw-wp-form-7', 'autoback_my_mail', 10, 3 );

function mwwpform_wpautop( $has_wpautop, $view_flg ) {
  if ( $view_flg === 'input' || $view_flg === "confirm" ) {
  return false;
  }
  return $has_wpautop;
  }
  add_filter( 'mwform_content_wpautop_mw-wp-form-7', 'mwwpform_wpautop', 10, 2 );









  // 2025.04改修
  function add_theme_url_variable_to_root() {
    $theme_url = get_template_directory_uri();
    echo "<style>
      :root {
        --theme-url: '{$theme_url}';
        --blue-url: '{$theme_url}/assets/img/renovation/blue.png';
        --check-url: '{$theme_url}/assets/img/renovation/check.png';
      }
    </style>";
  }
  add_action('wp_head', 'add_theme_url_variable_to_root');
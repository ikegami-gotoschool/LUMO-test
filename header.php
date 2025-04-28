<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NCPDDH2');
  </script>
  <!-- End Google Tag Manager -->

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCPDDH2"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header class="header" id="header">
    <div class="header_inner">
      <h1 class="header_logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/logo.png" alt="<?php bloginfo('name'); ?>" width="132" height="39"></a></h1>
      <nav class="globalnav header_nav _pc">
        <ul class="globalnav_list">
          <li class="globalnav_listitem"><a href="<?php echo esc_url(home_url('/')); ?>about/" class="globalnav_link">LUMO+とは</a></li>
          <!-- <li class="globalnav_listitem globalnav_list__sub"><a href="https://lumo-plus.jp/transition-support/" class="globalnav_link">就労移行支援</a></li> -->
          <li class="globalnav_listitem"><a href="<?php echo esc_url(home_url('/')); ?>program/" class="globalnav_link">プログラム</a></li>
          <li class="globalnav_listitem"><a href="<?php echo esc_url(home_url('/')); ?>trial/" class="globalnav_link">見学と体験</a></li>
          <!-- <li class="globalnav_listitem"><a href="<?php echo esc_url(home_url('/')); ?>category/column/" class="globalnav_link">コラム</a></li> -->
          <li class="globalnav_listitem"><a href="<?php echo esc_url(home_url('/')); ?>primitive-reflex/" class="globalnav_link">原始反射</a></li>
        </ul>
        <ul class="globalnav_list _sub">
          <li class="globalnav_list"><a href="tel:06-6770-5283" class="globalnav_link _tel"> <span>TEL.</span>tel:06-6770-5283 </a></li>
          <!-- <li class="globalnav_list"><a href="<?php echo esc_url(home_url('/')); ?>franchise/" class="globalnav_link _arr">フランチャイズのご案内</a></li> -->
        </ul>
        <p class="globalnav_cta js-button"><a href="<?php echo esc_url(home_url('/')); ?>contact/" class="globalnav_button "><span class="origin">お問い合わせはこちら</span></a></p>

      </nav>

      <!-- SPメニュー -->
      <nav class="globalnav _sp header_spnav">
        <ul class="globalnav_list _sp">
          <li class="globalnav_listitem"><a href="<?php echo esc_url(home_url('/')); ?>about/" class="globalnav_link">LUMO+とは</a></li>
          <li class="globalnav_listitem"><a href="<?php echo esc_url(home_url('/')); ?>program/" class="globalnav_link">プログラム</a></li>
          <li class="globalnav_listitem"><a href="<?php echo esc_url(home_url('/')); ?>trial/" class="globalnav_link">見学と体験</a></li>
          <li class="globalnav_listitem"><a href="<?php echo esc_url(home_url('/')); ?>primitive-reflex/" class="globalnav_link">原始反射</a></li>
          <li class="globalnav_listitem"><a href="<?php echo esc_url(home_url('/')); ?>contact/" class="globalnav_link">お問い合わせ</a></li>
        </ul>
        <div class="globalanv_ctalist">
          <ul class="cta_list ">
            <li class="cta_listitem _orange _icon">
              <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="cta_link"><span class="origin">フォームでのご相談</span></a>
            </li>
            <li class="cta_listitem _green _icon">
              <a href="https://lin.ee/VSoAYK3" target="_blank" class="cta_link"><span class="origin">LINEでのご相談</span></a>
            </li>
            <li class="cta_listitem _tel">
              <a href="tel:06-6770-5283" class="cta_link">
                <span class="origin">
                  <span class="cta_teltext">お電話でのご相談</span>
                  <span class="cta_telnum">06-6770-5283</span>
                  <span class="cta_telnote">10:00〜18:00（月〜土）</span>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <button class="globalnav_hamburger js-hamburger" aria-controls="globalnav" aria-expanded="false" type="button">
        <span class="hamburger">
          <span class="screen-reader-text u-visibilityHidden">メニューを開閉する</span>
        </span>
      </button>
    </div>
  </header>
  <!-- /#header.header -->


  <main class="main" id="main">
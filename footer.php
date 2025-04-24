<?php if (!is_front_page()) {
  get_template_part('parts/breadcrumb');
} ?>


<?php
if (is_page('franchise')) { ?>

  <section class="cta _main _franchise">
    <div class="inner cta_inner">
      <div class="cta_header">
        <h2 class="cta_heading"><span class="cta_headingtext"><span class="pc-dib">LUMO+のフランチャイズ経営について</span>詳しくご説明します</span><span class="pc-dib">まずは</span>オンライン説明会に<br class="sp-db">ご参加ください</h2>
      </div>

      <ul class="cta_list _franchise">
        <li class="cta_listitem _orange _icon">
          <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="cta_link"><span class="origin">説明会の予約・お問い合わせ</span></a>
        </li>
        <li class="cta_listitem _tel">
          <a href="tel:03-6803-8223" class="cta_link">
            <span class="origin">
              <span class="cta_teltext">お電話でのご相談</span>
              <span class="cta_telnum">03-6803-8223</span>
              <span class="cta_telnote">10:00〜16:00（月〜土）</span>
            </span>
          </a>
        </li>
      </ul>

      <div class="cta_place">
        <div class="cta_placeItem">
          <p class="cta_title">LUMO+阿倍野事業所</p>
          <div class="cta_address">
            <p class="cta_text">大阪府大阪市阿倍野区天王寺町南2-1-6　ヴェルディ阿倍野</p>
            <a href="https://goo.gl/maps/xroTeN6Pm43FEdJJ7" class="cta_link _map" target="_blank">Googleマップで見る</a>
          </div>
          <div class="cta_point _point1 pointbar">
            <div class="pointbar_bar"></div>
            <div class="pointbar_bar _blue"></div>
          </div>
          <div class="cta_point _point2 pointbar">
            <div class="pointbar_bar _blue"></div>
          </div>
        </div>
      </div>

    </div>
  </section>

<?php


} else { ?>

  <section class="cta _main">
    <div class="inner cta_inner">
      <div class="cta_header">
        <h2 class="cta_heading"><span class="cta_headingtext">支援員が二人三脚でサポート</span>お気軽にご相談ください</h2>
        <!-- <div class="cta_listitem _orange _icon">
          <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="cta_link"><span class="origin">フォームでのご相談</span></a>
        </div> -->
        <div class="commonContact">
          <div class="commonContact__content">
            <p class="commonContact__p">フォームでのお問い合わせ</p>
            <div class="button _primary _bar _l js-button cmmonContact__button"><a href="<?php echo esc_url(home_url('/')); ?>contact/" class="button_link"><span class="origin">ご相談はこちら</span></a></div>
          </div>
          <div class="commonContact__content">
            <p class="commonContact__p">お電話でのお問い合わせ</p>
            <a class="commonContact__tel" href="tel:06-6770-5283">06-6770-5283</a>
            <p class="commonContact__p__sub">（月〜土 9:00~18:00）</p>
          </div>
        </div>
      </div>

      <ul class="cta_list">
        <li class="cta_listitem _orange _icon">
          <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="cta_link"><span class="origin">フォームでのご相談</span></a>
        </li>
        <li class="cta_listitem _green _icon">
          <a href="https://lin.ee/VSoAYK3" target="_blan k" class="cta_link"><span class="origin">LINEでのご相談</span></a>
        </li>
        <?php if (!is_page('continuation-support')) : ?>
          <li class="cta_listitem _tel">
            <a href="tel:03-6803-8223" class="cta_link">
              <span class="origin">
                <span class="cta_teltext">お電話でのご相談</span>
                <span class="cta_telnum">03-6803-8223</span>
                <span class="cta_telnote">10:00〜16:00（月〜土）</span>
              </span>
            </a>
          </li>
        <?php endif; ?>
      </ul>

      <?php if (!is_page('continuation-support')) : ?>
        <div class="cta_place">
          <div class="cta_placeItem">
            <p class="cta_title">LUMO+阿倍野事業所</p>
            <div class="cta_address">
              <p class="cta_text">大阪府大阪市阿倍野区天王寺町南2-1-6　ヴェルデ阿倍野1F</p>
              <a href="https://goo.gl/maps/xroTeN6Pm43FEdJJ7" class="cta_link _map" target="_blank">Googleマップで見る</a>
            </div>
            <div class="cta_point _point1 pointbar">
              <div class="pointbar_bar"></div>
              <div class="pointbar_bar _blue"></div>
            </div>
            <div class="cta_point _point2 pointbar">
              <div class="pointbar_bar _blue"></div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    </div>
  </section>

<?php

}

?>


</main>
<!-- /#main.main -->


<footer class="footer" id="footer">
  <div class="footer_inner inner">
    <!-- <div class="footer_banner">
      <a href="<?php echo esc_url(home_url('/')); ?>franchise/" class="banner">
        <div class="banner_body">
          <p class="banner_heading">フランチャイズ<br class="sp-db">オーナー募集中</p>
          <p class="banner_text">就労継続支援A型利用者の就労場所「なごみ弁当」の<br class="pc-db">フランチャイズオーナーを募集しています。</p>
        </div>
        <picture class="banner_img">
          <source media="(max-width:768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/banner_img_sp.jpg">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/banner_img.jpg" alt="フランチャイズオーナー募集中">
        </picture>
      </a>
    </div> -->

    <nav class="footerNav footer_nav">
      <p class="footer_logo sp-db"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/logo.png" alt="<?php bloginfo('name'); ?>" widht="136" heigh="40"></a></p>

      <ul class="footerNav_list _main _pc">
        <li class="footerNav_listitem"><a href="<?php echo esc_url(home_url('/')); ?>about/" class="footerNav_link">LUMO+とは</a></li>
        <li class="footerNav_listitem"><a href="<?php echo esc_url(home_url('/')); ?>transition-support/" class="footerNav_link">就労移行支援</a></li>
        <li class="footerNav_listitem"><a href="<?php echo esc_url(home_url('/')); ?>continuation-support/" class="footerNav_link">就労継続支援A型</a></li>
        <li class="footerNav_listitem"><a href="<?php echo esc_url(home_url('/')); ?>flow/" class="footerNav_link">ご利用の流れ</a></li>
        <li class="footerNav_listitem"><a href="<?php echo esc_url(home_url('/')); ?>faq/" class="footerNav_link">よくある質問</a></li>
        <!-- <li class="footerNav_listitem"><a href="<?php echo esc_url(home_url('/')); ?>franchise/" class="footerNav_link">フランチャイズのご案内</a></li> -->
        <li class="footerNav_listitem"><a href="https://gotoschool.co.jp/recruit/" target="_blank" class="footerNav_link">採用情報</a></li>
      </ul>
      <ul class="footerNav_list _main _sp">
        <li class="footerNav_listitem"><a href="<?php echo esc_url(home_url('/')); ?>about/" class="footerNav_link">LUMO+とは</a></li>
        <li class="footerNav_listitem"><a href="<?php echo esc_url(home_url('/')); ?>flow/" class="footerNav_link">ご利用の流れ</a></li>
        <li class="footerNav_listitem"><a href="<?php echo esc_url(home_url('/')); ?>transition-support/" class="footerNav_link">就労移行支援</a></li>
        <li class="footerNav_listitem"><a href="<?php echo esc_url(home_url('/')); ?>faq/" class="footerNav_link">よくある質問</a></li>
        <li class="footerNav_listitem"><a href="<?php echo esc_url(home_url('/')); ?>continuation-support/" class="footerNav_link">就労継続支援</a></li>
        <li class="footerNav_listitem"><a href="<?php echo esc_url(home_url('/')); ?>contact/" class="footerNav_link">お問い合わせ</a></li>
      </ul>
    </nav>
    <div class="footer_bottom">
      <p class="footer_logo pc-db"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/logo.png" alt="<?php bloginfo('name'); ?>" widht="136" heigh="40"></a></p>
      <nav class="footerNav _sub footer_subnav">
        <ul class="footerNav_list _sub _pc">
          <li class="footerNav_listitem"><a href="https://gotoschool.co.jp/" target="_blank" class="footerNav_link">運営会社</a></li>
          <li class="footerNav_listitem"><a href="<?php echo esc_url(home_url('/')); ?>contact/" class="footerNav_link">お問い合わせ</a></li>
          <li class="footerNav_listitem"><a href="https://gotoschool.co.jp/privacypolicy/" target="_blank" class="footerNav_link">プライバシーポリシー</a></li>
          <li class="footerNav_listitem _twitter"><a href="https://twitter.com/lumo_plus_abeno" target="_blank" class="footerNav_link"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/icon_twitter.svg" alt="Twitter" width="31" height="30"></a></li>
        </ul>
        <ul class="footerNav_list _sub _sp">
          <li class="footerNav_listitem"><a href="https://gotoschool.co.jp/recruit/" class="footerNav_link" target="_blank">採用情報</a></li>
          <!-- <li class="footerNav_listitem _franchise"><a href="<?php echo esc_url(home_url('/')); ?>franchise/" class="footerNav_link">フランチャイズのご案内</a></li> -->
          <li class="footerNav_listitem"><a href="https://gotoschool.co.jp/" class="footerNav_link" target="_blank">運営会社</a></li>
          <li class="footerNav_listitem"><a href="https://gotoschool.co.jp/privacypolicy/" class="footerNav_link" target="_blank">プライバシーポリシー</a></li>
          <li class="footerNav_listitem _twitter"><a href="https://twitter.com/lumo_plus_abeno" class="footerNav_link" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/icon_twitter.svg" alt="Twitter" width="31" height="30"></a></li>
        </ul>
      </nav>
      <p class="footer_copyright">©<a href="https://gotoschool.co.jp/" target="_blank">Gotoschool inc.</a> All rights reserved.</p>
    </div>

  </div>
</footer>
<!-- /#footer.footer -->


<?php wp_footer(); ?>
</body>

</html>
<?php get_header(); ?>

    <div class="pageService _continuation">
      <div class="mv _page pageService_mv pageServiceMv">
        <picture class="mv_thumbnail pageServiceMv">
          <source media="(max-width:768px)"
            srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/continuation/mv_img_sp.png">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/continuation/mv_img.png"
            alt="ホワイトボードに文字を書いて就労支援について解説する女性">
        </picture>

        <div class="mv_content">
          <h1 class="mv_heading" data-entitle="SERVICE">就労移行支援</h1>
          <p class="mv_subcopy">LUMO＋の運動療法</p>
          <!-- <p class="mv_text text">ITスキル・体力向上の２軸で<br class="sp-db">訓練するプログラムをご用意。</p> -->
        </div>
        <div class="mv_point _point1 pointbar">
          <div class="pointbar_bar _blue" data-bar1="64"></div>
          <div class="pointbar_bar _green" data-bar2="41"></div>
        </div>
        <div class="mv_point _point2 pointbar">
          <div class="pointbar_bar _green" data-bar4="122"></div>
          <div class="pointbar_bar _blue" data-bar3="42"></div>
        </div>
      </div>
      <!-- /.mv pageService_mv -->

      <div class="pageService_content page_content page_content__flex">
        <div class="sideMenu">
          <div class="sideMenu__wrapper">
            <div class="sideMenu__title">就労移行支援</div>
            <ul class="sideMenu__ul">
              <li class="sideMenu__li"><a class="sideMenu__a" href="<?php echo esc_url(home_url('/')); ?>transition-support/">LUMO＋の<br>就労移行支援とは</a></li>
              <li class="sideMenu__li"><a class="sideMenu__a" href="<?php echo esc_url(home_url('/')); ?>user/">こんな方が<br>利用しています</a></li>
			  <li class="sideMenu__li"><a class="sideMenu__a" href="<?php echo esc_url(home_url('/')); ?>therapy/">LUMO＋の運動療法</a></li>
              <li class="sideMenu__li"><a class="sideMenu__a" href="<?php echo esc_url(home_url('/')); ?>abeno/">事業所のご案内</a></li>
              <li class="sideMenu__li"><a class="sideMenu__a" href="<?php echo esc_url(home_url('/')); ?>difference/">移行支援と継続支援</a></li>
            </ul>
          </div>
        </div>
        <div class="mainWrap">
          <section class="pageService__what">
            <div class="inner">
              <h2 class="pageServiceAbout_heading heading _m _center _bar">原始反射とは？</h2>
              <div class="pageService__what__contents">
                <div class="pageService__what__p">
                  原始反射とは、たとえば「手に触れると握り返す」といった、生き抜くための反射的な運動です。多くの場合、繰り返すことで脳が調えられて起こりにくくなります。しかし、発達のトラブルがある方はこの原始反射を残したまま成長している方が多く、それが仕事やコミュニケーション課題の要因になっていることがあります。
                </div>
                <div class="pageService__what__img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/continuation/feature_img03.svg" alt=""></div>
              </div>
            </div>
          </section>
          <section class="pageService__therapy">
            <div class="inner">
              <h2 class="pageServiceAbout_heading heading _m _center _bar">LUMO＋の運動療法</h2>
              <div class="pageService__therapy__wrap">
                <div class="pageService__therapy__img img_credit2"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/continuation/1233.jpg" alt=""></div>
                <div class="pageService__therapy__p">原始反射を整えるには、脳への適切な刺激が必要で、この刺激こそが「運動」です。<br>
                  LUMO+では、医師監修のもとに運動療法を取り入れることで、コミュニケーションや集中力、学習能力の向上にアプローチします。</div>
              </div>
            </div>
          </section>
          <section class="pageService_about">
            <div class="inner">
              <div class="pageServiceAbout_list">
                <div class="pageServiceAbout_box _l">
                  <h3 class="pageServiceAbout_heading _dashed"><span>運動療法で原始反射を統合すると<br>人間関係や集中力が改善することも</span></h3>
                  <figure class="pageServiceAbout_figure">
                    <div class="pageServiceAbout_figureInner">
                      <!-- <img
                        src="https://lumo-plus.jp/wp-content/themes/site-tpl/assets/img/continuation/feature_figure.svg"
                        alt="原始反射を運動を通じて改善することは、コミュニケーション力や集中力・学習力につながります"> -->
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/continuation/therapy.png" alt="">
                    </div>
                  </figure>
                  <figcaption class="pageServiceAbout_fignote">横にスクロールできます →</figcaption>
                </div>
              </div>
            </div>
          </section>
          <!-- /.pageService_feaure pageServiceAbout -->
        </div>
      </div>
    </div>

    <?php get_footer(); ?>
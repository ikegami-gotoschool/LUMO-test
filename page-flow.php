<?php get_header(); ?>

<div class="pageFlow">
<div class="mv _page pageFlow_mv pageFlowMv">
    <picture class="mv_thumbnail pageFlowMv">
      <source media="(max-width:768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/flow/mv_img_sp.png">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/flow/mv_img.png" alt="LUMO+阿倍野事業所内のデスク">
    </picture>

    <div class="mv_content">
      <h1 class="mv_heading" data-entitle="faq">ご利用の流れ</h1>
        <p class="mv_subcopy">ご利用開始までしっかりサポート</p>
        <p class="mv_text text">お問い合わせから4～6週間程度で<br class="sp-db">ご利用開始いただけます。</p>
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
  <!-- /.mv pageFlow_mv -->

  <div class="pageFlow_content page_content">
    <div class="inner">
      <ul class="flow _beige pageFlow_list">
        <li class="flow_item">
          <div class="flow_content">
            <p class="flow_heading">
              <span class="num"><span>STEP</span>01</span>
              お問い合わせ
            </p>
            <p class="flow_text text"><a href="<?php echo esc_url(home_url('/')); ?>contact/">お問い合わせフォーム</a>よりご連絡ください。<br>後日担当者からご相談日程をメールでお送りいたします。</p>
          </div>
          <picture class="flow_img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/flow/flow_img01.jpg" alt="スマートフォンを操作する手元" sizes="" srcset=""  width="391" height="261"></picture>
        </li>
        <li class="flow_item">
          <div class="flow_content">
            <p class="flow_heading">
              <span class="num"><span>STEP</span>02</span>
              ご相談・ご見学
            </p>
            <p class="flow_text text">当日はご状況をお伺いし、ご利用者さまの疑問を解消させていただきます。施設見学・体験利用も可能です。</p>
          </div>
          <picture class="flow_img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/flow/flow_img02.jpg" alt="LUMO+阿倍野事業所内のデスク" sizes="" srcset=""  width="391" height="261"></picture>
        </li>
        <li class="flow_item">
          <div class="flow_content">
            <p class="flow_heading">
              <span class="num"><span>STEP</span>03</span>
              ご提案
            </p>
            <p class="flow_text text">当日はご状況をお伺いし、ご利用者さまにあった支援方法をご提案します。また、理解を深めていただくために見学・体験利用をおすすめしております。</p>
          </div>
          <picture class="flow_img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/flow/flow_img03.jpg" alt="スーツの女性が男性オーナー候補にヒアリングをしている様子" sizes="" srcset="" width="391" height="261"></picture>
        </li>
        <li class="flow_item">
          <div class="flow_content">
            <p class="flow_heading">
              <span class="num"><span>STEP</span>04</span>
              受給者証の発行手続き
            </p>
            <p class="flow_text text">ご利用開始にあたって、お住まいの自治体（市役所や区役所）の障害福祉課にて「障害福祉サービス受給者証」の発行手続きを行います。事前にサポートしますのでご安心ください。</p>
          </div>
          <picture class="flow_img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/flow/flow_img04.jpg" alt="受給者証の発行手続きをする窓口の男性と女性" sizes="" srcset=""></picture>
        </li>
        <li class="flow_item">
          <div class="flow_content">
            <p class="flow_heading">
              <span class="num"><span>STEP</span>05</span>
              お申し込み・ご契約
            </p>
            <p class="flow_text text">約1ヶ月ほどで障害福祉サービス受給者証が郵送で届きます。その後、利用契約を結んでLUMO+のご利用がスタート。</p>
          </div>
          <picture class="flow_img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/flow/flow_img05.jpg" alt="契約のサインをする手元" sizes="" srcset=""></picture>
        </li>
        <li class="flow_item">
          <div class="flow_content">
            <p class="flow_heading">
              <span class="num"><span>STEP</span>06</span>
              ご支援開始
            </p>
            <p class="flow_text text">支援員が、ひとりひとりの特性にあった道を見つけるためにしっかりサポートします。</p>
          </div>
          <picture class="flow_img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/flow/flow_img06.jpg" alt="LUMO+の職員の男性や女性" sizes="" srcset=""></picture>
        </li>
      </ul>
    </div>
    <div class="pageFlow_point _point1 pointbar">
      <div class="pointbar_bar _green"></div>
      <div class="pointbar_bar _blue"></div>
    </div>
  </div>
</div>

<?php get_footer(); ?>

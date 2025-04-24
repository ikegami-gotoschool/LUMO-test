<?php get_header(); ?>

<div class="pageColumn">
  <div class="mv _page pageFaq_mv pageFaqMv">
    <picture class="mv_thumbnail pageFaqMv">
      <img src="https://lumo-plus.jp/wp-content/themes/site-tpl/assets/img/faq/mv_img.png" alt="アンケートを記入する手元">
    </picture>

    <div class="mv_content">
      <h1 class="mv_heading" data-entitle="faq">コラム</h1>
      <p class="mv_subcopy">よくいただく質問をまとめました</p>
      <p class="mv_text text">ご不明点がございましたら<br class="sp-db">お気軽にお問い合わせください。</p>
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
  <!-- /.mv pageFaq_mv -->

  <section class="pageFaq_content page_content pageColumn_content">
    <div class="inner _wide">
      <div class="pageFaq_box">
        <h2 class="pageFaq_heading heading _side _green"><span>コラム一覧</span></h2>
        <div class="pageColumn__wrap">
          <?php
          $args = array(
            'post_type' => 'post', // 投稿タイプを 'post' に指定
            'posts_per_page' => 5  // 表示する投稿数を指定
          );
          $the_query = new WP_Query($args); // カスタムクエリを作成
          ?>

          <?php if ($the_query->have_posts()) : ?>
            <ul class="allpost__ul">
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li class="allpost__li">
                  <a class="allpost__li__a" href="<?php the_permalink(); ?>">
                    <div class="allpast__img">
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full'); // アイキャッチ画像を表示 
                        ?>
                      <?php endif; ?>
                    </div>
                    <h3 class="allpost__h3"><?php the_title(); ?></h3>
                    <time class="allpost__time" datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
                  </a>
                </li>
              <?php endwhile; ?>
            </ul>
            <?php the_posts_navigation(); ?>
          <?php else : ?>
            <p>No posts found.</p>
          <?php endif; ?>

          <?php wp_reset_postdata(); // グローバルクエリをリセット 
          ?>
        </div>
      </div>
      <!-- /#faq1.pageFaq_box -->
      <!-- <div class="pageFaq_box" id="faq2">
          <h2 class="pageFaq_heading heading _side _blue"><span>就労継続支援A型<span class="pc-dib">に関するご質問</span></span></h2>

          <div class="pageFaq_body">
            <dl class="pageFaq_list faqList _blue">
              <div class="pageFaq_item faqList_item faqItem">
                <dt class="faqItem_q">就職先の紹介はありますか？</dt>
                <dd class="faqItem_a">
                  <div class="faqItem_body">
                    <p class="faqItem_text text">はい、弊社の協賛企業や関連企業をご紹介可能です。<br>ご希望の職種への就職活動のお手伝いもいたします。</p>
                  </div>
                </dd>
              </div>
              <div class="pageFaq_item faqList_item faqItem">
                <dt class="faqItem_q">誰でも通うことができますか？</dt>
                <dd class="faqItem_a">
                  <div class="faqItem_body">
                    <p class="faqItem_text text">原則として下記の方が対象となります。<br>
                    ・18歳以上65歳未満<br>
                    ・障害者手帳を持っている<br>
                    ・一般企業への就職が不安または困難</p>
                  </div>
                </dd>
              </div>
            </dl>
          </div>
        </div> -->
      <!-- /#faq2.pageFaq_box -->
    </div>
  </section>


</div>

<?php get_footer(); ?>
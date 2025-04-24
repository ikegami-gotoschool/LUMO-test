<?php get_header(); ?>

<div class="pageColumn">
  <div class="mv _page pageFaq_mv pageFaqMv">
    <picture class="mv_thumbnail pageFaqMv">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/column/mv_img.png" alt="アンケートを記入する手元">
    </picture>

    <div class="mv_content">
      <h1 class="mv_heading" data-entitle="COLUMN">コラム</h1>
      <p class="mv_subcopy">お役立ち情報を発信しています</p>
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
  <div class="pageService_content page_content page_content__flex">
    <div class="sideMenu">
      <div class="sideMenu__wrapper">
        <div class="sideMenu__title">コラム</div>
        <ul class="sideMenu__ul">
          <li class="sideMenu__li"><a class="sideMenu__a" href="<?php echo esc_url(home_url('/')); ?>category/column">コラム一覧</a></li>
          <li class="sideMenu__li"><a class="sideMenu__a" href="<?php echo get_category_link(get_cat_ID('就労移行支援')); ?>">就労移行支援</a></li>
          <li class="sideMenu__li"><a class="sideMenu__a" href="<?php echo get_category_link(get_cat_ID('就労継続支援')); ?>">就労継続支援</a></li>
          <li class="sideMenu__li"><a class="sideMenu__a" href="<?php echo get_category_link(get_cat_ID('就職')); ?>">就職</a></li>
          <li class="sideMenu__li"><a class="sideMenu__a" href="<?php echo get_category_link(get_cat_ID('適応障害')); ?>">適応障害</a></li>
        </ul>
      </div>
    </div>
    <div class="mainWrap">
      <section class="pageFaq_content pageColumn_content">
        <div class="inner _wide">
          <div class="pageColumn_box">
            <h2 class="pageFaq_heading heading _side _green nowrap pageColumn_heading">就労移行支援</h2>
            <div class="pageColumn__wrap">
              <?php
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // 現在のページ番号を取得
              $args = array(
                'post_type' => 'post', // 投稿タイプを 'post' に指定
                'posts_per_page' => 6, // 表示する投稿数を指定
                'paged' => $paged, // ページネーションを有効にするために、ページ番号を指定
                'category_name' => 'transition-support' // カテゴリースラッグを指定
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

                <div class="pagination">
                  <?php
                  // ページネーションを作成し出力
                  echo paginate_links(array(
                    'mid_size' => 2, // 現在のページ番号の両端にいくつ数字を表示するか
                    'prev_next' => false, // 「前へ」「次へ」を表示するか
                    'current' => max(1, get_query_var('paged')), // 現在のページ番号
                    'total' => $the_query->max_num_pages // 全ページ数を$the_queryから取得
                  ));
                  ?>
                </div>
              <?php else : ?>
                <p>No posts found.</p>
              <?php endif; ?>

              <?php wp_reset_postdata(); // グローバルクエリをリセット 
              ?>
            </div>

          </div>
          <!-- /#faq1.pageFaq_box -->
        </div>
      </section>

      <!-- /.pageService_feaure pageServiceAbout -->

    </div>
  </div>

</div>

<?php get_footer(); ?>
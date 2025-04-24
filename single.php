<?php get_header(); ?>

<div class="pageService">
  <div class="mv _page pageService_mv pageServiceMv">
    <picture class="mv_thumbnail pageServiceMv_thumbnail">
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
  <!-- /.mv pageService_mv -->
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
      <section class="pageService_about pageShingle">
        <div class="inner">
          <div class="shingle__wrap">
            <h2 class="heading _m"><?php the_title(); ?></h2>
            <div class="post-category">
              <?php the_category(); ?>
            </div>
            <div class="shingle__img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full'); // アイキャッチ画像を表示 
                ?>
              <?php endif; ?>
            </div>
            <div class="shingle__wrap__content">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </section>
      <!-- /.pageService_feaure pageServiceAbout -->

    </div>
  </div>
</div>


<?php get_footer(); ?>
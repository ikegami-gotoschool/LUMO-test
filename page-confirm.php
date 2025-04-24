<?php get_header(); ?>

<div class="pageContact">
  <div class="mv _page pageContact_mv pageContactMv">
    <picture class="mv_thumbnail pageContactMv">
      <source media="(max-width:768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/contact/mv_img_sp.png">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/contact/mv_img.png" alt="LUMO+の職員の男性や女性">
    </picture>


    <div class="mv_content">
      <h1 class="mv_heading" data-entitle="contact">内容確認</h1>
        <p class="mv_subcopy">下記お問い合わせ内容をご確認ください</p>
        <p class="mv_text text">3営業日を目安に担当者より<br class="sp-db">ご連絡いたします。</p>

      </div>
  </div>
  <!-- /.mv pageContact_mv -->

  <div class="pageContact_content page_content">
    <div class="inner">

      <div class="contactForm pageContact_form _thanks">
        <div class="contactForm_inner">
          <h2 class="contactForm_heading">お問い合わせ内容確認</h2>
          <p class="contactForm_text _lead">下記お問い合わせ内容をご確認ください</p>

          <?php the_content(); ?>


        </div>
      </div>

    </div>
  </div>



</div>

<?php get_footer(); ?>

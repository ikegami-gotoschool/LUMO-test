<?php get_header(); ?>

<div class="pageContact">
  <div class="mv _page pageContact_mv pageContactMv">
    <picture class="mv_thumbnail pageContactMv">
      <source media="(max-width:768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/contact/mv_img_sp.png">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/contact/mv_img.png" alt="LUMO+の職員の男性や女性">
    </picture>


    <div class="mv_content">
      <h1 class="mv_heading" data-entitle="contact">送信完了</h1>
        <p class="mv_subcopy">お問い合わせの送信が完了しました</p>
        <p class="mv_text text">3営業日を目安に担当者より<br class="sp-db">ご連絡いたします。</p>

      </div>
  </div>
  <!-- /.mv pageContact_mv -->

  <div class="pageContact_content page_content">
    <div class="inner">
    <?php the_content(); ?>

      <div class="contactForm pageContact_form _thanks mw_wp_form">
        <div class="contactForm_inner">
          <h2 class="contactForm_heading">お問い合わせ<br class="sp-db">ありがとうございました</h2>
          <p class="contactForm_text _lead">3営業日を目安に担当者よりメールでご連絡いたします。</p>

          <div class="contactForm_box">
            <p class="contactForm_text">ご入力いただいたメールアドレス宛に、自動返信メールをお送りしております。</p>
            <p class="cotactForm_note">※メールが届かない場合は、下記の可能性がございます。</p>
            <div class="contactForm_graybox">
              <ul class="list _num">
                <li class="list_item">メールアドレスが間違っている</li>
                <li class="list_item">迷惑メールフォルダに振り分けられてしまっている</li>
                <li class="list_item">
                  <p>迷惑メール設定により弾かれている</p>
                  <p class="list_note">ドメイン指定受信などでメール受信を制限をされている場合は、「@gotoschoolinc.com」からのメールが受信できるように設置する必要がございます。</p>
                </li>
              </ul>
            </div>

          </div>
          <p class="contactForm_submit _thanks"><a href="<?php echo esc_url(home_url('/')); ?>" class="button_link"><span class="origin">TOPに戻る</span></a></p>
        </div>
      </div>


    </div>
  </div>



</div>

<?php get_footer(); ?>

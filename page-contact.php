<?php get_header(); ?>

<div class="pageContact">
  <div class="mv _page pageContact_mv pageContactMv">
    <picture class="mv_thumbnail pageContactMv">
      <source media="(max-width:768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/contact/mv_contact_sp.png">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/contact/mv_contact.png" alt="LUMO+の職員の男性や女性">
    </picture>

    <div class="mv_content">
      <h1 class="mv_heading" data-entitle="contact">お問い合わせ</h1>
        <p class="mv_subcopy">まずはお気軽にご相談ください</p>
        <p class="mv_text text">3営業日を目安に担当者より<br class="sp-db">ご連絡いたします。</p>
      </div>
  </div>
  <!-- /.mv pageContact_mv -->

  <div class="pageContact_content page_content">
    <div class="inner">
      <div class="contactForm pageContact_form">
        <div class="contactForm_inner">
          <?php the_content(); ?>
        </div>
      </div>
      <!--
          <div class="contactForm_list">
            <div class="contactForm_item contactItem">
              <div class="contactItem_label">
                <label for="">お名前</label>
                <span class="contacItem_req">必須</span>
              </div>
              <div class="contactItem_input">
                <input type="text">
              </div>
            </div>
            <div class="contactForm_item contactItem">
              <div class="contactItem_label">
                <label for="">ふりがな</label>
                <span class="contacItem_req">必須</span>
              </div>
              <div class="contactItem_input">
                <input type="text">
              </div>
            </div>
            <div class="contactForm_item contactItem">
              <div class="contactItem_label">
                <label for="">メールアドレス</label>
                <span class="contacItem_req">必須</span>
              </div>
              <div class="contactItem_input">
                <input type="text">
              </div>
            </div>
            <div class="contactForm_item contactItem">
              <div class="contactItem_label">
                <label for="">電話番号</label>
                <span class="contacItem_req _option">任意</span>
              </div>
              <div class="contactItem_input">
                <input type="text">
              </div>
            </div>
            <div class="contactForm_item contactItem">
              <div class="contactItem_label">
                <label for="">お問い合わせ項目</label>
                <span class="contacItem_req">必須</span>
              </div>
              <div class="contactItem_input">
                <input type="text">
              </div>
            </div>
            <div class="contactForm_item contactItem">
              <div class="contactItem_label">
                <label for="">お問い合わせ内容</label>
                <span class="contacItem_req">必須</span>
              </div>
              <div class="contactItem_input">
                <input type="text">
                <p class="contactItem_note">※ 半角数字で入力してください</p>
              </div>
            </div>
          </div>
          <div class="contactForm_privacy">
            <p class="contactForm_text"><a href="">プライバシーポリシー</a>をご確認いただき、<br class="pc-db">「同意する」にチェックをしてから「送信する」ボタンを押してください。</p>

          </div>

          <button class="contactForm_submit" type="submit">この内容で送信する</button>

        </div>
      </div> -->
    </div>
  </div>



</div>

<?php get_footer(); ?>

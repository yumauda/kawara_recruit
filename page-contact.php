<?php get_header(); ?>
<main>
  <section class="p-contact-mv">
    <div class="l-inner">
      <div class="p-contact-mv__content">
        <figure class="p-contact-mv__img">
          <img src="<?php echo get_template_directory_uri() ?>/images/contact/mv.webp" alt="瓦百景エントリー" width="1920" height="1080">
        </figure>
        <div class="p-contact-mv__detail">
          <h2 class="p-contact-mv__title">
            <span class="p-contact-mv__title-en">_Entry</span>
            <span class="p-contact-mv__title-ja">募集要項</span>
          </h2>
        </div>

      </div>
    </div>
  </section>
  <section class="p-contact">
    <div class="l-inner">
      <div class="p-contact__content">

        <div class="p-contact__privacy-lead">
          <p class="p-contact__privacy-lead-text">
            ご記入いただきましたお客様の個人情報につきましては、採用活動の目的でのみ利用させていただきます。<br>
            ご応募いただいた方に、後ほど人事よりご連絡させていただきます。
          </p>
        </div>

        <div class="p-contact__privacy-box">
          <div class="p-contact__privacy-box-inner">
            <div class="p-contact__privacy-box-left">
              <p class="p-contact__privacy-box-text">
                個人情報等のお取り扱いにご同意の上、入力フォームへ記載いただきますようお願い申し上げます。<br>
                ※お客様情報の取り扱いについては、<a class="p-contact__privacy-link" href="<?php echo esc_url(get_privacy_policy_url()); ?>">個人情報等のお取り扱い</a>をご参照ください。
              </p>
            </div>

            <div class="p-contact__privacy-box-right">
              <div class="p-contact__privacy-agree">
                <label class="p-contact__privacy-checkbox">
                  <input class="p-contact__privacy-checkbox-input" type="checkbox" name="contact_privacy_agree" value="1">
                  <span class="p-contact__privacy-checkbox-box" aria-hidden="true"></span>
                  <span class="p-contact__privacy-checkbox-label">同意する</span>
                </label>
                <span class="p-contact__privacy-required" aria-hidden="true">必須</span>
              </div>
            </div>
          </div>
        </div>
        
        <?php the_content(); ?>
      </div>
    </div>
  </section>


  <?php get_template_part('includes/submit'); ?>
</main>
<?php get_footer() ?>
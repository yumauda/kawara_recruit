<?php get_header(); ?>
<main>
  <section class="p-page-mv">
    <div class="p-page-mv__inner">
      <div class="p-page-mv__content">
        <figure class="p-page-mv__img">
          <img src="<?php echo get_template_directory_uri() ?>/images/interview01/page_mv_01.webp" alt="" width="1920" height="1080">
        </figure>
        <div class="p-page-mv__detail">
          <h2 class="p-page-mv__title">瓦一枚に<br>込める誇り</h2>
          <div class="p-page-mv__detail-row">
            <p class="p-page-mv__detail-occupation">2003年入社 営業部 主任</p>
            <p class="p-page-mv__detail-name">柳光&emsp;雅英</p>
          </div>
        </div>
      </div>

    </div>
  </section>
  <section class="p-contact">
    <div class="l-inner">
      <div class="p-contact__content">
        <?php the_content(); ?>
      </div>
    </div>
  </section>


  <?php get_template_part('includes/submit'); ?>
</main>
<?php get_footer() ?>
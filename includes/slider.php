<section class="p-page-slider">
    <?php
    $interviews = array(
      array(
        'slug' => 'interview01',
        'year' => '2003年入社',
        'role' => '営業部 主任',
        'name' => '柳光 雅英',
      ),
      array(
        'slug' => 'interview02',
        'year' => '2005年入社',
        'role' => '製造部 課長',
        'name' => '佐々木 渉',
      ),
      array(
        'slug' => 'interview03',
        'year' => '2002年入社',
        'role' => '製造部',
        'name' => '村上 浩',
      ),
      array(
        'slug' => 'interview04',
        'year' => '1995年入社',
        'role' => '製造部',
        'name' => '高井 良昌',
      ),
      array(
        'slug' => 'interview05',
        'year' => '2000年入社',
        'role' => '製造部(鬼師)',
        'name' => '林 洋司',
      ),
      array(
        'slug' => 'interview06',
        'year' => '1993年入社',
        'role' => '業務部',
        'name' => '松村 麻子',
      ),
    );
    ?>

    <div class="swiper slider-page-interview">
        <div class="swiper-wrapper">
            <?php foreach ($interviews as $interview) : ?>
                <div class="swiper-slide">
                    <a href="<?php echo esc_url(home_url('/' . $interview['slug'] . '/')); ?>" class="p-page-slider__item">
                        <div class="p-page-slider__bg">
                            <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/page_slider_bg.webp" alt="" width="660" height="600">
                        </div>
                        <div class="p-page-slider__detail">
                            <p class="p-page-slider__detail-occupation"><?php echo esc_html($interview['year']); ?><br><?php echo esc_html($interview['role']); ?></p>
                            <p class="p-page-slider__detail-name"><?php echo esc_html($interview['name']); ?></p>
                        </div>
                        <figure class="p-page-slider__img">
                            <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/<?php echo esc_attr($interview['slug']); ?>.webp" alt="<?php echo esc_attr($interview['name']); ?>" width="437" height="1500">
                        </figure>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
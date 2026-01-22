<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- meta情報 -->
    <?php
    $site_name = '瓦百景・採用サイト';
    $default_description = '島根が誇る石州瓦の魅力と、瓦百景で働く職人たちの声を届ける採用サイトです。';

    $title = $site_name;
    $description = $default_description;
    $keywords = '瓦百景,採用サイト';
    $og_type = 'website';

    // なるべく正確なURL（OGP用）
    global $wp;
    if (is_singular() || is_page()) {
      $og_url = get_permalink();
    } elseif (is_home()) {
      $posts_page_id = (int) get_option('page_for_posts');
      $og_url = $posts_page_id ? get_permalink($posts_page_id) : home_url('/');
    } elseif (isset($wp) && isset($wp->request)) {
      $og_url = home_url(trailingslashit($wp->request));
    } else {
      $og_url = home_url('/');
    }

    // 固定ページ/投稿の抜粋をdescriptionに使う（未設定ならデフォルト）
    if (is_singular() || is_page()) {
      $queried_id = get_queried_object_id();
      $maybe_excerpt = trim((string) get_the_excerpt($queried_id));
      if ($maybe_excerpt !== '') {
        $description = $maybe_excerpt;
      } else {
        $raw_content = (string) get_post_field('post_content', $queried_id);
        $raw_content = wp_strip_all_tags(strip_shortcodes($raw_content));
        $raw_content = trim(preg_replace('/\s+/u', ' ', $raw_content));
        if ($raw_content !== '') {
          $description = wp_trim_words($raw_content, 60, '…');
        }
      }
    }

    // ページ個別の上書き（既存ページ）
    if (is_front_page()) {
      $title = '伝統は手の中にある｜' . $site_name;
      $description = '400年受け継がれてきた石州瓦の技と、文化を形にする職人たちの声を伝える採用サイトです。';
    } elseif (is_page('contact')) {
      $title = '募集要項・エントリー｜' . $site_name;
      $description = '瓦百景の募集要項・エントリーフォームです。採用に関するご質問もこちらからお問い合わせください。';
    } elseif (is_page('interview01')) {
      $title = '瓦一枚に込める誇り｜インタビュー01｜' . $site_name;
      $description = '2003年入社 営業部 主任 柳光 雅英のインタビュー。瓦づくりに宿る誇りと、仕事への想いを紹介します。';
    } elseif (is_page('interview02')) {
      $title = '瓦一枚に込める誇り｜インタビュー02｜' . $site_name;
      $description = '2005年入社 製造部 課長 佐々木 渉のインタビュー。現場で磨かれる技と、受け継ぐ覚悟に迫ります。';
    } elseif (is_page('interview03')) {
      $title = '瓦一枚に込める誇り｜インタビュー03｜' . $site_name;
      $description = '2002年入社 製造部 村上 浩のインタビュー。土と火に向き合う仕事のリアルを紹介します。';
    } elseif (is_page('interview04')) {
      $title = '瓦一枚に込める誇り｜インタビュー04｜' . $site_name;
      $description = '1995年入社 製造部 高井 良昌のインタビュー。長く続けるからこそ見える、ものづくりの魅力を語ります。';
    } elseif (is_page('interview05')) {
      $title = '瓦一枚に込める誇り｜インタビュー05｜' . $site_name;
      $description = '2000年入社 製造部（鬼師）林 洋司のインタビュー。細部に宿る技と誇りを紹介します。';
    } elseif (is_page('interview06')) {
      $title = '瓦一枚に込める誇り｜インタビュー06｜' . $site_name;
      $description = '1993年入社 業務部 松村 麻子のインタビュー。現場を支える仕事のやりがいを紹介します。';
    } elseif (is_home()) {
      $title = 'トピックス｜' . $site_name;
      $description = '瓦百景の最新情報や採用に関するお知らせを掲載しています。';
    } elseif (is_singular('post')) {
      $title = get_the_title() . '｜トピックス｜' . $site_name;
      $og_type = 'article';
    } elseif (is_404()) {
      $title = 'ページが見つかりません｜' . $site_name;
      $description = 'お探しのページは見つかりませんでした。URLをご確認の上、トップページよりお進みください。';
    } elseif (is_page()) {
      $title = get_the_title() . '｜' . $site_name;
    }

    $og_title = $title;
    $og_description = $description;
    ?>
    <title><?php echo esc_html($title); ?></title>
    <meta name="description" content="<?php echo esc_attr($description); ?>" />
    <meta name="keywords" content="<?php echo esc_attr($keywords); ?>" />
    <meta property="og:title" content="<?php echo esc_attr($og_title); ?>" />
    <meta property="og:type" content="<?php echo esc_attr($og_type); ?>">
    <meta property="og:url" content="<?php echo esc_url($og_url); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg" />
    <meta property="og:site_name" content="<?php echo esc_attr($site_name); ?>" />
    <meta property="og:description" content="<?php echo esc_attr($og_description); ?>" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_attr($og_title); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr($og_description); ?>">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg">

    <!-- ogp -->
    <!-- ファビコン -->
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/common/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/images/common/apple-touch-icon.png">
    <!-- css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">
    <?php if (is_404()) : ?>
        <meta http-equiv="refresh" content=" 3; url=<?php echo esc_url(home_url("/")); ?>">
    <?php endif; ?>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <header class="p-header">
        <div class="p-header__inner">
            <div class="p-header__content">
                <h1 class="p-header__logo">
                    <a class="p-header__logo-link" href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/images/common/header_logo.png" alt="瓦百景" width="160" height="90">
                    </a>
                </h1>
                <nav class="p-header__nav">
                    <ul class="p-header__nav-lists">
                        <li class="p-header__nav-list">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__nav-link">コンセプト</a>
                        </li>
                        <li class="p-header__nav-list">
                            <a href="<?php echo esc_url(home_url('/#anc02')); ?>" class="p-header__nav-link">職人の矜持</a>
                        </li>
                        <li class="p-header__nav-list">
                            <a href="<?php echo esc_url(home_url('/#anc03')); ?>" class="p-header__nav-link">募集要項</a>
                        </li>
                        <li class="p-header__nav-list">
                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-header__nav-link">エントリー</a>
                        </li>
                    </ul>
                </nav>
                <div class="p-header__navigation">
                    <button class="p-header__drawer p-drawer-icon">
                        <span class="p-drawer-icon__bars">
                            <span class="p-drawer-icon__bar1"></span>
                            <span class="p-drawer-icon__bar2"></span>
                            <span class="p-drawer-icon__bar3"></span>
                        </span>
                    </button>
                </div>
                <div class="p-header__drawer-content p-drawer-content">
                    <div class="p-drawer-content__items">
                        <ul class="p-drawer-content__lists">
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="p-drawer-content__link">
                                    <span class="p-drawer-content__link-en">TOP</span>
                                    <span class="p-drawer-content__link-ja">トップ</span>
                                </a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="https://kawara.first-step-yuma.com/about" class="p-drawer-content__link">
                                    <span class="p-drawer-content__link-en">ABOUT</span>
                                    <span class="p-drawer-content__link-ja">石州瓦とは</span>
                                </a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="https://kawara.first-step-yuma.com/reason" class="p-drawer-content__link">
                                    <span class="p-drawer-content__link-en">REASON</span>
                                    <span class="p-drawer-content__link-ja">選ばれる理由</span>
                                </a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="https://kawara.first-step-yuma.com/product" class="p-drawer-content__link">
                                    <span class="p-drawer-content__link-en">PRODUCT</span>
                                    <span class="p-drawer-content__link-ja">商品紹介</span>
                                </a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="https://kawara.first-step-yuma.com/company" class="p-drawer-content__link">
                                    <span class="p-drawer-content__link-en">COMPANY</span>
                                    <span class="p-drawer-content__link-ja">会社概要</span>
                                </a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="https://kawara.first-step-yuma.com/topics" class="p-drawer-content__link">
                                    <span class="p-drawer-content__link-en">TOPICS</span>
                                    <span class="p-drawer-content__link-ja">特集</span>
                                </a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="https://kawara.first-step-yuma.com/news" class="p-drawer-content__link">
                                    <span class="p-drawer-content__link-en">NEWS</span>
                                    <span class="p-drawer-content__link-ja">お知らせ</span>
                                </a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="https://kawara.first-step-yuma.com/download" class="p-drawer-content__link">
                                    <span class="p-drawer-content__link-en">DOWNLOAD</span>
                                    <span class="p-drawer-content__link-ja">製品資料</span>
                                </a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="https://kawara.first-step-yuma.com/professional" class="p-drawer-content__link">
                                    <span class="p-drawer-content__link-en">PROFESSIONAL</span>
                                    <span class="p-drawer-content__link-ja">プロ向け情報</span>
                                </a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="https://kawara.first-step-yuma.com/recruit" class="p-drawer-content__link">
                                    <span class="p-drawer-content__link-en">RECRUIT</span>
                                    <span class="p-drawer-content__link-ja">採用情報</span>
                                </a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="https://kawara.first-step-yuma.com/contact" class="p-drawer-content__link">
                                    <span class="p-drawer-content__link-en">CONTACT</span>
                                    <span class="p-drawer-content__link-ja">お問い合わせ</span>
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </header>
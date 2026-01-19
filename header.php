<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- meta情報 -->
    <?php if (is_home() || is_front_page()) : ?>
        <title>瓦百景・採用サイト</title>
        <meta name="description" content="" />
        <meta name="keywords" content="瓦百景,採用サイト" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg" />
        <meta property="og:site_name" content="" />
        <meta property="og:description" content="" />
    <?php elseif (is_page('adult')) : ?>

    <?php elseif (is_page((array('contact', 'confirm')))) : ?>

    <?php elseif (is_page('thanks')) : ?>

    <?php elseif (is_single()) : ?>

    <?php endif; ?>
    <meta name="twitter:card" content="summary_large_image">
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
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__nav-link">職人の矜持</a>
                        </li>
                        <li class="p-header__nav-list">
                            <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="p-header__nav-link">募集要項</a>
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
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="p-drawer-content__link">
                                    <span class="p-drawer-content__link-en">CONCEPT</span>
                                    <span class="p-drawer-content__link-ja">コンセプト</span>
                                </a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="p-drawer-content__link">
                                    <span class="p-drawer-content__link-en">PRIDE</span>
                                    <span class="p-drawer-content__link-ja">職人の矜持</span>
                                </a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="p-drawer-content__link">
                                    <span class="p-drawer-content__link-en">RECRUIT</span>
                                    <span class="p-drawer-content__link-ja">募集要項</span>
                                </a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-drawer-content__link">
                                    <span class="p-drawer-content__link-en">ENTRY</span>
                                    <span class="p-drawer-content__link-ja">エントリー</span>
                                </a>
                            </li>
                            
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </header>
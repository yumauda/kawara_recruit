<?php get_header(); ?>
<main>
  <div class="l-inner">
    <p class="test">vite環境のテストで</p>
    <?php get_template_part('includes/reserve'); ?>
  </div>
  <section class="p-top-scroll">
    <div class="l-inner">
      <div class="p-top-scroll__content">
        <div class="p-top-scroll__block">
          <figure class="p-top-scroll__img">
            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/top/top_scroll_img1.webp" alt="一枚の瓦に、400年を背負う歴史が宿る。" width="940" height="1040">
          </figure>
          <div class="p-top-scroll__detail">
            <h3 class="p-top-scroll__title">一枚の瓦に、<br>400年を背負う<br>歴史が宿る。</h3>
            <p class="p-top-scroll__text">石州瓦の起源は、400年前の江戸時代にさかのぼる。<br>
              山陰の厳しい風雪に耐え、人々の暮らしを守るために生まれた瓦は、やがて島根の地に根づき、文化そのものとなった。<br>
              一枚の瓦に込められた歴史は、単なる建材の域を超え、この地域が誇る伝統として受け継がれてきた。<br>
              その重みを背負うことが、私たち職人の誇りである。</p>
          </div>
        </div>
        <div class="p-top-scroll__block">
          <figure class="p-top-scroll__img">
            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/top/top_scroll_img2.webp" alt="400年を背負う歴史が宿る。" width="940" height="1040">
          </figure>
          <div class="p-top-scroll__detail">
            <h3 class="p-top-scroll__title">職人の手が、<br>静かに文化を<br>築いてきた。</h3>
            <p class="p-top-scroll__text">石州瓦の強さは、自然の恵みと人の手が生み出すものだ。<br>
              山の土を掘り、練り、形を整え、炎の中で焼き上げる。<br>
              派手さはない。だが、その過程にこそ職人の矜持がある。<br>
              災害に耐え、家々を守り続けてきたその力は、土と火、そして職人の手が築いた確かな証。<br>
              この技があるからこそ、地域の暮らしは守られてきた。</p>
          </div>
        </div>
        <div class="p-top-scroll__block">
          <figure class="p-top-scroll__img">
            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/top/top_scroll_img3.webp" alt="揺るぎない誇りが宿る。" width="940" height="1040">
          </figure>
          <div class="p-top-scroll__detail">
            <h3 class="p-top-scroll__title">一枚一枚に、<br>揺るぎない<br>誇りが宿る。</h3>
            <p class="p-top-scroll__text">伝統はただ保存するものではなく、手を動かし続けてこそ生きる。<br>
              400年受け継がれてきた石州瓦の技は、今を生きる私たちの覚悟によって次の世代へと渡される。<br>
              一枚の瓦をつくるたび、私たちは文化を守り、未来を築いている。<br>
              誇りを胸に、技を磨き、覚悟をもって受け継ぐ。<br>
              その姿勢こそが、島根の伝統をこれからも生かし続ける道である。</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="p-middle-slider">
    <div class="p-middle-slider__content">
      <!-- Slider main container -->
      <div class="swiper slider-middle">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <figure class="p-middle-slider__img">
              <img src="<?php echo get_template_directory_uri() ?>/images/top/top_slider1.webp" alt="">
            </figure>
          </div>
          <div class="swiper-slide">
            <figure class="p-middle-slider__img">
              <img src="<?php echo get_template_directory_uri() ?>/images/top/top_slider1.webp" alt="">
            </figure>
          </div>
          <div class="swiper-slide">
            <figure class="p-middle-slider__img">
              <img src="<?php echo get_template_directory_uri() ?>/images/top/top_slider1.webp" alt="">
            </figure>
          </div>
          <div class="swiper-slide">
            <figure class="p-middle-slider__img">
              <img src="<?php echo get_template_directory_uri() ?>/images/top/top_slider1.webp" alt="">
            </figure>
          </div>


        </div>

      </div>
    </div>
  </section>

  <section class="p-recruit-info">
    <div class="l-inner">
      <div class="p-recruit-info__row">
        <div class="p-recruit-info__top">
          <p class="p-recruit-info__en">_Recruit Info</p>
          <h3 class="p-recruit-info__title">募集要項</h3>
        </div>
        <ul class="p-recruit-info__tab-item" role="tablist">
          <li class="p-recruit-info__tab-list" role="presentation">
            <button type="button" id="tab1" class="p-recruit-info__tab-btn" role="tab" aria-controls="tabpanel1" aria-expanded="true" aria-selected="true" data-tabTitle="New recruitment application guidelines">
              職種が入ります
            </button>
          </li>
          <li class="p-recruit-info__tab-list" role="presentation">
            <button type="button" id="tab2" class="p-recruit-info__tab-btn" role="tab" aria-controls="tabpanel2" aria-expanded="false" aria-selected="false" data-tabTitle="Mid-Career Recruitment Requirements">
              職種が入ります
            </button>
          </li>
        </ul>
      </div>


      <div class="p-recruit-info__content">
        <div class="p-tab">
          <div class="p-tab__area">

            <div id="tabpanel1" class="p-tab__panel" role="tabpanel" aria-labelledby="tab1" aria-hidden="false" tabindex="0">

              <table class="p-table__table p-table__table--possible">
                <tr>
                  <th class="p-table__item">業務内容</th>
                  <td class="p-table__body">
                    <div class="p-table__select">
                      <p class="p-table__top">内容が入ります。ダミーテキストダミーテキストダミーテキスト</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th class="p-table__item">勤務地</th>
                  <td class="p-table__body">
                    <div class="p-table__select">
                      <p class="p-table__top">内容が入ります。ダミーテキストダミーテキストダミーテキスト</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th class="p-table__item">勤務時間</th>
                  <td class="p-table__body">
                    <div class="p-table__select">
                      <p class="p-table__top">内容が入ります。ダミーテキストダミーテキストダミーテキスト</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th class="p-table__item">休憩時間</th>
                  <td class="p-table__body">
                    <div class="p-table__select">
                      <p class="p-table__top">内容が入ります。ダミーテキストダミーテキストダミーテキスト</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th class="p-table__item">休日休暇</th>
                  <td class="p-table__body">
                    <div class="p-table__select">
                      <p class="p-table__top">内容が入ります。ダミーテキストダミーテキストダミーテキスト</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th class="p-table__item">給与条件</th>
                  <td class="p-table__body">
                    <div class="p-table__select">
                      <p class="p-table__top">内容が入ります。ダミーテキストダミーテキストダミーテキスト</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th class="p-table__item">昇給</th>
                  <td class="p-table__body">
                    <div class="p-table__select">
                      <p class="p-table__top">内容が入ります。ダミーテキストダミーテキストダミーテキスト</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th class="p-table__item">福利厚生</th>
                  <td class="p-table__body">
                    <div class="p-table__select">
                      <p class="p-table__top">内容が入ります。ダミーテキストダミーテキストダミーテキスト</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th class="p-table__item">応募条件</th>
                  <td class="p-table__body">
                    <div class="p-table__select">
                      <p class="p-table__top">内容が入ります。ダミーテキストダミーテキストダミーテキスト</p>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
            <div id="tabpanel2" class="p-tab__panel" role="tabpanel" aria-labelledby="tab2" aria-hidden="true" tabindex="0">
              <table class="p-table__table p-table__table--possible">
                <tr>
                  <th class="p-table__item">業務内容2</th>
                  <td class="p-table__body">
                    <div class="p-table__select">
                      <p class="p-table__top">内容が入ります。ダミーテキストダミーテキストダミーテキスト</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th class="p-table__item">勤務地</th>
                  <td class="p-table__body">
                    <div class="p-table__select">
                      <p class="p-table__top">内容が入ります。ダミーテキストダミーテキストダミーテキスト</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th class="p-table__item">勤務時間</th>
                  <td class="p-table__body">
                    <div class="p-table__select">
                      <p class="p-table__top">内容が入ります。ダミーテキストダミーテキストダミーテキスト</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th class="p-table__item">休憩時間</th>
                  <td class="p-table__body">
                    <div class="p-table__select">
                      <p class="p-table__top">内容が入ります。ダミーテキストダミーテキストダミーテキスト</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th class="p-table__item">休日休暇</th>
                  <td class="p-table__body">
                    <div class="p-table__select">
                      <p class="p-table__top">内容が入ります。ダミーテキストダミーテキストダミーテキスト</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th class="p-table__item">給与条件</th>
                  <td class="p-table__body">
                    <div class="p-table__select">
                      <p class="p-table__top">内容が入ります。ダミーテキストダミーテキストダミーテキスト</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th class="p-table__item">昇給</th>
                  <td class="p-table__body">
                    <div class="p-table__select">
                      <p class="p-table__top">内容が入ります。ダミーテキストダミーテキストダミーテキスト</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th class="p-table__item">福利厚生</th>
                  <td class="p-table__body">
                    <div class="p-table__select">
                      <p class="p-table__top">内容が入ります。ダミーテキストダミーテキストダミーテキスト</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th class="p-table__item">応募条件</th>
                  <td class="p-table__body">
                    <div class="p-table__select">
                      <p class="p-table__top">内容が入ります。ダミーテキストダミーテキストダミーテキスト</p>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="p-submit">
    <div class="p-submit__inner">
      <a href="#" class="p-submit__btn">
        <div class="p-submit__row">
          <div class="p-submit__btn-top">
            <h3 class="p-submit__title">Consultation<br>&emsp;_contact</h3>
            <p class="p-submit__subtitle">ご相談・<br>お問い合わせ</p>
          </div>
          <div class="p-submit__en-wrapper">
            <p class="p-submit__en-main">_Sekishu Kawara<br>_Sekishu Tiles</p>
            <p class="p-submit__en-sub">Sekishu Kawara are clay roof tiles produced in the Iwami region of Shimane Prefecture. They are one of the three major roof tiles in Japan, along with Sanshu Kawara (Aichi Prefecture) and Awaji Kawara (Hyogo Prefecture).</p>
          </div>
        </div>
        <div class="p-submit__btn-bottom">
          <p class="p-submit__btn-bottom-text">瓦のこと、屋根のこと、気になることがございましたら、<br>
            お問い合わせフォームよりお気軽にご相談ください。</p>
          <div class="p-submit__icon">
            <svg id="グループ_23517" data-name="グループ 23517" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 220 220">
              <rect id="長方形_1137" data-name="長方形 1137" width="220" height="220" rx="110" fill="#fff" />
              <g id="グループ_23372" data-name="グループ 23372" transform="translate(88 97.167)">
                <path id="パス_42625" data-name="パス 42625" d="M189.089-2035.115l14.667,12.833-14.667,12.834" transform="translate(-159.755 2035.115)" fill="none" stroke="#222" stroke-width="5" />
                <path id="パス_42624" data-name="パス 42624" d="M189.089-2035.115l14.667,12.833-14.667,12.834" transform="translate(-174.422 2035.115)" fill="none" stroke="#222" stroke-width="5" />
                <path id="パス_42623" data-name="パス 42623" d="M189.089-2035.115l14.667,12.833-14.667,12.834" transform="translate(-189.089 2035.115)" fill="none" stroke="#222" stroke-width="5" />
              </g>
            </svg>

          </div>
        </div>

      </a>
    </div>
  </section>
</main>
<?php get_footer() ?>
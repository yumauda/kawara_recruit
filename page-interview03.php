<?php get_header(); ?>
<main>
  <section class="p-page-mv">
    <div class="p-page-mv__inner">
      <div class="p-page-mv__content">
        <figure class="p-page-mv__img">
          <img src="<?php echo get_template_directory_uri() ?>/images/interview03/page_mv_01.webp" alt="" width="1920" height="1080">
        </figure>
        <div class="p-page-mv__detail">
          <h2 class="p-page-mv__title">一枚を整える<br>まなざし</h2>
          <div class="p-page-mv__detail-row">
            <p class="p-page-mv__detail-occupation">2002年入社 製造部</p>
            <p class="p-page-mv__detail-name">村上&emsp;浩</p>
          </div>
        </div>
      </div>

    </div>
  </section>
  <section class="p-page-content">
    <div class="p-page-content__inner">
      <div class="p-page-content__content">
        <div class="p-page-content__left">
          <figure class="p-page-content__img">
            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/interview03/content_img_01.webp" alt="村上浩" width="350" height="350">
          </figure>
          <div class="p-page-content__name-wrapper">
            <p class="p-page-content__name-ja">村上&emsp;浩</p>
            <p class="p-page-content__name-en">MURAKAMI HIROSHI </p>
          </div>
        </div>
        <div class="p-page-content__right">
          <div class="p-page-content__block">
            <h3 class="p-page-content__title">はじめに ― この仕事との出会い</h3>
            <p class="p-page-content__text">仕事を始めたばかりの頃は、正直「瓦ってどうやって作るんだろう？」と何も分かっていませんでした。<br>
              製造工程も想像がつかず、現場に入りながら一つひとつ覚えていく毎日でした。最初は戸惑うことも多かったのですが、続けるうちに機械の扱い方や工程の流れが体に染み込み、気がつけば4〜5年経って一人前として任されるようになりました。<br>
              振り返ると、分からないところから少しずつ学んでいく過程そのものが、自分にとって大きな成長につながったと感じています。</p>
            <figure class="p-page-content__main-img">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/interview03/content_mainImg01.webp" alt="インタビュー写真" width="900" height="500">
            </figure>
          </div>
          <div class="p-page-content__block">
            <h3 class="p-page-content__title">瓦づくりを支える“機械の手”</h3>
            <p class="p-page-content__text">私は成形工程を担当しており、機械ラインの運転が主な仕事です。<br>
              粘土をプレスして瓦の形をつくり、そこに釉薬をかけて次のラインへ送り出すまでの工程を担っています。一見すると機械が自動で進めているように見えますが、ラインの状態を見ながら調整したり、仕上がりに問題がないか確認したりと、人の判断が欠かせない工程です。<br>
              瓦の形がきれいに整って次の工程へスムーズに流れていくと、「今日もいい仕事ができたな」と手応えを感じます。</p>
          </div>
          <div class="p-page-content__block">
            <h3 class="p-page-content__title">品質とこだわり</h3>
            <p class="p-page-content__text">特に気をつけているのは、成形した瓦に傷や不備がないかを丁寧に確認することです。<br>
              最終的には機械ではなく人間の目が頼りになるので、少しの傷や違和感も見逃さないように集中して見ています。不備を見つけた時は、まず原因を探り、金型を交換したり機械の設定を調整したりして改善を図ります。<br>
              問題が解消されて良い形が出てきた瞬間はホッとしますし、自分の判断で品質が守られている実感があって励みになります。</p>

          </div>
          <div class="p-page-content__img-row">
            <figure class="p-page-content__row-img">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/interview03/content_mainImg02.webp" alt="インタビュー写真" width="440" height="300">
            </figure>
            <figure class="p-page-content__row-img">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/interview03/content_mainImg03.webp" alt="インタビュー写真" width="440" height="300">
            </figure>
          </div>

          <div class="p-page-content__block mt100">
            <h3 class="p-page-content__title">チームワークと現場の空気</h3>
            <p class="p-page-content__text">製造部は、年齢が近い仲間もいれば、経験豊富な大先輩もいて、幅広い世代が一緒に働いています。<br>
              年齢差はありますが、気を遣わずに話せる空気があって、何でも相談しやすい雰囲気です。分からないことがあれば先輩が気軽に教えてくれますし、雑談もしやすく、現場にいても自然と笑顔が出るような環境です。<br>
              みんなが力を合わせながら、一つの製品をつくっているという一体感が現場の大きな強みだと感じています。</p>
            <h3 class="p-page-content__title mt100">あなたにとって石州瓦とは？</h3>
            <p class="p-page-content__text p-page-content__text-bottom">街の景観を守り続ける、美しい瓦です。</p>
            <figure class="p-page-content__main-img mt100">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/interview03/content_mainImg04.webp" alt="インタビュー写真" width="900" height="500">
            </figure>
          </div>
        </div>
      </div>

    </div>
  </section>
  <?php get_template_part('includes/slider'); ?>

  <?php get_template_part('includes/submit'); ?>
</main>
<?php get_footer() ?>
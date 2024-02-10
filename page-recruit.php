<?php get_header(); ?>
    <!-- 下層ページのメインビュー -->
    <section class="p-sub-mv">
        <div class="p-sub-mv__title">
        <div class="c-section-header c-section-header--white">
            <h1 class="c-section-header__engtitle">recruit</h1>
            <p class="c-section-header__jatitle">採用情報</p>
        </div>
        </div>
    </section>

    <!-- パンくず -->
    <?php get_template_part('breadcrumb'); ?>

    <section class="p-page-recruit">
        <div class="p-page-recruit__inner l-inner">
        <div class="p-page-recruit__title">
            <h2 class="p-page-recruit__main">Enjoy&nbsp;<br class="u-mobile">Creation&nbsp;for<br class="u-mobile">&nbsp;Client</h2>
            <p class="p-page-recruit__sub">楽しむ心が良いモノを生む</p>
        </div>
        <p class="p-page-recruit__text">
            心を弾ましながら<br>
            夢いっぱいのサイトを作ろう！<br>
            お客様も自分もみんなが幸せになれるように
        </p>
        <div class="p-page-recruit__image">
            <picture>
            <source srcset="<?php echo esc_url(get_theme_file_uri('/images/common/page-recruit-pc.png')); ?>" media="(min-width: 768px)"/>
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/page-recruit-sp.png')); ?>" alt="女性たちの写真"><!-- それ以外で表示 -->
            <picture>
        </div>
        <div class="p-page-recruit__recruit">
            <div class="p-page-recruit__header c-section-header">
            <h2 class="c-section-header__subpage">募集中の職種</h2>
            </div>
            <!-- ループ -->
            <div class="p-page-recruit__items">
            <div class="p-page-recruit__item">
                <h3 class="p-page-recruit__job-title">Webデザイナー</h3>
            </div>
            <dl class="p-page-recruit__detail">
                <div class="p-page-recruit__lists p-common-lists">
                <div class="p-common-lists__list">
                    <dt>雇用形態</dt>
                    <dd>正社員</dd>
                </div>
                <div class="p-common-lists__list">
                    <dt>給与</dt>
                    <dd>400万円〜600万円（経験・能力を考慮のうえ優遇）</dd>
                </div>
                <div class="p-common-lists__list">
                    <dt>仕事内容</dt>
                    <dd>Webサイトの制作。サイトのデザインとコーディングを担当していただきます。</dd>
                </div>
                <div class="p-common-lists__list">
                    <dt>勤務時間</dt>
                    <dd>10:00 〜 19:00（実働8時間、休憩1時間）</dd>
                </div>
                <div class="p-common-lists__list">
                    <dt>応募資格</dt>
                    <dd>PhotoshopやXDなどのデザインツールの使い方を理解し、コーディングの基礎スキルがある方。<br>
                    実務未経験でも学校や独学で学習した方を歓迎します。<br>
                    ・デザインやコーディングを楽しめる方<br>
                    ・常にアンテナを張って積極的にトレンドや最新の技術を取り入れる方<br>
                    ・お客様と一緒に楽しみながら高い目的を目指せる方
                    </dd>
                </div>
                </div>
            </dl>
            <div class="p-page-recruit__btn">
                <a href="#" target="_blank" class="c-button">応募する</a>
                <p>求人サイトへ遷移します</p>
            </div>
            </div>
        </div>
        <div class="p-page-recruit__movies">
            <div class="p-page-recruit__header c-section-header">
            <h2 class="c-section-header__subpage">社内ムービー</h2>
            </div>
            <div class="p-page-recruit__movie">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/1svp6YC6pNY?si=yS9OwZgeaEeE6T9N" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        </div>
    </section>

    <section class="p-contact">
        <div class="p-contact__inner l-inner">
            <div class="p-contact__header">
                <div class="c-section-header">
                <h2 class="c-section-header__engtitle">contact</h2>
                <p class="c-section-header__jatitle">お問い合わせ</p>
                </div>
            </div>
            <div class="p-contact__contents">
                <div class="p-contact__text-block">
                <p class="p-contact__text">Webサイトの制作のご依頼やお見積りなど、<br class="u-mobile">
                    お気軽にご相談ください。
                </p>
                </div>
                <div class="p-contact__btn">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="c-button">more</a>
                </div>
            </div>
        </div>
    </section>

    <div class="c-to-top">
        <a href="#top"><span></span></a>
    </div>
<?php get_footer(); ?>
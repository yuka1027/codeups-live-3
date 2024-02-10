<?php get_header(); ?>
    <!-- 下層ページのメインビュー -->
    <section class="p-sub-mv">
        <div class="p-sub-mv__title">
            <div class="c-section-header c-section-header--white">
                <h1 class="c-section-header__engtitle">company</h1>
                <p class="c-section-header__jatitle">私たちについて</p>
            </div>
        </div>
    </section>

    <!-- パンくず -->
    <?php get_template_part('breadcrumb'); ?>

    <section class="p-company p-company--subpage">
        <div class="p-company__inner l-inner">
        <div class="p-company__header">
            <div class="c-section-header">
            <h2 class="c-section-header__subpage">メッセージ</h2>
            </div>
        </div>
        <div class="p-company__contents">
            <h3 class="p-company__subtitle"><span class="p-company__bg-yellow">サイトのゴール&nbsp;=</span><br class="u-mobile">
            <span class="p-company__bg-yellow">夢を叶えること</span></h3>
            <div class="p-company__content">
                <p class="p-company__text">
                お客様の夢を叶えること。<br>
                それがWebサイトのゴールであり、<br class="u-mobile">
                私たちが目指すことです。<br>
                だからこそちゃんと成果を出すサイトを<br class="u-mobile">
                全力でお作りします。<br>
                お客様の笑顔を見たい。<br>
                夢を実現する手助けをさせてください。
                </p>
            </div>
        </div>
        <div class="p-company__message">
            <div class="p-company__message-image">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/message.jpg')) ?>" alt="">
            </div>
            <div class="p-company__message-text">
            <p>テキストが入りますテキストが入りますテキストが入ります
                テキストが入りますテキストが入りますテキストが入ります
                テキストが入りますテキストが入りますテキストが入ります
            </p>
            <p>
                テキストが入りますテキストが入りますテキストが入ります
                テキストが入りますテキストが入りますテキストが入ります
                テキストが入りますテキストが入りますテキストが入ります
                テキストが入りますテキストが入りますテキストが入ります
                テキストが入りますテキストが入りますテキストが入ります
                テキストが入りますテキストが入りますテキストが入ります
            </p>
            <p>代表取締役社長 猫山ポン太郎</p>
            </div>
        </div>
        </div>
    </section>

    <section class="l-company-info p-company-info">
        <div class="p-company-info__inner l-inner">
        <div class="p-company-info__header c-section-header">
            <h2 class="c-section-header__subpage">会社概要</h2>
        </div>
        <dl class="p-company-info__detail">
            <div class="p-company-info__items p-common-lists">
            <div class="p-common-lists__list">
                <dt>社名</dt>
                <dd>株式会社PON DESIGN</dd>
            </div>
            <div class="p-common-lists__list">
                <dt>設立</dt>
                <dd>2020.01.10</dd>
            </div>
            <div class="p-common-lists__list">
                <dt>代表取締役</dt>
                <dd>猫山ポン太郎</dd>
            </div>
            <div class="p-common-lists__list">
                <dt>資本金</dt>
                <dd>1,000,000円</dd>
            </div>
            <div class="p-common-lists__list">
                <dt>所在地</dt>
                <dd>〒555-5555&nbsp;東京都千代田区&nbsp;ポンビルディング&nbsp;606</dd>
            </div>
            </div>
        </dl>
        <!-- Google Map埋め込み -->
        <div class="p-company-info__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26243.47408897691!2d135.1933264!3d34.6942253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60008ee4edbe6cab%3A0xd8ea3e11b6d46d98!2z5LiJ5a6u6aeF!5e0!3m2!1sja!2sjp!4v1707478855024!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <a href="#" target="_blank" class="p-company-info__map-btn">Google mapで見る</a>
        </div>
    </section>

    <?php get_template_part('contact'); ?>
<?php get_footer(); ?>
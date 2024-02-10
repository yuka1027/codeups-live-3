<?php get_header(); ?>

    <section class="l-mv p-mv">
        <div class="p-mv__inner">
        <div class="p-mv__header">
            <h2 class="p-mv__title">web&nbsp;design<br class="u-mobile">
            specialist</h2>
            <p class="p-mv__subtitle">お客様の夢を叶える<br class="u-mobile">Webサイトを制作</p>
            <div class="p-mv__btn">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="c-mv-btn">contact</a>
            </div>
        </div>
        <div class="p-mv__scroll"><span>scroll</span></div>
        </div>
    </section>


    <section class="l-topNews p-news js-news">
        <div class="p-news__inner l-inner">
        <div class="p-news__title">
            <div class="c-section-header">
            <p class="c-section-header__engtitle">news</p>
            <h2 class="c-section-header__jatitle c-section-header__jatitle--left">お知らせ</h2>
            </div>
        </div>
        <div class="p-news__items">
            <!-- ループ処理 -->
            <div class="p-news__item p-news-content">
                <div class="p-news-content__meta">
                    <time class="p-news-content__date" datetime="2024-02-06">2024.02.06</time>
                    <span class="p-news-content__category">お知らせ</span>
                </div>
                <div class="p-news-content__link">
                    <a href="#" class="p-news-content__category-text">Webデザインニュースサイト
                    「ウェブマガジン」に取材いただきました</a>
                </div>
            </div>
            <!-- ループ処理終了 -->
            <div class="p-news__item p-news-content">
            <div class="p-news-content__meta">
                <time class="p-news-content__date" datetime="2024-02-06">2024.02.06</time>
                <span class="p-news-content__category">お知らせ</span>
            </div>
            <div class="p-news-content__link">
                <a href="#" class="p-news-content__category-text">Webデザインニュースサイト
                「ウェブマガジン」に取材いただきました</a>
            </div>
            </div>
            <div class="p-news__item p-news-content">
            <div class="p-news-content__meta">
                <time class="p-news-content__date" datetime="2024-02-06">2024.02.06</time>
                <span class="p-news-content__category">お知らせ</span>
            </div>
            <div class="p-news-content__link">
                <a href="#" class="p-news-content__category-text">Webデザインニュースサイト
                「ウェブマガジン」に取材いただきました</a>
            </div>
            </div>
        </div>
        </div>
    </section>

    <section class="l-topService p-service">
        <div class="p-service__inner l-inner">
        <div class="p-service__header">
            <div class="c-section-header">
            <h2 class="c-section-header__engtitle">service</h2>
            <p class="c-section-header__jatitle">事業内容</p>
            </div>
        </div>
        <div class="p-service__items">
            <!-- ループ -->
            <div class="p-service__item p-card">
            <div class="p-card__img">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/common/service01.jpg')); ?>" alt="新規サイトはもちろん、サイトリニューアルやランディングページ制作も行っております。">
            </div>
            <div class="p-card__body">
                <h3 class="p-card__title">Webサイト制作</h3>
                <p class="p-card__text">新規サイトはもちろん、サイトリニューアルやランディングページ制作も行っております。</p>
            </div>
            </div>
            <!-- ループ終了 -->
            <div class="p-service__item p-card">
            <div class="p-card__img">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/common/service02.jpg')); ?>" alt="サイトの更新作業や独自のアクセス解析に基づいたサイト改善のご提案が可能です。">
            </div>
            <div class="p-card__body">
                <h3 class="p-card__title">Webサイト更新</h3>
                <p class="p-card__text">サイトの更新作業や独自のアクセス解析に基づいたサイト改善のご提案が可能です。</p>
            </div>
            </div>
            <div class="p-service__item p-card">
            <div class="p-card__img">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/common/service03.jpg')); ?>" alt="スマートフォンアプリ開発の他、Vue.jsやReactによるWebアプリの開発が可能です。">
            </div>
            <div class="p-card__body">
                <h3 class="p-card__title">アプリ開発</h3>
                <p class="p-card__text">スマートフォンアプリ開発の他、Vue.jsやReactによるWebアプリの開発が可能です。</p>
            </div>
            </div>
        </div>
        <div class="p-service__btn">
            <a href="<?php echo esc_url(home_url('/service')); ?>" class="c-button">more</a>
        </div>
        </div>
    </section>

    <section class="l-topWorks p-works">
        <div class="p-works__inner l-inner">
        <div class="p-works__content">
            <div class="p-works__images">
            <!-- Swiper -->
            <div class="swiper js-works-swiper">
                <div class="swiper-wrapper">
                <div class="swiper-slide p-works__img">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/common/works01.jpg')); ?>" alt="">
                </div>
                <div class="swiper-slide p-works__img">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/common/works02.jpg')); ?>" alt="">
                </div>
                <div class="swiper-slide p-works__img">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/common/works03.jpg')); ?>" alt="">
                </div>
                </div>
            </div>
            <div class="swiper-pagination js-works-pagination"></div>
            </div>
            <div class="p-works__text-body">
            <div class="p-works__title">
                <div class="c-section-header">
                <p class="c-section-header__engtitle">works</p>
                <h2 class="c-section-header__jatitle">制作実績</h2>
                </div>
            </div>
            <div class="p-works__text-block">
                <p class="p-works__text">
                様々なジャンルのWebサイト制作が可能です。<br>
                ご購入やお申込み数の増加などを実現します！
                </p>
            </div>
            <div class="p-works__btn">
                <a href="<?php echo esc_url(home_url('/works')); ?>" class="c-button">more</a>
            </div>
            </div>
        </div>
        </div>
    </section>

    <section class="l-topCompany p-company">
        <div class="p-company__inner l-inner">
        <div class="p-company__header">
            <div class="c-section-header">
            <h2 class="c-section-header__engtitle">company</h2>
            <p class="c-section-header__jatitle">私たちについて</p>
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
            <div class="p-company__btn">
                <a href="<?php echo esc_url(home_url('/company')); ?>" class="c-button">more</a>
            </div>
        </div>
        </div>
    </section>

    <section class="l-topRecruit p-recruit">
        <div class="p-recruit__inner l-inner">
        <div class="p-recruit__wrapper">
            <div class="p-recruit__img">
            <img src="<?php echo esc_url(get_theme_file_uri('./images/common/recruit.jpg')); ?>" alt="">
            </div>
            <div class="p-recruit__contents">
            <div class="p-recruit__header">
                <div class="c-section-header">
                <h2 class="c-section-header__engtitle">recruit</h2>
                <p class="c-section-header__jatitle">採用情報</p>
                </div>
            </div>
            <div class="p-recruit__text-block">
                <p class="p-recruit__text">私たちと一緒に働きませんか？</p>
            </div>
            <div class="p-recruit__btn">
                <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="c-button">more</a>
            </div>
            </div>
        </div>
        </div>
    </section>

    <?php get_template_part('contact'); ?>

<?php get_footer(); ?>
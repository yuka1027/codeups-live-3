<?php get_header(); ?>
    <!-- 下層ページのメインビュー -->
    <section class="p-sub-mv">
        <div class="p-sub-mv__title">
        <div class="c-section-header c-section-header--white">
            <h1 class="c-section-header__engtitle">news</h1>
            <p class="c-section-header__jatitle">お知らせ</p>
        </div>
        </div>
    </section>

    <!-- パンくず -->
    <?php get_template_part('breadcrumb'); ?>

    <div class="l-archive-home p-archive-home">
        <div class="p-archive-home__inner l-inner">
        <!-- ループ処理 -->
        <!-- <div class="p-archive-home__item p-news-content">
            <div class="p-news-content__meta">
            <time class="p-news-content__date" datetime="2024-02-06">2024.02.06</time>
            <span class="p-news-content__category">お知らせ</span>
            </div>
            <div class="p-news-content__link">
            <a href="#" class="p-news-content__category-text">Webデザインニュースサイト
            「ウェブマガジン」に取材いただきました</a>
            </div>
        </div> -->
        <!-- ループ処理終了 -->

        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
            <div class="p-archive-home__item p-news-content">
                <div class="p-news-content__meta">
                    <time class="p-news-content__date" datetime="<?php the_time('c'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                    <?php
                        $terms = get_the_terms($post->ID, 'category');
                        foreach($terms as $term) {
                            echo '<span class="p-news-content__category">' . $term->name . '</span>';
                        }
					?>
                </div>
                <div class="p-news-content__link">
                    <a href="<?php the_permalink(); ?>" class="p-news-content__category-text"><?php the_title(); ?></a>
                </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>

    <!-- ページナビ -->
    <div class="l-pagenavi">
        <?php wp_pagenavi(); ?>
    </div>

    <?php get_template_part('contact'); ?>
<?php get_footer(); ?>
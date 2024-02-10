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

    <section class="l-single-body p-single-body">
        <div class="p-single-body__inner l-inner">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                    <div class="p-single-body__title">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="p-single-body__item p-news-content">
                        <div class="p-news-content__meta">
                            <time class="p-news-content__date" datetime="<?php the_time('c'); ?>"><?php echo get_the_date('Y.m.d') ?></time>
                            <span class="p-news-content__category"><?php the_category(); ?></span>
                        </div>
                    </div>
                    <div class="p-single-body__image">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large'); ?>
                        <?php else : ?>
                                <img src="<?php echo esc_url(get_theme_file_uri('images/common/dummy.jpg')); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="p-single-body__content">
                        <?php the_content(); ?>
                    </div>
                    <div class="c-page-link">
                        <div class="c-page-link__inner l-inner">
                            <div class="c-page-link__flex">
                                <div class="c-page-link__prev">
                                    <?php previous_post_link('%link', '%title'); ?>
                                </div>
                                <div class="c-page-link__next">
                                    <?php next_post_link('%link', '%title'); ?>
                                </div>
                            </div>
                            <div class="c-page-link__archive">
                                <a href="<?php echo esc_url(home_url('/news')); ?>">news一覧</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

    <?php get_template_part('contact'); ?>

<?php get_footer(); ?>
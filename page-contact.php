<?php get_header(); ?>
    <!-- 下層ページのメインビュー -->
    <section class="p-sub-mv">
        <div class="p-sub-mv__title">
        <div class="c-section-header c-section-header--white">
            <h1 class="c-section-header__engtitle">contact</h1>
            <p class="c-section-header__jatitle">お問い合わせ</p>
        </div>
        </div>
    </section>

    <!-- パンくず -->
    <?php get_template_part('breadcrumb'); ?>

    <div class="l-page-contact p-page-contact">
        <div class="p-page-contact__inner l-inner">
            <div class="p-page-contact__text-block">
                <p class="p-page-contact__text">Webサイトの制作のご依頼やお見積りなど、<br class="u-mobile">お気軽にご相談ください。</p>
            </div>
            <div class="p-page-contact__content p-form">
                <form action="" method="post" id="">
                <dl class="p-form__item">
                    <dt>お問い合わせ種別 <span><sup>*</sup>必須</span></dt>
                    <dd class="p-form__radio">
                    <label><input type="radio" name="target" value="ラジオボタン" checked/><span>お仕事のご依頼・ご相談</span></label>
                    <label><input type="radio" name="target" value="ラジオボタン" /><span>お見積りのご依頼</span></label>
                    <label><input type="radio" name="target" value="ラジオボタン" /><span>採用について</span></label>
                    <label><input type="radio" name="target" value="ラジオボタン" /><span>その他</span></label>
                    </dd>
                </dl>
                <dl class="p-form__item">
                    <dt>お名前 <span><sup>*</sup>必須</span></dt>
                    <dd>
                    <input type="text" name="your-name" value="" required />
                    </dd>
                </dl>
                <dl class="p-form__item">
                    <dt>会社名</dt>
                    <dd>
                    <input type="text" name="company" value="" />
                    </dd>
                </dl>
                <dl class="p-form__item">
                    <dt>メールアドレス <span><sup>*</sup>必須</span></dt>
                    <dd>
                    <input type="email" name="mail_address" value="" required />
                    </dd>
                </dl>
                <dl class="p-form__item">
                    <dt>電話番号 <span class="p-form__tel-info">（半角数字ハイフンなし）</span></dt>
                    <dd>
                    <input type="tel" name="your-tel" value="" />
                    </dd>
                </dl>
                <dl class="p-form__item">
                    <dt>お問い合わせ内容 <span><sup>*</sup>必須</span></dt>
                    <dd>
                    <textarea name="contents" required></textarea>
                    </dd>
                </dl>
                <dl class="p-form__item">
                    <dt>PON&nbsp;DESIGNをどちらでお知りになりましたか？<span><sup>*</sup>必須</span></dt>
                    <dd>
                    <select name="pondesign" required>
                        <option value="">選択してください</option>
                        <option value="option_1">Google/Yahoo検索</option>
                        <option value="option_2">SNS</option>
                        <option value="option_3">ブログ</option>
                        <option value="option_4">友人や知人</option>
                        <option value="option_5">その他</option>
                    </select>
                    </dd>
                </dl>
                <div class="p-form__btn">
                    <input type="button" value="送信する" />
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="c-to-top">
        <a href="#top"><span></span></a>
    </div>
<?php get_footer(); ?>
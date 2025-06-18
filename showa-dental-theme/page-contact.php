<?php get_header(); ?>

<main>
    <div class="under-mv">
        <div class="under-mv__ttl-bl">
            <p class="under-mv__ttl-en">Contact</p>
            <h1 class="under-mv__ttl">お問い合わせ</h1>
        </div>
        <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/top/problem.webp" alt="メイン画像" loading="lazy" width="1240" height="842">
    </div>
    <section id="under-intr" class="last-sec">
        <div class="breadcrumb__bl inner">
            <ol class="breadcrumb__list">
                <li><a href="<?= home_url() ?>">ホーム</a></li>
                <li>お問い合わせ</li>
            </ol>
        </div>
        <div class="u-inner">
            <?php the_content(); ?>
        </div>
    </section>
    <?php get_template_part('assets/inc/info'); ?>
    <?php get_template_part('assets/inc/clinic'); ?>
</main>
<?php get_footer(); ?>
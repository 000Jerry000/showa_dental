<?php get_header(); ?>

<main>
  <div class="under-mv">
    <div class="under-mv__ttl-bl">
      <p class="under-mv__ttl-en">News</p>
      <h1 class="under-mv__ttl">お知らせ</h1>
    </div>
    <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/top/point03.webp" alt="メイン画像" loading="lazy" width="1240" height="842">
  </div>
  <section id="under-intr" class="last-sec">
    <div class="breadcrumb__bl inner">
      <ol class="breadcrumb__list">
        <li><a href="<?= home_url() ?>">ホーム</a></li>
        <li>お知らせ</li>
      </ol>
    </div>
    <div class="w1040 info__flex">
      <div class="info__main-bl">
        <h2 class="info__ttl"><?php the_title(); ?></h2>
        <p class="post-list__date"><?php the_time('Y/m/d'); ?></p>
        <div class="info__cont">
          <?php the_content(); ?>
          <a href="<?= home_url('/news/') ?>" class="base__link center mt30">お知らせ一覧</a>
        </div>
      </div>
      <?php get_sidebar(); //サイドナビ 
      ?>
    </div>
  </section>
  <?php get_template_part('inc/clinic'); ?>
  <?php get_template_part('inc/reserv'); ?>
</main>
<?php get_footer(); ?>
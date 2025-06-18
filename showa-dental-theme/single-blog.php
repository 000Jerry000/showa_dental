<?php get_header(); ?>

<main>
  <div class="under-mv">
    <div class="under-mv__ttl-bl">
      <p class="under-mv__ttl-en">Blog</p>
      <h1 class="under-mv__ttl">ブログ</h1>
    </div>
    <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/top/point04.webp" alt="メイン画像" loading="lazy" width="1240" height="842">
  </div>
  <section id="under-intr" class="last-sec">
    <div class="breadcrumb__bl inner">
      <ol class="breadcrumb__list">
        <li><a href="<?= home_url() ?>">ホーム</a></li>
        <li>ブログ</li>
      </ol>
    </div>

    <div class="w1040 info__flex">
      <div class="info__main-bl">
        <h2 class="info__ttl"><?php the_title(); ?></h2>
        <p class="post-list__date"><?php the_time('Y/m/d'); ?></p>
        <div class="info__cont">
          <?php the_content(); ?>
          <a href="<?= home_url('/blog/') ?>" class="base__link center mt30">Blog一覧</a>
        </div>
      </div>
      <?php get_sidebar('blog'); //サイドナビ 
      ?>
    </div>
  </section>
  <?php get_template_part('inc/clinic'); ?>
  <?php get_template_part('inc/reserv'); ?>
</main>
<?php get_footer(); ?>
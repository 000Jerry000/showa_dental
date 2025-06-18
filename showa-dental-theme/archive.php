<?php get_header(); ?>

<main id="post-index">
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
        <?php if (have_posts()) : ?>
          <ul class="news__list">
            <?php while (have_posts()) : the_post(); ?>
              <li>
                <a href="<?= get_the_permalink(); ?>">
                    <time datetime="<?= the_time('Y-m-d'); ?>"><?= the_time('Y/m/d'); ?></time>
                    <p class="news__list-txt"><?php echo wp_trim_words(get_the_title(), 40, '...'); ?></p>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
          <?php the_posts_pagination(array(
            'mid_size' => 1,
            'end_size' => 1,
            'prev_next' => true,
            'prev_text' => __('<span class="prev-btn">←</span>', ''),
            'next_text' => __('<span class="next-btn">→</span>', ''),
          )); ?>

        <?php else : ?>
          <p class="base__txt">まだ投稿はありません</p>
        <?php endif; ?>
      </div>
      <?php get_sidebar(); //サイドナビ 
      ?>
    </div>
  </section>
  <?php get_template_part('inc/clinic'); ?>
  <?php get_template_part('inc/reserv'); ?>
</main>
<?php get_footer(); ?><?php get_header(); ?>
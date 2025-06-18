<?php get_header(); ?>

<main id="post-index">
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
        <?php if (have_posts()) : ?>
          <ul class="post-list__list">
            <?php while (have_posts()) : the_post(); ?>
              <li class="post-list__item">
                <a href="<?= get_the_permalink(); ?>" class="post-list__link">
                  <?php // 画像がある場合 
                  ?>
                  <?php if (has_post_thumbnail()) : ?>
                    <div class="post-list__img">
                      <img src="<?= get_the_post_thumbnail_url(); ?>" alt="記事のイメージ画像" loading="lazy">
                    </div>
                  <?php else: ?>
                    <div class="post-list__img">
                      <img src="<?= get_template_directory_uri(); ?>/assets/img/common/no-img.webp" alt="記事のイメージ画像" loading="lazy">
                    </div>
                  <?php endif; ?>
                  <div class="post-list__txt">
                    <p class="post-list__date"><?= the_time('Y/m/d'); ?></p>
                    <h2 class="post-list__ttl"><?php echo wp_trim_words(get_the_title(), 24, '...'); ?></h2>
                  </div>
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
      <?php get_sidebar('blog'); //サイドナビ 
      ?>
    </div>
  </section>
  <?php get_template_part('inc/clinic'); ?>
  <?php get_template_part('inc/reserv'); ?>
</main>
<?php get_footer(); ?><?php get_header(); ?>
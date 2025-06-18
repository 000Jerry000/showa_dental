<?php get_header(); ?>
    <main>
        <div class="under-mv">
            <div class="under-mv__ttl-bl">
            <?php
            $subtitle = get_post_meta(get_the_ID(), 'subtitle', true);
            if (!empty($subtitle)) {
                echo '<p class="under-mv__ttl-en">' . esc_html($subtitle) . '</p>';
            }
            ?>
                <h1 class="under-mv__ttl"><?php the_title(); ?></h1>
            </div>
            <?php
            $image_id = get_post_meta(get_the_ID(), 'custom_image', true);
            if ($image_id) {
                $image_url = wp_get_attachment_url($image_id); // オリジナルサイズのURLを取得
                echo '<img src="' . esc_url($image_url) . '" alt="メイン画像">';
            }else{
                echo '<img src="' . get_template_directory_uri() . '/assets/img/cavities/img02.webp" alt="メイン画像" loading="lazy" width="1600" height="1067">';
            }
            ?>
        </div>
        <section id="under-intr" class="last-sec">
            <div class="breadcrumb__bl inner">
                <ol class="breadcrumb__list">
                    <li><a href="<?=home_url('/')?>">TOP</a></li>
                    <li><?php the_title(); ?></li>
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
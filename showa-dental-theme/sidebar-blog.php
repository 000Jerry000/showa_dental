<aside class="info__sidebar">
    <?php if (is_post_type_archive('blog') || is_singular('blog') || is_tax('blog-cat')): ?>
        <h2 class="info__side-ttl">カテゴリー</h2>
        <ul class="snav-lst mb40">
            <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">すべて</a></li>
            <?php
            $terms = get_terms(array(
                'taxonomy'   => 'blog-cat', // カスタム投稿 `live` のカテゴリ
                'orderby'    => 'name',
                'order'      => 'ASC',
                'hide_empty' => true, // 投稿がないカテゴリ非表示
            ));

            if (!empty($terms) && !is_wp_error($terms)) {
                foreach ($terms as $term) {
                    echo '<li><a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . ' (' . esc_html($term->count) . ')</a></li>';
                }
            }
            ?>
        </ul>
    <?php endif; ?>

    <h2 class="info__side-ttl">アーカイブ</h2>
    <ul class="snav-lst">
        <?php
        if (is_post_type_archive('blog') || is_singular('blog') || is_tax('blog-cat')) {
            wp_get_archives(array('post_type' => 'blog', 'show_post_count' => 1));
        } else {
            wp_get_archives('show_post_count=1');
        }
        ?>
    </ul>
</aside>
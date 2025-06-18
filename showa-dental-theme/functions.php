<?php
// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');

//クラシックエディター有効化
function disable_gutenberg()
{
  add_filter('use_block_editor_for_post', '__return_false');
}
add_action('init', 'disable_gutenberg');

// JS/CSS 読み込み
function load_scripts()
{
  //wp_enqueue_script( 'swiperjs', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', "", filemtime( get_template_directory() . '/assets/js/swiper-bundle.min.js' ), true );
  wp_enqueue_script('basejs', get_template_directory_uri() . '/assets/js/base.js', "", filemtime(get_template_directory() . '/assets/js/base.js'), true);
  wp_enqueue_style('resscss', get_template_directory_uri() . '/assets/css/ress.css', "", filemtime(get_template_directory() . '/assets/css/ress.css'));
  wp_enqueue_style('icomooncss', 'https://i.icomoon.io/public/temp/6d9072d563/UntitledProject/style.css', "", 'https://i.icomoon.io/public/temp/6d9072d563/UntitledProject/style.css');
  wp_enqueue_style('news_blogcss', get_template_directory_uri() . '/assets/css/news_blog.css', "", filemtime(get_template_directory() . '/assets/css/news_blog.css'));
  wp_enqueue_style('contactcss', get_template_directory_uri() . '/assets/css/contact.css', "", filemtime(get_template_directory() . '/assets/css/contact.css'));
  //wp_enqueue_style( 'swipercss', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', "", filemtime( get_template_directory() . '/assets/css/swiper-bundle.min.css' ) );
  wp_enqueue_style('stylecss', get_template_directory_uri() . '/assets/css/style.css', "", filemtime(get_template_directory() . '/assets/css/style.css'));
}
add_action('wp_enqueue_scripts', 'load_scripts');

// 絵文字機能削除
function disable_emojis()
{
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
  // add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action('init', 'disable_emojis');

define("__ROOT_THEME__", dirname(__FILE__));

// require_once( __ROOT_THEME__ . "/inc/global.php");

// function is_active($id) {
//     if (is_page($id)) {
//         return ' active ';
//     }
// }

// カスタム投稿登録
function codex_custom_init()
{
  register_post_type(
    'blog',  // カスタム投稿名
    array(
      'label' => 'Blog一覧',  // 管理画面の左メニューに表示されるテキスト
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブを有効にするか否か
      'menu_position' => 4,  // 管理画面上でどこに配置するか
      'supports' => array( // 投稿画面でどのmoduleを使うか的な設定
        'title',  // 記事タイトル
        'editor', // 内容の編集
        'thumbnail',  // アイキャッチ画像
        'revisions',  // リビジョン
      ),
      'show_in_rest' => true,
    )
  );
}
add_action('init', 'codex_custom_init');

// カスタムタクソノミー登録
function create_tax_type()
{
  // カテゴリ
  register_taxonomy(
    'blog-cat', // slug
    'blog', // 親slug
    array(
      'label' => 'カテゴリー',
      'labels' => array(
        'all_items' => '一覧',
        'add_new_item' => '追加'
      ),
      'hierarchical' => true,
      'show_in_rest' => true,
    )
  );
}
add_action('init', 'create_tax_type');

// // pagenation 404 エラー対策
// function my_post_count_queries( $query ) {
//   if (!is_admin() && $query->is_main_query()){
//     if($query->is_post_type_archive('info')){
//         $query->set('posts_per_page', 18);
//     }
//     if($query->is_tax('info-cat')){
//       $query->set('posts_per_page', 18);
//     }
//   }
// }
// add_action( 'pre_get_posts', 'my_post_count_queries' );

// function cpt_rewrite_rules2( $wp_rewrite ) {
//   $rules = cpt_generate_date_archives( 'info', $wp_rewrite );
//   $wp_rewrite->rules = $rules + $wp_rewrite->rules;
//   return $wp_rewrite;
// }

// add_action( 'generate_rewrite_rules', 'cpt_rewrite_rules2' );
// function cpt_generate_date_archives( $cpt, $wp_rewrite ) {

//   $rules = array();
//   $post_type = get_post_type_object( $cpt );
//   $slug_archive = $post_type->has_archive;

//   if ( $slug_archive === false ) return $rules;

//   if ( $slug_archive === true ) {
//       $slug_archive = $post_type->name;
//   }

//   $dates = array(
//       array(
//           'rule' => "([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})",
//           'vars' => array( 'year', 'monthnum', 'day' ) ),
//       array(
//           'rule' => "([0-9]{4})/([0-9]{1,2})",
//           'vars' => array( 'year', 'monthnum' ) ),
//       array(
//           'rule' => "([0-9]{4})",
//           'vars' => array( 'year' ) )
//   );

//   foreach ( $dates as $data ) {
//     $query = 'index.php?post_type=' . $cpt;
//     $rule = $slug_archive . '/' . $data[ 'rule' ];

//     $i = 1;
//     foreach ( $data[ 'vars' ] as $var ) {
//         $query .= '&' . $var . '=' . $wp_rewrite->preg_index( $i );
//         $i++;
//     }

//     $rules[ $rule . "/?$" ] = $query;

//     $rules[ $rule . "/feed/(feed|rdf|rss|rss2|atom)/?$" ] = $query . "&feed=" . $wp_rewrite->preg_index( $i );

//     $rules[ $rule . "/(feed|rdf|rss|rss2|atom)/?$" ] = $query . "&feed=" . $wp_rewrite->preg_index( $i );

//     $rules[ $rule . "/page/([0-9]{1,})/?$" ] = $query . "&paged=" . $wp_rewrite->preg_index( $i );
//   }
//   return $rules;
// }

// Contact Form 7の送信ボタンをクリック後、/thanks/ページに遷移する
// add_action('wp_footer', 'custom_redirect_after_submission');
// function custom_redirect_after_submission()
// {
//     echo <<< EOC
//     <script type="text/javascript">
//         document.addEventListener('wpcf7mailsent', function(event) {
//             window.location.href = '/thanks/';
//         }, false);
//     </script>
//     EOC;
// }

// // メールアドレス確認 contact form 7
// function wpcf7_custom_email_validation_filter( $result, $tag ) {
//   if ( 'your-email-confirm' == $tag->name ) {
//     $your_email = isset( $_POST['your-email'] ) ? trim( $_POST['your-email'] ) : '';
//     $your_email_confirm = isset( $_POST['your-email-confirm'] ) ? trim( $_POST['your-email-confirm'] ) : '';
//     if ( $your_email != $your_email_confirm ) {
//       $result->invalidate( $tag, "メールアドレスが一致しません" );
//     }
//   }
//   return $result;
// }
// add_filter( 'wpcf7_validate_email', 'wpcf7_custom_email_validation_filter', 20, 2 );
// add_filter( 'wpcf7_validate_email*', 'wpcf7_custom_email_validation_filter', 20, 2 );


//固定ページだけ自動整形を無効化
function wpautop_disable_ispage()
{
  if (is_page()) {
    //本文エリアの自動整形を無効化
    remove_filter('the_content', 'wpautop');
  }
}
add_action('wp', 'wpautop_disable_ispage');

//サブタイトルのカスタムフィールド追加
function add_custom_meta_box()
{
  add_meta_box(
    'custom_meta_box', // メタボックスID
    'サブタイトル設定', // タイトル
    'show_custom_meta_box', // コールバック関数
    'page', // 投稿タイプ（固定ページ）
    'normal', // 表示位置
    'high' // 優先度
  );
}
add_action('add_meta_boxes', 'add_custom_meta_box');

function show_custom_meta_box($post)
{
  $subtitle = get_post_meta($post->ID, 'subtitle', true);
  wp_nonce_field(basename(__FILE__), 'custom_meta_box_nonce'); // セキュリティ用
?>
  <p>
    <label for="subtitle">サブタイトル：</label>
    <input type="text" id="subtitle" name="subtitle" value="<?php echo esc_attr($subtitle); ?>" style="width:100%;">
  </p>
<?php
}

function save_custom_meta_data($post_id)
{
  if (!isset($_POST['custom_meta_box_nonce']) || !wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__))) {
    return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }

  if (!current_user_can('edit_post', $post_id)) {
    return;
  }

  if (isset($_POST['subtitle'])) {
    update_post_meta($post_id, 'subtitle', sanitize_text_field($_POST['subtitle']));
  } else {
    delete_post_meta($post_id, 'subtitle');
  }
}
add_action('save_post', 'save_custom_meta_data');

// カスタムフィールドで画像の保存

function add_custom_image_meta_box()
{
  add_meta_box(
    'custom_image_meta_box',
    'カスタム画像設定',
    'show_custom_image_meta_box',
    'page',
    'normal',
    'high'
  );
}
add_action('add_meta_boxes', 'add_custom_image_meta_box');

function show_custom_image_meta_box($post)
{
  $image_id = get_post_meta($post->ID, 'custom_image', true);
  $image_url = !empty($image_id) ? wp_get_attachment_url($image_id) : '';
  wp_nonce_field(basename(__FILE__), 'custom_image_meta_box_nonce');
?>
  <div>
    <input type="hidden" id="custom_image" name="custom_image" value="<?php echo esc_attr($image_id); ?>">
    <button type="button" class="button custom-image-upload"><?php echo $image_url ? '画像を変更' : '画像をアップロード'; ?></button>
    <button type="button" class="button custom-image-remove" style="display: <?php echo $image_url ? 'inline-block' : 'none'; ?>;">削除</button>
    <br><br>
    <img id="custom-image-preview" src="<?php echo esc_url($image_url); ?>" style="max-width:100%; height:auto; display: <?php echo $image_url ? 'block' : 'none'; ?>;">
  </div>
  <script>
    jQuery(document).ready(function($) {
      var mediaUploader;
      $('.custom-image-upload').click(function(e) {
        e.preventDefault();
        if (mediaUploader) {
          mediaUploader.open();
          return;
        }
        mediaUploader = wp.media({
          title: 'カスタム画像を選択',
          button: {
            text: '画像を選択'
          },
          multiple: false
        });
        mediaUploader.on('select', function() {
          var attachment = mediaUploader.state().get('selection').first().toJSON();
          $('#custom_image').val(attachment.id);
          $('#custom-image-preview').attr('src', attachment.url).show();
          $('.custom-image-remove').show();
        });
        mediaUploader.open();
      });

      $('.custom-image-remove').click(function() {
        $('#custom_image').val('');
        $('#custom-image-preview').hide();
        $(this).hide();
      });
    });
  </script>
<?php
}

function save_custom_image_meta($post_id)
{
  if (!isset($_POST['custom_image_meta_box_nonce']) || !wp_verify_nonce($_POST['custom_image_meta_box_nonce'], basename(__FILE__))) {
    return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }

  if (!current_user_can('edit_post', $post_id)) {
    return;
  }

  if (isset($_POST['custom_image'])) {
    update_post_meta($post_id, 'custom_image', sanitize_text_field($_POST['custom_image']));
  } else {
    delete_post_meta($post_id, 'custom_image');
  }
}
add_action('save_post', 'save_custom_image_meta');

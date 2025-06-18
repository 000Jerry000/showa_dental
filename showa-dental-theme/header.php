<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5MJLVFMG');</script>
<!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if( is_user_logged_in() ) : ?>
    <style type="text/css">
        .header {
        margin-top: 32px;
        }
        @media screen and (max-width: 780px) {
        .header {
            margin-top: 46px;
        }
        }
        @media screen and (max-width: 600px) {
        #wpadminbar {
            position: fixed !important;
        }
        }
    </style>
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body id="top">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5MJLVFMG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!-- Header -->
    <header>
        <?php if (is_front_page()) : ?>
        <h1 class="logo"><img src="<?= get_template_directory_uri(); ?>/assets/img/common/logo.webp" alt="医療法人社団　健佑会　昭和通り歯科" width="465" height="84"></h1>
        <?php else : ?>
        <div class="logo"><a href="<?=home_url('/')?>"><img src="<?= get_template_directory_uri(); ?>/assets/img/common/logo.webp" alt="医療法人社団　健佑会　昭和通り歯科" width="465" height="84"></a></div>
        <?php endif; ?>
        <div class="header__right">
            <nav class="header__nav" aria-label="サイトのメインナビゲーション">
                <ul class="header__nav-list">
                    <li><a href="<?= home_url('/feature/') ?>">当院の特徴</a></li>
                    <li><a href="<?= home_url('/doctor/') ?>">ドクター紹介</a></li>
                    <li id="header__nav-treat-btn">
                        <a href="<?=home_url('/treatment/')?>" aria-expanded="false" aria-controls="header__nav-treat-list-small-bl">診療案内</a>
                        <div id="header__nav-treat-list-small-bl" aria-hidden="true">
                            <div class="header__nav-treat-list-small-wrapper">
                                <ul class="header__nav-treat-list-small">
                                <li><a href="<?= home_url('/caries/') ?>">虫歯治療</a></li>
                                <li><a href="<?= home_url('/root/') ?>">根管治療</a></li>
                                <li><a href="<?= home_url('/perio/') ?>">歯周病</a></li>
                                <li><a href="<?= home_url('/cleaning/') ?>">歯のクリーニング・予防歯科</a></li>
                                <li><a href="<?= home_url('/esthetic/') ?>">審美歯科</a></li>
                                <li><a href="<?= home_url('/ortho/') ?>">矯正歯科</a></li>
                                <li><a href="<?= home_url('/ortho/mouthpiece/') ?>">マウスピース矯正</a></li>
                                <li><a href="<?= home_url('/ortho/labial-orthodontics/') ?>">表側矯正</a></li>
                                <li><a href="<?= home_url('/ortho/lingual-orthodontics/') ?>">舌側矯正</a></li>
                                <li><a href="<?= home_url('/ortho/pediatric-orthodontics/') ?>">小児矯正</a></li>
                                <li><a href="<?= home_url('/pediatric-dentistry/') ?>">小児歯科</a></li>
                                <li><a href="<?= home_url('/implant/') ?>">インプラント</a></li>
                                <li><a href="<?= home_url('/denture/') ?>">入れ歯治療</a></li>
                                <li><a href="<?= home_url('/surgery/') ?>">口腔外科</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="<?= home_url('/price/') ?>">料金案内</a></li>
                    <li><a href="<?= home_url('/access/') ?>">アクセス</a></li>
                    <li><a href="<?= home_url('/news/') ?>">NEWS</a></li>
                </ul>
            </nav>
            <div class="header__contact-bl">
                <a href="tel:03-3671-8008" class="header__tel">
                    <span class="icon-phone"></span>
                    <span class="header__link-txts">
                        <span class="small">ご予約・お問合せ</span>
                        <span class="num">03-3671-8008</span>
                    </span>
                </a>
                <a href="<?= home_url('/contact/') ?>" class="header__reserv">
                    <span class="icon-pc"></span>
                    <span class="header__link-txts">
                        <span class="small">WEB予約</span>
                        <?php /*<span class="big">24時間受付</span>*/ ?>
                    </span>
                </a>
            </div>
        </div>
        <button id="ham" aria-label="メニューを開閉する" aria-expanded="false" aria-controls="sp-menu__nav">
            <span class="ham">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </span>
        </button>
    </header>
    <nav class="sp-menu__nav" aria-label="スマホ用ナビゲーション" aria-hidden="true">
        <div class="sp-menu__nav-wrapper">
            <ul class="sp-menu__nav-list">
                <li><a href="<?= home_url('/first/') ?>">初めての方へ</a></li>
                <li><a href="<?= home_url('/feature/') ?>">当院の特徴</a></li>
                <li><a href="<?= home_url('/doctor/') ?>">ドクター紹介</a></li>
                <li><a href="<?= home_url('/price/') ?>">料金案内</a></li>
                <li><a href="<?= home_url('/access/') ?>">アクセス</a></li>
                <li><a href="<?= home_url('/clinic/') ?>">院内ツアー</a></li>
                <li><a href="<?= home_url('/news/') ?>">NEWS</a></li>
            </ul>
            <ul class="sp-menu__nav-list">
                <li>
                    <a href="<?=home_url('/treatment/')?>">診療案内</a>
                    <ul id="sp-menu__nav-treat-list">
                        <li><a href="<?= home_url('/caries/') ?>">虫歯治療</a></li>
                        <li><a href="<?= home_url('/root/') ?>">根管治療</a></li>
                        <li><a href="<?= home_url('/perio/') ?>">歯周病</a></li>
                        <li><a href="<?= home_url('/cleaning/') ?>">歯のクリーニング・<br>予防歯科</a></li>
                        <li><a href="<?= home_url('/esthetic/') ?>">審美歯科</a></li>
                        <li><a href="<?= home_url('/ortho/') ?>">矯正歯科</a></li>
                        <li><a href="<?= home_url('/ortho/mouthpiece/') ?>">マウスピース矯正</a></li>
                        <li><a href="<?= home_url('/ortho/labial-orthodontics/') ?>">表側矯正</a></li>
                        <li><a href="<?= home_url('/ortho/lingual-orthodontics/') ?>">舌側矯正</a></li>
                        <li><a href="<?= home_url('/ortho/pediatric-orthodontics/') ?>">小児矯正</a></li>
                        <li><a href="<?= home_url('/pediatric-dentistry/') ?>">小児歯科</a></li>
                        <li><a href="<?= home_url('/implant/') ?>">インプラント</a></li>
                        <li><a href="<?= home_url('/denture/') ?>">入れ歯治療</a></li>
                        <li><a href="<?= home_url('/surgery/') ?>">口腔外科</a></li>
                </ul>
                </li>
            </ul>
            <div class="sp-menu__contact-bl">
                <a href="tel:03-3671-8008" class="sp-menu__tel" aria-label="電話をかける"></a>
                <a href="<?= home_url('/contact/') ?>" class="sp-menu__reserv" aria-label="WEBで予約する"></a>
            </div>
        </div>
    </nav>
    <!-- Header -->
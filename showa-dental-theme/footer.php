<footer>
        <div class="inner footer__flex">
            <div class="footer__left">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__logo"><img src="<?= get_template_directory_uri(); ?>/assets/img/common/logo.webp" alt="医療法人社団健佑会 昭和通り歯科" loading="lazy" width="554" height="158"></a>
                <p class="footer__clinic-name">医療法人社団健佑会 昭和通り歯科</p>
                <p class="footer__txt">〒133-0056 東京都江戸川区南小岩7-31-13パロス南小岩1階<br>TEL.03-3671-8008
                </p>
                <div class="base__contact-bl">
                    <a href="tel:03-3671-8008" class="tel">
                        <span class="icon-phone"></span>
                        <span class="link-txts">
                            <span class="small">ご予約・お問合せ</span>
                            <span class="num">03-3671-8008</span>
                        </span>
                    </a>
                    <a href="<?= home_url('/contact/') ?>" class="reserv">
                        <span class="icon-pc"></span>
                        <span class="link-txts">
                            <span class="small">WEB予約</span>
                            <?php /*<span class="big">24時間受付</span>*/ ?>
                        </span>
                    </a>
                </div>
            </div>
            <div class="footer__right">
                <ul class="footer__list">
                    <li><a href="<?= home_url('/first/') ?>">初めての方へ</a></li>
                    <li><a href="<?= home_url('/feature/') ?>">当院の特徴</a></li>
                    <li><a href="<?= home_url('/doctor/') ?>">ドクター紹介</a></li>
                    <li><a href="<?= home_url('/price/') ?>">料金案内</a></li>
                    <li><a href="<?= home_url('/access/') ?>">アクセス</a></li>
                    <li><a href="<?= home_url('/clinic/') ?>">院内ツアー</a></li>
                    <li><a href="<?= home_url('/news/') ?>">NEWS</a></li>
                    <li><a href="<?= home_url('/blog/') ?>">BLOG</a></li>
                </ul>
                <ul class="footer__list">
                    <li>
                        <a href="<?php echo esc_url(home_url('/treatment/')); ?>">診療案内</a>
                        <ul class="footer__list-small">
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
            </div>
        </div>
        <div class="footer__imgs">
            <div class="footer__img-item"><img src="<?= get_template_directory_uri(); ?>/assets/img/common/footer-bg01.webp" alt="" loading="lazy" width="960" height="582"></div>
            <div class="footer__img-item"><img src="<?= get_template_directory_uri(); ?>/assets/img/common/footer-bg02.webp" alt="" loading="lazy" width="960" height="582"></div>
            <div class="footer__img-item"><img src="<?= get_template_directory_uri(); ?>/assets/img/common/footer-bg03.webp" alt="" loading="lazy" width="960" height="582"></div>
        </div>
        <p class="footer__copy">&copy; Showa-Street Dental</p>
    </footer>
    <div id="fixed-bnrs">
        <a href="tel:03-3671-8008" class="fixed-bnr-tel">
            <p class="fixed-bnr-ttl"><span class="icon"><img src="<?= get_template_directory_uri(); ?>/assets/img/common/fixed-icon-phone.webp" alt="" loading="lazy" width="64" height="64"></span>TEL予約</p>
            <p class="fixed-bnr-txt-small">平日 09：00〜00：00/00：00〜22：00<br>土日 09：00〜00：00/00：00〜21：30</p>
        </a>
        <a href="<?= home_url('/contact/') ?>" class="fixed-bnr-web">
            <p class="fixed-bnr-ttl"><span class="icon"><img src="<?= get_template_directory_uri(); ?>/assets/img/common/fixed-icon-web.webp" alt="" loading="lazy" width="64" height="64"></span>WEB予約</p>
            <?php /*<p class="fixed-bnr-txt-middle">24時間受付</p>*/ ?>
        </a>
    </div>
    <?php wp_footer(); ?>
</body>
</html>
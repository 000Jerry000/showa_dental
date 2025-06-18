<?php get_header(); ?>

    <main>
        <div id="mv">
            <div class="mv__img">
                <picture>
                    <!-- 画面幅で切り替え -->
                    <source media="(max-width: 767px)" srcset="<?= get_template_directory_uri(); ?>/assets/img/top/mv-sp.webp">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/top/mv.webp" alt="メイン画像" loading="lazy" width="2880" height="1822">
                </picture>
            </div>
            <div class="mv__cont">
                <h2 class="mv__ttl">
                    <span class="tate">質の高い一般治療から</span>
                    <span class="tate">専門的な矯正治療まで</span>
                    <span class="tate">幅広く対応しております</span>
                </h2>
            </div>
            <ul class="mv__list">
                <li>
                    <span class="middle">小岩駅</span>
                    <span class="middle under-marker-green">徒歩<span class="num">1</span>分</span>
                </li>
                <li>
                    <span class="l under-marker-green">当日予約</span>
                    <span class="small">対応可</span>
                    <span class="small">急患受付可能</span>
                </li>
                <li>
                    <span class="middle"><span class="under-marker-green">車いす</span>や</span>
                    <span class="middle　under-marker-green">ベビーカー</span>
                    <span class="middle">OK</span>
                </li>
            </ul>
        </div>
        <section id="top-news">
            <div class="inner top-news__flex js-fadeUp">
                <div class="top-news__ttl-bl">
                    <p class="base__ttl-en">News</p>
                    <h2 class="base__ttl mb50">お知らせ</h2>
                    <a href="<?= home_url('/news/') ?>" class="base__link">お知らせ一覧</a>
                </div>
                <div class="top-news__list-bl">
                    <ul class="news__list">
                        <?php
                        $args = array(
                            'post_type'      => 'post', // 投稿タイプ（通常の投稿）
                            'posts_per_page' => 3,      // 取得する投稿数
                            'orderby'        => 'date', // 日付順
                            'order'          => 'DESC'  // 降順（最新の投稿を上に）
                        );
                        $query = new WP_Query($args);

                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                        ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>">
                                        <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                                        <p class="news__list-txt"><?php the_title(); ?></p>
                                    </a>
                                </li>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
        </section>
        <section id="top-features">
            <div class="top-feature__ttl-bl js-fadeUp">
                <p class="base__ttl-en white-txt">Features</p>
                <h2 class="base__ttl white-txt">当院の特徴</h2>
            </div>
            <div class="top-feature__cont-bl">
            <ol class="top-feature__list js-fadeUp">
                    <li>
                        <span class="num">1</span>
                        <span class="txt">平日22時まで·土日祝も21時半まで診療対応</span>
                    </li>
                    <li>
                        <span class="num">2</span>
                        <span class="txt">当日予約・急患対応可能</span>
                    </li>
                    <li>
                        <span class="num">3</span>
                        <span class="txt">痛くない・できるだけ削らない治療</span>
                    </li>
                    <li>
                        <span class="num">4</span>
                        <span class="txt">車いすやベビーカーでも<br class="pc">診療室にそのまま入れます</span>
                    </li>
                    <li>
                        <span class="num">5</span>
                        <span class="txt">個室・半個室ありでプライバシーの守られた環境</span>
                    </li>
                    <li>
                        <span class="num">6</span>
                        <span class="txt">矯正治療やインプラントなどの<br class="pc">専門的な治療も対応</span>
                    </li>
                </ol>
            </div>
        </section>
        <section class="cta">
            <div class="inner cta__bl">
                <ul class="cta__list">
                    <li class="js-fadeUp">
                        <a href="tel:03-3671-8008">
                            <div class="cta__list-icon cta__list-icon-phone"></div>
                            <p class="cta__list-txt">お電話でご予約・お問合せ</p>
                            <p class="cta__list-num">03-3671-8008</p>
                            <p class="cta__list-small-txt">平日 09：00〜00：00/00：00〜22：00<br>土日 09：00〜00：00/00：00〜21：30</p>
                        </a>
                    </li>
                    <li class="js-fadeUp">
                        <a href="<?= home_url('/contact/') ?>">
                            <div class="cta__list-icon cta__list-icon-pc"></div>
                            <p class="cta__list-txt">WEBでご予約</p>
                            <?php /*<p class="cta__list-txt-big">24時間受付</p>*/ ?>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <section id="top-problem">
            <div class="top-problem__intr js-fadeUp">
                <p class="top-problem__intr-txt">このような<br class="sp"><span class="under-marker-blue">お悩みをお持ちの方</span>は<br class="sp">当院にご相談ください</p>
                <ul class="top-problem__intr-list">
                    <li id="top-problem__intr-list01" class="small-circle">
                        <p><span class="under-marker-green">歯が痛い</span></p>
                    </li>
                    <li id="top-problem__intr-list02" class="big-circle">
                        <p>歯が<br><span class="under-marker-green">欠けてしまった</span></p>
                    </li>
                    <li id="top-problem__intr-list03" class="small-circle">
                        <p><span class="under-marker-green">健診</span>が<br>受けたい</p>
                    </li>
                    <li id="top-problem__intr-list04" class="small-circle">
                        <p><span class="under-marker-green">歯並び</span>を<br>直したい</p>
                    </li>
                    <li id="top-problem__intr-list05" class="big-circle">
                        <p><span class="under-marker-green">詰め物・</span><br><span class="under-marker-green">かぶせ物</span>が<br>取れた</p>
                    </li>
                    <li id="top-problem__intr-list06" class="big-circle">
                        <p><span class="under-marker-green">インプラント</span><br>治療がしたい</p>
                    </li>
                </ul>
            </div>
            <div class="top-problem__solution-bl js-fadeUp">
                <p class="top-problem__solution-txt">そのようなお悩みは<br class="sp"><span class="cyan-txt under-marker-green">当院にお任せください</span></p>
                <p class="top-problem__solution-txt2">丁寧なカウンセリングと<br class="sp">治療で<br class="pc">お悩みを<br class="sp">解決することをお約束します</p>
                <ul class="top-problem__person-list">
                    <li><img src="<?= get_template_directory_uri(); ?>/assets/img/top/person01.webp" alt="" loading="lazy"></li>
                    <li><img src="<?= get_template_directory_uri(); ?>/assets/img/top/person02.webp" alt="" loading="lazy"></li>
                    <li><img src="<?= get_template_directory_uri(); ?>/assets/img/top/person03.webp" alt="" loading="lazy"></li>
                </ul>
            </div>
        </section>
        <section id="top-pickup">
            <div class="top-pickup__ttl-bl js-fadeUp">
                <p class="base__ttl-en blue-txt center">Pick up Menu</p>
                <h2 class="base__ttl center">診療案内</h2>
            </div>
            <div class="big-inner-left js-fadeUp mb80 smb4">
                <div class="img"><img src="<?= get_template_directory_uri(); ?>/assets/img/top/pickup-img02.webp" alt="" loading="lazy" width="1240" height="920"></div>
                <div class="cont">
                    <h3 class="top-pickup__ttl-middle">大学病院口腔外科出身の専門医が行うインプラント治療</h3>
                    <p>当院ではインプラント治療を得意としております。<br>
                        大学病院の口腔外科で治療を行っていた口腔外科専門医が質の高いインプラント治療を提供します。<br>
                        当院では全てのインプラント治療にガイド使用して埋入いたします。<br>
                        ガイドの使用により安心・安全に手術を行うことが出来ます。
                    </p>
                    <a href="<?= home_url('/implant/') ?>" class="base__link center">詳しく見る</a>
                </div>
            </div>
            <div class="inner base__flex">
                <div class="base__flex-item js-fadeUp">
                    <h3 class="top-pickup__ttl-middle">専門的な矯正治療</h3>
                    <p>当院ではワイヤー矯正とマウスピース矯正のインビザラインを導入しております。<br>
                        インビザラインは世界的に実績の多い矯正治療で、症例も幅広く対応可能です。<br>
                        <span class="pink-txt">学生30,000円<small>（税込）</small>×18回<small>（分割手数料なし）</small><br>
                        成人33,000円<small>（税込）</small>×18回<small>（分割手数料なし）</small></span><br>
                        上記のリーズナブルな月々分割支払いでも提供可能です。
                    </p>
                    <a href="<?= home_url('/ortho/mouthpiece/') ?>" class="base__link center">詳しく見る</a>
                </div>
                <div class="base__flex-item pl5p js-fadeUp">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/top/pickup-img01.webp" alt="" loading="lazy" width="990" height="1180">
                </div>
            </div>
        </section>
        <section id="top-doctor">
            <div class="inner">
                <div class="top-doctor__ttl-bl js-fadeUp">
                    <p class="base__ttl-en white-txt center">Doctor</p>
                    <h2 class="base__ttl white-txt center">院長・理事長紹介</h2>
                </div>
                <ul class="top-doctor__list js-fadeUp">
                    <li>
                        <div class="img"><img src="<?= get_template_directory_uri(); ?>/assets/img/top/doctor01.webp" alt="" loading="lazy" width="1000" height="810"></div>
                        <p class="top-doctor__name">
                            <span class="name">経験豊かなドクターが揃っています</span>
                        </p>
                        <p class="top-doctor__txt mb30 smb20">通院されるみなさまをいつも笑顔に、幸せにするために日々の生活の中でも自己研鑽を欠かさず切磋琢磨しながら快適な医院作りを行っています。</p>
                        <a href="<?= home_url('/doctor/') ?>" class="base__link base__link-small white-txt">ドクター紹介を見る</a>
                    </li>
                    <li>
                        <div class="img"><img src="<?= get_template_directory_uri(); ?>/assets/img/top/doctor02.webp" alt="" loading="lazy" width="1000" height="810"></div>
                        <p class="top-doctor__name">
                            <span class="small">理事長</span>
                            <span class="name">藤岡先生</span>
                        </p>
                        <p class="top-doctor__txt mb30 smb20">お一人、お一人に最善の治療法を御提案し、ベストを尽くします。</p>
                        <a href="<?= home_url('/doctor/#link-riji') ?>" class="base__link base__link-small white-txt">ドクター紹介を見る</a>
                    </li>
                </ul>
            </div>
        </section>
        <section id="top-point">
            <div class="top-doctor__ttl-bl js-fadeUp">
                <p class="base__ttl-en center">Point</p>
                <h2 class="base__ttl center">当院が小岩の皆様に選ばれている理由</h2>
            </div>
            <div class="big-inner-right mb80 smb40 js-fadeUp">
                <div class="cont">
                    <h3 class="top-point__ttl-middle p1">
                        <span class="top-point__ttl-middle-icon">
                            <span class="txt">Point</span>
                            <span class="num">1</span>
                        </span>
                        <span class="ttl-txt">平日22時まで・土日祝も<br>21時半時まで診療対応</span>
                    </h3>
                    <p>平日遅い時間まで治療を行っているだけではなく、土日も遅い時間まで診療に対応しております。日中ご予定があって歯医者さんに通いづらい方や、急な歯のトラブルに見舞われた方などでも安心して通いやすい環境を整えております。</p>
                </div>
                <div class="img"><img src="<?= get_template_directory_uri(); ?>/assets/img/top/point01.webp" alt="" loading="lazy" width="1240" height="842"></div>
            </div>
            <div class="big-inner-left mb80 smb40 js-fadeUp">
                <div class="img"><img src="<?= get_template_directory_uri(); ?>/assets/img/top/point02.webp" alt="" loading="lazy" width="1240" height="842"></div>
                <div class="cont">
                    <h3 class="top-point__ttl-middle p1">
                        <span class="top-point__ttl-middle-icon">
                            <span class="txt">Point</span>
                            <span class="num">2</span>
                        </span>
                        <span class="ttl-txt">ベビーカーや車いすでも入れるような<br class="pc">広々とした半個室・個室の診療室</span>
                    </h3>
                    <p>お子様を連れてベビーカーでお越しいただく方や、車いすでお越しいただく方も1階且つバリアフリーな院内なので安心してお越しいただけます。また、半個室や個室を完備しているのでプライバシーの守られた環境で治療を行うことが出来ます。
                    </p>
                </div>
            </div>
            <div class="big-inner-right mb80 smb40 js-fadeUp">
                <div class="cont">
                    <h3 class="top-point__ttl-middle p1">
                        <span class="top-point__ttl-middle-icon">
                            <span class="txt">Point</span>
                            <span class="num">3</span>
                        </span>
                        <span class="ttl-txt">矯正治療やインプラントなどの<br>専門治療も対応</span>
                    </h3>
                    <p>当院では一般歯科だけではなく、矯正治療やインプラント·口腔外科などの専門的な治療を行う歯科医師も在籍しております。<br>高度な治療でも当院で完結して行うことができるので、安心してお任せいただければと思います。</p>
                </div>
                <div class="img"><img src="<?= get_template_directory_uri(); ?>/assets/img/top/point03.webp" alt="" loading="lazy" width="1240" height="842"></div>
            </div>
            <div class="big-inner-left js-fadeUp">
                <div class="img"><img src="<?= get_template_directory_uri(); ?>/assets/img/top/point04.webp" alt="" loading="lazy" width="1240" height="842"></div>
                <div class="cont">
                    <h3 class="top-point__ttl-middle p1">
                        <span class="top-point__ttl-middle-icon">
                            <span class="txt">Point</span>
                            <span class="num">4</span>
                        </span>
                        <span class="ttl-txt">クレジットカードや分割支払いも対応</span>
                    </h3>
                    <p>自由診療の場合はクレジットカードでの支払いや、デンタルローンを活用した分割の支払いも対応しております。<br>また、矯正治療は手数料なしで分割支払いの対応を行っています。</p>
                </div>
            </div>
            <a href="<?= home_url('/feature/') ?>" class="cyan-btn">詳しく見る</a>
        </section>
        <section id="top-menu">
            <div class="inner">
                <div class="top-menu__ttl-bl js-fadeUp">
                    <p class="base__ttl-en center">Menu</p>
                    <h2 class="base__ttl center">診療案内</h2>
                </div>
                <ul class="top-menu__list js-fadeUp">
                    <li>
                        <a href="<?= home_url('/caries/') ?>">
                            <div class="top-menu__list-img"><img src="<?= get_template_directory_uri(); ?>/assets/img/top/menu01.webp" alt="虫歯治療の画像" loading="lazy" width="474" height="474"></div>
                            <p class="top-menu__list-name">虫歯治療</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= home_url('/root/') ?>">
                            <div class="top-menu__list-img"><img src="<?= get_template_directory_uri(); ?>/assets/img/top/menu02.webp" alt="根幹治療の画像" loading="lazy" width="475" height="474"></div>
                            <p class="top-menu__list-name">根管治療</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= home_url('/perio/') ?>">
                            <div class="top-menu__list-img"><img src="<?= get_template_directory_uri(); ?>/assets/img/top/menu03.webp" alt="歯周病の画像" loading="lazy" width="475" height="474"></div>
                            <p class="top-menu__list-name">歯周病</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= home_url('/cleaning/') ?>">
                            <div class="top-menu__list-img"><img src="<?= get_template_directory_uri(); ?>/assets/img/top/menu04.webp" alt="予防歯科・歯のクリーニングの画像" loading="lazy" width="474" height="474"></div>
                            <p class="top-menu__list-name">予防歯科・<br>歯のクリーニング</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= home_url('/esthetic/') ?>">
                            <div class="top-menu__list-img"><img src="<?= get_template_directory_uri(); ?>/assets/img/top/menu05.webp" alt="審美歯科の画像" loading="lazy" width="475" height="474"></div>
                            <p class="top-menu__list-name">審美歯科</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= home_url('/ortho/') ?>">
                            <div class="top-menu__list-img"><img src="<?= get_template_directory_uri(); ?>/assets/img/top/menu06.webp" alt="矯正歯科の画像" loading="lazy" width="475" height="474"></div>
                            <p class="top-menu__list-name">矯正歯科</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= home_url('/implant/') ?>">
                            <div class="top-menu__list-img"><img src="<?= get_template_directory_uri(); ?>/assets/img/top/menu07.webp" alt="インプラントの画像" loading="lazy" width="474" height="474"></div>
                            <p class="top-menu__list-name">インプラント</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= home_url('/denture/') ?>">
                            <div class="top-menu__list-img"><img src="<?= get_template_directory_uri(); ?>/assets/img/top/menu08.webp" alt="入れ歯の画像" loading="lazy" width="475" height="474"></div>
                            <p class="top-menu__list-name">入れ歯</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= home_url('/surgery/') ?>">
                            <div class="top-menu__list-img"><img src="<?= get_template_directory_uri(); ?>/assets/img/top/menu09.webp" alt="口腔外科の画像" loading="lazy" width="474" height="474"></div>
                            <p class="top-menu__list-name">口腔外科</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= home_url('/pediatric-dentistry/') ?>">
                            <div class="top-menu__list-img"><img src="<?= get_template_directory_uri(); ?>/assets/img/top/menu010.webp" alt="小児歯科の画像" loading="lazy" width="474" height="474"></div>
                            <p class="top-menu__list-name">小児歯科</p>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <?php /*<section id="top-conts">
            <div class="inner">
                <div class="top-cont__bl top-cont__bl-price mb50 smb30 js-fadeUp">
                    <div class="top-cont__ttl-bl">
                        <p class="base__ttl-en white-txt">Price</p>
                        <h2 class="base__ttl white-txt">料金案内</h2>
                    </div>
                    <div class="top-cont__txt-bl">
                        <p class="white-txt">自費診療の場合はクレジットカードの決済も可能です。<br>
                            デンタルローンによる分割支払いも行っております。<br>
                            料金案内は以下をご確認ください。
                        </p>
                    </div>
                    <div class="top-cont__link-bl"><a href="<?= home_url('/price/') ?>" class="base__link base__link-small white-txt center mt30">料金案内を見る</a></div>
                </div>
            </div>
        </section>*/ ?>
        <?php get_template_part('assets/inc/info'); ?>
        <?php get_template_part('assets/inc/clinic'); ?>
    </main>
<?php get_footer(); ?>
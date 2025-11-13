<?php
// JSON読み込み
$jsonData = file_get_contents('./json/work.json');
$works = json_decode($jsonData, true);

// 日付で降順ソート（新しい順）
usort($works, function ($a, $b) {
    // 日付を strtotime で比較
    return strtotime($b['date']) - strtotime($a['date']);
});

// 最新5件だけ取得
$kvWorks = array_slice($works, 0, 7);

// 最新3件だけ取得
$latestWorks = array_slice($works, 0, 3);

$pageTitle = 'YUTO HAYATA ポートフォリオサイト';
$pageDescription = 'YUTO HAYATA | 大学院にて工業デザインを専攻し、在学中は印刷およびWebデザイン会社でインターンとしてレタッチ業務やチラシ・ポスターの制作に携わりました。前職では3年間、Webサイト制作におけるディレクション・デザイン・コーディングを担当し、大手企業サイトからLPまで幅広い案件を経験しました。企画からデザイン、実装まで一貫して対応できる点を強みとしています。';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/head.php'); ?>
    <link rel="stylesheet" href="/css/home.css" type="text/css">
    <link
        rel="stylesheet"
        href="/swiper/swiper-bundle.min.css" />
</head>


<body id="body">
    <main id="main">

        <!-- ヘッダー -->
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/header.php'); ?>
        <div id="luxy" class="inner u-rel">

            <!-- キービジュアル -->
            <section id="kv" class="kv u-rel luxy-el" data-speed-y="7">

                <!-- キャッチコピー -->
                <div id="kv__catchcopy-wrap" class="kv__catchcopy-wrap u-abs u-flex">
                    <div class="kv__catchcopy">
                        <img src="/image/catchcopy.svg" alt="">
                    </div>
                    <div class="kv__catchcopy-border"></div>
                    <div class="kv__catchcopy-textwrap">
                        <h1 class="u-fon4 u-font-mont">YUTO HAYATA Portfolio</h1>
                        <h2 class="u-fon7">ディレクター/デザイナー/コーディング</h2>
                    </div>
                </div>

                <!-- Dog -->
                <div class="kv__dog u-abs">
                    <img class="u-contain" src="/image/Dog.svg" alt="">
                </div>

                <div class="kv__dog2 u-abs">
                    <img class="u-contain" src="/image/Dog2.svg" alt="">
                </div>

                <!-- Swiper -->
                <div class="kv__swiper-column card02 l-section u-rel">
                    <div class="l-inner">
                        <div class="kv__swiper swiper">
                            <div class="kv__swiper-wrapper swiper-wrapper">
                                <?php foreach ($kvWorks as $work): ?>
                                    <a href=<?= $work['url'] ?> class="kv__swiper-slide swiper-slide u-pointer">
                                        <div class="kv__swiper-image">
                                            <img src=<?= $work['thumbnail'] ?> class="image-box--scroll-animation" alt="">
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>

                            <!-- ページネーション -->
                            <div class="kv__swiper-controller swiper-controller">
                                <div class="kv__swiper-pagination swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ニュース-->
            <section id="news" class="news u-rel luxy-el">

                <div class="news__inner u-rel">
                    <div class="news__title title-box--scroll-animation u-rel">
                        <img class="u-contain" src="/image/news.svg" alt="">
                    </div>

                    <div class="news__detail-wrapper">
                        <a href="/work/work-6" class="news__detail u-flex">
                            <div class="news__tag-wrap text-box--scroll-animation">
                                <p class="u-fon6 u-font-mont u-normal">2025.11.01</p>
                                <p class="u-fon6 u-font-mont u-normal">WORK</p>
                            </div>
                            <h3 class="news__text text-box--scroll-animation u-fon5">ポートフォリオサイトを公開しました。
                            </h3>
                        </a>

                        <a href="/work/work-7" class="news__detail u-flex">
                            <div class="news__tag-wrap text-box--scroll-animation">
                                <p class="u-fon6 u-font-mont u-normal">2025.10.01</p>
                                <p class="u-fon6 u-font-mont u-normal">WORK</p>
                            </div>
                            <h3 class="news__text text-box--scroll-animation u-fon5">バンド四段 1stアルバム「無言のパーティー」ジャケット • 歌詞カードを制作しました。
                            </h3>
                        </a>
                    </div>
                </div>
            </section>

            <!-- ワーク-->
            <section id="work" class="work u-rel">
                <!-- 背景 -->
                <div class="work__inner u-rel">
                    <div class="work__title title-box--scroll-animation u-rel">
                        <img class="u-contain" src="/image/work.svg" alt="" loading="lazy">

                        <div class="work__decoration title-box--scroll-animation u-abs">
                            <img class="u-contain" src="/image/work-deco.svg" alt="" loading="lazy">
                        </div>

                        <div class="work__decoration2 title-box--scroll-animation u-abs">
                            <img class="u-contain" src="/image/work-deco2.svg" alt="" loading="lazy">
                        </div>
                    </div>

                    <p class="work__text text-box--scroll-animation u-tex-c u-fon6">
                        身の回りの世界から拾った小さな発見を積み重ね、<br>デザインとして形にしています。<br>WEB・印刷・イラストの制作実績をまとめました。
                    </p>
                    <a href="/work" class="text-box--scroll-animation work__btn btn btn--primary btn--hover">
                        <p class="u-fon4 u-font-mont">WORK</p>
                        <svg class="u-arrow-icon" width="11" height="13" viewBox="0 0 11 13" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.146772 0.478803C0.434745 0.00757492 1.05053 -0.141152 1.52177 0.146772L10.5218 5.64677C10.819 5.82843 11.0003 6.15192 11.0003 6.50029C11.0003 6.84865 10.819 7.17215 10.5218 7.3538L1.52177 12.8538C1.05053 13.1417 0.434744 12.993 0.146772 12.5218C-0.141152 12.0505 0.00757447 11.4347 0.478803 11.1468L8.08134 6.50029L0.478803 1.8538C0.00757504 1.56583 -0.141152 0.950047 0.146772 0.478803Z"
                                fill="currentColor" />
                        </svg>
                    </a>


                    <div class="work__wrapper text-box--scroll-animation">
                        <?php foreach ($latestWorks as $work): ?>
                            <a href=<?= $work['url'] ?> class="work__detail-wrapper u-pointer">
                                <div class="work__detail-image">
                                    <img src=<?= $work['thumbnail'] ?> class="image-box--scroll-animation" alt="" loading="lazy">
                                </div>
                                <div class="work__detail-nav-text-box u-tex-left u-normal u-font-mont u-pointer">
                                    <p class="header__text u-fon6"><?= $work['tag'] ?></p>
                                </div>

                                <h3 class="work__detail-text u-fon3 u-bold">
                                    <?= $work['title'] ?>
                                </h3>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <!-- プロフィール-->
            <section id="profile" class="profile u-rel">

                <!-- DOG -->
                <div class="profile__dog u-abs">
                    <img class="u-contain" src="/image/Dog2.svg" alt="Dog" loading="lazy">
                </div>

                <div class="profile__inner u-rel">
                    <div class="profile__column u-rel">

                        <div class="profile__title u-abs">
                            <img class="image-box--scroll-animation u-contain" src="/image/profile.svg" alt="" loading="lazy">
                        </div>

                        <div class="profile__portrait">
                            <img class="image-box--scroll-animation u-contain" src="/image/profile.jpg" alt="" loading="lazy">
                        </div>

                        <div class="profile__wrapper">
                            <h3 class="profile__name text-box--scroll-animation u-font-mont u-fon2">YUTO HAYATA</h3>
                            <p class="profile__text text-box--scroll-animation u-fon6 u-normal">大学院にて工業デザインを専攻し、在学中は印刷およびWebデザイン会社でインターンとしてレタッチ業務やチラシ・ポスターの制作に携わりました。<br>
                                前職では3年間、Webサイト制作におけるディレクション・デザイン・コーディングを担当し、大手企業サイトからLPまで幅広い案件を経験しました。<br>
                                企画からデザイン、実装まで一貫して対応できる点を強みとしています。
                            </p>
                            <a href="/profile" class="profile__btn text-box--scroll-animation btn btn--primary btn--hover u-pointer">
                                <p class="u-font-mont u-fon4">PROFILE</p>
                                <svg class="u-arrow-icon" width="11" height="13" viewBox="0 0 11 13" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.146772 0.478803C0.434745 0.00757492 1.05053 -0.141152 1.52177 0.146772L10.5218 5.64677C10.819 5.82843 11.0003 6.15192 11.0003 6.50029C11.0003 6.84865 10.819 7.17215 10.5218 7.3538L1.52177 12.8538C1.05053 13.1417 0.434744 12.993 0.146772 12.5218C-0.141152 12.0505 0.00757447 11.4347 0.478803 11.1468L8.08134 6.50029L0.478803 1.8538C0.00757504 1.56583 -0.141152 0.950047 0.146772 0.478803Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </section>

            <!-- コンタクト-->
            <section id="contact" class="contact u-rel">

                <div class="contact__inner u-rel">

                    <div class="contact__title title-box--scroll-animation u-rel">
                        <img class="u-contain" src="/image/contact.svg" alt="">
                    </div>

                    <p class="contact__text text-box--scroll-animation u-tex-l u-font-mont u-fon3 u-tex-c">
                        propanhelium@gmail.com
                    </p>

                    <div class="contact__decoration title-box--scroll-animation u-abs">
                        <img class="u-contain" src="/image/Dog.svg" alt="" loading="lazy">
                    </div>
                </div>
            </section>

            <!-- フッダー -->
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/footer.php'); ?>
        </div>
    </main>

    <script src="/swiper/swiper-bundle.min.js"></script>
    <script src="/js/animation.js"></script>
    <script src="/js/luxy.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const header = document.getElementById("header");
            const kvCatchcopy = document.getElementById("kv__catchcopy-wrap");
            const root = document.documentElement;

            if (!header || !kvCatchcopy) return;

            function setHeaderHeight() {
                const h = header.getBoundingClientRect().height;
                root.style.setProperty('--header-height', `${h}px`);
            }

            function setKvCatchcopyHeight() {
                const catchcopy = kvCatchcopy.getBoundingClientRect().height;
                root.style.setProperty('--catchcopy', `${catchcopy}px`);
            }

            // 初期実行
            setHeaderHeight();
            setKvCatchcopyHeight();

            // 画面サイズ変更時に再計算
            let resizeTimer = null;
            window.addEventListener('resize', function() {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(() => {
                    setHeaderHeight();
                    setKvCatchcopyHeight();
                }, 120);
            });

            // ページ読み込み完了時にも再計算
            window.addEventListener('load', () => {
                setHeaderHeight();
                setKvCatchcopyHeight();
            });
        });

        (function() {
            const root = document.documentElement;

            // ビューポートサイズをCSS変数にセット
            function setViewportVars() {
                const vw = window.innerWidth;
                const vh = window.innerHeight;
                const kvVh = window.innerHeight * 0.75;
                const kvVhSp = window.innerHeight * 0.9;
                root.style.setProperty('--vw', `${vw}px`);
                root.style.setProperty('--vh', `${vh}px`);
                root.style.setProperty('--kvVh', `${kvVh}px`);
                root.style.setProperty('--kvVhSp', `${kvVhSp}px`);
            }

            // 初回設定
            setViewportVars();

            // リサイズ時に更新（スマホでの回転対応など）
            let resizeTimer = null;
            window.addEventListener('resize', () => {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(setViewportVars, 120);
            });
        })();


        // Swiper設定
        const mySwiper = new Swiper('.card02 .swiper', {
            slidesPerView: 'auto',
            spaceBetween: 32,
            slidesOffsetBefore: -240,
            slidesOffsetAfter: 32,
            grabCursor: true,
            pagination: {
                el: '.card02 .swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.card02 .swiper-button-next',
                prevEl: '.card02 .swiper-button-prev',
            },
            breakpoints: {
                // 767px以下のとき
                0: {
                    slidesPerView: 1.2,
                    spaceBetween: 16,
                    slidesOffsetBefore: 16,
                    slidesOffsetAfter: 16,
                },
                // 768px以上のとき
                768: {
                    slidesPerView: 'auto',
                    spaceBetween: 32,
                    slidesOffsetBefore: -240,
                    slidesOffsetAfter: 32,
                },
            },
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            if (typeof luxy !== "undefined" && typeof luxy.init === "function") {
                luxy.init({
                    wrapper: '#luxy', // ラッパー要素（あなたのdiv）
                    wrapperSpeed: 1, // 背景の追従速度（小さいほどゆっくり）
                    targets: '.luxy-el', // パララックス対象
                });
                console.log("✅ luxy initialized");
            } else {
                console.error("❌ luxy.js の読み込みに失敗しています");
            }
        });
    </script>


</body>

</html>
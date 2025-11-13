<?php
$pageTitle = 'PROFILE | YUTO HAYATA ポートフォリオサイト';
$pageDescription = 'YUTO HAYATA | WEBデザイナー。大学院にて工業デザインを専攻し、在学中は印刷およびWebデザイン会社でインターンとしてレタッチ業務やチラシ・ポスターの制作に携わりました。前職では3年間、Webサイト制作におけるディレクション・デザイン・コーディングを担当し、大手企業サイトからLPまで幅広い案件を経験しました。企画からデザイン、実装まで一貫して対応できる点を強みとしています。'; ?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/head.php'); ?>
    <link rel="stylesheet" href="/css/profile.css" type="text/css">
</head>

<body id="body">
    <main id="main">
        <div class="inner u-rel">

            <!-- ヘッダー -->
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/header.php'); ?>

            <!-- プロフィール-->
            <section id="profile" class="profile u-rel">

                <!-- DOG -->
                <div class="profile__dog u-abs">
                    <img class="u-contain" src="/image/Dog2.svg" alt="">
                </div>

                <div class="profile__inner u-rel">
                    <div class="profile__column u-rel">
                        <div class="profile__column-inner">
                            <div class="profile__title u-abs">
                                <img class="image-box--scroll-animation u-contain" src="/image/profile.svg" alt="">
                            </div>

                            <div class="profile__portrait">
                                <img class="image-box--scroll-animation u-contain" src="/image/profile.jpg" alt="">
                            </div>

                            <div class="profile__wrapper">
                                <h3 class="profile__name text-box--scroll-animation u-font-mont u-fon2">YUTO HAYATA</h3>
                                <p class="profile__text text-box--scroll-animation u-fon6 u-normal">大学院にて工業デザインを専攻し、在学中は印刷およびWebデザイン会社でインターンとしてレタッチ業務やチラシ・ポスターの制作に携わりました。<br>
                                    前職では3年間、Webサイト制作におけるディレクション・デザイン・コーディングを担当し、大手企業サイトからLPまで幅広い案件を経験しました。<br>
                                    企画からデザイン、実装まで一貫して対応できる点を強みとしています。
                                </p>

                                <h3 class="profile__experience-title u-font-mont u-fon5">
                                    経験領域
                                </h3>

                                <p class="profile__experience-text u-font-mont u-normal u-fon7">
                                    ディレクション / WEBや印刷物などのUX,UIデザイン / コーディング • 実装 / 保守
                                </p>
                            </div>
                        </div>

                        <div class="profile__introduce-column">
                            <h3 class="profile__introduce-title u-fon4">
                                使用ツール
                            </h3>

                            <p class="profile__introduce-text u-normal u-fon6">
                                Illusyrator,Photoshop,Figma,XD,PHP,Javascript,Next.jsなど
                            </p>

                            <h3 class="profile__introduce-title u-fon4">
                                好きなこと
                            </h3>

                            <p class="profile__introduce-text u-normal u-fon6">
                                絵を描くことと実家の犬と遊ぶのが好きです！<br>絵は家で描くのとたまにホテルやDJバー、クラブなどで絵を描いています。<br>コラージュが好きでチラシなどの素材をレイアウトや構図を考えながら作っています。
                                <img class="profile__introduce-image profile__introduce-image-sp" src="/image/livepaint.jpg" alt="livepaint">
                                <br>
                                旅行した時やカフェなどでスケッチをするのも好きです！
                                <span class="profile__introduce-image-wrap u-flex">
                                    <img class="profile__introduce-image" src="/image/sketch_2.jpg" alt="sketch">
                                    <img class="profile__introduce-image" src="/image/sketch_1.jpg" alt="sketch">
                                </span>
                            </p>
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
                        <img class="u-contain" src="/image/Dog.svg" alt="">
                    </div>
                </div>
            </section>

            <!-- フッダー -->
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/footer.php'); ?>
        </div>
    </main>

    <script src="/js/animation.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const header = document.getElementById("header")
            const root = document.documentElement;

            if (!header) return;

            function setHeaderHeight() {
                const h = header.getBoundingClientRect().height;
                console.log(h);
                root.style.setProperty('--header-height', `${h}px`);
            }

            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', setHeaderHeight);
            } else {
                setHeaderHeight();
            }

            let resizeTimer = null;
            window.addEventListener('resize', function() {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(setHeaderHeight, 120);
            });

            window.addEventListener('load', setHeaderHeight);
        });

        (function() {
            const root = document.documentElement;

            // ビューポートサイズをCSS変数にセット
            function setViewportVars() {
                const vw = window.innerWidth;
                const vh = window.innerHeight;
                root.style.setProperty('--vw', `${vw}px`);
                root.style.setProperty('--vh', `${vh}px`);
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
    </script>

</body>

</html>
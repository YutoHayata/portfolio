<?php
$jsonData = file_get_contents('../../json/work.json');
$works = json_decode($jsonData, true);

// 最初の1件だけ取得
$firstWork = $works[0];
$pageTitle = "{$firstWork['title']} | YUTO HAYATA ポートフォリオサイト";
$pageDescription = "{$firstWork['description']}";
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/head.php'); ?>
    <link rel="stylesheet" href="/css/work-detail.css" type="text/css">
</head>

<body id="body">
    <main id="main">
        <div class="inner u-rel">

            <!-- ヘッダー -->
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/header.php'); ?>

            <!-- ワーク -->
            <section id="work" class="work u-rel">
                <div class="work__inner">
                    <div class="work__top-movie">
                        <div class="work__video-wrapper">
                            <video class="work__video" autoplay muted loop playsinline>
                                <source src=<?= $firstWork['top-image'] ?> type="video/mp4">
                                お使いのブラウザは video タグに対応していません。
                            </video>
                        </div>
                    </div>

                    <div class="work__wrapper">
                        <div class="work__information">

                            <p class="u-fon7 u-font-mont"><?= $firstWork['tag'] ?></p>


                            <h2 class="work__detail-text u-fon2"><?= $firstWork['title'] ?></h2>

                            <p class="work__text u-fon6 u-normal">
                                <?= $firstWork['description'] ?>
                                <br>
                                <br>
                                <span class="u-pointer external-link">
                                    <a href=<?= $firstWork['site-url'] ?> target="_blank" rel="noopener noreferrer">
                                        <?= $firstWork['site-url'] ?>
                                    </a>

                                    <!-- 外部リンクアイコン（SVG） -->
                                    <svg class="external-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                        <path d="M14 3h7v7h-2V6.41l-9.29 9.3-1.42-1.42 9.3-9.29H14V3z"></path>
                                        <path d="M5 5h5V3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-5h-2v5H5V5z"></path>
                                    </svg>
                                </span>
                            </p>


                            <h3 class="work__sub-title u-fon3">
                                クライアント
                            </h3>

                            <p class="work__text u-fon6 u-normal">
                                TOKYO DJ CLUB
                            </p>

                            <h3 class="work__sub-title u-fon3">
                                製作期間
                            </h3>

                            <p class="work__text u-fon6 u-normal">
                                1か月(サイトの要件定義からデザイン·コーディングまで)
                            </p>

                            <h3 class="work__sub-title u-fon3">
                                使用ツール
                            </h3>

                            <p class="work__text u-fon6 u-normal">
                                Figma,next.js,photoshop
                            </p>

                            <h3 class="work__sub-title u-fon3">
                                問題点と課題
                            </h3>

                            <p class="work__text u-fon6 u-normal">
                                以前のサイト(https://tokyodj.jp/)はどの層に届けたいかが明確ではありませんでした。そのため記載コンテンツがターゲットに絞れていない、導線が最適化されていないなど課題がありました。
                            </p>

                            <h3 class="work__sub-title u-fon3">
                                デザインについて
                            </h3>

                            <p class="work__text u-fon6 u-normal">
                                類似サイトの分析から、ToB向けでは“信頼感と洗練さ”が重視されている一方で、DJカルチャー特有の熱量や非日常感の表現が弱いことに気づきました。<br>そこで、黒を基調にすることで信頼感と高級感を両立し、企業が安心して依頼できる印象を演出。また、ファーストビューにイベント動画を配置し、企業担当者が“イベントの空気感を直感的に想像できる体験を設計しました。<br>また、サイトの演出に視差効果(パララックス)を使用することでDJが魅力的に空間を演出することをサイトで伝わるようにしました。
                            </p>
                        </div>

                        <div class="work__detail-image-wrap">
                            <div class="work__detail-image">
                                <img src=<?= $firstWork['sub-image1'] ?> alt="">
                            </div>

                            <div class="work__detail-image">
                                <img src=<?= $firstWork['sub-image2'] ?> alt="">
                            </div>
                        </div>
                    </div>

                    <a href="/work/" class="work__btn btn btn--primary btn--hover u-pointer">
                        <span class="u-fon4 u-font-mont">BACK</span>
                        <svg class="u-arrow-icon" width="11" height="13" viewBox="0 0 11 13" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.146772 0.478803C0.434745 0.00757492 1.05053 -0.141152 1.52177 0.146772L10.5218 5.64677C10.819 5.82843 11.0003 6.15192 11.0003 6.50029C11.0003 6.84865 10.819 7.17215 10.5218 7.3538L1.52177 12.8538C1.05053 13.1417 0.434744 12.993 0.146772 12.5218C-0.141152 12.0505 0.00757447 11.4347 0.478803 11.1468L8.08134 6.50029L0.478803 1.8538C0.00757504 1.56583 -0.141152 0.950047 0.146772 0.478803Z"
                                fill="currentColor" />
                        </svg>
                    </a>
                </div>
            </section>

            <!-- フッター -->
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/footer.php'); ?>
        </div>
    </main>

    <script>
        const bodyOpen = document.getElementById("body");
        window.addEventListener('load', function() {
            bodyOpen.classList.add("body__load")
        });
    </script>
</body>

</html>
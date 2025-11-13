<?php
$jsonData = file_get_contents('../../json/work.json');
$works = json_decode($jsonData, true);

// 最初の1件だけ取得
$firstWork = $works[5];
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
                            <div class="work__detail-nav-text-box u-tex-left u-pointer">
                                <p class="header__text u-fon5"><?= $firstWork['tag'] ?></p>
                            </div>

                            <h2 class="work__detail-text  u-fon2"><?= $firstWork['title'] ?></h2>

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
                                自主制作
                            </p>

                            <h3 class="work__sub-title u-fon3">
                                製作期間
                            </h3>

                            <p class="work__text u-fon6 u-normal">
                                1か月 (サイトの要件定義からデザイン·コーディング、公開まで)
                            </p>

                            <h3 class="work__sub-title u-fon3">
                                使用ツール
                            </h3>

                            <p class="work__text u-fon6 u-normal">
                                Figma（UIデザイン・ワイヤーフレーム）<br>HTML / CSS / JavaScript / PHP（フロントエンド・バックエンドコーディング）
                            </p>

                            <h3 class="work__sub-title u-fon3">
                                意図・ポイント
                            </h3>

                            <p class="work__text u-fon6 u-normal">
                                多様な事例を掲載するため、シンプルで見やすいレイアウトを採用。<br>ラフ感のある犬のイラストを制作し、穏やかで柔らかい人柄と、好奇心旺盛な姿勢を表現。背景色は淡いトーンの色を採用しました。<br>本サイトのキャッチコピーである「Pile Up Discoveries（発見を積み重ねる）」は日々見聞きしたものを好奇心で蓄積し、デザインとしてアウトプットしていく姿勢を表現しています。<br>また、同業種のポートフォリオを多数ユーザー視点で分析し、ワイヤーフレームやサイトマップを作成。トップページから各事例へスムーズに移行できる導線設計を心がけ、作品だけでなく思考の流れも伝わる構成にしています。
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

                    <a href="/work" class="work__btn btn btn--primary btn--hover u-pointer">
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
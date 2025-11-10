<?php
// JSON読み込み
$jsonData = file_get_contents('../json/work.json');
$works = json_decode($jsonData, true);

// 日付で降順ソート（新しい順）
usort($works, function ($a, $b) {
    // 日付を strtotime で比較
    return strtotime($b['date']) - strtotime($a['date']);
});

$latestWorks = $works;
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/common/style.css" type="text/css">
    <link rel="stylesheet" href="/css/work.css" type="text/css">
    <title>WORKS | YUTO HAYATA ポートフォリオサイト</title>

    <meta name="description" content="YUTO HAYATA | 大学院にて工業デザインを専攻し、在学中は印刷およびWebデザイン会社でインターンとしてレタッチ業務やチラシ・ポスターの制作に携わりました。前職では3年間、Webサイト制作におけるディレクション・デザイン・コーディングを担当し、大手企業サイトからLPまで幅広い案件を経験しました。企画からデザイン、実装まで一貫して対応できる点を強みとしています。">
    <meta name="keywords" content="Webデザイン,UX,UI,ポートフォリオ,制作実績">
    <meta name="author" content="Yuto Hayata">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#3D3D2D">
    <meta property="og:title" content="Yuto Hayata Portfolio">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://yuhayata.com/">
    <meta property="og:image" content="https://yuhayata.com/image/ogp.jpg">
    <meta property="og:description" content="YUTO HAYATA | 大学院にて工業デザインを専攻し、在学中は印刷およびWebデザイン会社でインターンとしてレタッチ業務やチラシ・ポスターの制作に携わりました。前職では3年間、Webサイト制作におけるディレクション・デザイン・コーディングを担当し、大手企業サイトからLPまで幅広い案件を経験しました。企画からデザイン、実装まで一貫して対応できる点を強みとしています。">
    <meta property="og:site_name" content="Yuto Hayata Portfolio">
    <meta property="og:locale" content="ja_JP">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Zen+Kaku+Gothic+New:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="/fav/favicon.png">
    <link rel="icon" type="image/gif" href="/fav/favicon.gif">
    <link rel="icon" type="image/x-icon" href="/fav/favicon.ico">
    <link rel="shortcut icon" href="/fav/favicon.ico">
</head>

<body id="body">
    <main id="main">
        <div class="inner u-rel">

            <!-- ヘッダー -->
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/header.php'); ?>

            <!-- ワーク -->
            <section id="work" class="work u-rel">
                <!-- 背景 -->
                <div class="work__inner u-rel">
                    <div class="work__title title-box--scroll-animation u-rel">
                        <img class="u-contain" src="/image/work.svg" alt="">

                        <div class="work__decoration title-box--scroll-animation u-abs">
                            <img class="u-contain" src="/image/work-deco.svg" alt="">
                        </div>

                        <div class="work__decoration2 title-box--scroll-animation u-abs">
                            <img class="u-contain" src="/image/work-deco2.svg" alt="">
                        </div>
                    </div>

                    <p class="work__text text-box--scroll-animation u-tex-c u-fon6">
                        WEBサイトや印刷物のデザイン、<br class="br-sp">イラスト制作の実績です。
                    </p>


                    <div class="work__wrapper text-box--scroll-animation">
                        <?php foreach ($latestWorks as $work): ?>
                            <a href=<?= $work['url'] ?> class="work__detail-wrapper u-pointer">
                                <div class="work__detail-image">
                                    <img src=<?= $work['thumbnail'] ?> class="image-box--scroll-animation" alt="">
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

            <!-- フッター -->
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/footer.php'); ?>
        </div>
    </main>

    <script src="/js/animation.js"></script>

</body>

</html>
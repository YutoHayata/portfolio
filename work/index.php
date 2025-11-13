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

$pageTitle = 'WORK | YUTO HAYATA ポートフォリオサイト';
$pageDescription = '身の回りの世界から拾った小さな発見を積み重ね、デザインとして形にしています。WEB・印刷・イラストの制作実績をまとめました。';

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/head.php'); ?>
    <link rel="stylesheet" href="/css/work.css" type="text/css">
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
                        身の回りの世界から拾った小さな発見を積み重ね、<br>デザインとして形にしています。<br>WEB・印刷・イラストの制作実績をまとめました。
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
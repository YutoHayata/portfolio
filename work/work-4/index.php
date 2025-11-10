<?php
$jsonData = file_get_contents('../../json/work.json');
$works = json_decode($jsonData, true);

// 最初の1件だけ取得
$firstWork = $works[3];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/common/style.css" type="text/css">
    <link rel="stylesheet" href="/css/work-detail.css" type="text/css">
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

                            <p class="work__text u-font-mont u-fon6 u-normal">
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

                            <p class="work__text u-font-mont u-fon6 u-normal">
                                マクセル アクアパーク品川 - maxell AQUA PARK SHINAGAWA
                            </p>

                            <h3 class="work__sub-title u-fon3">
                                製作期間
                            </h3>

                            <p class="work__text u-font-mont u-fon6 u-normal">
                                1か月 (サイトの要件定義からデザイン·コーディング、公開まで)
                            </p>

                            <h3 class="work__sub-title u-fon3">
                                使用ツール
                            </h3>

                            <p class="work__text u-font-mont u-fon6 u-normal">
                                photoshop,illustrator,next js,scss,XD
                            </p>

                            <h3 class="work__sub-title u-fon3">
                                意図・ポイント
                            </h3>

                            <p class="work__text u-font-mont u-fon6 u-normal">
                                親子で見る方が大きとのことだったので可愛らしく、文章を読みやすくレイアウトや行間を工夫しました。<br>
                                また、難しい説明は図とイラストで説明するなど工夫しました。
                            </p>

                            <h3 class="work__sub-title u-fon3">
                                デザインで工夫した点
                            </h3>

                            <p class="work__text u-font-mont u-fon6 u-normal">
                                サイトに使用できる素材が少なかったため、イラストとレイアウト、文字のあしらいで簡素なイメージを与えないようにしました。<br>
                                ファーストビューのタイトルはサンゴの再生を表すために文字のあしらいを工夫しました。
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

        const canvas = document.getElementById("myCanvas");
        const ctx = canvas.getContext("2d");

        // --- キャンバスサイズ調整 ---
        function resizeCanvas() {
            canvas.width = 200;
            canvas.height = 200;
            drawBackground();
        }
        resizeCanvas();
        window.addEventListener("resize", resizeCanvas);

        // --- 背景描画（透明保持） ---
        function drawBackground() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            // 透明背景なので fillRect 不要
        }

        // --- 画像読み込み ---
        const overlayImg = new Image();
        overlayImg.src = "/image/s-3000x3000_v-frms_webp_eab87d5f-79e6-4da2-a503-845a5335c0cd_small.webp";
        const overlayImg2 = new Image();
        overlayImg2.src = "/image/dj3.png";
        const overlayImg3 = new Image();
        overlayImg3.src = "/image/the-new-york-public-library-o784yEsNIS8-unsplash.webp";
        const overlayImg4 = new Image();
        overlayImg4.src = "/image/dj2.png";

        const maskImg = new Image();
        maskImg.src = "/image/base.png";

        const images = [overlayImg, overlayImg2, overlayImg3, overlayImg4, maskImg];
        let maskData = null;
        let imagesLoaded = 0;

        function checkLoaded() {
            imagesLoaded++;
            if (imagesLoaded === images.length) {
                createMaskData();
                startGlitch();
            }
        }

        images.forEach(img => {
            img.addEventListener("load", checkLoaded);
            img.addEventListener("error", () => console.error("image load error:", img.src));
        });

        // --- マスク生成 ---
        function createMaskData() {
            if (!maskImg.complete) return;
            const mcanvas = document.createElement("canvas");
            const mctx = mcanvas.getContext("2d");
            mcanvas.width = canvas.width;
            mcanvas.height = canvas.height;
            mctx.drawImage(maskImg, 0, 0, mcanvas.width, mcanvas.height);
            maskData = mctx.getImageData(0, 0, mcanvas.width, mcanvas.height).data;
        }

        // --- 描画位置取得 ---
        function getWeightedPositionFromMask() {
            if (!maskData) return {
                dx: Math.random() * canvas.width,
                dy: Math.random() * canvas.height
            };
            let x, y, brightness, tries = 0;
            const threshold = 30;
            do {
                x = Math.floor(Math.random() * canvas.width);
                y = Math.floor(Math.random() * canvas.height);
                const i = (y * canvas.width + x) * 4;
                const r = maskData[i];
                const g = maskData[i + 1];
                const b = maskData[i + 2];
                brightness = 0.2126 * r + 0.7152 * g + 0.0722 * b;
                tries++;
            } while ((Math.random() * 255 > brightness || brightness < threshold) && tries < 200);
            return {
                dx: x,
                dy: y
            };
        }

        // --- グリッチ描画 ---
        let intenseDrawId = null;
        let normalLoopId = null;

        function stopGlitch() {
            if (intenseDrawId) {
                clearInterval(intenseDrawId);
                intenseDrawId = null;
            }
            if (normalLoopId) {
                clearInterval(normalLoopId);
                normalLoopId = null;
            }
        }

        function drawRandomBlock(count = 1) {
            for (let i = 0; i < count; i++) {
                const imgs = [overlayImg, overlayImg2, overlayImg3, overlayImg4];
                const img = imgs[Math.floor(Math.random() * imgs.length)];
                const blockSize = Math.floor(Math.random() * 50) + 10;
                const sx = Math.floor(Math.random() * Math.max(1, img.width - blockSize));
                const sy = Math.floor(Math.random() * Math.max(1, img.height - blockSize));
                const {
                    dx,
                    dy
                } = getWeightedPositionFromMask();
                ctx.drawImage(img, sx, sy, blockSize, blockSize, dx, dy, blockSize, blockSize);
            }
        }

        function startGlitch() {
            stopGlitch();
            if (!maskData) createMaskData();

            intenseDrawId = setInterval(() => drawRandomBlock(32), 50);

            const switchTimer = setTimeout(() => {
                clearInterval(intenseDrawId);
                intenseDrawId = null;
                normalLoopId = setInterval(() => drawRandomBlock(1), 30);
            }, 2000);

            setTimeout(() => {
                clearTimeout(switchTimer);
                stopGlitch();
                console.log("🔹 グリッチ描画を停止しました");
            }, 3000);
        }
    </script>
</body>

</html>
<?php
$pageTitle = $pageTitle ?? 'YUTO HAYATA ポートフォリオサイト';
$pageDescription = $pageDescription ?? 'YUTO HAYATA | 大学院にて工業デザインを専攻し、在学中は印刷およびWebデザイン会社でインターンとしてレタッチ業務やチラシ・ポスターの制作に携わりました。前職では3年間、Webサイト制作におけるディレクション・デザイン・コーディングを担当し、大手企業サイトからLPまで幅広い案件を経験しました。企画からデザイン、実装まで一貫して対応できる点を強みとしています。';
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
<meta name="keywords" content="Webデザイン,UX,UI,ポートフォリオ,制作実績">
<meta name="author" content="Yuto Hayata">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#3D3D2D">

<meta property="og:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="https://yuhayata.com<?= htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:image" content="https://yuhayata.com/image/ogp.jpg">
<meta property="og:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:site_name" content="Yuto Hayata Portfolio">
<meta property="og:locale" content="ja_JP">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Zen+Kaku+Gothic+New:wght@500;700&display=swap" rel="stylesheet">

<link rel="icon" type="image/png" href="/fav/favicon.png">
<link rel="icon" type="image/gif" href="/fav/favicon.gif">
<link rel="icon" type="image/x-icon" href="/fav/favicon.ico">
<link rel="shortcut icon" href="/fav/favicon.ico">

<link rel="icon" type="image/png" href="/fav/favicon.png">
<link rel="icon" type="image/gif" href="/fav/favicon.gif">
<link rel="icon" type="image/x-icon" href="/fav/favicon.ico">
<link rel="shortcut icon" href="/fav/favicon.ico">

<!-- 共通CSS -->
<link rel="stylesheet" href="/common/style.css">
<link rel="stylesheet" href="/common/header.css" type="text/css">
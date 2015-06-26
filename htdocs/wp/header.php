<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>テンプレート</title>
	<meta name="robots" content="index,follow">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>
	<?php wp_head(); ?>
</head>
<body>
	<div class="l-titlebar">
		<h1>熊本東部の外壁塗装、屋根塗装、塗装、塗替えなら、職人一家の牛嶋屋　ぬりたて家本舗(有)牛嶋塗装工業へ！</h1>
	</div>
	<header class="l-header">
		<div class="wrap">
			<div class="header-logo">
				<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/header/header_logo.png" width="427" height="107" alt="ぬりたて家本舗(有)牛嶋塗装工業"></a>
			</div>
			<div class="header-btn">
				<ul class="header-list float-list">
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/header/header_form.png" width="207" height="83" alt="お問い合わせのフォームはこちら"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/header/header_tel.png" width="285" height="83" alt="TEL:0120-085-456"></li>
				</ul>
			</div>
		</div>
	</header><!-- /.l-header -->

	<section class="l-mv">
		<div class="wrap">
			<div class="mv-main">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mv.png" width="741" height="370" alt="メイン画像">
			</div>
			<div class="mv-side">
				<ul class="mv-side-list">
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mv_side_01.png" width="240" height="83" alt="施工実績"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mv_side_02.png" width="240" height="83" alt="外壁塗装のプロフェッショナル！　いくつもの資格はプロの証"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mv_side_03.png" width="240" height="83" alt="業界唯一　牛嶋塗装工業のこだわり"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mv_side_04.png" width="240" height="82" alt="専門店プラン"></li>
				</ul>
			</div>
		</div>
	</section>

	<nav class="l-navi">
		<ul class="navi-list float-list">
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/navi/navi_01.png" width="153" height="45" alt="トップページ"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/navi/navi_02.png" width="134" height="45" alt="住宅塗装相談室"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/navi/navi_03.png" width="143" height="45" alt="牛嶋の強み"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/navi/navi_04.png" width="142" height="45" alt="牛嶋の施工"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/navi/navi_05.png" width="143" height="45" alt="牛嶋の保証"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/navi/navi_06.png" width="142" height="45" alt="お客様が語る牛嶋"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/navi/navi_07.png" width="143" height="45" alt="ご近所の施工宅"></li>
		</ul>
	</nav><!-- /.l-navi -->
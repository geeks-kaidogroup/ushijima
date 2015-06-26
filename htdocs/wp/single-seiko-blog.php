<?php include_once('header.php'); ?>

	<section class="l-contents">
		<main class="l-main">
			<div class="l-breadcrumb">
				<p><a href="<?php echo home_url(); ?>">トップページ</a>&nbsp;&gt;&nbsp;施工ブログ</p>
			</div> <!--/.l-breadcrumb -->

			<article class="l-blog-detail">
				<h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/seiko_blog_h2.png" width="780" height="90" alt="施工ブログ"></h2>

				<h3 class="blog-ttl">タイトルタイトルタイトルタイトル</h3>
				<p class="date">2014年00月00日</p>
				<div class="blog-detail-box cf">
					<div class="detail-box-text">
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br><br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br><br>テキストテキストテキストテキストテキストテキストテキストテキスト<br><br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
					</div>
					<div class="detail-box-thumb">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/single-blog/single_blog_thumb.jpg" width="240" height="180" alt="画像">
					</div>
				</div>

				<div class="l-page-nav">
					<ul>
						<li>&lt;&lt;&nbsp;前の記事</li>
						<li><a href="#">一覧へ戻る</a></li>
						<li><a href="#">次の記事&nbsp;&gt;&gt;</a></li>
					</ul>
				</div> <!--/.l-page-nav-->
			</article>	<!--/.l-blog-detail-->

<?php include_once('main-footer.php'); ?>
		</main>
<?php include_once('sidebar.php'); ?>
	</section><!-- /.l-contents -->

<?php include_once('footer.php'); ?>

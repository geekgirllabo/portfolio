<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta name="description" content="一般法人　日本真珠振興会では真珠の研究、指導及び育成を図り、もってその発展、進行促進をする事を目的としています">
		<meta name="keyword" content="日本真珠振興会,真珠,パール,真珠検定">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>
<?php if(is_front_page()): ?>
<?php bloginfo('name'); ?>
<?php elseif(is_page()): ?>
<?php wp_title(''); ?> ｜ <?php bloginfo('name'); ?>
<?php elseif(is_single()): ?>
<?php wp_title(''); ?> ｜ <?php bloginfo('name'); ?>
<?php elseif(is_category()): ?>
<?php single_cat_title() ?>の記事一覧 ｜ <?php bloginfo('name'); ?>
<?php elseif(is_month()): ?>
<?php the_time("Y年m月") ?>の記事一覧 ｜ <?php bloginfo('name'); ?>
<?php elseif(is_year()): ?>
<?php the_time("Y年") ?>の記事一覧 ｜ <?php bloginfo('name'); ?>
<?php elseif(is_search()): ?>
検索結果 ｜ <?php bloginfo('name'); ?>
<?php else: ?>
<?php bloginfo('name'); ?>
<?php endif; ?>
</title>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory');?>/js/script.js"></script>
	</head>
<body>
<div id="pagetop"></div>
<!-- ヘッダー -->
<div id="header-wrapper clearfix">		
<div id="header">
	<div id="left-header">
		<h1><a href="<?php bloginfo('url');?>" /><img src="<?php bloginfo('template_directory');?>/image/1003jpps_logo.png" alt="一般法人　日本真珠振興会" /></a></h1>
	</div>
    <div id="right-header">
<!-- グローバルナビ -->
    	<div class="nav">
		<ul>
		<li><a href="<?php bloginfo('url');?>/about/">振興会概要<span class="icon-nav">▼</span></a>
		<ul>
			<li><a href="<?php bloginfo('url');?>/about/i">日本真珠振興会とは</a></li>
			<li><a href="<?php bloginfo('url');?>/about/organization/">組織概要</a></li>
			<li><a href="<?php bloginfo('url');?>/about/member/">会員一覧</a></li>
		</ul>
			</li>
		<li><a href="<?php bloginfo('url');?>/knowledge/">真珠の知識<span class="icon-nav">▼</span></a>
		<ul>
			<li><a href="<?php bloginfo('url');?>/knowledge/type/">真珠の種類</a></li>
			<li><a href="<?php bloginfo('url');?>/knowledge/evaluation/">主な品質評価項目</a></li>
			<li><a href="<?php bloginfo('url');?>/knowledge/necklace/">ネックレスの種類と呼称</a></li>
			<li><a href="<?php bloginfo('url');?>/knowledge/maintenance/">メンテナンス方法</a></li>
		</ul>
			</li>
		<li><a href="<?php bloginfo('url');?>/archive/">真珠の書籍庫</a></li>
		<li><a href="<?php bloginfo('url');?>/market/">事業<span class="icon-nav">▼</span></a>
		<ul>
			<li><a href="<?php bloginfo('url');?>/market/">市場開拓及び需要拡大等支援事業</a></li>
			<li><a href="<?php bloginfo('url');?>/quality/">品質向上及び供給安定化等支援事業</a></li>
			<li><a href="<?php bloginfo('url');?>/grouth/">真珠養殖等連携強化</a></li>
			<li><a href="<?php bloginfo('url');?>/grouth/">成長展開事業（国庫補助事業)</a></li>
			<li><a href="<?php bloginfo('url');?>/grouth/">教育事業（真珠検定)</a></li>
		</ul>
			</li>
		<li><a href="<?php bloginfo('url');?>/privacypolicy/">プライバシー・ポリシー<span class="icon-nav">▼</span></a>
		<ul>
			<li><a href="<?php bloginfo('url');?>/privacypolicy/">個人情報の管理</a></li>
			<li><a href="<?php bloginfo('url');?>/privacypolicy/">個人情報の利用目的</a></li>
			<li><a href="<?php bloginfo('url');?>/privacypolicy/">個人情報の第三者への開示・提供の禁止</a></li>
			<li><a href="<?php bloginfo('url');?>/privacypolicy/">個人情報の安全対策</a></li>
			<li><a href="<?php bloginfo('url');?>/privacypolicy/">ご本人の照会</a></li>
			<li><a href="<?php bloginfo('url');?>/privacypolicy/">法令、規範の遵守と見直し</a></li>
			<li><a href="<?php bloginfo('url');?>/inquiry/">お問合せ</a></li>
		</ul>
			</li>
			<li><a href="<?php bloginfo('url');?>/inquiry/">お問合せ</a></li>
		</ul>
		</div>
<!-- / グローバルナビ -->
	<!-- グローバルナビsp -->
<nav id="mainnav">
	<p id="menuWrap"><a id="menu"><span id="menuBtn"></span></a></p>
	<div class="panel">
		<ul>
			<li><a href="<?php bloginfo('url');?>/about/">振興会概要<span class="icon-nav">▼</span></a>
		<ul>
			<li><a href="<?php bloginfo('url');?>/about/">日本真珠振興会とは</a>
			</li>
			<li><a href="<?php bloginfo('url');?>/about/organization/">組織概要</a></li>
			<li><a href="<?php bloginfo('url');?>/about/member/">会員一覧</a></li>
		</ul>
			</li>
			<li><a href="<?php bloginfo('url');?>/knowledge/">真珠の知識<span class="icon-nav">▼</span></a>
		<ul>
			<li><a href="<?php bloginfo('url');?>/knowledge/type/">真珠の種類</a></li>
			<li><a href="<?php bloginfo('url');?>/knowledge/evaluation/">主な品質評価項目</a></li>
			<li><a href="<?php bloginfo('url');?>/knowledge/necklace/">ネックレスの種類と呼称</a></li>
			<li><a href="<?php bloginfo('url');?>/knowledge/maintenance/">メンテナンス方法</a></li>
		</ul>
			</li>
			<li><a href="<?php bloginfo('url');?>/archive/">真珠の書籍庫</a></li>
			<li><a href="<?php bloginfo('url');?>/market/">事業<span class="icon-nav">▼</span></a>
		<ul>
			<li><a href="<?php bloginfo('url');?>/market/">市場開拓及び需要拡大等支援事業</a></li>
			<li><a href="<?php bloginfo('url');?>/quality/">品質向上及び供給安定化等支援事業</a></li>
			<li><a href="<?php bloginfo('url');?>/grouth/">真珠養殖等連携強化</a></li>
			<li><a href="<?php bloginfo('url');?>/grouth/">成長展開事業（国庫補助事業)</a></li>
			<li><a href="<?php bloginfo('url');?>/grouth/">教育事業（真珠検定)</a></li>
		</ul>
			</li>
			<li><a href="<?php bloginfo('url');?>/privacypolicy/">プライバシー・ポリシー<span class="icon-nav">▼</span></a>
			<ul>
			<li><a href="<?php bloginfo('url');?>/privacypolicy/">個人情報の管理</a></li>
			<li><a href="<?php bloginfo('url');?>/privacypolicy/">個人情報の利用目的</a></li>
			<li><a href="<?php bloginfo('url');?>/privacypolicy/">個人情報の第三者への開示・提供の禁止</a></li>
			<li><a href="<?php bloginfo('url');?>/privacypolicy/">個人情報の安全対策</a></li>
			<li><a href="<?php bloginfo('url');?>/privacypolicy/">ご本人の照会</a></li>
			<li><a href="<?php bloginfo('url');?>/privacypolicy/">法令、規範の遵守と見直し</a></li>
			<li><a href="<?php bloginfo('url');?>/inquiry/">お問合せ</a></li>
		</ul>
			</li>
			<li><a href="<?php bloginfo('url');?>/inquiry/">お問合せ</a></li>
		</ul>
	</div>
</nav>
<!-- / グローバルナビsp -->
</div>
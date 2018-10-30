<?php get_header(); ?>

<!-- メイン画像 -->
<div class="mainbanner-top">
	<img src="<?php bloginfo('template_directory');?>/image/1019top.jpg" alt="一般法人　日本真珠振興会" />
</div>
<div id="slogan">
<h2-midashi>真珠の研究、指導及び育成を図り、<br/>
			もってその発展、振興促進をする事を目的としています</h2>
</div>
<!-- / メイン画像 -->
</div>
</div>
<!-- / ヘッダー -->

<!-- メインコンテンツ -->
<div id="wrapper-top">
<!-- 更新情報 -->	
<h2 id="simple">更新情報</h2>
<div id="content-top">
<dl class="content-top">
<?php $posts = get_posts('numberposts=3'); foreach($posts as $post): ?>
<dt><?php the_time('Y.n.j'); ?></dt>
<dd><a href="<?php the_permalink(); ?>" target="_blank"><?php
if(mb_strlen($post->post_title)>50):
$title= mb_substr($post->post_title,0,50) ; echo $title. ･･･ ;
else:
echo $post->post_title;
endif;
?></a></dd>
<?php endforeach; ?>
<?php wp_reset_postdata(); wp_reset_query(); ?>
<p class="link"><a href="<?php bloginfo('url');?>/news/">更新情報一覧 <span class="linkicon">>></span></a></p>
	</div>
<!-- / 更新情報 -->
<div id="content-top2">
<div class="imagearea">
    <figure><a href="#"><img src="<?php bloginfo('template_directory');?>/image/banner_01.jpg" alt="市場開拓及び需要拡大等支援事業"></a>
    <figcaption><a href="#">市場開拓及び需要拡大等支援事業</a></figcaption></figure>
    <figure id="ph-right"><a href="#"><img src="<?php bloginfo('template_directory');?>/image/banner_02.jpg" alt="品質向上及び供給安定化等支援事業">
    <figcaption><a href="#">品質向上及び供給安定化等支援事業</figcaption></figure>
</div>
<div class="imagearea">
    <figure><a href="#"><img src="<?php bloginfo('template_directory');?>/image/banner_03.jpg" alt="真珠養殖連携強化・成長展開事業(国庫補助事業)"></a>
    <figcaption><a href="#">真珠養殖連携強化・成長展開事業(国庫補助事業)</figcaption></figure>
    <figure id="ph-right"><a href="#"><img src="<?php bloginfo('template_directory');?>/image/banner_kentei.jpg" alt="教育事業(真珠検定)">
    <figcaption><a href="#">教育事業(真珠検定)</a></figcaption></figure>
</div>
<div class="imagearea">
    <figure id="ph-4left"><a href="#"><img src="<?php bloginfo('template_directory');?>/image/banner_aboutus.jpg" alt="日本真珠振興会とは"></a>
    <figcaption><a href="#">日本真珠振興会とは</a></figcaption></figure>
    <figure id="ph-4right"><a href="#"><img src="<?php bloginfo('template_directory');?>/image/banner_06.jpg" alt="組織概要"></a>
    <figcaption><a href="#">組織概要</a></figcaption></figure>
    <figure id="ph-4center"><a href="#"><img src="<?php bloginfo('template_directory');?>/image/banner_07.jpg" alt="加盟団体"></a>
    <figcaption><a href="#">加盟団体</a></figcaption></figure>
    <figure id="ph-4right"><a href="#"><img src="<?php bloginfo('template_directory');?>/image/banner_08.jpg" alt="真珠の知識"></a>
    <figcaption><a href="#">真珠の知識</a></figcaption></figure>
</div>
</div>
<div id="content-search">
<div class="searchbanner-top">
<h2 id="search-title">真珠の書籍庫・Archive</h2>
<p>書籍・論文・文献・資料</p>
<div class="search-form">
<p>文献検索</p>
<form id="cse-search-box" action="http://google.com/cse">
  <input type="hidden" name="cx" value="003012285973906361567:bucv3d0-xdw" />
  <input type="hidden" name="ie" value="UTF-8" />
  <input type="text" name="q" size="31" class="area75">
  <input type="submit" name="sa" value="検索" />
</form>
<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&lang=ja"></script>
</div>
</div>
</div>

<div id="content-top3">
<div class="imagearea">
    <figure id="ph-3left"><a href="#"><img src="<?php bloginfo('template_directory');?>/image/1003pearl.png" alt="花珠に関する注意喚起">
    <figcaption id="title"><span class="wr">花珠に関する</span><span class="wr">注意喚起</span></a></figcaption></figure>
    <figure id="ph-3center"><a href="#"><img src="<?php bloginfo('template_directory');?>/image/1003pearl.png" alt="真珠スタンダード">
    <figcaption id="title"><span class="wr">真珠スタンダード</span></a></figcaption></figure>
    <figure id="ph-3right"><a href="#"><img src="<?php bloginfo('template_directory');?>/image/1003pearl.png" alt="業務財務に関する資料">
    <figcaption id="title"><span class="wr">業務財務に関する</span><span class="wr">資料</span></a></figcaption></figure>
</div>
</div>
<!-- /メインコンテンツ -->
	
<?php get_footer(); ?>
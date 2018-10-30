<?php
/*
Template Name: 下層用テンプレート
*/
?>
<?php get_header(); ?>
<!-- メイン画像 -->
<div class="mainbanner">
	<img src="<?php bloginfo('template_directory');?>/image/1108top2.jpg" alt="一般法人　日本真珠振興会" />
</div>
<!-- / メイン画像 -->
</div>
</div>
<!-- / ヘッダー -->

<!-- メインコンテンツ -->
<div id="wrapper">
<?php if (have_posts()) { ?>

	<?php the_post();?>	
	<?php the_content(); ?>
	<?php } else { ?>
	</dl>
	<h2 id="simple">記事はありません</h2>
	<?php } ?>

</div>
<?php get_footer(); ?>
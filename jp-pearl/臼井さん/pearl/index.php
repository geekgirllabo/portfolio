<?php
/**
 * Template Name: 新着一覧ページ */
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
<div id="wrapper-top">
<h2 id="simple">更新情報一覧</h2> 
<div id="content-top">
<?php
    $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
        $args = array(
        'post-type' => 'post',
        'posts_per_page' => 3,
        'paged' => $paged
    );
    $my_query = new WP_Query($args);
  
    if( $my_query -> have_posts() ) :
        while($my_query -> have_posts()) : $my_query -> the_post();
?>
<dl class="content-top">
<h2 id="news"><?php the_time('Y.n.j'); ?>　<?php the_title(); ?></h2>
	<?php the_post();?>	
	<?php the_content(); ?>
	</dl>
<hr class="content-top">
<?php endwhile; endif; ?>

<?php
if ($my_query->max_num_pages > 1) {
 echo paginate_links(array(
 'base' => get_pagenum_link(1) . '%_%',
 'format' => '/page/%#%/',
 'current' => max(1, $paged),
 'total' => $my_query->max_num_pages
 ));
}
?><?php wp_reset_postdata(); ?>

</div>
</div>
<?php get_footer(); ?>
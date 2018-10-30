<?php

//固定ページ画像
function replaceImagePath($arg) {
 $content = str_replace('"image/', '"' . get_bloginfo('template_directory') . '/image/', $arg);
 return $content;
}  
add_action('the_content', 'replaceImagePath');


?>
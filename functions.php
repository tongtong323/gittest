
<?php 

register_nav_menus(array(
    'PrimaryMenu'=>'导航',
    'friendlinks'=>'友情链接',
    'footer_nav'=>'页脚导航')
    );
    add_theme_support('nav_menus');





class new_walker extends Walker_Nav_Menu
{
    function start_lvl( &$output, $depth = 0, $args = array() ) {
         if( $depth == 0 ){
    $output .= '<ul class="sub-menu">';
    }else{
    $output .= '<ul class="third-menu">';
    }
    }
}


   
//面包屑导航
    function wheatv_breadcrumbs() {
    $delimiter = ' >> ';    //分隔符
    $name = '首页'; //

    if ( !is_home() ||!is_front_page() || is_paged() ) {

        global $post;
        $home = get_bloginfo('url');
        echo '<a href="' . $home . '"  class="gray">' . $name . '</a> ' . $delimiter . ' ';

        if ( is_category() ) {
            global $wp_query;
            $cat_obj = $wp_query->get_queried_object();
            $thisCat = $cat_obj->term_id;
            $thisCat = get_category($thisCat);
            $parentCat = get_category($thisCat->parent);
            if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
            echo single_cat_title();

        } elseif ( is_day() ) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '"  class="gray">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '"  class="gray">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
            echo get_the_time('d');

        } elseif ( is_month() ) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '"  class="gray">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo get_the_time('F');

        } elseif ( is_year() ) {
            echo get_the_time('Y');

        } elseif ( is_single() ) {
            $cat = get_the_category(); $cat = $cat[0];
            // echo $cat->cat_name;
            echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
            echo '正文';

        } elseif ( is_page()||!$post->post_parent ) {
            the_title();

        } elseif ( is_page()||$post->post_parent ) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a href="http://www.wheatv.com/site/wp-admin/ . get_permalink($page->ID) . "  class="gray">' . get_the_title($page->ID) . '</a>';
                $parent_id  = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
            the_title();

        } elseif ( is_search() ) {
            echo get_search_query();

        } elseif ( is_tag() ) {
            echo single_tag_title();

        } elseif ( is_author() ) {
            global $author;
            $userdata = get_userdata($author);
            echo '由'.$userdata->display_name.'发表';

        } elseif ( is_404() ) {
            echo '404 错误';
        }

        if ( get_query_var('paged') ) {
            if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
            echo '第' . ' ' . get_query_var('paged').' 页';
            if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
        }
    }else{
        echo $name;
    }
}

// 面包屑导航

function par_pagenavi($range = 9){
  
  
  global $paged, $wp_query;
  if ( !$max_page ) {$max_page = $wp_query->max_num_pages;}
  if($max_page > 1){if(!$paged){$paged = 1;}
  if($paged != 0){echo '';}
  previous_posts_link(' 上一页 ');
    if($max_page > $range){
    if($paged < $range){for($i = 1; $i <= ($range + 1); $i++){echo "<a href='" . get_pagenum_link($i) ."'";
    if($i==$paged)echo " class='current'";echo ">$i</a>";}}
    elseif($paged >= ($max_page - ceil(($range/2)))){
    for($i = $max_page - $range; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
    if($i==$paged)echo " class='current'";echo ">$i</a>";}}
  elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
    for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){echo "<a href='" . get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";}}}
    else{for($i = 1; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
    if($i==$paged)echo " class='current'";echo ">$i</a>";}}
  next_posts_link(' 下一页 ');
    if($paged != 0){echo '';}}
    
}



 function catch_that_image() { 
global $post, $posts; 
$first_img = ''; 
ob_start(); 
ob_end_clean(); 
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches); 
$first_img = $matches[1][0]; 
if(empty($first_img)){ //设置一个默认图片 
$site_url = bloginfo('template_url'); 
$first_img = "$site_url/images/tp.jpg"; 
} 
return $first_img; 
}

?>
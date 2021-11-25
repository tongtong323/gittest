
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<!-- saved from url=(0014)about:internet -->
	<!-- saved from url=(0013)about:internet -->
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<meta name=renderer  content=webkit>
	<title>
	<?php if ( is_home() ) {   
	    bloginfo('name');   
	    } elseif ( is_category() ) {   
	    single_cat_title(); echo " - "; bloginfo('name');   
	    } elseif (is_single() || is_page() ) {   
	    single_post_title(); echo "国际交流学院";   
	    } elseif (is_search() ) {   
	    echo "搜索结果"; echo " - "; bloginfo('name');   
	    } elseif (is_404() ) {   
	    echo '页面未找到!';   
	    } else {   
	    wp_title('',true);   
	    } 
   ?>
	</title>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css" media="all" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/rebrand.css" media="all" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/single.css" media="all" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/category.css" media="all" />
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.7.2.min.js"></script>
	<SCRIPT src="<?php bloginfo('template_directory'); ?>/js/jquery.SuperSlide.js"></SCRIPT>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.slidorion.min.js"></script>
	

	
	
	<script>
	$(document).ready(function(){
		
		$('#slidorion').slidorion();
		
		$('.effects').hide();
		$('.more-effects').click(function(e){
			$('.effects').slideToggle();
			e.preventDefault();
		});
	});
	function trackDownload(){_gaq.push(['_trackPageview', '/downloads/slidorion']);}
	</script>
	</head>
		<body style="min-width:1200px;">
<div class="top">
      <div class="con">
    <div class="lf"><a href="https://web.fosu.edu.cn/guojiao/" title="">设为首页</a> | <a href="https://web.fosu.edu.cn/guojiao/" title="">加入收藏</a> | <a href="<?php echo esc_url(get_category_link( get_cat_ID( '联系我们' ) ));?>" title="">联系我们</a></div>
    <div class="sou rt">
          <div class="txt">
        <!--<input  type="search" class="txt1" value="请输入搜索关键字"name="s" onclick="this.value='<?php the_search_query(); ?>'"  >

        <img src="<?php bloginfo('template_directory'); ?>/images/ss.png" style="position:absolute; ">-->
        <?php include (TEMPLATEPATH . '/searchform.php'); ?>
    </div>
        </div>
    <div class="clear"></div>
  </div>
    </div>
<div class="clear"></div>
<div class="con">
      <div class="lf"><a href="https://web.fosu.edu.cn/guojiao/"><img  src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt=""></a></div>
     <!-- <div class="rt zi"></div>-->
      <div class="clear"></div>
    </div>
<!--导航-->
<div class="menu">
      <ul>

  <?php 
  //if(function_exists('wp_nav_menu')) {
 // wp_nav_menu(array('container' => "div", 'items_wrap' => '%3$s', 'theme_location' => 'PrimaryMenu')); 
  //}
  ?>


<?php 
    wp_nav_menu( array( 
    'theme_location'=>'PrimaryMenu', 
    'walker' => new new_walker(),
    'fallback_cb' => '',
    'depth' => 0
    ));
?> 
  </ul>
      <div class="clear"></div>
    </div>
	<?php wp_head();?>

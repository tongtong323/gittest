<?php get_header(); ?>
  

<!--最新公告-->
<div class="zxgg">最新公告：
  <?php query_posts(array('category_name'=>'tzgg','orderby'=>@date,'order'=>@DSC,'posts_per_page'=>1)); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
  <?php endwhile; ?>
  <?php else: ?>
  <h3>暂未发布文章</h3>
  <?php endif; ?>
  <?php wp_reset_query() ?>
</div>

<!--幻灯片-->
<div id="slidorion">
      <div id="slider">

   <?php query_posts(array('category_name'=>'fwlj1','orderby'=>@date,'order'=>@DSC,'posts_per_page'=>1)); ?>
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="slider-image" rel="section1"> <a href="<?php the_permalink();?>"><img width="920px" height="520px" src="<?php echo catch_that_image(); ?>" alt="" width="920" height="520"/></a> </div>
  <?php endwhile; ?>
  <?php else: ?>
  <h3>暂未发布文章</h3>
  <?php endif; ?>
  <?php wp_reset_query() ?>

  <?php query_posts(array('category_name'=>'fwlj2','orderby'=>@date,'order'=>@DSC,'posts_per_page'=>1)); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="slider-image" rel="section2"> <a href="<?php the_permalink();?>"><img width="920px" height="520px" src="<?php echo catch_that_image(); ?>" alt="" width="920" height="520"/></a> </div>
  <?php endwhile; ?>
  <?php else: ?>
  <h3>暂未发布文章</h3>
  <?php endif; ?>
  <?php wp_reset_query() ?>

  <?php query_posts(array('category_name'=>'fwlj3','orderby'=>@date,'order'=>@DSC,'posts_per_page'=>1)); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="slider-image" rel="section3"> <a href="<?php the_permalink();?>"><img width="920px" height="520px" src="<?php echo catch_that_image(); ?>" alt="" width="920" height="520"/></a> </div>
  <?php endwhile; ?>
  <?php else: ?>
  <h3>暂未发布文章</h3>
  <?php endif; ?>
   <?php wp_reset_query() ?>
  </div>


  <!--幻灯片侧边信息栏-->
   <div id="accordion">

   	<?php query_posts(array('category_name'=>'fwlj1','orderby'=>@date,'order'=>@DSC,'posts_per_page'=>1)); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="header"><a class="slider-link" rel="section1"><?php echo wp_trim_words( get_the_title(), 13 );?></a></div>
    <div class="content">
    <div class="tp"><img src="<?php bloginfo('template_directory'); ?>/images/carousel-lip3.png" width="24px" height="61px" /></div>
    
    <div class="wzd"> </div >
          <p><?php echo wp_trim_words( $post->post_content, 280 );?></p>
          <a href="<?php the_permalink();?>" class="btn_link"><span>更多内容</a></span>
    <?php endwhile; ?>
    <?php else: ?>
    <h3>暂未发布文章</h3>
    <?php endif; ?>
    <?php wp_reset_query() ?>
     </div>

      <?php query_posts(array('category_name'=>'fwlj2','orderby'=>@date,'order'=>@DSC,'posts_per_page'=>1)); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	
    <div class="header"><a class="slider-link" rel="section2"><?php echo wp_trim_words( get_the_title(), 13 );?></a></div>
    <div class="content">
    <div class="tp"><img src="<?php bloginfo('template_directory'); ?>/images/carousel-lip3.png" width="24px" height="61px" /></div>

    <div class="wzd"> </div >
          <p><?php echo wp_trim_words( $post->post_content, 280 );?></p>
          <a href="<?php the_permalink();?>" class="btn_link"><span>更多内容</a></span>
    <?php endwhile; ?>
    <?php else: ?>
    <h3>暂未发布文章</h3>
    <?php endif; ?>
    <?php wp_reset_query() ?>
     </div>

     <?php query_posts(array('category_name'=>'fwlj3','orderby'=>@date,'order'=>@DSC,'posts_per_page'=>1)); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="header"><a class="slider-link" rel="section3"><?php echo wp_trim_words( get_the_title(), 13 );?></a></div>
    <div class="content">
    <div class="tp"><img src="<?php bloginfo('template_directory'); ?>/images/carousel-lip3.png" width="24px" height="61px" /></div>

    <div class="wzd"></div >
          <p><?php echo wp_trim_words( $post->post_content, 280 );?></p>
          <a href="<?php the_permalink();?>" class="btn_link"><span>更多内容</a></span>
    <?php endwhile; ?>
    <?php else: ?>
    <h3>暂未发布文章</h3>
    <?php endif; ?>
    <?php wp_reset_query() ?>
  </div>
  </div>
</div>

<div class="sy_zt">

      <div class="left">
    <div class="xwdt lf">
          <h1><span><a href="<?php echo esc_url(get_category_link( get_cat_ID( '新闻动态' ) ));?>">查看更多+</a></span>新闻动态</h1>

          <?php query_posts(array('category_name'=>'xwdt','orderby'=>@date,'order'=>@DSC,'posts_per_page'=>5)); ?>
          <ul> 
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <li>
            <div class="rl"><?php the_time('d'); ?><br>
            <font><?php the_time('Y-m'); ?></font></div>
            <div class="wz">
            <h2><a href="<?php the_permalink();?>"><?php the_title(); ?> </a></h2>
            <p><a href="<?php the_permalink();?>"><?php echo wp_trim_words( $post->post_content, 60 );?></a></p>
          </div>
             <div class="clear"></div>
          </li>

      <?php endwhile; ?>
      <?php else: ?>
      <h3>暂未发布文章</h3>
      <?php endif; ?>
      </ul>
      <?php wp_reset_query() ?>

    </div>

    <div class="tpxw rt">
          <h1><span><a href="<?php echo esc_url(get_category_link( get_cat_ID( '办事指南' ) ));?>">查看更多+</a></span>办事指南</h1>
           <?php query_posts(array('category_name'=>'bszn','orderby'=>@date,'order'=>@DSC,'posts_per_page'=>4)); ?>
          <ul>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li>
              <div class="tp"><img  width="168px" height="168px" src="<?php echo catch_that_image(); ?>"/></div>
              <div class="wz">
            <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
            <p><a href="<?php the_permalink();?>"><?php echo wp_trim_words( $post->post_content, 60 );?></a></p>
          </div>
              <div class="clear"></div>
            </li>
      <?php endwhile; ?>
      <?php else: ?>
      <h3>暂未发布文章</h3>
      <?php endif; ?>
      </ul>
       <?php wp_reset_query() ?>
      </div>

    <div class="clear"></div>
    <div class="hzhb">
          <h1><span><a href="<?php echo esc_url(get_category_link( get_cat_ID( '来华留学' ) ));?>">更多+</a></span>留学生天地</h1>
          <div class="gd">
        <ul class="aaaa">

           <?php query_posts(array('category_name'=>'lhlx','orderby'=>@date,'order'=>@DSC,'posts_per_page'=>7)); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  
              <li>
                <a href="<?php the_permalink();?>"><img width="168px" height="168px" src="<?php echo catch_that_image(); ?>"/><span><?php the_title(); ?></span>
                </a>
              </li>
             

            <?php endwhile; ?>
            <?php else: ?>
            <h3>暂未发布文章</h3>
            <?php endif; ?>
            <?php wp_reset_query() ?>
       </ul>
      </div>

          <div style="clear:both"></div>
          <script type="text/javascript">
  jQuery(".gd").slide({mainCell:".aaaa",autoPlay:true,effect:"leftMarquee",vis:5,interTime:20,trigger:"click"});
</script> 
        </div>
  </div>
      <div class="right">
    <div class="tzgg" style="padding-bottom:30px;">
          <h2><span><a href="<?php echo esc_url(get_category_link( get_cat_ID( '通知公告' ) ));?>">更多+</a></span>通知公告</h2>
           <?php query_posts(array('category_name'=>'tzgg','orderby'=>@date,'order'=>@DSC,'posts_per_page'=>10)); ?>
          <ul>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>

      <?php endwhile; ?>
      <?php else: ?>
      <h3>暂未发布文章</h3>
      <?php endif; ?>
      </ul>
      <?php wp_reset_query() ?>
        </div>

    <div class="tzgg" style="border-top:1px solid #cccccc; padding-bottom:50px;">
          <h2><span><a href="<?php echo esc_url(get_category_link( get_cat_ID( '项目列表' ) ));?>">更多+</a></span>项目列表</h2>

          <?php query_posts(array('category_name'=>'xmlb','orderby'=>@date,'order'=>@DSC,'posts_per_page'=>10)); ?>
          <ul>
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>

      <?php endwhile; ?>
      <?php else: ?>
      <h3>暂未发布文章</h3>
      <?php endif; ?>
      </ul>
      <?php wp_reset_query() ?>
        </div>

  </div>
  </div>
      <?php get_footer(); ?>
</body>
</html>
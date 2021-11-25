<?php get_header(); ?>
		<!-- 列表 -->
		<div class="information_list_content_trap clearfix">
			<div class="information_list_box">
				<div class="information_list_content">
					<?php get_sidebar(); ?>
					<div class="information_list">
						<div class="breadcrumb"><?php wheatv_breadcrumbs(); ?></div>
						<div class="breadcrumb_nav">
						<?php single_cat_title(); ?>
						</div>
					<!-- 循环列表 -->
					<?php $posts = query_posts($query_string . '&orderby=date&showposts=5'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="list">
						<!-- 日期 -->
							<div class="date1">
								<h3><?php the_time('d') ?></h3>
								<p><?php the_time('Y-m') ?></p>
							</div>
							<div class="list_content">
								<h3><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h3>
								<p><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 240,"..."); ?></p>
							</div>
						</div>
					<?php endwhile ?>
					<?php else: ?>
					<li>暂未发布文章</li>
					<?php endif ?>
						<!-- 分页器	-->
						<div class="page-nav">
							<?php par_pagenavi(9); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php get_footer(); ?>
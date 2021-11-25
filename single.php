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

					<div class="aricle_trap">
						<h3><?php the_title_attribute(); ?></h3>
						<p class="date"><?php the_time('Y/m/d') ?></p>
							<?php if (have_posts()) : ?>
	      					<?php while (have_posts()) : the_post(); ?>
						<div class="aricle_content">
							<p><?php the_content() ?></p>
							<?php endwhile; ?>
							<?php else : ?>
							<?php endif; ?>
						</div>
						<div class="single_page_nav clearfix">
							<ul>
							<?php
							    $categories = get_the_category();
							    $categoryIDS = array();
							    foreach ($categories as $category) {
							        array_push($categoryIDS, $category->term_id);
							    }
							    $categoryIDS = implode(",", $categoryIDS);
							?>

								<li><span>上一篇：</span><?php if (get_previous_post($categoryIDS)) { previous_post_link('%link','%title',true);} else { echo "没有了，已经是最后文章";} ?></li>
								<li><span>下一篇：</span><?php if (get_next_post($categoryIDS)) { next_post_link('%link','%title',true);} else { echo "没有了，已经是最新文章";} ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php get_footer(); ?>
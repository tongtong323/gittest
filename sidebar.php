<div class="information_slider">
	
	<?php
		$current = "";
		if(is_single()){
		$parent = get_the_category();
		$parent = $parent[0];
		$current = "&current_category=".$parent->term_id;
		}else if(is_category()){
		global $cat;
		$parent = get_category($cat);
		}
		if($parent->category_parent != 0){
		$cat_id = $parent->category_parent;
		$parent = get_category($cat_id);
		if($parent->category_parent != 0){
		$cat_id = $parent->category_parent;
		}else{
		$cat_id = $parent->term_id;
		}
		}else{
		$cat_id = $parent->term_id;
		}
	?>
	<div class="slider_title" id="slider_title">
		<p><?php echo $parent->cat_name; ?></p>
	</div>
	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
		 $nyLeftContent = $(".information_slider");
          $nyLeftContent.append($("ul.menu >li.current-menu-item>ul").clone(true));
          $nyLeftContent.append($("ul.menu >li.current-menu-ancestor>ul").clone(true));
          $nyLeftContent.append($("ul.menu> li.current-post-ancestor>ul").clone(true));
          var temp = $("div.nav li.current-post-parent").parent('ul');
          $nyLeftContent.append($(temp).clone(true));

          $nyLeftContent.show();

          $nyLeftContent.find('ul li').mouseenter(function() {
            $(this).addClass('active');
          });
          $nyLeftContent.find('ul li').mouseleave(function() {
            $(this).removeClass('active');
          });
          $('#information_slider>ul:gt(0)').hide();
        });		</script>	

	         
</div>
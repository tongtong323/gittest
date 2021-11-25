<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<input type="text" value="输入关键字" name="s" id="s"/>

 <input type="image" name="" src="<?php bloginfo('template_directory'); ?>/images/ss.png"  placeholder="" id="" class="search-btn">

</form>
<script type="text/javascript">
$(document).ready(function(){
// 当鼠标聚焦在搜索框
$('#s').focus(
function() {
if($(this).val() == '输入关键字') {
$(this).val('').css({color:"#454545"});
}
}
// 当鼠标在搜索框失去焦点
).blur(
function(){
if($(this).val() == '') {
$(this).val('输入关键字').css({color:"#333333"});
}
}
);
});
</script>
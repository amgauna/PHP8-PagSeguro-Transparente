<meta charset="utf-8">

<!-- --------- modal box mbw_mode1--------- -->
<div class="modal_box_wrapp mbw_mode1">
<div class="mb_back"></div><!--/mb_back-->
<div class="modal_box">

<div class="mb_header">
<ul>
<div class="mbh_left_side">
<li>
<span class="icone"></span>
<span class="text"></span>
</li>
</div><!-- /mbh_left_side-->

<div class="mbh_right_side">

<div class="tb_options" style="float:left;margin:3px 15px 0 0;"></div><!-- /tb_options-->

<li class="mbh_btn_close"><span class="text icon-cross2"></span></li>

</div><!-- /mbh_right_side-->
</ul>
</div><!-- /mb_header-->

<div class="mb_body"></div><!-- /mb_body-->

</div><!-- /modal_box-->
</div><!-- /modal_box_wrapp-->
<!-- --------- /modal box --------- -->

<!-- ... -->

<!-- --------- modal box mbw_mode2--------- -->
<div class="modal_box_wrapp mbw_mode2">
<div class="mb_back"></div><!--/mb_back-->
<div class="modal_box">

<div class="mb_header">
<ul>

<div class="mbh_right_side">

<div class="tb_options" style="float:left;margin:3px 15px 0 0;"></div><!-- /tb_options-->

<li class="mbh_btn_close"><span class="text icon-cross2"></span></li>

</div><!-- /mbh_right_side-->
</ul>
</div><!-- /mb_header-->

<div class="mb_body"></div><!-- /mb_body-->

</div><!-- /modal_box-->
</div><!-- /modal_box_wrapp-->
<!-- --------- /modal box --------- -->

<!-- ... -->

<!-- --------- modal box mbw_mode3--------- -->
<div class="modal_box_wrapp mbw_mode3">
<div class="mb_back"></div><!--/mb_back-->
<div class="modal_box">

<div class="mb_header">
<ul>

<div class="mbh_right_side">

<div class="tb_options" style="float:left;margin:3px 15px 0 0;"></div><!-- /tb_options-->

<li class="mbh_btn_close"><span class="text icon-cross2"></span></li>

</div><!-- /mbh_right_side-->
</ul>
</div><!-- /mb_header-->

<div class="mb_body"></div><!-- /mb_body-->

</div><!-- /modal_box-->
</div><!-- /modal_box_wrapp-->
<!-- --------- /modal box --------- -->

<script>
$(document).ready(function(){
/* -- modal box -- */
	$(".mbw_mode1 .mbh_btn_close,.mbw_mode1 .mb_back").click(function(){
		
		$(".mbw_mode1").hide();		
		
		$(".mbw_mode1 .mb_body").html('...');
	});//end click	
	$(".mbw_mode2 .mbh_btn_close,.mbw_mode2 .mb_back").click(function(){
		$(".modal_box_wrapp").hide();
		$(".mbw_mode2 .modal_box").css({marginTop:'-100%'});
	});//end click
	$(".mbw_mode3 .mbh_btn_close,.mbw_mode3 .mb_back").click(function(){
		$(".mbw_mode3").hide();
		$(".mbw_mode3 .modal_box").css({marginTop:'-100%'});
	});//end click
});//end doc
</script>

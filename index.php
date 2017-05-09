<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="engine/css/global.css" />
<link rel="stylesheet" type="text/css" href="engine/css/colorbox.css" />
<link rel="stylesheet" type="text/css" href="engine/css/styles.css" />
<link rel="stylesheet" type="text/css" href="engine/css/medias.css" />
<link rel="stylesheet" type="text/css" href="engine/css/icons.css" />

<script src="engine/js/jquery-1.9.0.js" ></script>
<script src="engine/js/jquery-ui.min.js" ></script>

<?php require ("engine/modal/modal.php"); ?>

<!-- .......................... -->
<h1>Olá...</h1>
<!-- .......................... -->

<br>

<div class="box_wrapp">

<!-- .......................... -->

<li id="1">
Produto1
<button>Solicitar</button>
</li>

<!-- .......................... -->

<li id="2">
Produto2
<button>Solicitar</button>
</li>

<!-- .......................... -->

</div><!-- /box_wrapp-->

<script>
$(document).ready(function(){	
	
$('.box_wrapp li').click(function(){
	
		var id_escolhido = $(this).attr('id');	
	
		var dados = $( this ).serialize();

		$.ajax({
		type: "GET",				
		url: "views/compra/index.php?id_escolhido="+id_escolhido,
		data: dados,
		success: function( data ){	

		/* ............................... */
			
		$(".mbw_mode1").fadeIn(600);
		$(".mbw_mode1 .mbh_left_side li").html('<span class="icone icon-shopping_cart"></span><span class="text">Produto<b>'+id_escolhido+'</b></span>');						
		$(".mbw_mode1 .mb_body").html(data);		
		
		/* ............................... */	
		
			//$('.pay_box').html(data);
		}//end success
		});//end method

		return false;
	});//end submit
});//end doc
</script>
<meta charset="utf-8">

<?php
$id_escolhido = $_GET['id_escolhido'];
?>

<!-- .......................... -->

<div class="outer_box">

<div class="otbx_header">
<li>
<span>Produto escolhido: <b><?php echo $id_escolhido; ?></b></span>
</li>
</div><!--/otbx-->

<!-- .......................... -->

<form id="form_continuar_compra">

<!-- ... -->

<li>
<label>Tamanho</label>
<select name="tamanho">
<option value="">Selecione</option>
<option value="P">P</option>
<option value="M">M</option>
<option value="G">G</option>
</select>
</li>

<!-- ... -->

<li>
<label>Quantidade</label>
<input type="number" name="quantidade" />
</li>

<!-- ... -->
<input type="hidden" name="id_escolhido" value="<?php echo $id_escolhido; ?>" />
<!-- ... -->

<li>
<button type="submit" class="addToCart"><span>Continuar</span></button>
</li>

</form>

<!-- .......................... -->

</div><!-- /outer_box-->

<script>
$(document).ready(function(){	
	
$('#form_continuar_compra').submit(function(){
		var dados = $( this ).serialize();

		$.ajax({
		type: "GET",				
		url: "engine/pagseguro/index.php",
		data: dados,
		success: function( data ){	

		/* ............................... */
			
		$(".mbw_mode1").fadeIn(600);
		$(".mbw_mode1 .mbh_left_side li").html('<span class="icone icon-shopping_cart"></span><span class="text">Produto</span>');						
		$(".mbw_mode1 .mb_body").html(data);		
		
		/* ............................... */	
		
			//$('.pay_box').html(data);
		}//end success
		});//end method

		return false;
	});//end submit
});//end doc
</script>
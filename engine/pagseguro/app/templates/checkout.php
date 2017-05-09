<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<!--<link rel="stylesheet" href="css/styles.css" />-->
		<!--<link rel="stylesheet" href="css/colorbox.css" />-->
	</head>

	<body>
		
		<?php require_once "orderData.inc.php"; ?>
		<?php require_once "buyerData.inc.php"; ?>
		<?php require_once "paymentMethods.inc.php"; ?>
		
		<script type="text/javascript" src="<?php echo $this->pagSeguroData->getJavascriptURL(); ?>"></script>		
		
		<!--<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
		<script type="text/javascript" src="engine/pagseguro/js/jquery.colorbox-min.js"></script>
		<script type="text/javascript" src="engine/pagseguro/js/helpers.js"></script>
		
		
		<?php
		require("../../model/sessions/buy-session.php");
		require("js/checkout_js.php");
		?>
		
		
		
	</body>

</html>
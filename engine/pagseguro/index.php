<!-- .......................... -->

<?php

error_reporting(0);

session_start();

$id_escolhido = $_GET['id_escolhido'];
$tamanho = $_GET['tamanho'];
$quantidade = $_GET['quantidade'];

$_SESSION['id_escolhido'] = $id_escolhido;
$_SESSION['tamanho'] = $tamanho;
$_SESSION['quantidade'] = $quantidade;

?>

<!-- .......................... -->

<?php
	header("Location: checkout.php");
?>
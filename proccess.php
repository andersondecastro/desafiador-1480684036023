<?php 

	// sem segurança, só teste! ATENÇÃO/CUIDADO!

	$nome = $_POST['nome'];
	$senha = $_POST['senha'];

	// gerando usuario
	$usuario = trim( strtolower( $nome ) ) . '-' . uniqid();


	$db = new PDO('mysql:host=us-cdbr-iron-east-04.cleardb.net;port=3306;dbname=ad_e5455148597d6e5;charset=UTF8;','b8ce7835c99f85','110552ba');

	$sql = "insert into usuario (nome, usuario, senha) values ('$nome', '$usuario', '$senha')";

	$st = $db->prepare($sql);
	$st->execute();

	echo $db->lastInsertId();
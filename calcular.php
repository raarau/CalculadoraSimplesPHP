<?php

	require_once 'classes/Calculadora.php';

	$numero1 = $_POST['numero1'];
	$numero2 = $_POST['numero2'];
	$operacao = $_POST['operacao'];

	$calculadora = new Calculadora();

	//Setar Valores
	$calculadora -> setNumero1($numero1);
	$calculadora -> setNumero2($numero2);

	//operacoes
	

	switch ($operacao) {
		case 'somar':
			$calculadora->somar();
			break;

		case 'subtrair':
			$calculadora->subtrair();
			break;

		case 'multiplicar':
			$calculadora->multiplicar();
			break;

		case 'dividir':
			$calculadora->dividir();
			break;
		
	}
	echo "Operacao selecionada: ".$operacao."<br />";

	if($operacao == 'somar'){
		echo "O total da soma dos valores é: ".$calculadora->getTotal();

	}elseif ($operacao == 'subtrair') {
		echo "O total da subtracao dos valores é: ".$calculadora->getTotal();

	}elseif ($operacao == 'multiplicar') {
		echo "O total da multiplicacao dos valores é: ".$calculadora->getTotal();
		
	}elseif ($operacao == 'dividir') {
		echo "O total da divisao dos valores é: ".$calculadora->getTotal();
	}



?>
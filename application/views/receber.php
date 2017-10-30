<?php
$nome = $_POST['inputName'];

$lattes = $_POST['inputLattes'];

$objetivo = $_POST['objetivo'];

$cursos = $_POST['curso'];
$dataInicio = $_POST['dataInicio'];
$dataFim = $_POST['dataFim'];
$tipo = $_POST['tipo'];

$descricao = $_POST['descricao'];
$desde = $_POST['desde'];
$local = $_POST['local'];

$intesse = $_POST['inputInteresse'];


$email = $_POST['inputEmail'];

$phone = $_POST['inputPhone'];

$cargo = $_POST['inputCargo'];

$tipoServidor = $_POST['tipoServidor'];





if (isset($_POST['curso'])) {
	foreach ($cursos as $c) {
		echo $c;
	}
}
if (isset($_POST['dataInicio'])) {
	foreach ($dataInicio as $d) {
		echo $d;
	}
}
if (isset($_POST['dataFim'])) {
	foreach ($dataFim as $f) {
		echo $f;
	}
}
if (isset($_POST['tipo'])) {
	foreach ($tipo as $t) {
		echo $t;
	}
}

if (isset($_POST['local'])) {
	foreach ($local as $l) {
		echo $l;
	}
}
if (isset($_POST['desde'])) {
	foreach ($desde as $dd) {
		echo $dd;
	}
}
if (isset($_POST['descricao'])) {
	foreach ($descricao as $dc) {
		echo $dc;
	}
}
if (isset($_POST['objetivo'])) {
	foreach ($objetivo as $o) {
		echo $o;
	}
}


?>

<?php
$nome = $_POST['inputName'];

$lattes = $_POST['inputLattes'];

$cursos = $_POST['curso'];
$cursos = $_POST['dataInicio'];
$cursos = $_POST['dataFim'];
$cursos = $_POST['tipo'];

$cursos = $_POST['descricao'];
$cursos = $_POST['dataInicioExp'];
$cursos = $_POST['dataFimExp'];
$cursos = $_POST['tipoExp'];


$intesse = $_POST['inputInteresse'];

$especialidade = $_POST['inputEspecialidades'];

$email = $_POST['inputEmail'];

$phone = $_POST['inputPhone'];

$cargo = $_POST['inputCargo'];




echo "Sua intesse: " . $intesse;
echo "Sua especialidade: " . $inputEspecialidades;


echo "Nome: " . $nome;
echo "email: " . $email;
echo "phone: " . $phone;
echo "cargo: " . $cargo;
echo "lattes" . $lattes;


if (isset($_POST['curso'])) {
	foreach ($cursos as $c) {
		echo $c;
	}
}


?>
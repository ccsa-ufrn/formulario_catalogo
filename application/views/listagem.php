<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Respostas do formulário</title>
</head>
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
<body style="margin: 0 auto; width: 900px;"><br>
	<center>
	 <b>CENTRO DE CIÊNCIAS SOCIAIS APLICADAS (CCSA/UFRN)</b>
	</center><br>
	<table class="pure-table pure-table-bordered principal" width="100%">
		<thead>
			<tr>
				<td colspan=2><b>RELATÓRIO DE FORMULÁRIO ELETRÔNICO</b></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Data de emissão</td>
				<td>06/10/2017 às 13:25</td>
			</tr>
			<tr>
				<td>Endereço eletrônico</td>
				<td>https://ccsa.ufrn.br/catalogo_formulario/?/Form/listar_cadastros</td>
			</tr>
			<tr>
				<td>Número de resultados</td>
				<td>12 resultados</td>
			</tr>
		</tbody>
	</table>

	<h4>Resultados retornados</h4>
        <?php foreach($users as $user): ?>
        <table class="pure-table pure-table-bordered <?php echo $user['id']; ?>" width="100%">
		<thead>
			<tr>
                        <td colspan=2><b>Informações pessoais</b>
                        <button type="button" onclick='removeForm("<?php echo $user['id']; ?>")'>Esconder</button>
                        <button type="button" onclick='removeBut("<?php echo $user['id']; ?>")'>Esconder todos</button>
                        </td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td width="20%">Nome</td>
                                <td><?php echo $user['name']; ?></td>
			</tr>
			<tr>
				<td>Cargo</td>
                                <td><?php echo $user['position']; ?></td>
			</tr>
			<tr>
				<td>E-mail</td>
                                <td><?php echo $user['email']; ?></td>
			</tr>
			<tr>
				<td>Telefone</td>
				<td><?php echo $user['phone']; ?></td>
			</tr>
			<tr>
				<td>Currículo Lattes/ORCID</td>
				<td><?php echo $user['resume_link']; ?></td>
			</tr>
		</tbody>
	</table>
        <table class="pure-table pure-table-bordered <?php echo $user['id']; ?>" width="100%">
		<thead>
			<tr>
				<td colspan=2><b>Objetivo</b></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Objetivos</td>
				<td>
                                    <?php foreach($user['objectives'] as $objective): ?>
                                        <?php echo $objective['value']?><span> </span>
                                    <?php endforeach; ?>
				</td>
			</tr>
		</tbody>
	</table>
	<table class="pure-table pure-table-bordered <?php echo $user['id']; ?>" width="100%">
		<thead>
			<tr>
				<td><b>Interesses</b></td>
			</tr>
		</thead>
		<tbody>
			<tr>
                        <td><p style="text-align: justify;"><?php echo $user['interests']; ?></p></td>
			</tr>
		</tbody>
	</table>
	<table class="pure-table pure-table-bordered <?php echo $user['id']; ?>" width="100%">
		<thead>
			<tr>
				<td><b>Experiência Profissional</b></td>
			</tr>
		</thead>
		<tbody>
                        <?php foreach($user['pro_expertises'] as $professional_expertise): ?>
			<tr>
                        <td><?php echo $professional_expertise['institution'] + "desde" + $professional_expertise['year']; ?><br>
                        <strong>Atividades/Funções desenvolvidas</strong>: <?php echo $professional_expertise['ativities']; ?>
				</td>
			</tr>
                        <?php endforeach; ?>
		</tbody>
	</table>
	<table class="pure-table pure-table-bordered <?php echo $user['id']; ?>" width="100%">
		<thead>
			<tr>
				<td><b>Formação Acadêmica</b></td>
			</tr>
		</thead>
		<tbody>
                    <?php foreach($user['formations'] as $formation): ?>
			<tr>
                        <td><?php echo $formation['beginning'];?>-<?php echo $formation['end'];?>: <?php echo $formation['title'];?> no curso de <?php echo $formation['course'];?></td>
			</tr>
                    <?php endforeach; ?>
	</table>
        <p class="<?php echo $user['id']; ?>"> </p>
        <?php endforeach; ?>
<script type="text/javascript">
    function removeForm(formClass) {
        var elem = document.getElementsByClassName(formClass);
        for(x = 0; x < elem.length; x++){
            elem[x].style.display = 'none';
        }
    } 
    function removeBut(formClass) {
        var elem = document.getElementsByClassName("pure-table");
        var className = " " + formClass + " ";
        for(x = 0; x < elem.length; x++){
            if ( !((" " + elem[x].className + " ").replace(/[\n\t\r]/g, " ").indexOf(className) > -1) && !((" " + elem[x].className + " ").replace(/[\n\t\r]/g, " ").indexOf(" principal ") > -1)) {
                elem[x].style.display = 'none';
            }
        }
    }
</script>
</body>
</html>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Formulário</title>
</head>
<body>
	<?php echo validation_errors(); ?>
	<?php echo form_open('Form'); ?>
		Nome: <input type="text" name="nome" value="<?php echo set_value('nome'); ?>"><br>
		Cargo: <input type="text" name="cargo" value="<?php echo set_value('cargo'); ?>"><br>
		Email: <input type="text" name="email" value="<?php echo set_value('email'); ?>"><br>
		Telefone: <input type="text" name="telefone"><br><br>
		<input type="checkbox" name="tipo" value="Pesquisa"> Pesquisa <br> 
		<input type="checkbox" name="tipo" value="Extensão"> Extensão <br> 
		<input type="checkbox" name="tipo" value="Ensino"> Ensino <br>
		Objetivo:<br>
		<textarea name="objetivo" id="" cols="30" rows="10"><?php echo set_value('objetivo'); ?></textarea><br>
		Interesses:<br>
		<textarea name="interesses" id="" cols="30" rows="10"><?php echo set_value('interesses'); ?></textarea><br>

		<h3>Experiencias profisionais</h3>
		Instituicao: <input type="text" name="experiencia_instituicao[]"><br>
		Ano: <input type="text" name="experiencia_ano[]"><br>
		Atividades: <br><textarea name="experiencia_atividades[]" id="" cols="30" rows="10"></textarea><br><br>

		Instituicao: <input type="text" name="experiencia_instituicao[]"><br>
		Ano: <input type="text" name="experiencia_ano[]"><br>
		Atividades: <br><textarea name="experiencia_atividades[]" id="" cols="30" rows="10"></textarea><br><br>

		<h3>Formação</h3>
		Título: <select name="formacao_titulo[]" id="">
			<option value="Graduação">Graduação</option>
			<option value="Mestrado">Mestrado</option>
			<option value="Especialização">Especialização</option>
			<option value="Doutorado">Doutorado</option>
		</select><br>
		Início: <input type="text" name="formacao_inicio[]"><br>
		Término: <input type="text" name="formacao_termino[]"><br>
		Curso: <input type="text" name="formacao_curso[]"><br><br>

		Título: <select name="formacao_titulo[]" id="">
			<option value="Graduação">Graduação</option>
			<option value="Mestrado">Mestrado</option>
			<option value="Especialização">Especialização</option>
			<option value="Doutorado">Doutorado</option>
		</select><br>
		Início: <input type="text" name="formacao_inicio[]"><br>
		Término: <input type="text" name="formacao_termino[]"><br>
		Curso: <input type="text" name="formacao_curso[]"><br><br>

		Curriculo: <input type="text" name="curriculo" value="<?php echo set_value('curriculo'); ?>">

		<input type="submit">
	</form>
</body>
</html>

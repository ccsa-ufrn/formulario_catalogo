<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
	/**
	 * Controlador principal da aplicação.
	 */
	public function index() {
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		$this->load->database();

		$required_error = 'O campo %s é obrigatório';
		$this->form_validation->set_rules('nome', 'Nome', 'required', array('required' => $required_error));
		$this->form_validation->set_rules('cargo', 'Cargo', 'required', array('required' => $required_error));
		$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email', array('required' => $required_error, 'valid_email' => 'O email inserido é inválido'));
		$this->form_validation->set_rules('telefone', 'Telefone', 'required', array('required' => $required_error));
		//$this->form_validation->set_rules('tipo', 'Tipo', 'required', array('required' => 'É obrigatório selecionar pelo menos um entre Pesquisa, Extensão e Ensino.'));
		// $this->form_validation->set_rules('objetivo', 'Objetivo', 'required', array('required' => $required_error));
		$this->form_validation->set_rules('interesses', 'Interesses', 'required', array('required' => $required_error));
		$this->form_validation->set_rules('curriculo', 'Currículo', 'required', array('required' => $required_error));

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('form');
		} else {
			$nome = $this->input->post('nome');
			$cargo = $this->input->post('cargo');
			$email = $this->input->post('email');
			$telefone = $this->input->post('telefone');
			$tipos_objetivo = $this->input->post('tipo'); // É um array
			// $objetivo = $this->input->post('objetivo');
			$interesses = $this->input->post('interesses');
			$especialidades = $this->input->post('especialidades');

			$exp_intituicoes = $this->input->post('experiencia_instituicao'); // É um array
			$exp_anos = $this->input->post('experiencia_ano'); // É um array
			$exp_atividades = $this->input->post('experiencia_atividades'); // É um array

			$for_titulos = $this->input->post('formacao_titulo'); // É um array
			$for_inicio = $this->input->post('formacao_inicio'); // É um array
			$for_termino = $this->input->post('formacao_termino'); // É um array
			$for_cursos = $this->input->post('curso'); // É um array

			$curriculo = $this->input->post('curriculo');

			$this->db->query("INSERT INTO `catalogo_form`.`formulario` (`nome`, `cargo`, `email`, `telefone`, `curriculo_link`, `interesses`, `especialidades`) VALUES ('$nome', '$cargo', '$email', '$telefone', '$curriculo', '$interesses', '$especialidades');");
			$id = $this->db->insert_id();
			for ($i = 0; $i < count($exp_intituicoes); $i++) {
				$this->db->query("INSERT INTO `catalogo_form`.`experiencias_profissionais` (`formulario_id`, `instituicao`, `ano`, `atividades`) VALUES ($id, '$exp_intituicoes[$i]', '$exp_anos[$i]', '$exp_atividades[$i]');");
			}

			for ($i = 0; $i < count($for_titulos); $i++) {
				$this->db->query("INSERT INTO `catalogo_form`.`formacao` (`formulario_id`, `inicio`, `fim`, `titulo`, `curso`) VALUES ($id, '$for_inicio[$i]', '$for_termino[$i]', '$for_titulos[$i]', '$for_cursos[$i]');");
			}

			for ($i = 0; $i < count($tipos_objetivo); $i++) {
				$this->db->query("INSERT INTO `catalogo_form`.`objetivo` (`formulario_id`, `valor`) VALUES ($id, '$tipos_objetivo[$i]');");
			}
			
			$this->load->view('sucesso');
		}
		
	}

	public function listar_cadastros() {
		$this->load->view('listagem');
	}
}

?>

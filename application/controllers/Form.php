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

			$tipoServidor = $this->input->post('tipoServidor');
	
			$email = $this->input->post('email');
			$telefone = $this->input->post('telefone');
			$tipos_objetivo = $this->input->post('tipo'); // É um array
			// $objetivo = $this->input->post('objetivo');
			$interesses = $this->input->post('interesses');
			

			$exp_intituicoes = $this->input->post('experiencia_instituicao'); // É um array
			$exp_anos = $this->input->post('experiencia_ano'); // É um array
			$exp_atividades = $this->input->post('experiencia_atividades'); // É um array

			$for_titulos = $this->input->post('formacao_titulo'); // É um array
			$for_inicio = $this->input->post('formacao_inicio'); // É um array
			$for_termino = $this->input->post('formacao_termino'); // É um array
			$for_cursos = $this->input->post('curso'); // É um array

			$curriculo = $this->input->post('curriculo');

			$this->db->query("INSERT INTO `catalogo_form`.`formulario` (`nome`, `cargo`, `email`, `telefone`, `curriculo_link`, `interesses`, `tipoServidor`) VALUES ('$nome', '$cargo', '$email', '$telefone', '$curriculo', '$interesses', '$tipoServidor');");
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

	public function login() {
                require_once ($_SERVER["DOCUMENT_ROOT"].'/catalogo/application/third_party/phpPasswordHashingLib/passwordLib.php');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');

                if($this->session->userdata('username') == ""){
		$required_error = 'O campo %s é obrigatório';
                $this->form_validation->set_rules('username', 'Nome', 'required', array('required' => $required_error));
		$this->form_validation->set_rules('password', 'Senha', 'required', array('required' => $required_error));

                $str = file_get_contents('http://127.0.0.1/catalogo/application/controllers/credentials.json');
                $json = json_decode($str, true);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
                } else {
		    $username = $this->input->post('username');
		    $password = $this->input->post('password');
                    if($json['username'] === $username && password_verify($password, $json['password'])){ 
                        $session_data = Array(
                            'username' => $username
                        );
                        $this->session->set_userdata($session_data);
                        redirect('http://127.0.0.1/catalogo/?/Form/listar_cadastros');
                    } else {
                        redirect('http://127.0.0.1/catalogo/?/Form/login');
                    }
                }
                } else {
                redirect('http://127.0.0.1/catalogo/?/Form/listar_cadastros');
                }

	}

	public function listar_cadastros() {
	    $this->load->helper('url');
            if($this->session->userdata('username') != ""){
                $this->load->model("QueryDatabase");
                $database_query = $this->QueryDatabase->fetch_data();
                $users = Array();
                foreach($database_query['forms']->result() as $form){
                    $temp_user = Array("id" => $form->id, "name" => $form->nome, "position" => $form->cargo, "email" => $form->email, "phone" => $form->telefone, "resume_link" => $form->curriculo_link, "interests" => $form->interesses, "specialties" => $form->especialidades, "type_of_woker" => $form->tipoServidor, "objectives" => Array(), "formations" => Array(), "pro_expertises" => Array());
                    foreach($database_query['professional_expertises']->result() as $pro_expertise){
                        if($pro_expertise->formulario_id == $temp_user['id']){
                            $temp_pro_expertise = Array("id" => $pro_expertise->formulario_id, "institution" => $pro_expertise->instituicao, "year" => $pro_expertise->ano, "ativities" => $pro_expertise->atividades);
                            array_push($temp_user['pro_expertises'], $temp_pro_expertise);
                        }
                    }
                    foreach($database_query['formations']->result() as $formation){
                        if($formation->formulario_id == $temp_user['id']){
                            $temp_formation = Array("id" => $formation->formulario_id, "beginning" => $formation->inicio, "end" => $formation->fim, "title" => $formation->titulo, "course" => $formation->curso);
                            array_push($temp_user['formations'], $temp_formation);
                        }
                    }
                    foreach($database_query['objectives']->result() as $objective){
                        if($objective->formulario_id == $temp_user['id']){
                            $temp_objective = Array("id" => $objective->formulario_id, "value" => $objective->valor);
                            array_push($temp_user['objectives'], $temp_objective);
                        }
                    }
                    array_push($users, $temp_user);
                }
            $data = Array( 'users' => $users );
	    $this->load->view('listagem',$data);
            } else {
                redirect('http://127.0.0.1/catalogo/?/Form/login');
            }
	}

}

?>

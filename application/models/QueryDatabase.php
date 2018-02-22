<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QueryDatabase extends CI_Model {
	/**
	 * Controlador principal da aplicação.
	 */
	public function fetch_data() {
	    $this->load->database();
            $forms = $this->db->query("SELECT * FROM formulario");
            $formations = $this->db->get("formacao");
            $objectives = $this->db->get("objetivo");
            $professional_expertises = $this->db->get("experiencias_profissionais");
            return Array(
                'formations' => $formations,
                'forms' => $forms,
                'objectives' => $objectives,
                'professional_expertises' => $professional_expertises
            );
        }
}

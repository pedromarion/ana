<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
        $this->load->database();

        $query = $this->db->get('usuario');
        $data = $query->result();

        $title = "HOLA Como esta!!!!";


		$this->load->view('formulario/form', array('titulo'=>$title,'data'=>$data));
	}

    public function nuevo()
	{
		$this->load->view('formulario/nuevo');
	}

    public function guardar()
	{
        $this->load->database();

        $save_data = array(
            'nombre'=>$this->input->post('nombre'),
            'edad'=>$this->input->post('edad'),
            'correo'=>$this->input->post('correo')
        );
        $this->db->insert('usuario',$save_data);


        $query = $this->db->get('usuario');
        $data = $query->result();

        $title = "GUARDAR";


		$this->load->view('formulario/form', array('titulo'=>$title,'data'=>$data));
	}
}

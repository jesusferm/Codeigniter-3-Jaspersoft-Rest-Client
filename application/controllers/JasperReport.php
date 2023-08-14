<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JasperReport extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('reports');
		$this->load->library('session');
	}

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
		$params = [
            'nombre_movimiento' => 'Reporte uno',
            'autoriza' => '',
            'cargo' => '',
        ];
        $data['pdf'] = reporte(1, 'Codeigniter/reporteuno', $params, 'pdf');
		$this->load->view('report', $data);
	}
}

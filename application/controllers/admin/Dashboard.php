<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends My_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    public function __construct(){
		parent::__construct();
		$this->load->model('user_m');
	}
	
	public function index(){
		$this->load->helper('url');
		
		$recordsTotal = array(
            "user" => $this->user_m->countAll(),
        );

		//print_r($recordsTotal); die;

		$this->load->view('admin/dashboard/index',$recordsTotal);
	}
	
	public function modal(){
		$this->load->view('admin/layout_files/header');
	}
	
}
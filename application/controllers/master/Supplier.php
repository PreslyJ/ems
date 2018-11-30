<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller 
{

	function __construct()
   	{
        parent::__construct();
		$this->load->model('master/supplier_model'); //loading supplier model
   	}

	function supplier_view() //load supplier add view
	{
		$data = $this->supplier_model->fetch_predata(); //fetching initial data from model
		$this->load->view('master/supplier_view', $data); //loading view with data retrieved
	}

	function supplier_lookup_view() //load supplier lookup view
	{
		$data = $this->supplier_model->fetch_lookup_predata(); //fetching initial data from model
		$this->load->view('master/supplier_lookup_view', $data); //loading view with data retrieved
	}

	function load_supplier_types()
	{
		echo json_encode($this->supplier_model->load_supplier_types()); //fethcing data from model and passing back to view as JSON string
	}

	function save_sup_type()
	{
		echo json_encode($this->supplier_model->save_sup_type());
	}

	function upload_package(){

		$pkg_path = '/var/www/html/packagesupload/' ;

		$config['upload_path']= $pkg_path;
        $config['allowed_types']='gif|jpg|png|pdf|jpeg';
		$config['file_name']=rand();

		$this->load->library('upload');

		$this->upload->initialize($config);


		if($this->upload->do_upload("packages")){
			$data = array('upload_data' => $this->upload->data());

			echo $data['upload_data']['file_name'];
			
        }

	}

	function save_supplier()
	{
		echo json_encode($this->supplier_model->save_supplier());
	}

	public function validate_branches($str)
	{
		return $this->supplier_model->validate_branches($str);
	}

	function fetch_suppliers()
	{
		echo json_encode($this->supplier_model->fetch_suppliers());
	}

	function quick_toggle_sup_status()
	{
		echo json_encode($this->supplier_model->quick_toggle_sup_status());
	}

	function fetch_supplier()
	{
		echo json_encode($this->supplier_model->fetch_supplier());
	}

	function reload_sequence()
	{
		echo json_encode($this->supplier_model->reload_sequence());
	}

	function check_tasks()
	{
		echo json_encode($this->supplier_model->check_tasks());
	}
}

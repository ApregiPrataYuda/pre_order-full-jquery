<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('SupplierModel');
    }


	public function index()
	{
      $codes =  $this->SupplierModel->code_create();
   
      $getdata = $this->SupplierModel->getdata();
        $data = [
            'codes' => $codes,
            'cart_load' => $getdata
        ];
		$this->template->load('template','Supplier/Supplier',$data);
	}

    public  function Addprocess() {
        $post = $this->input->post(null, true);
        if (isset($_POST['add_supp'])) {
            $this->SupplierModel->Add($post);
        }
        if ($this->db->affected_rows() > 0) {
            $params = array('success' => true);
        }else {
            $params = array('success' => false);
        }
        echo json_encode();
    }

    function load() {
        $getdata = $this->SupplierModel->getdata();
        $data['cart_load'] = $getdata;
        $this->load->view('Supplier/loaddata',$data);
    }
}

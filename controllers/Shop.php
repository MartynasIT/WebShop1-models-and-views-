<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {


	public function index()
	{
		$this->load->model('Product_model');
        $data['products'] = $this->Product_model->getAllproducts();

        $this->load->view('main', $data);

		}	
}

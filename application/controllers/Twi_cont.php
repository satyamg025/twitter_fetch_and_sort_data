<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Twi_cont extends CI_Controller {

	public function fetch_data(){

		$this->load->model('Twi_data');
		$data=$this->Twi_data->data();
		
		$this->load->view('Table_data',$data);
	}

}
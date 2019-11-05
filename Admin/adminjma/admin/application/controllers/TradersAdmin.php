<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TradersAdmin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/traders_admin');
	}
}

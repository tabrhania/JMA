<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trader extends CI_Controller {

	public function index()
	{
		$this->load->view('user/trader_profile');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indikator extends CI_Controller {

	public function index()
	{
		$this->load->view('user/indikator');
	}
}
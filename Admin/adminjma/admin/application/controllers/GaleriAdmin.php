<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GaleriAdmin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/galeri_admin');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArtikelAdmin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/artikel_admin');
	}
}

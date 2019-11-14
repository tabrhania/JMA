<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TradersAdmin extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('m_trader');
	}

	public function index()
	{
		$data['trader'] = $this->m_trader->ambilData();
		$this->load->view('admin/traders_admin', $data);
	}

	public function tambahTrader()
	{
		$trader 	=	$this->input->post('namaTrader');
		$foto 		=	$this->unggah('foto');
		$bio		=	$this->input->post('bio');

		$data = array(
			'trader'	=> $trader,
			'foto'		=> $foto,
			'bio'		=> $bio
		);
		$this->m_trader->tambah_data($data, 'trader');
		redirect('tradersadmin');
	}

	private function unggah($file){

		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
 
		$this->load->library('upload', $config);
		if ($this->upload->do_upload($file)){
			return $this->upload->data('file_name');
		}
	}
}

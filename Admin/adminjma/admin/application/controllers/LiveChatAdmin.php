<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LiveChatAdmin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/livechat_admin');
	}
}

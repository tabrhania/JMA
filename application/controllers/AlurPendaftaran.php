<?php

class AlurPendaftaran extends CI_Controller {

    public function index() {
        $this->load->view('template/page_head');
        $this->load->view('template/navbar');
        $this->load->view('user/alur_pendaftaran');
        $this->load->view('template/footer');
        $this->load->view('template/js');
    }

}
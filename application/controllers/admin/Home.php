<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/adm/v_header');
        $this->load->view('layout/adm/v_navbar');
        $this->load->view('layout/adm/v_sidebar');
        $this->load->view('admin/v_home');
        $this->load->view('layout/adm/v_footer');
    }
}

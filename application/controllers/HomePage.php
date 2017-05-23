<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePage extends CI_Controller {


    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('mobile_nav');
        $this->load->view('side_bar');
        $this->load->view('wrapper');
        $this->load->view('templates/footer');
    }
}

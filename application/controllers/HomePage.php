<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePage extends CI_Controller {


    public function index()
    {
        $this->load->view('cv_template');
    }
}

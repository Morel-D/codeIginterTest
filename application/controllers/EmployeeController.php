<?php
defined('BASEPATH') or exit('No direct script access allowed');


class EmployeeController extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('employee');
        $this->load->view('template/footer');
    }

    public function create()
    {
        $this->load->view('template/header');
        $this->load->view('create');
        $this->load->view('template/footer');
    }
}

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

    public function store()
    {
        $data = [
            'f_name' => $this->input->post('f_name'),
            'l_name' => $this->input->post('l_name'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
        ];

        print_r($data);
    }
}

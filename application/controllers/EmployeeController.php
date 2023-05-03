<?php
defined('BASEPATH') or exit('No direct script access allowed');


class EmployeeController extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');

        $this->load->model('EmployeeModel');
        $data['employees'] = $this->EmployeeModel->getEmployee();
        $this->load->view('employee', $data);
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

        $this->form_validation->set_rules('f_name', 'First Name', 'required');
        $this->form_validation->set_rules('l_name', 'Last Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        // Random number generator
        $letters = "EMP";
        $length = 7;
        $min = pow(10, $length - 1);
        $max = pow(10, $length) - 1;

        $random_number = rand($min, $max);

        if ($this->form_validation->run()) {
            $data = [
                'uid' => $letters . $random_number,
                'f_name' => $this->input->post('f_name'),
                'l_name' => $this->input->post('l_name'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
            ];

            $this->load->model('EmployeeModel');
            $this->EmployeeModel->insertEmployee($data);
            redirect(base_url('employee'));
        } else {
            $this->create();
        }
    }



    public function edit($id)
    {
        $this->load->view('template/header');
        $this->load->model('EmployeeModel');
        $data['employee'] = $this->EmployeeModel->editEmployee($id);
        $this->load->view('edit', $data);
        $this->load->view('template/footer');
    }
}

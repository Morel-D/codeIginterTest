<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StudentController extends CI_Controller
{
    public function index()
    {
        $this->load->model('StudentModel', 'studs');

        $student = new StudentModel;
        $student =  $student->student_info();

        $class = new StudentModel;
        // $class = $class->student_class();

        echo "$student";
    }
}

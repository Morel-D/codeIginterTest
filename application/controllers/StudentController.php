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

    public function show($id)
    {
        $this->load->model('StudentModel', 'studs');

        $stud_show = new StudentModel;
        $stud_show = $stud_show->student_show($id);

        echo "$stud_show";
    }
}

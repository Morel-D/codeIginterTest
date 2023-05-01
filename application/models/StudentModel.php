<?php
defined('BASEPATH') or exit('No direct script access allowed');


class StudentModel extends CI_Model
{

    public function student_info()
    {
        $studClass = $this->student_class();
        return $student_name = "Denzel Eric with $studClass";
    }

    private function student_class()
    {
        return $student_class = "Form 1";
    }
}

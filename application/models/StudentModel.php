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

    public function student_show($id)

    {
        if ($id == "1") {
            return $results = "user 1";
        } elseif ($id == "2") {
            return $results = "user 2";
        }
    }
}

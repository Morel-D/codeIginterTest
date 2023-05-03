<?php
defined('BASEPATH') or exit('No direct script access allowed');


class EmployeeModel extends CI_Model
{

    public function getEmployee()
    {
        $query = $this->db->get('employees');
        return $query->result();
    }

    public function insertEmployee($data)
    {
        return $this->db->insert('employees', $data);
    }
}

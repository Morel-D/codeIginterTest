<?php
defined('BASEPATH') or exit('No direct script access allowed');


class EmployeeModel extends CI_Model
{
    public function insertEmployee($data)
    {
        return $this->db->insert('employees', $data);
    }
}

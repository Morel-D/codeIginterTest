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

    public function editEmployee($id)
    {
        $query = $this->db->get_where('employees', ['id' => $id]);
        return $query->row();
    }
}

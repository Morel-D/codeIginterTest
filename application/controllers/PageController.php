<?php
defined('BASEPATH') or exit('No direct script access allowed');


class PageController extends CI_Controller
{
    public function index()
    {
        echo "This is the first test";
    }

    public function test()
    {
        $this->load->view('test');
    }
}

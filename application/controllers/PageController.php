<?php
defined('BASEPATH') or exit('No direct script access allowed');


class PageController extends CI_Controller
{
    public function index()
    {
        echo "This is the first test";
    }

    public function tests()
    {
        echo "This is the second test";
    }

    public function blog($blog_note = '')
    {
        echo "$blog_note";
        $this->load->view('blogView');
    }

    public function first()
    {
        $info['name'] = "Morel Denzel";
        $info['age'] = 20;
        $this->load->view('hello', $info);
    }
}

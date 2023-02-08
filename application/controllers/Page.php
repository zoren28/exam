<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('employees');
    }

    public function menu($page = 'employee', $action = 'view')
    {
        if (!file_exists(APPPATH . "views/{$page}/{$action}.php")) {

            show_404();
        } else {

            $data = [
                'page' => ucwords(html_escape($page)),
                'action' => html_escape($action),
                'employees' => $this->employees->result_array()
            ];

            $this->load->view('template/header', $data);
            $this->load->view("{$page}/$action", $data);
            $this->load->view('template/footer');
        }
    }
}

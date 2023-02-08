<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('employees');
    }

    public function create()
    {
        $request = $this->input->post(NULL, TRUE);
        $request['birth_date'] = date('Y-m-d', strtotime($request['birth_date']));
        $this->employees->create($request);

        redirect(base_url());
    }

    public function delete($id)
    {
        $this->employees->delete($id);

        redirect(base_url());
    }

    public function edit($id)
    {
        $employee = $this->employees->row_array(['id' => $id]);
        $data['employee'] = $employee;

        $this->load->view('employee/edit', $data);
    }

    public function update()
    {
        $request = $this->input->post(NULL, TRUE);
        $id = $request['id'];
        $request['birth_date'] = date('Y-m-d', strtotime($request['birth_date']));
        unset($request['id']);

        $this->employees->update($request, ['id' => $id]);

        redirect(base_url());
    }
}

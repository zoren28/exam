<?php
class Employees extends CI_Model
{

    protected $table = 'employees';

    function __construct()
    {
        parent::__construct();
    }

    public function result_array($data = [])
    {
        foreach ($data as $key => $value) {
            $this->db->where($key, $value);
        }

        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function row_array($data = [])
    {
        foreach ($data as $key => $value) {
            $this->db->where($key, $value);
        }

        $query = $this->db->get($this->table);
        return $query->row_array();
    }

    public function create($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function delete($id)
    {
        $this->db->delete($this->table, ['id' => $id]);
    }

    public function update($data, $where)
    {
        $this->db->where($where);
        return $this->db->update($this->table, $data);
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all()
    {
        $query = $this->db->get('pegawai');
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('pegawai', $data);
    }
}

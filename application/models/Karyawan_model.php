<?php

class Karyawan_model extends CI_Model{

    public function getAllKaryawan(){
        return $this->db->get("table_12210887")->result_array();
    }

    public function tambahDataKaryawan($table, $data){
        $this->db->insert($table, $data);
    }
    
    public function hapusDataKaryawan($id){
        $this->db->delete("table_12210887", ["id" => $id]);
    }

    public function getKaryawanById($id){
        return $this->db->get_where("table_12210887", ["id" => $id])->row_array();
    }

    public function ubahDataKaryawan($id, $data){
        $this->db->where("id", $id);
        $this->db->update("table_12210887", $data);
    }
}
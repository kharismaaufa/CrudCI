<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class modelku extends CI_Model{
    // public function getMatkul($tabel){
    //    $matkulnih = $this->db->query("SELECT * FROM ".$tabel);
    //    return $matkulnih->result_array();
    // }

    //Query Builder
    public function getData($tabel){
        $auf = $this->db->get($tabel);
        return $auf ->result_array();
    }

    public function masukkan($tabel, $data){
        $auf = $this->db->insert($tabel, $data);
        return $auf;
    }

    
    public function hapus($tabel, $where){
        $auf = $this->db->delete($tabel, $where);
        return $auf;
    }
    
    public function perbarui($tabel, $data, $where){
        $auf = $this->db->update($tabel, $data, $where);
        return $auf;
    }

    public function getData_khusus($tabel, $where){
        $auf = $this->db->get_where($tabel, $where);
        return $auf ->result_array();
    }
}
?>
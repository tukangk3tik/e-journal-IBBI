<?php

class Jurnal_model extends CI_Model{
    
    public function ambilJurnal(){
        $query = $this->db->get("tbljurnal");
        return $query;
    }

    public function buatJurnal($data){
        $query = $this->db->insert("tbljurnal",$data);
        return $this->db->affected_rows();
    }

    
    public function ambilPenulis(){
        $query = $this->db->select("a.nim")->from("tblpenulis a")->join("tbljurnal b","a.nim<>b.nim")->get();
        //$query = $this->db->get("tblpenulis");
        return $query;
    }

}
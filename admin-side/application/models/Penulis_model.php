<?php

class Penulis_model extends CI_Model {
    public function ambilPenulis(){
        $query = $this->db->get("tblpenulis");
        return $query; 
    }

    public function buatPenulis($data){
        $query = $this->db->insert("tblpenulis",$data);
        return $this->db->affected_rows();
    }

    public function perbaruiPenulis($nim,$data){
        $query = $this->db->where("nim",$nim)->update("tblpenulis",$data);
        return $this->db->affected_rows();
    }

    public function hapusPenulis($nim){
        $query = $this->db->where("nim",$nim)->delete("tblpenulis");
        return $query;
    }

    public function ambilsatuPenulis($nim){
        $query = $this->db->where("nim",$nim)->get("tblpenulis");    
        return $query->row();
    }

}
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

    public function perbaruiJurnal($idjurnal,$data){
        $query = $this->db->where("idjurnal",$idjurnal)->update("tbljurnal",$data);
        return $this->db->affected_rows();
    }

    public function hapusJurnal($idjurnal){
        $query = $this->db->where("idjurnal",$idjurnal)->delete("tbljurnal");
        return $query;
    }

    public function ambilsatuJurnal($idjurnal){
        $query = $this->db->where("idjurnal",$idjurnal)->get("tbljurnal");    
        return $query->row();
    }
    
    public function ambilPenulis($mode){
        if ($mode="tambah"){
            $query = $this->db->select("b.nim")->from("tbljurnal a")->join("tblpenulis b","a.nim=b.nim","right")
                        ->where("a.judul is null")->get();
        } elseif ($mode="ubah"){
            $query = $this->db->select("b.nim")->from("tbljurnal a")->join("tblpenulis b","a.nim=b.nim","right")
                        ->where("a.nim=b.nim")->where("a.judul is null")->get();
        }
        return $query;
    }

    //========Jurnal detail================   

    public function ambilJurnaldtl($id){
        $query = $this->db->where("idjurnal",$id)->get("tbljurnal");
        return $query;
    }

    public function getjurnalDtl($idjurnal){
        $query =  $this->db->select("a.idjurnal,a.judul,a.nim,a.tahun,a.jumlahhalaman")
        ->from("tbljurnal a")->join("tbljurnaldtl b","a.idjurnal=b.idjurnal","right")->where("a.idjurnal",$idjurnal)->get();
        
        return $query; 
    }
}
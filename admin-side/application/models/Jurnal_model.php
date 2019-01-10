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
        $query = $this->db
                        ->where("idjurnal",$idjurnal)
                        ->update("tbljurnal",$data);
        
    return $this->db->affected_rows();
    }

    public function hapusJurnal($idjurnal){
        $query = $this->db
                        ->where("idjurnal",$idjurnal)
                        ->delete("tbljurnal");
        return $query;
    }

    public function ambilsatuJurnal($idjurnal){
        $query = $this->db
                        ->where("idjurnal",$idjurnal)
                        ->get("tbljurnal");

        return $query->row();
    }
    
    public function ambilPenulis(){
        $query = $this->db
                        ->select("b.nim")
                        ->from("tbljurnal a")
                        ->join("tblpenulis b","a.nim=b.nim","right")
                        ->where("a.judul is null")
                        ->get();
        return $query;            
    }

    // public function ambilPenulisjurnal($nim){
    //     $query = $this->db
    //                     ->select("nim")
    //                     ->from("tbljurnal")
    //                     ->where("nim",$nim)
    //                     ->get();
    //     return $query;   
    // }
    //========Jurnal detail model================   

    public function ambildataJurnal($id){
        $query = $this->db
                        ->where("idjurnal",$id)
                        ->get("tbljurnal");

        return $query;
    }

    public function getjurnalDtl($idjurnal){
        $query = $this->db
                        ->select("a.idjurnal,a.judul,a.nim,a.tahun,a.jumlahhalaman")
                        ->from("tbljurnal a")
                        ->join("tbljurnaldtl b","a.idjurnal=b.idjurnal","right")
                        ->where("a.idjurnal",$idjurnal)
                        ->get();
        
        return $query; 
    }

    public function simpanjurnalDtl($data){
        $query = $this->db->insert("tbljurnaldtl",$data);
        return $this->db->affected_rows();
    }

    public function ambilJenis($data){
        $query = $this->db
                        ->select("jenis")
                        ->from("tbljurnaldtl")
                        ->where("idjurnal",$data)
                        ->get();

        $array = $query->result_array();
        $arr = array_map(function($value){
            return $value['jenis'];
        }, $array);
        
        return $arr;
    }

    public function hitungJumlah($data){
        $select = 'count(jenis) as jumlah'; 
        $query = $this->db
                        ->select($select)
                        ->from("tbljurnaldtl")
                        ->where("idjurnal",$data)
                        ->get();
        return $query;
    }
}
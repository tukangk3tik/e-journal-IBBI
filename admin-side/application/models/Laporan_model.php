<?php

class Laporan_model extends CI_Model{
    
    public function getJurnal($tahun){
        $query = $this->db
                        ->select("a.idjurnal,a.judul,a.nim,b.nama,a.tahun,a.jumlahhalaman")
                        ->from("tbljurnal a")
                        ->join("tblpenulis b","a.nim=b.nim","right")
                        ->where("tahun",$tahun)
                        ->get();

        return $query;
    }

    public function getJenis($id){
        $query = $this->db
                        ->from("tbljurnaldtl")
                        ->order_by("jenis","ASC")
                        ->where("idjurnal",$id)
                        ->get();
        
        return $query->result();
    }

    public function getJurnalAll(){
        $query = $this->db->get("tbljurnal");

        return $query;
    }

    public function getJurnalOne($id){
        $query = $this->db
                        ->where("idjurnal",$id)
                        ->get("tbljurnal");
        
        return $query;
    }

    public function getJenisJurnal($id){
        $query = $this->db
                        ->order_by("jenis","ASC")
                        ->where("idjurnal",$id)
                        ->get("tbljurnaldtl");
        
        return $query;
    }

    public function getpenulis(){
       $query = $this->db->get("tblpenulis");

        return $query;
    }
    public function getuser(){
        $query = $this->db
                        ->where("status","MHS")
                        ->get("tbluser");

        return $query;
    }
    

}
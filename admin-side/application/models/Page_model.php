<?php

class Page_model extends CI_Model {
    public function ambilJurnal(){
        $query = $this->db
                        ->from("tbljurnal")
                        ->order_by("tahun","desc")
                        ->get();

        return $query;
    }

    public function cariJurnal($key){
        $query = $this->db
                        ->from("tbljurnal")
                        ->like("judul",$key)
                        ->or_like("nim",$key)
                        ->or_like("tahun",$key)
                        ->order_by("tahun","desc")
                        ->get();
        
        return $query;
    }

    public function ambilSatuJurnal($id){
        $query = $this->db
                        ->where("idjurnal",$id)
                        ->get("tbljurnal");
        
        return $query;
    }

    public function ambilDetailJurnal($id){
        $query = $this->db
                        ->where("idjurnal",$id)
                        ->get("tbljurnaldtl");
        return $query;
    }

    public function ambilIsiJurnal($id,$bab){
        $query = $this->db
                        ->select("a.judul,b.isi")
                        ->from("tbljurnal a")
                        ->join("tbljurnaldtl b","a.idjurnal=b.idjurnal","left")
                        ->where("b.idjurnal",$id)
                        ->where("b.jenis",$bab)
                        ->get();
        
        return $query;
    }
}
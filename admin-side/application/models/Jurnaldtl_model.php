<?php

class Jurnaldtl_model extends CI_Model{
    
    function bacaJurnaldtl($idjurnal){
        $query =  $this->db->select("a.idjurnal,a.judul,a.nim,a.tahun,a.jumlahhalaman")
        ->from("tbljurnal a")->join("tbljurnaldtl b","a.jurnal=b.jurnal","right")->where("a.idjurnal",$idjurnal)->get();
        
        return $query; 
    }

}
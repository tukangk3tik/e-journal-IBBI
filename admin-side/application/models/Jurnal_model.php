<?php

class Jurnal_model extends CI_Model{
    var $tbl = "tbljurnaldtl";

    public function ambilJurnalFilter($jurusan,$tahun){
        $query = $this->db
                        ->where("jurusan",$jurusan)
                        ->where("tahun",$tahun)
                        ->get("tbljurnal");

        return $query;
    }

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

    
    //========Jurnal detail model================   

    public function ambildataJurnal($id){
        $query = $this->db
                        ->where("idjurnal",$id)
                        ->get("tbljurnal");

        return $query;
    }

    public function getjurnalDtl($id){
        // $query = $this->db
        //                 ->select("a.idjurnal,a.judul,a.nim,a.tahun,a.jumlahhalaman")
        //                 ->from("tbljurnal a")
        //                 ->join("tbljurnaldtl b","a.idjurnal=b.idjurnal","right")
        //                 ->where("a.idjurnal",$idjurnal)
        //                 ->get();
        
        $query = $this->db->where("idjurnal",$id)->get("tbljurnaldtl");

        return $query; 
    }

    public function hapusallDtl($id){
        $query = $this->db
                        ->where("idjurnal",$id)
                        ->delete("tbljurnaldtl");
        return $query;
    }

    public function simpanjurnalDtl($data){
        $query = $this->db->insert("tbljurnaldtl",$data);
        return $this->db->affected_rows();
    }

    public function hapusjurnalDtl($id,$jenis){
        $arr = array('idjurnal' => $id, "jenis" => $jenis);
        $query = $this->db
                        ->where($arr)
                        ->delete("tbljurnaldtl");

        return $query;
    }

    public function tampilDtl($id,$jenis){
        $arr = array('idjurnal' => $id, "jenis" => $jenis);
        $query = $this->db
                        ->where($arr)
                        ->get("tbljurnaldtl");

        return $query;
    }
    
    public function ambilsemuaJenis($data){
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
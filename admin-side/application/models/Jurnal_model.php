<?php

class Jurnal_model extends CI_Model{
    
    public function ambilJurnal(){
        $query = $this->db->get("tbljurnal");
        
        return $query;
    }

}
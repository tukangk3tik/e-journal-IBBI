<?php 

class Login_model extends CI_Model {

    public function ambilUser($userid,$password){
        $query = $this->db->where("iduser",$userid)->where("password",$password)->get("tbluser");  //sintaks ini disebut dengan active record
        return $query;
    }
}
<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class My_model extends CI_Model{

    //Ambil perolehan suara
    public function perolehann_suara(){
        $sql = "SELECT * from hasil_pemilu";
        $result = $this->db->query($sql);
        if ($result) {
            return $result->result_array();
        }else{
            return false;
        }
    }

}
?>
<?php 
class m_daftar extends CI_Model{
	function __construct()
    {
      parent::__construct();
    }

	function get_insert($data){
       $this->db->insert('calon', $data);
       return TRUE;
    }
}
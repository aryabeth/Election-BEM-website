<?php 

class m_pilihcalon extends CI_Model{

	function __construct()

    {

      parent::__construct();

    }



	function get_insert($data){

       $this->db->insert('hasil_pemilu', $data);

       return TRUE;

    }



    function ngecek($nim){

    	$this->db->select('nim');

    	$this->db->where('nim', $nim);

    	$query = $this->db->get('hasil_pemilu');

    	if ($query->num_rows() > 0) {

    		return TRUE;

    	}else{

    		return FALSE;

    	}

    }



    public function getdonutchart()

    {

        $query = $this->db->query("SELECT SUM(IF(p.pilihan='1',1,0))'satu',SUM(IF(p.pilihan='2',1,0))'dua' from (select distinct(nim), pilihan from hasil_pemilu group by nim) p");

        if ($query->num_rows() > 0) {

            return $query->row_array();

        }else{

            return FALSE;

        }

    }



    public function getbarchart()

    {

        $query = $this->db->query("SELECT 

                    SUM(IF(substr(p.nim,3,2) = '10' and p.pilihan = '1', 1,0))'10_satu',

                    SUM(IF(substr(p.nim,3,2) = '11' and p.pilihan = '1', 1,0))'11_satu',

                    SUM(IF(substr(p.nim,3,2) = '12' and p.pilihan = '1', 1,0))'12_satu',

                    SUM(IF(substr(p.nim,3,2) = '13' and p.pilihan = '1', 1,0))'13_satu',

                    SUM(IF(substr(p.nim,3,2) = '14' and p.pilihan = '1', 1,0))'14_satu',

                    SUM(IF(substr(p.nim,3,2) = '15' and p.pilihan = '1', 1,0))'15_satu',

                    SUM(IF(substr(p.nim,3,2) < '10' and p.pilihan = '1', 1,0))'bwh_10_satu',

                    SUM(IF(substr(p.nim,3,2) = '10' and p.pilihan = '2', 1,0))'10_dua',

                    SUM(IF(substr(p.nim,3,2) = '11' and p.pilihan = '2', 1,0))'11_dua',

                    SUM(IF(substr(p.nim,3,2) = '12' and p.pilihan = '2', 1,0))'12_dua',

                    SUM(IF(substr(p.nim,3,2) = '13' and p.pilihan = '2', 1,0))'13_dua',

                    SUM(IF(substr(p.nim,3,2) = '14' and p.pilihan = '2', 1,0))'14_dua',

                    SUM(IF(substr(p.nim,3,2) = '15' and p.pilihan = '2', 1,0))'15_dua',

                    SUM(IF(substr(p.nim,3,2) < '10' and p.pilihan = '2', 1,0))'bwh_10_dua'

                    FROM (select distinct(nim), pilihan from hasil_pemilu group by nim) p");

        if ($query->num_rows() > 0) {

            return $query->row_array();

        }else{

            return FALSE;

        }

    }



    public function getperprodi()

    {

        $query = $this->db->query("SELECT 

                    IFNULL(SUM(IF(substr(p.nim,1,2) = '71' OR substr(p.nim,1,2) = '22', 1,0)),'0')'ti',

                    IFNULL(SUM(IF(substr(p.nim,1,2) = '72' OR substr(p.nim,1,2) = '23', 1,0)),'0')'si',

                    IFNULL(SUM(IF(substr(p.nim,1,2) = '11', 1,0)),'0')'manajemen',

                    IFNULL(SUM(IF(substr(p.nim,1,2) = '12', 1,0)),'0')'akuntansi',

                    IFNULL(SUM(IF(substr(p.nim,1,2) = '41', 1,0)),'0')'kedokteran',

                    IFNULL(SUM(IF(substr(p.nim,1,2) = '62' OR substr(p.nim,1,2) = '33', 1,0)),'0')'despro',

                    IFNULL(SUM(IF(substr(p.nim,1,2) = '61' OR substr(p.nim,1,2) = '32', 1,0)),'0')'arsitek',

                    IFNULL(SUM(IF(substr(p.nim,1,2) = '31', 1,0)),'0')'biotek',

                    IFNULL(SUM(IF(substr(p.nim,1,2) = '01', 1,0)),'0')'teologi'

                    FROM (select distinct(nim), pilihan from hasil_pemilu group by nim) p");

        if ($query->num_rows() > 0) {

            return $query->row_array();

        }else{

            return FALSE;

        }

    }



}
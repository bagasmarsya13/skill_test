<?php 
	class Jabatan extends CI_Model{
		function __construct(){
			parent:: __construct();
		}
		function get_jabatan(){
			return $this->db->get('jabatan')->result_array();
        }
        function tambah_jabatan($value){
            return $this->db->insert('jabatan',$value);
        }
	}
 ?>
<?php 
	class Pegawai extends CI_Model{
		function __construct(){
			parent:: __construct();
		}
		function get_pegawai(){
			return $this->db->get('pegawai')->result_array();
        }
        function tambah_pegawai($value){
            return $this->db->insert('pegawai',$value);
        }
	}
 ?>
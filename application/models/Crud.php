<?php 
 
class Crud extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
}
}
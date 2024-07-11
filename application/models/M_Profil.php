<?php
 
 
class M_Profil extends CI_Model{

	public function getAll(){
		$profil = $this->db->get('profil')->result();
		return $profil;
	}

	public function storeProfil($data){
		$this->db->insert('profil',$data);
	}

	public function uploadImg($data){
		$this->db->insert('profil',$data);
	}

	public function getProfil($id_profil){
		return $this->db->where('id_profil',$id_profil)->get('profil')->row();
	}

	public function updateProfil($id_profil,$data){
		$this->db->where('id_profil',$id_profil)->update('profil',$data);
	}

	public function deleteProfil($id_profil){
		$this->db->where('id_profil',$id_profil)->delete('profil');
	}
}
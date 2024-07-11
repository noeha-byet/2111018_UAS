<?php
 
 
class M_Tampil extends CI_Model{

	public function getAll(){
		$tampil = $this->db->get('profil')->result();
		return $tampil;
	}

	public function getAllgambar(){
		$gambar = $this->db->get('galeri')->result();
		return $gambar;
	}

	public function getProfil($id_profil){
		return $this->db->where('id_profil',$id_profil)->get('profil')->row();
	}

	public function getGambar($id_galeri){
		return $this->db->where('id_galeri', $id_galeri)->get('galeri')->row();
	}
}

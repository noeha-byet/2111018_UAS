<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profil extends CI_Controller {

	public function __construct() {
		parent::__construct(); 
		$this->load->model('m_profil');
	}

	public function index()
	{	
		$data['profil']  = $this->m_profil->getAll();
		$data['title'] = "profil List";
		$this->load->view('profil/index',$data);
	}

	public function create(){
		$data['title'] = "Create Profil";
		$this->load->view('profil/create',$data);
	}

	public function storeProfil(){
		$data['nip_profil'] = $this->input->post('nip_profil');
		$data['nik_profil'] = $this->input->post('nik_profil');
		$data['nama_profil'] = $this->input->post('nama_profil');
		$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
		$data['tempat_lahir'] = $this->input->post('tempat_lahir');
		$data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
		$data['alamat'] = $this->input->post('alamat');
		$data['no_telp'] = $this->input->post('no_telp');
		$data['kelas_pelatihan'] = $this->input->post('kelas_pelatihan');

		
		$this->m_profil->storeProfil($data);
		redirect('profil');
	}

	public function edit($id_profil){
		$data['profil'] = $this->m_profil->getProfil($id_profil);
		$data['title'] = "Edit profil";
		$this->load->view('profil/update',$data);
	}

	public function updateProfil($id_profil){
		$data['nama'] = $this->input->post('nama');
		$data['skill'] = $this->input->post('skill');
		$data['ttl'] = $this->input->post('ttl');
		$data['website'] = $this->input->post('website');
		$data['phone'] = $this->input->post('phone');
		$data['alamat'] = $this->input->post('alamat');
		$data['umur'] = $this->input->post('umur');
		$data['degree'] = $this->input->post('degree');
		$data['email'] = $this->input->post('email');
		$data['freelancer'] = $this->input->post('freelancer');
		$data['deskripsi'] = $this->input->post('deskripsi');
		// $data['kono'] = $this->input->post('kono');

		$this->m_profil->updateProfil($id_profil,$data);
		redirect('admin/profil');
	}

	public function delete($id_profil){
		$this->m_profil->deleteProfil($id_profil);
		redirect('admin/profil');
	}
}

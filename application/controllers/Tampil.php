<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampil extends CI_Controller {

	public function __construct() {
		parent::__construct(); 
		$this->load->model('m_tampil');
	}

	public function index()
	{
		$data['tampil']  = $this->m_tampil->getAll();
		$this->load->view('home', $data);
	}

	public function gallery()
	{
		$data['gambar'] = $this->m_tampil->getAllgambar();
		$this->load->view('gallery', $data);
	}

	public function services()
	{
		$this->load->view('services');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function detail($id_galeri)
	{
		$data['galeri'] = $this->m_tampil->getGambar($id_galeri);
		$data['title'] = "Detail Gambar";
		$this->load->view('detail', $data);
	}
}
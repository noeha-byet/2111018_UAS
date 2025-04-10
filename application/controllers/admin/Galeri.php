<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

    public function __construct() {
		parent::__construct(); 
		$this->load->model('M_Galeri');
	}

    public function index() 
    {
        $data['galeri']  = $this->M_Galeri->getDataGambar()->result();
		$data['title'] = "galeri List";
		$this->load->view('galeri/index',$data);
    }

	public function create()
	{
		$this->load->view('galeri/create');
	}

    public function upload(){
		$config['upload_path']          = './uploads/galeri/';
		$config['allowed_types']        = 'png|jpg|gif|jpeg';
		$config['max_size']             = 2048;
		$config['max_width']            = 40000;
		$config['max_height']           = 40000;
		$config['file_name']        	= 'image-'.date('ymd').'-'.substr(md5(rand()),0,10);

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
		{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('admin/galeri', $error);
		}
		else{
			$upload_data = $this->upload->data();
			$name = $upload_data['file_name'];

			$insert = $this->M_Galeri->insertGambar($name);

			if ($insert) {
				redirect('admin/galeri');
			}else{
				echo "Gagal";
			}
		}
	}

    public function hapusFile($id_galeri){
		$this->M_Galeri->hapusFile($id_galeri);
		redirect('admin/galeri');
	}

	public function detail($id_galeri)
	{
		$data['galeri'] = $this->M_Galeri->getGambar($id_galeri);
		$data['title'] = "Detail Gambar";
		$this->load->view('detail', $data);
	}
}
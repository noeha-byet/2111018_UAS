<?php
class M_Galeri extends CI_Model{

    public function getDataGambar(){
        return $this->db->get('galeri');
    }

    public function insertGambar($judul){
        $data = array(
            'gambar' => $judul,
            'deskripsi' => $this->input->post('deskripsi'),
            'title' => $this->input->post('title'),
            'kategori' => $this->input->post('kategori'),
            'client' => $this->input->post('client'),
            'tgl' => $this->input->post('tgl')
        );

        return $this->db->insert('galeri', $data);
    }

    public function hapusFile($id_galeri){
        $this->db->where('id_galeri', $id_galeri);
        return $this->db->delete('galeri');
    }

    public function getDataByID($id_galeri){
        return $this->db->get_where('galeri', array('id_galeri'=>$id_galeri));
    }

    public function getGambar($id_galeri){
		return $this->db->where('id_galeri', $id_galeri)->get('galeri')->row();
	}

    public function updateFile($id_galeri, $data){
        $this->db->where('id_galeri', $id_galeri);
        return $this->db->update('galeri', $data);
    }
    

}


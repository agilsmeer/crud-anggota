<?php
class Anggota_model extends CI_Model{

	function anggota_list(){
		$hasil = $this->db->get('anggota');
		return $hasil->result();
	}

	function simpan_anggota(){
		$data = array(
				'id' 	=> $this->input->post('id'), 
				'nik' 	=> $this->input->post('nik'),
				'nama' 	=> $this->input->post('nama'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'), 
				'tanggal_lahir' => $this->input->post('tanggal_lahir'), 
				'image_file' => $this->input->post('image_file'), 
				'alamat' => $this->input->post('alamat'), 
			);
		$hasil = $this->db->insert('anggota',$data);
		return $hasil;
	}

	function edit_anggota(){
		$id = $this->input->post('id');
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$image_file = $this->input->post('image_file');
		$alamat = $this->input->post('alamat');

		$this->db->set('nik', $nik);
		$this->db->set('nama', $nama);
		$this->db->set('jenis_kelamin', $jenis_kelamin);
		$this->db->set('tanggal_lahir', $tanggal_lahir);
		$this->db->set('image_file', $image_file);
		$this->db->set('alamat', $alamat);
		$this->db->where('id', $id);
		$hasil = $this->db->update('anggota');
		return $hasil;
	}

	function hapus_anggota(){
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$hasil = $this->db->delete('anggota');
		return $hasil;
	}

}
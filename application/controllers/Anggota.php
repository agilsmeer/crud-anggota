<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('anggota_model');
		$this->load->database();
	}

	function data_anggota(){
		$data = $this->anggota_model->anggota_list();
		echo json_encode($data);
	}

	function simpan(){

		if(isset($_FILES["image_file"]["name"]))  
           {  
                $config['upload_path'] = './uploads/';  
                $config['allowed_types'] = 'jpg|jpeg|png|gif';  
                $this->load->library('upload', $config);  
                if(!$this->upload->do_upload('image_file'))  
                {  
                     echo $this->upload->display_errors();  
                }  
                else  
                {  
                     $data = $this->upload->data();  
                     echo '<img src="'.base_url().'uploads/'.$data["file_name"].'" width="300" height="225" class="img-thumbnail" />';  
                }  
           }  

        $data = $this->anggota_model->simpan_anggota();
        echo json_encode($data);
	}

	 function edit(){
        $data = $this->anggota_model->edit_anggota();
        echo json_encode($data);
    }
 
    function hapus(){
        $data = $this->anggota_model->hapus_anggota();
        echo json_encode($data);
    }

	public function index()
	{
		$this->load->view('anggota');
	}
}
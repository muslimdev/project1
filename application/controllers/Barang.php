<?php
class Barang extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_barang');
        if(empty($this->session->userdata('username'))){
            redirect(base_url("index.php/login"));
        }
	}
	function index(){
		$this->load->view('barang/v_barang');
	}

	function data_barang(){
		$data=$this->m_barang->barang_list();
		echo json_encode($data);
	}

	function get_barang(){
        $kobar=$this->input->get('id');
        $data=$this->m_barang->get_barang_by_kode($kobar);
        echo json_encode($data);
    }
 
    function simpan_barang(){
        $idbar=$this->input->post('idbar');
        $nabar=$this->input->post('nabar');
        $harga=$this->input->post('harga');
        $kat=$this->input->post('kat');
        $sat=$this->input->post('sat');
        $stok=$this->input->post('stk');
        $data=$this->m_barang->simpan_barang($idbar, $nabar, $harga, $kat, $sat, $stok);
        echo json_encode($data);
    }
 
    function update_barang(){
        $kobar=$this->input->post('kobar');
        $nabar=$this->input->post('nabar');
        $harga=$this->input->post('harga');
        $kat=$this->input->post('kat');
        $sat=$this->input->post('sat');
        $stok=$this->input->post('stk');
        $data=$this->m_barang->update_barang($kobar,$nabar,$harga,$kat,$sat,$stok);
        echo json_encode($data);
    }
 
    function hapus_barang(){
        $kobar=$this->input->post('kode');
        $data=$this->m_barang->hapus_barang($kobar);
        echo json_encode($data);
    }
}
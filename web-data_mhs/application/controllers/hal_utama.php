<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hal_utama extends CI_Controller {

	public function index()
    {
		//$this->load->view('welcome_message');
		//echo "Hello World";
        // $datanich = $this->db->query("SELECT * FROM matkul");
        // foreach($datanich->result_array() as $matkul){
        //     echo "Kode : ".$matkul["kode"]."<br>";
        //     echo "Nama : ".$matkul["nama"]."<br>";
        //     echo "Sks : ".$matkul["sks"]."<br>";
        //     echo "Syarat : ".$matkul["syarat"]."<br>"."<br>";
        // }

        // $this->load->model('modelku');
        // $matkulMhs = $this->modelku->getMatkul("matkul");
        // $matkul2 = array(
        //         'matkul' => $matkulMhs
        //     );
        //     $this->load->view('Home', $matkul2);

        $this->load->model('modelku');
        $matkulMhs = $this->modelku->getData("matkul");
        $data = array(
            "matkulKu" => $matkulMhs
        );

        $this->load->view("Home", $data);
    }
    
    public function baca_form(){
        $this->load->view('form_tambah');
    }

    public function tambah_data(){
        $this->load->model('modelku');
        $dataInputan = array(
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks'),
            'syarat' => $this->input->post('syarat'),
        );
        $this->modelku->masukkan('matkul', $dataInputan);
        redirect(base_url(), 'refresh');
    }

    public function hapus_data($penunjuk){
        $dataPenunjuk = array(
           'no' => $penunjuk
        );
        $this->load->model('modelku');
        $this->modelku->hapus('matkul', $dataPenunjuk);
        redirect(base_url(), 'refresh');
    }

    public function ambil_Datawhere($penunjuk){
        $dataPenunjuk = array(
            'no' => $penunjuk
         );

        $this->load->model('modelku');
        $matkulMhs = $this->modelku->getData_khusus("matkul", $dataPenunjuk);
        $data = array(
            "matkulKu" => $matkulMhs
        );

        $this->load->view("form_edit", $data);
    }

    public function update_data(){
        $dataInputan = array(
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks'),
            'syarat' => $this->input->post('syarat'),
        );

        $dataPenunjuk = array(
            'no' => $this->input->post('no')
        );
        $this->load->model('modelku');
        $matkulMhs = $this->modelku->perbarui("matkul", $dataInputan, $dataPenunjuk);
        redirect(base_url(), 'refresh');
        
    }
	// public function fungsi(){
	// 	//echo "Halo Duniaaaaa";
	// 	$this->load->view('Home');
	// }

	// public function param($nama){
	// 	//echo "Selamat datang kepada ".$nama;
	// 	$data2 = array(
	// 		'nama' => $nama
	// 	);

	// 	$this->load->view('Home', $data2);
	// }
}

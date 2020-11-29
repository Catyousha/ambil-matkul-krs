<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	var $matkul;

	public function __construct()
	{
			parent::__construct();
			$this->matkul = array(
				//"id" => ["NINF6023","NINF6025","NINF6027","NINF6022","NINF6024","NINF6026","NINF6030","NINF6033","NINF6028","NINF6031","NINF6029","NINF6037","NINF6034","NINF6032","NINF6036","NINF6038","NINF6035","UPKL6090","NINF6100","NINF6044","NINF6056","NINF6055"],
				"data" => array(
							"NINF6003" => [
								"nama_mk" => "K3LH", //NINF6003
								//"jadwal_mk" => "Selasa, 11:00-13:00",
								"sks" => 2,
								"mk_prasyarat" => [
								""
								]
								//'telah_selesai' => false
							],
							"NINF6005" => [
								"nama_mk" => "Sistem Digital", //NINF6005
								//"jadwal_mk" => "Selasa, 11:00-13:00",
								"sks" => 3,
								"mk_prasyarat" => [
								""
								]
								//'telah_selesai' => false
							],
							"NINF6007" => [
								"nama_mk" => "Matematika Diskrit", //NINF6007
								//"jadwal_mk" => "Selasa, 11:00-13:00",
								"sks" => 3,
								"mk_prasyarat" => [
								""
								]
								//'telah_selesai' => false
							],
							"NINF6002" => [
								"nama_mk" => "Kalkulus I", //NINF6002
								//"jadwal_mk" => "Selasa, 11:00-13:00",
								"sks" => 3,
								"mk_prasyarat" => [
								""
								]
								//'telah_selesai' => false
							],
							"NINF6011" => [
								"nama_mk" => "Basis Data I", //NINF6011
								//"jadwal_mk" => "Selasa, 11:00-13:00",
								"sks" => 3,
								"mk_prasyarat" => [
								""
								]
								//'telah_selesai' => false
							],
							"NINF6010" => [
								"nama_mk" => "Organisasi dan Arsitektur Komputer", //NINF6010
								//"jadwal_mk" => "Selasa, 11:00-13:00",
								"sks" => 3,
								"mk_prasyarat" => [
								"NINF6005"
								]
								//'telah_selesai' => false
							],
							"NINF6015" => [
								"nama_mk" => "Sistem Informasi", //NINF6015
								//"jadwal_mk" => "Selasa, 11:00-13:00",
								"sks" => 3,
								"mk_prasyarat" => [
								""
								]
								//'telah_selesai' => false
							],
							"NINF6009" => [
								"nama_mk" => "Kalkulus II", //NINF6009
								//"jadwal_mk" => "Selasa, 11:00-13:00",
								"sks" => 3,
								"mk_prasyarat" => [
								"NINF6002"
								]
								//'telah_selesai' => false
							],
							"NINF6020" => [
								"nama_mk" => "Basis Data II", //NINF6020
								//"jadwal_mk" => "Selasa, 11:00-13:00",
								"sks" => 3,
								"mk_prasyarat" => [
								"NINF6020"
								]
								//'telah_selesai' => false
							],
							"NINF6016" => [
								"nama_mk" => "Pemrograman Web", //NINF6016
								//"jadwal_mk" => "Selasa, 11:00-13:00",
								"sks" => 3,
								"mk_prasyarat" => [
								"NINF6006"
								]
								//'telah_selesai' => false
							],
							"NINF6016" => [
								"nama_mk" => "Teori Bahasa dan Automata", //NINF6016
								//"jadwal_mk" => "Selasa, 11:00-13:00",
								"sks" => 3,
								"mk_prasyarat" => [
								"NINF6006"
								]
								//'telah_selesai' => false
							],
							"NINF6019" => [
								"nama_mk" => "Pemrograman Berorientasi Obyek", //NINF6019
								//"jadwal_mk" => "Selasa, 11:00-13:00",
								"sks" => 3,
								"mk_prasyarat" => [
								"NINF6006"
								]
								//'telah_selesai' => false
							],
							"NINF6021" => [
								"nama_mk" => "Kalkulus Lanjut", //NINF6021
								//"jadwal_mk" => "Selasa, 11:00-13:00",
								"sks" => 3,
								"mk_prasyarat" => [
								"NINF6009"
								]
								//'telah_selesai' => false
							],
							"NINF6017" => [
								"nama_mk" => "Sistem Operasi", //NINF6017
								//"jadwal_mk" => "Selasa, 11:00-13:00",
								"sks" => 3,
								"mk_prasyarat" => [
								""
								]
								//'telah_selesai' => false
							],
							"NINF6004" => [
								"nama_mk" => "Pengantar Teknologi Informasi", //NINF6004
								//"jadwal_mk" => "Selasa, 11:00-13:00",
								"sks" => 2,
								"mk_prasyarat" => [
								""
								]
								//'telah_selesai' => false
							],
							"NINF6006" => [
								"nama_mk" => "Algoritma dan Pemrograman", //NINF6006
								//"jadwal_mk" => "Senin, 07:00-09:00",
								"sks" => 3,
								"mk_prasyarat" => [
								""
								]
								//'telah_selesai' => true
							],
							"NINF6012" => [
								"nama_mk" => "Struktur Data", //NINF6012
								//"jadwal_mk" => "Selasa, 11:00-13:00",
								"sks" => 3,
								"mk_prasyarat" => [
								  "NINF6006"
								]
								//'telah_selesai' => false
							],
							"NINF6014" => [
								"nama_mk" => "Aljabar Linier", //NINF6014
								//"jadwal_mk" => "Selasa, 11:00-13:00",
								"sks" => 3,
								"mk_prasyarat" => [
								  ""
								]
								//'telah_selesai' => false
							],
							"NINF6022" => [
								"nama_mk" => "Probabilitas dan Statistik", //NINF6022
								//"jadwal_mk" => "Selasa, 09:00-11:00",
								"sks" => 3,
								"mk_prasyarat" => [
								  ""
								]
								//'telah_selesai' => true
							],
							"NINF6023" => [
							  "nama_mk" => "Rekayasa Perangkat Lunak", //NINF6023
							  //"jadwal_mk" => "Senin, 12:00-15:00",
							  "sks" => 3,
							  "mk_prasyarat" => [
								""]
								//'telah_selesai' => false
							],
							"NINF6025" => [
							  "nama_mk" => "Komputasi Numerik", //NINF6025
							  //"jadwal_mk" => "Senin, 15:00-17:00",
							  "sks" => 3,
							  "mk_prasyarat" => [
								""
							  ]
							  //'telah_selesai' => true
							],
							"NINF6027" => [
							  "nama_mk" => "Pemrograman Deklaratif", //NINF6027
							  //"jadwal_mk" => "Selasa, 07:00-09:00",
							  "sks" => 3,
							  "mk_prasyarat" => [
								"NINF6006"
							  ]
							  //'telah_selesai' => false
							],
							"NINF6024" => [
							  "nama_mk" => "Komunikasi Data dan Jaringan Komputer", //NINF6024
							  //"jadwal_mk" => "Selasa, 11:00-13:00",
							  "sks" => 3,
							  "mk_prasyarat" => [
								""
							  ]
							  //'telah_selesai' => false
							],
							"NINF6026" => [
							  "nama_mk" => "Grafika Komputer", //NINF6026
							  //"jadwal_mk" => "Selasa, 11:00-13:00",
							  "sks" => 3,
							  "mk_prasyarat" => [
								"NINF6014"
							  ]
							  //'telah_selesai' => false
							],
							"NINF6030" => [
							  "nama_mk" => "Proyek Perangkat Lunak", //NINF6030
							  //"jadwal_mk" => "Senin, 07:00-10:00",
							  "sks" => 3,
							  "mk_prasyarat" => [
								"NINF6023"
							  ]
							  //'telah_selesai' => false
							],
							"NINF6033" => [
							  "nama_mk" => "Analisis dan Desain Sistem",//NINF6033
							  //"jadwal_mk" => "Senin, 10:00-12:00",
							  "sks" => 3,
							  "mk_prasyarat" => [
								"NINF6023"
							  ]
							  //'telah_selesai' => false
							],
							"NINF6028" => [
							  "nama_mk" => "Kecerdasan Buatan",//NINF6028
							  //"jadwal_mk" => "Selasa, 13:00-15:00",
							  "sks" => 3,
							  "mk_prasyarat" => [
								"NINF6006"
							  ]
							  //'telah_selesai' => false
							],
							"NINF6031" => [
							  "nama_mk" => "Analisis dan Desain Algoritma",//NINF6031
							  //"jadwal_mk" => "Selasa, 15:00-17:00",
							  "sks" => 3,
							  "mk_prasyarat" => [
								"NINF6012"
							  ]
							  //'telah_selesai' => false
							],
							"NINF6029" => [
							  "nama_mk" => "Multimedia",//NINF6029
							  //"jadwal_mk" => "Rabu, 07:00-10:00",
							  "sks" => 3,
							  "mk_prasyarat" => [
								""
							  ]
							  //'telah_selesai' => true
							],
							"NINF6037" => [
							  "nama_mk" => "Sosioteknologi Informatika",//NINF6037
							  //"jadwal_mk" => "Rabu, 10:00-12:00",
							  "sks" => 2,
							  "mk_prasyarat" => [
								"NINF6004"
							  ]
							  //'telah_selesai' => false
							],
							"NINF6034" => [
							  "nama_mk" => "Metodologi Penelitian",//NINF6034
							  //"jadwal_mk" => "Rabu, 12:00-14:00",
							  "sks" => 2,
							  "mk_prasyarat" => [
								""
							  ]
							  //'telah_selesai' => false
							],
							"NINF6032" => [
							  "nama_mk" => "Interaksi Manusia dan Komputer",//NINF6032
							  //"jadwal_mk" => "Rabu, 14:00-17:00",
							  "sks" => 3,
							  "mk_prasyarat" => [
								""
							  ]
							  //'telah_selesai' => false
							],
							"NINF6036" => [
							  "nama_mk" => "Mobile dan Wireless Computing",//NINF6036
							  //"jadwal_mk" => "Kamis, 07:00-10:00",
							  "sks" => 3,
							  "mk_prasyarat" => [
								"NINF6024"
							  ]
							],
							"NINF6035" => [
							  "nama_mk" => "Technopreneurship",//NINF6035
							  //"jadwal_mk" => "Kamis, 12:00-14:00",
							  "sks" => 2,
							  "mk_prasyarat" => [
								""
							  ]
							  //'telah_selesai' => true
							],
							"NINF6044" => [
							  "nama_mk" => "Proyek Game",//NINF6044
							  //"jadwal_mk" => "Jumat, 10:00-13:00",
							  "sks" => 3,
							  "mk_prasyarat" => [
								""
							  ]
							  //'telah_selesai' => false
							],
							"NINF6056" => [
							  "nama_mk" => "Semantic Web",//NINF6056
							  //"jadwal_mk" => "Jumat, 13:00-16:00",
							  "sks" => 3,
							  "mk_prasyarat" => [
								""
							  ]
							  //'telah_selesai' => false
							],
							"NINF6055" => [
							  "nama_mk" => "Computer Vision",//NINF6055
							  //"jadwal_mk" => "Jumat, 13:00-16:00",
							  "sks" => 3,
							  "mk_prasyarat" => [
								""
							  ]
							  //'telah_selesai' => false
							],
							)

			);
	}

	public function index()
	{
		if(!$this->session->has_userdata('Nama')){
			redirect('/login');
		}
		error_reporting(E_ALL & ~E_NOTICE);
		$data['matkul'] = $this->matkul['data'];
		//		var_dump($data['matkul']['NINF6055']['mk_prasyarat']); die;
		$data['title'] = 'Ambil KRS | Rancang KRS';
		$this->load->view('main-page/include/head.php', $data);
		$this->load->view('main-page/include/head-navbar.php', $data);
		$this->load->view('main-page/page/main.php', $data);
		$this->load->view('main-page/include/foot.php', $data);
		if(isset($_POST['ambil_matkul'])){
			if(!empty($_POST['ambil_matkul'])){
				$idMatkulDiambil = $_POST['ambil_matkul'];
				$listMatkulPrasyarat = array();
				$total_sks = 0;
				foreach($_POST['ambil_matkul'] as $amk){
					$mkPrasyarat = $data['matkul'][$amk]['mk_prasyarat'][0];
					$total_sks += $data['matkul'][$amk]['sks'];
					if(strlen($mkPrasyarat) > 1 && !in_array($mkPrasyarat, $idMatkulDiambil)){
						$listMatkulPrasyarat[$mkPrasyarat] = $amk;
					}
				}
				if($total_sks > 24){
					$this->session->set_flashdata('maxSKS', true);
					redirect('');
				}
				$this->session->set_userdata('matkulambil', $idMatkulDiambil);
				$this->session->set_userdata('matkulprasyarat', $listMatkulPrasyarat);
				$this->session->set_userdata('SKS', $total_sks);
				redirect('/result');
			}
		}
	}

	public function result(){
		if(!$this->session->has_userdata('Nama')){
			redirect('/login');
		}
		$data['title'] = 'Hasil | Rancang KRS';
		$data['diambil'] = $this->session->userdata('matkulambil');
		$data['prasyarat'] = $this->session->userdata('matkulprasyarat');
		$data['sks'] = $this->session->userdata('SKS');
		$data['jadwal'] = ['Senin, 1-3','Senin, 4-6','Senin, 7-9',
						   'Selasa, 1-3','Selasa, 4-6','Selasa, 7-9',
						   'Rabu, 1-3','Rabu, 4-6','Rabu, 7-9',
						   'Kamis, 1-3','Kamis, 4-6','Kamis, 7-9',
						   'Jumat, 1-3','Jumat, 4-6','Jumat, 7-9'];
		$this->load->view('main-page/include/head.php', $data);
		$this->load->view('main-page/include/head-navbar.php', $data);
		$this->load->view('main-page/page/result.php', $data);
		$this->load->view('main-page/include/foot.php', $data);
	}

	public function login(){
		
		$data['title'] = 'Login | Rancang KRS';
		$data['mhs'] = array(
			'190535746102' => array(
				'nama' => 'Angga Dian Permana Putra',
				'pass' => '12345678'
			),
			'190535646020' => array(
				'nama' => 'Jaka Asa Baldan Ahmad',
				'pass' => '87654321'
			),
			'190535646006' => array(
				'nama' => 'Rizki Indah Pertiwi',
				'pass' => '123123123'
			),
			'190535646077' => array(
				'nama' => 'Sylvia Helmi Nurjannah',
				'pass' => '321321321'
			)
		);
		
		$this->load->view('main-page/include/head', $data);
		$this->load->view('main-page/page/login', $data);
		
		$nim = $this->input->post('f_nim');
		$pass = $this->input->post('f_pass');
		if(isset($_POST['tryLogin'])){
			
			if(!key_exists($nim, $data['mhs'])){
				$this->session->set_flashdata('NimNotFound', true);
				redirect('/login');
			}
			else{
				if($pass != $data['mhs'][$nim]['pass']){
					$this->session->set_flashdata('WrongPass', true);
					redirect('/login');
				}
				else{
					//session_destroy();
					$this->session->set_userdata('Nama', $data['mhs'][$nim]['nama']);
					redirect('');
				}
			}
		}

	}
}

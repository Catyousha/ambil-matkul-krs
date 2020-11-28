<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {




	public function index()
	{

		$data['title'] = 'Ambil KRS';
		$this->load->view('main-page/include/head.php', $data);
		$this->load->view('main-page/page/main.php', $data);
		$this->load->view('main-page/include/foot.php', $data);
	}
}

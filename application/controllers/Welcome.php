<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('view/index.php');
	}

	public function kelola_data()
	{
		$this->load->view('view/kelola_data.php');
	}

	public function tagihan()
    {
		$data['tampil'] = $this->Tagihan_model->tampil();
        $this->load->view('view/kelola_data.php');
	}
}
?>

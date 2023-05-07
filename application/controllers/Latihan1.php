<?php
class Latihan1 extends CI_Controller
{

 	public function index()
	{
		echo "Selamat Datang.. selamat belajar Web Programming";
	}

	public function penjumlahan($n1, $n2)
 	{
		$this->load->model('Model_latihan1');
		$data['nilai1'] = $n1;
		$data['nilai2'] = $n2;
		$data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);
		$this->load->view('view-latihan1', $data);
		
		// $this->load->model('Model_latihan1');
		// $hasil = $this->Model_latihan1->jumlah($n1, $n2);
		// $hasil_pengurangan = $this->Model_latihan1->pengurangan($n1, $n2);
		// echo "Hasil Penjumlahan dari ". $n1 ." + ". $n2 ." = ".$hasil;
		// echo "<br> Hasil Pengurangan dari ". $n1 ." - ". $n2 ." = ".$hasil_pengurangan;
	}


}
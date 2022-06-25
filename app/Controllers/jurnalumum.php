<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class jurnalumum extends BaseController
{
	public function __construct(Type $var = null) {
		$this->db = db_connect();
	}

	public function index(){
		$data['month'] = [
			1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April', 5=> 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus', 9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
		];
		$data['year'] = [];
		for ($i=2018; $i <= 2022 ; $i++) { 
			array_push($data['year'], $i);
		}

		$year = !isset($_GET['year']) || $_GET['year'] == "" ? date('Y') : $_GET['year'];
		$month = !isset($_GET['month']) || $_GET['month'] == "" ? date('m') : $_GET['month'];
		// var_dump($month);
		// die();
		$data['list'] = $this->db->query("SELECT a.id_transaksi, a.kode_akun, a.tgl_jurnal, a.posisi_d_c, a.nominal, b.nama_akun 
			FROM jurnal a
			LEFT JOIN akun b ON a.kode_akun = b.kode_akun where YEAR(a.tgl_jurnal) = ${year} and month(a.tgl_jurnal) = ${month} order by a.id asc")->getResult();

		// var_dump($data['list']);
		// die();

		echo view('jurnalumum/index', $data);
	}
}
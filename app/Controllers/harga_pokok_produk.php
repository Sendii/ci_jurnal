<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class harga_pokok_produk extends BaseController
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

		$data['bb'] = $this->db->query("SELECT SUM(total_bb) as total_bb FROM bb where YEAR(tgl_bb) = ${year} and month(tgl_bb) = ${month}")->getRow();
		$data['bop'] = $this->db->query("SELECT SUM(total_bop) as total_bop FROM bop where YEAR(tgl_bop) = ${year} and month(tgl_bop) = ${month}")->getRow();
		$data['btkl'] = $this->db->query("SELECT SUM(total_btkl) as total_btkl FROM btkl where YEAR(tgl_btkl) = ${year} and month(tgl_btkl) = ${month}")->getRow();
		
		$data['total_biaya'] = $data['bb']->total_bb + $data['bop']->total_bop + $data['btkl']->total_btkl;
		echo view('harga_pokok_produk/index', $data);
	}
}
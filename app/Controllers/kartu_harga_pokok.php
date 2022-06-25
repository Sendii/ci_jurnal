<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class kartu_harga_pokok extends BaseController
{
	public function __construct(Type $var = null) {
		$this->db = db_connect();
	}

	public function index(){
		$list = $this->db->table('produksi')->orderBy('id', 'desc')->where('status', 'Diproduksi')->get()->getResult();

		// $bop = $this->db->query("SELECT *
		// FROM bahan_baku a
		// JOIN detail_produksi_bop b ON a.id_bahanbaku = b.id_bop
		// WHERE id_produksi = 'PRD-001'")->getResult();
		$bop = $this->db->query("SELECT *
			FROM bahan_baku a
			JOIN detail_produksi_bop b ON a.id_bahanbaku = b.id_bop")->getResult();
		$data = [
			'list' => $list,
			'bop' => $bop,
		];
		echo view('kartu_harga_pokok/index', $data);
	}

	public function pokok_pesanan($id){
		$data['pesanan'] = $this->db->table('produksi')->where('id_produksi', $id)->get()->getRow();

		$data['totalBb'] = $this->db->table('bb')->where('id_produksi', $id)->get()->getRow()->total_bb;
		$data['totalBop'] = $this->db->table('bop')->where('id_produksi', $id)->get()->getRow()->total_bop;
		$data['totalBtkl'] = $this->db->table('btkl')->where('id_produksi', $id)->get()->getRow()->total_btkl;
		$data['totalKeseluruhan'] = $data['totalBb'] + $data['totalBop'] +$data['totalBtkl'];
		


		$data['bahan_baku'] = $this->db->query("SELECT b.nama_bahanbaku, b.satuan_bb, b.harga_bb, a.qty, a.total
			FROM detail_produksi_bb a
			JOIN bahan_baku b ON a.id_bb = b.id_bahanbaku where a.id_produksi= '{$id}' ")->getResult();

		$data['bop'] = $this->db->query("SELECT b.nama_bahanbaku as nama_bop,c.nama_overhead as nama_overhead, b.satuan_bb as satuan_bb_bop, c.satuan_overhead as satuan_bb_overhead, b.harga_bb as harga_bb, c.harga_overhead as harga_overhead, a.qty, a.total
			FROM detail_produksi_bop a
			LEFT JOIN bahan_baku b ON a.id_bop = b.id_bahanbaku
			LEFT JOIN overhead c ON a.id_overhead = c.id_overhead
			where a.id_produksi= '{$id}' ")->getResult();
		// var_dump($data['bop']);
		// die;

		$data['btk'] = $this->db->query("SELECT b.nama_karyawan,a.nominal,a.jumlah_hari,a.total
			FROM detail_produksi_btk a
			JOIN karyawan b ON a.id_karyawan = b.id_karyawan where a.id_produksi= '{$id}' ")->getResult();
		echo view('kartu_harga_pokok/pokok_pesanan', $data);
	}
}
<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Produksi extends BaseController
{
	public function __construct(Type $var = null) {
		$this->db = db_connect();
	}

	public function index()
	{
		$list = $this->db->table('produksi')->get()->getResult();

		$bop = $this->db->query("SELECT *
		FROM bahan_baku a
		JOIN detail_produksi_bop b ON a.id_bahanbaku = b.id_bop
		WHERE id_produksi = 'PRD-001'")->getResult();
		$data = [
			'list' => $list,
			'bop' => $bop,
		];
		echo view('produksi/index', $data);
	}

	public function add()
	{
		$bahan_baku = $this->db->table('bahan_baku')->where('jenis_bb =', 'Bahan Baku')->get()->getResult();
		$bop = $this->db->table('bahan_baku')->where('jenis_bb =', 'Bahan Penolong')->get()->getResult();
		$karyawan = $this->db->table('karyawan')->get()->getResult();
		$kode = $this->kode();
		// print_r($bahan_baku);exit;
		$data = [
			'bahan_baku' => $bahan_baku, 
			'bop' => $bop, 
			'karyawan' => $karyawan, 
			'kode' => $kode, 
		];
		echo view('produksi/add', $data);
	}

	public function find_by_id()
	{
		$id = $this->request->getPost('id');
		$data = $this->db->table('bahan_baku')
		->where('id_bahanbaku', $id)->get()->getRow();

		echo json_encode($data);
	}

	public function bop()
	{
		$id = $this->request->getPost('id');
		$data = $this->db->table('bahan_baku')
		->where('id_bahanbaku', $id)->get()->getRow();

		echo json_encode($data);
	}

	public function simpan()
	{
		$kode_produksi = $this->request->getPost('kode_produksi');
		$tanggal       = $this->request->getPost('tanggal');
		$produk        = $this->request->getPost('produk');

		// bb 
		$bahan_baku = $this->request->getPost('bahan_baku');
		$harga_bb = $this->request->getPost('harga_bb');
		$qty = $this->request->getPost('qty');
		$subtotal = $this->request->getPost('subtotal');

		// bop 
		$bop = $this->request->getPost('bop');
		$harga_bop = $this->request->getPost('harga_bop');
		$qty_bop = $this->request->getPost('qty_bop');
		$total_bop = $this->request->getPost('total_bop');
		$t_bop = 0;
		foreach ($total_bop as $item) {
			$t_bop += $item;
		}


		// btk
		$btk = $this->request->getPost('btk');
		$nominal = $this->request->getPost('nominal');
		$qty_btk = $this->request->getPost('qty_btk');
		$total = $this->request->getPost('total');
		$t_btk = 0;
		foreach ($total as $item) {
			$t_btk += $item;
		}

		$q_bp = $this->request->getPost('q_bp');

		$total_transaksi = (($subtotal + $t_bop + $t_btk)*$q_bp);

		$produksi = [
			'id_produksi' => $kode_produksi,
			'tanggal' => $tanggal,
			'produk'      =>$produk,
			'q_bp'    =>$q_bp,
			'total' => $total_transaksi,
		];
		$this->db->table('produksi')->insert($produksi);

		$data_bb = [
			'id_produksi' => $kode_produksi,
			'id_bb' => $bahan_baku,
			'nominal' => $harga_bb,
			'qty' => $qty,
			'total' => $subtotal,
		];
		// $data_bb = [];
		// foreach ($bahan_baku as $key => $value) {
		// 	$data_bb[$key] = [
		// 		'id_produksi' => $kode_produksi,
		// 		'id_bb' => $value,
		// 		'nominal' => $harga_bb[$key],
		// 		'qty' => $qty[$key],
		// 		'total' => $subtotal[$key],
		// 	];
		// }
		$this->db->table('detail_produksi_bb')->insert($data_bb);

		// $data_bop = [
		// 	'id_produksi' => $kode_produksi,
		// 	'id_detail_bb' => $bahan_baku,
		// 	'id_bop' => $bop,
		// 	'nominal' => $harga_bop,
		// 	'qty' => $qty_bop,
		// 	'total' => $total_bop,
		// ];
		$data_bop = [];
		foreach ($bop as $key => $value) {
			$data_bop[$key] = [
				'id_produksi' => $kode_produksi,
				'id_detail_bb' => $bahan_baku,
				'id_bop' => $value,
				'nominal' => $harga_bop[$key],
				'qty' => $qty_bop[$key],
				'total' => $total_bop[$key],
			];
			// print_r($data_bop);exit;
		}
		$this->db->table('detail_produksi_bop')->insertBatch($data_bop);
		// for ($i=0; $i < count($bop); $i++) { 
		// 	$data_bop = [
		// 		'id_produksi' => $kode_produksi,
		// 		'id_detail_bb' => $bahan_baku,
		// 		'id_bop' => $bop,
		// 		'nominal' => $harga_bop,
		// 		'qty' => $qty_bop,
		// 		'total' => $total_bop,
		// 	];
		// 	$this->db->table('detail_produksi_bop')->insertBatch($data_bop);
		// }


		$data_btk = [];
		foreach ($btk as $key => $value) {
			$data_btk[$key] = [
				'id_produksi' => $kode_produksi,
				'id_detail_bb' => $bahan_baku,
				'id_karyawan' => $value,
				'nominal' => $nominal[$key],
				'jumlah_hari' => $qty_btk[$key],
				'total' => $total[$key],
			];
		}
		$this->db->table('detail_produksi_btk')->insertBatch($data_btk);
		// for ($i=0; $i < count($data_btk) ; $i++) { 
		// 	$data_btk = [
		// 		'id_produksi' => $kode_produksi,
		// 		'id_detail_bb' => $bahan_baku,
		// 		'id_karyawan' => $btk,
		// 		'nominal' => $nominal,
		// 		'jumlah_hari' => $qty_btk,
		// 		'total' => $total,
		// 	];
		// 	$this->db->table('detail_produksi_btk')->insertBatch($data_btk);
		// }

		return redirect()->to(base_url('Produksi'));
	}

	public function kode()
	{
		$builder = $this->db->table('produksi')
        ->select('MAX(RIGHT(produksi.id_produksi,3)) as kode')
        // ->where('status !=', 'proses')
        ->limit(1)
        ->get();
        if ($builder->getNumRows() <> 0 ) {
            # code... 
            $data = $builder->getRow();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = '001';
        }
        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kd = "PRD-".$kodemax;
        // print_r($kd);exit;
        return $kd;
	}
}

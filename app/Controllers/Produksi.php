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
		$list = $this->db->table('produksi')->orderBy('id', 'desc')->get()->getResult();

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
		echo view('produksi/index', $data);
	}

	public function save_produksi($produksi_id){
		$this->db->query("UPDATE produksi SET  status =? WHERE id_produksi =? ", array('Diproduksi', $produksi_id ));
		$totalBb = $this->db->table('bb')->where('id_produksi =', $produksi_id)->limit(1)->get()->getRow()->total_bb;
		$totalBtkl = $this->db->table('btkl')->where('id_produksi =', $produksi_id)->limit(1)->get()->getRow()->total_btkl;
		$totalBop = $this->db->table('bop')->where('id_produksi =', $produksi_id)->limit(1)->get()->getRow()->total_bop;
		$arrJurnalProduksi = [
			[
				'id_transaksi' => $produksi_id,
				'kode_akun'    => 115,
				'tgl_jurnal'   => date('Y-m-d'),
				'posisi_d_c'   => 'd',
				'nominal'      => $totalBb + $totalBtkl +$totalBop
			],
			[
				'id_transaksi' => $produksi_id,
				'kode_akun'    => 121,
				'tgl_jurnal'   => date('Y-m-d'),
				'posisi_d_c'   => 'k',
				'nominal'      => $totalBb
			],
			[
				'id_transaksi' => $produksi_id,
				'kode_akun'    => 122,
				'tgl_jurnal'   => date('Y-m-d'),
				'posisi_d_c'   => 'k',
				'nominal'      => $totalBtkl
			],
			[
				'id_transaksi' => $produksi_id,
				'kode_akun'    => 123,
				'tgl_jurnal'   => date('Y-m-d'),
				'posisi_d_c'   => 'k',
				'nominal'      => $totalBop
			]
		];
		$this->db->table('jurnal')->insertBatch($arrJurnalProduksi);
		
		return redirect()->to(base_url('Produksi'));
	}

	public function add()
	{
		$bahan_baku = $this->db->table('bahan_baku')->where('jenis_bb =', 'Bahan Baku')->get()->getResult();
		$bop        = $this->db->table('bahan_baku')->where('jenis_bb =', 'Bahan Penolong')->get()->getResult();
		$overhead   = $this->db->table('overhead')->get()->getResult();
		$karyawan   = $this->db->table('karyawan')->get()->getResult();
		$kode = $this->kode();
		// print_r($bahan_baku);exit;
		$data = [
			'bahan_baku' => $bahan_baku, 
			'bop'        => $bop, 
			'overhead'   => $overhead,
			'karyawan'   => $karyawan, 
			'kode'       => $kode, 
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
	
	public function overhead()
	{
		$id = $this->request->getPost('id');
		$data = $this->db->table('overhead')
		->where('id_overhead', $id)->get()->getRow();

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

		$insBb = [
			'id_produksi' => $kode_produksi,
			'total_bb' => $subtotal,
			'tgl_bb'   => date('Y-m-d')
		];
		$this->db->table('bb')->insert($insBb);
		
		

		// bop 
		$bop = $this->request->getPost('bop');
		$harga_bop = $this->request->getPost('harga_bop');
		$qty_bop = $this->request->getPost('qty_bop');
		$total_bop = $this->request->getPost('total_bop');
		$t_bop = 0;
		foreach ($total_bop as $item) {
			$t_bop += $item;
		}

		

		// Overhead
		$overhead = $this->request->getPost('overhead');
		$harga_overhead= $this->request->getPost('harga_overhead');
		$qty_overhead = $this->request->getPost('qty_overhead');
		$total_overhead = $this->request->getPost('total_overhead');
		$t_overhead = 0;
		foreach ($total_overhead as $item) {
			$t_overhead += $item;
		}

		$insBop = [
			'id_produksi' => $kode_produksi,
			'total_bop' => $t_bop + $t_overhead,
			'tgl_bop'   => date('Y-m-d')
		];

		$this->db->table('bop')->insert($insBop);

		// btk
		$btk = $this->request->getPost('btk');
		$nominal = $this->request->getPost('nominal');
		$qty_btk = $this->request->getPost('qty_btk');
		$total = $this->request->getPost('total');
		$t_btk = 0;
		foreach ($total as $item) {
			$t_btk += $item;
		}

		$insBtkl = [
			'id_produksi' => $kode_produksi,
			'total_btkl' => $t_btk,
			'tgl_btkl'   => date('Y-m-d')
		];
		$this->db->table('btkl')->insert($insBtkl);


		$q_bp = $this->request->getPost('q_bp');

		$total_transaksi = $subtotal + $t_bop + $t_overhead + $t_btk;

		$produksi = [
			'id_produksi' => $kode_produksi,
			'tanggal' => $tanggal,
			'produk'      =>$produk,
			'q_bp'    =>$q_bp,
			'total' => $total_transaksi,
			'total_harga' => $q_bp * $total_transaksi
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

		$data_overhead = [];
		foreach ($overhead as $key => $value) {
			$data_overhead[$key] = [
				'id_produksi' => $kode_produksi,
				'id_detail_bb' => $bahan_baku,
				'id_overhead' => $value,
				'nominal' => $harga_overhead[$key],
				'qty' => $qty_overhead[$key],
				'total' => $total_overhead[$key],
			];
		}

		$this->db->table('detail_produksi_bop')->insertBatch($data_overhead);
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

		$dataJurnal = [
			[
				'id_transaksi' => $kode_produksi,
				'kode_akun'    => 121,
				'tgl_jurnal'   => date('Y-m-d'),
				'posisi_d_c'   => 'd',
				'nominal'      => $subtotal
			],
			[
				'id_transaksi' => $kode_produksi,
				'kode_akun'    => 113,
				'tgl_jurnal'   => date('Y-m-d'),
				'posisi_d_c'   => 'k',
				'nominal'      => $subtotal
			],
			[
				'id_transaksi' => $kode_produksi,
				'kode_akun'    => 122,
				'tgl_jurnal'   => date('Y-m-d'),
				'posisi_d_c'   => 'd',
				'nominal'      => $t_btk
			],
			[
				'id_transaksi' => $kode_produksi,
				'kode_akun'    => 616,
				'tgl_jurnal'   => date('Y-m-d'),
				'posisi_d_c'   => 'k',
				'nominal'      => $t_btk
			],
			[
				'id_transaksi' => $kode_produksi,
				'kode_akun'    => 123,
				'tgl_jurnal'   => date('Y-m-d'),
				'posisi_d_c'   => 'd',
				'nominal'      => $t_bop + $t_overhead
			],
			[
				'id_transaksi' => $kode_produksi,
				'kode_akun'    => 515,
				'tgl_jurnal'   => date('Y-m-d'),
				'posisi_d_c'   => 'k',
				'nominal'      => $t_bop + $t_overhead
			]
		];
		$this->db->table('jurnal')->insertBatch($dataJurnal);
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

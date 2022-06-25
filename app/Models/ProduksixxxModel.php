<?php

namespace App\Models;

use CodeIgniter\Model;

class ProduksiModel extends Model{
    protected $table = 'targetcosting';

    public function getAll(){
        $dbResult = $this->db->query("SELECT * FROM produksi");
        return $dbResult->getResult();
    }

    //untuk memasukkan data pembayaran
    public function setorProduksi(){

        //mendapaatkan id_transaksi terakhir dari seluruh transaksi
        //$dbResult = $this->db->query("SELECT IFNULL(MAX(id_transaksi),0) as id_transaksi from view_transaksi");

       // $hasil = $dbResult->getResult();
        //cacah hasilnya
       // foreach ($hasil as $row)
        //{
        //    $id_transaksi = $row->id_transaksi;
        //}

        //$id_transaksi = $id_transaksi+1; //naikkan 1 untuk id baru modal yang dimasukkan
		    $id_produksi    = $_POST['id_produksi'];
			$waktu           = $_POST['waktu'];
            $nama_bahanbaku  = $_POST['nama_bahanbaku'];
			$satuan_bb       = $_POST['satuan_bb'];
			$qty_bb          = $_POST['qty_bb'];
			$harga_bb        = $_POST['harga_bb'];
			$jenis_bb        = $_POST['jenis_bb'];
            $total_bbb       = $_POST['total_bbb'];
			$nama_bop        = $_POST['nama_bop'];
			$qty_bop         = $_POST['qty_bop'];
			$satuan_bop      = $_POST['satuan_bop'];
			$harga_bop       = $_POST['harga_bop'];
			$nama_karyawan   = $_POST['nama_karyawan'];
			$qty_karyawan    = $_POST['qty_karyawan'];
			$satuan_karyawan = $_POST['satuan_karyawan'];
			$harga_karyawan  = $_POST['harga_karyawan'];
			$total           = $_POST['total'];
      
	  
        $hasil           = $this->db->query("INSERT INTO produksi SET id_produksi = ?,
		nama_bahanbaku = ?, satuan_bb = ?, qty_bb =?,harga_bb = ?,jenis_bb = ?,total_bbb = ?,
        nama_bop = ?, qty_bop = ?, satuan_bop = ?, harga_bop = ?,
        nama_karyawan =?, 	qty_karyawan = ?, satuan_karyawan = ?, harga_karyawan = ?, total = ? ",	

         array($id_produksi,$nama_bahanbaku,$satuan_bb,$qty_bb , $harga_bb , $jenis_bb,  $total_bbb ,
				$nama_bop, $qty_bop, $satuan_bop, $harga_bop, $nama_karyawan, $qty_karyawan  , $satuan_karyawan, $harga_karyawan, $total));
        
        //masukkan ke jurnal
        /*$sql = "    INSERT INTO jurnal(`id_transaksi`, `kode_akun`, `tgl_jurnal`, `posisi_d_c`, `nominal`, `kelompok`, `transaksi`)
                    SELECT a.id_transaksi, b.kode_akun, a.waktu, b.posisi,a.gaji,b. kelompok, b.transaksi
                    FROM pembayaran a
                    CROSS JOIN transaksi_coa b
                    WHERE a.id_transaksi = ? AND b.transaksi = 'pembayaran' AND b.kelompok = 6;
            ";
    $hasil = $this->db->query($sql, array($id_transaksi));*/
        return $hasil;
    }
  
    //delete pembayaran
   // public function deletepembayaran($id_transaksi){
    //    $hasil = $this->db->query("DELETE FROM pembayaran WHERE id_transaksi =? ", array($id_transaksi));
    ///    $hasil = $this->db->query("DELETE FROM jurnal WHERE id_transaksi =? ", array($id_transaksi));
    //    return $hasil;
   // }

}
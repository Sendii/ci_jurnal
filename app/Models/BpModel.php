<?php

namespace App\Models;

use CodeIgniter\Model;

class produksimodel extends Model
{
    protected $table = 'produksi';

    //untuk menginputkan pembelian dan penjurnalan
    public function inputProduksi(){
        $kodeProduk = $_POST['kodeProduk'];
        //$id_permintaan = $_POST['id_permintaan'];
        $harga_bb       = $_POST['harga_bb']; 
		$harga_bop      = $_POST['harga_bb'];
		$harga_karyawan = $_POST['harga_karyawan'];
        $tanggal        = $_POST['tanggal'];
		
        
        //jangan lupa jika memakai masking maka dihilangkan dulu nilai maskingnya agar yang masuk ke db adalah murni numeriknya
        $harga_bb = preg_replace( '/[^0-9 ]/i', '', $harga_bb);
		$harga_bop = preg_replace( '/[^0-9 ]/i', '', $harga_bop);
		$harga_karyawan = preg_replace( '/[^0-9 ]/i', '', $harga_karyawan);
		

        /*dapatkan id transaksi untuk pembelian
        $dbResult = $this->db->query("SELECT IFNULL(MAX(id_transaksi),0) as id_transaksi from view_transaksi");

        $hasil = $dbResult->getResult();
        //cacah hasilnya
        foreach ($hasil as $row)
        {
            $id_transaksi = $row->id_transaksi;
        }
            $id_transaksi = $id_transaksi+1; //naikkan 1 untuk id baru modal yang dimasukkan


         //pencatatan jurnal pada saat pembayaran beban menggunakan metode hard code
         $sql = "    INSERT INTO jurnal(`id_transaksi`, `kode_akun`, `tgl_jurnal`, `posisi_d_c`, `nominal`, `kelompok`, `transaksi`)
                     VALUES(?, '412', ?,'d', ?, 1, 'pembeli')
                ";
         $hasil = $this->db->query($sql, array($id_transaksi, $kodebeban, $waktu, $biaya));

         $sql = "    INSERT INTO jurnal(`id_transaksi`, `kode_akun`, `tgl_jurnal`, `posisi_d_c`, `nominal`, `kelompok`, `transaksi`)
                     VALUES(?,'111', ?,'c', ?, 1,'pembeli')
                ";
         $hasil = $this->db->query($sql, array($id_transaksi, $waktu, $biaya));*/

        return $hasil;
    }
    
   //untuk mendapatkan data kode Beli
   public function getProduksiData(){
    $dbResult = $this->db->query("SELECT * FROM produksi WHERE id_bahanbaku LIKE 'Bb%' AND length(id_bahanbaku)>1");
	   //// $dbResult = $this->db->query("SELECT * FROM bahan_baku WHERE id_bahanbaku LIKE 'Bb%' AND length(id_bahanbaku)>1");
		    $dbResult = $this->db->query("SELECT * FROM bahan_baku WHERE id_bahanbaku LIKE 'Bb%' AND length(id_bahanbaku)>1");
    return $dbResult->getResult();
}

 //untuk mendapatkan data list Beli
 public function getListProduksi(){
    $dbResult = $this->db->query("SELECT * FROM produksi");
    return $dbResult->getResult();
}

 /*untuk mendapatkan data list Beli
 public function getPermintaan(){
    $dbResult = $this->db->query("SELECT * FROM permintaan WHERE id_permintaan LIKE 'R%' AND length(id_permintaan)>1");
    return $dbResult->getResult();
}

    public function inputJurnal(){
         $sql = "    INSERT INTO jurnal(`id_transaksi`, `kode_akun`, `tgl_jurnal`, `posisi_d_c`, `nominal`, `kelompok`, `transaksi`)
                     VALUES(?, '111', ?, 'd', ?, 1,'pembeli')
                ";
         $hasil = $this->db->query($sql, array($id_transaksi, $kodebeban, $waktu, $biaya));

         $sql = "    INSERT INTO jurnal(`id_transaksi`, `kode_akun`, `tgl_jurnal`, `posisi_d_c`, `nominal`, `kelompok`, `transaksi`)
                     VALUES(?, '411', ?, 'c', ?, 1,'pembeli')
                ";
         $hasil = $this->db->query($sql, array($id_transaksi, $waktu, $biaya));

        return $hasil;
    }*/

}
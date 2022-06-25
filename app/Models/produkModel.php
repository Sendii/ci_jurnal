<?php

namespace App\Models;

use CodeIgniter\Model;

class produkModel extends Model
{
    protected $table = 'produk';

    public function getAll(){
        return $this->findAll();
    }
    
    public function getAll2(){
        $sql = "SELECT a.*,b.nama_kategori,c.nama_suplier,d.nama_karyawan 
FROM `produk` a 
LEFT OUTER JOIN kategori b ON (a.kode_kategori=b.kode_kategori)
LEFT OUTER JOIN supplier c ON (a.id_supplier=c.id_supplier)
LEFT OUTER JOIN karyawan d ON (a.id_karyawan=d.id_karyawan)";
        $dbResult = $this->db->query($sql, array());
        return $dbResult->getResult('array');
    }

    //method untuk input data
    //dokumen dan gambar menjadi paramter inputan karena namanya sudah diganti
    public function insertData($gbr){
        $kode_produk    = $_POST['kode_produk'];
        $nama_produk    = $_POST['nama_produk'];
        $stok           = $_POST['stok'];
        //$harga_produk   = $_POST['harga_produk'];
        $harga_produk = preg_replace( '/[^0-9 ]/i', '', $_POST['harga_produk']);
        $kode_kategori  = $_POST['kode_kategori'];
        $id_supplier    = $_POST['id_supplier'];
        $id_karyawan    = $_POST['id_karyawan'];

        // //jangan lupa jika memakai masking maka dihilangkan dulu nilai maskingnya agar yang masuk ke db adalah murni numeriknya
        // $harga_produk = preg_replace( '/[^0-9 ]/i', '', $harga_produk);

        $hasil = $this->db->query("INSERT INTO produk SET kode_produk= ?, nama_produk= ?, stok= ?, harga_produk= ?, gambar= ?, kode_kategori= ?, id_supplier= ?, id_karyawan= ?", 
                            array($kode_produk, $nama_produk, $stok, $harga_produk, $gbr, $kode_kategori, $id_supplier, $id_karyawan));
        return $hasil;
    }
    //untuk mendapatkan data produk harian sesuai dengan id untuk diedit
    public function editData($id){
        $dbResult = $this->db->query("SELECT * FROM produk WHERE id = ?", array($id));
        return $dbResult->getResult();
    }
    //untuk mendapatkan data produk sesuai dengan id untuk diedit
    public function updateData($gbr){
        $id             = $_POST['id'];
        $kode_produk    = $_POST['kode_produk'];
        $nama_produk    = $_POST['nama_produk'];
        $stok           = $_POST['stok'];
        //$harga_produk   = $_POST['harga_produk'];
        $harga_produk = preg_replace( '/[^0-9 ]/i', '', $_POST['harga_produk']);
        $kode_kategori  = $_POST['kode_kategori'];
        $id_supplier    = $_POST['id_supplier'];
        $id_karyawan    = $_POST['id_karyawan'];
        $hasil = $this->db->query("UPDATE produk SET kode_produk= ?, nama_produk= ?, stok= ?, harga_produk= ?, gambar= ?, kode_kategori= ?, id_supplier= ?, id_karyawan= ? 
                                   WHERE id =? ", array($kode_produk, $nama_produk, $stok, $harga_produk, $gbr, $kode_kategori, $id_supplier, $id_karyawan, $id));
        return $hasil;
    }
    //untuk menghapus data produk sesuai id yang dipilih
    public function deleteData($id){
        $hasil = $this->db->query("DELETE FROM produk WHERE id =? ", array($id));
        return $hasil;
         foreach ($hasil as $row)
        {
            $nama_file_gambar = $row->gambar;
        }
        if(is_file(FCPATH.'dokumen/upload/'.$nama_file_gambar)){
            unlink(FCPATH.'dokumen/upload/'.$nama_file_gambar); //delete file gambar
        }
    }
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class BopModel extends Model
{
    protected $table = 'bop';

    public function getAll(){
        return $this->findAll();
    }

    //method untuk input data
    //dokumen dan gambar menjadi paramter inputan karena namanya sudah diganti
    public function insertData(){
        
        $nama_bop     = $_POST['nama_bop'];
		$satuan_bop   = $_POST['satuan_bop'];
		$qty_bop      = $_POST['qty_bop'];
		$harga_bop    = preg_replace('/[^0-9]/i','',$_POST['harga_bop']);
        $total_bop    = preg_replace('/[^0-9]/i','',$_POST['total_bop']);
        

        $hasil = $this->db->query("INSERT INTO bop SET nama_bop= ?,satuan_bop= ?, qty_bop=?,harga_bop=?, total_bop= ?", 
                            array($nama_bop,$satuan_bop,$qty_bop,$harga_bop, $total_bop));
        return $hasil;
    }
    //untuk mendapatkan data produk harian sesuai dengan id untuk diedit
    public function editData($id_bop){
        $dbResult = $this->db->query("SELECT * FROM bop WHERE id_bop = ?", array($id_bop));
        return $dbResult->getResult();
    }
    //untuk mendapatkan data produk sesuai dengan id untuk diedit
    public function updateData(){
        $id_bop       = $_POST['id_bop'];
        
        $nama_bop     = $_POST['nama_bop'];
		$satuan_bop   = $_POST['satuan_bop'];
		$qty_bop      = $_POST['qty_bop'];
		$harga_bop    = preg_replace('/[^0-9]/i','',$_POST['harga_bop']);
        $total_bop    = preg_replace('/[^0-9]/i','',$_POST['total_bop']);
        
        
        $hasil = $this->db->query("UPDATE bop SET nama_bop= ?,satuan_bop=?, qty_bop=?, harga_bop=?,total_bop= ? 
                                   WHERE id_bop =? ", array( $nama_bop,$satuan_bop, $qty_bop, $harga_bop,$total_bop, $id_bop));
        return $hasil;
    }
    //untuk menghapus data produk sesuai id yang dipilih
    public function deleteData($id_bop){
        $hasil = $this->db->query("DELETE FROM bop WHERE id_bop =? ", array($id_bop));
        return $hasil;
        
    }
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class TargetcostingModel extends Model{
    protected $table = 'targetcosting';

    public function getAll(){
        $dbResult = $this->db->query("SELECT * FROM targetcosting");
        return $dbResult->getResult();
    }

    public function getCustomTargetCosting(){
        $sql="SELECT targetcosting.*, produksi.produk as nama_produk, produksi.total_harga as harga_produksi
        FROM targetcosting 
        LEFT JOIN produksi 
        ON (targetcosting.produksi_id=produksi.id_produksi)";

        $dbResult = $this->db->query($sql, array());
        return $dbResult->getResult('array');
    }

    //untuk memasukkan data pembayaran
    public function setorTargetcosting(){

        //mendapaatkan id_transaksi terakhir dari seluruh transaksi
        //$dbResult = $this->db->query("SELECT IFNULL(MAX(id_transaksi),0) as id_transaksi from view_transaksi");

       // $hasil = $dbResult->getResult();
        //cacah hasilnya
       // foreach ($hasil as $row)
        //{
        //    $id_transaksi = $row->id_transaksi;
        //}

        //$id_transaksi = $id_transaksi+1; //naikkan 1 untuk id baru modal yang dimasukkan
        $id_tc		     = $_POST['id_tc'];
        $produksi_id     = $_POST['produksi_id'];
        $hargajual       = $_POST['hargajual'];
        $laba            = $_POST['laba'];
        $targetcost      = $_POST['targetcost'];//dihilangkan karakter maskingnya karena pakai masking
        $hasil           = $this->db->query("INSERT INTO targetcosting SET id_tc = ?, produksi_id = ?, hargajual =?, laba=?,targetcost=?   ",
         array($id_tc, $produksi_id, $hargajual, $laba, $targetcost));
        
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
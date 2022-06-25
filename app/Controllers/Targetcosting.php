<?php
namespace App\Controllers;

use App\Models\{TargetcostingModel, produkModel};


class Targetcosting extends BaseController{
    public function __construct(){
		
        
		
       // session_start();
        $this->TargetcostingModel = new TargetcostingModel();
		 helper('rupiah');
        $this->db = db_connect();
    
        
    }

	public function index(){

       
	   //cek dulu apakah kondisi form sudah diisi atau belum, kalau belum berarti tidak perlu memanggil fungsi validasi
        if ($this->request->isAJAX()) {
            $produksi_id = $_POST['produksi_id'];
            $dbResult = $this->db->query("SELECT * FROM produksi WHERE id_produksi = ? order by id DESC limit 1", array($produksi_id));
            return json_encode($dbResult->getResult());
        }
        if( //isset($_POST['nama_karyawan'])and
         
            isset($_POST['hargajual']) and
            isset($_POST['laba']) and
            isset($_POST['targetcost']) ){
                //
                $validation =  \Config\Services::validation();

                if (! $this->validate(
                        [  //'id_pembayaran'=>'required`,
                            //'nama_karyawan' => 'required',
                            'hargajual'         => 'required',
                            'laba'              => 'required',
                            'targetcost'        => 'required'
                         ],
                        [   /* Errors
                            'id_pembayaran' =>[
                                'required' => 'id pembayaran tidak boleh kosong,
                           ],
                           'nama_karyawan' =>[
                               'required' => 'keterangan nama tidak boleh kosong'
                           ],*/
                            'hargajual' => [
                                'required' => 'Harga jual tidak boleh kosong'
                            ],
                            'laba' => [
                                'required' => 'Laba tidak boleh kosong'
                            ],
                            'targetcost' => [
                                'required' => 'Target costing tidak boleh kosong'
                            ]
                        ]
                ))
                {                
                    
                    //echo view('HeaderBootstrap');
                    //echo view('SidebarBootstrap');
                    $produk = $this->db->table('produksi')->orderBy('id', 'desc')->get()->getResult();
                    $_SESSION['id_tc']= $this->kode();
                    echo view('Targetcosting/InputTargetcosting',[
                        'validation' => $this->validator,
                        'produk'     => $produk
                        //'karyawan'   => $this->KaryawanModel->getAll()
                    ]);

                }
                else{
                    //panggil metod dari kosan model untuk diinputkan datanya
                    $hasil = $this->TargetcostingModel->setorTargetcosting();
                    if($hasil->connID->affected_rows>0){
                        ?>
                        <script type="text/javascript">
                            alert("Sukses ditambahkan");
                        </script>
                        <?php	
                    }

                    $data['targetcosting'] = $this->TargetcostingModel->getCustomTargetCosting();
                    //echo view('HeaderBootstrap');
                    //echo view('SidebarBootstrap');
                    echo view('Targetcosting/ListTargetcosting', $data);
                }    
                //
        }else{
                    //kondisi awal ketika di akses, jadi tidak perlu memanggil validasi
                  
                    $data['targetcosting'] = $this->TargetcostingModel->getCustomTargetCosting();
                    $data['produk'] = $this->db->table('produksi')->orderBy('id', 'desc')->get()->getResult();
                    $_SESSION['id_tc']= $this->kode();
                    //echo view('HeaderBootstrap');
                    //echo view('SidebarBootstrap');
                    echo view('Targetcosting/InputTargetcosting', $data);
        }
	}

    public function listtargetcosting(){
        helper('rupiah');
        //tambahkan pengecekan login
        /*if(!isset($_SESSION['nama'])){
            return redirect()->to(base_url('home')); 
        }*/

        $data['targetcosting'] = $this->TargetcostingModel->getCustomTargetCosting();
        // var_dump($data['targetcosting']);
        // die;
        //echo view('HeaderBootstrap');
        //echo view('SidebarBootstrap');
        echo view('Targetcosting/ListTargetcosting', $data);
}
 /*public function deleteaset($id_tc){
		$this->TargetcostingModel->deleteData($id_tc);

		return redirect()->to(base_url('targetcosting/listtargetcosting')); 
	}*/
	
	public function kode()
    {
        $builder = $this->db->table('targetcosting')
        ->select('MAX(RIGHT(targetcosting.id_tc,3)) as kode')
       
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
        $kd = "TC-".$kodemax;
        //print_r($kd);exit;
       return $kd;
    }


 }

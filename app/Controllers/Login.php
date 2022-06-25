<?php

namespace App\Controllers;

class Login extends BaseController

{
    public function index()
    {
        $AkunModel = new \App\Models\AkunModel();
        $login = $this->request->getPost('login');
        if ($login){
            $username = $this->request->getPost('username');
            $pwd = $this->request->getPost('pwd');

            if($username == '' or $pwd == '') {
                $err = "Silahkan masukkan username dan password";
            }
            if(empty($err)){
                $dataLogin = $AkunModel->where("username",$username)->first();
                if($dataLogin['pwd']!=md5($pwd)
                ) {
                    $err = "Password tidak sesuai";
                }
            }

            if(empty($err)){
                $dataSesi = [
                    'id'=>$dataLogin['id'],
                    'username'=> $dataLogin['username'],
                    'pwd'=> $dataLogin['pwd'],

                ];
                session()->set($dataSesi);
                return redirect()->to('Home');
            }


            if($err){
                session()->setFlashdata('username',$username);
                session()->setFlashdata('error',$err);
                return redirect()->to("login");
            }
        }
        return view('Login_view');
    }
}
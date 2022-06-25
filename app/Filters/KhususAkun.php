<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class KhususAkun implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if(!session()->get('id')){
            return redirect()->to('/Login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}


//harusnya ditaruh di direktori filter dengan nama KhususAkun
//pengguna >> routing >> filter (metode) >>controller
//kemudian masuk ke bagian app >> config >> filter >> aliases >> dibawah honeypot >> 'khususAkun' k nya hurus kecil >>
//'khususAkun' => KhususAkun::class  terus save

//kemudian masuk ke bagian app > config >> routes 
//tambahkan dibawah $routes->get
//$routes->get('/akun_login', 'akun_login::index', ['filter' => 'khususAkun']);

//kemudian masuk ke bagian app >> config >> filter >> copy file khususakun 
//rename khususTamu
//kemudian masuk ke bagian app >> config >> filter >> aliases >> dibawah khususakun >> 'khususTamu' k nya hurus kecil >>
//'khususTamu' => KhususTamu::class  terus save

//kemudian masuk ke bagian app > config >> routes 
//tambahkan dibawah $routes->get member
//$routes->get('/login', 'login::index', ['filter' => 'khususTamu']);
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //home
    public function index(){
        return 'Selamat Datang';
    }
    
    public function about(){
        return 'Havenia Ventina Banjarnahor<br>1941720050';
    }

    public function artikel($id){
        return 'Halaman artikel dengan ID '.$id;
    }

}

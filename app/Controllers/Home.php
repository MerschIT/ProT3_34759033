<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return
        $data['titulo']= 'Mersch - Principal'.
         view('front/head_view',$data).
         view('front/navbar_view').
         view('front/principal').
         view('front/cards_view').
         view('front/footer_view');
    }

     public function login()
    {
        return
        $data['titulo']= 'Mersch - Login'.
         view('front/head_view',$data).
         view('front/head_view').
         view('front/navbar_view').
         view('front/login').
         
         view('front/footer_view');
    }

    public function quienes_somos()
    {
        return
        $data['titulo']= 'Mersch - Quienes somos'.
         view('front/head_view',$data).
         view('front/head_view').
         view('front/navbar_view').
         view('front/quienes_somos').
         
         view('front/footer_view');
    }

     public function acerca_de()
    {
        return
        $data['titulo']= 'Mersch - Acerca de'.
         view('front/head_view',$data).
         view('front/head_view').
         view('front/navbar_view').
         view('front/acerca_de').
         
         view('front/footer_view');
    }

     public function register()
    {
        return
        $data['titulo']= 'Mersch - Registro'.
         view('front/head_view',$data).
         view('front/head_view').
         view('front/navbar_view').
         view('front/register').
         
         view('front/footer_view');
    }
}

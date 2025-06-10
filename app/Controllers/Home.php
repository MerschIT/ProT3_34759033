<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
{
    $data['titulo'] = 'Mersch - Principal';
    return 
        view('front/head_view', $data) .
        view('front/navbar_view') .
        view('front/principal') .
        view('front/cards_view') .
        view('front/footer_view');
}

public function login()
{
    $data['titulo'] = 'Mersch - Login';
    return 
        view('front/head_view', $data) .
        view('front/navbar_view') .
        view('front/login') .
        view('front/footer_view');
}

public function quienes_somos()
{
    $data['titulo'] = 'Mersch - Quienes somos';
    return 
        view('front/head_view', $data) .
        view('front/navbar_view') .
        view('front/quienes_somos') .
        view('front/footer_view');
}

public function acerca_de()
{
    $data['titulo'] = 'Mersch - Acerca de';
    return 
        view('front/head_view', $data) .
        view('front/navbar_view') .
        view('front/acerca_de') .
        view('front/footer_view');
}

public function register()
{
    $data['titulo'] = 'Mersch - Registro';
    return 
        view('front/head_view', $data) .
        view('front/navbar_view') .
        view('front/register') .
        view('front/footer_view');
}
}

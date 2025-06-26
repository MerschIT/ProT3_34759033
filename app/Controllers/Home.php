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

    public function quienes_somos()
    {
        $data['titulo'] = 'Mersch - Quienes somos';

        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }

    public function acerca_de()
    {
        $data['titulo'] = 'Mersch - Acerca de';

        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
    }

    public function register()
    {
        $data['titulo'] = 'Mersch - Registro';

        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/register');
        echo view('front/footer_view');
    }

    public function login()
    {
        $data['titulo'] = 'Mersch - Login';

        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

    public function panel_control()
    {
        $data['titulo'] = 'Mersch - Panel de Control';

        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/panel_control');
        echo view('front/footer_view');
    }
}

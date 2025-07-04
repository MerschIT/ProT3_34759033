<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Panel_controller extends Controller
{
    public function index()
    {
        $session = session();
        $nombre = $session->get('usuario');
        $perfil = $session->get('perfil_id');

        $log_data['perfil_id'] = $perfil;

        $data['titulo'] = 'Panel del Usuario';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/usuario_logueado', $log_data);
        echo view('front/footer_view');
    }
}

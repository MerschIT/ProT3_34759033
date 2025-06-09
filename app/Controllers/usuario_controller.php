<?php
namespace App\Controllers;
use App\Models\usuario_model;   
use CodeIgniter\Controller;

class usuario_controller extends Controller{
    

    public function __construct(){
        helper(['form', 'url']);
    }

    public function create()
    {
        return
        $data['titulo'] = 'Registro';
        view('front/head_view', $data);
         view('front/navbar_view').
         view('back/usuario/registro').
         view('front/footer_view');
    }

    public function create()
    {
        return view('usuarios/create');
    }

    public function store()
    {
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'usuario' => $this->request->getPost('usuario'),
            'email' => $this->request->getPost('email'),
            'pass' => password_hash($this->request->getPost('pass'), PASSWORD
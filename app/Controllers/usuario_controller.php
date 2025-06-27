<?php

namespace App\Controllers;

use App\Models\usuario_model;
use CodeIgniter\Controller;

class usuario_controller extends Controller
{


    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function create()
    {
        $data['titulo'] = 'Registro';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/register');
        echo view('front/footer_view');
    }

    public function formValidation()
    {

        $input = $this->validate(
            [
                'nombre' => 'required|min_length[3]|max_length[25]',
                'apellido' => 'required|min_length[3]|max_length[25]',
                'usuario' => 'required|min_length[3]|max_length[25]',
                'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
                'pass' => 'required|min_length[3]|max_length[10]',
            ],

        );
        $formModel = new usuario_model();
        if (!$input) {
            $data['titulo'] = 'Registro';
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/register', ['validation' => $this->validator]);
            echo view('front/footer_view');
        } else {
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ]);

            session()->setFlashdata('success', 'Usuario registrado con exito');
            return redirect()->to(base_url('login'));
        }
    }

    /*Funcion para borrar un usuario*/
    public function borrar($id)
    {
        $usuarioModel = new \App\Models\usuario_model();
        $usuarioModel->delete($id);
        session()->setFlashdata('msg', 'Usuario borrado correctamente');
        return redirect()->to('/');
    }


    /* FUNCION PARA EDITAR UN USUARIO */
    public function editar($id)
    {

        $usuarioModel = new \App\Models\usuario_model();


        if ($this->request->getMethod() === 'POST') {
            $nuevoNombre = $this->request->getPost('nombre');
            $usuarioModel->update($id, ['nombre' => $nuevoNombre]);
            session()->setFlashdata('msg', 'Nombre actualizado correctamente');
            return redirect()->to('/administrar');
        }

        $usuario = $usuarioModel->find($id);
        if (!$usuario) {
            session()->setFlashdata('msg', 'Usuario no encontrado');
            return redirect()->to('/administrar');
        }

        $usuarios = $usuarioModel->findAll();
        $data['titulo'] = 'Editar Usuario';
        $data['usuario'] = $usuario;
        $data['usuarios'] = $usuarios;

        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/editar_usuario', $data);
        echo view('front/footer_view');
    }
}

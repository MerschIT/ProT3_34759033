<?php

namespace App\Controllers;

use App\Models\usuario_model;

class login_controller extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);

        $data['titulo'] = 'Login controller';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

    public function auth()
    {
        $session = session();
        $model = new usuario_model();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');



        $log_data = $model->where('email', $email)->first();

        if ($log_data) {
            $pass = $log_data['pass'];
            $ba = $log_data['baja'];
            if ($ba == 'SI') {
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to('/login');
            }

            $verify_pass = password_verify($password, $pass);

            if ($verify_pass) {
                $ses_data = [
                    'id_usuario' => $log_data['id_usuario'],
                    'nombre' => $log_data['nombre'],
                    'apellido' => $log_data['apellido'],
                    'email' => $log_data['email'],
                    'usuario' => $log_data['usuario'],
                    'perfil_id' => $log_data['perfil_id'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                session()->setFlashdata('msg', 'Bienvenido, serás redirigido a la página principal');

                return redirect()->to('/panel');
            } else {
                $session->setFlashdata('msg', 'Contraseña incorrecta');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email no existe o es incorrecto');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}

<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function login()
    {
        $session = session();
        $userModel = new UserModel();
        
        $username = $this->request->getVar('name');
        $password = $this->request->getVar('password');
        
        $user = $userModel->where('nombre_usuario', $username)->first();
        
        if ($user) {
            $pass = $user['passwords'];
            if (password_verify($password, $pass)) {
                $session->set([
                    'id' => $user['id'],
                    'nombre_usuario' => $user['nombre_usuario'],
                    'logged_in' => TRUE,
                ]);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('error', 'Contraseña incorrecta.');
                return redirect()->back();
            }
        } else {
            $session->setFlashdata('error', 'Usuario no encontrado.');
            return redirect()->back();
        }
    }
}

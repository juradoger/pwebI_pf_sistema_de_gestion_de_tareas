<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\TareaModel;
use CodeIgniter\Controller;

class Users extends Controller
{
    public function index()
{
    $session = session();
    $userId = $session->get('user_id');

    if (!$userId) {
        return redirect()->to('/users/iniciar');
    }

    $model = new TareaModel();
    $data['tasks'] = $model->where('usuario_id', $userId)->findAll();
    echo view('templates/header');
    echo view('templates/nav');
    echo view('tasks/index', $data);
    echo view('templates/footer');
}

    public function iniciar()
    {
        echo view('templates/header');
        echo view('templates/nav');
        echo view('users/sesion');
        echo view('templates/footer');
    }

    public function create()
    {
        echo view('templates/header');
        echo view('templates/nav');
        echo view('users/create');
        echo view('templates/footer');
    }

    public function store()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getPost('name');
        $password = $this->request->getPost('password');
        $confirmPassword = $this->request->getPost('confirm_password');

        if ($password !== $confirmPassword) {
            $session->setFlashdata('error', 'Las contraseñas no coinciden.');
            return redirect()->back();
        }

        $data = [
            'nombre_usuario' => $username,
            'passwords' => $password,
        ];

        $model->insert($data);
        $session->setFlashdata('success', 'Usuario registrado correctamente.');
        return redirect()->to('/users/iniciar');
    }

    public function login()
    {
        $session = session();
        $userModel = new UserModel();

        $username = $this->request->getVar('name');
        $password = $this->request->getVar('password');

        $user = $userModel->where('nombre_usuario', $username)->first();

        if ($user) {
            if ($password === $user['passwords']) {
                $session->set('user_id', $user['id']);
                return redirect()->to('/tasks');
            } else {
                $session->setFlashdata('error', 'Contraseña incorrecta.');
            }
        } else {
            $session->setFlashdata('error', 'Usuario no encontrado.');
        }

        return redirect()->back();
    }
}

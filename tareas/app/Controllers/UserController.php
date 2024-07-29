<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function store()
    {
        $userModel = new UserModel();
        
        $data = [
            'nombre_usuario' => $this->request->getVar('name'),
            'passwords' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ];
        
        $userModel->save($data);
        
        return redirect()->to('/login');
    }
}

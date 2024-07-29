<?php

namespace App\Controllers;

use App\Models\TareaModel;
use CodeIgniter\Controller;

class Tasks extends Controller
{
    public function create()
    {
        echo view('templates/header');
        echo view('templates/nav');
        echo view('tasks/create');
        echo view('templates/footer');
    }

    public function store()
    {
        $session = session();
        $model = new TareaModel();

        $data = [
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
            'fecha_vencimiento' => $this->request->getPost('fecha_vencimiento'),
            'estado' => $this->request->getPost('estado'),
            'usuario_id' => $session->get('user_id'),
        ];

        if ($model->insert($data)) {
            $session->setFlashdata('success', 'Tarea creada correctamente.');
        } else {
            $session->setFlashdata('error', 'Hubo un problema al crear la tarea.');
        }

        return redirect()->to('/tasks');
    }

    public function edit($id)
    {
        $model = new TareaModel();
        $data['task'] = $model->find($id);

        echo view('templates/header');
        echo view('templates/nav');
        echo view('tasks/edit', $data);
        echo view('templates/footer');
    }

    public function update($id)
    {
        $model = new TareaModel();

        $data = [
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
            'fecha_vencimiento' => $this->request->getPost('fecha_vencimiento'),
            'estado' => $this->request->getPost('estado'),
        ];

        if ($model->update($id, $data)) {
            session()->setFlashdata('success', 'Tarea actualizada correctamente.');
        } else {
            session()->setFlashdata('error', 'Hubo un problema al actualizar la tarea.');
        }

        return redirect()->to('/tasks');
    }

    public function delete($id)
    {
        $model = new TareaModel();
        $model->delete($id);
        return redirect()->to('/tasks');
    }
}

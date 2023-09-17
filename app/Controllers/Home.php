<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function insert()
    {
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
        ];

        $model = new UserModel();

        $model->insert($data);

        echo "Data inserted successfully";
    }

    public function show()
    {
        $model = new UserModel();

        $data['users'] = $model->orderBy('id', 'DESC')->findAll();

        return view('show', $data);
    }


    public function edit($id = null)
    {
        $model = new UserModel();

        $data['user'] = $model->where('id', $id)->first();

        return view('edit', $data);
    }


    public function update()
    {
        $model = new UserModel();

        $id = $this->request->getVar('id');

        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
        ];

        $model->update($id, $data);

        echo "Data updated successfully";
    }


    public function delete($id = null)
    {
        $model = new UserModel();

        $data['user'] = $model->where('id', $id)->delete();

        return redirect()->to('/show');
    }
}

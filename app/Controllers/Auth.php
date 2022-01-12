<?php

namespace App\Controllers;

use App\Models\UserModel;


class Auth extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Login'
    ];
    helper(['form']);
    echo view('auth/login', $data);
  }

  public function login()
  {
    $session = session();
    $model = new UserModel();
    $nim = $this->request->getVar('nim');
    $password = $this->request->getVar('password');
    $data = $model->where('nim', $nim)->first();

    if ($data) {
      if ($nim == $password) {
        $ses_data = [
          'nim'       => $data['nim'],
          'name'     => $data['nama'],
          'email'    => $data['email'],
          'logged_in'     => TRUE
        ];
        $session->set($ses_data);
        return redirect()->to('/user');
      } else {
        $session->setFlashdata('msg', 'Wrong Password');
        return redirect()->to('/login');
      }
    } else {
      $session->setFlashdata('msg', 'Nim not Found');
      return redirect()->to('/login');
    }
  }
  public function logout()
  {
    $session = session();
    $session->destroy();
    return redirect()->to('/login');
  }
}

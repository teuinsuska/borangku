<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\DosenModel;
use App\Models\KosentrasiModel;

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
    $user = new UserModel();
    $dosen = new DosenModel();
    $kosen = new KosentrasiModel();
    $nim = $this->request->getVar('nim');
    $password = $this->request->getVar('password');
    //User - Mahasiswa
    $data = $user->where('nim', $nim)->first();
    // Kosentrasi
    $kosentrasi = $kosen->where('id', $data['kosentrasi'])->first();
    // Dosen
    $pa = $dosen->where('id', $data['pa'])->first();
    $penguji1 = $dosen->where('id', $data['penguji1'])->first();
    $penguji2 = $dosen->where('id', $data['penguji2'])->first();
    $ketua_sidang = $dosen->where('id', $data['ketua_sidang'])->first();
    $pembimbing_kp = $dosen->where('id', $data['pembimbing_kp'])->first();
    $pembimbing_ta1 = $dosen->where('id', $data['pembimbing_ta1'])->first();
    $pembimbing_ta2 = $dosen->where('id', $data['pembimbing_ta2'])->first();
    $pembimbing2 = $pembimbing_ta2['nama'] == null ? "Tidak Ada" : $pembimbing_ta2['nama'];

    if ($data) {
      if ($nim == $password) {
        $ses_data = [
          'hp' => $data['hp'],
          'pa' => $pa['nama'],
          'nim' => $data['nim'],
          'name' => $data['nama'],
          'email' => $data['email'],
          'judul_ta' => $data['judul_ta'],
          'judul_kp' => $data['judul_kp'],
          'penguji1' => $penguji1['nama'],
          'penguji2' => $penguji2['nama'],
          'ketua_sidang' => $ketua_sidang['nama'],
          'kosentrasi' => $kosentrasi['kosentrasi'],
          'pembimbing_kp' => $pembimbing_kp['nama'],
          'pembimbing_ta1' => $pembimbing_ta1['nama'],
          'pembimbing_ta2' => $pembimbing2,
          'logged_in' => TRUE
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

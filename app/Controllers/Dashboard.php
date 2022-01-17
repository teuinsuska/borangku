<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
  public function index()
  {
    $session = session();
    $nim = $session->get('nim');
    $name = strtolower($session->get('name'));
    $cek = strlen($nim);
    $trimangkatan = substr($nim, 1, -8);
    $angkatan = is_numeric($trimangkatan) ? '2000'  + $trimangkatan : '-';
    if ($cek == 11) {
      $status = "Mahasiswa";
    } else {
      $status = "Admin/Dosen";
    };
    $data =
      [
        'email' => $session->get('email'),
        'title' => ucwords($name),
        'name' => ucwords($name),
        'hp' => $session->get('hp'),
        'angkatan' => $angkatan,
        'status' => $status,
        'nim' => $nim,
      ];
    return view('user/index', $data);
  }

  public function user()
  {
    $session = session();
    $nim = $session->get('nim');
    $name = strtolower($session->get('name'));
    $cek = strlen($nim);
    $trimangkatan = substr($nim, 1, -8);
    $angkatan = is_numeric($trimangkatan) ? '2000'  + $trimangkatan : '-';
    if ($cek == 11) {
      $status = "Mahasiswa";
    } else {
      $status = "Admin/Dosen";
    };
    $data =
      [
        'email' => $session->get('email'),
        'title' => ucwords($name),
        'name' => ucwords($name),
        'hp' => $session->get('hp'),
        'angkatan' => $angkatan,
        'status' => $status,
        'nim' => $nim,
      ];
    echo view('template/head', $data);
    echo view('template/sidebar', $data);
    echo view('template/topbar', $data);
    echo view('user/user', $data);
    echo view('template/foot', $data);
  }
}

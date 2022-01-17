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
    // Ambil data
    $session = session();
    $nim = $session->get('nim');
    $name = strtolower($session->get('name'));
    $pa = $session->get('pa');
    // cek angkatan
    $trimangkatan = substr($nim, 1, -8);
    $angkatan = is_numeric($trimangkatan) ? '2000'  + $trimangkatan : '-';
    // Cek Status
    $cek = strlen($nim);
    if ($cek == 11) {
      $status = "Mahasiswa";
    } else {
      $status = "Admin/Dosen";
    };
    $data =
      [
        'email' => $session->get('email'),
        'hp' => $session->get('hp'),
        'title' => ucwords($name),
        'name' => ucwords($name),
        'angkatan' => $angkatan,
        'status' => $status,
        'nim' => $nim,
        'pa' => $pa,
      ];
    echo view('template/head', $data);
    echo view('template/sidebar', $data);
    echo view('template/topbar', $data);
    // Cek Kelengkapan data
    if (isset($pa)) {
      echo view('user/user', $data);
    } else {
      echo view('user/profile', $data);
    }
    echo view('template/foot', $data);
  }
}

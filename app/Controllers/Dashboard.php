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

  public function profile()
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
        'pa' => $pa,
        'nim' => $nim,
        'status' => $status,
        'angkatan' => $angkatan,
        'name' => ucwords($name),
        'title' => ucwords($name),
        'hp' => $session->get('hp'),
        'email' => $session->get('email'),
        'judul_ta' => $session->get('judul_ta'),
        'judul_kp' => $session->get('judul_ta'),
        'penguji1' => $session->get('penguji1'),
        'penguji2' => $session->get('penguji2'),
        'kosentrasi' => $session->get('kosentrasi'),
        'ketua_sidang' => $session->get('ketua_sidang'),
        'pembimbing_kp' => $session->get('pembimbing_kp'),
        'pembimbing_ta1' => $session->get('pembimbing_ta1'),
        'pembimbing_ta2' => $session->get('pembimbing_ta2'),
      ];
    echo view('template/head', $data);
    echo view('template/sidebar', $data);
    echo view('template/topbar', $data);
    echo view('user/profile', $data);
    echo view('template/foot', $data);
  }
}

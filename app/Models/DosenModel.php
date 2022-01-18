<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
  protected $table = 'dosen';
  protected $allowedFields = ['id', 'nama', 'nik', 'email', 'hp', 'jabatan', 'kosentrasi'];
}

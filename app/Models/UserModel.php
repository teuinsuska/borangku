<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = 'mahasiswa';
  protected $allowedFields = ['nim', 'nama', 'email', 'hp', 'status', 'kp', 'ta'];
}

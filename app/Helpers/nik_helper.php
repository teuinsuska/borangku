<?php

function trimnik($nik)
{
  $birth = substr($nik, 0, -10); // tahun lahir
  $pns = substr($nik, 8, -4); // Tahun SK ASN
  $jk = substr($nik, 14, 1); // Jenis Kelamin
  $idx = substr($nik, 15); // Urutan 

  if (strlen($nik) >= 18) {
    return 'NIP:' . ' ' . $birth . ' ' . $pns . ' ' . $jk . ' ' . $idx;
  } else {
    return 'NIK:' . ' ' . $nik;
  }
}

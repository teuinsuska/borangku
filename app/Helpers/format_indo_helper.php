<?php

function tgl($tanggal)
{
  $trim = explode('-', $tanggal);
  $get_tgl = $trim[0];
  $get_bln = $trim[1];
  $get_thn = $trim[2];

  $bulan = array(
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );

  return $get_tgl . ' ' . $bulan[(int)$get_bln] . ' ' . $get_thn;
}

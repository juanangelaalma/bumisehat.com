<?php 

function timestamp_to_tanggal($timestap)
{
  $tanggal = date('Y-m-d', strtotime($timestap));
  $bulan = array (1 =>   'Jan',
        'Feb',
        'Mar',
        'Apr',
        'Mei',
        'Jun',
        'Jul',
        'Agust',
        'Sept',
        'Okt',
        'Nov',
        'Des'
      );
  $split = explode('-', $tanggal);
  return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
}
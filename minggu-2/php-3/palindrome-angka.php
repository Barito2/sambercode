<?php

function palindrome_angka($angka)
{
  // tulis kode di sini
  $result = '';
  $strangka = strval($angka);
  $reverString = '';

  for ($i = strlen($strangka) - 1; $i >= 0; $i--) {
    $reverString .= $strangka[$i];
  }

  if ($reverString == $strangka) {
    $angka += 1;
  }

  while (true) {
    $strangka = strval($angka);
    $reverString = '';
    for ($j = strlen($angka) - 1; $j >= 0; $j--) {
      $reverString .= $strangka[$j];
    }
    if ($reverString == $strangka) {
      # code...
      global $result;
      $result = $strangka . '<br>';
      return $result;
    } else {
      $angka += 1;
    }
  }
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

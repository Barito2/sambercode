<?php
function skor_terbesar($arr)
{
    //kode di sini
    $result = [];
    $kelasReactNative = [];
    $kelasReactJS = [];
    $kelasLaravel = [];

    foreach ($arr as $key => $row) {
      # code...
      $nilai[$key] = $row['nilai'];
      $kelas[$key] = $row['kelas'];
    }

    array_multisort($kelas,SORT_DESC, $nilai,SORT_DESC,$arr);

    for ($i=0; $i < count($arr); $i++) { 
      # code...
      if ($arr[$i]['kelas'] =='React Native') {
        # code...
        $kelasReactNative[] = $arr[$i];
      }elseif ($arr[$i]['kelas'] =='React JS') {
        # code...
        $kelasReactJS[] = $arr[$i];
      }else{
        $kelasLaravel[] = $arr[$i];
      }
    }

    echo "<pre>";
    print_r($kelasReactNative);
    echo "</pre>";
    echo "<pre>";
    print_r($kelasReactJS);
    echo "</pre>";
    echo "<pre>";
    print_r($kelasLaravel);
    echo "</pre>";
 

    $result[] = $kelasReactNative[0];
    $result[] = $kelasReactJS[0];
    $result[] = $kelasLaravel[0];

    foreach ($result as $key => $hasil) {
      # code...
      echo "Sekor terbesar dari ".$hasil['kelas']." diperoleh oleh ".$hasil['nama']."dengan skor sebesar : ".$hasil['nilai']."<br>";
    }
}

// TEST CASES
$skor = [
    [
        "nama" => "Bobby",
        "kelas" => "Laravel",
        "nilai" => 78
    ],
    [
        "nama" => "Regi",
        "kelas" => "React Native",
        "nilai" => 86
    ],
    [
        "nama" => "Aghnat",
        "kelas" => "Laravel",
        "nilai" => 90
    ],
    [
        "nama" => "Indra",
        "kelas" => "React JS",
        "nilai" => 85
    ],
    [
        "nama" => "Yoga",
        "kelas" => "React Native",
        "nilai" => 77
    ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/

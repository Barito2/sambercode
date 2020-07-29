<?php
function ubah_huruf($string)
{
    //kode di sini
    $abjad = $string;
    for ($i = 0; $i < strlen($abjad); $i++) {
        echo chr(ord($abjad[$i]) + 1);
    }
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo "<br>";
echo ubah_huruf('developer'); // efwfmpqfs
echo "<br>";
echo ubah_huruf('laravel'); // mbsbwfm
echo "<br>";
echo ubah_huruf('keren'); // lfsfo
echo "<br>";
echo ubah_huruf('semangat'); // tfnbohbu

<?php

function papan_catur($angka)
{
    $output = '';
    for ($i = 0; $i < $angka; $i++) {
        $baris = '';
        for ($j = 0; $j < $angka; $j++) {
            if ($i % 2 == 0) {
                # code...
                $baris .= "# ";
            } else {
                if ($j == $angka - 1) {
                    # code...
                    $baris .= "";
                } else {
                    $baris .= "&nbsp#";
                }
            }
        }
        $output .= "$baris<br>";
    }
    return $output;
}

// TEST CASES
echo papan_catur(4);
echo "<br>";
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
echo "<br>";
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
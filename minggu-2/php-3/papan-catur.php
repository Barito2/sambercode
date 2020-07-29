<?php

function papan_catur($angka)
{
    // tulis kode di sini
    $x = 1;
    echo "<table align=center border=1 cellspacing=0>";
    while ($x <= $angka) {
        echo "<tr>";
        $y = 1;
        while ($y <= $angka) {
            if (($x + $y) % 2 > 0)
                echo "<td width=50 height=50  bgcolor=#000000>
                </td>";
            else
                echo "<td width=50 height=50 bgcolor=#ffffff>
                </td>";
            $y++;
        }
        echo "</tr>";
        $x++;
    }
    echo "</table><br><br>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
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
<?php
 
$kal = "Valentino Rossi sama sekali tak cedera setelah mengalami kecelakaan 
hebat di Valencia. Tapi YZR-M1 milik The Doctor mengalami kerusakan sangat parah.";

echo "Kalimat Awal : ".$kal."<br/>"."<br/>"."<br/>";

$str = str_replace(".","",$kal);

echo "Setelah dipisah per kata :"."<br/>"."<br/>";
$arr_kal = explode(" ", $str);
$j_kal = array_count_values($arr_kal);

$i=1;
echo "<table border=1>";
echo "<th>No</th><th>Nama</th><th>Jumlah Kata</th>";

while(list($nama, $jml)=each($j_kal)){
    echo "<tr>";
    echo "<td>$i</td><td>$nama</td><td>$jml</td>";
    echo "<tr/>";
    $i++;
}

echo "</table>";
?>
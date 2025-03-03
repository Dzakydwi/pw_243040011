<?php
//luas lingkaran
    echo"<h4>Menghitung Luas Lingkaran </h4>";
    function hitungluaslingkaran($r)
    {
        return 3.14 * $r * $r;
    }
    $rLuas = 10;
    $luas = hitungluaslingkaran($rLuas);
    echo "Jari-jari = $rLuas cm.<br>";
    echo "Luas Lingkaran = $luas cm2<br>";

    echo "<hr>";

    //keliling lingkaran 
    echo "<h4>Menghitung Keliling Lingkaran</h4>";
    function hitungkelilinglingkaran($r)
    {
        return 2 * 3.14 * $r;
    }
    $rKeliling = 20;
    $keliling = hitungkelilinglingkaran($rKeliling);
    echo "jari-jari = $rKeliling cm.<br>";
    echo "Keliling Lingkaran = $keliling cm<br>";

    echo "<hr>"
?>
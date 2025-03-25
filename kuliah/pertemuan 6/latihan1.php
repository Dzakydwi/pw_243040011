<?php
//membuat array
    $hari = array('Senin', 'Selasa', 'Rabu');
    $bulan = ['Januari', 'Februari', 'Maret'];
    $myArray = ['Dwi Dzaky', 19, True];


    //Mencetak / Mneampilkan Array
    //Menapilkan seluruh isi (hanya untuk debugging)
    var_dump($hari);
    echo "<br>";
    print_r($bulan);
    echo "<br>";
    // Gunakan echo jika ingin mencetak 1 elemen (menggunakan index)
    echo $hari[2];
    echo "<br>";
    echo $myArray [0];
    echo "<hr>";

    // Menambah isi array 
    // Gunakan []
    $hari[] = 'Kamis';
    $hari[] = "Jumaat";
    $bulan[] = "April";
    print_r($hari);
    echo "<br>";
?>
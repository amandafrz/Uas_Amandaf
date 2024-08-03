<?php

function format_uang ($angka){
    return number_format($angka, 0, ',', '.');
}
function
 terbilang ($angka){
    $angka = abs($angka);
    $baca = array('','satu','dua','tiga','empat','lima','enam','tujuh','delapan','sembilan','sepuluh','sebelas');
    $terbilang = '';

    if($angka < 12 ){
        $terbilang = ' ' .$baca[$angka];
    }elseif ($angka < 20){ //12 - 19
        $terbilang = terbilang($angka -10) .'belas';
    }elseif($angka < 100){ //20 - 99
        $terbilang = terbilang($angka /10) . 'puluh' . terbilang($angka % 10);
    }elseif ($angka < 200){ //200 - 199
        $terbilang = 'seratus' . terbilang($angka -100);
    }elseif ($angka < 1000){ //200 - 999
        $terbilang = terbilang($angka /100) . ' ratus' . terbilang($angka % 100);
    }elseif ($angka < 2000){ //100 - 1.999
        $terbilang = 'seribu'.terbilang($angka - 1000);
    }elseif ($angka < 1000000){ //2.000 - 999.999
        $terbilang = terbilang($angka / 1000).'ribu'.terbilang($angka % 1000);
    }elseif ($angka < 1000000000){ // 1.000.000 - 999.999.990
        $terbilang = terbilang($angka / 1000000).'juta'.terbilang($angka % 1000000);
    }


    return $terbilang;
 }

function tanggal_indonesia($tgl)
{
    $nama_bulan = array(1 =>
        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    );
    // 2021-03-07
    $tahun = substr($tgl, 0, 4);
    return $tahun;
}

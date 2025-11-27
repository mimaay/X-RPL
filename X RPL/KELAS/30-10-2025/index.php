<form action="" method="post">
    Tanggal
    <input type= "number" name="tanggal" placeholder="Masukan Tanggal"> <br>
    Bulan
    <input type= "number" name="bulan" placeholder="Masukan Bulan"> <br>

    <input type="submit" name="kirim" value="Zodiak anda..">
</form>

<form action="" method="post">
    <input type="number" name="a" placeholder="bilangan a">
    <input type="number" name="b" placeholder="bilangan b">

    <input type="hitung">
</form>

<?php
    if (isset($_POST['hitung'])) {
        $hitung = $_POST['hitung'];

        if ($hitung == 'jumlahkan') {
        }
        if ($hitung == 'bagikan') {
        }
        if ($hitung == 'kurangkan') {
        }
        if ($hitung == 'kalikan') {
        }
    }
    if (isset($_POST['kirim'])) {  
        $tanggal = $_POST['tanggal'];
        $bulan = $_POST['bulan'];

        zodiak($bulan, $tanggal);
    }

    function belajar() {
        echo "Hari ini, saya belajar funciton";
    }

    function cekTanggal ($tanggal){
        if ($tanggal > 0 && $tanggal < 32) {
            // echo "tanggal benar";
            return true;
        } else{
            // echo "tanggal salah";
            return false;
        }
    }

    // cekTanggal(1);
    // cekTanggal(0);
    // cekTanggal(100);

    $tanggal = 1;
    $bulan = 12;

    function zodiak ($bulan, $tanggal){
        if ($tanggal > 0 && $tanggal < 32 && $bulan > 0 && $bulan < 13){
        if ($bulan == 1){
            if ($tanggal > 0 && $tanggal <20){
                echo "Zodiak anda: Capicorn";
            } else {
                echo "Zodiak anda:Aquarius";
            }
        }
        if ($bulan = 2){
            if ($tanggal >0 && $tanggal <20){
                echo "Zodiak anda:Aquarius";
            }else {
                echo "Zodiak anda: Pisces";
            }
        }
        if ($bulan = 3) {
            if ($tanggal >0 && $tanggal <20){
                echo "Zodiak anda: Pisces";
            }else {
                echo "Zodiak anda: Aries";
            }
        }
        if ($bulan = 4) {
            if ($tanggal >0 && $tanggal <20){
                echo "Zodiak anda: Aries";
            }else {
                echo "Zodiak anda: Taurus";
            }
        }
        if ($bulan = 5) {
            if ($tanggal >0 && $tanggal <20){
                echo "Zodiak anda: Taurus";
            }else{
                echo "Zodiak anda: Gemini";
            }
        }
        if ($bulan = 6){
            if ($tanggal >0 && $tanggal <20){
                echo "Zodiak anda: Gemini";
            }else {
                echo "Zodiak anda: Cancer";
            }
        }
        if ($bulan = 7) {
            if ($tanggal >0 && $tanggal <20) {
                echo "Zodiak anda: Cancer";
            }else {
                echo "Zodiak anda: Leo";
            }
        }
        if ($bulan = 8) {
            if ($tanggal >0 && $tanggal <20) {
                echo "Zodiak anda: Leo";
            }else {
                echo "Zodiak anda: Virgo";
            }
        }
        if ($bulan = 9){
            if ($tanggal>0 && $tanggal <20) {
                echo "Zodiak anda: Virgo";
            }else {
                echo "Zodiak anda: Libra";
            }
        }
        if ($bulan = 10){
            if ($tanggal >0 && $tanggal <20) {
                echo "Zodiak anda: Libra";
            }else {
                echo "Zodiak anda: Scorpio";
            }
        }
        if ($bulan = 11) {
            if ($tanggal >0 && $tanggal <20) {
                echo "Zodiak anda: Scorpio";
            }else {
                echo "Zodiak anda: Sagitarius";
            }
        }
        if ($bulan = 12){
            if ($tanggal >0 && $tanggal <20) {
                echo "Zodiak anda: Sagitarius";
            }else {
                echo "Zodiak anda: Capicorn";
            }
        }
    }else {
        echo "tanggal atau bulan salah";
    }
    }
    // zodiak(1, 5);
    // zodiak(12, 30);
    // zodiak(5, 20);

    function cekBulan($bulan) {
        if ($bulan < 0 && $bulan > 13) {
            return true;
        }else {
            return false;
        }
    }

    cekBulan(0);

    if (cekBulan(1) && $cekTanggal(0)) {
        echo "bulan atau tanggal benar";
    }else {
        echo "bulan atau tanggal salah";
    }

    function luasPersegiPanjang($p, $l) {
        $luas = $p * $l;
        return $luas;
    }
    $p=55;
    $l=33;
    $t=155;
    echo "volume balok dengan panjang $p, lebar $l, dan tinggi $t adalah: <br>";
    echo luasPersegiPanjang($p, $l)* $t;

    function cekPenjumlahan($a, $b) {
        $tambah=$a+$b;
        return $tambah;
    }
    $a=3;
    $b=5;
    echo "penjumlahan dari $a, $b adalah: <br>";
    echo cekPenjumlahan($a,$b);

    function cekPembagian($a, $b) {
        $bagi=$a/$b;
        return $bagi;
    }
    $a=6;
    $b=3;
    echo "pembagian dari $a, $b adalah: <br>";
    echo cekPembagian($a,$b);

    function cekPengurangan($a, $b) {
        $kurang=$a-$b;
        return $kurang;
    }
    $a=5;
    $b=2;
    echo "pengurangan dari $a, $b adalah: <br>";
    echo cekPengurangan($a,$b);

    function cekPerkalian($a, $b) {
        $kali=$a*$b;
        return $kali;
    }
    $a=10;
    $b=5;
    echo "perkalian dari $a, $b adalah: <br>";
    echo cekPerkalian($a,$b);
?>
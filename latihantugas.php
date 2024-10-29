<?php 
//pengulangan
// 1 for
//2 while
// 3 d0...while
//foreach : pengulangan khusus array

// for($i = 0; $i < 5; $i++) {
//     echo "hello world!  <br> ";
// }
// $i = 0;
// while($i < 5 ) {
//    echo "hello world! <br>";
//    $i++;
// }
function salam($nama){
    echo"<h2>Assalamuálaikum ".strtoupper($nama)."</h2>";
}
salam("ali");
salam("fadhil");
salam("");

echo"<hr/><br/>"; 

function jumlah($a, $b){
    return $a + $b;
}

echo '2 + 8 = '.jumlah(2,8);

// function perkenalan(){
//     echo"<br/><br/>Assalamuálaikum,";
//     echo"Perkenalkan, nama saya Biyan<br/>";
//     echo"Senang berkenalan dengan anda<br/";
// }

// perkenalan();

echo"<hr/>";

// function perkenalan($nama,$salam="Assalamualaikum"){
//     echo $salam.",  ";
//     echo"Perkenalkan, nama saya".$nama."<br/>";
//     echo"Senang berkenalan dengan anda<br/";
// }
// perkenalan("  Lee Kim Jung", "Hai");

// echo"<hr/><br>";


// $saya = " Bedu";
// $ucapansalam = "</br>Selamat Pagi";



// perkenalan($saya,);

// echo"<hr/><br/>";
// echo"<hr/>";
// function hitungumur($thn_lahir,$thn_sekarang){
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }

// echo "Umur Saya adalah". hitungumur(2003,2022)." tahun";

// echo"<hr/>";

function hitungumur($thn_lahir,$thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama,$salam="Assalamualaikum"){
    echo $salam.",  ";
    echo"Perkenalkan, nama saya".$nama."<br/>";
    echo "Umur Saya adalah  ". hitungumur(1994,2015)." tahun<br/>";
    echo"Senang berkenalan dengan anda<br/>";
}
perkenalan("  Ardianta");

echo"<hr/>";

function faktorial($angka){
    if($angka < 2){
        return 1;
    } else {
        return($angka * faktorial($angka-1));
    }
}
echo"faktorial 5 adalah " . faktorial(5);

echo"<hr/>";

// function pengkatdua($a){
//     $a = $a * $a;
// }
// $a = 20;
// echo 'Sebelum Nilai $a : '.$a;
// $a = 20;
// echo '<be/> Sesudah Nilai $a :'.$a;

echo"<hr/>";
function pengkatdua($a){
    $a = $a * $a;
}
$a = 20;
echo 'Sebelum Nilai $a : '.$a;
$a = 400;
echo '<be/> Sesudah Nilai $a :'.$a;

echo"<hr/>";
?>
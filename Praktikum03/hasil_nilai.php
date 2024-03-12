<?php

require_once 'model.php';

if( !isset($_POST["submit"])    ){
    header("Location: index.php");
    exit;
}

$nama_murid = $_POST["nama"];
$pelajaran = $_POST["pelajaran"];
$nilai_midterm = $_POST["midterm"];
$nilai_final = $_POST["final"];
$nilai_praktikum = $_POST["praktikum"];
$nilai_semester = ($nilai_midterm + $nilai_final + $nilai_praktikum) / 3;



echo 'Nama Murid : '  . $nama_murid;
echo '<br> Pelajaran : ' . $pelajaran;
echo '<br> Nilai Midterm : ' . $nilai_midterm;
echo '<br> Nilai Final : ' . $nilai_final;
echo '<br> Nilai Praktikum : ' . $nilai_praktikum;

echo '<br> Nilai Akhir : ' . $nilai_semester;
echo '<br> KEPUTUSAN : ' . keputusan($nilai_semester);
echo '<br> KATEGORI : ' . kategori($nilai_semester);


?>
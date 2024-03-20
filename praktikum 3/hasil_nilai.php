<?php


require_once 'model.php';


if( !isset($_POST["submit"])    ){
    header("Location: index.php");
    exit;
}

$proses = $_POST["submit"];
$nama = $_POST["nama"];
$mata_kuliah = $_POST["matakuliah"];
$nilai_praktikum = $_POST["praktikum"];
$nilai_projek= $_POST["projek"];
$nilai_tugas = $_POST["tugas"];
$nilai_akhir = ($nilai_praktikum + $nilai_projek + $nilai_tugas) / 3;


echo 'Nama Siswa : '  . $nama;
echo '<br> Mata Kuliah : ' . $mata_kuliah;
echo '<br> Nilai Praktikum : ' . $nilai_praktikum;
echo '<br> Nilai Projek : ' . $nilai_projek;
echo '<br> Nilai Tugas : ' . $nilai_tugas;

echo '<br> Nilai Akhir : ' . $nilai_akhir;
echo '<br> DINYATAKAN : ' . kelulusan($nilai_akhir);
echo '<br> GRADE : ' . grade($nilai_akhir);









?>
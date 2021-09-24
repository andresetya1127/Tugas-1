<?php

namespace App\Controllers;
class Home extends BaseController
{
    
    public function index()
    {
        echo "<center><p><b>DATA DIRI SAYA"."</p></b>";
    // membuat array 
    $data = [
    "Nama" => "Andrian Setya Lucmana",
    "Nim" => "TI16190003",
    "Alamat" =>"Leneng"
    ];
    // mencetak isi array 
    echo " Nama   : ".$data["Nama"]."<br>";
    echo " Nim    : ".$data["Nim"]."<br>";
    echo " Alamat : ".$data["Alamat"]."<br></center>";
        return view('Home_view', $data);
    }


    public function Hobi()
    {      
    echo "<center><p><b>HOBI SAYA"."</p>"."</b>";

     $Hobi = ["Bola", "Badminton", "Ngoding"];

    // menampilkan isi array
    echo $Hobi[0].",";
    echo $Hobi[1].",";
    echo $Hobi[2]."</center>";
        return view('Hobi_view', $Hobi);
    }


    public function Riwayat_pendidikan()
    {
//SD
echo "<center><p><b>RIWAYAT PENDIDIKAN SAYA"."</p>"."</b>";

    $riwayat = [
         "N" => "MIN Leneng",
         "T" => 2013,
    ]; 
    echo "SD   : ".$riwayat["N"]."<br>";
    echo "         Tahun Lulus    : ".$riwayat["T"]."<br></p>";
//MTS
    $riwayat = [
         "N" => "MTSN Saadatuddarain",
         "T" => 2016,
    ]; 
    echo "SMP  : ".$riwayat["N"]."<br>";
    echo "Tahun Lulus    : ".$riwayat["T"]."<br></p>";

//SMA    
    $riwayat = [
         "N" => "MAN 2 Praya",
         "T" => 2019,
    ]; 
    echo "SMA   : ".$riwayat["N"]."<br>";
    echo "Tahun Lulus    : ".$riwayat["T"]."<br></p>";

//KULIAH  
    $riwayat = [
         "N" => "STMIK LOMBOK",
         "T" => "Sedang Mengikuti Perkuliahan Semester 5",
    ]; 
    echo "UNIVERSITAS   : ".$riwayat["N"]."<br>";
    echo "Tahun Lulus    : ".$riwayat["T"]."<br></p></center>";
        return view('Riwayat_view', $riwayat);
    }
}


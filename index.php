<?php

echo "Animal <br>";
echo " <hr>";

class Kucing {
	public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$kucing = new Kucing;
$kucing->nama = "Chiki";
$kucing->jumlah_kaki = "4";
$kucing->bisa_terbang = "Tidak bisa";
$kucing->suara = "Meeooong";


echo "Kucing  <br>";
echo "Yang Bernama : $kucing->nama <br>";
echo "Jumlah Kaki Sebanyak : $kucing->jumlah_kaki <br>";
echo "Apakah Bisa Terbang ? $kucing->bisa_terbang <br>";
echo "Suaranya : $kucing->suara <br>";
echo "<hr>";

class Anjing {
	public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$anjing = new Anjing;
$anjing->nama = "Zeky";
$anjing->jumlah_kaki = "4";
$anjing->bisa_terbang = "Tidak bisa";
$anjing->suara = "Gukguk";


echo "Anjing  <br>";
echo "Yang Bernama : $anjing->nama <br>";
echo "Jumlah Kaki Sebanyak : $anjing->jumlah_kaki <br>";
echo "Apakah Bisa Terbang ? $anjing->bisa_terbang <br>";
echo "Suaranya : $anjing->suara <br>";
echo "<hr>";

class Elang {
	public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$elang = new Elang;
$elang->nama = "Mumun";
$elang->jumlah_kaki = "2";
$elang->bisa_terbang = "Bisa dong";
$elang->suara = "Miiiipp";


echo "Elang <br>";
echo "Yang Bernama : $elang->nama <br>";
echo "Jumlah Kaki Sebanyak : $elang->jumlah_kaki <br>";
echo "Apakah Bisa Terbang ? $elang->bisa_terbang <br>";
echo "Suaranya : $elang->suara <br>";
echo "<hr>";

class Angsa {
	public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$angsa = new Angsa;
$angsa->nama = "Kity";
$angsa->jumlah_kaki = "2";
$angsa->bisa_terbang = "Iya bisa";
$angsa->suara = "Kwaaakk";


echo "Angsa  <br>";
echo "Yang Bernama : $angsa->nama <br>";
echo "Jumlah Kaki Sebanyak : $angsa->jumlah_kaki <br>";
echo "Apakah Bisa Terbang ? $angsa->bisa_terbang <br>";
echo "Suaranya : $angsa->suara <br>";
echo "<hr>";
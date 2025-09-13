<?php
include("modelMobil.php");
session_start();

if (!isset($_SESSION['listMobil'])){
    $_SESSION['listMobil'] = array();
}

function createMobil(){
    $mobil = new cars();
    $mobil->model = $_POST['model'];
    $mobil->gambar = $_POST['img'];
    $mobil->kategori = $_POST['kategori'];
    $mobil->merek = $_POST['merek'];
    $mobil->negara = $_POST['negara'];
    $mobil->tahun = $_POST['tahun'];
    array_push($_SESSION['listMobil'], $mobil);
}

function editMobil($IDMobil){
    $mobil = $_SESSION['listMobil'][$IDMobil];
    $mobil->model = $_POST['model'];
    $mobil->gambar = $_POST['img'];
    $mobil->kategori = $_POST['kategori'];
    $mobil->merek = $_POST['merek'];
    $mobil->negara = $_POST['negara'];
    $mobil->tahun = $_POST['tahun'];
}

function getAllMobil(){
    return $_SESSION['listMobil'];
}

function deleteMobil($mobilIndex){ 
    unset($_SESSION['listMobil'][$mobilIndex]);
}

function getMobilWithID($IDMobil) {
    return $_SESSION['listMobil'][$IDMobil];
}

if (isset($_POST['daftar'])) {
    createMobil();
    header("Location: view.php");
}

if (isset($_GET['deleteID'])) {
    deleteMobil($_GET['deleteID']);
    header("Location: view.php");
}

if (isset($_POST['edit'])) {
    editMobil($_POST['inputID']);
    header("Location: view.php");
}
?>
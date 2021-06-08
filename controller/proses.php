<?php

include '../model/database.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	$db->input($_POST['username'],$_POST['email'],$_POST['password']);
	header("location:../view/tampil.php");
}elseif($aksi == "hapus"){
	$db->hapus($_GET['id']);
	header("location:../view/tampil.php");
}elseif($aksi == "update"){
	$db->update($_POST['id'],$_POST['username'],$_POST['email'],$_POST['password']);
	header("location:../view/tampil.php");
}else if($aksi == "login"){
    foreach($db->tampil_data() as $x){
        if($_POST['username'] == $x['username'] && $_POST['password'] == $x['password']){
            header("Location:../view/Home.php");  
            break;
        }else if($_POST['username'] == "admin" && $_POST['password'] == "user"){
            header("Location:../view/tampil.php");
            break;
        }else{
            header("Location:../view/login.php");
        }
    }
}
elseif ($aksi == "google"){
    require_once "../config/config.php";
    if(isset($_SESSION['acces_token'])){
        $google_client->setAccessToken($_SESSION['access_token']);
    }
    elseif (isset($_GET['code'])) {
        $token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);
        $_SESSION['access_token'] = $token;
    }

    $google_service = new Google_Service_Oauth2($google_client);
    $data = $google_service->userinfo_v2_me->get();
// var_dump($data);
    $_SESSION['email'] = $data['email'];
    $_SESSION['name']=$data['name'];
    $password = 69420;
    $db ->input($_SESSION['name'],$_SESSION['email'],$password);   
    header('location:../view/home.php');
}

?>
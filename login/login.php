<?php
include "../session.php";
include "../connect.php";

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $query = mysqli_query($connect, "select * from user where password = '$password'");
    $cek = mysqli_num_rows($query);

    if($cek > 0){
        $_SESSION['email'] = $email;
        //Membuat session dari semua isi tabel di database
        $query = mysqli_query($connect, "select * from user where email = '$email'");
        $data = mysqli_fetch_array($query);
        $_SESSION['name'] = $data['name'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['pangkat'] = $data['pangkat'];

        echo "<script>alert('Login Success');</script>";
        echo "<script>location.href='../home/home.php';</script>";
    }
    else{
        echo "<script>alert('Login Failed');</script>";
        echo "<script>location.href='sign_in.php';</script>";
    }
}
?>
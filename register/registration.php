<?php
if(isset($_POST['save'])){
    include "../connect.php";

    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $username = $_POST['username'];
    $name = $_POST['name'];


    $query = mysqli_query($connect, "select * from user where email = '$email'");
    $cek = mysqli_num_rows($query);

    if($cek > 0){
        echo "<script>alert('Email already registered');</script>";
        echo "<script>location.href='sign_up.php';</script>";
    }else{
        if($password == $cpassword){
            $password = md5($password);
            $query = mysqli_query($connect, "insert into log set email = '$email'");
            $query = mysqli_query($connect, "insert into user set
            email = '$email',
            username = '$username', 
            password = '$password', 
            name = '$name'") or die(mysqli_error($connect));
            echo "<script>alert('Registration Success');</script>";
            echo "<script>location.href='../login/sign_in.php';</script>";
        }else{
            echo "<script>alert('Password not match');</script>";
            echo "<script>location.href='sign_up.php';</script>";
        }
    }
}
?>
<?php
$login = 0;
$invalid = 0;



if($_SERVER['REQUEST_MRTHOD'] == 'POST'){
    include 'connect.php';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirmPassword'];

    //inserting require datas
    //$sql = "insert into `sign` (username, email, password) values ('$username', '$email', '$password')";
    $sql = "Select * from `sign` where email = '$email' and password = '$password' ";


    $result = mysqli_query($conn, $sql);
     //checking condition
     if($result){
        $num = mysqli_num_rows($result);
        if ($num > 0){
            $login = 1 //successful
            session_start();
            $_SESSION['email'] = $email;
            header('location: ./home.php');
           
        }else{
            $invalid //invalid detail
        }
          
     }
}
?>
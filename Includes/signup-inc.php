<?php
$success = 0;
$user = 0;





if($_SERVER['REQUEST_MRTHOD'] == 'POST'){
    include 'connect.php';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirmPassword'];

    //inserting require datas
    //$sql = "insert into `sign` (username, email, password) values ('$username', '$email', '$password')";
    $sql = "Select * from `sign` where email = '$email' ";
    $result = mysqli_query($conn, $sql);
     //checking condition
     if($result){
        $num = mysqli_num_rows($result);
        if ($num > 0){
           // echo "Email already exist";
           $user = 1;
        }else{
            $sql = "insert into `sign` (username, email, password) values ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
        } if ($result){
            //echo "Sign Up Successful";
            $success = 1;
            header('Location: login.php');
        } else {
            die (mysquli_error($conn));
        }
     }
}
?>
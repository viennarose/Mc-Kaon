<?php
    session_start();
    require 'db/connect.php';

if(isset($_POST['login'])){
        $username = $_POST['username'];
    
$password = $_POST['Password'];
        $sql = "SELECT * FROM account WHERE Username='$username'";
        $query = $connect->query($sql);

        if($query->num_rows < 1){
            $_SESSION['error'] = 'Cannot find account with the username';
        }
        else{
            $row = $query->fetch_assoc();
            if(password_verify($password, $row['Password'])){
                $_SESSION['admin'] = $row['id'];
                   
              
            }
            else{
                $_SESSION['error'] = 'Incorrect password';
            }
        }
        
    }
    else{
        $_SESSION['error'] = 'Input admin credentials first';
    }

    header('location: index.php');
?>


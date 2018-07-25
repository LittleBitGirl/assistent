<?php
    require_once('session.php');
    require_once('db_connection.php');
    $password_one = $_POST["password1"];
    $password_two = $_POST["password2"];
    $name= $_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["number"];
    $iin=$_POST["iin"];
    $msg = "" ;
    if (isset($_SESSION['user_id'])) header("Location: users.php");
      if($password_one==$password_two){
         $query="INSERT INTO `users`(`name`, `email`, `phone`, `password`,`iin`) VALUES ('$name','$email', '$phone', '$password_two', '$iin')";
        if (mysqli_query($conn,$query)==TRUE){
          header("Location: users.php");
          $query->fetch_assoc();
        } 
        else {  
          echo "<script>
                alert('Не удалось связаться с сервером. Пожалуйста повторите позднее.');
                window.location.href='register.php';
                </script>";
        }
    }
    else{
        echo "<script>
                alert('Пароли не совпадают, пожалуйста проверьте введенные пароли.');
                window.location.href='register.php';
                </script>";
      }
?>

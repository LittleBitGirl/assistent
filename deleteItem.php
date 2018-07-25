<?php require_once('session.php');?>
<?php require_once('db_connection.php');?>
<?php
    $user = $_GET['user_id'];
    $result = $conn->query('DELETE FROM users WHERE  id =  "'.$user.'"');
    if ($result == True) {
        $message = "Удалено из базы!";
    }   else $message = "Не удалось удалить!";
    echo "<script>
          alert('".$message."');
          window.location.href='users.php';
          </script>";
?>
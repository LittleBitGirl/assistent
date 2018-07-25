<?php require_once('db_connection.php');?>
<?php session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$id = $_POST['id'];
    $name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$iin = $_POST['iin'];
	$oldpass = $_POST['old_pass'];
	$new1 = $_POST['new_pass1'];
	$new2 = $_POST['new_pass2'];

	$sqlpassword = "SELECT password FROM users WHERE id = '".$id."'";
	$result = $conn->query($sqlpassword);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			if($row["password"] == $oldpass){
				if($new1 !='' && $new1 == $new2){
					$sql = "UPDATE users SET name = '".$name."' , email = '".$email."' , phone = '".$phone."', iin = '".$iin."', password = '".$new1."' WHERE id = '".$id."'";
					$result2 = $conn->query($sql);
				
					if ($result2 == True) {
						header("Location: users.php");
					} else echo "<script>
		                alert('Не удалось редактировать информацию о пользователе. Пожалуйста, повторите позднее.');
		                window.location.href='editItem.php?user_id=".$id."';
		                </script>";
					if ($conn->connect_error) {
						echo "<script>
			                alert('Не удалось связаться с сервером. Пожалуйста, повторите позднее.');
			                window.location.href='editItem.php?user_id=".$id."';
			                </script>";
					} 
				}
				elseif ($new1==null && $new2==null) {
					$sql = "UPDATE users SET name = '".$name."' , email = '".$email."' , phone = '".$phone."' WHERE id = '".$id."'";
					$result3 = $conn->query($sql);
				
					if ($result3 == True) {
						header("Location: users.php");
					} else echo "<script>
		                alert('Не удалось редактировать информацию о пользователе. Пожалуйста, повторите позднее.');
		                window.location.href='editItem.php?user_id=".$id."';
		                </script>";
					if ($conn->connect_error) {
						echo "<script>
			                alert('Не удалось связаться с сервером. Пожалуйста, повторите позднее.');
			                window.location.href='editItem.php?user_id=".$id."';
			                </script>";
					} 
				}
				else echo "<script>
	                alert('Введённые вами новые пароли не совпадают!');
	                window.location.href='editItem.php?user_id=".$id."';
	                </script>";
			} else echo "<script>
		                alert('Неверно введён старый пароль!');
		                window.location.href='editItem.php?user_id=".$id."';
		                </script>";
				
		} 
	} else echo "<script>
                alert('Не удалось связаться с сервером. Пожалуйста, повторите позднее.');
                window.location.href='editItem.php?user_id=".$id."';
                </script>";
} else die("Проблема с POST");

?>
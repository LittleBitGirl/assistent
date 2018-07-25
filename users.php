<?php session_start();?>
<?php require_once('db_connection.php');?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=1">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="libs/bootstrap-3.3.5-dist/css/bootstrap.min.css"  title="no title" charset="utf-8">
    <link rel="stylesheet" href="libs/users.css" type="text/css">
    <title>USERS</title>
  </head>
  <body>
    <h1 class="header text-center" id="users-header">Пользователи</h1>      
    <div id="table" class="col-md-offset-8 center-block text-center">
      <table class="table">
        <tr>
          <th>ID</th>
          <th>ИМЯ</th>
          <th class="change">ЭЛЕКТРОННАЯ ПОЧТА</th>
          <th class="change">НОМЕР ТЕЛЕФОНА</th>
          <th class="change">ИИН</th>
          <th class="change">ДАТА РЕГИСТРАЦИИ</th>
          <th>ОПЦИИ</th>
        </tr>
        <?php
            $result = $conn->query('SELECT * FROM `users` WHERE id >= 0 ');
            while($row = $result->fetch_array()){
          ?>
        <tr data-id="<?php echo $row['id']?>" data-name="<?php echo $row['name']?>" data-phone="<?php echo $row['phone']?>" data-email="<?php echo $row['email']?>" data-password="<?php echo $row['password']?>" data-date="<?php echo $row['date']?>">
          
          <td><?php echo $row['id'] ?></td>
          <td><?php echo $row['name'] ?></td>
          <td class="change"><?php echo $row['email'] ?></td>
          <td class="change"><?php echo $row['phone'] ?></td>
          <td class="change"><?php echo $row['iin'] ?></td>
          <td class="change"><?php echo $row['date'] ?></td>
          <td><?php if(session_id() != '') echo 
        ' <a id="editref" href = "editItem.php?user_id='.$row["id"].'"><button type="input" id="editItem" class="edit" data-dismiss="modal" aria-label="Edit">
         <span class="edit_span glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>
        <a href = "deleteItem.php?user_id='.$row["id"].'"><button type="input" id="deleteItem" class="close" data-dismiss="modal" aria-label="Delete">
          <span class="close_span" aria-hidden="true">&times;</span></button></a>'
      ?></td>
        </tr>
        <?php }?>
      </table>
    </div>

  </body>
  <script src="libs/jquery/jquery-3.2.1.min.js" charset="utf-8"></script>
  <script src="libs/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
</html>

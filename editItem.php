<?php require_once('session.php');?>
<?php require_once('db_connection.php');?>
<?php
    $user = $_GET['user_id'];
    $result = $conn->query('SELECT * FROM users WHERE  id =  "'.$user.'"');
    if($row = $result->fetch_assoc()) {
        echo 
        ' <html>
        <head>
            <title>Редактор данных пользователя</title>
            <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.teal-blue.min.css">
              <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css"  title="no title" charset="utf-8">
            <link href="libs/style.css" rel="stylesheet" type="text/css">
            <script src="libs/jquery/jQuery-3.2.1.min.js" charset="utf-8"></script>
            <script src="libs/jquery/jQuery-3.2.1.min.js" charset="utf-8"></script>
            <script src="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.min.js"></script>
            <script src="libs/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>

        </head>
        <body>
          <main id="main">
            <h1 class="header text-center">Редактор данных пользователя</h1>
            <div class="registration text-center">
              <form action="itemOptions.php" method="POST" name="myform">
                <div class="mdl-textfield mdl-js-textfield">
                  <span>Идентификационный номер</span>
                  <input class="mdl-textfield__input" type="text" id="sample1" name="id" value = "'.$row["id"].'" readonly/>
                  <label class="mdl-textfield__label" for="sample1"></label>
                </div>
                <div class="mdl-textfield mdl-js-textfield">
                  <span>Имя</span>
                  <input class="mdl-textfield__input" type="text" id="sample1" name="name" value = "'.$row["name"].'"/>
                  <label class="mdl-textfield__label" for="sample1"></label>
                </div>
                <div class="mdl-textfield mdl-js-textfield">
                  <span>Адрес эл.почты</span>
                  <input class="mdl-textfield__input" type="text" id="sample1" name="email" value = "'.$row["email"].'"/>
                  <label class="mdl-textfield__label" for="sample1"></label>
                </div>
                <div class="mdl-textfield mdl-js-textfield">
                  <span>Номер телефона</span>
                  <input class="mdl-textfield__input" type="text" id="sample1" name="phone" value = "'.$row["phone"].'"/>
                  <label class="mdl-textfield__label" for="sample1"></label>
                </div>
                <div class="mdl-textfield mdl-js-textfield">
                  <span>ИИН</span>
                  <input class="mdl-textfield__input" type="text" id="sample1" name="iin" value = "'.$row["iin"].'"/>
                  <label class="mdl-textfield__label" for="sample1"></label>
                </div>
                <div class="mdl-textfield mdl-js-textfield">
                  <span>Действующий пароль</span>
                  <input class="mdl-textfield__input" type="password" id="sample1" placeholder="обязательное поле" name="old_pass"/>
                  <label class="mdl-textfield__label" for="sample1"></label>
                </div>
                <div class="mdl-textfield mdl-js-textfield">
                  <span>Новый пароль</span>
                  <input class="mdl-textfield__input" type="password" id="sample1" placeholder="по желанию" name="new_pass1"/>
                  <label class="mdl-textfield__label" for="sample1"></label>
                </div>
                <div class="mdl-textfield mdl-js-textfield">
                  <span>Подтвердите пароль</span>
                  <input class="mdl-textfield__input" type="password" id="sample1" name="new_pass2"/>
                  <label class="mdl-textfield__label" for="sample1"></label>
                </div>
                <input type="submit" class="save-button center-block mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" value="Сохранить изменения"/>
              </form>
                </div>
              </main>
            </body>
        </html>';

      } else echo "0 results";
?>
  <!DOCTYPE html>
  <html>
  <head>
      <title>Регистрация</title>
      <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.teal-blue.min.css">
  	  <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css"  title="no title" charset="utf-8">
      <link href="libs/style.css" rel="stylesheet" type="text/css">
      <script src="libs/jquery/jQuery-3.2.1.min.js" charset="utf-8"></script>
      <script src="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.min.js"></script>
      <script src="libs/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>

  </head>
  <body>
    <main id="main">
      <div class="registration text-center center-block">
        <form action="reg_db.php" method="POST">
          <p><?php?></p>
          <h3 class="header">Регистрация</h3>
          <div class="mdl-textfield mdl-js-textfield">
            <span>Имя</span>
            <input class="mdl-textfield__input" type="text" class="sample1" name="name"/>
            <label class="mdl-textfield__label" for="sample1"></label>
          </div>
          <div class="mdl-textfield mdl-js-textfield">
            <span>ИИН</span>
            <input class="mdl-textfield__input" type="text" class="sample1" name="iin"/>
            <label class="mdl-textfield__label" for="sample1"></label>
          </div>
          <div class="mdl-textfield mdl-js-textfield">
            <span>E-mail</span>
            <input class="mdl-textfield__input" type="text" class="sample1" name="email"/>
            <label class="mdl-textfield__label" for="sample1"></label>
          </div>
          <div class="mdl-textfield mdl-js-textfield">
            <span>Телефон</span>
            <input class="mdl-textfield__input" type="text" class="sample1" name="number"/>
            <label class="mdl-textfield__label" for="sample1"></label>
          </div>
          <div class="mdl-textfield mdl-js-textfield">
            <span>Пароль</span>
            <input class="mdl-textfield__input" type="password" class="sample1" name="password1" />
            <label class="mdl-textfield__label" for="sample1"></label>
          </div>
          <div class="mdl-textfield mdl-js-textfield">
            <span>Подтвердите пароль</span>
            <input class="mdl-textfield__input" type="password" class="sample1" name="password2" />
            <label class="mdl-textfield__label" for="sample1"></label>
          </div>
          <input type="submit" class="center-block mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent", style = "background-color: black; font-family: 'Montserrat', serif" value="Зарегистрироваться"/>
        </form>
  		</div>
      </main>
  </body>
  </html>

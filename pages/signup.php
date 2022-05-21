<?php
session_start();
unset($_SESSION['warning1']);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Войти</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <link href="../css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center bg-dark">
    
<main class="form-signin w-100 mt-4 m-auto ">
  <form method="post" action="../php/signup_calc.php">
  <div class="logo">
  <a href="../index.php">
    <img class="mb-3" src="../images/icon.png" alt="" width="75" height="75">
</a>
</div>
    <h1 class="h3 mb-3 fw-normal ten">Tennis club</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
      <label for="floatingPassword">Пароль</label>
    </div>
    <?php
    if(isset($_SESSION['warning'])){
      echo '<p class="text-danger mb-0" style ="font-size: 90%; "> ';
      echo $_SESSION['warning'];
      echo '</p>';
      echo '<a href="../pages/login.php" class="text-warning ">Зарегистрироваться</a>';

    }
    ?>
    
    <button class="w-100 btn btn-lg btn-warning mt-3" type="submit">Войти</button>
  </form>
</main>


    
  </body>
</html>

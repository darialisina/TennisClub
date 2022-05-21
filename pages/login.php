<?php
session_start();
unset($_SESSION['warning']);
?>
<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


<link href="../css/signin.css" rel="stylesheet">
<body class="text-center bg-dark">
<main class="form-signin w-100 mt-4 m-auto bg-dark">
  <form method="post" action="../php/log_calc.php">
  <div class="logo">
  <a href="../index.php">
    <img class="mb-3" src="../images/icon.png" alt="" width="75" height="75">
</a>
</div>
    <h1 class="h3 mb-3 fw-normal ten">Tennis club</h1>

    <div class="form-group">
 <div class="cols-sm-10">
 <div class="input-group mt-3">
 <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
 <input type="text" class="form-control" name="name" id="name" placeholder="Имя" style="border-radius: 5px;" required/>
 </div>
 </div>
 </div>
    </div>
    <div class="form-group">
 <div class="cols-sm-10">
 <div class="input-group mt-3">
 <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
 <input type="text" class="form-control" name="surname" id="surname" placeholder="Фамилия" style="border-radius: 5px;" required/>
 </div>
 </div>
 </div>

 <div class="form-group">
 <div class="cols-sm-10">
 <div class="input-group mt-3">
 <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
 <input type="email" class="form-control" name="email" id="email" placeholder="Email" style="border-radius: 5px;" required/>
 </div>
 </div>
 </div>

 <div class="form-group">
 <div class="cols-sm-10">
 <div class="input-group mt-3">
 <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
 <input type="phone" class="form-control" name="phone" id="phone" placeholder="Номер телефона" style="border-radius: 5px;" required/>
 </div>
 </div>
 </div>

 <div class="form-group">
 <div class="cols-sm-10">
 <div class="input-group mt-3">
 <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
 <input type="password" class="form-control" name="password" id="password" placeholder="Пароль" style="border-radius: 5px;" required/>
 </div>
 </div>
 </div>
 <?php
 if(isset($_SESSION['warning1'])){
      echo '<p class="text-danger mb-0" style ="font-size: 90%; "> ';
      echo $_SESSION['warning1'];
      echo '</p>';
      echo '<a href="../pages/signup.php" class="text-warning ">Войти</a>';

    }
    ?>

    
    <button class="w-100 btn btn-lg btn-warning mt-3" type="submit">Зарегистрироваться</button>
  </form>
</main>
</body>
 
 </form>
 </div>
 </div>
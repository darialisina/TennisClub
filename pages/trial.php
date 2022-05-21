<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Пробное занятие</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <link href="../css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center bg-dark">
    
<main class="form-signin1 w-100 m-auto ">
  <form method="post" action="../php/sendTrial.php">
    <img class="mb-1" src="../images/icon.png" alt="" width="50" height="50">
    <h1 class="h3 mb-3 fw-normal ten">Tennis club</h1>

    <div class="form-floating mb-2">
      <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="name" require>
      <label for="floatingInput">Имя</label>
    </div>
    <div class="form-floating mb-2">
      <input type="text" class="form-control" id="floatingPassword" placeholder="Surname" name="surname" require>
      <label for="floatingPassword">Фамилия</label>
    </div>
    <div class="form-floating mb-2">
      <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email" require>
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating mb-2">
      <input type="phone" class="form-control" id="floatingInput" placeholder="Phone" name="phone" require>
      <label for="floatingInput">Номер телефона</label>
    </div>
    <div class="form-floating mb-2">
      <select type="text" class="form-control" id="floatingInput" placeholder="Level" name="level" require>
        <option value=0>Начинающий</option>
        <option value=1>Любитель</option>
        <option value=2>Профессионал</option>
</select>
      <label for="floatingInput ">Уровень</label>
    </div>
    <div class="form-floating mb-2">
      <input type="text" class="form-control" id="floatingInput" placeholder="Comment" name="comment" value="-">
      <label for="floatingInput">Комментарий</label>
    </div>

    
    <button class="w-100 btn btn-lg btn-warning" type="submit">Записаться на пробное занятие</button>
  </form>
</main>


    
  </body>
</html>

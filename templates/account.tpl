<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Tennis</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/product/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link href="../css/product.css" rel="stylesheet">
    <link href="../css/headers.css" rel="stylesheet">
</head>
<body>

{include '../templates/header.tpl'}

<main>
    <div class="container m-0 p-0">
        <div class="column bg-dark" style="width: 20%; height: 100vh;">
            <a class="btn btn-warning w-100" href="pages/login.php" style="border-radius: 0; font-size: 100%">
                Статистика
            </a>
            <a class="btn btn-dark w-100 text-warning" href="adminUsers.php" style="border-radius: 0; font-size: 100%">
                Пользователи
            </a>
            <a class="btn btn-dark w-100 text-warning" href="pages/login.php" style="border-radius: 0; font-size: 100%">
                Расписание
            </a>
        </div>
    </div>
</main>

<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 mt-0 border-top">
    <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24">
                <use xlink:href="#bootstrap"/>
            </svg>
        </a>
        <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#">
                <svg class="bi" width="24" height="24">
                    <use xlink:href="#twitter"/>
                </svg>
            </a></li>
        <li class="ms-3"><a class="text-muted" href="#">
                <svg class="bi" width="24" height="24">
                    <use xlink:href="#instagram"/>
                </svg>
            </a></li>
        <li class="ms-3"><a class="text-muted" href="#">
                <svg class="bi" width="24" height="24">
                    <use xlink:href="#facebook"/>
                </svg>
            </a></li>
    </ul>
</footer>

</body>
</html>
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

    <link href="css/product.css" rel="stylesheet">
    <link href="css/headers.css" rel="stylesheet">
</head>
<body>

<header class=" bg-dark d-flex flex-wrap align-items-center justify-content-center justify-content-md-between border-bottom">
    <div class="logo m-2">
        <a href="index.php">
            <img class="" src="images/icon.png" alt="" width="70" height="70">
        </a>
    </div>


    {if !isset($user)}
        <div class="col-md-3 text-end">
            <a class="btn btn-outline-warning me-2" href="pages/login.php">
                Зарегистрироваться
            </a>
            <a class="btn btn-warning me-3" href="pages/signup.php">Войти
            </a>
        </div>
    {else}
        <div class="col-md-5 text-end">
            <p1 class="text-light text-end ">{$user}</p1>
            <a class="btn btn-outline-warning me-2" href="pages/account.php">
                Личный кабинет
            </a>
            <a class="btn btn-warning me-3" href="php/exit.php">Выйти
            </a>
        </div>
    {/if}
</header>

<main>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
        <div class="back_img me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5 fw-normal">Теннисный клуб</h2>
                <p class="lead fw-normal">для взрослых и детей</p>
            </div>
            <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                <p class="p-5 lead">Наш теннисный клуб — это спортивно-семейный теннисный центр, на кортах которого
                    повышают своё мастерство спортсмены и новички, дети от 3-х лет и старше, а так же семейные пары с
                    детьми. Каждые выходные на кортах клуба проходят соревнования как в одиночном, так и в парном
                    разряде среди любителей и ветеранов тенниса. Существует так же календарь детских и взрослых
                    турниров.</p>
            </div>
        </div>
    </div>
    <div class="position-relative back_i overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <div class="bg-dark shadow-sm mx-auto"
                 style="width: 100%; height: 300px; border-radius: 21px 21px 21px 21px;">
                <h1 class="display-6 fw-normal sub pt-3">Записаться на пробное занятие</h1>
                <p class="lead fw-normal sub pt-4">Если Вы опытный игрок или новичок, опробуйте свои силы у нас
                    бесплатно!</p>
                <a class="btn btn-warning" href='pages/trial.php'>Записаться</a>
            </div>
        </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
        <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5 fw-normal">Корт на траве</h2>
                <p class="lead fw-normal">Безопасный выбор для новичков и детей.</p>
            </div>
            <div class="bggrass shadow-sm mx-auto"
                 style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
        </div>
        <div class="bg-warning me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="my-3 py-3">
                <h2 class="display-5 fw-normal">Хард-корт</h2>
                <p class="lead fw-normal">Для готовых испытать себя игроков.</p>
            </div>
            <div class="bghard shadow-sm mx-auto"
                 style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
        </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
        <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5 fw-normal">Тренеры</h2>
                <p class="lead fw-normal">Только квалифицированные специалисты.</p>
                <div class="container d-flex justify-content-center py-3">
                    <div class="col-4 ">
                        <div class="row">
                            <div class="bg1 shadow-sm "
                                 style="width: 90%; height: 350px; border-radius: 21px 21px 0 0;"></div>
                        </div>
                        <div class="row pt-2 pe-4">
                            <p class="lead fw-normal">Нестеров Роман</p>
                        </div>
                    </div>
                    <div class="col-4 ">
                        <div class="row">
                            <div class="bg2 shadow-sm "
                                 style="width: 90%; height: 350px; border-radius: 21px 21px 0 0;"></div>
                        </div>
                        <div class="row pt-2 pe-4">
                            <p class="lead fw-normal">Медведев Александр </p>
                        </div>
                    </div>
                    <div class="col-4 ">
                        <div class="row">
                            <div class="bg3 shadow-sm "
                                 style="width: 90%; height: 350px; border-radius: 21px 21px 0 0;"></div>
                        </div>
                        <div class="row">
                            <p class="lead fw-normal pt-2 pe-4">Карандин Степан</p>
                        </div>
                    </div>
                    <div class="col-4 ">
                        <div class="row">
                            <div class="bg4 shadow-sm "
                                 style="width: 90%; height: 350px; border-radius: 21px 21px 0 0;"></div>
                        </div>
                        <div class="row">
                            <p class="lead fw-normal pt-2 pe-4">Гавриленко Василий</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
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
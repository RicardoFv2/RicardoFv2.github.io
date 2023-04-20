<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Registro</title>
    <link rel="icon" type="image/x-icon" href="../img/icons/cerdoIcon.png">
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="../css/responsive.css">


</head>

<body style="background-color: white;">

    <header>
        <div class="boxmenu">
            <button class="menus izqu" onclick="window.location.href='../index.php'">
                INICIO
            </button>
            <button class="menus izqu" onclick="window.location.href='../menu.php'">
                MENU
            </button>

            <div class="cent">
                <img class="liston" src="https://i.ibb.co/ZYYNFzR/vecteezy-ribbon-1197212.png" />
            </div>
            <div class="cent">
                <img class="porf" src="https://i.ibb.co/T0j72fF/logob.png" />
            </div>

            <button class="menus dere" onclick="window.location.href='../contacto.php'">CONTACTO </button>

            <button class="menus dere" onclick="window.location.href='../nosotros.php'">NOSOTROS </button>

            <button class="menus dere"></button>

        </div>

    </header>
    <br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

    <div class="wrapper">
        <div class="content">
<br><br><br>
            <form class="form-control" action="registrar.php" method="post" style="background-color:#FF8A33;">

                <input class="form-control" required name="correo" type="email" placeholder="Tu correo electrónico">
                <br>
                <input class="form-control" required name="palabra_secreta" type="password" placeholder="Contraseña">
                <br>
                <input class="form-control" required name="palabra_secreta_confirmar" type="password"
                    placeholder="Confirma tu contraseña">
                <br>
                <!--Lo siguiente envía el formulario-->
                <input class="form-control btn btn-dark btn btn-primary btn-lg" type="submit" value="Registrarme">
                <br>
                <br>
                <a class="link-dark" href="../menu.php">Ya tengo una cuenta</a>

            </form>
            <br>
        </div>
    </div>
    <footer>
        Ordenar a través de nuestro call center al (503) 2121-2222
        <br /><br />Información para Eventos y Piñatas al (503) 2510-2929
        <br /><br />
        <hr style="width: 80%" />
        <br />
        © 2023 La Granjita International LLC. Todos los derechos reservados. El
        nombre La Granjita, logos, imágenes y marcas relacionadas son marcas
        registradas of La Granjita Company, La Granjita Int. LLC para El Salvador
        y Granjita Foods S.A. de C.V. para El Salvador.
        <br /><br />

        Formas de Pago:
        <figure class="formasPago">
            <img class="iconosFormasdePago" src="../img/icons/efectivo.png" alt="Dinero en Efetivo" />
            <img class="iconosFormasdePago" src="../img/icons/mastercard.png" alt="Mastercard" />
            <img class="iconosFormasdePago" src="../img/icons/visa.png" alt="Visa" />
        </figure>

        <figure class="formasPago">
            <a href="https://es-la.facebook.com/">
                <img class="iconosRedes" src="../img/icons/icons8-facebook.svg" alt="logo Facebook" /></a>
            <a href="https://twitter.com/?lang=es">
                <img class="iconosRedes" src="../img/icons/icons8-twitter.svg" alt="logo Twitter" /></a>
            <a href="https://www.instagram.com/">
                <img class="iconosRedes" src="../img/icons/icons8-instagram.svg" alt="logo Instagram" /></a>
        </figure>
    </footer>
    </div>
</body>

</html>
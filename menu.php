<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="img/icons/cerdoIcon.png">

  <title>La Granjita</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <link rel="stylesheet" href="css/font.css">
  <link rel="stylesheet" href="css/login.css" />
</head>
<style>
  .tftable {
    table-layout: fixed;
    font-size: 12px;
    color: #333333;
    width: 100%;
    border-width: 1px;
    border-color: #efefef;
    border-collapse: collapse;

    text-align: center;
  }

  .tftable th {
    font-size: 15px;
    background-color: #2C3E50;
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #729ea5;
    width: 50px;
    word-wrap: break-word;
    color: white;

  }

  .tftable tr {
    background-color: #ffffff;
  }

  .tftable td {
    font-size: 14px;
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    word-wrap: break-word;
    border-color: #729ea5;
    border-left: 0;
    border-right: 0;
  }

  .tftable tr:hover {
    background-color: #e2e2e2;
  }
</style>

<body>

  <!-- HEADER CON PHP -->
  <?php include 'includes/header.php' ?>
  <!-- HEADER CON PHP -->



  <div id="wrapper">
    <div id="content">
      <div class="container">

        <?php
        session_start();
        if (empty($_SESSION["correo"])) { ?>

          <div class="box G"><div style="display:flex;justify-content:center;"><button style="width:100%;" class="abrirModal" id="abrirModal">Hacer mi pedido</button></div></div>

          <div id="ventanaModal" class="modal">
            <div class="contenido-modal">
              <span class="cerrar">&times;</span>
              <h2>Login</h2>
              <form action="login/login.php" method="post">
                <h3 class="title">Log</h3>
                <input type="email" name="correo" placeholder="enter your email" class="box3" required>
                <input type="password" name="palabra_secreta" placeholder="enter your password" class="box3" required>
                <input type="submit" value="Iniciar Ahora" class="form-btn" name="submit">
                <p>¿No tienes una cuenta? <a href="login/registro.php">Registrate ahora</a>
                </p>
              </form>
            </div>
          </div>
          <script>
            var modal = document.getElementById("ventanaModal");

            // Botón que abre el modal
            var boton = document.getElementById("abrirModal");

            // Hace referencia al elemento <span> que tiene la X que cierra la ventana
            var span = document.getElementsByClassName("cerrar")[0];

            // Cuando el usuario hace click en el botón, se abre la ventana
            boton.addEventListener("click", function() {
              modal.style.display = "block";
            });

            // Si el usuario hace click en la x, la ventana se cierra
            span.addEventListener("click", function() {
              modal.style.display = "none";
            });

            // Si el usuario hace click fuera de la ventana, se cierra.
            window.addEventListener("click", function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            });
          </script>

            

<?php
        include('conn.php');
        $query = mysqli_query($conn, "select * from `user`");
        while ($row = mysqli_fetch_array($query)) {
        ?>

          <div class="box P">

            <img src="<?php echo $row['foto']; ?>" class="porf">
            <div class="fantasma" style="top:0px;left:0px"><?php echo $row['descripcion']; ?></div>

            <div class="frijol" style="z-index:10;">

              <form method="POST" action="add.php">

                <div class="arroz"><input type="hidden" name="descripcion" value="<?php echo $row['nombre']; ?>"><?php echo $row['nombre']; ?></div>


                <!--<button class="botonbuy"></button>-->

              </form>
            </div>
          </div>

        <?php
        }
        ?>


        <?php } else {  ?>
           
           <div class="box G">

           <br><strong style="margin: 0 auto;"><?php echo $_SESSION['correo']; ?></strong><a style="margin: 0 auto;" href="login/logout.php">Cerrar sesión</a><br>

<table class="tftable">
  <thead>
    <th>Descripcion</th>
    <th>Cantidad</th>
    <th>Precio</th>
    <th>Opciones</th>
  </thead>
  <tbody>
    <?php
    include('conn.php');
    $suma = 0;
    $query = mysqli_query($conn, "select * from `tmp`");
    while ($row = mysqli_fetch_array($query)) {
      $total = $row['cantidad'] * $row['precio'];
      $suma += $total;
    ?>
      <tr>
        <td><?php echo $row['descripcion']; ?></td>
        <td><?php echo $row['cantidad']; ?></td>
        <td>$<?php echo $row['precio']; ?></td>
        <td>
          <a href="delete.php?id=<?php echo $row['id']; ?>"><img src="img/icons/delete_FILL0_wght400_GRAD0_opsz48.svg"></a>
        </td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>

<form method="POST" action="fact.php">
  <input type="hidden" name="id_cliente" value="9">
  <input type="hidden" name="monto" value="<?php echo number_format($suma, 2); ?>">
  <div style="display:flex;justify-content:center;"><input type="submit" value="Continuar con el Pago" class="botonn"></div>
</form>
</div>
<?php
        include('conn.php');
        $query = mysqli_query($conn, "select * from `user`");
        while ($row = mysqli_fetch_array($query)) {
        ?>

          <div class="box P">

            <img src="<?php echo $row['foto']; ?>" class="porf">
            <div class="fantasma" style="top:0px;left:0px"><?php echo $row['descripcion']; ?></div>

            <div class="frijol" style="z-index:1000;">

              <form method="POST" action="add.php">

                <div class="arroz"><input type="hidden" name="descripcion" value="<?php echo $row['nombre']; ?>"><?php echo $row['nombre']; ?></div>


                <!--<button class="botonbuy"></button>-->
                <input type="text" name="cantidad" value="1" size="1">
                <input type="submit" class="botonbuy" name="precio" value="<?php echo $row['precio']; ?>">

              </form>
            </div>
          </div>

        <?php
        }
        ?>


           <?php } ?>


      </div>
    </div>
  </div>

    <!-- FOOTER CON PHP -->
    <?php include 'includes/footer.php' ?>
  <!-- FOOTER CON PHP -->

</body>

</html>
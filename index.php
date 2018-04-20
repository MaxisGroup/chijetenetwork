<?php session_start();

if (isset($_SESSION['usuario'])) {
  header ('Location: sistema/index.php');
}

require 'configuracion/config.php';

 ?>

<?php require 'recursos/menu/index.php'; ?>
  <div class="inicio_parte1">
    <h2>Bienvenido a ChijeteNetwork</h2>
    <p>La Red Social más creativa del universo.</p>
  </div>
  <div class="inicio_parte2">
    <div class="inicio_sub-parte2_1">
     <h3>¡Exprésate!</h3>
     <p>Puedes expresarte líbremente en ChijeteNetwork!</p>
    </div>
    <div class="inicio_sub-parte2_2">
     <h3>Comparte</h3>
     <p>En ChijeteNetwork puedes compartír lo que te interesa con otras personas!</p>
    </div>
    <div class="inicio_sub-parte2_3">
     <h3>Comunícate</h3>
     <p>ChijeteNetwork es una Red Social donde fomentamos la comunicación, ¡Comunícate con tus amigos y los demás!</p>
    </div>
  </div>
  <div class="inicio_parte3">
    <div class="inicio_sub-parte3_1">
      <h3>¡Únete a Nosotros!</h3>
      <a class="registrarse_boton" href="recursos/registro/registrate.php">Registrarse</a>
    </div>
    <div class="inicio_sub-parte3_2">
      <h3>¡Ingresa a tu Cuenta!</h3>
      <a class="iniciosesion_boton" href="recursos/registro/login.php">Iniciar Sesión</a>
    </div>
  </div>
<?php require 'recursos/footer.php'; ?>

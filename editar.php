
<?php 
     include 'inc/funciones/funciones.php';
     include 'inc/layout/header.php'; 

     $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

     if(!$id) {
          die('No es válido');
     }

     $resultado = obtenerContacto($id);
     $contacto = $resultado->fetch_assoc();
?>


<div class="contenedor-barra">
     <div class="contenedor barra">
          <h1>Editar Contacto</h1>
     </div>
</div>

<div class="bg-amarillo contenedor sombra">
     <form id="contacto" action="#">
          <legend>Edite el Contacto</span> </legend>

          <?php include 'inc/layout/formulario.php'; ?>
     </form>
</div>

<div class="contenedor btn-cancelar">
     <a href="index.php" class="btn volver">Cancelar</a>
</div>


<?php include 'inc/layout/footer.php'; ?>

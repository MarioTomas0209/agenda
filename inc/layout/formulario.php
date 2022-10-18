<div class="campos">
     <div class="campo">
          <label for="nombre">Nombre:</label>
          <input 
               type="text" 
               placeholder="Nombre Contacto" 
               id="nombre"
               value="<?php
               // $contacto['nombre'] = false;
               echo ($contacto['nombre']) ? $contacto['nombre'] : '';  ?>"
          >
     </div>
     <div class="campo">
          <label for="empresa">Email:</label>
          <input 
               type="email" 
               placeholder="Correo Electrónico" 
               id="empresa"
               value="<?php
               // $contacto['empresa'] = false;
               echo ($contacto['empresa']) ? $contacto['empresa'] : '';  ?>"
          >
     </div>
     <div class="campo">
          <label for="telefono">Teléfono:</label>
          <input 
               type="tel" 
               placeholder="Teléfono Contacto" 
               id="telefono"
               value="<?php 
               // $contacto['telefono'] = false;
               echo ($contacto['telefono']) ? $contacto['telefono'] : '';  ?>"
          >
     </div>
</div>
<div class="campo enviar">
     <?php
          $textoBtn = ($contacto['telefono']) ? 'Guardar' : 'Añadir';
          $accion = ($contacto['telefono']) ? 'editar' : 'crear';
     ?>
     <input type="hidden" id="accion" value="<?php echo $accion; ?>">
     <?php if( isset( $contacto['id'] )) { ?>
          <input type="hidden" id="id" value="<?php echo $contacto['id']; ?>">
     <?php } ?>
     <input type="submit" value="<?php echo $textoBtn; ?>">
</div>
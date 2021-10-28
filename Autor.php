<?php 
  session_start();

  unset($_SESSION['consulta']);

 ?>
<!DOCTYPE html>
<html>
    <head>
         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
       
        <meta charset="UTF-8">
        <title>Tabla Dinamica</title>
        
       
        
        
        
        
        
            <link rel="stylesheet" href="tabla.css">
        
        
        
        <link rel="stylesheet"  type="text/css" href="librerias/bootstrap/css/bootstrap.css">
        
       
        <link rel="stylesheet"  type="text/css" href="librerias/alertifyjs/css/alertify.css">
        <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
        <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css"> 
         
         <script src="librerias/jquery-3.2.1.min.js"></script>
        <script src="js/funciones.js"></script>
        <script src="librerias/bootstrap/js/bootstrap.js"></script>
        <script src="librerias/alertifyjs/alertify.js"></script>
        <script src="librerias/select2/js/select2.js"></script> 
    </head>
    <body>
    <div class="jumbotron p-3 p-md-5 text-warning rounded bg-jarvin">    
        
       
         
          
          <CENTER>Tabla dinamica Autores</center>
         
        
        
        <div class="container">
            <div id="buscador"></div>
            <div id="tabla"></div>
        </div>
         
        
   <!-- Modal para registros nuevos -->
<!-- Modal -->
    <div class="modal fade" id="Modanuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Agregar Autor</h4>
            
          </div>
          <div class="modal-body">
              <label>Nombre</label>
              <input type="text" name=""id="nombre" class="form-control input-sm">
              <label>Apellido</label>
              <input type="text" name="" id="apellido"class="form-control input-sm">
              <label>Pais</label>
              <input type="text" name="" id="pais" class="form-control input-sm">
              
              

              
              
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">Agregar</button>
          </div>
        </div>
      </div>
    </div>
 
   <!-- Modal para edicion de registros -->

<!-- Modal -->
    <div class="modal fade" id="Modaledicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Actualizar</h4>
          </div>
          <div class="modal-body">
              
              <input type="text" hidden="" id="idpersona" name="">
              <label>Nombre</label>
              <input type="text" name=""id="nombreu" class="form-control input-sm">
              <label>Apellido</label>
              <input type="text" name="" id="apellidou"class="form-control input-sm">
              <label>Pais</label>
              <input type="text" name="" id="paisu" class="form-control input-sm">
              
 
        

              
              
              
         
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal" >Actualizar</button>
           
          </div>
        </div>
      </div>
    </div>
      
     
    </div>
       
    </body>
</html>

<script type="text/javascript">
 
 $(document).ready(function(){
     
    $('#tabla').load('componentes/tabla.php');
    $('#buscador').load('componentes/buscador.php');     
 });
 </script>
 
 <script type="text/javascript">
    $(document).ready(function(){
            $('#guardarnuevo').click(function(){
                nombre=$('#nombre').val();
                apellido=$('#apellido').val();
                pais=$('#pais').val();
                
                
            if($('#nombre').val()==""){
        alertify.alert("Debes llenar la informacion");
        alertify.error("Faltan datos :(");
        return false;  
        
    }

        agregardatos(nombre,apellido,pais);
         $('#nombre').val("");  
             $('#apellido').val(""); 
             $('#pais').val(""); 
             

            });
            
            
     $('#actualizadatos').click(function(){ 
               actualizaDatos();
              
           });
        });
    
    
 </script>   
     
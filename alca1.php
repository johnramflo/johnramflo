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
        
        
       
         
          <br>
          <br>
          <CENTER>Tabla dinamica AlCA</center>
         
        
        
        <div class="container">
            <div id="buscador_alca"></div>
            <div id="tabla_alca"></div>
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
              <label>ID</label>
              <input type="text" name="" id="idpersona" class="form-control input-sm">
              <label>Primer Nombre</label>
              <input type="text" name="" id="primern" class="form-control input-sm">
              <label>Segundo Nombre</label>
              <input type="text" name="" id="segundon"class="form-control input-sm">
              <label>Primer Apellido</label>
              <input type="text" name=""id="primera" class="form-control input-sm">
              <label>Segundo Apellido</label>
              <input type="text" name="" id="segundoa"class="form-control input-sm">
              <label>Tipo</label>
              <input type="text" name="" id="codigotipo" class="form-control input-sm">
              <label>Sede</label>
              
              <?php
require_once "php/conexion.php";
$conexion2= conexion2();
$sql3="select idsede,ciudad,nombre
                    from sede";
            $resul3=mysqli_query($conexion2,$sql3);

?>
         <label>Prueba</label>
        <select id="idsede" class="form-control input-sm">
         <option value="0">Seleciona uno</option>
         <?php
          while($ver1=mysqli_fetch_row($resul3)):
         ?>
          <option value="<?php echo $ver1[0] ?>">
              <?php echo $ver1[1]." ".$ver1[2] ?>
          
          </option>
        <?php
          endwhile;
        
        ?>
        
        
        </select>
              
              
             
              
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo_alca">Agregar</button>
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
              <input type="text" name="" id="codigoalca" class="form-control input-sm">
              <label>ID</label>
              <input type="text" name="" id="idpersonau" class="form-control input-sm">
              <label>Primer Nombre</label>
              <input type="text" name=""id="primernu" class="form-control input-sm">
              <label>Segundo Nombre</label>
              <input type="text" name="" id="segundonu"class="form-control input-sm">
              <label>Primer Apellido</label>
              <input type="text" name=""id="primerau" class="form-control input-sm">
              <label>Segundo Apellido</label>
              <input type="text" name="" id="segundoau"class="form-control input-sm">
              <label>Tipo</label>
              
              <input type="text" name="" id="codigotipou" class="form-control input-sm">
                 <label>Sede</label>
              <?php
require_once "php/conexion.php";
$conexion2= conexion2();
$sql3="select idsede,ciudad,nombre
                    from sede";
            $resul3=mysqli_query($conexion2,$sql3);

?>
         <label>Prueba</label>
        <select id="idsedeu" class="form-control input-sm">
         <option value="">Seleciona uno</option>
         <?php
          while($ver1=mysqli_fetch_row($resul3)):
         ?>
          <option value="<?php echo $ver1[0] ?>">
              <?php echo $ver1[1]." ".$ver1[2] ?>
          
          </option>
        <?php
          endwhile;
        
        ?>
        
        
        </select>
              
 
        

              
              
              
         
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-warning" id="actualizadatos_alca" data-dismiss="modal" >Actualizar</button>
           
          </div>
        </div>
      </div>
    </div>
      
     
      
       
    </body>
</html>

<script type="text/javascript">
 
 $(document).ready(function(){
     
    $('#tabla_alca').load('componentes/tabla_alca.php');
    $('#buscador_alca').load('componentes/buscador_alca.php');     
 });
 </script>
 
 <script type="text/javascript">
    $(document).ready(function(){
            $('#guardarnuevo_alca').click(function(){
                idpersona=$('#idpersona').val();
                primern=$('#primern').val();
                 segundon=$('#segundon').val();
                primera=$('#primera').val();
                segundoa=$('#segundoa').val();
                codigotipo=$('#codigotipo').val();
                idsede=$('#idsede').val();
            if($('#idpersona').val()==""){
        alertify.alert("Debes llenar la informacion");
        alertify.error("Faltan datos :(");
        return false;  
        
    }

        agregardatos_alca(idpersona,primern,segundon,primera,segundoa,codigotipo,idsede);
         $('#idpersona').val("");  
             
             

            });
            
            
     $('#actualizadatos_alca').click(function(){ 
               actualizaDatos_alca();
              
           });
        });
    
    
 </script>   
     
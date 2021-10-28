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
     <div class="jumbotron p-3 p-md-5 text-white rounded bg-jarvin">   
        
       
         
          <br>
          <br>
          <CENTER>Tabla dinamica Libros</center>
         
        
        
        <div class="container">
            <div id="buscador_libros"></div>
            <div id="tabla_libros"></div>
        </div>
         
        
   <!-- Modal para registros nuevos -->
<!-- Modal -->
    <div class="modal fade" id="Modanuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Agregar Libro</h4>
            
          </div>
          <div class="modal-body">
              <label>ISB</label>
              <input type="text" name="" id="isb" class="form-control input-sm">
              <label>Nombre</label>
              <input type="text" name="" id="nombre" class="form-control input-sm">
             
             <label>Area</label>

               <?php
               require_once "php/conexion.php";
               $conexion2= conexion2();
               $sql3="select codigoarea,nombre_area
               from area";
                $resul3=mysqli_query($conexion2,$sql3);
                ?>
         
        <select id="area" class="form-control input-sm" onchange='cambioEmpresa2();'>
           <option value="0">Seleciona uno</option>
            <?php
           while($ver1=mysqli_fetch_row($resul3)):
            ?>
           <option value="<?php echo $ver1[0] ?>">
           <?php echo $ver1[0]." ".$ver1[1] ?>
            </option>
             <?php
             endwhile;
             ?>     
        </select>


              <label>Editorial</label>

               <?php
               require_once "php/conexion.php";
               $conexion2= conexion2();
               $sql3="select codigoeditorial,nombre
               from editorial";
                $resul3=mysqli_query($conexion2,$sql3);
                ?>
         
        <select id="editorial" class="form-control input-sm" onchange='cambioEmpresa3();'>
           <option value="0">Seleciona uno</option>
            <?php
           while($ver1=mysqli_fetch_row($resul3)):
            ?>
           <option value="<?php echo $ver1[0] ?>">
           <?php echo $ver1[0]." ".$ver1[1] ?>
            </option>
             <?php
             endwhile;
             ?>     
        </select>
             
              <label>Autor</label>              
              <?php
               require_once "php/conexion.php";
               $conexion2= conexion2();
               $sql3="select codigoautor,nombre,apellido
                    from autor";
                $resul3=mysqli_query($conexion2,$sql3);
                ?>
         
           <select id="autor" class="form-control input-sm" onchange='cambioEmpresa();'>
           <option value="0">Seleciona uno</option>
            <?php
           while($ver1=mysqli_fetch_row($resul3)):
            ?>
           <option value="<?php echo $ver1[0] ?>">
           <?php echo $ver1[0]." ".$ver1[1]." ".$ver1[2]; ?>
            </option>
             <?php
             endwhile;
             ?>     
        </select>


              <label>Año</label>
              <input type="text" name="" id="an" class="form-control input-sm">
              <label>Signatura</label>
              <input type="text" name="" id="signatura" class="form-control input-sm">
              
              
              
             
              
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo_libros">Agregar</button>
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
              <input type="text" name="" id="isb1u" class="form-control input-sm">
            <label>ISB</label>
              <input type="text" name="" id="isb2u" class="form-control input-sm">
              <label>Nombre</label>
              <input type="text" name="" id="nombreu" class="form-control input-sm">
              
              
              
              
              
                        <label>Autor</label>              
              <?php
               require_once "php/conexion.php";
               $conexion2= conexion2();
               $sql3="select codigoautor,nombre,apellido
                    from autor";
                $resul3=mysqli_query($conexion2,$sql3);
                ?>
         
           <select id="autoru" class="form-control input-sm" onchange='cambioEmpresa();'>
           <option value="0">Seleciona uno</option>
            <?php
           while($ver1=mysqli_fetch_row($resul3)):
            ?>
           <option value="<?php echo $ver1[0] ?>">
           <?php echo $ver1[0]." ".$ver1[1]." ".$ver1[2]; ?>
            </option>
             <?php
             endwhile;
             ?>     
        </select>

         <label>Area</label>

               <?php
               require_once "php/conexion.php";
               $conexion2= conexion2();
               $sql3="select codigoarea,nombre_area
               from area";
                $resul3=mysqli_query($conexion2,$sql3);
                ?>
         
        <select id="areau" class="form-control input-sm" onchange='cambioEmpresa2();'>
           <option value="0">Seleciona uno</option>
            <?php
           while($ver1=mysqli_fetch_row($resul3)):
            ?>
           <option value="<?php echo $ver1[0] ?>">
           <?php echo $ver1[0]." ".$ver1[1] ?>
            </option>
             <?php
             endwhile;
             ?>     
        </select>
 
   <label>Editorial</label>

               <?php
               require_once "php/conexion.php";
               $conexion2= conexion2();
               $sql3="select codigoeditorial,nombre
               from editorial";
                $resul3=mysqli_query($conexion2,$sql3);
                ?>
         
        <select id="editorialu" class="form-control input-sm" onchange='cambioEmpresa3();'>
           <option value="0">Seleciona uno</option>
            <?php
           while($ver1=mysqli_fetch_row($resul3)):
            ?>
           <option value="<?php echo $ver1[0] ?>">
           <?php echo $ver1[0]." ".$ver1[1] ?>
            </option>
             <?php
             endwhile;
             ?>     
        </select>
        <script type="text/javascript">
        // funcion que se ejecuta cada vez que se selecciona una empresa
        function cambioEmpresa()
        {
           document.getElementById('showautor').value=document.getElementById('autoru').value;
           
        }
        function cambioEmpresa2()
        {
           
           document.getElementById('showarea').value=document.getElementById('areau').value;
        }
        function cambioEmpresa3()
        {
           
           document.getElementById('showeditorial').value=document.getElementById('editorialu').value;
        }
    </script>




              <label>Año</label>
              <input type="text" name="" id="anu" class="form-control input-sm">
              <label>Signatura</label>
              <input type="text" name="" id="signaturau" class="form-control input-sm">  
        
              <label>Autor2</label>
              <input type="text" name="" id="showautor" class="form-control input-sm">
              <label>Area2</label>
              <input type="text" name="" id="showarea" class="form-control input-sm">
              <label>Editorial2</label>
              <input type="text" name="" id="showeditorial" class="form-control input-sm">

              
              
              
         
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-warning" id="actualizadatos_libros" data-dismiss="modal" >Actualizar</button>
           
          </div>
        </div>
      </div>
    </div>
      
     
      
     </div> 
    </body>
</html>

<script type="text/javascript">
 
 $(document).ready(function(){
     
    $('#tabla_libros').load('componentes/tabla_libros.php');
    $('#buscador_libros').load('componentes/buscador_libros.php');     
 });
 </script>
 
 <script type="text/javascript">
    $(document).ready(function(){
            $('#guardarnuevo_libros').click(function(){
                isb=$('#isb').val();
                nombre=$('#nombre').val();
                 area=$('#area').val();
                editorial=$('#editorial').val();
                autor=$('#autor').val();
                an=$('#an').val();
                signatura=$('#signatura').val();
            if($('#isb').val()==""){
        alertify.alert("Debes llenar la informacion");
        alertify.error("Faltan datos :(");
        return false;  
        
    }

        agregardatos_libros(isb,nombre,area,editorial,autor,an,signatura);
         $('#isb').val("");  
             
             

            });
            
            
     $('#actualizadatos_libros').click(function(){ 
               actualizaDatos_libros();
              
           });
        });
    
    
 </script>   
     
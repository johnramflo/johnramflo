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
          <CENTER>Tabla dinamica Invenatario Libros</center>
         
        
        
        <div class="container">
            <div id="buscador_librosi"></div>
            <div id="tabla_librosi"></div>
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
              <label>Codigo Libro</label>
              <input type="text" name="" id="codigolibro" class="form-control input-sm">
              
               <label>Nombre</label>              
              <?php
               require_once "php/conexion.php";
               $conexion2= conexion2();
               $sql3="select isb,nombre
                    from libros";
                $resul3=mysqli_query($conexion2,$sql3);
                ?>
         
           <select id="nombre" class="form-control input-sm" onchange='cambioEmpresa();'>
           <option value="0">Seleciona uno</option>
            <?php
           while($ver1=mysqli_fetch_row($resul3)):
            ?>
           <option value="<?php echo $ver1[0] ?>">
           <?php echo $ver1[0]." ".$ver1[1]; ?>
            </option>
             <?php
             endwhile;
             ?>     
        </select>



              
              <label>Sede</label>              
              <?php
               require_once "php/conexion.php";
               $conexion2= conexion2();
               $sql3="select codigosede,nombre
                    from sede";
                $resul3=mysqli_query($conexion2,$sql3);
                ?>
         
           <select id="sede" class="form-control input-sm" onchange='cambioEmpresa();'>
           <option value="0">Seleciona uno</option>
            <?php
           while($ver1=mysqli_fetch_row($resul3)):
            ?>
           <option value="<?php echo $ver1[0] ?>">
           <?php echo $ver1[0]." ".$ver1[1]; ?>
            </option>
             <?php
             endwhile;
             ?>     
        </select>
              <label>Estado Fisico</label>
              <input type="text" name=""id="estadofisico" class="form-control input-sm">
              <label>Ubicacion</label>
              <input type="text" name="" id="ubicacion"class="form-control input-sm">
              <label>Estado</label>
              <input type="text" name="" id="estado" class="form-control input-sm">
              <label>Imagen</label>
              <input type="text" name="" id="imagen" class="form-control input-sm">
              
              
              
             
              
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo_librosi">Agregar</button>
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
              
            <label>ISB</label>
              <input type="text" name="" id="codigolibro1" class="form-control input-sm">
              <label>Codigo Libro</label>
              <input type="text" name="" id="codigolibro2" class="form-control input-sm">
              
               <label>Nombre</label>              
              <?php
               require_once "php/conexion.php";
               $conexion2= conexion2();
               $sql3="select isb,nombre
                    from libros";
                $resul3=mysqli_query($conexion2,$sql3);
                ?>
         
           <select id="nombreu" class="form-control input-sm" onchange='cambioEmpresa();'>
           <option value="0">Seleciona uno</option>
            <?php
           while($ver1=mysqli_fetch_row($resul3)):
            ?>
           <option value="<?php echo $ver1[0] ?>">
           <?php echo $ver1[0]." ".$ver1[1]; ?>
            </option>
             <?php
             endwhile;
             ?>     
        </select>



              
              <label>Sede</label>              
              <?php
               require_once "php/conexion.php";
               $conexion2= conexion2();
               $sql3="select codigosede,nombre
                    from sede";
                $resul3=mysqli_query($conexion2,$sql3);
                ?>
         
           <select id="sedeu" class="form-control input-sm" onchange='cambioEmpresa2();'>
           <option value="0">Seleciona uno</option>
            <?php
           while($ver1=mysqli_fetch_row($resul3)):
            ?>
           <option value="<?php echo $ver1[0] ?>">
           <?php echo $ver1[0]." ".$ver1[1]; ?>
            </option>
             <?php
             endwhile;
             ?>     
        </select>
              <label>Estado Fisico</label>
              <input type="text" name="" id="estadofisicou" class="form-control input-sm">
              <label>Ubicacion</label>
              <input type="text" name="" id="ubicacionu" class="form-control input-sm">
              <label>Estado</label>
              <input type="text" name="" id="estadou" class="form-control input-sm">
              <label>Imagen</label>
              <input type="text" name="" id="imagenu" class="form-control input-sm">
              
              
        <script type="text/javascript">
        // funcion que se ejecuta cada vez que se selecciona una empresa
        function cambioEmpresa()
        {
           document.getElementById('showlibro').value=document.getElementById('nombreu').value;
           
        }
        function cambioEmpresa2()
        {
           
           document.getElementById('showsede').value=document.getElementById('sedeu').value;
        }
        
    </script>




                
        
              <label>Libro</label>
              <input type="text" name="" id="showlibro" class="form-control input-sm">
              <label>Sede</label>
              <input type="text" name="" id="showsede" class="form-control input-sm">
              
              
              
              
         
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-warning" id="actualizaDatos_librosi" data-dismiss="modal" >Actualizar</button>
           
          </div>
        </div>
      </div>
    </div>
      
     
      
     </div> 
    </body>
</html>

<script type="text/javascript">
 
 $(document).ready(function(){
     
    $('#tabla_librosi').load('componentes/tabla_librosi.php');
    $('#buscador_librosi').load('componentes/buscador_librosi.php');     
 });
 </script>
 
 <script type="text/javascript">
    $(document).ready(function(){
            $('#guardarnuevo_librosi').click(function(){
                codigolibro=$('#codigolibro').val();
                nombre=$('#nombre').val();
                 nombre=$('#nombre').val();
                sede=$('#sede').val();
                estadofisico=$('#estadofisico').val();
                ubicacion=$('#ubicacion').val();
                estado=$('#estado').val();
                imagen=$('#imagen').val();
            if($('#codigolibro').val()==""){
        alertify.alert("Debes llenar la informacion");
        alertify.error("Faltan datos :(");
        return false;  
        
    }

        agregardatos_librosi(codigolibro,nombre,sede,estadofisico,ubicacion,estado,imagen);
         $('#isb').val("");  
             
             

            });
            
            
     $('#actualizaDatos_librosi').click(function(){ 
               actualizaDatos_librosi();
              
           });
        });
    
    
 </script>   
     
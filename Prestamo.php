


<!DOCTYPE html>
<html>
    <head>
         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
       
        <meta charset="UTF-8">
        <title>Tabla Dinamica</title>
        
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
          <CENTER>Prestamos</center>
         
        

    <div class="container">
            
         <!-- Modal agregar maestro-->   
            
            <div class="modal fade" id="agregarmaestro" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 <h4 class="modal-title" id="myModalLabel">Agregar Solicitante</h4>
                  
                  </div>
                    
                  <div class="modal-body">
                 <div id="buscador"></div>
                    
            
            <div id="tabla"></div>
            
        
                  
                </div>
              </div>
            </div>
         </div>
        <!-- fin Modal agregar maestro -->    
           
        
        <!-- Modal agregar maestro seccion-->   
            
            <div class="modal fade" id="agregargrado" role="dialog" aria-labelledby="myModalLabe7">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 <h4 class="modal-title" id="myModalLabel">Agregar Libro</h4>
                  </div>
                  <div class="modal-body">
                 
            <div id="buscadorgrupo"></div>
            <div id="tablagrupo"></div>
            
      
                    
                 
                  
                </div>
              </div>
            </div>
         </div>
        <!-- fin Modal agregar Grado seccion  -->   
        
        
        <!-- Modal agregar maestro seccion-->   
            
            <div class="modal fade" id="agregarclase" role="dialog" aria-labelledby="myModalLabe7">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 <h4 class="modal-title" id="myModalLabel">Agregar </h4>
                  </div>
                  <div class="modal-body">
             
            <div id="buscadorclase"></div>
            <div id="tablaclase"></div>
            
         
                   
                 
                  
                </div>
              </div>
            </div>
         </div>
        <!-- fin Modal agregar Grado seccion  --> 
            
            
<form id="solicitud">
                 <div class="form-group">
                        <label>Datos solicitante</label>
                        <div class="input-group">
                        <input name="codigousuario" id="codigousuario" type="text" required class="form-control input-group-sm" placeholder="Codigo Usuario">
                            </div>
              </div>
              <div class="form-group">
                        <label>Datos solicitante</label>
                        <div class="input-group">
                        <input name="codigoalca" id="codigoalca" type="text" required class="form-control input-group-sm" placeholder="Codigo Alca">
                        <span class="input-group-addon">-</span>
                        <input name="nombrea" id="nombrea" type="text" required class="form-control" placeholder="Nombre">
                        <span class="input-group-addon">-</span>
                        <input name="apellidoa" id="apellidoa" type="text" required class="form-control" placeholder="Apellido">
                        <span class="input-group-addon">-</span>
                        <input name="telefonoa" id="telefono" type="text" required class="form-control" value="Telefono">
                        <span class="input-group-addon">-</span>
                        <div class="input-group-btn">
                        <button type="button" data-toggle="modal" data-target="#agregaralca" class="btn btn-success"><i class="fa fa-search"></i>&nbsp;Buscar</button>
                        </div>
                      </div>
              </div>
               <br>
    
                <div class="form-group">
                             <label>Datos de Libro</label>
                            <div class="input-group">
                            <input name="codigolibro" id="codigolibro" type="text" required class="form-control" placeholder="Codigo Libro">
                            <span class="input-group-addon">-</span>
                            <input name="nombrel" id="nombrel" type="text" required class="form-control" placeholder="Nombre Libro">
                            <span class="input-group-addon">-</span>
                            <input name="estadol" id="estadol" type="text" required class="form-control" placeholder="Estado">
                            <span class="input-group-addon">-</span>
                            <div class="input-group-btn">
                            <button type="button" data-toggle="modal" data-target="#agregarlibro" class="btn btn-success"><i class="fa fa-search"></i>&nbsp;Buscar</button>
                            </div>
                          </div>
                  </div>
               
               
               
                    <div class="form-group">
                             <label>Fecha de Solicitud</label>
                            <div class="input-group">
                            <input name="fechar" id="fechar" type="text" required class="form-control" placeholder="Fecha Registro">
                            <span class="input-group-addon">-</span>
                            <input name="fechaf" id="fechaf" type="text" required class="form-control" placeholder="Fecha Maxima">
                            <span class="input-group-addon">-</span>
                            <input name="observacion" id="observacion" type="text" required class="form-control" placeholder="Observacion">
                            
                          </div>
                  </div>

             
          <button type="button" class="btn btn-primary"  id="guardarprestamo">Agregar Solicitud</button>
        </form>        
         
        
               
  


       

     
     </div>   
     
          
                    
                  
       
    </body>

<script type="text/javascript">
 
 $(document).ready(function(){
     
       $('#tabla').load('componentes/tablamama.php');
    $('#buscador').load('componentes/buscadormama.php');   
    
    $('#tablagrupo').load('componentes/tablagrupoma.php');
    $('#buscadorgrupo').load('componentes/buscadorgrupoma.php'); 
    
    
    $('#tablaclase').load('componentes/tablaclasema.php');
    $('#buscadorclase').load('componentes/buscadorclasema.php'); 

    
 });
 </script>
 


 <script type="text/javascript">
    $(document).ready(function(){
            $('#guardarprestamo').click(function(){
                codigousuario=$('#codigousuario').val();
                codigoalca=$('#codigoalca').val();
                codigolibro=$('#codigolibro').val();
                fechar=$('#fechar').val();
                observacion=$('#observacion').val();
                fechaf=$('#fechaf').val();
             
                
       
        
            if($('#codigoalca').val()==""){
        alertify.alert("Debes llenar la informacion");
        alertify.error("Faltan datos :(");
        return false;  
    }

        agregardatosguardarprestamo(codigousuario,codigoalca,codigolibro,fechar,observacion,fechaf);  
        
        
        
        
        
            });
            
            
    
        });
    
    
 </script>   
 

 
 
 </html>

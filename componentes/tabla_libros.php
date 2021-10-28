<?php
session_start();
require_once "../conexion/conexion.php";
$conexion=conexion();


?>


                  
        <table class="table table-hover table-condensed table-bordered">
            <caption>
                <button class="btn btn-primary" data-toggle="modal" data-target="#Modanuevo">Agregar Nuevo Libro
                    <span class="glyphicon glyphicon-plus"></span>      
                </button>                                    
                
                <button type="button" class="btn btn-primary"  id="" onclick="location.href='findex.php'">Salir</button>
            </caption>
            <thead>
            <tr>
                <td>ISB</td>
                <td>Nombre</td>
                <td>Autor</td>
                <td>Area</td>
                <td>Editorial</td>
                <td>An</td>
                <td>Signatura</td>
                
                 
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
            </thead>
            <?php
           if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT libros.isb, libros.nombre,autor.nombre,area.nombre_area,editorial.nombre,aedicion,signatura,libros.codigoarea,libros.codigoautor,libros.codigoeditorial FROM libros INNER JOIN autor ON libros.codigoautor = autor.codigoautor INNER JOIN area ON libros.codigoarea = area.codigoarea INNER JOIN editorial ON libros.codigoeditorial = editorial.codigoeditorial where libros.isb='$idp'";
					}else{
						$sql="SELECT libros.isb, libros.nombre,autor.nombre,area.nombre_area,editorial.nombre,aedicion,signatura,libros.codigoarea,libros.codigoautor,libros.codigoeditorial FROM libros INNER JOIN autor ON libros.codigoautor = autor.codigoautor INNER JOIN area ON libros.codigoarea = area.codigoarea INNER JOIN editorial ON libros.codigoeditorial = editorial.codigoeditorial";
				}
				}else{
					$sql="SELECT libros.isb, libros.nombre,autor.nombre,area.nombre_area,editorial.nombre,aedicion,signatura,libros.codigoarea,libros.codigoautor,libros.codigoeditorial FROM libros INNER JOIN autor ON libros.codigoautor = autor.codigoautor INNER JOIN area ON libros.codigoarea = area.codigoarea INNER JOIN editorial ON libros.codigoeditorial = editorial.codigoeditorial";
				}
            
            //$sql="select id,nombre,apellido,email,telefono 
                    //from t_personas";
            $resul=mysqli_query($conexion,$sql);
            
           while($ver= mysqli_fetch_row($resul)) {
              $datos=$ver[0]."||".
                      $ver[1]."||".
                      $ver[2]."||".
                      $ver[3]."||".
                      $ver[4]."||".
                      $ver[5]."||".
                      $ver[6]."||".
                      $ver[7]."||".
                      $ver[8]."||".
                      $ver[9];
                   
                   
                   
                  
     
               ?>
            <tr>
                <td><?php echo $ver[0] ?></td>
                <td><?php echo $ver[1] ?></td>
                <td><?php echo $ver[2] ?></td>
                <td><?php echo $ver[3] ?></td>
                <td><?php echo $ver[4] ?></td>
                <td><?php echo $ver[5] ?></td>
                <td><?php echo $ver[6] ?></td>
              
                
                <td>
                    <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#Modaledicion" onclick="agregarform_libros('<?php echo $datos ?>')"></button>
                </td>
                <td>
                    <button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo_libros('<?php echo $ver[0] ?>')">
                        
                        
                    </button>  
                </td>
            </tr>
            <?php
            
           }
            ?>
        </table>
 

        

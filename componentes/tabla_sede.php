<?php
session_start();
require_once "../conexion/conexion.php";
$conexion=conexion();


?>


<div class="row">
    <div class="col-sm-12">
                  
        <table class="table table-hover table-condensed table-bordered">
            <caption>
                <button class="btn btn-primary" data-toggle="modal" data-target="#Modanuevo">Agregar Nuevo sede
                    <span class="glyphicon glyphicon-plus"></span>      
                </button>                                    
                
                <button type="button" class="btn btn-primary"  id="" onclick="location.href='findex.php'">Salir</button>
            </caption>
            <thead>
                <tr>
                <td>Codigo</td>
                <td>Nombre</td>
                <td>Ciudad</td>
                
                 
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
            </thead>
            <?php
           if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT codigosede,nombre,ciudad
						from sede where codigosede='$idp'";
					}else{
						$sql="SELECT codigosede,nombre,ciudad 
						from sede";
					}
				}else{
					$sql="SELECT codigosede,nombre,ciudad 
						from sede";
				}
            
            //$sql="select id,nombre,apellido,email,telefono 
                    //from t_personas";
            $resul=mysqli_query($conexion,$sql);
            
           while($ver= mysqli_fetch_row($resul)) {
              $datos=$ver[0]."||".
                      $ver[1]."||".
                      $ver[2];
                   
                   
                   
                  
     
               ?>
            <tr>
                <td><?php echo $ver[0] ?></td>
                <td><?php echo $ver[1] ?></td>
                <td><?php echo $ver[2] ?></td>
              
                
                <td>
                    <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#Modaledicion" onclick="agregarform_sede('<?php echo $datos ?>')"></button>
                </td>
                <td>
                    <button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo_sede('<?php echo $ver[0] ?>')">
                        
                        
                    </button>  
                </td>
            </tr>
            <?php
            
           }
            ?>
        </table>
    </div>
</div>

        

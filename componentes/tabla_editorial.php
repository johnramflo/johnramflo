<?php
session_start();
require_once "../conexion/conexion.php";
$conexion=conexion();


?>


<div class="row">
    <div class="col-sm-12">
                  
        <table class="table table-hover table-condensed table-bordered">
            <caption>
                <button class="btn btn-primary" data-toggle="modal" data-target="#Modanuevo">Agregar Nuevo Editorial
                    <span class="glyphicon glyphicon-plus"></span>      
                </button>                                    
                
                <button type="button" class="btn btn-primary"  id="" onclick="location.href='findex.php'">Salir</button>
            </caption>
            <thead>
            <tr class="table-primary">
                <td>Nombre</td>
                <td>Ciudad</td>
                <td>Pais</td>
                
                 
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
            </thead>
            <?php
           if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT codigoeditorial,nombre,ciudad,pais
						from editorial where codigoeditorial='$idp'";
					}else{
						$sql="SELECT codigoeditorial,nombre,ciudad,pais 
						from editorial";
					}
				}else{
					$sql="SELECT codigoeditorial,nombre,ciudad,pais 
						from editorial";
				}
            
            //$sql="select id,nombre,apellido,email,telefono 
                    //from t_personas";
            $resul=mysqli_query($conexion,$sql);
            
           while($ver= mysqli_fetch_row($resul)) {
              $datos=$ver[0]."||".
                      $ver[1]."||".
                      $ver[2]."||".
                      $ver[3];
                   
                   
                   
                  
     
               ?>
            <tr>
                <td><?php echo $ver[1] ?></td>
                <td><?php echo $ver[2] ?></td>
                <td><?php echo $ver[3] ?></td>
              
                
                <td>
                    <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#Modaledicion" onclick="agregarform_editorial('<?php echo $datos ?>')"></button>
                </td>
                <td>
                    <button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo_editorial('<?php echo $ver[0] ?>')">
                        
                        
                    </button>  
                </td>
            </tr>
            <?php
            
           }
            ?>
        </table>
    </div>
</div>

        

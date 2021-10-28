<?php
session_start();
require_once "../conexion/conexion.php";
$conexion=conexion();


?>


                  
        <table class="table table-hover table-condensed table-bordered">
            <caption>
                <button class="btn btn-primary" data-toggle="modal" data-target="#Modanuevo">Agregar Nuevo AlCa
                    <span class="glyphicon glyphicon-plus"></span>      
                </button>                                    
                
                <button type="button" class="btn btn-primary"  id="" onclick="location.href='findex.php'">Salir</button>
            </caption>
            <thead>
            <tr>
                <td>ID</td>
                <td>Primer Nombre</td>
                <td>Segundo Nombre</td>
                <td>Primer Apellido</td>
                <td>Segundo Apellido</td>
                <td>Tipo</td>
                <td>Sede</td>
                
                 
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
            </thead>
            <?php
           if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT alca.codigoalca, alca.primern,alca.segundon,alca.primera,alca.segundoa,tipos.nombre,sede.nombre,sede.codigosede,tipos.codigotipo  FROM alca INNER JOIN sede ON alca.codigosede=sede.codigosede
INNER JOIN tipos  ON tipos.codigotipo = alca.codigotipo where alca.codigoalca='$idp'";
					}else{
						$sql="SELECT alca.codigoalca, alca.primern,alca.segundon,alca.primera,alca.segundoa,tipos.nombre,sede.nombre,sede.codigosede,tipos.codigotipo  FROM alca INNER JOIN sede ON alca.codigosede=sede.codigosede
INNER JOIN tipos  ON tipos.codigotipo = alca.codigotipo";
					}
				}else{
					$sql="SELECT alca.codigoalca, alca.primern,alca.segundon,alca.primera,alca.segundoa,tipos.nombre,sede.nombre,sede.codigosede,tipos.codigotipo  FROM alca INNER JOIN sede ON alca.codigosede=sede.codigosede
INNER JOIN tipos  ON tipos.codigotipo = alca.codigotipo";
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
                      $ver[8];
                   
                   
                   
                  
     
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
                    <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#Modaledicion" onclick="agregarform_alca('<?php echo $datos ?>')"></button>
                </td>
                <td>
                    <button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo_alca('<?php echo $ver[0] ?>')">
                        
                        
                    </button>  
                </td>
            </tr>
            <?php
            
           }
            ?>
        </table>
 

        

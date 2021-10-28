<?php
require_once "../conexion/conexion.php";
$conexion= conexion();
$sql="select codigoautor,nombre,apellido,pais
                    from autor";
            $resul=mysqli_query($conexion,$sql);

?>
<br><br>
<div class="row">
    <div class="col-sm-8"> </div>
    <div class="col-sm-4">
        <label><strong>Buscador</strong></label>
        <select id="Buscadorvivo" class="form-control input-sm">
         <option value="0">Seleciona uno</option>
         <?php
          while($ver=mysqli_fetch_row($resul)):
         ?>
          <option value="<?php echo $ver[0] ?>">
              <?php echo $ver[1]." ".$ver[2] ?>
          
          </option>
        <?php
          endwhile;
        
        ?>
        
        
        </select>
    </div>   
</div>    
        
<script type="text/javascript">
    $(document).ready(function(){
             $('#Buscadorvivo').select2();
             $('#Buscadorvivo').change(function(){
                 $.ajax({
                     type:"post",
                     data:'valor=' + $('#Buscadorvivo').val(),
                     url:'php/crearsesion.php',
                     success:function(r){
                      $('#tabla').load('componentes/tabla.php');   
                     }
                 });
               });
             });
    
</script>    

    
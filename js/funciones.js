/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function agregardatos(nombre,apellido,pais){
    cadena="nombre="+ nombre +
            "&apellido=" + apellido +
            "&pais=" + pais;
           
              
$.ajax({
    type:"POST",
    url:"php/agregarDatos.php",
    data:cadena,
    
    success:function(r){
        if(r==1)
        {
            $('#tabla').load('componentes/tabla.php');
            $('#buscador').load('componentes/buscador.php'); 
            alertify.success("agregadocon exito:)");   
        }
        else
        {
            alertify.error("Fallo el servidor :(");
        }
}
});
  
}


function agregarform(datos){
    d=datos.split('||');
    $('#idpersona').val(d[0]);  
    $('#nombreu').val(d[1]);  
    $('#apellidou').val(d[2]); 
    $('#paisu').val(d[3]);     
}

function actualizaDatos(){
	id=$('#idpersona').val();
	nombre=$('#nombreu').val();
	apellido=$('#apellidou').val();
	pais=$('#paisu').val();

	cadena= "id=" + id +
			"&nombre=" + nombre + 
			"&apellido=" + apellido +
			"&pais=" + pais ;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
                                 $('#buscador').load('componentes/buscador.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}


function preguntarSiNo(id){
    
 alertify.confirm('Eliminar Autor','¿Esta seguro de Eliminar este Registro',
          function(){ eliminarDatos(id)}
                , function(){ alertify.error('Cancel')});   
    
}

function eliminarDatos(id){
   cadena="id=" + id;
         $.ajax({
             type:"POST",
             url:"php/eliminarDatos.php",
             data:cadena,
             success:function(r){
                if(r==1){
                    $('#tabla').load('componentes/tabla.php');
                    $('#buscador').load('componentes/buscador.php');
                    alertify.success("Eliminado con exito!");
                }
                else{
                    alertify.error("Fallo Servidor (:");
                }
             }
         });
  
}
/* alumnos maestros alca*/


/*Inicio tipos*/

function agregardatos_tipos(nombre){
    cadena="nombre="+ nombre;
           
              
$.ajax({
    type:"POST",
    url:"php/agregarDatos_tipos.php",
    data:cadena,
    
    success:function(r){
        if(r==1)
        {
            $('#tabla').load('componentes/tabla_tipos.php');
            $('#buscador').load('componentes/buscador_tipos.php'); 
            alertify.success("agregadocon exito:)");   
        }
        else
        {
            alertify.error("Fallo el servidor :(");
        }
}
});
  
}


function agregarform_tipos(datos){
    d=datos.split('||');
    $('#codigotipo').val(d[0]);  
    $('#nombreu').val(d[1]);  
     
}

function actualizaDatos_tipos(){
	codigotipo=$('#codigotipo').val();
	nombre=$('#nombreu').val();
	

	cadena= "codigotipo=" + codigotipo +
			"&nombre=" + nombre;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos_tipos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla_tipos.php');
                                 $('#buscador').load('componentes/buscador_tipos.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}


function preguntarSiNo_tipos(id){
    
 alertify.confirm('Eliminar Autor','¿Esta seguro de Eliminar este Registro',
          function(){ eliminarDatos_tipos(id)}
                , function(){ alertify.error('Cancel')});   
    
}

function eliminarDatos_tipos(id){
   cadena="id=" + id;
         $.ajax({
             type:"POST",
             url:"php/eliminarDatos_tipos.php",
             data:cadena,
             success:function(r){
                if(r==1){
                    $('#tabla').load('componentes/tabla_tipos.php');
                    $('#buscador').load('componentes/buscador_tipos.php');
                    alertify.success("Eliminado con exito!");
                }
                else{
                    alertify.error("Fallo Servidor(:");
                    alertify.error("Dato relacioanado no se puede eliminar(:")
                }
             }
         });
  
}


/*fin  tipos*/
/*inicio editorial*/

function agregardatos_editorial(nombre,ciudad,pais){
    cadena="nombre="+ nombre +
            "&ciudad=" + ciudad +
            "&pais=" + pais;
           
              
$.ajax({
    type:"POST",
    url:"php/agregarDatos_editorial.php",
    data:cadena,
    
    success:function(r){
        if(r==1)
        {
            $('#tabla').load('componentes/tabla_editorial.php');
            $('#buscador').load('componentes/buscador_editorial.php'); 
            alertify.success("agregadocon exito:)");   
        }
        else
        {
            alertify.error("Fallo el servidor :(");
        }
}
});
  
}


function agregarform_editorial(datos){
    d=datos.split('||');
    $('#idpersona').val(d[0]);  
    $('#nombreu').val(d[1]);  
    $('#ciudadu').val(d[2]); 
    $('#paisu').val(d[3]);     
}

function actualizaDatos_editorial(){
	id=$('#idpersona').val();
	nombre=$('#nombreu').val();
	ciudad=$('#ciudadu').val();
	pais=$('#paisu').val();

	cadena= "id=" + id +
			"&nombre=" + nombre + 
			"&ciudad=" + ciudad +
			"&pais=" + pais ;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos_editorial.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla_editorial.php');
                                 $('#buscador').load('componentes/buscador_editorial.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}


function preguntarSiNo_editorial(id){
    
 alertify.confirm('Eliminar Autor','¿Esta seguro de Eliminar este Registro',
          function(){ eliminarDatos_editorial(id)}
                , function(){ alertify.error('Cancel')});   
    
}

function eliminarDatos_editorial(id){
   cadena="id=" + id;
         $.ajax({
             type:"POST",
             url:"php/eliminarDatos_editorial.php",
             data:cadena,
             success:function(r){
                if(r==1){
                    $('#tabla').load('componentes/tabla_editorial.php');
                    $('#buscador').load('componentes/buscador_editorial.php');
                    alertify.success("Eliminado con exito!");
                }
                else{
                    alertify.error("Fallo Servidor (:");
                }
             }
         });
  
}

/*fin editorial*/

/*Inicio Areas*/

function agregardatos_areas(nombre){
    cadena="nombre="+ nombre;
           
              
$.ajax({
    type:"POST",
    url:"php/agregarDatos_areas.php",
    data:cadena,
    
    success:function(r){
        if(r==1)
        {
            $('#tabla').load('componentes/tabla_areas.php');
            $('#buscador').load('componentes/buscador_areas.php'); 
            alertify.success("agregadocon exito:)");   
        }
        else
        {
            alertify.error("Fallo el servidor :(");
        }
}
});
  
}


function agregarform_areas(datos){
    d=datos.split('||');
    $('#codigoarea').val(d[0]);  
    $('#nombreu').val(d[1]);  
     
}

function actualizaDatos_areas(){
	codigoarea=$('#codigoarea').val();
	nombre=$('#nombreu').val();
	

	cadena= "codigoarea=" + codigoarea +
			"&nombre=" + nombre;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos_areas.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla_areas.php');
                                 $('#buscador').load('componentes/buscador_areas.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}


function preguntarSiNo_areas(id){
    
 alertify.confirm('Eliminar Autor','¿Esta seguro de Eliminar este Registro',
          function(){ eliminarDatos_areas(id)}
                , function(){ alertify.error('Cancel')});   
    
}

function eliminarDatos_areas(id){
   cadena="id=" + id;
         $.ajax({
             type:"POST",
             url:"php/eliminarDatos_areas.php",
             data:cadena,
             success:function(r){
                if(r==1){
                    $('#tabla').load('componentes/tabla_areas.php');
                    $('#buscador').load('componentes/buscador_areas.php');
                    alertify.success("Eliminado con exito!");
                }
                else{
                    alertify.error("Fallo Servidor(:");
                    alertify.error("Dato relacioanado no se puede eliminar(:")
                }
             }
         });
  
}


/*fin  areas*/

/*inicio sede*/

function agregardatos_sede(nombre,ciudad){
    cadena="nombre="+ nombre +
            "&ciudad=" + ciudad;
       
           
              
$.ajax({
    type:"POST",
    url:"php/agregarDatos_sede.php",
    data:cadena,
    
    success:function(r){
        if(r==1)
        {
            $('#tabla').load('componentes/tabla_sede.php');
            $('#buscador').load('componentes/buscador_sede.php'); 
            alertify.success("agregadocon exito:)");   
        }
        else
        {
            alertify.error("Fallo el servidor :(");
        }
}
});
  
}


function agregarform_sede(datos){
    d=datos.split('||');
    $('#idsede').val(d[0]);  
    $('#nombreu').val(d[1]);  
    $('#ciudadu').val(d[2]); 
    
}

function actualizaDatos_sede(){
	id=$('#idsede').val();
	nombre=$('#nombreu').val();
	ciudad=$('#ciudadu').val();
	

	cadena= "id=" + id +
			"&nombre=" + nombre + 
			"&ciudad=" + ciudad ;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos_sede.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla_sede.php');
                                 $('#buscador').load('componentes/buscador_sede.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}


function preguntarSiNo_sede(id){
    
 alertify.confirm('Eliminar Autor','¿Esta seguro de Eliminar este Registro',
          function(){ eliminarDatos_sede(id)}
                , function(){ alertify.error('Cancel')});   
    
}

function eliminarDatos_sede(id){
   cadena="id=" + id;
         $.ajax({
             type:"POST",
             url:"php/eliminarDatos_sede.php",
             data:cadena,
             success:function(r){
                if(r==1){
                    $('#tabla').load('componentes/tabla_sede.php');
                    $('#buscador').load('componentes/buscador_sede.php');
                    alertify.success("Eliminado con exito!");
                }
                else{
                    alertify.error("Fallo Servidor (:");
                }
             }
         });
  
}

/*fin sedes*/



/*final libros*/


/* Solicitudad*/

function agregardatosguardarsolicitud(codigoalca,codigolibro,fechar,fechai,fechaf){
    cadena="codigoalca=" + codigoalca+
            "&codigolibro=" + codigolibro+
            "&fechar=" +fechar+
            "&fechai=" + fechai+
            "&fechaf=" + fechaf;
               
    
            
            
           
              
$.ajax({
    type:"POST",
    url:"php/agregarDatos_solicitud.php",
    data:cadena,
    
    success:function(r){
        if(r==1)
        {
            $('#tabla_alca').load('componentes/tabla_alca.php');
            $('#buscador_alca').load('componentes/buscador_alca.php'); 
            alertify.success("agregadocon exito:)");   
        }
        else
        {
            
            alertify.error("Fallo el servidor :(");
        }
}
});
  
}


function agregarform_solicitud(datos){
    d=datos.split('||');
    $('#codigoalca').val(d[0]);
    $('#idpersonau').val(d[0]);
    $('#primernu').val(d[1]);  
    $('#segundonu').val(d[2]); 
    $('#primerau').val(d[3]); 
    $('#segundoau').val(d[4]); 
    $('#codigotipou').val(d[5]);     
    $('#idsedeu').val(d[6]);   
   
}

function actualizaDatos_solicitud(){
        codigoalca=$('#codigoalca').val();
	idpersona=$('#idpersonau').val();
	primern=$('#primernu').val();
	segundon=$('#segundonu').val();
	primera=$('#primerau').val();
        segundoa=$('#segundoau').val();
	codigotipo=$('#codigotipou').val();
	idsede=$('#idsedeu').val();

	cadena=  "idpersona=" + idpersona +
			"&primern=" + primern + 
			"&segundon=" + segundon +
                        "&primera=" + primera + 
			"&segundoa=" + segundoa +
			"&codigotipo=" + codigotipo +
                        "&idsede=" + idsede +
                        "&codigoalca=" + codigoalca;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos_solicitud.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla_alca').load('componentes/tabla_alca.php');
                                 $('#buscador_alca').load('componentes/buscador_alca.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}


function preguntarSiNo_solicitud(id){
    
 alertify.confirm('Eliminar Autor','¿Esta seguro de Eliminar este Registro',
          function(){ eliminarDatos_solicitud(id)}
                , function(){ alertify.error('Cancel')});   
    
}

function eliminarDatos_alca(id){
   cadena="id=" + id;
         $.ajax({
             type:"POST",
             url:"php/eliminarDatos_solicitud.php",
             data:cadena,
             success:function(r){
                if(r==1){
                    $('#tabla_alca').load('componentes/tabla_alca.php');
                    $('#buscador_alca').load('componentes/buscador_alca.php');
                    alertify.success("Eliminado con exito!");
                }
                else{
                    alertify.error("Fallo Servidor (:");
                }
             }
         });
  
}

/*final /* Solicitudad*/



/* Solicitudad* prestamo*/

function agregardatosguardarprestamo(codigoalca,codigolibro,fechar,observacion,fechaf,codigousuario){
    cadena="codigoalca=" + codigoalca+
            "&codigolibro=" + codigolibro+
            "&fechar=" +fechar+
            "&observacion=" + observacion+
            "&fechaf=" + fechaf+
            "&codigousuario=" + codigousuario;
               
    
            
            
           
              
$.ajax({
    type:"POST",
    url:"php/agregarDatos_prestamo.php",
    data:cadena,
    
    success:function(r){
        if(r==1)
        {
            $('#tabla_alca').load('componentes/tabla_alca.php');
            $('#buscador_alca').load('componentes/buscador_alca.php'); 
            alertify.success("agregadocon exito:)");   
        }
        else
        {
            
            alertify.error("Fallo el servidor :(");
        }
}
});
  
}

/* Solicitudad prestamo*/

/* agregar alca a solicitud*/
function agregarform_alcap(datos){
    d=datos.split('||');
    $('#codigoalcas').val(d[0]);
     $('#nombres').val(d[1]);  
    $('#apellidos').val(d[2]); 
    $('#tipos').val(d[3]); 
    
     
    
}




/* liros*/

function agregardatos_libros(isb,nombre,area,editorial,autor,an,signatura){
    cadena="isb=" + isb+
            "&nombre=" + nombre+
            "&area=" +area+
            "&editorial=" + editorial+
            "&autor=" + autor+
            "&an=" +an +
            "&signatura="  + signatura;
               
    
            
            
           
              
$.ajax({
    type:"POST",
    url:"php/agregarDatos_libros.php",
    data:cadena,
    
    success:function(r){
        if(r==1)
        {
            $('#tabla_libros').load('componentes/tabla_libros.php');
            $('#buscador_libros').load('componentes/buscador_libros.php'); 
            alertify.success("agregadocon exito:)");   
        }
        else
        {
            
            alertify.error("Fallo el servidor :(");
        }
}
});
  
}


function agregarform_libros(datos){
    d=datos.split('||');
    $('#isb1u').val(d[0]);
    $('#isb2u').val(d[0]);
    $('#nombreu').val(d[1]);  
    $('#autoru').val(d[2]);  
    $('#areau').val(d[3]);
    $('#editorialu').val(d[4]); 
    $('#anu').val(d[5]);     
    $('#signaturau').val(d[6]);   
     
    $('#showarea').val(d[7]);
    $('#showautor').val(d[8]); 
    $('#showeditorial').val(d[9]); 
}

function actualizaDatos_libros(){
    isb=$('#isb1u').val();
	isb2=$('#isb2u').val();
	nombre=$('#nombreu').val();
	area=$('#showarea').val();
	editorial=$('#showeditorial').val();
    autor=$('#showautor').val();
	an=$('#anu').val();
	signatura=$('#signaturau').val();

	cadena= "isb=" + isb +
			"&isb2=" + isb2 + 
			"&nombre=" + nombre +
            "&area=" + area + 
			"&editorial=" + editorial +
			"&autor=" + autor +
            "&an=" + an +
            "&signatura=" + signatura;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos_libros.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla_libros').load('componentes/tabla_libros.php');
                $('#buscador_libros').load('componentes/buscador_libros.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor libros :(");
			}
		}
	});

}


function preguntarSiNo_libros(id){
    
 alertify.confirm('Eliminar Libro','¿Esta seguro de Eliminar este Registro',
          function(){ eliminarDatos_libros(id)}
                , function(){ alertify.error('Cancel')});   
    
}

function eliminarDatos_libros(id){
   cadena="id=" + id;
         $.ajax({
             type:"POST",
             url:"php/eliminarDatos_libros.php",
             data:cadena,
             success:function(r){
                if(r==1){
                    $('#tabla_libros').load('componentes/tabla_libros.php');
                    $('#buscador_libros').load('componentes/buscador_libros.php');
                    alertify.success("Eliminado con exito!");
                }
                else{
                    alertify.error("Fallo Servidor (:");
                }
             }
         });
  
}

/*final ALCAS*/






function agregarform_alca(datos){
    d=datos.split('||');
    $('#codigoalca').val(d[0]);
    $('#idpersonau').val(d[0]);
    $('#primernu').val(d[1]);  
    $('#segundonu').val(d[2]); 
    $('#primerau').val(d[3]); 
    $('#segundoau').val(d[4]); 
    $('#codigotipou').val(d[5]);     
    $('#idsedeuu').val(d[6]);  
    $('#showtipo').val(d[8]);  
    $('#showsede').val(d[7]);  
}







function agregardatos_alca(idpersona,primern,segundon,primera,segundoa,codigotipo,idsede){
    cadena="idpersona=" + idpersona+
            "&primern=" + primern+
            "&segundon=" +segundon+
            "&primera=" + primera+
            "&segundoa=" + segundoa+
            "&codigotipo=" +codigotipo +
            "&idsede="  + idsede;
               
    
            
            
           
              
$.ajax({
    type:"POST",
    url:"php/agregarDatos_alca.php",
    data:cadena,
    
    success:function(r){
        if(r==1)
        {
            $('#tabla_alca').load('componentes/tabla_alca.php');
            $('#buscador_alca').load('componentes/buscador_alca.php'); 
            alertify.success("agregadocon exito:)");   
        }
        else
        {
            
            alertify.error("Fallo el servidor :(");
        }
}
});
  
}




function actualizaDatos_alca(){
        codigoalca=$('#codigoalca').val();
	idpersona=$('#idpersonau').val();
	primern=$('#primernu').val();
	segundon=$('#segundonu').val();
	primera=$('#primerau').val();
        segundoa=$('#segundoau').val();
	codigotipo=$('#showtipo').val();
	idsede=$('#showsede').val();

	cadena=  "idpersona=" + idpersona +
			"&primern=" + primern + 
			"&segundon=" + segundon +
                        "&primera=" + primera + 
			"&segundoa=" + segundoa +
			"&codigotipo=" + codigotipo +
                        "&idsede=" + idsede +
                        "&codigoalca=" + codigoalca;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos_alca.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla_alca').load('componentes/tabla_alca.php');
                                 $('#buscador_alca').load('componentes/buscador_alca.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor actualizaDatos :(");
			}
		}
	});

}


function preguntarSiNo_alca(id){
    
 alertify.confirm('Eliminar ALCA','¿Esta seguro de Eliminar este Registro',
          function(){ eliminarDatos_alca(id)}
                , function(){ alertify.error('Cancel')});   
    
}

function eliminarDatos_alca(id){
   cadena="id=" + id;
         $.ajax({
             type:"POST",
             url:"php/eliminarDatos_alca.php",
             data:cadena,
             success:function(r){
                if(r==1){
                    $('#tabla_alca').load('componentes/tabla_alca.php');
                    $('#buscador_alca').load('componentes/buscador_alca.php');
                    alertify.success("Eliminado con exito!");
                }
                else{
                    alertify.error("Fallo Servidor (:");
                }
             }
         });
  
}



/*final alca*/

/* liros inventario*/

function agregardatos_librosi(codigolibro,nombre,sede,estadofisico,ubicacion,estado,imagen){
    cadena="codigolibro=" + codigolibro+
            "&nombre=" + nombre+
            "&sede=" +sede+
            "&estadofisico=" + estadofisico+
            "&ubicacion=" + ubicacion+
            "&estado=" +estado +
            "&imagen="  + imagen;
               
    
            
            
           
              
$.ajax({
    type:"POST",
    url:"php/agregarDatos_librosi.php",
    data:cadena,
    
    success:function(r){
        if(r==1)
        {
            $('#tabla_librosi').load('componentes/tabla_librosi.php');
            $('#buscador_librosi').load('componentes/buscador_librosi.php'); 
            alertify.success("agregadocon exito:)");   
        }
        else
        {
            
            alertify.error("Fallo el servidor inventario:(");
        }
}
});
  
}


function agregarform_librosi(datos){
    d=datos.split('||');
    $('#codigolibro1').val(d[0]);
    $('#codigolibro2').val(d[0]);
    $('#nombreu').val(d[1]);  
    $('#sedeu').val(d[2]);  
    $('#estadofisicou').val(d[3]);
    $('#ubicacionu').val(d[4]); 
    $('#estadou').val(d[5]);     
    $('#imagenu').val(d[6]);   
     
    
    $('#showsede').val(d[7]); 
   $('#showlibro').val(d[8]);
}

function actualizaDatos_librosi(){
    codigolibro1=$('#codigolibro1').val();
	codigolibro2=$('#codigolibro2').val();
	libro=$('#showlibro').val();
	sede=$('#showsede').val();
    estadofisico=$('#estadofisicou').val();
	ubicacion=$('#ubicacionu').val();
	estado=$('#estadou').val();
    imagen=$('#imagenu').val();

	cadena= "codigolibro1=" + codigolibro1 +
			"&codigolibro2=" + codigolibro2 + 
			"&libro=" + libro +
            "&sede=" + sede + 
			"&estadofisico=" + estadofisico +
			"&ubicacion=" + ubicacion +
            "&estado=" + estado +
            "&imagen=" + imagen;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos_librosi.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla_librosi').load('componentes/tabla_librosi.php');
                    $('#buscador_librosi').load('componentes/buscador_librosi.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor libros :(");
			}
		}
	});

}


function preguntarSiNo_librosi(id){
    
 alertify.confirm('Eliminar Libro','¿Esta seguro de Eliminar este Registro',
          function(){ eliminarDatos_librosi(id)}
                , function(){ alertify.error('Cancel')});   
    
}

function eliminarDatos_librosi(id){
   cadena="id=" + id;
         $.ajax({
             type:"POST",
             url:"php/eliminarDatos_librosi.php",
             data:cadena,
             success:function(r){
                if(r==1){
                    $('#tabla_librosi').load('componentes/tabla_librosi.php');
                    $('#buscador_librosi').load('componentes/buscador_librosi.php');
                    alertify.success("Eliminado con exito!");
                }
                else{
                    alertify.error("Fallo Servidor (:");
                }
             }
         });
  
}

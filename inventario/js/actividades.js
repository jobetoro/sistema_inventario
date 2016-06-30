$(document).ready(function(){
//<!-- $("#myBtn").click(function(){
  //      $("#myModal").modal();
//    });

 $("#mensaje").dialog({
       autoOpen:false,
       modal:true,
       buttons:{
           Ok: function(){
               $(this).dialog("close");
           }
       }
   });

 
});
function verificarempresa(){
	var rut = $("#txterut").val();
	var contraseña =$("#txtcontraseña").val();
	var empresa =$("#txtempresa").val();
$.post(
      base_url+"Welcome/verificarempresario",{
        rut:rut,contraseña:contraseña,empresa:empresa
      },function(vector){
      
      if(vector.mensaj=="usuario no valido"){
        $("#txterut").val('');
            $("#txtcontraseña").val(''); 
            $("#txtempresa").val('');
            $("#contenido").html("<p>"+vector.mensaj+"</p>");
               $("#modalir").modal({ show:true});
             }else{
            location.reload();  
             }
             
          // $("#mensaje").html("<p>"+vector.mensaj+"</p>");
            //$("#mensaje").dialog("open"); 
            

      },
      'json'
      );


}
//seccion de super_administrador

function cargarcontentempresa(){
 
  $.post(
    base_url+"Welcome/cargarformulario_e",
    {},
    function(vector){  
            
    },
    'json'
    );

}

//seccion de cambio
function irinicio(){
 
  $.post(
    base_url+"Welcome/irainicio",
    {},
    function(vector){  
      location.reload();        
    },
    'json'
    );

}
function R_salida(){
  $.post(
    base_url+"Welcome/irasalida",
    {},
    function(vector){ 
      location.reload();         
    },
    'json'
    );
}
function R_entrada(){
  $.post(
    base_url+"Welcome/iraentrada",
    {},
    function(vector){  
      location.reload();        
    },
    'json'
    );
}
function R_movimiento(){
  $.post(
    base_url+"Welcome/iramovimiento",
    {},
    function(vector){
        
      location.reload();        
    },
    'json'
    );
}
function R_addproducto(){
 $.post(
    base_url+"Welcome/iraaddpro",
    {},
    function(vector){ 
      location.reload();         
    },
    'json'
    ); 
}
function R_almacen(){
  $.post(
    base_url+"Welcome/iraalmacen",
    {},
    function(vector){      
      location.reload();    
    },
    'json'
    );
}
function reportes(){
  $.post(
    base_url+"Welcome/irareportes",
    {},
    function(vector){  
      location.reload();        
    },
    'json'
    );
}
function R_gestion(){
  $.post(
    base_url+"Welcome/iragestion",
    {},
    function(vector){  
      location.reload();        
    },
    'json'
    );
}
function cerrarsession(){
  $.post(
    base_url+"Welcome/cerrar",
    {},
    function(vector){  
     location.reload();        
    },
    'json'
    );
}
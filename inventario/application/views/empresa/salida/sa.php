<div class="row">
<div class="idheader">
  <div id="navegacion">
   
     <div class="col-md-4"></div>
     <div class="col-md-4"></div>
     <div class="col-md-4"> 
     <a  class="boton" href="javascript:cerrarsession()" >Cerrar sesión</a>
     </div>
   

  
 </div>
</div>
</div>
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar na">
          <ul class="nav nav-sidebar">
            <li ><a href="javascript:irinicio()">Inicio <span class="sr-only">(current)</span></a></li>
            <li ><a href="javascript:R_entrada()">Registar Entrada</a></li>
            <li class="active"><a href="#">Registrar Salida</a></li>
            <li><a href="javascript:R_movimiento()">Movimiento</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="javascript:R_addproducto()">Agregar Producto</a></li>
            <li><a href="javascript:R_almacen()">">Almacen</a></li>
            
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="javascript:R_gestion()">Gestion Empresas</a></li>
            
          </ul>
        </div>
        
      </div>
    </div>
    <div id="lado" >
      <p style="color:white;">hola salida</p>
    </div>
    
    <!-- Small modal -->
<button type="button" class="btn btn-primary hidden" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>
<form action="<?php echo base_url()?>"  method="post" id="form2">
<div id="modalsalir" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm ">
    <div class="modal-content conte">
     <div class="modal-header conte">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:white;"><i class="fa fa-sign-out" aria-hidden="true"> Esta saliendo de la sesión</i></h4>
        </div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
  <button type="submit"  class="fa fa-sign-out btn btn-info active" form="form2" value="Submit">Aceptar</button>
</div>

<div class="col-md-4"></div>
      
</div>
    </div>
  </div>
</div>
</form>



<form action="<?php echo base_url()?>"  method="post" id="form3">
<div id="modalini" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm ">
    <div class="modal-content conte">
     <div class="modal-header conte">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:white;"><i class="fa fa-sign-out" aria-hidden="true"> Esta saliendo ...</i></h4>
        </div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
  <button type="submit"  class="fa fa-sign-out btn btn-info active" form="form3" value="Submit">Aceptar</button>
</div>

<div class="col-md-4"></div>
      
</div>
    </div>
  </div>
</div>
</form>
<br />

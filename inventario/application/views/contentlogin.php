

<div class="container">

 
      <div class="form-signin">
      <div id="verlog">
<form action="javascript:verificarempresa()"  method="post" id="form1">

      <div class="row">
      	<div class="col-md-4"></div>
      	<div class="col-md-4"><i id="imcolor" class="fa fa-lock fa-2x" aria-hidden="true">Login</i></div>
      	<div class="col-md-4"></div>
      </div>
      
      <div class="row">
  <div class="col-md-4">
         </div>
         <div class="col-md-4">
    <a  >
      <img id="im" src="<?php echo base_url()?>../imagen/u.png" >
    </a>
         </div>
         <div class="col-md-4"></div>

</div>
         <div class="form-group">
              <label id="imcolor" ><span class="glyphicon glyphicon-user"></span> Rut de Empresa</label>
              <input type="text" class="form-control" id="txterut" required="true" placeholder="Ingrese  Rut">
            </div>
            <div class="form-group">
              <i id="imcolor" class="fa fa-building" aria-hidden="true">Empresa</i>
              <input type="text" class="form-control" id="txtempresa" required="true" placeholder="Ingrese Nombre de Empresa">
            </div>
       <div class="form-group">
              <label id="imcolor" ><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
              <input type="password" class="form-control" id="txtcontraseña" required="true" placeholder="Ingrese Contraseña">
            </div>
            
       <div class="row">
      	<div class="col-md-4"></div>
      	<div class="col-md-4">
        <button type="submit"  class="fa btn progress-bar-info progress-bar-striped fa-sign-in" form="form1" value="Submit">Acceder</button>
        </div>
      	<div class="col-md-4"></div>
      </div>
      </form>
        </div>


<button type="button" class="btn btn-primary hidden" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>
<form action="<?php echo base_url()?>"  method="post" id="form2">
<div id="modalir" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm ">
    <div class="modal-content se">
     <div class="modal-header se">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:white;"><i class="fa fa-sign-out" aria-hidden="true"> Informacion de acceso</i></h4>
        </div>
        <div class="modal-body se">
        <label id="contenido"></label>
                  </div>
        <div class="modal-footer se">
          <div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
  <button type="submit"  class="fa fa-sign-in btn btn-primary" form="form2" value="Submit">Aceptar</button>
</div>

<div class="col-md-4"></div>
      
</div>
        </div>

    </div>
  </div>
</div>
</form>
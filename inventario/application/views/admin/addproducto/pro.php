<div class="row">
<div class="idheader">
  <div id="navegacion">
   
     <div class="col-md-4"></div>
     <div class="col-md-4"></div>
     <div class="col-md-4"> 
     <a  class="boton btn btn-primary" href="javascript:cerrarsession()" >Cerrar sesión</a>
     </div>
   

  
 </div>
</div>
</div>
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar na">
          <ul class="nav nav-sidebar">
            <li ><a href="javascript:irinicio()">Inicio <span class="sr-only">(current)</span></a></li>
            <li><a href="javascript:reportes()">Reportes de Empresas</a></li>
            
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Agregar Producto  a otras empresas</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="javascript:R_gestion()">Gestion Empresas</a></li>
            
          </ul>
        </div>
        
      </div>
    </div>
    </div>
    <div id="lado" class="jumbotron" >
   <div class="container">
     <p style="color:black;">Agregar nuevos productos a una empresa</p>
     <br />
     <!--
     <option value="<?=$valor->id;?>"><?=$valor->nombre."    ".$valor->apellido?></option> 
     -->
      <div class="form-group">
    <label for="exampleInputName2">Empresa Distinataria</label>
    <select id="rutemoresaselecionada" onchange="cargarcontentempresa(this.value)" class="btn btn-success">
  <option selected value="0"> Seleccione empresa</option>
 <?php foreach($empresas as $valor):?>
 <?php if( $valor->rut_empresa!= $mi) :?>


<option value="<?php echo $valor->rut_empresa;?>" ><?php echo $valor->nombre_empresa;?></option>  
<?php endif;?>
     <?php endforeach?>
</select>
  </div>
     
   </div>
      
    </div>
    
    

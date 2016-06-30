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
            <li><a href="javascript:R_addproducto()">Agregar Producto  a otras empresas</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Gestion Empresas</a></li>
            
          </ul>
        </div>
        
      </div>
    </div>
    <div id="lado" class="jumbotron" >
   <div class="container centrar">
     <p style="color:black;">Registros de Empresas</p>
    <form action="javascript:verificarempresa()"  method="post" id="formgestionempresa">
  <table class="table"> 
    <form class="form-inline">
  
   <div class="form-group">
   <tr>
              <td><label  for="psw"><span class="fa fa-user"></span> Rut</label></td>
            <td>  <input type="number" required="true"  id="txtrut"   placeholder="Ingrese su rut 8 digitos" >-<input type="number" id="desc" required="true" placeholder="0" ></td>

              </tr>
            </div>

            <div class="form-group">
            <tr>
  <td><label for="psw"> Nombre empresa:</label></td>
  <td><input type="text" required="true" id="txtnombres"  placeholder="Ingrese Nombre " ></td>
</tr>
              
              
            </div>
 
 <div class="form-group">
 <tr>
  <td><label for="psw">Razon Social:</label></td>
  <td><input type="text" required="true" id="txtrazonsocial"  placeholder="Ingrese razon social " ></td>
</tr>
              
              
            </div>

<div class="form-group">
<tr>
  <td><label for="psw">Giro:</label></td>
  <td><input type="text" required="true" id="txtgiro"  placeholder="A que se dedica " ></td>
</tr>
              
              
            </div>
  <div class="form-group">
  <tr>
  <td><label for="psw">Direccion:</label></td>
  <td><input type="text" required="true" id="txtdireccion"  placeholder="Ingrese direccion" ></td>
</tr>
              
              
            </div>
  <div class="form-group">
  <tr>
  <td><label for="psw">Cantidad de personas:</label></td>
  <td><input type="text" required="true" id="txtdireccion"  placeholder="Cantidad de trabajadores" ></td>
</tr>
              
              
            </div>
  
            
             <label id="mensajesasa"></label>



             </form>
             </table>
             <button type="submit"  class="fa btn btn-success  fa-floppy-o" form="formgestionempresa" value="Submit">Guardar Empresa</button>
             </form><br />
   </div>
      
    </div>
    
     

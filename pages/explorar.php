<?PHP header('Content-Type: text/html; charset=UTF-8');
      include('componentes/header_2.html'); 
      require('../config/conexion.php');
      ?>

    <div class="container mt-4">
    <h3>Explora según tu interés <span class="badge badge-secondary">New</span></h3>
    <hr>
     
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <button class="btn btn-outline-secondary" type="button" id="button-addon1">Buscar</button>
  </div>
  <input type="text" class="form-control" placeholder="Escribe lo que buscas..." aria-label="Example text with button addon" aria-describedby="button-addon1">
</div>
</div>

<div id="opciones" class="container" style="display: none;">
<div class="row">
     <div class="col">
       <h5 class="text-primary">Acción y Ciencia Ficción</h5>
       <p><a href="" class="text-secondary text-decoration-none">Desastre</a></p>
       <p><a href="" class="text-secondary text-decoration-none">Guerra</a></p>
       <p><a href="" class="text-secondary text-decoration-none">Futuristica</a></p>
       <hr>
       <h5 class="text-primary">Arte</h5>
       <p><a href="" class="text-secondary text-decoration-none">Arquitectura</a></p>
       <p><a href="" class="text-secondary text-decoration-none">Fotografía</a></p>
       <p><a href="" class="text-secondary text-decoration-none">Artes visuales</a></p>
       <p><a href="" class="text-secondary text-decoration-none">Artes escénicas</a></p>
       <p><a href="" class="text-secondary text-decoration-none">Diseño</a></p>
       <hr>
     </div>
     <div class="col">
     <h5 class="text-primary">Historia</h5>
       <p><a href="" class="text-secondary text-decoration-none">Américas</a></p>
       <p><a href="" class="text-secondary text-decoration-none">Europa</a></p>
       <p><a href="" class="text-secondary text-decoration-none">América Latina</a></p>
       <p><a href="" class="text-secondary text-decoration-none">Judío</a></p>
       <p><a href="" class="text-secondary text-decoration-none">Moderno</a></p>
       <hr>
     </div>
     <div class="col">
     <h5 class="text-primary">Crecimiento profesional</h5>
     <p><a href="" class="text-secondary text-decoration-none">Liderazgo</a></p>
       <p><a href="" class="text-secondary text-decoration-none">Motivacional</a></p>
       <p><a href="" class="text-secondary text-decoration-none">Capacitación</a></p>
       <p><a href="" class="text-secondary text-decoration-none">Mentoría</a></p>
       <p><a href="" class="text-secondary text-decoration-none">Coaching</a></p>
       <p><a href="" class="text-secondary text-decoration-none">Administración</a></p>
       <hr>
     </div>
</div>
</div>
<div id="resultado" class="container mt-5 mb-5" style="display:block; width:70%;">
<div class="row">
 <div class="col-md-3 mb-3">
    <div class="card">
    <img class="img-fluid mx-auto d-block" alt="100%x280" src="../resources/images/portadas/575cd9c1b7480e99666ca9622c5b2219.jpg" style="height: 300px; width:260px;"> 
    </div>
  </div>
<div class="col">
    <div class="alert alert-warning" role="alert">
       <h4><b>Strange Tales 2</b></h4>
    </div>
   <div class="ml-3">
       <label><b class="text-info">Tipo: </b><label class="text-capitalize">revista</label></label><br>
       <label><b class="text-info">Idioma: </b><label class="text-capitalize">español</label></label><br>
       <label><b class="text-info">Autor: </b><label class="text-capitalize">J.K. Rowling</label></label><br>
       <label><b class="text-info">Categoria: </b><label class="text-capitalize">Fantasia</label></label><br>
       <label><b class="text-info">Editorial: </b><label class="text-capitalize">McGrawHill</label></label><br>
       <button type="button" class="btn btn-info">Ver ahora</button>
   </div>
</div>
</div>

<div class="row mt-5">
 <div class="col-md-3 mb-3">
    <div class="card">
    <img class="img-fluid mx-auto d-block" alt="100%x280" src="../resources/images/portadas/61jC09nUHxL.jpg" style="height: 300px; width:260px;"> 
    </div>
  </div>
<div class="col">
    <div class="alert alert-warning" role="alert">
       <h4><b>Strange Tales 2</b></h4>
    </div>
   <div class="ml-3">
       <label><b class="text-info">Tipo: </b><label class="text-capitalize">revista</label></label><br>
       <label><b class="text-info">Idioma: </b><label class="text-capitalize">español</label></label><br>
       <label><b class="text-info">Autor: </b><label class="text-capitalize">J.K. Rowling</label></label><br>
       <label><b class="text-info">Categoria: </b><label class="text-capitalize">Fantasia</label></label><br>
       <label><b class="text-info">Editorial: </b><label class="text-capitalize">McGrawHill</label></label><br>
       <button type="button" class="btn btn-info">Ver ahora</button>
   </div>
</div>
</div>

</div>

<?PHP include 'componentes/footer_2.html';?>
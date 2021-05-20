<?PHP
     session_start();
     if(!isset($_SESSION['vsID'])){
          header('location:../../pages/404.php');
     }

     if($_SESSION['vsTipoU']!='2'){
         header('location:../../pages/404.php');
     }
?>
<?PHP header('Content-Type: text/html; charset=UTF-8');
      include('../componentes/header_u.html'); ?>

<div class="container mt-4">
    <h3>Explora según tu interés <span class="badge badge-secondary">New</span></h3>
    <hr>
     
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <button class="btn btn-outline-secondary" type="button" id="button-addon1">Buscar</button>
  </div>
  <input type="text" class="form-control" placeholder="Escribe lo que buscas..." aria-label="Example text with button addon" aria-describedby="button-addon1">
</div>
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
<?PHP include '../componentes/footer_2.html';?>
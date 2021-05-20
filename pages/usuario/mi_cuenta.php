<?PHP
     session_start();
     require('../../config/conexion.php');
     if(!isset($_SESSION['vsID'])){
          header('location:../../pages/404.php');
     }

     if($_SESSION['vsTipoU']!='2'){
         header('location:../../pages/404.php');
     }
     $id_user = $_SESSION['vsID'];
     $qry = "select * from usuarios where id_usuario='$id_user'";
     $res = mysqli_query($conexion,$qry);
     while($fila = mysqli_fetch_array($res)){

     
?>
<?PHP header('Content-Type: text/html; charset=UTF-8');
      include('../componentes/header_u.html'); ?>

<div class="container mt-5 mb-5" style="width: 50%;">
      <div class="row">
         <div class="col text-center">
         <img src="../../resources/images/login.png" width="150px" class="img-fluid" alt="Responsive image"><br><br>
         <h4>Mi usuario: <?PHP echo $fila['nickname'];?></h4>
         <br>
         </div>
      </div>
      <div class="row text-center">
          <div class="col">
          <h5 class="text-secondary">Nombres</h5>
         <h5><?PHP echo $fila['nombres'];?></h5><br>
          </div>
          <div class="col">
          <h5 class="text-secondary">Apellidos</h5>
         <h5><?PHP echo $fila['apellidos'];?></h5>
          </div>
      </div>
      <div class="row text-center">
          <div class="col">
          <h5 class="text-secondary">Nickname</h5>
         <h5><?PHP echo $fila['nickname'];?></h5><br>
          </div>
          <div class="col">
          <h5 class="text-secondary">Coreo</h5>
         <h5><?PHP echo $fila['email'];?></h5>
          </div>
      </div>
      <div class="row text-center">
          <div class="col">
          <h5 class="text-secondary">Tipo</h5>
         <h5><?PHP if($fila['id_rol']==1){
             echo "Administrador";
         }else{
             echo "Normal";
         }?></h5><br>
          </div>
        <?PHP }?>
      </div>
      </div>
<?PHP include '../componentes/footer_2.html';?>
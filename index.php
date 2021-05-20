<?PHP header('Content-Type: text/html; charset=UTF-8');
      include('pages/componentes/header.html'); ?>

<!--Jumbotron-->
    <div class="jumbotron jumbotron-fluid" >
            <div class="container">
                <h2>Desde aventuras hasta conocimiento!</h2>
            <p class="lead">Entretenimiento y conocimiento sin fin. Lea en cualquier momento, en cualquier lugar.</p>
            <hr class="my-4">
             <!-- Button trigger modal -->
             <a href="pages/login.php"><button type="button" class="btn btn-outline-primary btn-sm text-decoration-none" data-toggle="modal">
                  Inicia sesión
             </button></a>
</div>
</div>

<!--Carousel-->
          <script type="text/javascript" src="assets/js/app.js"></script>


  <div class="container mb-5">
    
    <div class="row">
        <div class="col text-center">
            <h3 class="mb-3">Agregado recientemente!</h3>
        </div>
        <div class="col-12">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                <!-- Primer carousel-->
                    <div class="carousel-item active">
                       
                        <div class="row">

                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid mx-auto d-block" alt="100%x280" src="resources/images/portadas/450_1000.jpg" style="height: 300px; width:260px;">
                                </div>
                            </div>

                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid mx-auto d-block" alt="100%x280" src="resources/images/portadas/575cd9c1b7480e99666ca9622c5b2219.jpg" style="height: 300px; width:260px;">
                               
                                </div>
                            </div>

                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid mx-auto d-block" alt="100%x280" src="resources/images/portadas/61jC09nUHxL.jpg" style="height: 300px; width:260px;">
                                   
                                </div>
                            </div>

                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid mx-auto d-block" alt="100%x280" src="resources/images/portadas/D_NQ_NP_831643-MLV32081272778_092019-O.jpg" style="height: 300px; width:260px;">
                                 
                                </div>
                            </div>
                            

                       </div>

                    </div>
                <!-- Fin carousel-->
                    <div class="carousel-item">
                    <div class="row">

<div class="col-md-3 mb-3">
    <div class="card">
        <img class="img-fluid mx-auto d-block" alt="100%x280" src="resources/images/portadas/450_1000.jpg" style="height: 300px; width:260px;">
    </div>
</div>

<div class="col-md-3 mb-3">
    <div class="card">
        <img class="img-fluid mx-auto d-block" alt="100%x280" src="resources/images/portadas/575cd9c1b7480e99666ca9622c5b2219.jpg" style="height: 300px; width:260px;">
   
    </div>
</div>

<div class="col-md-3 mb-3">
    <div class="card">
        <img class="img-fluid mx-auto d-block" alt="100%x280" src="resources/images/portadas/61jC09nUHxL.jpg" style="height: 300px; width:260px;">
       
    </div>
</div>

<div class="col-md-3 mb-3">
    <div class="card">
        <img class="img-fluid mx-auto d-block" alt="100%x280" src="resources/images/portadas/D_NQ_NP_831643-MLV32081272778_092019-O.jpg" style="height: 300px; width:260px;">
     
    </div>
</div>


</div>
                    </div>

                    <div class="carousel-item">
                    <div class="row">

<div class="col-md-3 mb-3">
    <div class="card">
        <img class="img-fluid mx-auto d-block" alt="100%x280" src="resources/images/portadas/450_1000.jpg" style="height: 300px; width:260px;">
    </div>
</div>

<div class="col-md-3 mb-3">
    <div class="card">
        <img class="img-fluid mx-auto d-block" alt="100%x280" src="resources/images/portadas/575cd9c1b7480e99666ca9622c5b2219.jpg" style="height: 300px; width:260px;">
   
    </div>
</div>

<div class="col-md-3 mb-3">
    <div class="card">
        <img class="img-fluid mx-auto d-block" alt="100%x280" src="resources/images/portadas/61jC09nUHxL.jpg" style="height: 300px; width:260px;">
       
    </div>
</div>

<div class="col-md-3 mb-3">
    <div class="card">
        <img class="img-fluid mx-auto d-block" alt="100%x280" src="resources/images/portadas/D_NQ_NP_831643-MLV32081272778_092019-O.jpg" style="height: 300px; width:260px;">
     
    </div>
</div>


</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
<?PHP include 'pages/componentes/footer.html';?>
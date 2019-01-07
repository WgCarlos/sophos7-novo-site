<?php 
  include "inc/header.php";
?>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFFFFF">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="img/teste/Logo-Uniplus1.png" width="200" height="65" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link active " href="index.php">Início <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sobre.php">Sistema</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Uniplus</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="uniplus.php">Versão Completa</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="market.php">Supermercados</a>
              <a class="dropdown-item" href="store.php">Lojas de Varejo</a>
              <a class="dropdown-item" href="gourmet.php">Bares e Restaurantes</a>
              <a class="dropdown-item" href="service.php">Prestadores de Serviço</a>
            </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Integrações</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="tef.php">TEF</a>
              <div class="dropdown-divider"></div>
            </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato.php">Contato</a>
        </li>
      </ul>
    </div>  
  </div>  
</nav>
<!--Slide Show-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner sliderHome">
      <div class="carousel-item active">
          <img class="d-block w-100" src="img/job3.png" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
          <a type="button" href="uniplus.php"  class="btn btn-primary btn-lg text-uppercase">Conheça o ERP Uniplus</a>
        </div>
      </div>
      <div class="carousel-item">
          <img class="d-block w-100" src="img/job1.png" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
          <a type="button" href="uniplus.php" class="btn btn-primary btn-lg text-uppercase">Conheça o ERP Uniplus</a>
        </div>
      </div>
    </div>
    <div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="estilo.css">
    <link rel="icon" id="mas" type="imge/x-icon" href="img/3000.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pleiades book</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img/3000.png" id="mas" alt="logo/Home" width="80" height="80">
           </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Livros</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Filtro
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="#">Fantasia</a></li>
                  <li><a class="dropdown-item" href="#">Terror</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Autores populares</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Em alta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Publicar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Login</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Nome do livro" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Pesquisar</button>
              
            </form>
          </div>
        </div>
      </nav><br><br>


<span class="border border-dark" >
    <div class="d-flex justify-content-center" >
      <div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img id="mot" src="img/fantas.jpg" class="d-block w-10000" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Fantasia</h5>
              <h6>Uma obra considerada de fantasia apresenta elementos que são imaginados, fantasiados. Trata-se de uma história que só é plausível de acontecer no universo literário e justifica-se (e aí o leitor concorda com os argumentos) por uso de elementos mágicos.</h6>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img id="mot" src="img/roma.jpg" class="d-block w-10000" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Romance</h5>
              <h6>Romance é a forma literária pertencente ao gênero narrativo e que apresenta uma história completa composta por enredo, temporalidade, ambientação e personagens definidos de maneira clara. É oriundo dos contos épicos e revela ações em conjunto com a distribuição de personagens ao longo da trama.</h6>
            </div>
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    </span>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
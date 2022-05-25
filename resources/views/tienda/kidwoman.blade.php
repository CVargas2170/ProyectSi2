<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:wght@500&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
   
   
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Tienda de Zapatos </title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
          <a class="navbar-brand" href="#">CalzadoManía</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " href="#">hombres</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
           <!--   <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>-->
            </ul>
            <form class="d-flex">
              <input class=" px-2 search" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn0 " type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav>



      <section class="product">
        <div class="container py-5">
          <div class="row py-5 ">
              <div class="col-lg-5 m-auto text-center">
                  <h1> Zapatos para mujeres</h1>
                  <h6 style="color:red;">Zapatos casuales</h6>
              </div>
          </div>
        
    <!--inicio .... -->
           <div class="row">
                <div class="col-lg-3 text-center">
                  <div class="card border-0 bg-light mb-2">

                    <div class="card-body">
                      <img src="./img/woman/adidascolor.jpg" class="img-fluid" alt="">
                      
                    </div>
                  </div>
                  <h6> Adidas  </h6>
                  <h6> primavera </h6>
                  <p>Bs. 145.99</p>
                </div>

                <div class="col-lg-3 text-center">
                  <div class="card border-0 bg-light mb-2">

                    <div class="card-body">
                      <img src="./img/woman/puma-W.jpg" class="img-fluid" alt="">
                      
                    </div>
                  </div>
                  <h6> Puma</h6>
                  <h6> Black electric </h6>
                  <p>Bs. 199.99</p>
                </div>

                <div class="col-lg-3 text-center">
                  <div class="card border-0 bg-light mb-2">

                    <div class="card-body">
                      <img src="./img/woman/adidasN.jpg" class="img-fluid" alt="">
                      
                    </div>
                  </div>
                  <h6> Adidas</h6>
                  <h6> blanco ligth </h6>
                  <p>Bs. 500</p>
                </div>

                <div class="col-lg-3 text-center">
                  <div class="card border-0 bg-light mb-2">

                    <div class=" card-body">
                    
                      <img src="./img/woman/adidasverde.jpg" class="img-fluid" alt="">
                      
                    </div>
                  </div>
                  <h6> Adidas</h6>
                  <h6> turqueza </h6>
                  <p>Bs. 550 </p>
                </div>
          </div>

          <div class="row">
            <div class="col-lg-6 text-center m-auto">
              <button class="btn2">Mostrar más</button>
            </div>
          </div>
          
        </div>


        <div class="row">
          <div class="col-lg-3 text-center">
            <div class="card border-0 bg-light mb-2">

              <div class="card-body">
                <img src="./img/woman/calzadonike.jpg" class="img-fluid" alt="">
                
              </div>
            </div>
            <h6> Nike  </h6>
            <h6> Black classic </h6>
            <p>Bs.340</p>
          </div>

          <div class="col-lg-3 text-center">
            <div class="card border-0 bg-light mb-2">

              <div class="card-body">
                <img src="./img/woman/filablack.jpg" class="img-fluid" alt="">
                
              </div>
            </div>
            <h6> Fila </h6>
            <h6> Black dark </h6>
            <p>Bs. 450 </p>
          </div>

          <div class="col-lg-3 text-center">
            <div class="card border-0 bg-light mb-2">

              <div class="card-body">
                <img src="./img/woman/filablanco.jpg" class="img-fluid" alt="">
                
              </div>
            </div>
            <h6> Fila </h6>
            <h6> white classic </h6>
            <p>Bs. 500 </p>
          </div>

          <div class="col-lg-3 text-center">
            <div class="card border-0 bg-light mb-2">

              <div class=" card-body">
              
                <img src="./img/woman/filawomanew.jpg" class="img-fluid" alt="">
                
              </div>
            </div>
            <h6> Fila</h6>
            <h6> white cow </h6>
            <p>Bs. 550 </p>
          </div>
    </div>

    <div class="row">
      <div class="col-lg-6 text-center m-auto">
        <button class="btn2">Mostrar más</button>
      </div>
    </div>
    
  </div>

   <!-- continuara.... -->

<div class="row">
  <div class="col-lg-3 text-center">
    <div class="card border-0 bg-light mb-2">

      <div class="card-body">
        <img src="./img/woman/nikerosa.jpg" class="img-fluid" alt="">
        
      </div>
    </div>
    <h6> Nike  </h6>
    <h6> Air 7c pink </h6>
    <p>Bs. 399.99</p>
  </div>         

  <div class="col-lg-3 text-center">
    <div class="card border-0 bg-light mb-2">

      <div class="card-body">
        <img src="./img/woman/nikerose.jpg" class="img-fluid" alt="">
        
      </div>
    </div>
    <h6> Nike </h6>
    <h6> cream future </h6>
    <p>Bs.280 </p>
  </div>

  <div class="col-lg-3 text-center">
    <div class="card border-0 bg-light mb-2">

      <div class="card-body">
        <img src="./img/woman/pumacolorrr.jpg" class="img-fluid" alt="">
        
      </div>
    </div>
    <h6> Puma </h6>
    <h6> colors play </h6>
    <p>Bs.300 </p>
  </div>

  <div class="col-lg-3 text-center">
    <div class="card border-0 bg-light mb-2">

      <div class=" card-body">
      
        <img src="./img/woman/pumasXXY.jpg" class="img-fluid" alt="">
        
      </div>
    </div>
    <h6> Puma </h6>
    <h6> Red wine </h6>
    <p>Bs.400 </p>
  </div>
</div>

<div class="row">
<div class="col-lg-6 text-center m-auto">
<button class="btn2">Mostrar más</button>
</div>
</div>

</div>


<div class="row">
<div class="col-lg-3 text-center">
<div class="card border-0 bg-light mb-2">

<div class="card-body">
  <img src="./img/woman/z2.jpg" class="img-fluid" alt="">
  
</div>
</div>
<h6> C/Moran  </h6>
<h6> cream classic </h6>
<p>Bs.290 </p>
</div>

<div class="col-lg-3 text-center">
<div class="card border-0 bg-light mb-2">

<div class="card-body">
  <img src="./img/woman/z3.jpg" class="img-fluid" alt="">
  
</div>
</div>
<h6> C/Moran </h6>
<h6> pink classic </h6>
<p>Bs. 350 </p>
</div>

<div class="col-lg-3 text-center">
<div class="card border-0 bg-light mb-2">

<div class="card-body">
  <img src="./img/woman/z4.jpg" class="img-fluid" alt="">
  
</div>
</div>
<h6> C/Moran </h6>
<h6> light blue classic </h6>
<p>Bs. 400 </p>
</div>

<div class="col-lg-3 text-center">
<div class="card border-0 bg-light mb-2">

<div class=" card-body">

  <img src="./img/woman/z5.jpg" class="img-fluid" alt="">
  
</div>
</div>
<h6> C/Moran </h6>
<h6> Purple classic </h6>
<p>Bs. 450 </p>
</div>
</div>

<div class="row">
<div class="col-lg-6 text-center m-auto">
<button class="btn2">Mostrar más</button>
</div>
</div>

</div>
   <!-- continuara.... -->


     </section>



    <!-- continuara.... -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
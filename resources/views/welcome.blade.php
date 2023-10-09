<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>tours</title>

        <<link rel="stylesheet" href="{{ asset('css/style.css') }}">




    <!--boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--boostrap-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
     
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!--google fonts-->

</head>
 

<body>
 
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="#" id="logo"><span>CITY</span>tours</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span><i class="fa-solid fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#book">Book</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#paquete">Paquetes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#servicios">Servicios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Galeria">Galeria</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Conocenos">Conocenos</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Buscar">
              <button class="btn btn-primary" type="button">Buscar</button>
            </form>
          </div>
        </div>
      </nav>
    

      
      <!--home section stard-->

      <div class="home">
        <div class="content">
          <h5>BIENVENIDOS A HUÁNUCO</h5>
          <h1>VISITA <span class="changecontent"></span></h1>
          <p>Ven a peru y disfruta una de las mejores experiencias del turismo<br> peru lo tiene todo y te sorprendera</p>
          <a href="#book">Book Place</a>
        </div>
      </div>

      <!--home section end-->


      <!-- section book stard -->
      <section class="book" id="book">
        <div class="container">

          <div class="main-text">
            <h1><span>B</span>ook</h1>
          </div>
          <div class="row">
            <div class="col-md-6 py-3 py-md-0">
            <div class="card">
              <img src="{{ asset('imagenes/llamafeliz.jpg') }}" alt="">
            </div>
          </div>

          <div class="col-md-6 py-3 py-md-0">
            <form action="#">
              <input type="text" class="form-control" placeholder="where to" required><br>
              <input type="text" class="form-control" placeholder="How Many" required><br>
              <input type="date" class="form-control" placeholder="Arrivals" required><br>
              <input type="date" class="form-control" placeholder="Leaving" required><br>
              <textarea class="form-control" rows="5" name="text" placeholder="entrer you name & detalles"></textarea><br>
              <input type="submit" value="Book Now" class="submit" required>

            </form>
          </div>
        </div>
        </div>
      </section>
      <!-- section book end -->



      <!-- section paquetes stard -->

      <section class="paquete" id="paquete">
        <div class="container">
          
          <div class="main-text">
            <h1><span>P</span>aquetes</h1>
          </div>

          <div class="row" style="margin-top: 30px;">

            <div class="col-md-4 py-3 py-md-0">

              <div class="card">
                <img src="./images/1.webp" alt="">
                <img src="{{ asset('imagenes/p1.jpg') }}" alt="">
                <div class="card-body">
                  <h3> Iglesia de San Francisco </h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  <div class="stard">
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star "></i>
                  </div>
                  <h6>Precio: <strong>$320.00</strong></h6><br>
                  <a href="#book">Book Now</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 py-3 py-md-0">

              <div class="card">
                <img src="./images/1.webp" alt="">
                <img src="{{ asset('imagenes/p2.jfif') }}" alt="">
                <div class="card-body">
                  <h3> Kotosh </h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  <div class="stard">
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star "></i>
                  </div>
                  <h6>Precio: <strong>$320.00</strong></h6><br>
                  <a href="#book">Book Now</a>
                </div>
              </div>

            </div>

            <div class="col-md-4 py-3 py-md-0">

              <div class="card">
                <img src="./images/1.webp" alt="">
                <img src="{{ asset('imagenes/p3.jfif') }}" alt="">
                <div class="card-body">
                  <h3> Casa de la Perricholi </h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  <div class="stard">
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star "></i>
                  </div>
                  <h6>Precio: <strong>$320.00</strong></h6><br>
                  <a href="#book">Book Now</a>
                </div>
              </div>

            </div>
          </div>


          <div class="row" style="margin-top: 30px;">

            <div class="col-md-4 py-3 py-md-0">

              <div class="card">
                <img src="./images/1.webp" alt="">
                <img src="{{ asset('imagenes/1.webp') }}" alt="">
                <div class="card-body">
                  <h3> Mayantuyacu </h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  <div class="stard">
                    <i class="fa-solid fa-star checked"></i> 
                    <i class="fa-solid fa-star checked"></i> 
                    <i class="fa-solid fa-star checked"></i> 
                    <i class="fa-solid fa-star checked"></i> 
                    <i class="fa-solid fa-star "></i> 
                  </div>
                  <h6>Precio: <strong>$320.00</strong></h6><br> 
                  <a href="#book">Book Now</a> 
                </div>
              </div>
            </div>

            <div class="col-md-4 py-3 py-md-0"> 
  
              <div class="card"> 
                <img src="./images/1.webp" alt=""> 
                <img src="{{ asset('imagenes/1.webp') }}" alt="">
                <div class="card-body"> 
                  <h3> Lago Titicaca </h3>  
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> 
                  <div class="stard">  
                    <i class="fa-solid fa-star checked"></i> 
                    <i class="fa-solid fa-star checked"></i> 
                    <i class="fa-solid fa-star checked"></i> 
                    <i class="fa-solid fa-star checked"></i> 
                    <i class="fa-solid fa-star "></i> 
                  </div> 
                  <h6>Precio: <strong>$320.00</strong></h6><br> 
                  <a href="#book">Book Now</a> 
                </div>  
              </div>  
 
            </div> 
 
            <div class="col-md-4 py-3 py-md-0"> 
 
              <div class="card"> 
                <img src="./images/1.webp" alt=""> 
                <img src="{{ asset('imagenes/1.webp') }}" alt=""> 
                <div class="card-body"> 
                  <h3> Yarowilca </h3> 
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> 
                  <div class="stard"> 
                    <i class="fa-solid fa-star checked"></i> 
                    <i class="fa-solid fa-star checked"></i> 
                    <i class="fa-solid fa-star checked"></i> 
                    <i class="fa-solid fa-star checked"></i>  
                    <i class="fa-solid fa-star "></i> 
                  </div>  
                  <h6>Precio: <strong>$320.00</strong></h6><br> 
                  <a href="#book">Book Now</a> 
                </div> 
              </div>  
 
            </div> 
 
 
           
          </div> 
        </div> 
      </section> 
   
 
      <!-- section paquetes end --> 


      <!-- Section Services Start -->
    <section class="servicios" id="servicios">
      <div class="container">
        <div class="main-txt">
          <h1><span>S</span>ervicios</h1>
        </div>
        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <i class="fas fa-hotel"></i>
              <div class="card-body">
                <h3>Hotel </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <i class="fas fa-utensils"></i>
              <div class="card-body">
                <h3>Alimentos y bebidas</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <i class="fas fa-bullhorn"></i>
              <div class="card-body">
                <h3>Guía de seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <i class="fas fa-globe-asia"></i>
              <div class="card-body">
                <h3>Para Todo el mundo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <i class="fas fa-plane"></i>
              <div class="card-body">
                <h3>Viajes rápidos y seguros</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <i class="fas fa-hiking"></i>
              <div class="card-body">
                <h3>Aventuras</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section Services End -->


    <!-- Section Galeria Start -->
    <section class="Galeria" id="Galeria">
      <div class="container">
        <div class="main-txt">
          <h1><span>G</span>aleria</h1>
        </div>
        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="{{ asset('imagenes/1.jpg') }}" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="{{ asset('imagenes/2.jpg') }}" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="{{ asset('imagenes/3.jpg') }}" alt="" height="230px">
            </div>
          </div>
        </div>
        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="{{ asset('imagenes/4.jpg') }}" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="{{ asset('imagenes/5.jfif') }}" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="{{ asset('imagenes/6.jfif') }}" alt="" height="230px">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section Galeria End -->


    <!-- Conocenos Start -->
    <section class="Conocenos" id="Conocenos">
      <div class="container">
        <div class="main-txt">
          <h1>Quienes <span>Somos</span></h1>
        </div>
        <div class="row" style="margin-top: 50px;">
          <div class="col-md-6 py-3 py-md-0">
            <div class="card">
              <img src="{{ asset('imagenes/somos.jpg') }}" alt="">
            </div>
          </div>
          <div class="col-md-6 py-3 py-md-0">
            <h2>Cómo funcionan las agencias de viajes</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident perferendis dolorem, numquam earum at nam beatae voluptate natus consectetur facere, saepe cupiditate ut exercitationem deserunt, facilis quam perspiciatis autem iure illo harum minima. Quas, vitae aperiam laudantium alias asperiores nulla rerum, nihil eveniet perferendis sint illum accusamus officiis aliquam nam.</p>
            <button id="Conocenos-btn">Leer más...</button>
          </div>
        </div>
      </div>
    </section>
    <!-- Conocenos End -->

    <!-- Footer Start -->
    <footer id="footer">
      <h1><span>C</span>ity Tours</h1>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus fugiat, ipsa quos nulla qui alias.</p>
      <div class="social-links">
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-youtube"></i>
      </div>
      <div class="credit">
        <p>Diseñado por <a href="#">anonymous</a></p>
      </div>
      <div class="copyright">
        <p>&copy;Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
    </footer>
    <!-- Footer End -->






</body>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</html>

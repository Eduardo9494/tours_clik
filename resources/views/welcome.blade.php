<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <a class="nav-link" href="#Servicios">Servicios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Galeria">Galeria</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#About">About</a>
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
                <img src="{{ asset('imagenes/1.webp') }}" alt="">
                <div class="card-body">
                  <h3> Machu Picchu </h3>
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
                  <h3> Machu Picchu </h3>
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
                  <h3> Machu Picchu </h3>
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
                  <h3> Machu Picchu </h3>
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
                  <h3> Machu Picchu </h3>  
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
                  <h3> Machu Picchu </h3> 
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






</body>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</html>
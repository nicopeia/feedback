<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!-- estilos CSS -->

<link rel="stylesheet" href="estilos/styles.css">
<!-- Ionic Icons -->
<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<script src="main.js"></script>
</head>

<body>
    
<!-- menu de navegacion -->
<nav id="menu" class="navbar fixed-top navbar navbar-expand-lg ">
    <div class="container">
    <p  class="logo mt-3">FEEDBACK</p>
    <button   class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation" >
      <i style="color: white;" class="icon ion-md-menu "></i>
    </button>
  
    <div  class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul  class="navbar-nav ml-auto">
        <li class="nav-item mr-2">
          <a class="nav-link " href="#home">Inicio</a>
          
        </li>
        <li  class="nav-item mr-2">
          <a class="nav-link " href="#servicios">Servicios</a>
        </li>
        <li  class="nav-item mr-2">
          <a class="nav-link " href="#planes">Planes</a>
        </li>
    
        <li class="nav-item mr-2">
          <a class="nav-link  " href="#hire-sec">Contacto</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
<!-- fin menu de navegacion -->
      
      <!-- Header -->
      
      <header class="text-center"  name="home" id="home">
        <div class="intro-text ">
        <?php  include 'validarForm.php';
                           include 'conexion.php';
                           require_once 'guardar.php';
                           
                    ?>
                    <img id="mundo" class=" mundo " src="./img/mars.png" alt="foto" >
                   
            <h1 id="humo"  >FEED <span class="color">BACK</span></h1>
            <p class="animate__animated animate__fadeInLeft mb-3">DESARROLLO WEB</p>
            
            <a  href="#hire-sec">
              
              <span></span>  
              <span></span>  
              <span></span>  
              <span></span>  
              
              CONTACTO
            </a> 
          </div>
          
      </header>
    

      <section>
       
        <div class="container mt-5">
          
        <div class="row">
        <div class="col-md-6 ">
        
       
          
            
          <img  src="img/feature-2.jpg" class="img-fluid imgpc " alt="">
         
         
        
        </div>
        
      
      
        <div class="col-md-6 py-5 mt-5">
        
       
          <h2 class="text-muted">SERVICIOS WEB </h2>
          <hr>
          <p>Desarrollamos la construcción de tu sitio web en función de tu idea,aportandonos tus textos y tus activos digitales.

            En caso de no contar con algunos de estos elementos nuestro equipo  cuenta con redactores publicitarios, fotógrafos asociados, diseñadores, ingenieros en sistemas y especialistas en marketing que te asesorarán para crear el mejor sitio posible para tu presupuesto.
            El tiempo de entrega de una web de servicios o tienda online es de 22 dias habiles desde el momento de contar con todo el material para la construccion del sitio.
        </p>
          
 <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
    DEMO WEB
  </button> 
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">WEB SERVICIOS DEMO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <video class="img-fluid" width="450px" height="300px" controls src="./img/video1.mp4"></video>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>
         
        
           </div>
         </div>
        
        </div>
      
      </section>
      <div class="container text-center ">
  
        <span class="star agrandar">
       <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
      </div>

    





      <!-- FIN SECCION INFO  -->
      <section id="servicios" class="service py-5 bg-light">
        <div class="container ">
          
               <div class="text-center ">
              <h2>SERVICIOS</h2>
              <p class="text-muted">Desarrollo de tecnologia para potenciar tus ventas.</p>
      
                 </div>
  
          <div class="row">
                  
          
                     
      
                      
                          <div class="col-md-6 ">
                              <div class="text-center">
                                   
                                      <img class="agrandar"  src="./img/flaticon8.png" alt=""/>
                                
                                  <div>
                                      <h2>TIENDA ONLINE</h2>
                                      <hr>
                                      <p> Desarrollo de tiendas online en CMS wordpress utilizando woocommerce y servicio de entrega del producto.</p>
                                  </div>
                              </div>
                          
                              <div class="text-center">
                                  
                                      <img class="agrandar" src="./img/flaticon7.png" alt=""/>
                                  
      
                                  <div>
                                      <h2>WEB SERVICIOS</h2>
                                      <hr>
                                      <p>Realizamos sitios web dinamicos y adaptados a dispositivos moviles - responsive design.</p>
                                  </div>
                              </div>
                          </div>
                      
                      
                          <div class="col-md-6 ">
                              <div class="text-center">
                                <img class="agrandar" src="./img/flaticon6.png" alt=""/>
                                  
                                  <div>
                                      <h2>LANDING WEB</h2>
                                      <hr>
                                      <p>A medida para potenciar tus ventas y promocion de tus productos y servicios.Diseños personalizados</p>
                                  </div>
                              </div>
                          
                              <div class="text-center">
                                 
                                      <img class="agrandar"  src="./img/flaticon9.png" alt=""/>
                                  
      
                                  <div >
                                      <h2>SEO</h2>
                                      <hr>
                                      <p>Posicionamiento en Google- vende en  #GOOGLE con anuncios y analisis utilizando la estrategia adecuada para potenciar tus ventas.</p>
                                  </div>
                              </div>
                          </div>
               </div>
               
          </div>
         
      </section> <!-- End of Service2 Section -->	
    
      
        
        
        
     
        
     
    
      <section>

        <div class="container mt-5">
       
        <div class="row">
        <div class="col-md-6 py-5 mt-5 ">
        
            <h2 class="text-muted">SERVICIOS WEB </h2>
            <hr>
            <p>
              todos los sitios que construimos incluyen un maquetado responsivo, pensado para adaptarse a todo tipo de pantalla, desde celulares y tablets.
              Las ventas de productos y servicios online tienen un gran crecimiento diario siendo de gran potencial para vender las 24hs del dia.
              Ademas ofrecemos la posibilidad de administrar el posicionamiento en los buscadores. Estar mejor posicionado en google significa llegar a mas clientes y generar mayor cantidad de ventas.
          </p>
         
           
        <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">
    DEMO WEB
  </button> 
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">TIENDA ONLINE DEMO </h5>
          <button  type="button" class="close " data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <video class="img-fluid" width="450px" height="300px" controls src="./img/video.mp4"></video>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>
            
         
         
         
        
        </div>
        
      
      
        <div class="col-md-6 mb-2">
        
             <div class="ml-5">
            <img  src="img/feature-1.jpg" class="img-fluid " alt="">
            
          </div>
         
        
           </div>
          
         </div>

        </div>
      
      </section>
 <div class="container text-center ">
  
  <span class="star agrandar">
 <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
</div>
     


      <!-- FIN SECCION INFO  -->
 <!--imagen separador -->	

 <div id="restaurant-menu">
   
  <div class="section-title text-center center">
    <div class="overlay">
     
      
    
    </div>
    
     
</div>
</div>
<section class="bg-light py-4 text-center">
<div class="container">
<div class="row ">
  <div class="col-md-6 py-4">
   <a href="www.facebook.com" target="blank"> <img id="fb" class="fb" src="./img/facebook.png" alt="foto"></a>
  </div>
  <div class="col-md-6 py-4">
    <a href="www.facebook.com" target="blank"> <img id="fb" class="fb" src="./img/instagram-logo.png" alt="foto"></a>
   </div>
  </div>
  </div>
</section>
<!-- INICIO SECCION SERVICIOS-->
<section id="planes"class="py-5 ">
    <div class="container">
      <h3 class="text-center">ALGUNOS DE NUESTROS PLANES</h3>
      <p class="lead text-muted text-center ">Diseñados a tu medida</p>
      <div class="row">
        <div class="col-lg-3">
          <div class="card  bg-light my-3">
            <div class="card-header bg-light  p-4">
              <h5 class="mb-3 font-weight-bold">TIENDA ONLINE</h5>
              <p ><del class="font-weight-bold">$30.000</del> 50% off</p>
              <h2 class="display-5 font-weight-bold">$15.000</h2>
              
            </div>
            <div class="card-body p-4">
              <p class="font-weight-bold">Incluye:</p>
              <ul class="list-unstyled">
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i> DOMINIO Y HOSTING</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i> CERTIFICAD SSL</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i> DISEÑO RESPONSIVE</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i> BOTON WHATSAPP </small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i> LINK A REDES SOCIALES</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i> MERCADOPAGO -PAYPAL</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i> SEGUIMIENTO DE ENVIO</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i> CARGA DE 40 PROD.</small></li>
                
              </ul>
            </div>
            <div class="card-footer bg-light  p-4 text-center">
              <a id="btnBlack" href="pagar.php" class="btn btn-danger d-block mb-3">Contratar <i class="icon ion-md-arrow-forward  ml-2"></i></a>
              <small class="text-muted">*Si tiene dudas contactenos.</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 ">
          <div class="card  bg-light my-3">
            <div class="card-header bg-light  p-4">
              <h5 class="mb-3 font-weight-bold">WEB SERVICIOS</h5>
              <p ><del class="font-weight-bold">$24.000</del> 50% off</p>
              <h2 class="display-5 font-weight-bold">$12.000</h2>
              
            </div>
            <div class="card-body p-4">
              <p class="font-weight-bold">Incluye:</p>
              <ul class="list-unstyled">
              <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i> DOMINIO Y HOSTING</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i> CERTIFICAD SSL</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i> DISEÑO RESPONSIVE</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i> BOTON WHATSAPP </small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i> LINK A REDES SOCIALES</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i> REGISTRO DE USUARIOS</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i> FUNCIONALIDADES</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i> BOTON DE PAGO</small></li>
                
              </ul>
            </div>
            <div class="card-footer bg-light  p-4 text-center">
              <a  id="btnBlack"  href="pagar.php" class="btn btn-danger d-block mb-3">Contratar <i class="icon ion-md-arrow-forward  ml-2"></i></a>
              <small class="text-muted">*Si tiene dudas contactenos.</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card bg-light my-3">
            <div class="card-header bg-light  p-4">
              <h5 class="mb-3 font-weight-bold">LANDING WEB</h5>
              <p ><del class="font-weight-bold">$16.000</del> 50% off</p>
              <h2 class="display-5 font-weight-bold">$8.000</h2>
              
            </div>
            <div class="card-body p-4">
              <p class="font-weight-bold">incluye:</p>
              <ul class="list-unstyled">
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i> DOMINIO Y HOSTING</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i> CERTIFICAD SSL</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i> DISEÑO RESPONSIVE</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i> BOTON WHATSAPP </small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i> LINK A REDES SOCIALES</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i> MERCADOPAGO -PAYPAL</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i> SEGUIMIENTO DE ENVIO</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i> CARGA DE 40 PROD.</small></li>
                
              </ul>
            </div>
            <div class="card-footer bg-light  p-4 text-center">
              <a id="btnBlack" href="pagar.php" class="btn btn-danger d-block mb-3">Contratar <i class="icon ion-md-arrow-forward  ml-2"></i></a>
              <small class="text-muted">*Si tiene dudas contactenos.</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card bg-light my-3">
            <div class="card-header bg-light  p-4">
              <h5 class="mb-3 font-weight-bold">WEB BASICA</h5>
              <p ><del class="font-weight-bold">$12.000</del> 50% off</p>
              <h2 class="display-5 font-weight-bold">$6.000</h2>
              
            </div>
            <div class="card-body p-4">
              <p class="font-weight-bold">incluye:</p>
              <ul class="list-unstyled">
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i>DOMINIO Y HOSTING</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i>CERTIFICAD SSL</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i>DISEÑO RESPONSIVE</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i>ESTATICA</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i>LINK A REDES SOCIALES</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i>BLOG</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i>-</small></li>
                <li class="mb-2"><small><i class="icon ion-md-checkmark mr-2"></i>-</small></li>
                
              </ul>
            </div>
            <div class="card-footer bg-light  p-4 text-center">
              <a id="btnBlack" href="pagar.php" class="btn btn-danger d-block mb-3">Contratar <i class="icon ion-md-arrow-forward  ml-2"></i></a>
              <small class="text-muted">*Si tiene dudas contactenos.</small>
            </div>
          </div>
        </div>
      
      </div>
      
    </div>
  </section>
<!-- FIN SECCION SERVICIOS-->

<div class="container text-center ">
  
  <span class="star agrandar">
 <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
</div>



  <section id="hire-sec">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-8  mt-5 " >
                    <h1>CONTACTO</h1>
                    <form action="index.php" method="POST">
                    <?php  include 'validarForm.php';
                           include 'conexion.php';
                           require_once 'guardar.php';
                           
                    ?>

                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control" required="required" placeholder="Nombre" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" required="required" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <textarea name="mensaje"  id="message" required="required" class="form-control" style="min-height: 100px;" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="form-group">
                           
                            <input type="submit" name="submit" class="btn btn-danger " value="ENVIAR">
                        </div>
    
                    </form>
                    
                </div>
                
              
                
          
                <div class=" col-md-4   mt-5  " >
                
                 
                    <h3><strong>DONDE ESTAMOS?</strong></h3>
                    <p><i class="fa fa-map-marker" style="color: red;"></i>  Estados Unidos 1211,
                        Buenos aires, CA 1101</p>

                        <p><i class="far fa-envelope" style="color: red;"></i>   info@hacetutiendaonline.com</p>
                        <p><i class="fa fa-phone" style="color: red;"></i>   +54 11 35222079</p>
                        <br/>
                        <h2>SEGUINOS</h2>
                           <div class="social">
                              <a href="#"><i class="fab fa-facebook"></i></a>
                           
                              <a href="#"><i class="fab fa-instagram"></i></a>
                              
                            </div>
                        
                
                          </div>  
              </div>
   
        </div>
                        
        <p class="text-center text-muted">COPYRIGHT@  FEEDBACK 2020 - Buenos Aires - Argentina</p>    
            
    </div>
      
    
<a  href="#home" class="subir" > <i class="fas fa-arrow-up "></i></a>
<a  href="https://wa.me/5491125320354?text=Hola!%20Estoy%20interesado%20en%20hacer%20una%20web!" class="whatsapp" target="_blank"> <i class="fab fa-whatsapp whatsapp-icon"></i></a>
</section>



    

     
   <!-- SCRIPT DE BOOTSTRAP JS --> 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<title>FEEDBACK - HACETUTIENDAONLINE</title>
<script src="main.js"></script>
   

</body>
</html>
<!DOCTYPE html>
<html>
<head>

  <title>Inicio</title>
  <link rel="icon" href="Imgs/Logo_proceder.JPG">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  <link href="Css/Footer_style.css" rel="stylesheet" >

</head>

<body>
    
<!-- Area de navegador Contenedor -->
<!-- ...........................-->
<nav class="navbar navbar-expand-lg navbar-light " id="nav_position" style="background-color:  #262626; ">
   <a class="navbar-brand" href="#"  style=" color:white;" ><img src="Imgs/Logo_proceder.JPG" class="rounded-circle" >PROCEDER, A.C.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup"  >
    <div class="navbar-nav" >
      <a class="nav-item nav-link active btn-light " style=" text-align: center; border-radius: 25px; width:150px;  color:white; background-color:   #0E5EA8;          " href="Pantalla_adm_inicio.php">INICIO <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link btn btn-light " style= " text-align: center; border-radius: 25px;width:150px;   color:#262626;" href="#">ELIMINAR</a>
      <a class="nav-item nav-link btn btn-light" style="text-align: center; border-radius: 25px; width:150px;  color:#262626;"  href="Pantalla_adm_agregar_archivos.php">AGREGAR</a>
    </div>
  </div>
</nav>


<!-- Area de ¿QUIÉNES SOMOS? Contenedor -->
<!-- ...........................-->
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
      <p class="lead font-weight-normal"><img src="Imgs/Logo_proceder.JPG" class="rounded-circle">PROCEDER, A.C.</p>

        <h1 class="display-4 font-weight-normal">Panel de agregar documentos.</h1>
   
      </div>

</div>











<!-- Area  de contenido de Informacion (buscar) -->
<!-- ...........................-->


 <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center ">
     
<div class="container-fluid">
    
    <div class="row">

      <div class="col"  style="background-color:#fff ">
      <h1 style=" margin-top:20px; float:left;   margin-bottom:25px;  ">Informacion</h1> 
<select style="  width : 600px;  margin-bottom:50px;  "  cols="10" class="form-control " id="control1" name="control1"> 
        <option>TEMAS</option> 
        <option>1</option>
        <option>2</option> 
        <option>3</option> 
        <option>4</option> 
    </select>
      </div>
      <div class="col-6"  style="background-color:#fff">
    
<h4 for="nombre" style=" margin-bottom:50px;  margin-top:70px; margin-left:50px;  float:left;">   Buscar:</h4>
<input placeholder="Buscar:"  style=" width : 600px; margin-bottom:50px; margin-top:70px; float:right;" type="text" class="form-control" id="buscar" name="buscar">
      </div>
      
    </div>  
    
  </div> 

</div>





<!-- Area  de contenido de la Informacion (mostrar) -->
<!-- ...........................-->












<!-- Area de Footer Contenedor  -->
<!-- ...........................-->
<div class="container-fluid" >
    <div class="row"  >
      <div class="col"  style="background-color:#262626; margin-top:-15px;">
        <h1 style=" margin-top:60px; float:center; text-align: center; color:#fff;"><img src="Imgs/Logo_proceder.JPG" class="rounded-circle">PROCEDER, A.C.</h1> 
       </h5>
      </div>
      
      
    </div>
  </div> 


<div class="container-fluid" >
    <div class="row">
    <div class="col-lg"  style="background-color:#262626">
    <div class="footer-copyright" style="background-color:#262626" >
            <p style=" color:#fff;">Diseñado y desarrollado por <img src="Imgs/Tejuino.png" class="rounded-circle"> </p>


        </div>
      </div>
    </div> 
    </div> 

</body>
</html>
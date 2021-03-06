<?php

SESSION_START();

if (empty($_SESSION['id'])){

header('location:login.php?ER=2');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Pizzaria</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />
<link rel="stylesheet" href="assets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">


<link rel="stylesheet" href="assets/style.css">

</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                 <li ><a href="cliente.php">Cliente</a></li>
                 <li ><a href="#about">Pedido</a></li>
                 <li ><a href="#partners">Nota</a></li>
		 <li ><a href="#partners">Funcionários</a></li>
                 <li ><a href="#partners">Pizza</a></li>
		 <li ><a href="#partners">Bebidas</a></li>
		 <li ><a href="#partners">Relatórios</a></li>
                 <li ><a href="#contact">Logout</a></li>
              </ul>


            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->


<!-- works -->
<div id="works"  class=" clearfix grid fadeInUp"> 
    <figure class="effect-oscar  wowload">
        <a href="cliente.php"><img src="images/clientes.png" alt="img01" align="center"/></a>
        <h2>Cliente</h2>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <a href="pedido.php"><img src="images/pedido.png" alt="img01"/></a>
            <h2>Pedido</h2>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <a href="nota.php"><img src="images/nota.png" alt="img01"/></a>
           <h2>Nota</h2>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <a href="funcionario.php"><img src="images/funcionarios.jpg" alt="img01"/></a>
            <h2>Funcionário</h2>            
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <a href="pizza.php"><img src="images/pizza.png" alt="img01"/></a>
            <h2>Pizza</h2>
    </figure>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <a href="bebida.php"><img src="images/bebida.png" alt="img01"/></a>
            <h2>Bebida</h2>    
    </figure>
     
</div>
<!-- works -->



<footer class="footer">
  <div class="container">
    <p class="text-muted">Based on Bootstrap.</p>
  </div>
</footer>




<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>



<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>

<!-- custom script -->
<script src="assets/script.js"></script>

</body>
</html>

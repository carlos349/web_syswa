<!DOCTYPE html>
<html lang="es">
<head>
<title>SYSWA</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="PONER DESCRIPCION">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
<link rel="stylesheet" href="views/css/bootstrap.css">
<link rel="shortcut icon" href="views/images/favicon.png" type="image/x-icon">
<!-- Google Fonts -->
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--magnific-popup Css-->
<link rel="stylesheet" href="views/css/fonts.css">
<!--animate Css-->
<link rel="stylesheet" href="views/css/style.css">

</head>

<body>
	<?php 
        $modulos = new Enlaces();
        $modulos -> enlacesController();
    ?>
    <!-- START PRELOADER -->
	<div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <!-- END PRELOADER -->
    <!-- START back-to-top -->	
        <!-- <button class="atf-scroll-top atf-back-to-top" data-targets="html">
            <i class="fa fa-angle-up atf-scrollup-icon"></i>
        </button> -->
	<!-- END back-to-top-->	
	



<!-- Latest jQuery -->
<!-- <script src="views/js/jquery-1.12.4.min.js"></script> -->
		<!-- Latest compiled and minified Bootstrap -->
		<!-- <script src="views/bootstrap/js/bootstrap.js"></script> -->
	<script src="views/js/core.min.js"></script>
    <script src="views/js/script.js"></script>	
</body>

</html>
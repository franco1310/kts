<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>kotoshstore</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
    <link href="css/menu3d.css" rel="stylesheet"/>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>    
    <!--<script src="https://code.jquery.com/jquery.latest.js"></script>-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu3d.js" type="text/javascript"></script>
    <script src="js/scripts.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<div class="container-fluid">
<nav class="navbar navbar-default navbar-fixed-top bg-color">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Menu</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand v2" href="#">
      	<img src="img/logo.png" class="img-responsive v">	
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ciudad <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <!--<li><a href="#">Link</a></li>-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user fa-fw"></i>Iniciar Sesi&oacute;n <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>

<div class="container">	
     <div class="row">
        <div class="col-md-3 col-padding">
	        
	        <article class="bg-white">
	        		<!-- menu 3dmega -->
	              	<div class="menu-heading">
	              		<span> <i class="fa fa-bars"></i> Categorias</span> 
	              	</div>

	              	<div class="menu3dmega vertical" id="menuMega">
	              		<ul>
				            <!-- Menu Item -->
				            <li> <a href="#a"> <i class="fa fa-male"></i> <span>Los hombres usan</span> <i class="fa fa-angle-right"></i> </a>
				              <div class="dropdown-menu"> 
				                <!-- Sub Menu -->
				                <div class="content">
				                  <div class="row">
				                    <div class="col-md-4"> <a class="menu-title" href="#a">Fashion</a>
				                      <ul>
				                        <li><a href="#a">Clothing</a></li>
				                        <li><a href="#a">Shoes</a></li>
				                        <li><a href="#a">Handbags</a></li>
				                        <li><a href="#a">Accessories</a></li>
				                        <li><a href="#a">Luggage</a></li>
				                        <li><a href="#a">Jewelry</a></li>
				                      </ul>
				                    </div>
				                    <div class="col-md-4"> <a class="menu-title" href="#a">Shirts</a>
				                      <ul>
				                        <li><a href="#a">Reguler Shirts</a></li>
				                        <li><a href="#a">Slim Shirts</a></li>
				                        <li><a href="#a">Fashion Shirts</a></li>
				                        <li><a href="#a">Black Shirts</a></li>
				                        <li><a href="#a">White Shirts</a></li>
				                        <li><a href="#a">Gray Shirts</a></li>
				                      </ul>
				                    </div>
				                    <div class="col-md-4"> <a class="menu-title" href="#a">Jeans</a>
				                      <ul>
				                        <li><a href="#a">Reguler Jeans</a></li>
				                        <li><a href="#a">Slim-fit Jeans</a></li>
				                        <li><a href="#a">Loose Jeans</a></li>
				                        <li><a href="#a">Top Jeans</a></li>
				                        <li><a href="#a">New Jeans</a></li>
				                        <li><a href="#a">Color Jeans</a></li>
				                      </ul>
				                    </div>
				                  </div>
				                  
				                </div>
				                <!-- end: Sub Menu --> 
				              </div>
				            </li>
				            <!-- end: Menu Item --> 
				            <!-- Menu Item -->
				            <li> <a href="#a"> <i class="fa fa-female"></i> <span>Las mujeres usan</span> <i class="fa fa-angle-right"></i> </a>
				              <div class="dropdown-menu"> 
				                <!-- Sub Menu -->
				                <div class="content">
				                  <div class="row">
				                    <div class="col-md-4"> <a class="menu-title" href="#a">Fashion</a>
				                      <ul>
				                        <li><a href="#a">Clothing</a></li>
				                        <li><a href="#a">Shoes</a></li>
				                        <li><a href="#a">Handbags</a></li>
				                        <li><a href="#a">Accessories</a></li>
				                        <li><a href="#a">Luggage</a></li>
				                        <li><a href="#a">Jewelry</a></li>
				                      </ul>
				                    </div>
				                    <div class="col-md-4"> <a class="menu-title" href="#a">Shirts</a>
				                      <ul>
				                        <li><a href="#a">Reguler Shirts</a></li>
				                        <li><a href="#a">Slim Shirts</a></li>
				                        <li><a href="#a">Fashion Shirts</a></li>
				                        <li><a href="#a">Black Shirts</a></li>
				                        <li><a href="#a">White Shirts</a></li>
				                        <li><a href="#a">Gray Shirts</a></li>
				                      </ul>
				                    </div>
				                    <div class="col-md-4"> <a class="menu-title" href="#a">Jeans</a>
				                      <ul>
				                        <li><a href="#a">Reguler Jeans</a></li>
				                        <li><a href="#a">Slim-fit Jeans</a></li>
				                        <li><a href="#a">Loose Jeans</a></li>
				                        <li><a href="#a">Top Jeans</a></li>
				                        <li><a href="#a">New Jeans</a></li>
				                        <li><a href="#a">Color Jeans</a></li>
				                      </ul>
				                    </div>
				                  </div>
				               
				                </div>
				                <!-- end: Sub Menu --> 
				              </div>
				            </li>
				            <!-- end: Menu Item --> 
				            <!-- Menu Item -->
				            <li> <a href="#a"> <i class="fa fa-child"></i> <span>Los Niños usan</span> <i class="fa fa-angle-right"></i> </a>
				              <div class="dropdown-menu"> 
				                <!-- Sub Menu -->
				                <div class="content">
				                  <div class="row">
				                    <div class="col-md-4"> <a class="menu-title" href="#a">Fashion</a>
				                      <ul>
				                        <li><a href="#a">Clothing</a></li>
				                        <li><a href="#a">Shoes</a></li>
				                        <li><a href="#a">Handbags</a></li>
				                        <li><a href="#a">Accessories</a></li>
				                        <li><a href="#a">Luggage</a></li>
				                        <li><a href="#a">Jewelry</a></li>
				                      </ul>
				                    </div>
				                    <div class="col-md-4"> <a class="menu-title" href="#a">Shirts</a>
				                      <ul>
				                        <li><a href="#a">Reguler Shirts</a></li>
				                        <li><a href="#a">Slim Shirts</a></li>
				                        <li><a href="#a">Fashion Shirts</a></li>
				                        <li><a href="#a">Black Shirts</a></li>
				                        <li><a href="#a">White Shirts</a></li>
				                        <li><a href="#a">Gray Shirts</a></li>
				                      </ul>
				                    </div>
				                    <div class="col-md-4"> <a class="menu-title" href="#a">Jeans</a>
				                      <ul>
				                        <li><a href="#a">Reguler Jeans</a></li>
				                        <li><a href="#a">Slim-fit Jeans</a></li>
				                        <li><a href="#a">Loose Jeans</a></li>
				                        <li><a href="#a">Top Jeans</a></li>
				                        <li><a href="#a">New Jeans</a></li>
				                        <li><a href="#a">Color Jeans</a></li>
				                      </ul>
				                    </div>
				                  </div>
				                
				                </div>
				                <!-- end: Sub Menu --> 
				              </div>
				            </li>
				            <!-- Menu Item -->
				            <li> <a href="#a"> <i class="fa fa-medium"></i> <span>Moda y estilo</span> <i class="fa fa-angle-right"></i> </a>
				              <div class="dropdown-menu"> 
				                <!-- Sub Menu -->
				                <div class="content">
				                  <div class="row">
				                    <div class="col-md-4"> <a class="menu-title" href="#a">Fashion</a>
				                      <ul>
				                        <li><a href="#a">Clothing</a></li>
				                        <li><a href="#a">Shoes</a></li>
				                        <li><a href="#a">Handbags</a></li>
				                        <li><a href="#a">Accessories</a></li>
				                        <li><a href="#a">Luggage</a></li>
				                        <li><a href="#a">Jewelry</a></li>
				                      </ul>
				                    </div>
				                    <div class="col-md-4"> <a class="menu-title" href="#a">Shirts</a>
				                      <ul>
				                        <li><a href="#a">Reguler Shirts</a></li>
				                        <li><a href="#a">Slim Shirts</a></li>
				                        <li><a href="#a">Fashion Shirts</a></li>
				                        <li><a href="#a">Black Shirts</a></li>
				                        <li><a href="#a">White Shirts</a></li>
				                        <li><a href="#a">Gray Shirts</a></li>
				                      </ul>
				                    </div>
				                    <div class="col-md-4"> <a class="menu-title" href="#a">Jeans</a>
				                      <ul>
				                        <li><a href="#a">Reguler Jeans</a></li>
				                        <li><a href="#a">Slim-fit Jeans</a></li>
				                        <li><a href="#a">Loose Jeans</a></li>
				                        <li><a href="#a">Top Jeans</a></li>
				                        <li><a href="#a">New Jeans</a></li>
				                        <li><a href="#a">Color Jeans</a></li>
				                      </ul>
				                    </div>
				                  </div>
				                
				                </div>
				                <!-- end: Sub Menu --> 
				              </div>
				            </li> 

				            
	              		</ul>
	              	</div>

	        </article>
	        <div class="clearfix"><div class="vacio"></div></div>
	        <article class="">
	        	<div class="menu3dmega vertical border-bottom" id="menuMega">
	              		<ul>
	              			<li> 
	        				<a href="#a"> <i class="fa fa-university"></i> <span>Ver tiendas</span></a> </li>
	            			<li> 
	            			<a href="#a"> <i class="fa fa-envelope"></i> <span>Suscribete</span></a> </li>
	              		</ul>
	              	</div>
	        </article>
    	
    	</div>
    	  
    	  <div class="col-md-9 col-padding"> 
    	  	<!-- Iview Slider -->
		        
		        <section id="miSlide" class="carousel slide">
	                <ol class="carousel-indicators">
	                    <li data-target="#miSlide" data-slide-to="0" class="active"></li>
	                    <li data-target="#miSlide" data-slide-to="1"></li>
	                    <li data-target="#miSlide" data-slide-to="2"></li>
	                </ol>

	                <div  class="carousel-inner slide">
	                    <div class="item active">
	                        <img src="img/slider/slide0.jpg" class="adaptar">
	                    </div>
	                    <div  class="item">
	                        <img src="img/slider/slide01.jpg" class="adaptar">
	                    </div>
	                    <div  class="item">
	                        <img src="img/slider/slide1.jpg" class="adaptar">
	                    </div>
	                </div>
	                <a href="#miSlide" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	                <a href="#miSlide" class="right carousel-control" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            	</section>
		        
		        
		        <div class="f-space5"></div>

		        <div class="box-heading"><span><h4 class="text-black">Los m&aacute;s recientes...</h4></span></div>
		        <div class="">
		        	<div class="col-md-4  col-p">
		        		
			        		<div class="thumbnail large">
			        			<span class="etiqueta label label-danger bg-etiqueta">30%</span>
						     	<a href="oferta.php">
				      				<img src="img/products/product1.jpg" alt="...">
				    			</a>
				    			<div class="caption">
				    				<div class="titulo">
				    				<h4 class="top text-center">una docena de + un regalo Casaca de Outdoor Terrex Swift...</h4>
				    				</div>
				    				<!--<p>descripcion</p>-->
				    				<p class="inline">
				    				    <spam class="old">S/.120.00</spam><br>
				    				    <spam class="new">S/.100.00</spam>          					
				    				</p>
				    				<p class="inline btn-right">
				    					<a href="oferta.php" class="btn  btn-red" role="button"><i class="fa fa-tags fa-fw"></i><span>Cupón</span></a>
				    				</p>
				    			</div><!-- fin caption -->
			    			</div><!-- fin thumbnail-->
		    			
	    			</div><!-- fin col -->
	    			<div class="col-md-4  col-p">

		        		<div class="thumbnail">
		        			<span class="etiqueta label label-danger">30%</span>
					     	<a href="#">
			      				<img src="img/products/product1.jpg" alt="...">
			    			</a>
			    			<div class="caption">
			    				<div class="titulo">
			    				<h4 class="top text-center">Casaca de Outdoor Terrex Swift</h4>
			    				</div>
			    				<!--<p>descripcion</p>-->
			    				<p class="inline">
			    				    <spam class="old">S/.120.00</spam><br>
			    				    <spam class="new">S/.100.00</spam>          					
			    				</p>
			    				<p class="inline btn-right">
			    					<a href="#" class="btn  btn-red" role="button"><i class="fa fa-tags fa-fw"></i><span>Cupón</span></a>
			    				</p>
			    			</div><!-- fin caption -->
		    			</div><!-- fin thumbnail-->
	    			</div><!-- fin col -->
	    			<div class="col-md-4 col-p">

		        		<div class="thumbnail">
		        			<span class="etiqueta label label-danger">30%</span>
					     	<a href="#">
			      				<img src="img/products/product1.jpg" alt="...">
			    			</a>
			    			<div class="caption">
			    				<div class="titulo">
			    				<h4 class="top text-center">Casaca de Outdoor Terrex Swift</h4>
			    				</div>
			    				<!--<p>descripcion</p>-->
			    				<p class="inline">
			    				    <spam class="old">S/.120.00</spam><br>
			    				    <spam class="new">S/.100.00</spam>          					
			    				</p>
			    				<p class="inline btn-right">
			    					<a href="#" class="btn  btn-red" role="button"><i class="fa fa-tags fa-fw"></i><span>Cupón</span></a>
			    				</p>
			    			</div><!-- fin caption -->
		    			</div><!-- fin thumbnail-->
	    			</div><!-- fin col -->
	    			<div class="col-md-4 col-p">

		        		<div class="thumbnail">
		        			<span class="etiqueta label label-danger">30%</span>
					     	<a href="#">
			      				<img src="img/products/product1.jpg" alt="...">
			    			</a>
			    			<div class="caption">
			    				<div class="titulo">
			    				<h4 class="top text-center">Casaca de Outdoor Terrex Swift</h4>
			    				</div>
			    				<!--<p>descripcion</p>-->
			    				<p class="inline">
			    				    <spam class="old">S/.120.00</spam><br>
			    				    <spam class="new">S/.100.00</spam>          					
			    				</p>
			    				<p class="inline btn-right">
			    					<a href="#" class="btn  btn-red" role="button"><i class="fa fa-tags fa-fw"></i><span>Cupón</span></a>
			    				</p>
			    			</div><!-- fin caption -->
		    			</div><!-- fin thumbnail-->
	    			</div><!-- fin col -->
	    			<div class="col-md-4 col-p">
		        		<div class="thumbnail">
		        			<span class="etiqueta label label-danger">30%</span>
					     	<a href="#">
			      				<img src="img/products/product1.jpg" alt="...">
			    			</a>
			    			<div class="caption">
			    				<div class="titulo">
			    				<h4 class="top text-center">Casaca de Outdoor Terrex Swift Soft Shell</h4>
			    				</div>
			    				<!--<p>descripcion</p>-->
			    				<p class="inline">
			    				    <i class="fa fa-star text-red"></i><span class="text-red">Especial</span><br>
			    				</p>
			    				<p class="inline btn-right">
			    					<a href="#" class="btn  btn-red" role="button"><i class="fa fa-tags fa-fw"></i><span>Cupón</span></a>
			    				</p>
			    			</div><!-- fin caption -->
		    			</div><!-- fin thumbnail-->
	    			</div><!-- fin col -->
	    			<div class="col-md-4 col-p">
		        		<div class="thumbnail">
		        			<span class="etiqueta label label-danger">30%</span>
					     	<a href="#">
			      				<img src="img/products/product1.jpg" alt="...">
			    			</a>
			    			<div class="caption">
			    				<div class="titulo">
			    				<h4 class="top text-center">Polo con cuello</h4>
			    				</div>
			    				<!--<p>descripcion</p>-->
			    				<p class="inline">
			    				    <spam class="old">S/.120.00</spam><br>
			    				    <spam class="new">S/.100.00</spam>          						
			    				</p>
			    				<p class="inline btn-right">
			    					<a href="#" class="btn  btn-red" role="button"><i class="fa fa-tags fa-fw"></i><span>Cupón</span></a>
			    				</p>
			    			</div><!-- fin caption -->
		    			</div><!-- fin thumbnail-->
	    			</div><!-- fin col -->
	    			<div class="col-md-4 col-p">
		        		<div class="thumbnail">
		        			<span class="etiqueta label label-danger">30%</span>
					     	<a href="#">
			      				<img src="img/products/product1.jpg" alt="...">
			    			</a>
			    			<div class="caption">
			    				<div class="titulo">
			    				<h4 class="top text-center">Polo con cuello</h4>
			    				</div>
			    				<!--<p>descripcion</p>-->
			    				<p class="inline">
			    				    <spam class="old">S/.120.00</spam><br>
			    				    <spam class="new">S/.100.00</spam>          						
			    				</p>
			    				<p class="inline btn-right">
			    					<a href="#" class="btn  btn-red" role="button"><i class="fa fa-tags fa-fw"></i><span>Cupón</span></a>
			    				</p>
			    			</div><!-- fin caption -->
		    			</div><!-- fin thumbnail-->
	    			</div><!-- fin col -->
	    			<div class="col-md-4 col-p">
		        		<div class="thumbnail">
		        			<span class="etiqueta label label-danger">30%</span>
					     	<a href="#">
			      				<img src="img/products/product1.jpg" alt="...">
			    			</a>
			    			<div class="caption">
			    				<div class="titulo">
			    				<h4 class="top text-center">Polo con cuello</h4>
			    				</div>
			    				<!--<p>descripcion</p>-->
			    				<p class="inline">
			    				    <spam class="old">S/.120.00</spam><br>
			    				    <spam class="new">S/.100.00</spam>          						
			    				</p>
			    				<p class="inline btn-right">
			    					<a href="#" class="btn  btn-red" role="button"><i class="fa fa-tags fa-fw"></i><span>Cupón</span></a>
			    				</p>
			    			</div><!-- fin caption -->
		    			</div><!-- fin thumbnail-->
	    			</div><!-- fin col -->
	    			<div class="col-md-4 col-p">
		        		<div class="thumbnail">
		        			<span class="etiqueta label label-danger">30%</span>
					     	<a href="#">
			      				<img src="img/products/product1.jpg" alt="...">
			    			</a>
			    			<div class="caption">
			    				<div class="titulo">
			    				<h4 class="top text-center">Polo con cuello</h4>
			    				</div>
			    				<!--<p>descripcion</p>-->
			    				<p class="inline">
			    				    <spam class="old">S/.120.00</spam><br>
			    				    <spam class="new">S/.100.00</spam>          						
			    				</p>
			    				<p class="inline btn-right">
			    					<a href="#" class="btn  btn-red" role="button"><i class="fa fa-tags fa-fw"></i><span>Cupón</span></a>
			    				</p>
			    			</div><!-- fin caption -->
		    			</div><!-- fin thumbnail-->
	    			</div><!-- fin col -->

    	  		</div><!-- fin row-->
     </div>
      
     
     
<div class="clearfix"></div>
<div class="container col-padding">
 <footer class="foot">

	    	<div class="col-md-3">
	    		<h4 class="text-white col-padding">FLASHTOP</h4>
	    		<p class="text-white text-justify">
	    			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	    		</p>
	    	</div>
	    	<div class="col-md-3">
	    		<h4 class="text-white col-padding">INFORMACION</h4>
	    		<ul class="text-white">
	    			<li>Acerca</li>
	    			<li>Misi&oacute;n y Visi&oacute;</li>
	    			<li>Informes</li>
	    			<li>etc etc</li>
	    		</ul>
	    	</div>
	    	<div class="col-md-3">
	    		<h4 class="text-white col-padding">CUENTA</h4>
	    		<ul class="text-white">
	    			<li>Mi cuenta</li>
	    			<li>Historial</li>
	    			<li>etc etc</li>
	    			<li>etc etc</li>
	    		</ul>
	    	</div>
	    	<div class="col-md-3 getintouch">
	    		<h4 class="text-white col-padding">CONTACTENOS</h4>
	    		<ul class="text-white">
	    			<li>
	    				<div class="icon"><i class="fa fa-map-marker fa-fw"></i></div>
            			<div class="c-info"> <span>jiron Uni&oacute;n 144<br>
              			<a href="#a">&Uacute;biquenos en google maps</a></span></div>
	    			</li>
	    			<li>
	    				<div class="icon"><i class="fa fa-envelope-o fa-fw"></i></div>
            			<div class="c-info"> <span>Email:<br>
              			<a href="#a">suporte@kotoshstore.com</a></span></div>
	    			</li>
	    			<li>
	    				<div class="icon"><i class="fa fa-phone fa-fw"></i></div>
            			<div class="c-info"> <span>Informes:<br>
              			<a href="#a">+1 (888) 888 8888</a></span></div>
	    			</li>
	    			<li>
	    				<div class="icon"> <i class="fa fa-skype fa-fw"></i></div>
            			<div class="c-info"> <span>Habla con nosotros:<br>
              			<a href="#a">skypeid</a></span></div>
	    			</li>
	    		</ul>
	    		<div class="social-icons">
		          <ul>
		            <li class="icon google-plus"><a href="#a"><i class="fa fa-google-plus fa-fw"></i></a></li>
		            <li class="icon linkedin"><a href="#a"><i class="fa fa-linkedin fa-fw"></i></a></li>
		            <li class="icon twitter"><a href="#a"><i class="fa fa-twitter fa-fw"></i></a></li>
		            <li class="icon facebook"><a href="#a"><i class="fa fa-facebook fa-fw"></i></a></li>
		          </ul>
        		</div>
	    	</div>
	    	<div class="clearfix"></div>
	    	 <div class="copyrights">
			    <div class="container">
			      <div class="row">
			        <div class="col-xs-12 col-sm-8 col-lg-8 text-white"> 
			        	<span class="copytxt text-white">&copy; Copyright 2013 by <a href="#a">Flatro</a> -  All rights reserved</span> 
			        	<span class="btmlinks"><a href="#a">Return Policy</a> | <a href="#a">Privacy Policy</a> | <a href="#a">Terms of Use</a></span> 
			        </div>
			        
			      </div>
			    </div>
			  </div>
	
	 </footer>   
	 </div>
</div> <!-- fin container-->
<script>

(function($) {
  "use strict";
 $('#menuMega').menu3d();
                $('#iview').iView({
                    pauseTime: 10000,
                    pauseOnHover: true,
                    directionNavHoverOpacity: 0.6,
                    timer: "360Bar",
                    timerBg: '#2da5da',
                    timerColor: '#fff',
                    timerOpacity: 0.9,
                    timerDiameter: 20,
                    timerPadding: 1,
					touchNav: true,
                    timerStroke: 2,
                    timerBarStrokeColor: '#fff'
                });
				
                $('.quickbox').carousel({
                    interval: 10000
                });
               $('#monthly-deals').carousel({
                    interval: 3000
                });
                $('#productc2').carousel({
                    interval: 4000
                });
                $('#tweets').carousel({
                    interval: 5000
                });
})(jQuery);


          
        </script>
  </body>
</html>

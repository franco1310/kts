<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ofertas</title>

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
    <script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();
    });
</script> 
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
    	  	<section id="producto-detalle">
	    	  	<article class="producto-img pull-left">
	    	  		<img src="img/products/product1.jpg" class="">
	    	  	</article>

	    	  	<article class="producto-detalle pull-right">
	    	  		<div class="product-details">
	    	  			<img src="img/products/product1.jpg" class="img-logo">
	    	  			<h5 class="name-empresa">
		    	  			<strong>Nombre de la empresa</strong> <br>
		    	  			<small>Nombre del local</small>
	    	  			</h5>
	    	  			<h4>Pantal&oacute;n de Vestir Foster modelo cl&aacute;sico 20% de descuento</h4>
	    	  			<h2 class="text-center text-red"><strong>S/. 80.00</strong></h2>
	    	  		
	    	  		
	    	  			<p>Precio Regular</p>
                        <p>Descuento con Cup&oacute;n</p>
                        <p>Ahorro Total</p>
                        <p class="p1" style="font-size:15px">S/. 100.00</p>
                        <p class="p2" style="font-size:15px">20%</p>
                        <p class="p3" style="font-size:15px">S/. 20.00</p>
                        
                        <a href="#" class="btn btn-red center-block btn-cupon"><i class="fa fa-tags fa-fw"></i>Quiero mi Cup&oacute;n</a>

                        <div class="aviso center-block text-center f-space20">
                        	<h4>
                        	<small class="clearfix text-black">Cup&oacute;n disponible hasta</small>
                        	<i class="fa fa-clock-o fa-fw"></i>20 de Marzo del 2015 <br>
                        	<small class="text-black">&oacute; hasta agotar stock</small></h4>
                        </div>
                        <div class="comparte f-space10 clearfix">
                           <div class="iconos-ks pull-right">
	                        <b>Comparte </b>
	                        <i class="fa fa-facebook-square"></i>
	                        <i class="fa fa-twitter-square"></i>
	                        <i class="fa fa-google-plus-square"></i>
	                        <i class="fa fa-envelope"></i>
	                       </div>
                        </div>
	    	  		</div>
	    	  	</article>
    	  	</section>
    	<div class="f-space5"></div>
     	<div class="col-md-12 bg-white col-padding">
     		<div class="col-padding">
     			<div id="content">
				    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
				        <li class="active"><a href="#red" data-toggle="tab">Red</a></li>
				        <li><a href="#orange" data-toggle="tab">Orange</a></li>
				        <li><a href="#yellow" data-toggle="tab">Yellow</a></li>
				        <li><a href="#green" data-toggle="tab">Green</a></li>
				        <li><a href="#blue" data-toggle="tab">Blue</a></li>
				    </ul>
				    <div id="my-tab-content" class="tab-content">
				        <div class="tab-pane active" id="red">
				            <h1>Red</h1>
				            <p>red red red red red red</p>
				        </div>
				        <div class="tab-pane" id="orange">
				            <h1>Orange</h1>
				            <p>orange orange orange orange orange</p>
				        </div>
				        <div class="tab-pane" id="yellow">
				            <h1>Yellow</h1>
				            <p>yellow yellow yellow yellow yellow</p>
				        </div>
				        <div class="tab-pane" id="green">
				            <h1>Green</h1>
				            <p>green green green green green</p>
				        </div>
				        <div class="tab-pane" id="blue">
				            <h1>Blue</h1>
				            <p>blue blue blue blue blue</p>
				        </div>
				    </div>
				</div><!-- fin content -->
     		</div>
     	</div><!-- fin col-md-12-->

     	<div class="col-md-12 col-p-ks">
     		<div class="">
     			<div class="sub-title-ks">
		        	Mas ofertas de esta tienda
		        </div>

		        <div class="col-md-4  col-p">		        		
			        		<div class="thumbnail">
			        			<span class="label etiqueta">-30%</span>
						     	<a href="oferta.php">
				      				<img src="img/products/product1.jpg" alt="..." class="img-responsive">
				    			</a>
				    			<div class="caption-ks">
				    				<div class="row titulo">
				    					<h4 class="text-center">Una docena de + un regalo Casaca de Outdoor Terrex Swift...</h4>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-6">
					    					<div style="line-height: 1">
					    				    	<spam class="old">S/.120.00</spam><br/>
					    				    	<spam class="new">S/.100.00</spam>
						    				</div>
										</div>
										<div class="col-md-6">
						    				<div class="pull-right">
						    					<a href="oferta.php" class="btn btn-red" role="button"><i class="fa fa-tags fa-fw"></i> <span>Cupón</span></a>
						    				</div>
					    				</div>
				    				</div>				    				

				    			</div><!-- fin caption -->
			    			</div><!-- fin thumbnail-->
		    		</div><!-- fin col -->
		    		<div class="col-md-4  col-p">		        		
			        		<div class="thumbnail">
			        			<span class="label etiqueta">-30%</span>
						     	<a href="oferta.php">
				      				<img src="img/products/product1.jpg" alt="..." class="img-responsive">
				    			</a>
				    			<div class="caption-ks">
				    				<div class="row titulo">
				    					<h4 class="text-center">Una docena de + un regalo Casaca de Outdoor Terrex Swift...</h4>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-6">
					    					<div style="line-height: 1">
					    				    	<spam class="old">S/.120.00</spam><br/>
					    				    	<spam class="new">S/.100.00</spam>
						    				</div>
										</div>
										<div class="col-md-6">
						    				<div class="pull-right">
						    					<a href="oferta.php" class="btn btn-red" role="button"><i class="fa fa-tags fa-fw"></i> <span>Cupón</span></a>
						    				</div>
					    				</div>
				    				</div>				    				

				    			</div><!-- fin caption -->
			    			</div><!-- fin thumbnail-->
		    		</div><!-- fin col -->
		    		<div class="col-md-4  col-p">		        		
			        		<div class="thumbnail">
			        			<span class="label etiqueta">-30%</span>
						     	<a href="oferta.php">
				      				<img src="img/products/product1.jpg" alt="..." class="img-responsive">
				    			</a>
				    			<div class="caption-ks">
				    				<div class="row titulo">
				    					<h4 class="text-center">Una docena de + un regalo Casaca de Outdoor Terrex Swift...</h4>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-6">
					    					<div style="line-height: 1">
					    				    	<spam class="old">S/.120.00</spam><br/>
					    				    	<spam class="new">S/.100.00</spam>
						    				</div>
										</div>
										<div class="col-md-6">
						    				<div class="pull-right">
						    					<a href="oferta.php" class="btn btn-red" role="button"><i class="fa fa-tags fa-fw"></i> <span>Cupón</span></a>
						    				</div>
					    				</div>
				    				</div>				    				

				    			</div><!-- fin caption -->
			    			</div><!-- fin thumbnail-->
		    		</div><!-- fin col -->



     		</div><!-- fin container-->
     	</div><!-- fin colmd-12-->

     	</div>
      </div> <!-- fin container-->
     </div>
     
<div class="clearfix"></div>
<div class="container-fluid container-foot">
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

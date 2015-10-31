 <!DOCTYPE html>
  <html>
    <head>
      <link href="css/materialIcons.css" rel="stylesheet">
	 <!-- <link type="text/css" rel="stylesheet" href="css/material.css"/>  -->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/> 
	  <link type="text/css" href="css/graph.css" rel="stylesheet"> 
      <!--<link type="text/css" href="css/icons.css" rel="stylesheet"> -->
	  <!--<link type="text/css" href="css/login.css" rel="stylesheet">-->
	  <link type="text/css" href="css/materialdesignicons.min.css" rel="stylesheet">
      <link type="text/css" href="css/styles.css" rel="stylesheet">
	  <link type="text/css" href="css/media.css" rel="stylesheet">
	  
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title>Proyecto Geo</title>
    </head>

    <body>
	
	
	<header>	
		<!--facebook plugin initialization-->
		<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>

	 <!-- Modal Structure -->
		
		<div id="modalLogin" class="modal modal-fixed-footer contact-form">
			<div class="modal-content">
				<div class="row">
					<!-- start-form -->
					<form class="col s12" action="#" method="post" name="login_form">
						<div class="row row-login-tit">
							<div class="input-field col s12">
								<h4 class="center">INGRESA A PROYECTO GEO</h4>
                                 <div class="divider"></div>
							</div>                        
							<div class="input-field col s6 costado-0">
								<h6 class="center flow-text">USUARIOS REGISTRADOS</h6>
                            </div>
                            <div class="input-field col s6">
                                    <h6 class="center flow-text">ENTRAR CON</h6>
                            </div>
                        </div>
                        <div class="row">  
                            <div class="input-field col s6 col-top-0">
                                <div class="row"> 
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">email</i>
                                        <input id="emaillogmodal" type="email" class="validate">
                                        <label for="emaillogmodal">Email</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">https</i>
                                        <input id="passlogmodal" type="password" class="validate">
                                        <label for="passlogmodal" data-error="mal" data-success="ok">Password</label>
                                    </div>
                                    <div class="input-field col s12 " id="recordar-pad">                            	
                                        <input type="checkbox" id="recordar-pass"/>
                                        <label for="recordar-pass">
                                            <input type="checkbox" name="checkbox" checked><i></i>Recordar contraseña</label>
                                    </div>
                                    <br><br><br><br>
                                   	
                                    <div class="input-field col s12">                                
                                        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-large btn100">Ingresar</a>
                                    </div>
                                     <div class="input-field col s12" id="olvidaste">
                                        <a href="#" class="waves-effect waves-light btn btn-flat btn-salmon">olvidaste tu contraseña?</a>
                                    </div>
							     </div>
                            </div>
                            <div class="input-field col s6">
                                 <div class="row"> 
							         <div class="input-field col s12">                                                                         <a href="#fb" class="waves-effect waves-light btn-large btn-face"><i class="mdi mdi-facebook"></i>Facebook </a>                                
                                        <a href="#fb" class="waves-effect waves-light btn-large btn-twt"><i class="mdi mdi-twitter"></i>Twitter </a>
                                        <a href="#fb" class="waves-effect waves-light btn-large btn-gp"><i class="mdi mdi-google-plus"></i>Google+ </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">                             
                            <div class="input-field col s12">
                                <div class="divider"></div>
                                    <h6 class="flow-text center">Todavia no estas registrado?</h6>
                            </div>
                            <div class="input-field col s12 center">
                                
                                    <a href="#modal-register" class="waves-effect waves-light btn modal-trigger">REGISTRATE</a>
                               
                            </div>
							
						</div>
					</form>
				</div>
			</div>
		</div>
	 
	 
	 
	 
	 
		<!-- Modal Structure -->
	 
		  <div id="modal-register" class="modal modal bottom-sheet">
			<div class="modal-content">
			   <div class="row">
				<form class="col s12">
				  <div class="row">
					<div class="input-field col s12">                                
                        <h6 class="flow-text center">FORMULARIO DE REGISTRACION</h6>
						<div class="divider"></div>
                    </div>
					<div class="input-field col s6">
					  <i class="material-icons prefix">account_circle</i>
					  <input id="apellido" type="text" class="validate">
					  <label for="apellido">Apellido</label>
					</div>
					<div class="input-field col s6">
					  <i class="material-icons prefix">account_circle</i>
					  <input id="nombre" type="text" class="validate">
					  <label for="nombre">Nombre</label>
					</div>
					<div class="input-field col s6">
					  <i class="material-icons prefix">phone</i>
					  <input id="telefono" type="tel" class="validate">
					  <label for="telefono">Telefono</label>
					</div>
					<div class="input-field col s6">
					  <i class="material-icons prefix">email</i>
					  <input id="emailmodal" type="email" class="validate">
					  <label for="emailmodal" data-error="mal" data-success="ok">Email</label>
					</div>
					<div class="input-field col s12">
						  <i class="material-icons prefix">today</i>					
						  <input type="date" class="datepicker" id="nacimiento">	
						  <label for="nacimiento">Fecha de Nacimiento</label>						  
					</div>
					
					<div class="input-field col s12">						
						  <input type="checkbox" id="recibir" />
						  <label for="recibir">Deseo recibir las ultimas noticias por mail</label>						
					</div>
					
					
				  </div>
				  
				</form>
			  </div>
			</div>
			<div class="modal-footer">
			  <a href="#!" class=" modal-action modal-close waves-effect waves-green btn">Confirmar</a>
			</div>
		  </div>
	 

	 
	<div class="fixed-action-btn hide-on-med-and-up" style="bottom: 24px; right: 24px;">
		<a class="btn-floating btn-large red">
		  <i class="large material-icons">mode_edit</i>
		</a>
		<ul>		  
		  <li><a class="btn-floating blue"><i class="material-icons">forum</i></a></li>
		  <li><a class="btn-floating yellow darken-1"><i class="material-icons">email</i></a></li>
		  <!-- Modal Trigger -->										   
		  <li><a class="btn-floating green modal-trigger" href="#modalLogin"><i class="material-icons">account_box</i></a></li>
		</ul>
	</div>
  
	<!--nav -->
    <div class="navbar-fixed">
	<nav id="nav-ppal">
		<div class="container-nav">
			
			<div class="nav-wrapper">
			
                <a href="#!" class="brand-logo brand-logo-lat hide-on-med-and-up"><img id ="img-logoo1" src="img/logoo1.png" alt="logo"></a>
				
				

				<a href="#" data-activates="nav-mobile" class="button-collapse"><i id="mnu-collapse" class="material-icons">menu</i></a>
				<ul class="left left-nav hide-on-small-only">			
				
				<li id="mnu-home" style="margin-left:15px;"><a class="scroll" href="#novedades">Novedades</a></li>			
				<li id="mnu-especies"><a class="scroll" href="#especies">Especies</a></li>
				<li id="mnu-recursos"><a class="scroll" href="#recursos">Recursos Naturales</a></li>
				<li id="mnu-medioambiente"><a class="scroll" href="#medioambiente">Medio Ambiente</a></li>
				<li id="mnu-planeta"><a class="scroll" href="#planeta">Planeta</a></li>
				<li id="mnu-multimedia"><a class="scroll" href="#multimedia">Multimedia</a></li>
				<li id="mnu-contacto2" class="scroll"><a href="contacto.html"><i class="material-icons">email</i></a></li>
				
                </ul>
                <ul class="left left-nav hide-on-small-only">
                    <li>
						<form>
							<div class="input-field" id="input-field-nav">
							  <input id="search-ppal" type="search" required>
							  <label for="search-ppal"><i class="left material-icons">search</i></label>
							  <i class="material-icons">close</i>
							</div>
						</form>
					</li>
					
					
					
					
                    <!-- Modal Trigger -->						
				    <li id="row-login"><a class="right waves-effect waves-light btn-flat modal-trigger" href="#modalLogin"><i class="material-icons left">account_box</i></a>
                        </li>
					
						  
						   

  
						  
						  
						  
                    <!--
                    <li class="row-login">
			<a class="right waves-effect waves-light btn-flat"><i class="material-icons left">create</i>Crear Cuenta</a></li> -->
				 <!-- 
					<li><a class="dropdown-button" id="ddwn-btn" data-beloworigin="true" alignment= "right" href="#!" data-activates="dropdown1">Mas<i class="material-icons right">arrow_drop_down</i></a></li>
				-->
				</ul>
			  
				<ul id="nav-mobile" class="side-nav" style="width: 240px;">
					<li class="logo"><a id="logo-container" href="index.html" class="brand-logo">
						<object id="front-page-logo" type="image/png" data="img/minilogo.png">minilogo</object></a></li>
					<li class="search">
					  <div class="search-wrapper card">
						<input id="search"><i class="material-icons">search</i>
						<div class="search-results"></div>
					  </div>
					</li>					
					<li class="no-padding">
					  <ul class="collapsible collapsible-accordion">
						<li class="bold"><a class="collapsible-header  waves-effect waves-teal">Novedades</a>
						  <div class="collapsible-body" style="">
							 <ul>
                              <li><a class="scroll" href="#novedades">Todas</a></li>
							  <li><a href="noticias.html">Noticias</a></li>
							  <li><a href="viejos.html">Viejos son los trapos</a></li>	
                              <li><a href="lecturas.html">Lecturas</a></li>	
                              </ul>
						  </div>
						</li>                    
						<li class="divider"></li>
						<li class="bold"><a class="collapsible-header  waves-effect waves-teal">Especies</a>
						  <div class="collapsible-body" style="">
							<ul>
                              <li><a class="scroll" href="#especies">Todas</a></li>
							  <li><a  href="exoticas.html">Exoticas</a></li>
							  <li><a  href="maltrato.html">Maltrato de Animales</a></li>
							  <li><a  href="migato.html">Mi Gato</a></li>
							  <li><a  href="miperro.html">Mi Perro</a></li>
							  <li><a  href="insectos.html">Insectos</a></li>
							  <li><a  href="especiespro.html">Especies Protegidas</a></li>
							  <li><a  href="caballos.html">Caballos</a></li>
							  <li><a  href="aves.html">Aves</a></li>
							  <li><a  href="zoovirtual.html">Zoo Virtual</a></li>
							  <li><a  href="curiosidadesespecies.html">Curiosidades</a></li>
                            </ul>
						  </div>
						</li>
						<li class="bold"><a class="collapsible-header  waves-effect waves-teal">Recursos Naturales</a>
						  <div class="collapsible-body" style="">
							<ul>
                              <li><a class="scroll" href="#recursos">Todos</a></li>
							  <li><a href="energia.html">Energia</a></li>
							  <li><a href="agua.html">Agua</a></li>
							  <li><a href="biotenologia.html">Biotenología</a></li>
							  <li><a href="gas.html">gas</a></li>
							  <li><a href="plantas.html">Plantas Medicinales</a></li>
							  <li><a href="bosques.html">Bosques</a></li>						
                            </ul>
						  </div>
						</li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Medio Ambiente</a>
						  <div class="collapsible-body" style="">
							<ul>
                              <li><a class="scroll" href="#medioambiente">Todos</a></li>
							  <li><a href="reciclado.html">Reciclado</a></li>
							  <li><a href="cambio.html">Cambio Climático</a></li>
							  <li><a class="scroll" href="#Ecologia">Ecología</a></li>
							  <li><a href="areas.html">Areas Protegidas</a></li>
							  <li><a href="ecoturismo.html">Eco Turismo</a></li>
							  <li><a href="botanico.html">Botánico</a></li>
                              <li><a href="baterias.html">Baterías y Pilas</a></li>
                            </ul>
						  </div>
						</li>
                         <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Planeta</a>
						  <div class="collapsible-body" style="">
							<ul>
                              <li><a class="scroll" href="planeta">Todo</a></li>
							  <li><a href="paises.html">Paises</a></li>
							  <li><a href="planetarios.html">Planetarios</a></li>
							  <li><a href="efemerides.html">Efemerides y Personajes</a></li>
							  <li><a href="elespacio.html">El Espacio</a></li>
							  <li><a href="curiosidadesplaneta.html">Curiosidades</a></li>				
                            </ul>
						  </div>
						</li>
                         <li class="divider"></li>
						 <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Multimedia</a>
						  <div class="collapsible-body" style="">
							<ul>
                              <li><a class="scroll" href="#multimedia">Todo</a></li>
							  <li><a href="fotos.html">Fotos</a></li>
							  <li><a href="videos.html">Videos</a></li>						 
                              </ul>
						  </div>
						</li>
                        
                          
                          
					  </ul>
					</li>					
					<li class="bold"><a href="contacto.html" class="waves-effect waves-teal">Contacto</a></li>
					
				</ul>
			</div>
		</div>
	</nav>
        </div>
        
       
		<div class="container container-tit hide-on-small-only">
			<div class="row">
                <div class="col s12 m6">
					<a href="#!" class="brand-logo hide-on-small-only"><img src="img/logo1_ori.png" alt="logo"></a>
				</div>
				<div class="col m6">
					<a href="#!" class="brand-logo hide-on-small-only"><img src="img/logo2_ori.png" alt="logo"></a>
				</div>
			</div>
		</div>
        
        
        </header>
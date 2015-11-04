 <!DOCTYPE html>
  <html>
    <head>
      <link href="css/materialIcons.css" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/> 
	  <link type="text/css" href="css/graph.css" rel="stylesheet"> 
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
		<!--	
		<div id="btn-login-nav" class="fixed-action-btn">
			<a class="btn-floating btn orange darken-4 modal-trigger" href="#modalLogin">
			  <i class="material-icons">account_circle</i>
			</a>
		
		</div>
		-->
	<!--nav -->
    <div class="navbar-fixed">
	
	<nav id="nav-ppal">
		
			
			<div class="nav-wrapper">
			
                <a href="index.php#" class="brand-logo brand-logo-lat hide-on-med-and-up"><img id ="img-logoo1" src="img/logoo1.png" alt="logo"></a>
				
				

				<a data-activates="nav-mobile" class="button-collapse"><i id="mnu-collapse" class="material-icons">menu</i></a>
				
				<ul class="left left-nav hide-on-small-only">			
				
					<li id="mnu-home" style="margin-left:15px;"><a class="scroll" href="index.php#novedades">Novedades</a></li>			
					<li id="mnu-especies"><a class="scroll" href="index.php#especies">Especies</a></li>
					<li id="mnu-recursos"><a class="scroll" href="index.php#recursos">Recursos Naturales</a></li>
					<li id="mnu-medioambiente"><a class="scroll" href="index.php#medioambiente">Medio Ambiente</a></li>
					<li id="mnu-planeta"><a class="scroll" href="index.php#planeta">Planeta</a></li>
					<li id="mnu-multimedia"><a class="scroll" href="index.php#multimedia">Multimedia</a></li>
					<li id="mnu-contacto" class="scroll"><a class="modal-trigger" href="#modal-contact"><i class="material-icons">email</i></a></li>
					<li>
						<form>
							<div class="input-field" id="input-field-nav">
							  <input id="search-ppal" type="search" required>
							  <label for="search-ppal"><i class="left material-icons">search</i></label>
							  <i class="material-icons">close</i>
							</div>
						</form>
					</li>
					<!-- <li id="mnu-login" class="scroll" style="padding-left:20px;">
						<a class="btn-floating btn grey darken-3 modal-trigger" href="#modalLogin">
							<i class="material-icons">account_box</i>
						</a>
					</li> -->
				</ul>
				<a id="btn-login-nav" class="right btn-floating btn orange darken-4 modal-trigger" href="#modalLogin">
							<i class="material-icons">account_box</i>
						</a>
			  
			  
				<!-- **** SIDE-NAV -->
				<ul id="nav-mobile" class="side-nav" style="width: 240px;">
					<li class="logo"><a id="logo-container" href="index.php" class="brand-logo">
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
                              <li><a class="scroll" href="index.php#novedades">Todas</a></li>
							  <li><a href="noticias.php">Noticias</a></li>
							  <li><a href="viejos.php">Viejos son los trapos</a></li>	
                              <li><a href="lecturas.php">Lecturas</a></li>	
                              </ul>
						  </div>
						</li>                    
						<li class="divider"></li>
						<li class="bold"><a class="collapsible-header  waves-effect waves-teal">Especies</a>
						  <div class="collapsible-body" style="">
							<ul>
                              <li><a class="scroll" href="index.php#especies">Todas</a></li>
							  <li><a  href="exoticas.php">Exoticas</a></li>
							  <li><a  href="maltrato.php">Maltrato de Animales</a></li>
							  <li><a  href="migato.php">Mi Gato</a></li>
							  <li><a  href="miperro.php">Mi Perro</a></li>
							  <li><a  href="insectos.php">Insectos</a></li>
							  <li><a  href="especiespro.php">Especies Protegidas</a></li>
							  <li><a  href="caballos.php">Caballos</a></li>
							  <li><a  href="aves.php">Aves</a></li>
							  <li><a  href="zoovirtual.php">Zoo Virtual</a></li>
							  <li><a  href="curiosidadesespecies.php">Curiosidades</a></li>
                            </ul>
						  </div>
						</li>
						<li class="bold"><a class="collapsible-header  waves-effect waves-teal">Recursos Naturales</a>
						  <div class="collapsible-body" style="">
							<ul>
                              <li><a class="scroll" href="index.php#recursos">Todos</a></li>
							  <li><a href="energia.php">Energia</a></li>
							  <li><a href="agua.php">Agua</a></li>
							  <li><a href="biotenologia.php">Biotenología</a></li>
							  <li><a href="gas.php">gas</a></li>
							  <li><a href="plantas.php">Plantas Medicinales</a></li>
							  <li><a href="bosques.php">Bosques</a></li>						
                            </ul>
						  </div>
						</li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Medio Ambiente</a>
						  <div class="collapsible-body" style="">
							<ul>
                              <li><a class="scroll" href="index.php#medioambiente">Todos</a></li>
							  <li><a href="reciclado.php">Reciclado</a></li>
							  <li><a href="cambio.php">Cambio Climático</a></li>
							  <li><a href="ecologia.php">Ecología</a></li>
							  <li><a href="areas.php">Areas Protegidas</a></li>
							  <li><a href="ecoturismo.php">Eco Turismo</a></li>
							  <li><a href="botanico.php">Botánico</a></li>
                              <li><a href="baterias.php">Baterías y Pilas</a></li>
                            </ul>
						  </div>
						</li>
                         <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Planeta</a>
						  <div class="collapsible-body" style="">
							<ul>
                              <li><a class="scroll" href="index.php#planeta">Todo</a></li>
							  <li><a href="paises.php">Paises</a></li>
							  <li><a href="planetarios.php">Planetarios</a></li>
							  <li><a href="efemerides.php">Efemerides y Personajes</a></li>
							  <li><a href="elespacio.php">El Espacio</a></li>
							  <li><a href="curiosidadesplaneta.php">Curiosidades</a></li>				
                            </ul>
						  </div>
						</li>
                         <li class="divider"></li>
						 <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Multimedia</a>
						  <div class="collapsible-body" style="">
							<ul>
                              <li><a class="scroll" href="index.php#multimedia">Todo</a></li>
							  <li><a href="fotos.php">Fotos</a></li>
							  <li><a href="videos.php">Videos</a></li>						 
                              </ul>
						  </div>
						</li>
                        
                          
                          
					  </ul>
					</li>					
					<li class="bold"><a class="modal-trigger" href="#modal-contact" class="waves-effect waves-teal">Contacto</a></li>
					
				</ul>
			</div>
		
	</nav>
        </div>
        
       
		<div class="container container-tit hide-on-small-only">
			<div class="row">
                <div class="col s12 m6">
					<a href="index.php" class="brand-logo hide-on-small-only"><img src="img/logo1_ori.png" alt="logo"></a>
				</div>
				<div class="col m6">
					<a class="brand-logo hide-on-small-only radio-online"><img src="img/logo2_ori.png" alt="logo"></a>
				</div>
			</div>
		</div>
        
		<!-- Modal Structure -->
	
		<div id="modalLogin" class="modal modal-fixed-footer contact-form">
			<div class="modal-content">
				<span><i class="modal-close material-icons right">close</i></span>
				<div class="row">
					<!-- start-form -->
					<form class="col s12" action="#" method="post" name="login_form">
						<div class="row row-login-tit">
							<div class="input-field col s12">								
								<h4 class="flow-text center">INGRESA A PROYECTO GEO</h4>
  
                                 <div class="divider"></div>
							</div>                        
							<div class="input-field col m6 costado-0 hide-on-small-only">
								<h6 class="center flow-text">USUARIOS REGISTRADOS</h6>
                            </div>
                            <div class="input-field col m6 hide-on-small-only">
                                    <h6 class="center flow-text">ENTRAR CON</h6>
                            </div>
                        </div>
                        <div class="row">  
                            <div class="input-field col s12 m6 col-top-0">
                                <div class="row">
									<div class="input-field col s12 costado-0 hide-on-med-and-up">
										<h6 class="center flow-text">USUARIOS REGISTRADOS</h6>
									</div>
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
                                        <a class=" modal-action modal-close waves-effect waves-green btn-large btn100">Ingresar</a>
                                    </div>
                                     <div class="input-field col s12" id="olvidaste">
                                        <a class="waves-effect waves-light btn btn-flat btn-salmon btn12">olvidaste tu contraseña?</a>
                                    </div>
							     </div>
                            </div>
							
							<div class="input-field col s12 hide-on-med-and-up">
									<div class="divider" style="margin-bottom: 30px;"></div>
                                    <h6 class="center flow-text">ENTRAR CON</h6>
                            </div>
                            <div class="input-field col s12 m6 hide-on-med-and-up" style="margin-top: 0px;">
                                 <div class="row"> 
							         <div class="input-field col s12">                                                                         
										<a class="waves-effect waves-light btn-large btn-face"><i class="mdi mdi-facebook"></i>Facebook </a>                                
                                        <a class="waves-effect waves-light btn-large btn-twt"><i class="mdi mdi-twitter"></i>Twitter </a>
                                        <a class="waves-effect waves-light btn-large btn-gp"><i class="mdi mdi-google-plus"></i>Google+ </a>
                                    </div>
                                </div>
                            </div>
							<div class="input-field col s12 m6 hide-on-small-only">
                                 <div class="row"> 
							         <div class="input-field col s12">                                                                         
										<a class="waves-effect waves-light btn-large btn-face"><i class="mdi mdi-facebook"></i>Facebook </a>                                
                                        <a class="waves-effect waves-light btn-large btn-twt"><i class="mdi mdi-twitter"></i>Twitter </a>
                                        <a class="waves-effect waves-light btn-large btn-gp"><i class="mdi mdi-google-plus"></i>Google+ </a>
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
		  <div id="modal-register" class="modal bottom-sheet">
			<div class="modal-content">
				<span><i class="modal-close material-icons right">close</i></span>
			   <div class="row">
				<form class="col s12">					
				  <div class="row">
					<div class="input-field col s12"> 						
                        <h4 class="flow-text center">FORMULARIO DE REGISTRACION</h4>                      
						<div class="divider"></div>
                    </div>
					<div class="input-field col s12 m6">
					  <i class="material-icons prefix">account_circle</i>
					  <input id="apellido" type="text" class="validate">
					  <label for="apellido">Apellido</label>
					</div>
					<div class="input-field col s12 m6">
					  <i class="material-icons prefix">account_circle</i>
					  <input id="nombre" type="text" class="validate">
					  <label for="nombre">Nombre</label>
					</div>
					<div class="input-field col s12 m6">
					  <i class="material-icons prefix">phone</i>
					  <input id="telefono" type="tel" class="validate">
					  <label for="telefono">Telefono</label>
					</div>
					<div class="input-field col s12 m6">
					  <i class="material-icons prefix">email</i>
					  <input id="emailmodal" type="email" class="validate">
					  <label for="emailmodal" data-error="mal" data-success="ok">Email</label>
					</div>
					<div class="input-field col s12">
						  <i class="material-icons prefix">today</i>					
						  <input type="date" class="datepicker" id="nacimiento">	
						  <label for="nacimiento">Fecha de Nacimiento</label>						  
					</div>
					
					<div class="input-field col s12" style="padding-left: 6px;">						
						  <input type="checkbox" id="recibir" />
						  <label for="recibir">Deseo recibir noticias por mail</label>						
					</div>
					
					
				  </div>
				  
				</form>
			  </div>
			</div>
			<div class="modal-footer">
			  <a class=" modal-action modal-close waves-effect waves-green btn">Confirmar</a>
			</div>
		  </div>
		  
		  
		  <!-- Modal Structure -->	
		
		  <div id="modal-contact" class="modal contact-form">
			
		  
			<div class="modal-content">
			   <span><i class="modal-close material-icons right">close</i></span>
			   <div class="row">
				<form class="col s12">
				  <div class="row">
					<div class="input-field col s12"> 
                        <h4 class="flow-text center">FORMULARIO DE CONTACTO</h4>                      
						<div class="divider"></div>
                    </div>
					<div class="input-field col s12 m6">
					  <i class="material-icons prefix">account_circle</i>
					  <input id="contact_apellido" type="text" class="validate">
					  <label for="contact_apellido">Apellido</label>
					</div>
					<div class="input-field col s12 m6">
					  <i class="material-icons prefix">account_circle</i>
					  <input id="contact_nombre" type="text" class="validate">
					  <label for="contact_nombre">Nombre</label>
					</div>
					<div class="input-field col s12 m6">
					  <i class="material-icons prefix">phone</i>
					  <input id="contact_telefono" type="tel" class="validate">
					  <label for="contact_telefono">Telefono</label>
					</div>
					<div class="input-field col s12 m6">
					  <i class="material-icons prefix">email</i>
					  <input id="contact_email" type="email" class="validate">
					  <label for="contact_email" data-error="mal" data-success="ok">Email</label>
					</div>
					<div class="input-field col s12">
					  <i class="material-icons prefix">mode_edit</i>
					  <textarea id="contact_comments" class="materialize-textarea"></textarea>
					  <label for="contact_comments" >Comentario</label>
					</div>				
					
				  </div>
				  
				</form>
			  </div>
			</div>
			<div class="modal-footer">
			  <a class=" modal-action modal-close waves-effect waves-green btn">Enviar</a>
			</div>
		  </div>
	
        
        </header>
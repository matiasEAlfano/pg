<?php require('header.php')?>

<main>
    
    
	   <div class="row">
            <div class="col s4 m3 l3">
                 <div class="row">
                      <div class="col s12">
                        <h2 class="flow-text header">Estas Leyendo</h2>
                        <ul class="collection">
                          <li class="collection-item avatar">
                            <img src="img/aprendamos.jpg" alt="" class="circle">
                            <span class="title">Aprendamos del Águila</span>
                            <p>El águila es el ave más longeva...</p>
                            <a class="secondary-content"><i class="material-icons">send</i></a>
                          </li>                           
                        </ul>
                       </div> <!-- fin col s12 -->
                </div> <!-- fin class="row" -->
                <div class="row">
                      <div class="col s12">
                        <h2 class="flow-text header">Otras Lecturas</h2>
                        <ul class="collection">
                          <li class="collection-item avatar">
                            <img src="img/cartafavaloro.jpg" alt="" class="circle">
                            <span class="title">Carta a Favaloro</span>
                            <p>Carta póstuma de René Favoloro</p>
                            <a href="cartaFavaloro.php" class="secondary-content"><i class="material-icons">speaker_notes</i></a>
                          </li>
                            <li class="collection-item avatar">
                            <img src="img/cocacola.jpg" alt="" class="circle">
                            <span class="title">Despedida Coca Cola</span>
                            <p>Despedida del presidente de Coca Cola</p>
                            <a href="despedidaCocaCola.php" class="secondary-content"><i class="material-icons">speaker_notes</i></a>
                          </li>
                          
                        </ul>
                       </div> <!-- fin col s12 -->
               </div> <!-- fin class="row" -->
           </div> <!-- class="col s4 m3 l3" -->
           
           <div class="col s8 m7 l7">
               
                    <h2 class="flow-text header header-contenido center">Lectura: Aprendamos del aguila</h2>
               <p class="caption caption-nota"> El águila es el ave más longeva, pero su chance de alcanzar los 70 años depende de una difícil decisión que debe tomar a los 40. Para esta edad, sus uñas están apretadas y flexibles, impidiéndole cazar sus presas para alimentarse. Su pico largo y puntiagudo se curva, apuntando contra el pecho, impidiéndole comer. Sus alas están envejecidas y pesadas, y sus plumas gruesas, dificultando su vuelo. 
                   </p>               
                   <img class="materialboxed img-nota" data-caption="A sus 40 años el águila debe decidir entre morir, o enfrentar un doloroso proceso de renovación que durará 150 días" width="100%" src="img/aprendamos.jpg">
                    <p class="caption caption-nota">
									A sus 40 años el águila debe decidir entre morir, o enfrentar un doloroso proceso de renovación que durará 150 días.
									Volará hacia lo alto de una montaña, y permanecerá en un nido contra un paredón. Golpeará su pico contra la pared hasta arrancarlo, y esperará el crecimiento de un pico nuevo con el cual desprenderá una a una sus uñas. 
									Esperará el nacimiento de sus nuevas uñas, y con ellas arrancará las plumas viejas que darán lugar a un nuevo plumaje, con el cual podrá volver a volar.
									Esta renovación le garantiza 30 años más de vida útil.
									¿Quieres poder disfrutar de tus próximos años de vida?
									¿Quieres calidad de vida?
									¿Quieres sentirte satisfecha y conforme con tu imagen?
									¿Has llegado al límite de insatisfacción, disgusto e incomodidad como para dicidirte, de una vez por todas, a atravezar este proceso de transformación por única y última vez?
									Otra vida es posible y está esperandote. 
                   Te animás?</p>
				    <div id="volverALecturas" class="row center">
                        <div class="col s12" style="margin-bottom:35px";>
                        <a class="waves-effect waves-light btn-large" href="./lecturas.php">Volver a lecturas</a>
                        </div> <!-- fin class="col s12" -->
                        <div class="col s12">
                            <div class="fb-comments" data-href="http://developers.facebook.com/docs/plugins/comments/" data-numposts="5">
                            </div>
                        </div>  <!-- fin class="col s12" -->
                    </div> <!-- fin id="volverALecturas" class="row" -->
				</div> <!-- fin-class="col s8 m7 l7" -->
                <!-- ***** PUBLICIDAD ***** -->
                <?php require('rightcol.php')?>	
            </div> <!-- fin row-->


</main>


<?php require('footer.php')?>
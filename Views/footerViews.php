

            <footer>

                <div class="basGauche">
                    <!--<ul class="icones">
                        <li><img class ="Ico" src="images/icones/fb.png" /></li>
                        <li><img class="Ico" src="images/icones/twit.png" /></li>
                        <li><img class ="Ico" src="images/icones/goo.png"/></li>
                    </ul>-->


                    <div class="contact">
                      <a href="#">Contactez-nous</a>
                    </div>


                    <div class ="partenaires">
                      <a href="#">Nos partenaires</a>
                    </div>
                    <div class="clear"></div>
                </div>



                <div class="logReg">
                    <div class="login">
                      <a href="/OculusGeek/connexion.php">Login</a>
                    </div>

                    <div class="register">
                      <a href="/OculusGeek/inscription.php">Register</a>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class ="InscN">



                    <div class="champs">


                      <?php if (isset($_SESSION['login']));{ ?>

                          <?php if ($singed) {    //si la personne est éjà inscrite  ?>


                          <div class="phrase">Vous êtes inscrit à notre news letter <a href="desinscriptionNews.php">je me désinscris</a></div>

                          <?php } else {  //si elle n'est pas encore inscrite on lance le formulaire  ?>

                      <div class="Newsletter"> Newsletter</div>
                        <form method="post" action="#">
                      		<input type="*" name='email' placeholder="email"  size="30" maxlength="100" />
                      		<input type="submit" name="submit" value="je m'inscris" />
                      	</form>
                      <?php } ?>
                <?php } ?>





                    </div>
                    <div class="clear"></div>
                </div>


                <nav class="menuFooter">
                    <ul class="menu">
                        <li class="itemMenu"><a class="menuLink" href="/OculusGeek/accueil.php">Accueil</a></li>
                        <li class="itemMenu"><a class="menuLink" href="/OculusGeek/objectif.php">Notre objectif</a></li>
                        <li class="itemMenu"><a class="menuLink" href="#">A la pointe de la technologie</a></li>
                        <li class="itemMenu"><a class="menuLink" href="#">Espace gaming</a></li>
                        <li class="itemMenu"><a class="menuLink" href="#">Leurs expériences</a></li>
                        <li class="itemMenu"><a class="menuLink" href="#">Forum</a></li>
                    </ul>
                </nav>


                <div class="copyright">
                  <div class="copy">
                    <a href="#">Mention légales</a> | © Oculus Geek
                  </div>

                </div>

                <?php
                // <?= équivaut à <?php echo '...'
                // Condition ternaire :
                // avant le point d'intérogation : condition (là si signed = true)
                // après le point d'intérogation : si {..} (là on affiche la popup)
                // après les deux points : else {...} (là on affiche rien)
                ?>
              <?=$singed ? '<script type="text/javascript">window.alert("'.$message.'");</script>' : ''?>


        	</footer>
    	</body>
    </html>

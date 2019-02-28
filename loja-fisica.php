<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>
            Loja Física - Professor Oliani Jr
        </title>
        
		<meta name="description" content="Site Oliani Junior - Informática TI"/>
		<meta name="keywords" content="Site, Olianijr, Escola, Informática"/>
		<meta name="author" content="Bronzes"/>
                      
        <meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link href="css/estilo.css" media="all" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="aps/images/favicon.ico" />		
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
		<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/> 
		<link href="bootstrap/css/style.css" rel="stylesheet" type="text/css"/>
		


		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
		<script src="bootstrap/js/jquery-1.12.3.min.js" type="text/javascript"></script>        
		<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="bootstrap/js/index.js"></script>		
		<script src="js/js-nosso.js"></script>
		<!-- Modal -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		
    </head>
    <body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'; font-size:100%;">
		<div class="">
				<header id="cabecalho">
					
					<nav class= "navbar navbar-fixed-top navbar-inverse" >
						<div class="navbar-inner" style="background-image:url('aps/images/fundomenu.jpg');">
							
							<div class="container">
								<button class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
									<span class="icon-bar">
									</span>
									<span class="icon-bar">
									</span>
									<span class="icon-bar">
									</span>                                
								</button>
							
							    <?php
                                    $link = mysqli_connect("localhost","root","","site");								
                                    $res2=mysqli_query($link, "select img_logo from resto order by img_cod desc");
                                    $row2=mysqli_fetch_array($res2);
                                ?>


								<a class="brand" href="index.php"><img src="aps/images/Logo/<?=$row2['0'];?>" class="img-stylequeeusubstituiparadarresponsividade" style="max-height:60px;
										min-width:auto; max-width:250px;padding-left:10px!important; margin-left:15px!important;"></a>

								<div class="nav-collapse collapse" style="margin-top:22px;">
									
									<ul class="nav list-inline menu" id="menu">
										<li>
											<a href="index.php" class="list-item">
												Home
											</a>
										</li>
										
										<li>
											<a href="loja-fisica.php" class="list-item">
												Loja Física
											</a>
										</li>    
										
										<li>
											<a href="contatos.php" class="list-item">
												Contatos
											</a>
										</li>                                    
										
									</ul>
									<nav class="main-nav">
									
										<!-- inser more links here -->
										<li><a class="cd-signin botaodomodal" href="#0">Login Moodle</a></li>
										<li><a class="cd-signup botaodomodal" href="#0">Cadastre-se</a></li>
										<style>
										background-color:black;
										</style>
									
									</nav>
								</div>
								
							</div>
							
							
						</div>
					</nav>
					
				</header>
				
			<div class="row">
				<div id="principal" class="container-fluid">
					<div id="primeiroh1" style="background-image:url('aps/images/fundoblue.jpg');">
						<div id="lojaTitle">
						
							<section>
								<center>
									<h1 style="font-size:63pt; z-index: 5; font-style:italic; line-height:94px;">LOJA FÍSICA</h1><br><br>
									<h2 class="visitah1" style="color:#ffff;">FAÇA-NOS UMA VISITA</h2>
								</center>
							</section>
						</div>
					</div>
				</div>
			</div>
			
			<content class="col-md-4 col-sm-4 col-lg-4">
							<!--br><br><hr><!-- LINHA HORIZONTAL-->
				<br><br><h2 id="endereco">ENDEREÇO COMERCIAL:</h2><br>
				<section>
					<p class="enderecoTotal">Rua da República, 933 - Centro, Taquaritinga - SP CEP: 15900-000<br>
					Fone: 3253-1232<br>
					Horário de atendimento: Segunda a Sexta 8:00-12:00 13:00-17:00</p>
				<br><br><br>
				</section>
			</content>
			<hr/>
			<div class="col-md-6 col-sm-4 col-lg-6 especializacao">
					<CENTER><h3 class="darius">Especializações</h3></center>
				<div class="masteryi">
					<center><img src="aps/images/especializacoes/arduino.png" class="img-loja-fisica img-responsive" TITLE="Arduino" alt="Arduino">
					<img src="aps/images/especializacoes/sistema.png" class="img-loja-fisica img-responsive" TITLE="Sistemas de Informação">
					<img src="aps/images/especializacoes/etec.png" style="height:250px;width:250px;"class="img-loja-fisica img-responsive" TITLE="Etec Dr Adail Nunes da Silva">
					<img src="aps/images/especializacoes/photography.png" class="img-loja-fisica img-responsive" TITLE="Fotografia">
					<img src="aps/images/especializacoes/compumed.png" class="img-loja-fisica img-responsive" TITLE="Empresa Compumed">
					
					</center>
				
				</div>
			
			</div>
			<?php
			$link = mysqli_connect("localhost","root","","site");
							
			$titulo=mysqli_query($link, "select loja_titulo from loja order by loja_cod desc");
			$rowTitulo=mysqli_fetch_array($titulo);

			$texto=mysqli_query($link, "select loja_texto from loja order by loja_cod desc");
			$rowTexto=mysqli_fetch_array($texto);

			$maps=mysqli_query($link, "select loja_maps from loja order by loja_cod desc");
			$rowMaps=mysqli_fetch_array($maps);


			?>
			<div class="col-md-6 col-sm-6 col-lg-6">
				<div id="parteloja" style="background-image:url('aps/images/ceu.jpg');">
					<section id="explicatudo">
						<h1 class="nossaloja"><?= $rowTitulo['0'];?></h1><br>
						<article id="empresa">
						<?= $rowTexto['0'];?>
						</article>
					</section>
					
						<div class="google-maps">
							<iframe src="<?= $rowMaps['0'];?>" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					
				</div>
			</div>
			

			
	<footer id="rodape">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <center>
                        <br/><br/>
                        <img src="aps/images/Logo/logo.png" class="bwWrapper" onclick="topFunction()">	
                        <div id="listaMarcas">
							<center>
							
							<?php 
							$link = mysqli_connect("localhost","root","","site");								
							$face=mysqli_query($link, "select link_facebook from link order by link_cod desc");
							$rowFace=mysqli_fetch_array($face);
							
							$twi=mysqli_query($link, "select link_twitter from link order by link_cod desc");
							$rowTwi=mysqli_fetch_array($twi);
							
							$google=mysqli_query($link, "select link_google from link order by link_cod desc");
							$rowGoogle=mysqli_fetch_array($google);
							?>
							
							
                            <a href="<?=$rowFace['0'];?>" target="_blank"><img src="aps/images/icon-facebook.png" class="list-image" alt="ícone do facebook, para acesso" id="facebook" onmouseover="hoverfacebook()" onmouseout="facebook()"></a>

                            <a href="<?=$rowTwi['0'];?>" target="_blank"><img src="aps/images/icon-twitter.png"  class="list-image" alt="ícone do twitter, para acesso" id="twitter" onmouseover="hovertwitter()" onmouseout="twitter()"></a>

                            <a href="<?=$rowGoogle['0'];?>" target="_blank"><img src="aps/images/icon-gmail.png"  class="list-image" alt="ícone do gmail, para acesso" id="gmail" onmouseover="hovergmail()" onmouseout="gmail()"></a>
							<br/>
							
							</center>
                        </div>
						
                        <p class="txtrod">professor@olianijr.com.br<br/>
                            (16)3253-1232</p>
                        <br/><br/>
                        <span style="color:#ffff;">©Copyright by Brozes - Todos os direitos reservados</span> 
                    </center>
                </div>
            </div>
    </footer>
			
			
			
						<!-- Modal -->
	
	<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a href="#0" style="text-decoration:none;">Login</a></li>
				<li><a href="#0" style="text-decoration:none;">Cadastro</a></li>
			</ul>

			<div id="cd-login"> <!-- log in form -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="signin-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">Remember me</label>
					</p>

					<p class="fieldset">
						<input class="full-width" type="submit" value="Login">
					</p>
				</form>
				
				<p class="cd-form-bottom-message"><a href="#0">Esqueceu sua senha?</a></p>
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			<div id="cd-signup"> <!-- sign up form -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Username</label>
						<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Password</label>
						<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="accept-terms">
						<label for="accept-terms">Eu concordo com os <a href="#0">Termos</a></label>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Create account">
					</p>
				</form>

				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-signup -->

			<div id="cd-reset-password"> <!-- reset password form -->
				<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Reset password">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div> <!-- cd-reset-password -->
			<a href="#0" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->
	<!-- Fim Modal -->
				
        </div>
    </body>
</html>

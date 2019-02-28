<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>
            Contatos - Santo Oliani Jr
        </title>
        
		<meta name="description" content="Site Oliani Junior - Informática TI"/>
		<meta name="keywords" content="Site, Olianijr, Escola, Informática"/>
		<meta name="author" content="Bronzes"/>      
        <meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="shortcut icon" href="images/favicon.ico" />		
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
		<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/> 
		<link href="bootstrap/css/style.css" rel="stylesheet" type="text/css"/>

		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
		<script src="bootstrap/js/jquery-1.12.3.min.js" type="text/javascript"></script>        
		<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="bootstrap/js/index.js"></script>
		<link rel="stylesheet" type="text/css" href="css/estilo1.css">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		
		<!-- Modal -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<style>
		@media (max-width:600px){
			#segundoh1{
				background-attachment:fixed;
				background-position:center;
				background-size:cover;
				background-repeat:no-repeat;
				padding:0 0 0 0;
				color:#fff;
				width:auto;
				height:100%;
			}

			#contatos{
				padding:109px	 0 0 0;
			}
			.contatoesuporte{
				color:#ffff;
				font-size:45pt; z-index: 5; font-style:italic; line-height:94px;
				
			}
			#EntreEm{
				color:#ffff;
		
				font-style:italic;
				font-weight:lighter;
				z-index: 5;     
				line-height: 1.2;
				font-family: "Arial";
			}
		}
		
		</style>

    </head>
    <body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'; font-size:100%;">
        <div class=" container-fluid">
				<header id="cabecalho">
                
					<nav class= "navbar navbar-fixed-top navbar-inverse" >
						<div class="navbar-inner" style="background-image:url('images/fundomenu.jpg');">
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
								echo "<form method=\"POST\" action=\"logo.php\" name=\"formLogo\">
								<span class=\"brand\">
									<label id=\"lblImagem\" for=\"inputLogo\">
										<img src=\"images/Logo/".$row2['0']."\" class=\"img-stylequeeusubstituiparadarresponsividade\" style=\"max-height:60px;
										min-width:auto; max-width:250px;padding-left:10px!important; margin-left:15px!important;\">
									</label>
									<input type=\"file\" class=\"arquivoLogo\" name=\"inptLogo\"	id=\"inputLogo\" onchange=\"mudaLogo()\"/>
								</span>
							</form>";
							
								
								
							?>
								<div class="nav-collapse collapse" style="margin-top:22px;">
                                
									<ul class="nav list-inline" id="menu">
										<li>
											<a href="index.php" class="list-item">
												Home
											</a>
										</li>
										<li class="list-item">
											<a href="loja-fisica.php">
												Loja Física
											</a>
										</li>                                                                                                                                
										<li class="list-item">
											<a href="contatos.php">
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
				<div id="principal" class="">
					<div id="segundoh1" style="background-image:url('images/fundoblue.jpg');height:700px;">
						<div id="contatos">
							<section>
								<center>
									<h1 class="contatoesuporte">CONTATOS E SUPORTE</h1><br><br>
									<h2 id="EntreEm" style="color:#ffff;">ENTRE EM CONTATO COM NOSSA EQUIPE</h2>
								</center>
							</section>
						</div>
					</div>
				</div>
			</div> <!-- fim do seu cu-->
			
				<div id="formpad" style="" class="row">
					<div class="col-md-5 col-lg-5 col-sm-9">
							<form class="form-horizontal formeu" method="POST" action="enviaemail.php">
						<br><br><br/>
							<h1 class="formmsg">Formulário de Mensagens On-line</h1>
							<br/><br/>
							<div class="control-group">
								<label class="control-label formulario" for="inputNome">Nome</label>
							<div class="controls">
								<input type="text" id="inputNome" name="inputNome" placeholder="Nome">
							</div>
						  </div>
							<div class="control-group formSobrenome">
								<label class="control-label formulario" for="inputSobrenome">Sobrenome</label>
								<div class="controls">
									<input type="text" id="inputSobrenome" name="inputSobrenome" placeholder="Sobrenome">
								</div>
							</div>
						  <div class="control-group">
								<label class="control-label formulario" for="inputEmail">E-mail</label>
							<div class="controls">
								<input type="Email" id="inputEmail" name="inputEmail" placeholder="Email">
							</div>
						  </div>
						  <div class="control-group">
								<label class="control-label formulario" for="inputDigite">Digite sua Mensagem</label>
							<div class="controls">
								<textarea type="text" id="inputDigite" name="inputDigite">
								</textarea><br/><br/>
							</div>
						  </div>
						  <center><button type="submit" style="margin-bottom:15px;" class="btn btn-info">Enviar</button></center>
						</form>
					</div>
				</div>
				
			</div>
				
				
			<footer id="rodape">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <center>
                        <br/><br/>
                        <img src="images/Logo/logo.png" class="bwWrapper" onclick="topFunction()"> 	
                        <div id="listaMarcas">
							<center>
							<form method="POST" action="cadlinks.php">
							<?php 
							$link = mysqli_connect("localhost","root","","site");								
							$face=mysqli_query($link, "select link_facebook from link order by link_cod desc");
							$rowFace=mysqli_fetch_array($face);
							
							$twi=mysqli_query($link, "select link_twitter from link order by link_cod desc");
							$rowTwi=mysqli_fetch_array($twi);
							
							$google=mysqli_query($link, "select link_google from link order by link_cod desc");
							$rowGoogle=mysqli_fetch_array($google);
							?>
							
							
                            <a href="<?=$rowFace['0'];?>" target="_blank"><img src="images/icon-facebook.png" class="list-image" alt="ícone do facebook, para acesso" id="facebook" onmouseover="hoverfacebook()" onmouseout="facebook()"></a>

                            <a href="<?=$rowTwi['0'];?>" target="_blank"><img src="images/icon-twitter.png"  class="list-image" alt="ícone do twitter, para acesso" id="twitter" onmouseover="hovertwitter()" onmouseout="twitter()"></a>

                            <a href="<?=$rowGoogle['0'];?>" target="_blank"><img src="images/icon-gmail.png"  class="list-image" alt="ícone do gmail, para acesso" id="gmail" onmouseover="hovergmail()" onmouseout="gmail()"></a>
							<br/>
							<input type="url" name="inputFace" value="<?=$rowFace['0'];?>">
							
							<input type="url" name="inputTwitter" value="<?=$rowTwi['0'];?>">
							
							<input type="url" name="inputGmail" value="<?=$rowGoogle['0'];?>">
							<br/><br/>
							<button type="submit" class="btn btn-primary"/>Enviar</button>
							</form>
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

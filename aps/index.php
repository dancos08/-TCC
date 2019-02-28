<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>
            Home - Santo Oliani Jr
        </title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>


        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
        <script src="bootstrap/js/jquery-1.12.3.min.js" type="text/javascript"></script>        
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>	
        <script src="bootstrap/js/index.js"></script>


        <!-- Modal --> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script> 
        <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'/>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
         


        <!--
       <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script> 
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --> 
        <link href="bootstrap/css/CssLinhaDoTempo.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/JsLinhaDoTempo.js"></script>
        <script src="bootstrap/js/jquery.js"></script>
		<script src="js/js-nosso.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		

    </head>
    <body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'; font-size:100%;">
		

		
        <div class=" container-fluid">
            <header id="cabecalho">

                <nav class= "navbar navbar-fixed-top navbar-inverse" >
                    <div class="navbar-inner responsividadenaimagem" style="background-image:url('images/fundomenu.jpg');">

                        <div class="container deuruimentaofuicriada">
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
        </div>		


        <!-- #region Jssor Slider Begin -->
        <!-- Generator: Jssor Slider Maker -->
        <!-- Source: https://www.jssor.com -->
        <script src="bootstrap/js/jssor.slider-27.0.2.min.js" type="text/javascript"></script>
        <style>



            /*jssor slider bullet skin 032 css*/
            .jssorb032 {position:absolute;}
            .jssorb032 .i {position:absolute;cursor:pointer;}
            .jssorb032 .i .b {fill:#fff;fill-opacity:0.0;stroke:#fff;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.25;}
            .jssorb032 .i:hover .b {fill:#fff;fill-opacity:.6;stroke:#fff;stroke-opacity:.35;}
            .jssorb032 .iav .b {fill-opacity:1;stroke:#fff;stroke-opacity:.35;}
            .jssorb032 .i.idn {opacity:.3;}

            /*jssor slider arrow skin 051 css*/
            .jssora051 {display:block;position:absolute;cursor:pointer;}
            .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
            .jssora051:hover {opacity:.8;}
            .jssora051.jssora051dn {opacity:.5;}
            .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
        </style>
		<?php
							$link = mysqli_connect("localhost","root","","site");
							
							$slide1=mysqli_query($link, "select primeiro_slide from slide order by slide_cod desc");
							$rowslide1=mysqli_fetch_array($slide1);
							
							$slide2=mysqli_query($link, "select segundo_slide from slide2 order by slide2_cod desc");
							$rowslide2=mysqli_fetch_array($slide2);
							
							$slide3=mysqli_query($link, "select terceiro_slide from slide3 order by slide3_cod desc");
							$rowslide3=mysqli_fetch_array($slide3);
		
		
		?>
		
		
        <div id="jssor_1" class="carrosselresponsive"style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
            </div>
            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
                <div data-p="225.00">
                    <img data-u="image" src="images/Carrossel/<?=$rowslide1['0'];?>" />
                    <div data-u="caption" data-t="0" style="position:absolute;top:120px;left:75px;width:470px;height:220px;">
                        <div style="position:absolute;top:4px;left:45px;width:379px;height:213px;overflow:hidden;">
                        </div>
                    </div>
                </div>
                <div data-p="225.00">
                    <img data-u="image" src="images/Carrossel/<?=$rowslide2['0'];?>" />
                </div>
                <div data-p="225.00">
                    <img data-u="image" src="images/Carrossel/<?=$rowslide3['0'];?>" />
                </div>
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                    </svg>
                </div>
            </div>
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
            </div>
        </div>
        <script type="text/javascript">jssor_1_slider_init();</script>
        <!-- #endregion Jssor Slider End -->

				  <!-- Trigger the modal with a button -->
					<center><br/><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Editar Carrossel</button></center>
	
					  <!-- Modal -->
					  <div class="modal fade" id="myModal" role="dialog" style="display:none;">
						<div class="modal-dialog modal-lg">
						  <div class="modal-content">
							<div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal">&times;</button>
							  <h4 class="modal-title">Modal Header</h4>
							</div>
							
							<div class="modal-body">
								<center>
							<form method="POST" action="cadslider.php">
							  <img src="images/Carrossel/<?=$rowslide1['0'];?>" style="max-height:60px; min-width:auto; max-width:150px;padding-left:3px!important; margin-left:3px!important;">
							  <img src="images/Carrossel/<?=$rowslide2['0'];?>" style="max-height:60px;min-width:auto; max-width:150px;padding-left:3px!important; margin-left:3px!important;">
							  <img src="images/Carrossel/<?=$rowslide3['0'];?>" style="max-height:60px;min-width:auto; max-width:150px;padding-left:3px!important; margin-left:3px!important;">
							  <br/><br/>
							  <input type="radio" class="radioimg"name="filtro" value="1">
							  <input type="radio" class="radioimg" name="filtro" value="2">
							  <input type="radio" class="radioimg" name="filtro" value="3">
							  <br/><br/>
							  <input type="file" name="imgnovo">
							  </center>
							</div>
								<div class="modal-footer">
								  <button type="submit" class="btn btn-info">Alterar</button> 	
								  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</form>
						  </div>
						</div>
					  </div>
					</div>

		
		
		
		
		
        <div class="container">
            <div class="page-header text-center">
                <h1 id="timeline">BLOG</h1>
            </div>
            <ul class="timeline">
                <li>
				<style>
				#cadpost{width:50%;border: 1px solid #d4d4d4;-webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175); height:100%; padding: 15px 15px 0 15px;}
				
				@media (max-width:800px) {
								#cadpost{width:100%;border: 1px solid #d4d4d4;-webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175); height:100%; padding: 15px 15px 0 15px;
								}	
							}
				
				</style>
					<div id="cadpost">
						<form id="formPost" method="POST" action="cadpostagem.php">
							<input type="text" name="txtTitulo" style="height:30px; width:100%; border-radius:7px;" placeholder="Título"/><br/>
							<input type="file" name="imgPost"/><br/>
							<textarea type="text" name="txtTexto" style="margin-top:10px; width:100%; height:350px;"></textarea>
							<input type="submit" value="Postar"/>
						</form>
					</div>		
					
				</li>
					<form method="POST" action="deleta.php" style="display:flex; flex-wrap:wrap;">
								
					</form>
				<?php
			$link = mysqli_connect("localhost","root","","site");
			
			$busca = "select * from postagem order by post_cod desc";
			
			$total_reg = "4"; // número de registros por página
			
			$pagina     = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
			
			$inicio = ($pagina*$total_reg) - $total_reg;
			
			$limite = mysqli_query($link, "$busca LIMIT $inicio,$total_reg") or die(mysqli_error());
			
			
			while ($row=mysqli_fetch_array($limite)){
			$cont=$row['post_cod'];
			echo "
					<script>
						$(document).ready(function () {
								$(\".panel-".$cont."\").hide();
								var abrir = 0;
								var x = window.matchMedia(\"(max-width:700px)\");
								
								if(x.matches && $(\"#homequadro-".$cont."\").css(\"width\", \"50%\")){
									$(\"#homequadro-".$cont."\").css(\"width\", \"100%\").css(\"height\",\"100%\");
								}
								$(\"#toggle-".$cont."\").click(function () {
									
									if (x.matches){
										if (abrir == 0) {
											$(\".panel-".$cont."\").toggle(\"normal\");
											$(\"#homequadro-".$cont."\").css(\"width\", \"100%\").css(\"height\",\"100%\");
											abrir = 1;
										} else {
											$(\".panel-".$cont."\").toggle(\"normal\");
											$(\"#homequadro-".$cont."\").css(\"width\", \"100%\").css(\"height\",\"100%\");
											abrir = 0;
									}}
									else {
										if(abrir == 0){
											$(\"#homequadro-".$cont."\").css(\"width\", \"100%\").css(\"height\",\"100%\");
											$(\".panel-".$cont."\").toggle(\"normal\");
											abrir = 1;
										} else {
											$(\"#homequadro-".$cont."\").css(\"width\", \"50%\").css(\"height\",\"100%\");
											$(\".panel-".$cont."\").toggle();
											abrir = 0;
									}}
									
								});	
							
							});
							
					</script>
					<style>
							#homequadro-".$cont."{
							width:50%;
							border: 1px solid #d4d4d4;
							-webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
							box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
							 display: flex;
							 flex-wrap: wrap;
							 height:100%;
							}
							.panel-".$cont."{
									text-align: justify;
							}
							
							
							@media (max-width:800px) {
								#homequadro-".$cont."{
								width:100%;
								border: 1px solid #d4d4d4;
								-webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
								box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
								 display: flex;
								 flex-wrap: wrap;
								 height:100%;
								}	
							}

					</style>
				<li>
					<div id=\"homequadro-".$cont."\">

						<div style=\"flex: 1 1 200px;\" class=\"\">
						
							<a href=\"deleta.php?batata=$row[post_cod]\"><button type=\"submit\"name=\"fechar\"class=\"btn btn-danger excluir\" style=\"\"><i class=\"icon-trash icon-white\"></i></button></a>
							
								<center><h2>$row[0]</h2></center>
								
								<img id=\"imagempost\"style=\"width:618px; height:411px;\" src=\"images/Blog/$row[1]\">
								
								<button class=\"btn-ler-reportagem\" id=\"toggle-".$cont."\">Ler reportagem</button>
								
						</div>
					
						<div class=\"panel-".$cont."\" style=\"padding-left:15px; padding-right:15px;max-width:537px; height:100%\">
								<p><br>".nl2br($row[2])."</p>
						</div>
						
					</div>
                </li>
				print_r($cont);
				";
				}
				
				$num_total = mysqli_query($link, $busca)->num_rows;
				 
				$num_paginas = ceil($num_total/$total_reg);
				 
				$exibir = 2;
				
				
				
				?>
			
				<div class="pagination">
				  <ul>
					<li><a href="index.php">Prev</a></li>
					<?php for($i = $pagina;$i < $pagina+$exibir; $i++){
					if($pagina == $i){
						$estilo = "class=\"paginacao\"";
					}	
						
					if($i > 0 && $i <= $num_paginas ){
						echo '<li><a href="?pagina='. $i.'"> '. $i.' </a></li>';
					}}
					?>
		
					<!--li><a href="index.php?pagina=<?//=$num_paginas-1;?>">Next</a></li-->
				  </ul>
				</div>

			</ul>
        </div>

        <!-- /.container -->
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
                        <span class="txtrod">©Copyright by Brozes - Todos os direitos reservados</span> 
                    </center>
                </div>
            </div>
    </footer>



    <!-- Modal -->

    <div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
        <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
            <ul class="cd-switcher"><br/>
                <li><a href="#0" style="text-decoration:none;">Conectar</a></li>
                <li><a href="#0" style="text-decoration:none;">Cadastrar-se</a></li>
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
                        <input class="full-width has-padding has-border" id="signin-password" type="password	"  placeholder="Password">
                        <a href="#0" class="hide-password">Hide</a>
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <input type="checkbox" id="remember-me" checked>
                        <label for="remember-me">Lembrar-se de mim</label>
                    </p>

                    <p class="fieldset">
                        <input class="full-width" type="submit" value="Login">
                    </p>
                </form>

                <p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
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
                        <input class="full-width has-padding has-border" id="signup-password" type="password"  placeholder="Password">
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
                <p class="cd-form-message">Esqueceu sua senha? Digite seu email, lá você receberá um link para criar uma nova senha.</p>

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

                <p class="cd-form-bottom-message"><a href="#0">Voltar para Login</a></p>
            </div> <!-- cd-reset-password -->
            <a href="#0" class="cd-close-form">Close</a>
        </div> <!-- cd-user-modal-container -->
    </div> <!-- cd-user-modal -->
    <!-- Fim Modal -->
	
	


</body>
</html>

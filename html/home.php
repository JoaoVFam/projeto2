		<?php $home = 1;?>
		<section>
			<div>
				<div id="myCarousel" class="carousel slide hidden-xs" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="../assets/img/slide11.jpg" alt="slide1" style="width:100%" class="img-responsive" />
							<div class="carousel-caption" style="background: rgba(0, 0, 0, 0.6);border-radius: 10px;" />
								<h4>Alarmes residenciais e comerciais</h4>
								<p>Nossos sistemas de alarmes permitem que seu patrimônio fique protegido no momento de ociosidade do imóvel.</p>
							</div>
							</div>
						    <div class="item">
						        <img src="../assets/img/slide21.jpg" alt="slide2" style="width:100%" class="img-responsive"/>
							    <div class="carousel-caption" style="background: rgba(0, 0, 0, 0.6);border-radius: 10px;">
							        <h4>Automação de Portões</h4>
							        <p>A JF Alarmes também presta serviços de Automação de Portões que proporcionam conforto para a família.</p>
							    </div>
						    </div>
							<div class="item">
							    <img src="../assets/img/slide31.jpg" alt="slide3" style="width:100%" class="img-responsive"/>
								<div class="carousel-caption" style="background: rgba(0, 0, 0, 0.6);border-radius: 10px;">
									<h4>Cerca Elétrica</h4>
									<p>Inibe a ação de invasores através de descarga elétrica.</p>
								</div>
						    </div>
					    </div>
					    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left"></span>
						    <span class="sr-only">Previous</span>
					    </a>
					    <a class="right carousel-control" href="#myCarousel" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right"></span>
						    <span class="sr-only">Next</span>
				  		</a>
				</div>
<!-- PARTE PARA CELULAR USANDO AS CLASSES DE HIDE -->
				<div id="myCarousel2" class="carousel slide visible-xs-block" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel2" data-slide-to="1"></li>
						<li data-target="#myCarousel2" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="../assets/img/slide1.jpg" alt="slide1" style="width:100%" class="img-responsive" />
							<div class="carousel-caption" style="background: rgba(0, 0, 0, 0.6);border-radius: 10px;">
								<h4>Alarmes residenciais e comerciais</h4>
								<p>Nossos sistemas de alarmes permitem que seu patrimônio fique protegido no momento de ociosidade do imóvel.</p>
							</div>
							</div>
						    <div class="item">
						        <img src="../assets/img/slide2.jpg" alt="slide2" style="width:100%" class="img-responsive"/>
							    <div class="carousel-caption" style="background: rgba(0, 0, 0, 0.6);border-radius: 10px;">
							        <h4>Automação de Portões</h4>
							        <p>A JF Alarmes também presta serviços de Automação de Portões que proporcionam conforto para a família.</p>
							    </div>
						    </div>
							<div class="item">
							    <img src="../assets/img/slide3.jpg" alt="slide3" style="width:100%" class="img-responsive"/>
								<div class="carousel-caption" style="background: rgba(0, 0, 0, 0.6);border-radius: 10px;">
									<h4>Cerca Elétrica</h4 style="background: rgba(0, 0, 0, 0.6">
									<p>Inibe a ação de invasores através de descarga elétrica.</p>
								</div>
						    </div>
					    </div>
					    <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left"></span>
						    <span class="sr-only">Previous</span>
					    </a>
					    <a class="right carousel-control" href="#myCarousel2" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right"></span>
						    <span class="sr-only">Next</span>
				  		</a>
				</div>
			</div>
			<div class="jumbotron" style="padding:25px 0px;"> <!-- class útil para abrigar conteúdo chave como slogans e frases de efeito-->
				<div class="container" style="padding-top:12px;">
					<p style="text-align: center"><a class="btn btn-primary btn-lg page-scroll" href="#contato" role="button">Faça um orçamento conosco</a></p>
				</div>
			</div>
		</section>
			<!-- Inicio código do slide dos novos produtos -->
			<div class="container" >
				<h2 style="text-align: center; font-family: sans-serif;">Novos produtos</h2>
					<div class="row">
			<?php 
				include("../admin/conecta.php"); 
				include("../admin/banco-produto.php");
			    $produtos = listaProdutos($conexao);
			    $numeroDeProdutos = 0;
			    $contador = 0;
				foreach ($produtos as $produto) :		
					 $numeroDeProdutos = $numeroDeProdutos+1; 
		  		endforeach;
		  		foreach ($produtos as $produto) :		
					 if($contador==$numeroDeProdutos-1 || $contador==$numeroDeProdutos-2 || $contador==$numeroDeProdutos-3 || $contador==$numeroDeProdutos-4){ ?>
						<div class="col-sm-6 col-md-4 col-lg-3">
							<div class="thumbnail">
								<img src="../admin/img/<?=$produto['nome_imagem']?>" class="img-thumbnail" alt="imagem_produto">
								<div class="caption">
									<h3><?=$produto['nome']?></h3>
									<p><?=substr($produto['descricao'], 0, 40)?></p>
									<p>Categoria: <?=$produto['categoria_nome']?></p>
									<h4>Preço: R$ <?=$produto['preco']?> </h4>
								</div>
							</div>
						</div> <?php
					 }
					 $contador = $contador+1; 
		  		endforeach; ?>
			</div>
		</div>
		  <!-- Final código do slide dos novos produtos -->
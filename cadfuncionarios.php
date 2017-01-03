<?php 
include_once('header.php');
	include_once('nav.php');
		require_once 'functions.php';

# $planos = listaPlanosDeSaude($conexao);
		?>
		<div class="container-fluid">
			<legend class="text-center text-primary">Cadastro de Funcionários</legend>


			<form action="" method="post" accept-charset="utf-8" class="form-inline" novalidate=""  class="my-form" name="formCadastro">	

				<div class="panel panel-success"> <!-- inicio do painel de dados primarios do profissional -->

					<div class="panel-body">

						<div class="text-center">

							<div class="form-group">
								<label for="fichacadastral">Ficha cadastral:</label>
								<input class="form-control" type="fichacadastral" id="fichacadastral" class="form-control" placeholder="0000000000" disabled="" ng-model="fichacadastral" mask="999999/999" value="<?php getNumFichaCadastral()?>" />
							</div>

							<div class="form-group">
								<label for="dtcadastro">Data Cadastro:</label>
								<input class="form-control" type="dtcadastro" id="dtcadastro" class="form-control" disabled="" value="<?php pegaData()?>" />
							</div>

							<div class="form-group">
								<label for="cartaosus">Cartão SUS:</label>
								<input class="form-control" type="cartaosus" id="cartaosus" class="form-control" ng-model="cartaosus" mask="99.999.999-999"/>
							</div>
						</div>

					</div>
				</div> <!-- fim do painel de dados primarios do profissional -->

				<br>
				<div class="panel panel-success">
					<div class="panel-heading">
						<h4 class="text-center">Dados pessoais</h4>
					</div>
					<div class="panel-body">

						<div class="row">

							<div class="form-group">
								<label class="control-label" for="nomeprofissional" >Nome:</label>
								<input class="form-control" type="nomeprofissional" class="form-control" id="nomeprofissional" ng-model="userType" required autofocus="" />						
						
							</div>
						</div>

						<div class="row">
							
							<div class="form-group">
								<label class="control-label" for="endprofissional">Endereço:</label>
								<input class="form-control" type="endprofissional" class="form-control" id="endprofissional">
							</div>

							<div class="form-group">
								<label for="numendprofissional">Número:</label>
								<input class="form-control" type="numendprofissional" id="numendprofissional">
							</div>
							
						</div>	
						

						
						<div class="row">
							<div class="form-group">
								<label for="complendprofissional">Compl:</label>
								<input class="form-control" type="complendprofissional" id="complendprofissional"/>
							</div>

							<div class="form-group">
								<label for="bairro">Bairro:</label>
								<input class="form-control" type="bairro" id="bairro" />
							</div>

							<div class="form-group">
								<label for="cidadeprofissional">Cidade:</label>
								<input class="form-control" type="cidadeprofissional" id="cidadeprofissional" />
							</div>

							<div class="form-group">
								<label for="cep">CEP:</label>
								<input class="form-control" type="cep" id="cep"  ng-model="cep" mask="99999-999"/>

							</div>
						
					</div>	
						
						<div class="row">	
							<div class="form-group">
								<label for="rgprofissional">RG:</label>
								<input class="form-control" type="rgprofissional" id="rgprofissional" />
							</div>

							<div class="form-group">
								<label for="cpfprofissional">CPF:</label>
								<input class="form-control" type="cpfprofissional" id="cpfprofissional" ng-cpf ng-model="cpf" mask="999.999.999-99"/>

							</div>

							<div class="form-group">
								<label for="dtnascprofissional">Dt Nasc:</label>
								<input class="form-control" type="dtnascprofissional" id="dtnascprofissional" ng-model="dn" mask="99/99/9999"/>
							</div>
						
						</div>

						<br>

						<div class="form-group">
								<label for="foneprofissional">Fone Resid:</label>
								<input class="form-control" type="foneprofissional" id="foneprofissional" ng-model="foneprofissional" mask="(99)9999-9999"/>
						</div>

							<div class="form-group">
								<label for="celularprofissional">Celular:</label>
								<input class="form-control" type="celularprofissional" id="celularprofissional" ng-model="celularprofissional" mask="(99)9999-9999"/>
							</div>

							<div class="form-group">
								<label for="estcivilprofissional">Est Civíl:</label>
								<select name="EstadoCivil" id="EstadoCivil" class="form-control">
									<option>Solteiro</option>
									<option selected="selected">Casado</option>
									<option>Vi&uacute;vo</option>
									<option>Divorciado</option>
								</select>
							</div>

							
						</div>

						<br>
						<div class="row">

							<div class="form-group">
								<label for="sexoprofissional">Sexo:</label>
								<select name="sexoprofissional" id="sexoprofissional" class="form-control">
									<option selected="selected">Masculino</option>
									<option>Feminino</option>
								</select>
							</div>


							<div class="form-group">
								<label for="conselho">Conselho</label>
								<div class="form-group">
									<select name="conselho" id="conselho" class="form-control">
										<option>CRM</option>
										<option>CRO</option>
									</select>
								<label for="codconselho">Código</label>
									<input type="codconselho" id="codconselho" class="form-control" disabled="" />  
								</div>
							</div>

							<div class="form-group">
								<label for="planSaude">Plano Saúde</label>

								<select name="planSaude" id="planSaude" class="form-control">
									<?php 
									foreach ($planos as $plano) {
										$essaEoPlano = $profissional['plano_id'] == $plano['id'];
										$selcao = $essaEoPlano ? "selected='selected'" : "";
										?>
										<option value="<?=$plano['id']?>" <?= $selecao?>><?=$plano['nome']?></option>

										<?php				
									}	

							//faz a chamada dos planos cadastrados no DB		
									?>

								</select>

							</div>
							
						</div>
						
					<br>
						<div class="row">
							<div class="form-group">
								<label for="emailprofissional">E-mail:</label>
									<input class="form-control" type="emailprofissional" id="emailprofissional" />
								
								<label for="loginprofissional">Login:</label>
									<input class="form-control" type="loginprofissional" id="loginprofissional" />
									
								<label for="senhaprofissional">Senha:</label>
									<input class="form-control" type="senhaprofissional" id="senhaprofissional" />
									
							<div class="form-group">
								<label for="funcao">Função:</label>
								<select name="funcao" id="funcao" class="form-control">
									<option selected="selected">Médico</option>
									<option>Secretária</option>
									<option>Enfermeira</option>
									<option>Administrativo</option>
								</select>
							</div>
							</div>
						</div>
						
						</div>				
						<br>

						<div class="row">
	
							<h3 class="text-center text-success alert-success">Especialidades</h3>
							<div class="col-sm-4">
								<label for="especialidade1">Especialidade 1:</label>
								<input type="especialidade1" id="especialidade1" class="form-control"/>        
							</div>

							<div class="col-sm-4">
								<label for="especialidade2">Especialidade 2:</label>
								<input type="especialidade2" id="especialidade2" class="form-control"/>        
							</div>	

							<div class="col-sm-4">
								<label for="especialidade3">Especialidade 3:</label>
								<input type="especialidade3" id="especialidade3" class="form-control" />        
							</div>

						</div>

					</div>
				</div>

<!-- 						<br> -->

				<!-- panel de menus de informações adicionais -->
				<br>
			      <div class="panel panel-success">
					<div class="panel-heading"><h4 class="text-center">Informações adicionais</h4></div>
					<div class="panel-body">
						<ul class="nav nav-tabs nav-pills">
							<li class="active"><a data-toggle="tab" href="#home">Outros dados</a></li>
							<li><a data-toggle="tab" href="#menu1">Comissões</a></li>
							<li><a data-toggle="tab" href="#menu2">Observações</a></li>
						</ul>
					</div>
				</div>

				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">

						<div class="form-group">
							<label for="idiomaprofissional">Idioma:</label>
							<input class="form-control" type="idiomaprofissional" id="idiomaprofissional" /> 
						</div>

						<div class="form-group">
							<label for="naturalidadeprofissional">Naturalidade:</label>
							<input class="form-control" type="naturalidadeprofissional" id="naturalidadeprofissional" />
						</div>

						<div class="form-group">
							<label for="docprofissional">Documento</label>

							<select name="docprofissional" id="docprofissional" class="form-control">
								<option>Passaporte</option>
								<option>Cert Nascimento</option>
								<option>Doc Internacional</option>
								<option>Outro</option>
							</select>
							<input type="docprofissional" id="docprofissional" class="form-control"/>  

						</div>

					</div>

					<br>

					


					<div id="menu1" class="tab-pane fade text-center">

						<button type="button" class="btn btn-success">Configurar</button>
						<button type="button" class="btn btn-success">Gerar relatório</button>

					</div>
					<div id="menu2" class="tab-pane fade">

						<label for="obs">Observações:</label>
						<textarea id="obs" class="form-control" rows="3" maxlength="1000" minlength="10"></textarea>

					</div>


				</div>
			</div>	

			<br>
			
			<div class="row center-block text-center">
				<div class="col col-xs-6 col-md-5">
					<button class="btn btn-primary btn-lg btn-block">Cadastrar</button>
				</div>

				<div class="col col-xs-6 col-md-5">
					<button class="btn btn-warning btn-lg btn-block">Limpar</button>
				</div>
			</div>

		</form>

	</div>

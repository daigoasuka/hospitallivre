<?php 
require_once 'functions.php';

# $planos = listaPlanosDeSaude($conexao);
 ?>
<div class="container-fluid">
	<legend class="text-center text-primary">Cadastro de Pacientes</legend>


	<form action="" method="post" accept-charset="utf-8" class="form-inline" novalidate=""  class="my-form" name="formCadastro">	

		<div class="panel panel-success"> <!-- inicio do painel de dados primarios do paciente -->
			<div class="panel-heading text-center">
				<h4 class="text-center">Triagem</h4>
			</div>
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
		</div> <!-- fim do painel de dados primarios do paciente -->

		<br>
		<div class="panel panel-success">
			<div class="panel-heading">
				<h4 class="text-center">Dados pessoais</h4>
			</div>
			<div class="panel-body">

				<div class="row">

					<div class="form-group">
						<label class="control-label" for="nomepaciente">Nome:</label>
						<input class="form-control" type="nomepaciente" class="form-control" id="nomepaciente" ng-model="userType" required/>
						<span class="alert-danger" ng-show="formCadastro.input.$error.required">O nome do paciente é obrigatorio</span>
					</div>
				</div>
				
				<div class="row">
					<div class="form-group">
						<label for="rgpaciente">RG:</label>
						<input class="form-control" type="rgpaciente" id="rgpaciente" />
					</div>

					<div class="form-group">
						<label for="cpfpaciente">CPF:</label>
						<input class="form-control" type="cpfpaciente" id="cpfpaciente" ng-cpf ng-model="cpf" mask="999.999.999-99"/>
						
					</div>

					<div class="form-group">
						<label for="dtnascpaciente">Dt Nasc:</label>
						<input class="form-control" type="dtnascpaciente" id="dtnascpaciente" ng-model="dn" mask="99/99/9999"/>
					</div>
			</div>
			
			<div class="row">
					<div class="form-group">
						<label class="control-label" for="endpaciente">Endereço:</label>
						<input class="form-control" type="endpaciente" class="form-control" id="endpaciente">
					</div>
					
					<div class="form-group">
						<label for="rgpaciente">Número:</label>
						<input class="form-control" type="rgpaciente" id="rgpaciente">
					</div>
				</div>

				<div class="row">
					<div class="form-group">
						<label for="complendpaciente">Compl:</label>
						<input class="form-control" type="complendpaciente" id="complendpaciente"/>
					</div>

					<div class="form-group">
						<label for="bairro">Bairro:</label>
						<input class="form-control" type="bairro" id="bairro" />
					</div>

					<div class="form-group">
						<label for="dtnascpaciente">Cidade:</label>
						<input class="form-control" type="dtnascpaciente" id="dtnascpaciente" />
					</div>

					<div class="form-group">
						<label for="cep">CEP:</label>
						<input class="form-control" type="cep" id="cep"  ng-model="cep" mask="99999-999"/>
						
					</div>

					</div>
				<div class="row">
					<div class="form-group">
						<label for="fonepaciente">Fone Resid:</label>
						<input class="form-control" type="fonepaciente" id="fonepaciente" ng-model="fonepaciente" mask="(99)9999-9999"/>  
					</div>

					<div class="form-group">
						<label for="celularpaciente">Celular:</label>
						<input class="form-control" type="celularpaciente" id="celularpaciente" ng-model="celularpaciente" mask="(99)9999-9999"/>
					</div>

					
					<div class="form-group">
						<label for="sexopaciente">Sexo:</label>
						<select name="EstadoCivil" id="EstadoCivil" class="form-control">
							<option>Feminino</option>
							<option selected="selected">Masculino</option>
						</select>
					</div>

					<div class="form-group">
						<label for="estcivilpaciente">Est Civíl:</label>
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
						<label for="etniapaciente">Etnia:</label>
						<input class="form-control" type="etniapaciente" id="etniapaciente" />
					</div>

					<div class="form-group">
						<label for="religiao">Religião:</label>
						<input class="form-control" type="religiao" id="religiao" />
					</div>

					
					<div class="form-group">
						<label for="planSaude">Plano Saúde</label>

						<select name="planSaude" id="planSaude" class="form-control">
							<?php 
							foreach ($planos as $plano) {
								$essaEoPlano = $paciente['plano_id'] == $plano['id'];
								$selcao = $essaEoPlano ? "selected='selected'" : "";
								?>
								<option value="<?=$plano['id']?>" <?= $selecao?>><?=$plano['nome']?></option>

								<?php				
							}	

							//faz a chamada dos planos cadastrados no DB		
							?>

						</select>
						<select name="planSaude" id="planSaude" class="form-control">
							<option>SUS</option>
							<option>Unimed</option>
							<option>Ideal</option>
							<option>Bradesco</option>
						</select>
					</div>

				</div>
				<br>
				<div class="row">

					<div class="form-group">
						<label for="tpsangue">Tipo Sanguineo:</label>
						<input class="form-control" type="tpsangue" id="tpsangue" />  
					</div>

					<div class="form-group">
						<label for="fatorrh">Fator RH:</label>
						<select name="fatorrh" id="fatorrh" class="form-control">
							<option>Positivo</option>
							<option>Negativo</option>
						</select>
					</div>


					<div class="form-group"><label for="doaorgaos">Doador de órgãos?</label>
						<select name="doaorgaos" id="doaorgaos" class="form-control">
							<option>Não</option>
							<option>Sim</option>
						</select>
					</div>
					
					<div class="form-group"><label for="doasangue">Doador de sangue?</label>
						<select name="doasangue" id="doasangue" class="form-control">
							<option>Não</option>
							<option>Sim</option>
						</select>
					</div>
					
					</div>
				<div class="row">	
					<div class="form-group">
						<label for="msg">Instruções para tratamentos:</label>
						<textarea id="msg" class="form-control" rows="4"></textarea>
					</div>
				</div>
			</div>
		</div>



		<!-- panel de menus de informações adicionais -->
		<div class="panel panel-success">
			<div class="panel-heading"><h4 class="text-center">Informações adicionais</h4></div>
			<div class="panel-body">
				<ul class="nav nav-tabs nav-pills">
					<li class="active"><a data-toggle="tab" href="#home">Outros dados</a></li>
					<li><a data-toggle="tab" href="#menu1">Atendimento</a></li>
					<li><a data-toggle="tab" href="#menu2">Tratamentos</a></li>
					<li><a data-toggle="tab" href="#menu2">Exames</a></li>
				</ul>
			</div>
		</div>

		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">

				<div class="row">
					<div class="form-group">
						<label for="ultimaconsulta">Última consulta:</label>
						<input class="form-control" type="ultimaconsulta" id="ultimaconsulta" />
					</div>

					<div class="form-group">
						<label for="idiomapaciente">Idioma:</label>
						<input class="form-control" type="idiomapaciente" id="idiomapaciente" /> 
					</div>

					<div class="form-group">
						<label for="naturalidadepaciente">Naturalidade:</label>
						<input class="form-control" type="naturalidadepaciente" id="naturalidadepaciente" />
					</div>

				</div>

				<br>

				<div class="row">
				
				
					<div class="form-group">
						<label for="dtcasamentopaciente">Data Casamento:</label>
						<input class="form-control" type="dtcasamentopaciente" id="dtcasamentopaciente" ng-model="dtcasamentopaciente" mask="99/99/9999"/>  
					</div>
					
					
					<div class="form-group">
						<label for="conjugepaciente">Nome conjuge:</label>
						<input class="form-control" type="conjugepaciente" id="conjugepaciente" />  
					</div>

					<div class="form-group">
						<label for="profissaoconjuge">Profissão conjuge:</label>
						<input class="form-control" type="profissaoconjuge" id="profissaoconjuge" />	
					</div>
				</div>	
				
				<div class="row">
					<div class="form-group">
						<label for="procuradorpaciente1">Procurador 1:</label>
						<input class="form-control" type="procuradorpaciente1" id="procuradorpaciente1" />	
					</div>

					<div class="form-group">
						<label for="foneprocurador1">Contato:</label>
						<input class="form-control" type="foneprocurador1" id="foneprocurador1" ng-model="foneprocurador1" mask="(99)9999-9999"/>  
					</div>
				</div>
				
				<div class="row">
					<div class="form-group">
						<label for="procuradorpaciente1">Procurador 2:</label>
						<input class="form-control" type="procuradorpaciente2" id="procuradorpaciente2" />	
					</div>
					
					<div class="form-group">
						<label for="foneprocurador2">Contato:</label>
						<input class="form-control" type="foneprocurador2" id="foneprocurador2" ng-model="foneprocurador2" mask="(99)9999-9999"/> 
					</div>
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
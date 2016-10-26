  
<div class="container">
  

<form class="form-horizontal">
<fieldset>


<!-- Form Name -->
<legend>Cadastro de Pacientes</legend>

	<div class="row">
		<div class="col-sm-4">
			<label for="fichacadastral">Ficha cadastral:</label>
			<input type="fichacadastral" id="fichacadastral" />
		</div>
		
		<div class="col-sm-4">
			<label for="dtcadastro">Data Cadastro:</label>
			<input type="dtcadastro" id="dtcadastro" />
		</div>

		<div class="col-sm-4">
			<label for="cartaosus">Cartão SUS:</label>
			<input type="cartaosus" id="cartaosus" />
		</div>		
	</div>
	
<div class="row">
  
	<div class="row">
		<label class="control-label col-sm-2" for="nomepaciente">Nome:</label>
		<div class="col-sm-9">
        <input type="nomepaciente" class="form-control" id="nomepaciente" />
		</div>
	</div>

  <div class="row">
	<div class="col-sm-4">
			<label for="rgpaciente">RG:</label>
			<input type="rgpaciente" id="rgpaciente" />
	</div>
	<div class="col-sm-4">
		<label for="cpfpaciente">CPF:</label>
		<input type="cpfpaciente" id="cpfpaciente" />
	</div>
	<div class="col-sm-4">
			<label for="dtnascpaciente">Dt Nasc:</label>
			<input type="dtnascpaciente" id="dtnascpaciente" />
	</div>

</div>


<div class="row">
  
	<div class="row">
		<label class="control-label col-sm-2" for="endpaciente">Endereço:</label>
		<div class="col-sm-9">
        <input type="endpaciente" class="form-control" id="endpaciente" placeholder="Endereço">
		</div>
	 
	</div>

  <div class="row">
	<div class="col-sm-4">
			<label for="rgpaciente">Número:</label>
			<input type="rgpaciente" id="rgpaciente" />
	</div>
	<div class="col-sm-4">
		<label for="cpfpaciente">Bairro:</label>
		<input type="cpfpaciente" id="cpfpaciente" />
	</div>
	<div class="col-sm-4">
			<label for="dtnascpaciente">Cidade:</label>
			<input type="dtnascpaciente" id="dtnascpaciente" />
	</div>

</div>



	 <div class="row">
		<div class="col-sm-2">
			<label for="sexopaciente">Sexo:</label>
			<select name="EstadoCivil" id="EstadoCivil">
				<option>Feminino</option>
				<option selected="selected">Masculino</option>
			</select>
		</div>
		
		<div class="col-sm-3">
			<label for="estcivilpaciente">Est Civíl:</label>
				<select name="EstadoCivil" id="EstadoCivil">
					<option>Solteiro</option>
					<option selected="selected">Casado</option>
					<option>Vi&uacute;vo</option>
					<option>Divorciado</option>
				</select>
		</div>
		
		<div class="col-sm-3">
			<label for="etniapaciente">Etnia:</label>
			<input type="etniapaciente" id="etniapaciente" />
		</div>
		
		<div class="col-sm-3">
			<label for="religiao">Religião:</label>
			<input type="religiao" id="religiao" />
		</div>
		  
	 </div>

	  <div class="row">

		  <div class="col-sm-4">
			<label for="fonepaciente">Fone Resid:</label>
			<input type="fonepaciente" id="fonepaciente" />  
		  </div>
		  
		  <div class="col-sm-4">
			<label for="celularpaciente">Celular:</label>
			<input type="celularpaciente" id="celularpaciente" />
		  </div>
		  
		  
		  <div class="col-sm-4">
				<label for="planSaude">Plano Saúde</label>
				<select name="planSaude" id="planSaude">
					<option>SUS</option>
					<option>Unimed</option>
					<option>Ideal</option>
					<option>Bradesco</option>
				</select>
		  </div>
	  </div>
  
	  <div class="row">

		  <div class="col-sm-4">
			<label for="tpsangue">Tipo Sanguineo:</label>
			<input type="tpsangue" id="tpsangue" />  
		  </div>
		  
		  <div class="col-sm-4">
			<label for="fatorrh">Fator RH:</label>
			<input type="fatorrh" id="fatorrh" />
		  </div>

		  
	  </div>

	  <div class="row">

		  <div class="col-sm-12">
        <label for="msg">Instruções para tratamentos:</label>
        <textarea id="msg"></textarea>
		  </div>

	  </div>
		  
	  </div>

	  
	  </div> 


</fieldset>
</form>
<p>  <br /> </p>
<form>
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Outros dados</a></li>
  <li><a data-toggle="tab" href="#menu1">Atendimento</a></li>
  <li><a data-toggle="tab" href="#menu2">Tratamentos</a></li>
  <li><a data-toggle="tab" href="#menu2">Exames</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">

  	  <div class="row">

	  	  <div class="col-sm-4">
			<label for="ultimaconsulta">Última consulta:</label>
			<input type="ultimaconsulta" id="ultimaconsulta" />
		  </div>
		  <div class="col-sm-4">
			<label for="idiomapaciente">Idioma:</label>
			<input type="idiomapaciente" id="idiomapaciente" />  
		  </div>
		  
		  <div class="col-sm-4">
			<label for="naturalidadepaciente">Naturalidade:</label>
			<input type="naturalidadepaciente" id="naturalidadepaciente" />
		  </div>
		  
	  </div>

	  <div class="row">

		  <div class="col-sm-4">
			<label for="nacionalidadepaciente">Nacionalidade:</label>
			<input type="nacionalidadepaciente" id="nacionalidadepaciente" />  
		  </div>

		<div class="col-sm-4">
			<label for="dtcasamentopaciente">Data Casamento:</label>
			<input type="dtcasamentopaciente" id="dtcasamentopaciente" />  
		  </div>
		  
		 <div class="col-sm-4">
			<label for="conjugepaciente">Nome conjuge:</label>
			<input type="conjugepaciente" id="conjugepaciente" />  
		  </div> 
		  
		</div>

		<div class="row">

		  <div class="col-sm-4">
			<label for="procuradorpaciente1">Procurador 1:</label>
			<input type="procuradorpaciente1" id="procuradorpaciente1" />			
		  </div>

		<div class="col-sm-4">
			<label for="foneprocurador1">Contato:</label>
			<input type="foneprocurador1" id="foneprocurador1" />  
		  </div>
</div>		  
		<div class="col-sm-4">
			<label for="procuradorpaciente2">Procurador 2:</label>
			<input type="procuradorpaciente2" id="procuradorpaciente2" />  
		</div>
		  
		<div class="col-sm-4">
			<label for="foneprocurador2">Contato:</label>
			<input type="foneprocurador2" id="foneprocurador2" />  
		  </div>
		  
		</div>

  </div>
  
  
  
  <div id="menu1" class="tab-pane fade">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.</p>
  </div>
  
  
  
  <div id="menu2" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>



</form>
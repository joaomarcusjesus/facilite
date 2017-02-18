<!-- PÁGINA CADASTRAR USUÁRIOS -->
<!-- Herda layout master -->
@extends('aplicacao.layouts.master')

<!-- Título da Página -->
@section('title') Cadastro @endsection

<!-- Include NavBar -->
@include('aplicacao.includes.header')

<!-- Conteúdo da Página -->
@section('content')
	<!-- ROW -->
	<div class="row">

		<!-- CADASTRO -->
		<div class="col-lg-6 col-md-6">
	      <h2 class="text-center">Cadastrar</h2>
	      <form class="form-horizontal" action="/" method="post">
	        <div class="form-group">
	          <div class="col-sm-offset-3 col-sm-8">
	            <div class="checkbox">
	              <label for="checkProf"><input type="checkbox" id="checkProf"/> Sou profissional</label>
	            </div>
	          </div>
	        </div>
	        <div class="form-group">
	          <label for="inputName" class="col-md-offset-1 col-md-2 control-label">Nome:</label>
	          <div class="col-md-7">
	            <input required type="text" class="form-control" id="inputName" name="inputName" maxlength="50" placeholder="Ex.: Maria José" />
	          </div>
	        </div>
	        <div class="form-group">
	          <label for="inputEmail" class="col-md-offset-1 col-md-2 control-label">Email:</label>
	          <div class="col-md-7">
	            <input required type="email" class="form-control" id="inputEmail" name="inputEmail" maxlength="50" placeholder="Ex.: josemaria@gmail.com"/>
	          </div>
	        </div>
	        <div class="form-group" id="formCpf" style="display: none">
	          <label for="inputCpfCnpj" class="col-md-offset-1 col-md-2 control-label">Cpf:</label>
	          <div class="col-md-7">
	            <input required disabled type="text" class="form-control" id="inputCpfCnpj" name="inputCpfCnpj" maxlength="14" placeholder="000.000.000-00"/>
	          </div>
	        </div>
	        <div class="form-group" id="formTel" style="display: none">
	          <label for="inputTel" class="col-md-offset-1 col-md-2 control-label">Tel.:</label>
	          <div class="col-md-7">
	            <input required disabled type="tel" class="form-control" id="inputTel" name="inputTel" maxlength="15" placeholder="(00) 00000-0000"/>
	          </div>
	        </div>
	        <div class="form-group">
	          <label for="inputPass" class="col-md-offset-1 col-md-2 control-label">Senha:</label>
	          <div class="col-md-7">
	            <input required type="text" class="form-control" id="inputPass" name="inputPass" maxlength="50" placeholder="*****************"/>
	          </div>
	        </div>
	        <div class="form-group">
	          <label for="inputConfirmPass" class="col-md-offset-1 col-md-2 control-label">Confirmar senha:</label>
	          <div class="col-md-7">
	            <input required type="text" class="form-control" id="inputConfirmPass" name="inputConfirmPass" maxlength="50" placeholder="*****************"/>
	          </div>
	        </div>
	        <div class="form-group">
	          <div class="text-center">
	            <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
	          </div>
	        </div>
	      </form>
	    </div>
	    <!-- //CADASTRO -->

	    <!-- LOGIN -->
	    <div class="top-12 visible-xs"></div>
	    <div class="col-lg-6 col-md-6 text-center">
	      <h2>Já tem uma conta?</h2>
	      <p><a class="btn btn-success btn-lg" href="/entrar" role="button">Fazer login &raquo;</a></p>
	    </div>
	    <!-- //LOGIN -->

	</div>
	<!-- //ROW -->
@endsection

<!-- Include Footer -->
@include('aplicacao.includes.footer')

<!-- Importação de Scripts JS/JQuery -->
@push('scripts')

	<!-- JQuery/JQuery Mask Plugins -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>

	<!-- Eventos do Formulário-->
    <script type="text/javascript">

    	/* MOSTRAR/OCULTAR CAMPOS PROFISSIONAIS */
    	//Ao selecionar checkbox mostra e ativa os campos profissionais 
		$("#checkProf").on("click", function() {
			// $("#formCpf").toggle();
			 if( $("#checkProf").is(':checked') ){
				$("#inputCpfCnpj").prop("disabled", false); // <- = habilita input
				$("#inputTel").prop("disabled", false); // <- = habilita input
				$("#formCpf").show("fast");
				$("#formTel").show("linear");
			}else{
				$("#inputCpfCnpj").prop("disabled", true); // <- = desabilita input
				$("#inputTel").prop("disabled", true); // <- = desabilita input
				$("#formCpf").hide("fast");
				$("#formTel").hide("linear");
			}
		});

		/* CPF MASK */
      	$("#inputCpfCnpj").on("focus", function(){
      		$("#inputCpfCnpj").mask("999.999.999-99");
      	});

      	/* TEL MASK */
      	$("#inputTel").on("focus", function(){
      		$("#inputTel").mask("(99) 99999-9999");
      	});

    </script>
    
@endpush
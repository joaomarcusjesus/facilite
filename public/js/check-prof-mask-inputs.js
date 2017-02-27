/* Necessita do plugin 'jquery.mask.min.js'*/

/* MOSTRAR/OCULTAR CAMPOS PROFISSIONAIS */
//Ao selecionar checkbox mostra e ativa os campos profissionais 
$("#is_proff").on("click", function() {
    // $("#formCpf").toggle();
     if( $("#is_proff").is(':checked') ){
        $("#inputCpfCnpj").prop("disabled", false); // <- = habilita input
        $("#inputTel").prop("disabled", false); // <- = habilita input
        $("#formCpf").show("fast");
        $("#formTel").show("linear");
        // $("#form_prof").prop("action", "/register-prof"); // <- Muda o action do form para cadastrar prof
    }else{
        $("#inputCpfCnpj").prop("disabled", true); // <- = desabilita input
        $("#inputTel").prop("disabled", true); // <- = desabilita input
        $("#formCpf").hide("fast");
        $("#formTel").hide("linear");
        // $("#form_prof").prop("action", "/register");
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
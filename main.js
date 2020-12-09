function validation(){

    var form = "formUserData";
    
    var nome = document.forms[form]["nomeUser"].value;
    var sobrenome = document.forms[form]["sobrenomeUser"].value;
    var cpf = document.forms[form]["cpfUser"].value;
    var email = document.forms[form]["emailUser"].value;
    var senha = document.forms[form]["senhaUser"].value;

    if(nome == ""){
        alert("Informe seu nome!");
    }

    if(sobrenome == ""){
        alert("informe seu sobrenome!");
    }

    if(cpf == ""){
        alert("Informe seu CPF!");
    }

    if(email = ""){
        alert("Informe seu email!");
    }

    if(senha = ""){
        alert("Informe sua senha!");
    }
}

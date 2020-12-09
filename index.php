<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - A5 </title>
    <script type="text/javascript" src="main.js"></script>
</head>
<body>
    
    <div class="form">
        <form name="formUserData" method="POST" onsubmit="return validation()">

            <label for="nomeUser" class="lblInput">Nome:</label>
            <div class="inputContainer">
                <input type="text" name="nomeUser" id="nomeUser" class="input" placeholder="Ex: Hamon">
                <label class="error" id="nomeError"></label>
            </div>

            <label for="sobrenomeUser" class="lblInput">Sobrenome:</label>
            <div class="inputContainer">
                <input type="text" name="sobrenomeUser" id="sobrenomeUser" class="input" placeholder="Ex: Soares">
                <label class="error" id="docUser"></label>
            </div>

            <label for="docUser" class="lblInput">Documento:</label>
            <div class="inputContainer">
                <input type="number" name="docUser" id="docUser" class="input" placeholder="900.800.700.00">
                <label class="error" id="docUser"></label>
            </div>

            <label for="emailUser" class="lblInput">E-mail:</label>
            <div class="inputContainer">
                <input type="email" name="emailUser" id="emailUser" class="input" placeholder="exemplo@exemplo.com">
                <label class="error" id="emailError"></label>
            </div>

            <label for="senhaUser" class="lblInput">Senha:</label>
            <div class="inputContainer">
                <input type="password" name="senhaUser" id="senhaUser" class="input" placeholder="********">
                <label class="error" id="senhaError"></label>
            </div>

            <div class="inputContainer">
                <input class="btnEnviar" type="submit" name="enviar">
            </div>
            
        </form>
    
    </div>


    <?php

                   $infor = array ( ' nomeUser', 'sobrenomeUser', 'docUser' );   //texto que vai aparecer dentro do documento txt.
                   $fp = fopen ("C:/Users/Hamon Soares/Desktop/inf.txt", "w");
                              
                   foreach ($infor as $key => $valor) {
                       fwrite ($fp, $valor . PHP_EOL);
                   }  
                       fclose ($fp); 
                 
                  
        
    ?>
</body>
</html>
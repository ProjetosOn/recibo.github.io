<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('get.php')?>
    <h5 style="text-align: center; margin: 0px;">Desenvolvido por Gustavo Venceslau</h5>
    <h1>RECIBO</h1>
    
    <div class="container-teste">
    <div class="recibo">
    <h2 class="valor"> R$<?= $valor?></h2>
    <div class="texto">
 
    <p> Recebemos de <span><?=$nome?></span> 
    portador(a) CPF/CNPJ nº <span><?=$cpf?></span> <br>
    residente em <span><?=$adress?></span> - <span><?=$bairro?></span> - <span><?=$cep?></span> <br>
    a importância de  <span>R$ <?=$valor?></span> 
    referente à <span><?=$referente?></span> <br>
    
    
    <div class="infos">
         Forma de pagamento: <span><?=$forma_pagamento?></span>
    <br>
    São Paulo, <span><?= date('d/m/Y', strtotime($data)); ?></span>
    <br>
    Responsável: <span><?=$nome_emissor?></span>
    </div>
    </div>
    
   
</p>
    <img src="logotipo.png" alt="" class="logo"> 

    <p>CNPJ: 01.995.225/0001-98</p>
    </div>
    </div>
    <br>
    <form>
<input class="btn-print" type="button" value="Imprimir" onClick="window.print()"/>

</form>

    <script src="script.js"></script>
</body>
</html>
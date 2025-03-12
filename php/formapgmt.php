<!DOCTYPE html>
<?php
    $cpf =$_POST["cpf"];
	$nome=$_POST["nome"]; 
    $fone=$_POST["fone"];   
    $email=$_POST["email"];
    $cep=$_POST["cep"];
    $casa=$_POST["casa"];  

    $prod1 = $_POST["prod1"];
    if ($prod1 == 1){
        $prod1="AAAAA";
        $preco1=100;
    }
    elseif ($prod1 == 2){
        $prod1="BBBBB";
        $preco1=200;
    }
    elseif ($prod1 == 3){
        $prod1="CCCCC";
        $preco1=300;
    }
    else{
        $prod1="DDDDD";
        $preco1=400;
    }
    $qtd1   = $_POST["qtd1"];


   	$prod2 = $_POST["prod2"];

    if ($prod2 == 1){
        $prod2="AAAAA";
        $preco2=100;
    }
    elseif ($prod2 == 2){
        $prod2="BBBBB";
        $preco2=200;
    }
    elseif ($prod2 == 3){
        $prod2="CCCCC";
        $preco2=300;
    }
    elseif ($prod2 == 4){
        $prod2="DDDDD";
        $preco2=400;
    }
    else{
        $prod2="";
        $preco2=0;  	
    }
    $qtd2 = $_POST["qtd2"];

    if(isset($_POST["prod3"])){
        $prod3="AAAAA";
        $preco3=100;
    }
    else{
        $prod3="";
        $preco3=0;
    }

    if(isset($_POST["prod4"])){
        $prod4="BBBBB";
        $preco4=100;
    }
    else{
        $prod4="";
        $preco4=0;
    }

    if(isset($_POST["prod5"])){
        $prod5="CCCCC";
        $preco5=100;
    }
    else{
        $prod5="";
        $preco5=0;
    }

    if(isset($_POST["prod6"])){
        $prod6="DDDDD";
        $preco6=100;
    }
    else{
        $prod6="";
        $preco6=0;
    }
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <title>Urban Shop</title>
</head>
<body>
    <header>
        <img src="../images/logo.png.png" alt="Urban Shop Logo">
        <nav>
            <ul>
                <li><a href="#inicio">Início</a></li>
                <li><a href="#produtos">Produtos</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="signup-form">
            <h2>Forma de Pagamento e Frete</h2>
            <form action="confirma.php" method="post">
        		<! recebendo dados etapa 1>
        		<input type="hidden" name="cpf" value="<?php echo $cpf;?>">
        		<input type="hidden" name="nome" value="<?php echo $nome;?>">
                <input type="hidden" name="fone" value="<?php echo $fone;?>">
				<! recebendo dados etapa 2 >
				<input type="hidden" name="prod1" value="<?php echo $prod1;?>">
				<input type="hidden" name="preco1"value="<?php echo $preco1;?>">
				<input type="hidden" name="qtd1"  value="<?php echo $qtd1;?>">
				<input type="hidden" name="prod2" value="<?php echo $prod2;?>">
				<input type="hidden" name="preco2"value="<?php echo $preco2;?>">
				<input type="hidden" name="qtd2"  value="<?php echo $qtd2;?>">
				<input type="hidden" name="prod3" value="<?php echo $prod3;?>">
				<input type="hidden" name="preco3"value="<?php echo $preco3;?>">
				<input type="hidden" name="prod4" value="<?php echo $prod4;?>">
				<input type="hidden" name="preco4"value="<?php echo $preco4;?>">
				<input type="hidden" name="prod5" value="<?php echo $prod5;?>">
				<input type="hidden" name="preco5"value="<?php echo $preco5;?>">
				<input type="hidden" name="prod6" value="<?php echo $prod6;?>">
				<input type="hidden" name="preco6"value="<?php echo $preco6;?>">

                <! acessando dados etapa 3 >
                <label for="fpagto">Escolha a Forma de Pagamento:</label>
                <select name="fpagto">
                    <option value="1">Boleto - Desconto de 10%</option>
                    <option value="2">6x no Crédito sem Juros</option>
                    <option value="3">12x no Crédito - 12% de Juros</option>
                </select>

                 <br/><br/>
                <h2>Acrescentar AQUI a escolha do Frete e acrescente mais 2 formas de pagamento</h2>
                <br/><br/>
                <button type="submit">Próxima</button>
            </form>
        </section>
    </main>
    <footer>
        <p>Urban Shop - 2025</p>
    </footer>
</body>
</html>
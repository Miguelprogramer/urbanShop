<!DOCTYPE html>
<?php
	$cpf =$_POST["cpf"];
	$nome=$_POST["nome"]; 
    $fone=$_POST["fone"];   
    $email=$_POST["email"];
    $cep=$_POST["cep"];
    $casa=$_POST["casa"];  
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
            <h2>Escolha seu Skate</h2>
            <form action="./formapgmt.php" method="post">
                <input type="hidden" name="email" value="<?php echo $email;?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf;?>">
                <input type="hidden" name="nome" value="<?php echo $nome;?>">
                <input type="hidden" name="fone" value="<?php echo $fone;?>">

                <label for="prod1">Escolha Seu shape</label>
                <select name="prod1">
                    <option value="1">Tradicional shape   -   Preço R$ 349,00</option>
                    <option value="2">Longboard Pro   -   Preço R$ 459,00</option>
                    <option value="3">Waveboard sample   -   Preço R$ 356,00</option>
                    <option value="4">Cruiser   -   Preço R$ 750,00</option>
                    <option value="5">Longboard    -   Preço R$ 320,00</option>
                </select>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="qtd1" >
                    <option value="1" > 1 </option>
                    <option value="2" > 2 </option>
                    <option value="3" > 3 </option>
                    <option value="4" > 4 </option>
                    <option value="5" > 5 </option>             
                </select>
                <br/><br/>
                <fieldset>
                    <legend>Escolha a lixa</legend>
                    <input type="radio" name="prod2" value="1"/> Com grip   -   R$ 50,00  <br/>
                    <input type="radio" name="prod2" value="2"/> Emborrachada   -   R$ 100,00  <br/>
                    <input type="radio" name="prod2" value="3"/> Simples   -   R$ 39,00  <br/>
                    <input type="radio" name="prod2" value="4"/> Agressiva   -   R$ 69,00  <br/>
                    <input type="radio" name="prod2" value="5"/> Lisa   -   R$ 59,00  <br/>
                    Quantidade
                    <select name="qtd2" >
                        <option value="1" > 1 </option>
                        <option value="2" > 2 </option>
                        <option value="3" > 3 </option>
                        <option value="4" > 4 </option>
                        <option value="5" > 5 </option>              
                    </select>
                </fieldset>
                 <br/><br/>
                <fieldset>
                    <legend>Escolha o truck</legend>
                    <input type="checkbox" name="prod3" value="1" /> 129mm   -   R$ 200,00 <br/>
                    <input type="checkbox" name="prod4" value="1" /> 139mm   -   R$ 340,00 <br/>
                    <input type="checkbox" name="prod5" value="1" /> 144mm   -   R$ 360,00 <br/>
                    <input type="checkbox" name="prod6" value="1" /> 149mm   -   R$ 400,00 <br/>
                    <input type="checkbox" name="prod7" value="1" /> 149mm Fibra de carbono   -   R$ 560,00 <br/>

                </fieldset>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <fieldset>
                <label for="prod1">Escolha a roda</label>
                <select name="prod1">
                    <option value="1">Roda Next skate   -   Preço R$ 50,00</option>
                    <option value="2">Roda moska   -   Preço R$ 60,00</option>
                    <option value="3">Roda black sheep   -   Preço R$ 356,00</option>
                    <option value="4">Roda Mantex   -   Preço R$ 69,00</option>
                    <option value="5">Roda Faith    -   Preço R$ 50,00</option>
                </select>
                </fieldset>
                <button type="submit">Próxima</button>
            </form>
        </section>
    </main>
    <footer>
        <p>Urban Shop - 2025</p>
    </footer>
</body>
</html>
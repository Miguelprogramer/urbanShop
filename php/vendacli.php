<!DOCTYPE html>
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
            <h2>Dados Pessoais</h2>
            <form action="./vendapro.php" method="post">
                <label for="text">CPF:</label>
                <input type="text" id="cpf" name="cpf" maxlength="15" minlength="11" required placeholder="Digite seu CPF" ><br>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" size="50" maxlength="50" required placeholder="Digite seu nome"><br>
                <label for="fone">Telefone:</label>
                <input type="tel" id="fone" name="fone" size="20" maxlength="20" required placeholder="Digite seu telefone (ex: 11999999999)" /><br />
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" size="20" maxlength="20" required placeholder="exemplo@gmail.com" /><br />
                <label for="cep">Cep:</label>
                <input type="text" id="cep" name="cep" size="20" maxlength="20" required placeholder="Digite seu CEP" /><br />
                <label for="casa">Nùmero da Casa:</label>
                <input type="text" id="casa" name="casa" size="20" maxlength="20" required placeholder="Digite o número da sua casa ex: N°00" /><br />
                <button type="submit">Próximo</button>
            </form>
        </section>
    </main>
    <footer>
        <p>Urban Shop - 2025</p>
    </footer>
</body>
</html>
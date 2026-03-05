<?php

function loginMenu()
{
    global $usuarios;
    limpaTela();

    echo "Por favor, realize o login!\n";
    $email = readline("Email: ");
    $senha = readline("Senha: ");
    $usuarioEncontrado = false;

    foreach ($usuarios as $usuario) {
        if ($email == $usuario['email'] && $senha == $usuario['senha']) {
            echo "Login realizado!\n";
            $usuarioEncontrado = true;
            mainMenu();
        }
    }

    if (!$usuarioEncontrado) {
        echo "Tente novamente\n";
        loginMenu();
    }
}

function cadastrarUsuario()
{
    global $usuarios;

    $novoNome = readline("Digite seu nome: ");
    $novoEmail = readline("Digite seu email: ");
    $novaSenha = readline("Digite sua senha: ");

    $usuarios[] = ["nome" => $novoNome, "email" => $novoEmail, "senha" => $novaSenha];
    echo "Usuário cadastrado com sucesso!\n";
    mainMenu();
}

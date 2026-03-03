<?php

$usuarios = [
    ['nome' => "admin", 'email' => "admin", 'senha' => "1"],
];

$ehLogado = false;

function loginMenu()
{
    global $usuarios;
    global $ehLogado;

    system('clear');
    print_r($usuarios);

    do {
        echo "Por favor, realize o login!\n";
        $email = readline("Email: ");
        $senha = readline("Senha: ");

        foreach ($usuarios as $usuario) {
            if ($email == $usuario["email"] && $senha == $usuario['senha']) {
                $ehLogado = true;
                menu();
            } else {
                loginMenu();
                echo "Tente novamente!\n";
            }
        }
    } while ($ehLogado == false);

}

function menu()
{
    global $ehLogado;

    system("clear");
    echo "Seja bem vindo(a) ao Sistema!\n";
    echo "1 - Cadastrar\n2 - Listar\n3 - Buscar\n4 - Editar\n5 - Remover\n6 - Estatísticas\n7 - Sair\n";
    $escolha = readline("Escolha uma opção: ");
    switch ($escolha) {
        default: {
            echo "Opção inválida!";
            break;
        }
        case 1: {
            cadastrarUsuario();
            break;
        }
        case 2: {
            listarUsuarios();
            break;
        }
        case 3: {
            echo "\nbuscando";
            break;
        }
        case 4: {
            echo "\neditando";
            break;
        }
        case 5: {
            echo "\nremover";
            break;
        }
        case 6: {
            echo "\nestatisticas";
            break;
        }
        case 7: {
            $ehLogado = false;
            loginMenu();
        }
    }
}

function cadastrarUsuario()
{   
    global $usuarios;

    $nome = readline("Digite seu nome: ");
    $email = readline("Digite seu email: ");
    $senha = readline("Digite sua senha: ");

    $usuarios[] = ["nome" => $nome, "email" => $email, "senha" => $senha];
    echo "Usuário cadastrado com sucesso!\n";
    menu();
}

function listarUsuarios(){
    global $usuarios;

    print_r($usuarios);

    echo "1 - Voltar ao menu\n2 - Sair do sistema\n";
    $escolha = readline("Sua escolha: ");

    switch ($escolha){
        case 1: {
            menu();
            break;
        } case 2: {
            loginMenu();
            break;
        } default: {
            echo "Opção inválida";
            listarUsuarios();
        }
    }
    
    
}

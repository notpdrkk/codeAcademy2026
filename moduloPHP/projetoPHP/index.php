<?php

require_once "tasks.php";
require_once "auth.php";
require_once "utils.php";

$usuarios = [
    [
        "email" => "admin",
        "senha" => "123",
    ]
];

$tarefas = [
    [
        "id" => 1,
        "descricao" => "Terminar feature",
        "prioridade" => "alta",
        "prazo" => "7",
        "concluida" => false
    ],
];

loginMenu();
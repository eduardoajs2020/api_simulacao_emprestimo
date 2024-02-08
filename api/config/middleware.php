<?php

// Defina seu middleware de autenticação
function authMiddleware($next) {
    // Verifique se o usuário está autenticado
    if (!isAuthenticated()) {
        // Redirecione ou retorne uma resposta de erro, caso necessário
        header("Location: /login");
        exit;
    }

    // Chame a próxima função/middleware na cadeia
    return $next();
}

// Defina seu middleware de log
function loggerMiddleware($next) {
    // Registre informações de log antes da execução da rota
    log("Antes da execução da rota");

    // Chame a próxima função/middleware na cadeia
    $response = $next();

    // Registre informações de log após a execução da rota
    log("Após a execução da rota");

    // Retorne a resposta da rota
    return $response;
}

// Define sua rota
function handleRequest() {
    // Lógica para tratar a requisição da rota
    echo "Hello, World!";
}

// Crie uma função para encadear os middlewares e executar a rota
function executeMiddlewares($middlewares, $routeHandler) {
    $next = $routeHandler;

    // Percorra os middlewares em ordem reversa
    for ($i = count($middlewares) - 1; $i >= 0; $i--) {
        $next = function () use ($middlewares, $i, $next) {
            return $middlewares[$i]($next);
        };
    }

    // Execute a cadeia de middlewares e a rota final
    return $next();
}

// Defina seus middlewares e execute a rota com os middlewares
$middlewares = [
    'authMiddleware',
    'loggerMiddleware'
];

executeMiddlewares($middlewares, 'handleRequest');

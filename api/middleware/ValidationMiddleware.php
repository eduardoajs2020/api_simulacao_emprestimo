<?php    

// Exemplo de implementação do ValidationMiddleware
function validationMiddleware($next) {
    return function() use ($next) {
        // Faça as validações necessárias nos dados da requisição
        if (!isValidRequest()) {
            // Retorne uma resposta de erro, caso necessário
            return response("Dados inválidos", 400);
        }

        // Chame a próxima função/middleware na cadeia
        return $next();
    };
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
        $next = $middlewares[$i]($next);
    }

    // Execute a cadeia de middlewares e a rota final
    return $next();
}

// Defina seus middlewares e execute a rota com os middlewares
$middlewares = [
    'authMiddleware',
    'validationMiddleware'
];

executeMiddlewares($middlewares, 'handleRequest');





?>
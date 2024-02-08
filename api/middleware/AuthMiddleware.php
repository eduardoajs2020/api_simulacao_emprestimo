<php?

// Exemplo de implementação do AuthMiddleware

function authMiddleware($next) {
    return function() use ($next) {
        // Verifique se o usuário está autenticado
        if (!isAuthenticated()) {
            // Redirecione ou retorne uma resposta de erro, caso necessário
            header("Location: /login");
            exit;
        }

        // Chame a próxima função/middleware na cadeia
        return $next();
    };
}

?>
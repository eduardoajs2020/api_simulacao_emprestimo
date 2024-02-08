<?php

class UserController
{
    public function getAllUsers()
    {
        // Lógica para buscar todos os usuários do banco de dados

        // Exemplo de resposta com dados fictícios
        $users = [
            ['id' => 1, 'name' => 'Usuário 1', 'email' => 'usuario1@example.com'],
            ['id' => 2, 'name' => 'Usuário 2', 'email' => 'usuario2@example.com'],
            ['id' => 3, 'name' => 'Usuário 3', 'email' => 'usuario3@example.com'],
        ];

        // Retorne os usuários como JSON
        header('Content-Type: application/json');
        echo json_encode($users);
    }

    public function getUserById($id)
    {
        // Lógica para buscar um usuário específico pelo ID no banco de dados

        // Exemplo de resposta com dados fictícios
        $user = ['id' => $id, 'name' => 'Usuário '.$id, 'email' => 'usuario'.$id.'@example.com'];

        // Verifique se o usuário foi encontrado
        if ($user) {
            // Retorne o usuário como JSON
            header('Content-Type: application/json');
            echo json_encode($user);
        } else {
            // Usuário não encontrado, retorne uma resposta de erro
            header('HTTP/1.0 404 Not Found');
            echo 'Usuário não encontrado';
        }
    }

    public function createUser()
    {
        // Lógica para criar um novo usuário com os dados recebidos na requisição

        // Exemplo de resposta com dados fictícios
        $newUser = ['id' => 4, 'name' => 'Novo Usuário', 'email' => 'novousuario@example.com'];

        // Retorne o novo usuário criado como JSON
        header('Content-Type: application/json');
        echo json_encode($newUser);
    }

    public function updateUser($id)
    {
        // Lógica para atualizar um usuário existente com os dados recebidos na requisição

        // Exemplo de resposta com dados fictícios
        $updatedUser = ['id' => $id, 'name' => 'Usuário '.$id.' Atualizado', 'email' => 'usuario'.$id.'@example.com'];

        // Retorne o usuário atualizado como JSON
        header('Content-Type: application/json');
        echo json_encode($updatedUser);
    }

    public function deleteUser($id)
    {
        // Lógica para excluir um usuário pelo ID do banco de dados

        // Exemplo de resposta com dados fictícios
        $deletedUser = ['id' => $id, 'name' => 'Usuário '.$id.' Excluído', 'email' => 'usuario'.$id.'@example.com'];

        // Retorne o usuário excluído como JSON
        header('Content-Type: application/json');
        echo json_encode($deletedUser);
    }
}

?>

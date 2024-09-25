<?php

    require_once("globals.php");
    require_once("db.php");
    require_once("models/User.php");
    require_once("models/Message.php");
    require_once("dao/UserDao.php");

    $message = new Message($BASE_URL);

    $userDAO = new UserDAO($conn, $BASE_URL);

    // Resgata o tipo do formulario
    $type = filter_input(INPUT_POST, "type");

    //Verificação do tipo formulario
    if($type === "register") {

        $name = filter_input(INPUT_POST, "name");
        $lastname = filter_input(INPUT_POST, "lastname");
        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");
        $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

        // Verificando dados minimos
        if($name && $lastname && $email && $password) {

            // Verificar se as senhas são iguais
            if($password === $confirmpassword) {

                // Verificar se o e-mail já existe
                if($userDAO->findByEmail($email) === false) {

                    $user = new User();

                    // Criação de token e senha
                    $userToken = $user->generateToken();
                    $finalPassword = $user->generatePassword($password);

                    $user->name = $name;
                    $user->lastname = $lastname;
                    $user->email = $email;
                    $user->password = $finalPassword;
                    $user->token = $userToken;

                    $auth = true;

                    $userDAO->create($user, $auth);

                } else {
                    // Enviar uma mensagem de erro, usuário já existe
                    $message->setMessage("Usuário já cadastrado, tente outro e-mail", "error", "back");
                }

            } else {
                // Enviar uma mensagem de erro, de senhas não batem
                $message->setMessage("As senhas não são iguais", "error", "back");
            }

        } else {
            // Enviar uma mensagem de erro, dados faltantes
            $message->setMessage("Por favor, preencha todos os campos.", "error", "back");
        }
    
    } else if ($type === "login") {

        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");

        // Tenta Autenticar usuário
        if($userDAO->authenticateUser($email, $password)) {

            $message->setMessage("Seja Bem Vindo!", "success", "editprofile.php");

        // Redireciona Usuário, caso não autentique
        } else {

            $message->setMessage("Usuário e/ou senha incorretos", "error", "back");

        } 
    } else {
        $message->setMessage("Informações Invalidas", "error", "index.php");
    }
?>
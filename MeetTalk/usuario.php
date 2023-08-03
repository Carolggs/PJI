<?php

session_start();

//AQUI! 
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once "model/Usuario.php";
require_once "configs/utils.php";
require_once "configs/methods.php";

if (isMetodo("POST")) {

    $botao= $_POST["botao"];

    // Verifica se o usuário já está logado. 
    if (parametrosValidos($_SESSION,["email"])) {
        responder(400, ["status" => "Voce ja esta logado!"]);
    }


    if ($botao == "login"){
        
        if ($_POST["email"]!= "" and $_POST["senha"]!=""){

            $email= $_POST["email"];
            $senha= $_POST["senha"];


            if (!Usuario::existeUsuarioEmail($email) ){
                responder(400, ["status" => "Usuario nao existe"]);
            }
            $resultado = Usuario::login($email, $senha);
            
            if (!$resultado ) {
                // Caso usuário não exista ou a senha esteja errada, a função retorna false e acabará aqui.
                responder(401, ["status" => "Usuario ou senha invalidos $email, $senha" ]);
            }else{
                $_SESSION["email"] = $resultado;

                print_r($_SESSION["email"]);

                //echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>'; 
    
                responder(200, ["status" => "Seja bem-vindo!"]);

                //echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>'; 
                header("Location: Pagina.php");
                die();
        
            }
           
            
        }
        
            
    
    }else{
        
        
            echo "entrou aq";
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $nome= $_POST["nome"];
            $genero= $_POST["genero"];
            $data_nascimento= $_POST["data_nascimento"];
            $esporte= $_POST["esporte"];
            $estilo_musical= $_POST["estilo_musical"];
            $maior_qualidade= $_POST["maior_qualidade"];
            $maior_defeito= $_POST["maior_defeito"];
            $genero_literario= $_POST["genero_literario"];
            $genero_filme= $_POST["genero_filme"];
            $status_relacionamento= $_POST["status_relacionamento"];
            $religiao= $_POST["religiao"];
            $sexualidade= $_POST["sexualidade"];
            $pais= $_POST["pais"];



        if (!Usuario::existeUsuarioEmail($email)) {

            echo "entrou no cadastro";
            
            // A função User::cadastrar já cadastra a senha criptografada no banco de dados. Ver arquivo "model/User.php".
            if (Usuario::cadastrar($email, $senha, $nome, $genero, $data_nascimento, $esporte, $estilo_musical, $maior_qualidade, $maior_defeito, $genero_literario, $genero_filme, $status_relacionamento, $religiao, $sexualidade, $pais)) {
                $msg = ["status" => "Cadastro de usuário com sucesso!"];

                responder(201, $msg);
            } else {
                $msg = ["status" => "Cadastro não pode ser realizado!"];
                responder(500, $msg);
            }
        } else {
            $msg = ["status" => "Usuário já existe"];
            responder(400, $msg);
        }
    }
}
    
    
    

if (isMetodo("GET")) {

    if (parametrosValidos($_GET, ["logout"])) {
        session_destroy();
        responder(200, ["status" => "Logout efetuado com sucesso"]);
    }

    $resultado = Usuario::getUsuarios();
    responder(200, $resultado);
}


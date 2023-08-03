<?php
require_once __DIR__ . "/../configs/BancoDados.php";

class Usuario
{

    public static function getUsuarios()
    {
        try {
            $conexao = Conexao::getConexao();
            $stmt = $conexao->prepare("SELECT * FROM usuario");
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public static function cadastrar($email, $senha, $nome, $genero, $data_nascimento, $esporte, $estilo_musical, $maior_qualidade, $maior_defeito, $genero_literario, $genero_filme, $status_relacionamento, $religiao, $sexualidade, $pais)
    {
        try {
            $conexao = Conexao::getConexao();
            $stmt = $conexao->prepare("INSERT INTO usuario (email, senha, nome, genero, data_nascimento, esporte, estilo_musical, maior_qualidade, maior_defeito, genero_literario, genero_filme, status_relacionamento, religiao, sexualidade, pais ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,? )");

            $senha = password_hash($senha, PASSWORD_BCRYPT);
            $stmt->execute([$email, $senha, $nome, $genero, $data_nascimento, $esporte, $estilo_musical, $maior_qualidade, $maior_defeito, $genero_literario, $genero_filme, $status_relacionamento, $religiao, $sexualidade, $pais]);

            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public static function existeUsuarioEmail($email)
    {
        try {
            $conexao = Conexao::getConexao();
            $stmt = $conexao->prepare("SELECT COUNT(*) FROM usuario WHERE email = ?");
            $stmt->execute([$email]);
            print_r( $stmt->execute([$email]));

            if ($stmt->fetchColumn() > 0) {
                return true;
            } else {
                echo "falso";
                return false;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }



    public static function login($email, $senha)
    {
        try {
            $conexao = Conexao::getConexao();
            $stmt = $conexao->prepare("SELECT * FROM usuario WHERE email = ? and senha= ?");
            $stmt->execute([$email, $senha]);
            $resultado = $stmt->fetchAll();
           //print_r($resultado[0]["senha"]) ;
            

            if (count($resultado) != 1) {
               // echo "echi " . count($resultado);
                return false;
            }else{
                return $resultado[0]["email"];
            }


            /* if (password_verify($senha, $resultado[0]["senha"])) {
                echo "hei";
                return $resultado[0]["email"]; //?
            } else {
                //echo "hello";
                return False;
            } */
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }
}
<?php

    $conn = new MySQLi(HOST, USER, PASS, BASE);

    switch($_REQUEST["acao"]){
        case 'cadastrar':
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            $sql = "INSERT INTO users (name, email, password) VALUES ('{$name}', '{$email}', '{$password}')";

            $res = $conn->query($sql);
            if($res=true){
                print "<script>alert('Usuário foi cadastrado com sucesso')</script>";
                print "<script>location.href='?page=listar?';</script>";
            } else{
                print "Aconteceu um erro. Tente novamente.";
            }

            break;

        case 'editar':
            break;

        case 'excluir':
            break;
    }
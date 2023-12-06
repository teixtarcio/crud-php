<h1>Listar usuários</h1>
<?php
    $conn = new MySQLi(HOST, USER, PASS, BASE);

    $sql = "SELECT * FROM users";
    $res = $conn->query($sql);

    $qtd = $res->num_rows;
    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";

        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>E-mail</th>";
        print "<th>Senha</th>";
        print "<th>Ações</th>";
        print "</tr>";

        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->name."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->password."</td>";
            print "<td> 
            <button onClick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
            <button class='btn btn-danger'>Excluir</button>

            </td>";
            print "</tr>";

        }
        print "</table>";

    }else{
        print "Nenhum resultado foi encontrado.";
    }
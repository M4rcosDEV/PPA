<?php

include_once 'aluno.php';

if (isset($_POST['tipo'])) {

    $tipo = $_POST['tipo'];

    if($tipo === 'cadastraraluno'){
        cadastrar();
    }else if($tipo === 'atualizaraluno'){
        #atualizar aluno
    }
}

function cadastrar(){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $nascimento = $_POST['nascimento'];
    $sexo = $_POST['sexo'];
    $curso = $_POST['curso'];

    $aluno = new Aluno($nome, $email, $telefone, $nascimento, $sexo, $curso);

    $aluno->inserir();

    header('Location:index.php');
}

function getAlunos(){
    try{

        $banco = new Banco();
        $conexao = $banco->conectar();
        $stmt = $conexao->prepare("select * from aluno");
        $stmt->execute();
        // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $alunos = array();
        foreach ($stmt->fetchAll() as $indice => $conteudo) {
            $aluno = new Aluno(
                $value['nome'],
                $value['email'],
                $value['telefone'],
                $value['nascimento'],
                $value['sexo'],
                $value['curso']
            );
        }
        array_push($alunos, $aluno);

    }catch (PDOException $e) {

        echo "Erro" . $e->getMessage();

    }
}

?>
<?php

include_once 'banco.php';

class Aluno{

    public $id;
    public $nome;
    public $email;
    public $telefone;
    public $nascimento;
    public $sexo;
    public $curso;

    function __construct($nome, $email, $telefone, $nascimento, $sexo, $curso){

        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->nascimento = $nascimento;
        $this->sexo = $sexo;
        $this->curso = $curso;
    }
    
    function inserir(){

        $banco = new Banco();
        $conexao = $banco->conectar();

        try{

            $stmt = $conexao->prepare("insert into aluno (nome, email, telefone, sexo, id_curso) values (:nome, :email, :telefone, :sexo, :id_curso)");

            $stmt->bindParam(':nome', $this -> nome);
            $stmt->bindParam(':email', $this -> email);
            $stmt->bindParam(':telefone', $this -> telefone);
            // $stmt -> bindParam(':nascimento', $this -> nascimento -> format('Y/m/d'));
            $stmt->bindParam(':sexo', $this -> sexo);
            $stmt->bindParam(':id_curso', $this -> curso);

            $stmt->execute();

        }catch (PDOException $e) {

            echo "Inserção não efetuada" . $e;
        }
        
    }

}

?>
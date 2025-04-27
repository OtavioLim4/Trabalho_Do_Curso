<?php

class Banco{

    private $conexao;

    public function __construct(){
        try {
            $this->conexao = new PDO('mysql:host=localhost;dbname=loja', 'root', '');
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }//Fim do construtor

    public function listarPessoas($busca){
        try {
            $instancia = $this->conexao->
            query('SELECT * FROM pessoas WHERE nome LIKE "%'.$busca.'%" ORDER BY id DESC');
            $pessoas = $instancia->fetchAll(PDO::FETCH_ASSOC);
            return $pessoas;
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

    public function listarDicas($busca){
        try {
            $instancia = $this->conexao->
            query('SELECT * FROM dicas WHERE descriçao LIKE "%'.$busca.'%" ORDER BY id DESC');
            $dicas = $instancia->fetchAll(PDO::FETCH_ASSOC);
            return $dicas;
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

    public function listarEquipamentos($busca){
        try {
            $instancia = $this->conexao->
            query('SELECT * FROM equipamentos WHERE nome LIKE "%'.$busca.'%" ORDER BY id DESC');
            $nome = $instancia->fetchAll(PDO::FETCH_ASSOC);
            return $nome;
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

 
    public function listarUsuarios(){
        try {
            $instancia = $this->conexao->query('SELECT * FROM users');
            $usuarios = $instancia->fetchAll(PDO::FETCH_ASSOC);
            return $usuarios;
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }



    public function pegarContatos($id){
        try {
            $instancia = $this->conexao->
            query('SELECT * FROM contatos WHERE pessoas_id = '.$id);
            $contatos = $instancia->fetchAll(PDO::FETCH_ASSOC);
            return $contatos;
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

    public function pegarPessoa($id){
        try {
            $instancia = $this->conexao->
            query('SELECT * FROM pessoas WHERE id = '.$id);
            $pessoas = $instancia->fetchAll(PDO::FETCH_ASSOC);
            return $pessoas[0];
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

    public function pegarUsuarios($id){
        try {
            $instancia = $this->conexao->
            query('SELECT * FROM users WHERE id = '.$id);
            $users = $instancia->fetchAll(PDO::FETCH_ASSOC);
            return $users[0];
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

    public function pegarDicas($id){
        try {
            $instancia = $this->conexao->
            query('SELECT * FROM dicas WHERE id = '.$id);
            $dicas = $instancia->fetchAll(PDO::FETCH_ASSOC);
            return $dicas[0];
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

    public function pegarEquipamento($id){
        try {
            $instancia = $this->conexao->
            query('SELECT * FROM equipamentos WHERE id = '.$id);
            $nome = $instancia->fetchAll(PDO::FETCH_ASSOC);
            return $nome[0];
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

 



    public function cadastrarPessoa($nome, $email){
        try{
            $intancia = $this->conexao
                ->prepare("INSERT INTO pessoas (nome, email) VALUES (:nome, :email)");
            $intancia->bindParam(':nome',$nome);
            $intancia->bindParam(':email', $email);
            $intancia->execute();
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }



    public function cadastrarUsuarios($username, $password){
        try{
            $intancia = $this->conexao
                ->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
            $intancia->bindParam(':username',$username);
            $intancia->bindParam(':password', $password);
            $intancia->execute();
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

    public function cadastrarDicas($descriçao, $auto){
        try{
            $intancia = $this->conexao
                ->prepare("INSERT INTO dicas (descriçao, auto) VALUES (:descriçao, :auto)");
            $intancia->bindParam(':descriçao',$descriçao);
            $intancia->bindParam(':auto', $auto);
            $intancia->execute();
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

    public function cadastrarEquipamento($nome, $valor){
        try{
            $intancia = $this->conexao
                ->prepare("INSERT INTO equipamentos (nome, valor) VALUES (:nome, :valor)");
            $intancia->bindParam(':nome',$nome);
            $intancia->bindParam(':valor', $valor);
            $intancia->execute();
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

    public function cadastrarContato($telefone, $id){
        try{
            $intancia = $this->conexao
                ->prepare("INSERT INTO contatos (telefone, pessoas_id) VALUES (:telefone, :pessoas_id)");
            $intancia->bindParam(':telefone',$telefone);
            $intancia->bindParam(':pessoas_id', $id);
            $intancia->execute();

        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

    public function excluirPessoa($id){
        try{
            $instancia = $this->conexao->prepare("DELETE FROM pessoas WHERE id = :id");
            $instancia->bindParam(':id', $id);
            $instancia->execute();
        }catch (PDOException $ex){
            $ex->getMessage();
        }
    }

    public function excluirEquipamento($id){
        try{
            $instancia = $this->conexao->prepare("DELETE FROM equipamentos WHERE id = :id");
            $instancia->bindParam(':id', $id);
            $instancia->execute();
        }catch (PDOException $ex){
            $ex->getMessage();
        }
    }

    public function excluirUsuarios($id){
        try{
            $instancia = $this->conexao->prepare("DELETE FROM users WHERE id = :id");
            $instancia->bindParam(':id', $id);
            $instancia->execute();
        }catch (PDOException $ex){
            $ex->getMessage();
        }
    }

  

    public function excluirContato($id){
        try{
            $instancia = $this->conexao->prepare("DELETE FROM contatos WHERE id = :id");
            $instancia->bindParam(':id', $id);
            $instancia->execute();
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

    public function excluirDicas($id){
        try{
            $instancia = $this->conexao->prepare("DELETE FROM dicas WHERE id = :id");
            $instancia->bindParam(':id', $id);
            $instancia->execute();
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

    public function editarPessoa($id, $nome, $email){
        try{
            $instancia = $this->conexao->prepare("UPDATE pessoas SET nome = :nome, email = :email WHERE id = :id");
            $instancia->bindParam(':nome', $nome);
            $instancia->bindParam(':email', $email);
            $instancia->bindParam(':id', $id);
            $instancia->execute();
        }catch (PDOException $ex){
            $ex->getMessage();
        }
    }

    public function editarUsuarios($id, $username, $password){
        try{
            $instancia = $this->conexao->prepare("UPDATE users SET username = :username, password = :password WHERE id = :id");
            $instancia->bindParam(':username', $username);
            $instancia->bindParam(':password', $password);
            $instancia->bindParam(':id', $id);
            $instancia->execute();
        }catch (PDOException $ex){
            $ex->getMessage();
        }
    }

    public function editarDicass($id, $descriçao, $auto){
        try{
            $instancia = $this->conexao->prepare("UPDATE dicas SET descriçao = :descriçao, auto = :auto WHERE id = :id");
            $instancia->bindParam(':descriçao', $descriçao);
            $instancia->bindParam(':auto', $auto);
            $instancia->bindParam(':id', $id);
            $instancia->execute();
        }catch (PDOException $ex){
            $ex->getMessage();
        }
    }

    public function editarEquipamento($id, $nome, $valor){
        try{
            $instancia = $this->conexao->prepare("UPDATE equipamentos SET nome = :nome, valor = :valor WHERE id = :id");
            $instancia->bindParam(':nome', $nome);
            $instancia->bindParam(':valor', $valor);
            $instancia->bindParam(':id', $id);
            $instancia->execute();
        }catch (PDOException $ex){
            $ex->getMessage();
        }
    }



}//Fim da Classe

?>

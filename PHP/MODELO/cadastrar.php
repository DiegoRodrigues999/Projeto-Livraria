<?php
    namespace php\modelo;

    class Usuario{
    private string $nome;
    private string $endereco;
    private string $telefone;
    private string $dataDeNascimento;
    private string $login;
    private string $senha;

    public function __construct(string $nome, 
                                string $endereco, 
                                string $telefone, string $dataDeNascimento, 
                                string $login, 
                                string $senha){
        this->nome = $nome;
        this->endereco = $endereco;
        this->telefone = $telefone;
        this->dataDeNascimento = $dataDeNascimento;
        this->login = $login;
        this->senha = $senha;
            
    }//fim do construct

    public function getNome():string{
        return $this-> nome;
    }

    public function getEndereco():string{
        return $this->endereco;
    }

    public function getTelefone():string{
        return $this->telefone;
    }

    public function getDataDeNascimento():string{
        return $this->dataDeNascimento;
    }

    public function getLogin():string{
        return $this->login;
    }

    public function getSenha():string{
        return $this->senha;
    }


    public function setNome(string $nome):void{
        this->nome = $nome;
    }

    public function setEndereco(string $endereco):void{
        return $this->endereco = $endereco;
    }

    public function setTelefone(string $telefone):void{
        return $this->telefone = $telefone;
    }

    public function setDataDeNascimento(string $dataDeNascimento):void{
        return $this->dataDeNascimento = $dataDeNascimento;
    }

    public function setLogin(string $login):void{
        return $this->login = $login;
    }
        
    public function setSenha(string $senha):void{
        return $this->senha = $senha; 
    }
    
    public function imprimir():string
    {
        return "<br> Nome: ". $this->getNome().
                "<br> endereço: ". $this->getEndereco().
                "<br> telefone: ". $this->getTelefone().
                "<br> Data De Nascimento: ". $this->getDataDeNascimento().
                "<br> login". $this->getLogin().
                "<br> senha". $this->getSenha();
    }

    public function login():string{
        return "<br> faça seu Login <br>".
               "<br> Email".$this->getLogin().
               "<br> Senha".$this->getSenha().
    }

    public function catalogo():int{
        return "<br><br> -- Catálogo de livros -- <br><br>".
                "1. A volta dos que não foram".
                "2. Dicas de como chegar lá".
                "3. logica de Programação".
                "4. Redes de Computadores".
                "5. Harry Potter e a Pedra Filosofal";
        }
    }//fim da Class 
?>
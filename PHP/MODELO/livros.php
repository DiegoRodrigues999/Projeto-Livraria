<?php
    namespace php\modelo;

    class Livros{
        private string $livro1;
        private string $livro2;
        private string $livro3;
        private string $livro4;
        private string $livro5;
        private string $livro6;
        private string $livro7;

        public function __construct (string $livro1, string $livro2, string $livro3, string $livro4, string $livro5, string $livro6, string $livro7){
            $this->livro1 = $livro1;
            $this->livro2 = $livro2;
            $this->livro3 = $livro3;
            $this->livro4 = $livro4;
            $this->livro5 = $livro5;
            $this->livro6 = $livro6;
            $this->livro7 = $livro7;
        }

        public function getLivro1():string
        {
            return $this->livro1;
        }

        public function getLivro2():string
        {
            return $this->livro2;
        }

        public function getLivro3():string
        {
            return $this->livro3;
        }

        public function getLivro4():string
        {
            return $this->livro4;
        }

        public function getLivro5():string
        {
            return $this->livro5;
        }

        public function getLivro6():string
        {
            return $this->livro6;
        }

        public function getLivro7():string
        {
            return $this->livro7;
        }

        public function livros()
        {
            return "<br> Estoque dos Livros;".
                   "<br>Harry Potter e a Pedra Filosofal: ".$this->getLivro1().
                   "<br>Harry Potter e a Câmara Secreta: ".$this->getLivro2().
                   "<br>Harry Potter e o Prisioneiro de Azkaban: ".$this->getLivro3().
                   "<br>Harry Potter e o Cálice de Fogo: ".$this->getLivro4().
                   "<br>Harry Potter e a Ordem da Fenix: ".$this->getLivro5().
                   "<br>Harry Potter e o Enigma Prícipe: ".$this->getLivro6().
                   "<br>Harry Potter e as Reliquias da Morte: ".$this->getLivro7();
        }
    }
?>
<?php
    namespace php\modelo;//Definir o local do projeto 
    include 'cadastrar.php';
    include 'livros.php';

    $cadastrar = new Usuario("Diego", "Rua tekomo nakama","119945454","22/10/2004","diegoro@email.com","*******");//instanciação 

    $livro1 = new Livros("655", "454", "545", "455", "452", "554", "545");

    echo $cadastrar -> login();
    echo "<br>";
    echo $cadastrar -> cadastro();
    echo "<br>";
    echo $livro1 -> livros();                                                                           
?>
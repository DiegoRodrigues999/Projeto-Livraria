<?php
    namespace php\modelo;//Definir o local do projeto 
    include 'usuario.php';

    $usuario = new Usuario("Diego", "Rua tekomo nakama","119945454","22/10/2004","diegoro@email.com","*******");//intenciando

    echo $usuario -> login();
    echo "<br>";
    echo $usuario -> cadastro();
                                                                                        
?>
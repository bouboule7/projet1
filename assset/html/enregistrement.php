<?php
    $_POST['age']= (int)$_POST['age'];
    //htmlspecialchars($_POST['nom']);

    //test de connexion au base de donner
    try
    {
        $base=new PDO('mysql:host=localhost;dbname=testsql','root','');
    }
    catch(Exception $e)  //en cas d erreur
    {
        die('Erreur:'.$e->getMessage());
    }
    $repo=$base->prepare('INSERT INTO bank(nom,prenom,age,sexe,	datenaissance) VALUES (?,?,?,?,?)');
    $repo->execute( array ($_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['sexe'],$_POST['date']));
    $repo->execute('INSERT INTO bank(inscription) VALUES (NOW()) ');
    header('Location:enregistrement.html')
?>
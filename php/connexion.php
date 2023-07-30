<?php 
session_start();
// requipère  une fois le fichier config.php
require_once 'config.php';

// si j'entre l'email et le mots de passe en POST
if(isset($_POST['email']) && isset($_POST['password']))
{
    // poure eviter la faille xss 
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // je verifie que l'utilisateur et bien inscrit dans la base de donnée

    $check = $bdd->prepare('SELECT email, password FROM Users WHERE email = ?'); 
    $check->execute(array($email));
    // on stock les donner dans data
    $data = $check->fetch();
    // verifie si elle existe dans la valeur rowCount
    $row = $check->rowCount();
// si la personne existe dans row alors row est egale a 1 
    if($row == 1)
    {
// verifie que l'adresse email et bien valide avec FILTER_VALIDATE_EMAIL

        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            // je hash le mdp
            $password = hash('sha256',$password);
            // verification du mdp
            if($data['password']  === $password)
            {
                $_SESSION['user'] = $data[]
            }else header('location:index.php?login_err=password');

        }else header('location:index.php?login_err=email');
    }else header('location:index.php?login_err=already');
    // sinon on fais un header location pour rediriger avec une login err=email

}else header('location:index.php');
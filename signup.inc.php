<?php 

if(isset($_POST["submit"])){

    $fna =$_POST["fna"];
    $lna =$_POST["lna"];
    $email =$_POST["email"];
    $una =$_POST["una"];
    $pwd =$_POST["pwd"];

    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup=new SignupContr($fna,$lna,$email,$una,$pwd);

    $signup->signupUser();

    header("location: ../index.php?error=none");


}
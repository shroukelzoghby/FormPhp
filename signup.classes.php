<?php

class Signup extends Dbh{


    protected function setUser($una,$pwd,$email,$fna,$lna){
        $stmt = $this->connect()->prepare('INSERT INTO users(users_una,users_pwd,users_email,users_fna,users_lna) VALUES (?,?,?,?,?);');
        $hashedPwd=password_hash($pwd,PASSWORD_DEFAULT);


        if(!$stmt->execute(array($una,$hashedPwd,$email,$fna,$lna))){
            $stmt=null;
            header("location: ../index.php?error=stmtfailed");
            exit();

        }
        $stmt=null;
    }



    protected function checkUser($una,$email){
        $stmt = $this->connect()->prepare('SELECT users_una FROM users WHERE users_una=? OR users_email=?;');
        if(!$stmt->execute(array($una,$email))){
            $stmt=null;
            header("location: ../index.php?error=stmtfailed");
            exit();

        }
        $resultCheck;
        if($stmt->rowCount() > 0){
            $resultCheck=false;

        }else{
            $resultCheck=true;  
        }
        return $resultCheck;

    }

}
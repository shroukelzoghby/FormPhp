<?php 
class SignupContr extends Signup{
    private $fna;
    private $lna;
    private $email;
    private $una;
    private $pwd;

    public function __construct($fna,$lna,$email,$una,$pwd){

        $this->fna=$fna;
        $this->lna=$lna;
        $this->email=$email;
        $this->una=$una;
        $this->pwd=$pwd;

    }

    public function signupUser(){
        if($this->emptyInput() == false){
            header("location: ../index.php?error=emptyinput");
            exit();

        }
        if($this->invaliduna() == false){
            header("location: ../index.php?error=username");
            exit();

        }
        if($this->invalidEmail() == false){
            header("location: ../index.php?error=email");
            exit();

        }
        if($this->unaTakenCheck() == false){
            header("location: ../index.php?error=useremailtaken");
            exit();

        }
        $this->setUser($this->una,$this->pwd,$this->email);
        
        
    }

    private function emptyInput(){
        $result;
        if(empty($this->fna) || empty($this->lna) || empty($this->email) || empty($this->una) || empty($this->pwd)){
            $result=false;

        }
        else{
            $result=true;
        }
        return $result;
        

    }

    private function invaliduna(){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->una)){
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
    }

    private function invalidEmail(){
        $result;
        if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
    }

    private function unaTakenCheck(){
        $result;
        if(!$this->checkUser($this->una,$this->email)){
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
    }

}
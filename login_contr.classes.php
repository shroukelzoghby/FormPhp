<?php 
class loginContr extends Login{
    
    private $email;
    private $pwd;

    public function __construct($emai,$pwd){

        
        $this->email=$email;
        $this->pwd=$pwd;

    }

    public function loginUser(){
        if($this->emptyInput() == false){
            header("location: ../index.php?error=emptyinput");
            exit();

        }
        $this->getUser($this->pwd,$this->email);
        
        
    }

    private function emptyInput(){
        $result;
        if( empty($this->email) || empty($this->pwd)){
            $result=false;

        }
        else{
            $result=true;
        }
        return $result;
        

    }

   

}
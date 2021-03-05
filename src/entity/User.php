<?php 

class User 
{
    private $username; 
    private $firstName; 
    private $lastName; 
    private $phoneNumber; 
    private $email;
    private $password;
    private $role;

    public function __construct($u, $fn, $ln, $pn, $e, $p, $r)
    {
        $this->username = $u;
        $this->firstName = $fn;
        $this->lastName = $ln;
        $this->phoneNumber = $pn;
        $this->email = $e;
        $this->password = $p;
        $this->role = $r;
    }
}
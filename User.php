<?php

class User
{
    public string $fname;
    public string $lname;
    public int $age;
    public string $addresse;
    public string $email;
    public string $password;


//    public function __construct(string $parafname, string $paralname, int $paraage, string $paraaddresse, string $paraemail,string $parapassword)
//    {
//        $this->fname = $parafname;
//        $this->lname = $paralname;
//        $this->age = $paraage;
//        $this->addresse = $paraaddresse;
//        $this->email = $paraemail;
//        $this->password = $parapassword;
//
//    }
    /**
     * Baut einen User
     * @param string $fname Vorname
     * @param string $lname
     * @param int $age
     * @param string $addresse
     * @param string $email
     * @param string $password
     * @return User
     */
    public function __construct(string $fname, string $lname, int $age, string $addresse, string $email, string $password)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
        $this->addresse = $addresse;
        $this->email = $email;
        $this->password = $password;
    }


    public function login(string $email, string $pw): bool
    {
        return true;
    }

    public function buy(string $item): bool
    {
        return true;
    }

    public function setEmail(string $email):void
    {
        $this->email = $email;

    }

    public function setPassword(string $pw):void
    {
        return;
    }

    public function sayHallo():void
    {
        echo "Hallo $this->fname";
    }

}

$bob = new User("Bob","Bobson",32,"Bobstr. 3", "Bob@bob.de","Bob123");
$alice = new User("Ailce", "Aliceson",32,"Alicestr. 5", "Ailce@alice.de",'Ailce123');

//$bob->fname = "Bob";
//$bob->lname = "Bobson";
//$bob->age = 32;
//$bob->addresse = "Bobstr. 42";
//$bob->email = "Bob@bobson.bob";
//$bob->password = "Bob123";


$bob->sayHallo();
$alice->sayHallo();
$bob->setEmail("bob@google.de");
echo $bob->email;
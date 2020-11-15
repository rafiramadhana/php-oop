<?php

    class User {

        public $username;
        private $email;

        public function __construct($username, $email)
        {
            $this->username = $username;
            $this->email = $email;    
        }

        public function addFriend() 
        {
            $this->username;
            return "$this->username ($this->email) added a new friend!";
        }

    }

    $userOne = new User('maria', 'maria@tnn.co.uk');
    $userTwo = new User('thomas', 'thomas@tnn.co.uk');

    // this will throw error because we are accessing a private variable
    // echo $userOne->email . '<br>';
    // echo $userTwo->email . '<br>';

    // this will not throw error
    echo $userOne->addFriend();

?>

<html lang="en">
<head>
    <title>PHP Tutorial</title>
</head>
<body>
    
</body>
</html>
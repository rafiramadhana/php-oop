<?php

    class User {

        public $username;
        public $email;

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

    echo $userOne->username . '<br>';
    echo $userOne->email . '<br>';
    echo $userOne->addFriend() . '<br>';

    echo $userTwo->username . '<br>';
    echo $userTwo->email . '<br>';
    echo $userTwo->addFriend() . '<br>';

?>

<html lang="en">
<head>
    <title>PHP Tutorial</title>
</head>
<body>
    
</body>
</html>
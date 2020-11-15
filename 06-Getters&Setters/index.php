<?php

    class User {

        public $username;
        private $email;

        public function __construct($username, $email) {
            $this->username = $username;
            $this->email = $email;    
        }

        public function addFriend() {
            return "$this->email added a new friend!";
        }

        // getters
        public function getEmail() {
            return $this->email;
        }

        // setters
        public function setEmail($email) {
            if(strpos($email, '@') > -1) {
                $this->email = $email;
            }
        }

    }

    $userOne = new User('maria', 'maria@tnn.co.uk');
    $userTwo = new User('thomas', 'thomas@tnn.co.uk');

    $userOne->setEmail('yandere@tnn.co.uk');

    echo $userOne->getEmail() . '<br>';
    echo $userTwo->getEmail() . '<br>';

?>

<html lang="en">
<head>
    <title>PHP Tutorial</title>
</head>
<body>
    
</body>
</html>
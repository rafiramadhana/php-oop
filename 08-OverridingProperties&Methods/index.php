<?php

    class User {

        public $username;
        private $email;
        public $role = "member";

        public function __construct($username, $email) {
            $this->username = $username;
            $this->email = $email;    
        }

        public function addFriend() {
            return "$this->email added a new friend!";
        }

        public function sendMessage() {
            return "$this->email sent a message.";
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

    class AdminUser extends User {
        
        public $level;
        // override property
        public $role;

        public function __construct($username, $email, $level) {
            $this->level = $level;
            parent::__construct($username, $email);
        }

        public function sendMessage() {
            // this will misbehave because we don't have access to email
            return "admin $this->email sent a message.";
        }
        
    }

    $userOne = new User('maria', 'maria@tnn.co.uk');
    $userTwo = new User('thomas', 'thomas@tnn.co.uk');
    $userThree = new AdminUser('rae', 'rae@tnn.co.uk', '3');

    echo $userOne->role . "<br>";
    echo $userThree->role . "<br>";

    echo $userOne->sendMessage() . "<br>";
    echo $userThree->sendMessage() . "<br>";

?>

<html lang="en">
<head>
    <title>PHP Tutorial</title>
</head>
<body>
    
</body>
</html>
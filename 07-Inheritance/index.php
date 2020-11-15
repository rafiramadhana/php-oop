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

    class AdminUser extends User {
        
        public $level;

        public function __construct($username, $email, $level) {
            $this->level = $level;
            parent::__construct($username, $email);
        }
        
    }

    $userOne = new User('maria', 'maria@tnn.co.uk');
    $userTwo = new User('thomas', 'thomas@tnn.co.uk');
    $userThree = new AdminUser('rae', 'rae@tnn.co.uk', '3');

    echo $userThree->username . '<br>';
    echo $userThree->getEmail() . '<br>';
    echo $userThree->level . '<br>';

?>

<html lang="en">
<head>
    <title>PHP Tutorial</title>
</head>
<body>
    
</body>
</html>
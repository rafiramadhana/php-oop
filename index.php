<?php

    class User {

        public $username = 'ryu';
        public $email = 'ryu@tnn.co.uk';

        public function addFriend() {
            $this->username;
            return "$this->username ($this->email) added a new friend!";
        }

    }

    // instantiating a.k.a. creating a new instance
    $userOne = new User();
    $userTwo = new User();

    echo $userOne->username . '<br>';
    echo $userOne->email . '<br>';
    echo $userOne->addFriend() . '<br>';

    $userTwo->username = 'maria';
    $userTwo->email = 'maria@tnn.co.uk';
    echo $userTwo->username . '<br>';
    echo $userTwo->email . '<br>';
    echo $userTwo->addFriend() . '<br>';

    // get available vars and methods
    // print_r(get_class_vars('User'));
    // print_r(get_class_methods('User'))

?>

<html lang="en">
<head>
    <title>PHP Tutorial</title>
</head>
<body>
    
</body>
</html>
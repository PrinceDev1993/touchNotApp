<?php

    $emailAddress = filter_input(INPUT_POST, 'emailAddress');

    if (!empty($emailAddress)) {
        $host = "us-cdbr-east-02.cleardb.com";
        $dbusername = "beb66d7ccb73bd";
        $dbpassword = "3984057c";
        $dbname = "heroku_fef2b94f1c437b6";

        //create a connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()) {
            die('Connect Error ('.mysqli_connect_errno().')' .mysqli_connect_error());
        } 
        else {
            $sql = "INSERT INTO user (email) values ('$emailAddress')";
            if ($conn->query($sql)) {
                echo "Subscription successful !";
            }
            else {
                echo "Error: ".$sql . "<br>". $conn->error;
            }
            $conn->close();
        }
    }
    else {
        echo "Enter correct email address please !";
        die();
    }


?>

<form method="POST" action="sendEmail.php" class="ml-aut ml-4">
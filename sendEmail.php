<?php

    $emailAddress = filter_input(INPUT_POST, 'emailAddress');

    if (!empty($emailAddress)) {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "emailstore";

        //create a connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()) {
            die('Connect Error ('.mysqli_connect_errno().')' .mysqli_connect_error());
        } 
        else {
            $sql = "INSERT INTO clientsemail (EMAIL) values ('$emailAddress')";
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
<?php 
    include "config.php";

    if (isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['email'])){
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        
        $sql = "INSERT INTO client VALUES('35', '$name',  '$lastname','0')";

        $query = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn)){
            header('Location: Clients.php?error=Noob');
            #header('Location: Clients.php');
        }else{
            echo "error";
        }

    }
?>
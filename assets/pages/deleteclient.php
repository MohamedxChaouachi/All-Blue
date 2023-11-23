<?php 
    include "config.php";
    if (isset($_GET['client_id'])){
        $id = $_GET['client_id'];
        $sql = "DELETE FROM client WHERE IdClient = '$id' ";

        $query = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn)){
            header('Location: Clients.php');
        }else{
            echo "error delete";
        }
    }
?>
<?php 
    include "config.php";
    
    $query = "SELECT * from client";
    $result = mysqli_query($conn, $query);
    $rows = mysqli_fetch_all($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Blue</title>
    <link rel="stylesheet" href="../css/Clients.css">
     <!--Boxicons-->
     <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
     <!--Remixicons-->
     <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <!--Googlefonts-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
   
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="../img/image_2023-05-07_150213089-removebg-preview.png" alt="">
                    <h2>All <span class="primary">Blue</span></h2>
                </div>
                
                <div class="close" id="close-btn">
                    <span class="material-icons">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="./Dashboard.php" >
                    <span class="material-icons">
                        space_dashboard
                        </span>
                    <h3>Dashboard</h3>    
                </a>
                <a href="./Cruises.php">
                    <span class="material-icons">
                        directions_boat
                        </span>                      
                    <h3>Cruises</h3>    
                </a>
                <a href="#" class="active">
                    <span class="material-icons">
                        person
                        </span>
                    <h3>Clients</h3>    
                </a>
                
                <a href="./reservations.php">
                    <span class="material-icons">
                        credit_score
                        </span>
                        
                    <h3>Reservations</h3>    
                </a>
                <a href="../../index.php">
                    <span class="material-icons">
                        logout
                        </span> 
                    <h3>Logout</h3>    
                </a>
            </div>
        </aside>
        <main>
            <div class="right">
                <div class="top">
                    <button id="menu-btn">
                        <span class="material-icons">
                            menu
                            </span>
                    </button>
                    <div class="theme-toggler">
                        <span class="material-icons active">
                            light_mode
                            </span>
                            <span class="material-icons">
                                dark_mode
                                </span>
                    </div>
                    <div class="profile">
                        <div class="info">
                            <p>Hey,<b> AssFace</b></p>
                            <small class="text-muted">Admin</small>
                        </div>
                        <div class="profile-photo">
                            <img src="../img/Final2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup">
                <div class="close-btn">&times;</div>
                <form action="addclient.php" method="post">
                <div class="form" >
                   <h2>Add Client</h2>

                   <?php if (isset($_GET['error'])) { ?>
     		            <p class="error"><?php echo $_GET['error']; ?></p>
     	            <?php } ?>

                   <div class="element">
                       <label for="name">Name</label>
                       <input type="text" name="name" placeholder="Enter First Name" required>
                   </div> 

                   <div class="element">
                    <label for="Last Name">Last Name</label>
                    <input type="text" name="lastname" placeholder="Enter Last Name" required>
                    </div>

                   <div class="element">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter Email" required>
                    </div>
                    
                    <div class="element">
                        <button type="submit">Add</button>
                    </div>
                </div>
                </form>
            </div> 
            <h1>Clients</h1>
            <div class="insights">

                <div id="show-popup" class="Add">
                    <div class="center"></div>
                    <span class="material-icons">
                        add
                        </span>
                        <h2>Add Client</h2>
                </div>


                <?php
                    foreach ($rows as $row) {
                ?>
                <div class="active-cruise">
                    <h2 class="primary"><?php echo $row[1] ?></h2>
                    <div class="middle">
                        <div class="left">
                            <h3 align="center">Adresse :</h3>
                            <h1 align="center"><?php echo $row[2] ?></h1>
                        </div>
                    </div>
                    <div class="progress">
                        <button type="button" id="Change">
                            <a style="color:white" href="deleteclient.php?client_id=<?php echo $row[0] ?>">Delete</a>
                        </button>
                    </div>
                </div>
                <?php
                    }
                ?>   


            </div>
        </main>
        <!----------END OF MAIN----------->
        
    </div>
    <script type="text/javascript" src="../js/clients.js"></script>

    <script> 
        <?php if (isset($_GET['error'])) { ?>
            document.querySelector(".popup").classList.add("active");
            document.getElementById("body").style.overflow = "hidden";
        <?php } ?>
    </script>
</body>
</html>
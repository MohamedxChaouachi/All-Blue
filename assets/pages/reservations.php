<?php
    include "config.php";
    
    $query = "SELECT c.Nom , o.etac , c.NombreDePlaceReserve , c.IdClient , r.Reference from client c , reservation r , croisiere o where c.IdClient = r.IdClient and o.Reference = r.Reference";
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
    <link rel="stylesheet" href="../css/reservations.css">
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
                </a>
                <a href="./Clients.php">
                    <span class="material-icons">
                        person
                        </span>
                    <h3>Clients</h3>    
                </a>
                
                <a href="#"class="active">
                    <span class="material-icons">
                        credit_score
                        </span>
                        
                    <h3>Reservations</h3>    
                </a>
                <a href="#">
                    <span class="material-icons">
                        logout
                        </span>
                        
                    <h3>Logout</h3>    
                </a>
            </div>
        </aside>
        <main>
            <h1>Reservations</h1>
                         
            <div class="reservations">
                <div class="search-container">
                    <input type="text" placeholder="Search by client name" id="search-input">
                    <button type="button" id="search-button">Search</button>
                  </div> 
                  
                    <table>
                    <thead>
                        <tr>
                        <th>Client Code</th>
                        <th>Client Name</th>
                        <th>Cruise Number</th>
                        <th>Nombre de places</th>
                        <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($rows as $row) {
                        ?>
                        <tr class="row1">
                            <td><?php echo $row[3] ?></td>
                            <td><?php echo $row[0] ?></td>
                            <td><?php echo $row[4] ?></td>
                            <td><?php echo $row[2] ?></td>
                            <td class="warning"><?php echo $row[1] ?></td>
                        </tr>
                        <?php } ?>
                        <tr>
                        <td colspan="999">
                            <div class="table-container">
                            <table class="new-table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Column 1</td>
                                    <td>Column 2</td>
                                    <td>Column 3</td>
                                </tr>
                                <tr>
                                    <td>Column 1</td>
                                    <td>Column 2</td>
                                    <td>Column 3</td>
                                </tr>
                                <tr>
                                    <td>Column 1</td>
                                    <td>Column 2</td>
                                    <td>Column 3</td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </td>
                        </tr>
                    </tbody>
                    </table>

            </div>
        </main>
        <!----------END OF MAIN----------->

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
                    <!----------END OF TOP----------->
            <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">

                    <div class="update">
                        <div class="profile-photo">
                            <img src="../img/Final2.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Thomas</b> Just Docked in Spain on Cruise Number ST740</p>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../img/Final2.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Thomas</b> Just Docked in Spain on Cruise Number ST740</p>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../img/Final2.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Thomas</b> Just Docked in Spain on Cruise Number ST740</p>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../img/Final2.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Thomas</b> Just Docked in Spain on Cruise Number ST740</p>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../img/Final2.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Thomas</b> Just Docked in Spain on Cruise Number ST740</p>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../img/Final2.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Thomas</b> Just Docked in Spain on Cruise Number ST740</p>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../img/Final2.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Thomas</b> Just Docked in Spain on Cruise Number ST740</p>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../img/Final2.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Thomas</b> Just Docked in Spain on Cruise Number ST740</p>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../img/Final2.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Thomas</b> Just Docked in Spain on Cruise Number ST740</p>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../img/Final2.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Thomas</b> Just Docked in Spain on Cruise Number ST740</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script type="text/javascript" src="../js/reservation.js"></script>
</body>
</html>
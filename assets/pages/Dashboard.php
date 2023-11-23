
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Blue</title>
    <link rel="stylesheet" href="../css/dashboard.css">
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
                <a href="#" class="active">
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
                
                <a href="./reservations.php">
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
            <h1>Dashboard</h1>
            <div class="insights">
                <div class="active-cruise">
                    <span class="material-icons">
                        sailing
                        </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Active Cruises</h3>
                            <h1><span style="font-weight: 800;">4</span>/5</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>80%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Today</small>
                </div>
                <!----------END OF DIV----------->
                <div class="Seats">
                    <span class="material-icons">
                        event_seat
                        </span>                     
                    <div class="middle">
                        <div class="left">
                            <h3>Seats</h3>
                            <h1><span style="font-weight: 800;">3220</span>/3500</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                                <circle cx="38" cy="38" r="36"></circle>
                                <style type="text/css">
                                    rect{fill:url(#MyGradient)}
                                  </style>
                                  <defs>
                                    <linearGradient id="MyGradient" x2="1.2" y2="1">
                                      <stop offset="0%" stop-color="rgba(26,57,139,1)" />
                                      <stop offset="35%" stop-color="rgba(31,69,218,1)" />
                                      <stop offset="100%" stop-color="rgba(72,168,238,1)" />
                                    </linearGradient>
                                  </defs>
                            </svg>
                            <div class="number">
                                <p>92%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Today</small>
                </div>
                <!----------END OF DIV----------->
                <div class="Complaints">
                    <div class="content">
                    <span class="material-icons">
                        sms_failed
                        </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Complaints</h3>
                            <h1><span style="font-weight: 800;">7</span></h1>
                        </div>
                    </div>
                    <small class="text-muted">Today</small>
                    </div>
                </div>
                <!----------END OF DIV----------->
            </div>
            <!----------END OF INSIGHTS----------->
            <div class="reservations">
                <h2>Recent Reservations</h2>
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
                        <tr>
<!--                         <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <td><?php echo $row['IdClient']; ?></td>
                            <td><?php echo $row['Nom']; ?></td>
                            <td><?php echo $row['Reference']; ?></td>
                            <td><?php echo $row['NombreDePlaceReserve']; ?></td>
                            <td ><?php echo $row['etatc']; ?></td>
                            <td><a href="">Details</a> </td>
                        </tr>
                        <?php endwhile; ?> -->
                    </tbody>
                </table>
                <a href="#">Show All</a>
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
</body>
</html>
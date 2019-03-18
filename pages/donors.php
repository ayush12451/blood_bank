<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        @font-face {
            font-family: myFont;
            src: url(../fonts/product_sans_regular-webfont.woff);
        }
        
        @font-face {
            font-family: myFont;
            src: url(../fonts/product_sans_bold-webfonts.woff);
            font-weight: bold;
        }
        
        @font-face {
            font-family: myFont;
            src: url(../fonts/product_sans_italic-webfonts.woff);
            font-weight: italic;
        }
        
        @font-face {
            font-family: myFont;
            src: url(../fonts/product_sans_bold_italic-webfonts.woff);
            font-weight: bold italic;
        }
        
        div {
            font-family: myFont;
        }
    </style>
</head>

<body bgcolor="#e0e0e0">
    <nav>
        <div class="nav-wrapper red darken-2">
            
            <a href="index.html" class="brand-logo"><img src="../images/drops-clipart-printable-water-591685-9629097.png" height="90%" width="70"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="login.php"><i class="material-icons">account_circle</i></a></li>
                <li><a href="register.php">Sign in</a></li>
                <li><a href="donors.php">Find Donors</a></li>
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">More<i class="material-icons right">arrow_drop_down</i></a></li>

            </ul>
        </div>
    </nav>
    <main>
        <div class="container">

            <div class="row">
                <div class="card white z-depth-3"><br><br>
                <h2 class='orange-text text-accent-3 center'><strong>Find Donors</strong></h2><br>
                    <div class="row" style="text-align:center"><br>
                    <form action="donors.php" method="post">
                    <div class="container"><div class="input-field col s8 ">
                        <input class="validate" id="city" style="text-transform: uppercase" name="city" type="text">
                        <label for="city">City</label></div></div>
                        <div class="col s2"><button class="btn-floating waves-effect waves-light" type="submit" name="submit">
                            <i class="material-icons">search</i>
                        </button></div>
                    </form>
                        <?php
                        if (isset($_POST['submit']))
                        {$city=strtoupper($_POST['city']);}
                        ?>
                    </div>
                    <div class="divider"></div>
                    <div class="row">
                        <?php 
                         require '../scripts/db_info.php';
                         require_once '../scripts/donor_populate.php';
                         if(!is_null(@$city)){
                             $city_temp=$city;
                             print('<h3 class="center">'.ucfirst(strtolower($city_temp)).'</h3>');
                         
                         $temp = mysqli_fetch_array(mysqli_query($con, 'SELECT count(*) from user'));
                         $count=$temp[0];
                        
                         while ($count != 0) {
                             $sql = "SELECT * FROM user WHERE user_id = '".$count."'";
                             $row = mysqli_fetch_array(mysqli_query($con, $sql));
                             $name = $row['first_name']." ".$row['last_name'];
                             $blood_grp = $row['blood_grp'];
                             $age = $row['age'];
                             $email = $row['email'];
                             $user_city= $row['city'];                             
                             if($user_city==$city){
                             populate($name,$blood_grp,$age,$email);
                             }
                             $count-=1;
                            }
                        }
                             ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    
    <footer class="page-footer grey darken-3">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    
                    <h5 class="white-text">Project by:</h5>
                    <ul>
                        <li><a class="white-text" href="https://github.com/ayush12451">Ayush</a></li>                        
                        <li><a class="white-text" href="https://github.com/achyutshantanu">Shantanu</a></li>
                        <li><a class="white-text" href="https://github.com/devashsih">Devashish</a></li>
                        <li><a class="white-text" href="https://github.com/Areeb0206">Areeb</a></li>
    </ul>
                </div>

                <div class="col l3 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="white-text" href='login.php'>Login</a></li>
                        <li><a class="white-text" href="register.php">Register</a></li>
                        <li><a class="white-text" href="donors.php">Donors</a></li>
                        <li><a class="white-text" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col s6">
                        Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
                    </div>
                    <div class="col s6">
                        Follow this project on <a class="orange-text text-lighten-3" href="https://github.com/ayush12451/blood_bank">Github</a>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</body>

</html>

<!DOCTYPE html>
<?php session_start();
ob_start();
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
            <img src="../images/drops-clipart-printable-water-591685-9629097.png" height="90%" width="70">
            <a href="index.html" class="brand-logo"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="login.html"><i class="material-icons">account_circle</i></a></li>
                <li><a href="register.html">Register</a></li>
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">More<i class="material-icons right">arrow_drop_down</i></a></li>

            </ul>
        </div>
    </nav>
    <main>
        <div class="container">

            <div class="row">
                <div>
                    <div class="card white z-depth-3" style="text-align: center">
                        <div class="card-content">
                            <i class="large material-icons" style="color: gray;font-size: 150px">account_circle</i>
                            <br>
                            <h3>Login</h3>
                            <br>
                            <br>
                            <div class="container">
                                <div class="row">
                                    <form action='../scripts/login.php' class="col s12" method='post'>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input class="validate" id="email-id" name="email_id" type="text">
                                                <label for="email-id">E-mail</label>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input class="validate" id="password" name="password" type="password">
                                                    <label for="password">Password</label>
                                                </div>
                                                <br>
                                                <button class="btn waves-effect waves-light" name="submit" type="submit">Submit <i class="material-icons right">send</i></button> <a class="waves-effect waves-light btn" href="register.html"><i class="material-icons right">account_circle</i>Register</a>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
        </div>
    </main>

    <footer class="page-footer grey darken-3">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Company Bio</h5>
                    <p class="grey-text text-lighten-4">Project by:
                        <br>
                        <a href="https://github.com/ayush12451">Ayush Agarwalla</a>
                        <br>
                        <a href="https://github.com/achyutshantanu">shantanu</a>
                        <br>
                        <a href="https://github.com/devashsih">deva</a>
                        <br>
                        <a href="https://github.com/Areeb0206">areeb</a>
                </div>

                <div class="col l3 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="white-text" href='login.html'>Login</a></li>
                        <li><a class="white-text" href="register.html">Register</a></li>
                        <li><a class="white-text" href="#!">Link 3</a></li>
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
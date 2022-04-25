<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/Normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2">
    <!-- <link rel="stylesheet" href="assets/css/animate.min.css"> -->
    <title>School</title>
</head>
<body>
    <!---Create navbar--->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="NAVBAR_HOME_PAGE">
        <div class="container">
            <!---Logo navbar-->
            <a class="navbar-brand animate__animated animate__slideInUp" id="logo_animate" href="index.php">
                <img src="assets/img/Logo.png" id="Logo_page" alt="image logo">
            </a>
            <!----Button menu--->
            <button 
                    class="navbar-toggler" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#navmenu"
                    aria-controls="navmenu" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation" 
                    style="background-color: #FF8303;">
                    <!-------icon menu--->
                <span class="navbar-toggler-icon"></span>
            </button>
            <!----List navbar--->
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <!----navb Button Login-->
                    <li class="nav-item animate__animated animate__slideInUp" id="btn_login_animate">
                        <a href="Login.php" class="nav-link col-3" id="login_text">search</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!------Header------>
    <header>
        <div class="container">
            
        </div>
    </header>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/sweetalert2.js"></script>
</body>
</html>
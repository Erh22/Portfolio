

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navBar</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="../_css/myCSS.css">
    <link rel="stylesheet" href="../_css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <!-- JS  -->
    <script src="../_js/jquery.min.js"></script>
    <script src="../_js/popper.min.js"></script>
    <script src="../_js/bootstrap.min.js"></script>
    <script src="../_js/myJS.js"></script>
    <meta http-equiv="Page-Enter" content="revealTrans(Duration=1.0,Transition=12)">
    <script class="skillJs" src="../_js/modernizr.custom.97074.js"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-dark position-fixed w-100" style="background-color: #28415b; z-index:2; top:0;">
        <a class="navbar-brand" href="#">h2's</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item " id="homeClick">
                    <a class="nav-link" href="index.php" id="home">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item " id="aboutClick">
                    <a class="nav-link" href="_php/aboutMe.php" id="aboutMe">ABOUT ME</a>
                </li>
                <li class="nav-item " id="portfolioClick">
                    <a class="nav-link" href="_php/portfolio.php" id="portfolio">PORTFOLIO</a>
                </li>

                <li class="nav-item " id="contactClick">
                    <a class="nav-link" href="_php/contact.php" id="contact">CONTACT ME</a>
                </li>
            </ul>

        </div>
    </nav>

    

    
</body>
</html>
<?php
require_once("h2_connect.php");

$sql = "select*from portfolio";
$result = mysqli_query($link,$sql);

$sqlCategory = "select * from portfolio where category";
$resultCategory = mysqli_query($link,$sqlCategory);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@500&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="../_css/myCSS.css">
    <link rel="stylesheet" href="../_css/bootstrap.css">
    <link rel="stylesheet" href="../_css/lightbox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <!-- JS -->
    <script src="../_js/jquery.min.js"></script>
    <script src="../_js/popper.min.js"></script>
    <script src="../_js/bootstrap.min.js"></script>
    <script src="../_js/myJS.js"></script>
    <script src="../_js/lightbox-plus-jquery.js"></script>
    <style>
    
    </style>

    
</head>

<body class="portfolio_body">
    <div class="load">
    <!-- 目錄條 -->
    <nav class="navbar navbar-expand-lg navbar-dark position-fixed w-100" style="background-color: #28415b; z-index:2">
        <a class="navbar-brand" href="#">h2's</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto" style="font-family:'Noto Sans TC', sans-serif;">
                <li class="nav-item hvr-rectangle-out">
                    <a class="nav-link" href="../index.php" id="home">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item hvr-rectangle-out">
                    <a class="nav-link" href="aboutMe.php" id="aboutMe">ABOUT ME</a>
                </li>
                <li class="nav-item active " style="background-color: #375a7f;">
                    <a class="nav-link" href="portfolio.php" id="portfolio">作品集</a>
                </li>
            
                <li class="nav-item hvr-rectangle-out">
                    <a class="nav-link" href="contact.php" id="contact">CONTACT ME</a>
                </li>
            </ul>

        </div>
    </nav>
    <br>
    <div class="container">
        <div class="filter category d-flex justify-content-center ">
            

            <div class="models btn-group btn-group-toggle">
                <div class="checkbox">
                    <input type="checkbox" checked="" rel="all" onchange="change();" name=ztid[] id="all">
                    <label class="btn-primary btn" for="all">ALL</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" rel="3dModeling" onchange="change();" name=ztid[] id="3d">
                    <label class="btn-primary btn" for="3d">3D&nbsp;&nbsp;MODELING</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" rel="productDesign" onchange="change();" name=ztid[] id="pd">
                    <label class="btn-primary btn" for="pd">PRODUCT&nbsp;&nbsp;DESIGN</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" rel="graphicDesign" onchange="change();" name=ztid[] id="2d">
                    <label class="btn-primary btn" for="2d">GRAPHIC&nbsp;&nbsp;DESIGN</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" rel="others" onchange="change();" name=ztid[] id="ots">
                    <label class="btn-primary btn" for="ots">OTHERS</label>
                </div>

            </div>
        </div>

        


        <div class="waterfall result animate__animated animate__fadeInUpBig">


            
            
            <!-- <div class="item all 3dModeling">

                <img class="waterFallImg" src="https://dummyimage.com/500x220/cad7de/0e5d8e" alt="">
                <p class="d-block mr-auto ml-1 mt-1" style="color: #E5E8EA;">錦上添花</p>
                <button type="button" class="btn btn-primary w-100">MORE</button>

            </div> -->
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <?php if ($row["category"] == "productdesign") : ?>
                <div class="item all productDesign" >
                    <img class="waterFallImg" src="../_image/portfolio/<?= $row["picture"] ?>" alt="image-1"> 
                    <p class="d-block mr-auto ml-1 mt-1" style="color: #E5E8EA;" id="name" name="name"><?= $row["name"] ?></p>
                    <a type="button" class="btn btn-primary w-100" href="../_image/portfolio/<?= $row["picture"] ?>" data-lightbox="example-2" data-title="<?= $row["name"] ?>">MORE</a>
                </div>
                <?php endif; ?>
                <?php if ($row["category"] == "3D") : ?>
                <div class="item all 3dModeling" >
                    <img class="waterFallImg" src="../_image/portfolio/<?= $row["picture"] ?>" alt="image-1"> 
                    <p class="d-block mr-auto ml-1 mt-1" style="color: #E5E8EA;" id="name" name="name"><?= $row["name"] ?></p>
                    <a type="button" class="btn btn-primary w-100" href="../_image/portfolio/<?= $row["picture"] ?>" data-lightbox="example-2" data-title="<?= $row["name"] ?>">MORE</a>
                </div>
                <?php endif; ?>
                <?php if ($row["category"] == "2D") : ?>
                <div class="item all graphicDesign" >
                    <img class="waterFallImg" src="../_image/portfolio/<?= $row["picture"] ?>" alt="image-1"> 
                    <p class="d-block mr-auto ml-1 mt-1" style="color: #E5E8EA;" id="name" name="name"><?= $row["name"] ?></p>
                    <a type="button" class="btn btn-primary w-100" href="../_image/portfolio/<?= $row["picture"] ?>" data-lightbox="example-2" data-title="<?= $row["name"] ?>">MORE</a>
                </div>
                <?php endif; ?>
                <?php if ($row["category"] == "3D&PD") : ?>
                <div class="item all 3dModeling productDesign" >
                    <img class="waterFallImg" src="../_image/portfolio/<?= $row["picture"] ?>" alt="image-1"> 
                    <p class="d-block mr-auto ml-1 mt-1" style="color: #E5E8EA;" id="name" name="name"><?= $row["name"] ?></p>
                    <a type="button" class="btn btn-primary w-100" href="../_image/portfolio/<?= $row["picture"] ?>" data-lightbox="example-2" data-title="<?= $row["name"] ?>">MORE</a>
                </div>
                <?php endif; ?>
                <?php if ($row["category"] == "others") : ?>
                <div class="item all others" >
                    <img class="waterFallImg" src="../_image/portfolio/<?= $row["picture"] ?>" alt="image-1"> 
                    <p class="d-block mr-auto ml-1 mt-1" style="color: #E5E8EA;" id="name" name="name"><?= $row["name"] ?></p>
                    <a type="button" class="btn btn-primary w-100" href="../_image/portfolio/<?= $row["picture"] ?>" data-lightbox="example-2" data-title="<?= $row["name"] ?>">MORE</a>
                </div>
                <?php endif; ?>
                
                
            <?php endwhile; ?>
        </div>
    </div>
    <div id="gotop"><img src="../_image/資產 14.png" alt=""></div>

    <br><br>
    <?php include("copyRight.php"); ?>
    </div>
    <!-- 進場延遲 -->
    <div id="loading"></div>
    <script>
            $("#home").hover(function() {
                $("#home").html('首頁');
            }, function() {
                $("#home").html('HOME');
            })
            $("#aboutMe").hover(function() {
                $("#aboutMe").html('關於我');
            }, function() {
                $("#aboutMe").html('ABOUT ME');
            })
            
            $("#contact").hover(function() {
                $("#contact").html('與我聯繫');
            }, function() {
                $("#contact").html('CONTACT ME');
            })

//回到頂端
            $(function(){
    $("#gotop").click(function(){
        jQuery("html,body").animate({
            scrollTop:0
        },1000);
    });
    $(window).scroll(function() {
        if ( $(this).scrollTop() > 300){
            $('#gotop').fadeIn("fast");
        } else {
            $('#gotop').stop().fadeOut("fast");
        }
    });
});

//checkbox
window.onload = function () {

var oLabels = document.getElementsByTagName('label');

for (var i = 0; i < oLabels.length; i++) {

    if (document.getElementById(oLabels[i].getAttribute('for')).checked) oLabels[i].style.backgroundColor = '#28415b'; //初始化label背景色

    oLabels[i].onclick = function () {

        var chkbox = document.getElementById(this.getAttribute('for'));

        if (chkbox.checked) this.style.backgroundColor = '#375a7f';

        else this.style.backgroundColor = '#28415b';

    }

}

var o = document.getElementsByName('ztid[]');

for (var i = 0; i < o.length; i++) {

    o[i].onclick = function () {

        var oNext = this.nextSibling;

        while (oNext.nodeType != 1) oNext = oNext.nextSibling;

        if (this.checked) oNext.style.backgroundColor = '#28415b';

        else oNext.style.backgroundColor = '#375a7f';

    }

}

}
    </script>
        
</body>

</html>
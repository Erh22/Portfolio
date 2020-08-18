<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="_css/myCSS.css">
    <link rel="stylesheet" href="_css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <!-- JS -->
    <script src="_js/jquery.min.js"></script>
    <script src="_js/popper.min.js"></script>
    <script src="_js/bootstrap.min.js"></script>
    <script src="_js/myJS.js"></script>
    <!-- slideJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <style>
        
    </style>
    
</head>

<body class="index_body" data-type="page-transition">
<div class="load">
    <!-- 目錄條 -->
    <nav class="navbar navbar-expand-lg navbar-dark position-fixed w-100" style="background-color: #28415b; z-index:2; top:0;">
        <a class="navbar-brand" href="#">h2's</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item " style="background-color: #375a7f;">
                    <a class="nav-link active" href="#" id="home">首頁 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item hvr-rectangle-out">
                    <a class="nav-link" href="_php/aboutMe.php" id="aboutMe">ABOUT ME</a>
                </li>
                <li class="nav-item hvr-rectangle-out">
                    <a class="nav-link" href="_php/portfolio.php" id="portfolio">PORTFOLIO</a>
                </li>

                <li class="nav-item hvr-rectangle-out">
                    <a class="nav-link" href="_php/contact.php" id="contact">CONTACT ME</a>
                </li>
            </ul>

        </div>
    </nav>
    <!-- 首頁大圖 -->
    <div class="homepage container-fluid ">
        <div class="row align-items-center">
            <div class="col-lg-6 myBg text-left mt-5">
                <h1 class="erh ml-5 animate__lightSpeedInRight animate__animated">H&nbsp;I&nbsp;,<br>I&nbsp;&nbsp;&nbsp;A&nbsp;M&nbsp;&nbsp;&nbsp;H&nbsp;S&nbsp;I&nbsp;N&nbsp;-&nbsp;E&nbsp;R&nbsp;H&nbsp;.</h1>
                <br>
                <a type="button" class="btn btn-primary ml-5 animate__lightSpeedInLeft animate__animated" href="_php/aboutMe.php">ABOUT ME</a>
            </div>
            <div class="col-lg-6 d-flex justify-content-center pr-0 img-fluid animate__zoomIn animate__animated"><img src="./_image/homepage_headshot.jpg" alt="">
            </div>
        </div>
    </div>
    <br>
    <div class="container B_block">

        <!-- 特殊經歷 -->
        <div class="homepageTitle">
            <span style="font-family: 'Noto Sans TC', sans-serif;font-size: 20px;">特殊經歷</span><br>
            <span style="font-family: 'Noto Sans TC', sans-serif;font-size: 12px;">SPECIAL EXPERIENCE</span>
        </div>


        <div class="row">
            <!-- 獵心計劃 -->
            <div class="col-3">
                <img class="rounded-lg img-fluid" src="_image/hunting_heart.svg">
                
            </div>
            <div class="col-9">
                <a class="l_title" href="#" style="text-decoration:none;">獵心計劃 Hunting Heart</a>
                <div class="l_titleBorder"></div>
                <p style="color:#375a7f ;">由系上同學一手策畫的「獵心計畫-手工筆展」擔任第三組的組長，這個活動是
                    學生自發性的活動，從策劃、產品品牌、場地佈置到販售，都是由小組團隊自行
                    規劃。<br><br>
                    我們的產品品牌為「Curious紙捲筆」，從發想、草模、周邊到製作出實品都是
                    由組裡所有人共同創作，這個活動也吸引了學校的注意，並上了學校的新聞版，
                    而我們這組更是拿下了銷售王的稱號，賣出了200多支筆，拿下第一名。</p>
            </div>

        </div>
        <div class="waterfallhunt hiddenImg mx-auto">
            <div class="huntitem"><img class="slideImg waterFallImg" src="_image/討論.jpg" title="討論發想"></div>
            <div class="huntitem"><img class="slideImg waterFallImg" src="_image/展場規劃.jpg" title="展場規劃"></div>
            <div class="huntitem"><img class="slideImg waterFallImg" src="_image/展場成果.JPG" title="展場成果"></div>
            <div class="huntitem"><img class="slideImg waterFallImg" src="_image/成品展示_1.JPG" title="成品展示"></div>
            <div class="huntitem"><img class="slideImg waterFallImg" src="_image/成品展示_2.JPG" title="成品展示"></div>
            <div class="huntitem"><img class="slideImg waterFallImg" src="_image/成品展示_3.JPG" title="成品展示"></div>
            <div class="huntitem"><img class="slideImg waterFallImg" src="_image/成品展示_4.JPG" title="成品展示"></div>
            <div class="huntitem"><img class="slideImg waterFallImg" src="_image/周邊_1.JPG" title="周邊商品"></div>
            <div class="huntitem"><img class="slideImg waterFallImg" src="_image/周邊_2.JPG" title="周邊商品"></div>
            <div class="huntitem"><img class="slideImg waterFallImg" src="_image/組員.JPG" title="組員合照"></div>
            <div class="huntitem"><img class="slideImg waterFallImg" src="_image/解說.JPG" title="解說設計理念"></div>
        </div>
        <!-- 看更多連結 -->
        <div style="text-align: right;">
            <button class="homepageMore">MORE</button>
        </div>
        <div class="B-border"></div>

    </div>
    

    <br>
    <br>
    <br>
    <?php include("_php/copyRight.php"); ?>
    </div>
    <div id="loading"></div>

    <script>
        $(document).ready(function() {
            $(".homepageMore").click(function() {
                $(".slideImg").slideToggle();
            });
        });
    
        $("#aboutMe").hover(function() {
            $("#aboutMe").html('關於我');
        }, function() {
            $("#aboutMe").html('ABOUT ME');
        })
        $("#portfolio").hover(function() {
            $("#portfolio").html('作品集');
        }, function() {
            $("#portfolio").html('PORTFOLIO');
        })
        $("#contact").hover(function() {
            $("#contact").html('與我聯繫');
        }, function() {
            $("#contact").html('CONTACT ME');
        })

        

        

    </script>
    <script>
 
</script>






</body>

</html>
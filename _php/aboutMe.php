<?php

require_once("h2_connect.php");

$sql = "select*from skill";
$result = mysqli_query($link, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>

    <!-- 字形 -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="../_css/myCSS.css">
    <link rel="stylesheet" href="../_css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <!-- JS -->
    <script src="../_js/jquery.min.js"></script>
    <script src="../_js/popper.min.js"></script>
    <script src="../_js/bootstrap.min.js"></script>
    <script src="../_js/myJS.js"></script>
    <script class="timelimeJs" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script class="timelimeJs" src="https://www.csslab.cl/ejemplos/timelinr/latest/js/jquery.timelinr-0.9.54.js"></script>

    <!-- Skill hover -->
    <!-- <link class="skillJs" rel="stylesheet" type="text/css" href="../_css/style.css" /> -->
    <script class="skillJs" src="../_js/modernizr.custom.97074.js"></script>

</head>

<body class="aboutMe_body page-is-changing">
    <div class="load">
    <!-- 目錄條 -->
    <nav class="navbar navbar-expand-lg navbar-dark position-fixed w-100" style="background-color: #28415b; z-index:2; top:0;">
        <a class="navbar-brand" href="#">h2's</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02" style="font-size: 15px;">
            <ul class="navbar-nav mr-auto" style="font-family:'Noto Sans TC', sans-serif;">
                <li class="nav-item hvr-rectangle-out">
                    <a class="nav-link" href="../index.php" id="home">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active" style="background-color: #375a7f;">
                    <a class="nav-link" href="aboutMe.php" id="aboutMe">關於我</a>
                </li>
                <li class="nav-item hvr-rectangle-out">
                    <a class="nav-link" href="portfolio.php" id="portfolio">PORTFOLIO</a>
                </li>
            
                <li class="nav-item hvr-rectangle-out">
                    <a class="nav-link" href="contact.php" id="contact">CONTACT ME</a>
                </li>
            </ul>

        </div>
    </nav>
    <div class="container">
        <div class="row aboutMeDiv align-items-center">
            <div class="col-lg-3 col-6 animate__backInRight animate__animated" style="margin-top: 50px; margin-bottom:30px;"><img class="aboutMe_headshot d-block shadow my-auto" src="../_image/homepage_headshot.jpg" alt=""></div>
            <div class="col-lg-9 col-6 animate__fadeInRightBig animate__animated " style="margin-top: 50px; margin-bottom:30px;">
                <p class="p_Introduction">姓名&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;林欣兒 Hsin-Erh Lin</p>
                <p class="p_Introduction">最高學歷&nbsp;:&nbsp;亞洲大學 創意商品設計學系 ASIA University CPD, Taiwan</p>
                <p class="p_Introduction">E-mail&nbsp;：&nbsp;&nbsp;&nbsp;teacafe333@gmail.com</p>
                <p class="p_Introduction">應徵職位&nbsp;:&nbsp;前端工程師</p>
            </div>
        </div>
        <!-- 專長標題 -->
        <div class="aboutMeTitle animate__animated animate__fadeInUpBig">
            <span style="font-family: 'Noto Sans TC', sans-serif;font-size: 20px;">專長 SKILLS</span><br>
        </div>
        <!-- 專長LOGO -->

        <div class="d-flex justify-content-center animate__animated animate__fadeInUpBig">
            <ul id="da-thumbs" class="da-thumbs">
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <li>
                        <a href="#">
                            <img src="../_image/skill/<?= $row["skillpicture"] ?>" />
                            <div><span><?= $row["skillName"] ?></span></div>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>



        <!-- 證照標題 -->
        <div class="aboutMeTitle">
            <span style="font-family: 'Noto Sans TC', sans-serif;font-size: 20px;">證照 LICENSE</span><br>
        </div>
        <div class="d-flex justify-content-center">
            <ul id="da-thumbs" class="da-thumbs row">

                <li>
                    <a href="#">
                        <img src="../_image/skill/AI.png" />
                        <div><span>ACA<br>Illustrator</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="../_image/skill/PS.png" />
                        <div><span>ACA<br>Photoshop</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="../_image/skill/ID.png" />
                        <div><span>ACA<br>Indesign</span></div>
                    </a>
                </li>

            </ul>
        </div>
        <!-- 經歷標題 -->
        <div class="aboutMeTitle">
            <span style="font-family: 'Noto Sans TC', sans-serif;font-size: 20px;">經歷 EXPERIENCE</span><br>
        </div>
        <div id="timeline" class="timelimeJs">
            <ul id="dates" class="pl-0">
                <li><a href="#2013" class="selected timeline_a">2013</a></li>
                <li><a href="#2014">2014</a></li>
                <li><a href="#2015">2015</a></li>
                <li><a href="#2016">2016</a></li>
                <li><a href="#2020">2020</a></li>

            </ul>
            <ul id="issues">

                <li id="2013" class="selected">

                    <!-- <img src="http://www.csslab.cl/ejemplos/timelinr/latest/images/1.png" /> -->
                    <h1>2013</h1>
                    <p>私立正義高中畢業</p>
                    <p>正義蚵仔麵線外場服務生</p>
                    <p>繁星計畫入學校排前百分之二十</p>
                    <p>亞洲大學創意商品設計系</p>
                    <p>參加48小時設計營</p>
                </li>
                <li id="2014">
                    <!-- <br><br><br> -->
                    <!-- <img src="http://www.csslab.cl/ejemplos/timelinr/latest/images/2.png" /> -->
                    <h1>2014</h1>
                    <p>通過ACA Photoshop證照</p>
                    <p>參加第一屆獵心計畫，擔任第三組組長</p>
                    <p>通過ACA Illustrator證照</p>
                    <p>期末會審全系第三名</p>
                </li>
                <li id="2015">
                    <!-- <img src="http://www.csslab.cl/ejemplos/timelinr/latest/images/3.png" /> -->
                    <h1>2015</h1>
                    <p>擔任第二屆獵心計畫指導學長姐</p>
                    <p>金弘笙汽車百貨實習</p>
                    <p>參加基礎金工課程</p>
                    <p>歐登精密科技有限公司 LOGO設計，獲得佳作</p>
                </li>
                <li id="2016">
                    <!-- <img src="http://www.csslab.cl/ejemplos/timelinr/latest/images/4.png" /> -->
                    <h1>2016</h1>
                    <p>參加72小時設計營，獲得金星獎</p>
                    <p>參加會場佈置學程學習氣球造型、插花、摺紙、客家花布縫紉、會場佈置</p>
                    <p>參加進階金工課程-珐瑯</p>
                    <p>歡樂氣球工房實習</p>
                    <p>亞洲大學雷射切割機台操作人員</p>
                    <p>新一代設計展-入圍金典設計獎</p>
                    <p>畢業於亞洲大學創意商品設計學系</p>
                    <p>進入豐萊實業有限公司 擔任美編、行政助理</p>
                </li>
                <li id="2020">
                    <!-- <img src="http://www.csslab.cl/ejemplos/timelinr/latest/images/5.png" /> -->
                    <h1>2020</h1>
                    <p>離開豐萊實業有限公司</p>
                    <p>進入資策會前端工程師就業養成班</p>
                </li>

            </ul>
            <div id="grad_top"></div>
            <div id="grad_bottom"></div>
            <a href="#" id="next">+</a>
            <a href="#" id="prev">-</a>
        </div>






        <script class="timelimeJs">
            $(function() {
                $().timelinr({
                    orientation: 'vertical',
                    issuesSpeed: 300,
                    datesSpeed: 100,
                    arrowKeys: 'true',
                    startAt: 3
                })
            });
        </script>

        
        <script type="text/javascript" src="../_js/jquery.hoverdir.js"></script>
        <script type="text/javascript">
            $(function() {

                $(' #da-thumbs > li ').each(function() {
                    $(this).hoverdir({
                        hoverDelay: 75
                    });
                });

            });
        </script>

        <script>
            $("#home").hover(function() {
                $("#home").html('首頁&nbsp;&nbsp;&nbsp;');
            }, function() {
                $("#home").html('HOME');
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
        



    </div>
    <br><br>
    <div class="copyRight d-flex justify-content-center align-items-center" >
        <p style="color: #FAFDFF;">&copy; 1994-2020 h2&apos;s Portfolio</p>
    </div>
    </div>
    <!-- 進場延遲 -->
    <div id="loading"></div>

</body>

</html>
<?php
require_once("h2_connect.php");
//新增留言
$guestName=$_POST['guestName'];
$guestContent=$_POST['guestContent'];

if(isset($_POST["buttonSend"])){
    mysqli_query($link,"insert into guest value('','$guestName','$guestContent')");
    header("location:contact.php");
}

//留言板
$sqlData = "select*from guest";
$resultData = mysqli_query($link,$sqlData);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
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
</head>

<body class="contact_body">
    <div class="load">
    <!-- 目錄條 -->
    <nav class="navbar navbar-expand-lg navbar-dark position-fixed w-100" style="background-color: #28415b; z-index:2; top:0;">
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
                <li class="nav-item hvr-rectangle-out">
                    <a class="nav-link" href="portfolio.php" id="portfolio">PORTFOLIO</a>
                </li>
            
                <li class="nav-item active" style="background-color: #375a7f;">
                    <a class="nav-link" href="#" id="contact">與我聯繫</a>
                </li>
            </ul>

        </div>
    </nav>
    <div class="container contactBgImg animate__animated animate__fadeInUpBig">
        <!-- 與我聯繫 -->
        <div class="homepageTitle" style="margin-top: 100px;">
            <span style="font-family: 'Noto Sans TC', sans-serif;font-size: 20px;">與我聯繫</span><br>
            <span style="font-family: 'Noto Sans TC', sans-serif;font-size: 12px;">CONTACT ME</span>
        </div>
        <div>
        <p><img class="icon" src="../_image/envelope-alt.svg">&nbsp;&nbsp;teacafe333@gmail.com</p>
        <p><img class="icon" src="../_image/phone.svg" alt="">&nbsp;&nbsp;+886 921682905</p>
        <p><img class="icon" src="../_image/line.svg" alt="">&nbsp;&nbsp;g0131t27</p>
        </div>

        <!-- 留言板 -->
        <div class="homepageTitle mt-0">
            <span style="font-family: 'Noto Sans TC', sans-serif;font-size: 20px;">留言</span><br>
            <span style="font-family: 'Noto Sans TC', sans-serif;font-size: 12px;">MESSAGE BOARD</span>
        </div>
        <form method="post" action="" class="row">

            <div class="col-md-6">
                <label for="guestName" class="">姓名：</label>
                <div class="">
                    <input type="text" class="form-control" placeholder="林小兒" name="guestName" id="guestName" />
                </div>
                
                
                <label for="guestContent" class=" control-label">留言內容：</label>
                <div class="">
                    <textarea name="guestContent" class="form-control" id="guestContent" rows="5" placeholder="請輸入內容"></textarea>
                    <br>
                    <button type="submit" name="buttonSend" id="buttonSend" class="btn btn-primary mb-5">送出</button>
                </div>
            </div>
            <div class="col-md-6 ">
            <table class="contentTr">
            <tr>
              <td class="td_1">暱稱</td>
              <td class="td_2">留言內容</td>
            </tr>
            
            <?php while($row = mysqli_fetch_assoc($resultData)): ?>
            <tr style="color: #375a7f;">
              <td><?= $row['guestName']?></td>
              <td><?= $row['guestContent']?></td>
            </tr>
            <?php endwhile; ?>
        </table>
            </div>
        
        </form>
        <br><br><br>
        
        

    </div>
    <?php include("copyRight.php"); ?>
    </div>
    <div id="loading"></div>

    <script>
        $("#home").hover(function() {
            $("#home").html('首頁&nbsp;&nbsp;&nbsp;');
        }, function() {
            $("#home").html('HOME');
        })
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
        
    </script>
    
    

</body>

</html>
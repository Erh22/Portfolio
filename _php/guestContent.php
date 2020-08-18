<?php
require_once("connectTest.php");
//新增留言
$guestName=$_POST['guestName'];
$guestContent=$_POST['guestContent'];

if(isset($_POST["buttonSend"])){
    mysqli_query($link,"insert into guesttest value('','$guestName','$guestContent')");
    header("location:guestContent.php");
}


//留言板

$sqlData = "select*from guesttest";
$resultData = mysqli_query($link,$sqlData);

// $data=mysqli_query('select * from guesttest');



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <style>
        .container {
            margin: auto;
            background-color: #f5f5f5;
            width: 800px;
            padding-bottom: 20px;
        }

        .button {
            text-align: center;
            padding: 20px 0;
        }

        .top h3 {
            font-family: 微軟正黑體;
            text-align: center;
            padding: 10px 0;
        }

        .form-group {
            font-family: 微軟正黑體;
            font-size: 16px;
        }
        .top{
 margin:auto;
 width:60vw;
 text-align:right;
 padding:15vh 0 0 0;
 font-family:微軟正黑體;
}
/*.nav{
 background-color:#339;
 padding: 10px 0px;
 }*/
.nav a {
  color: #5a5a5a;
  font-size: 11px;
  font-weight: bold;
  text-transform: uppercase;
}

.nav li {
  display: inline;
}
 .CSSTableGenerator {
 margin:auto;
 padding:0px;
 width:60vw;
 }
 .CSSTableGenerator table{
    border-collapse: collapse;
    border-spacing: 0;
 width:100%;
 height:100%;
 margin:0px;padding:0px;
}.CSSTableGenerator tr:last-child td:last-child {
 -moz-border-radius-bottomright:9px;
 -webkit-border-bottom-right-radius:9px;
 border-bottom-right-radius:9px;
}
.CSSTableGenerator table tr:first-child td:first-child {
 -moz-border-radius-topleft:9px;
 -webkit-border-top-left-radius:9px;
 border-top-left-radius:9px;
}
.CSSTableGenerator table tr:first-child td:last-child {
 -moz-border-radius-topright:9px;
 -webkit-border-top-right-radius:9px;
 border-top-right-radius:9px;
 
}.CSSTableGenerator tr:last-child td:first-child{
 -moz-border-radius-bottomleft:9px;
 -webkit-border-bottom-left-radius:9px;
 border-bottom-left-radius:9px;
 
}.CSSTableGenerator tr:hover td{
 background-color:#005fbf;
 color:white;
}
.CSSTableGenerator td{
 vertical-align:middle;
 background-color:#e5e5e5;
 border:1px solid #999999;
 border-width:0px 1px 1px 0px;
 text-align:left;
 padding:8px;
 font-size:16px;
 font-family:Arial,微軟正黑體;
 font-weight:normal;
 color:#000000;
}.CSSTableGenerator tr:last-child td{
 border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
 border-width:0px 0px 1px 0px;
}.CSSTableGenerator tr:last-child td:last-child{
 border-width:0px 0px 0px 0px;
}
.CSSTableGenerator tr:first-child td{
  background:-o-linear-gradient(bottom, #005fbf 5%, #005fbf 100%); 
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #005fbf) );
  background:-moz-linear-gradient( center top, #005fbf 5%, #005fbf 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#005fbf"); 
  background: -o-linear-gradient(top,#005fbf,005fbf);
  background-color:#005fbf;
  text-align:center;
  font-size:20px;
  font-family:Arial, 微軟正黑體;
  font-weight:bold;
  color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td{
  background:-o-linear-gradient(bottom, #005fbf 5%, #005fbf 100%); 
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #005fbf) );
  background:-moz-linear-gradient( center top, #005fbf 5%, #005fbf 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#005fbf"); 
  background: -o-linear-gradient(top,#005fbf,005fbf);
  background-color:#005fbf;
}
    </style>
</head>

<body>
    <div class="container">
        <div class="top">
            <h3>新增留言</h3>
        </div>
        <form method="post" action="">
            <div>
                <label for="guestName" class="col-sm-4 control-label">暱稱：</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="您的暱稱" name="guestName" id="guestName" />
                </div>
            </div>
            <div>
                <label for="guestContent" class="col-sm-4 control-label">留言內容：</label>
                <div class="col-sm-6">
                    <textarea name="guestContent" class="form-control" id="guestContent" rows="5"></textarea>
                </div>
            </div>
            <div>
                <button type="submit" name="buttonSend" id="buttonSend"  class="btn">送出</button>
            </div>
        </form>

    </div>

    <div class="nav nav-tabs">
 
</div>

      
<p>&nbsp;</p>
<p>&nbsp;</p>



  <div class="CSSTableGenerator">
      <table align="center">
            <tr>
              <td width="25%">暱稱</td>
              <td width="75%">留言內容</td>
            </tr>
            <?php while($row = mysqli_fetch_assoc($resultData)): ?>
            <tr>
              <td><?= $row['guestName']?></td>
              <td><?= $row['guestContent']?></td>
            </tr>
            <?php endwhile; ?>
        </table>
 </div>
 

<br />


</body>

</html>
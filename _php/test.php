<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .lightbox {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, .8);
        }

        .lightbox_table {
            width: 100%;
            height: 100%;
        }

        .lightbox_table_cell {
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <button onclick="document.getElementById('lightbox').style.display='inline';">
        Show lightbox
    </button>
    <!-- LIGHTBOX CODE BEGIN -->
    <div id="lightbox" class="lightbox" style="display:none" onclick="document.getElementById('lightbox').style.display='none';">
        <table class="lightbox_table">
            <tr>
                <td class="lightbox_table_cell" align="center">
                    <div id="lightbox_content" style="width:300px; background-color:white; border:5px solid black;">
                        <img src="https://dummyimage.com/700x400/cad7de/0e5d8e" alt="">
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <!-- LIGHTBOX CODE END -->

</body>

</html>
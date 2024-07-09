<?php
include 'php/version.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Whiskeryfrog</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/whiskeryface.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body id="mainBody">
    <main>
        <div class="topPanel" id="topPage">
            <a href="index"><i class="fa-solid fa-house"></i>
                <div class="smallscreen"> Home</div>
            </a>
            <div class="rightSide">
                <a href="website/websiteupdate" id="versionnumber">
                    <div>V<?php echo  $version; ?></div>
                </a>
            </div>
        </div>
        <div class="containerMainplus">
            <div class="shaper">
                <a href="" class="anchorgroup">
                    <div class="containerMain">

                        <div class="limiter">
                            <span class="bigtext">404
                            </span>
                            <hr class="linebreaker2">
                            <p>That Page / Playthrough does not exists
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <footer>
            <div class="footer">
                <div class="leftside">
                    <div class="smallscreen"> Support me on:</div>
                    <a href="https://ko-fi.com/whiskeryfrog" target="_blank">
                        <i class="fas fa-ko-fi"></i>
                    </a>
                </div>
                <div class="rightSideF">
                    <div class="smallscreen">Follow me on:</div>
                    <a href="https://www.youtube.com/channel/UCWQhZn7Z-zg7VI_wpOLNKvA" target="_blank">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a href="https://odysee.com/@Whiskeryfrog" target="_blank">
                        <i class="fa-brands fa-odysee"></i>
                    </a>
                    <a href="https://github.com/Whiskeryfrog" target="_blank">
                        <i class="fa-brands fa-github"></i>
                    </a>
                </div>
            </div>
        </footer>
    </main>
</body>
<script src="js/app.js"></script>

</html>
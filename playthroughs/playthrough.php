<?php
include '../php/version.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Whiskeryfrog / Playthroughs</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../images/whiskeryface.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .bigtext {
            text-align: center;
        }

        .containerMain {
            margin: 15px;
        }

        .coffeetalk {
            padding-bottom: 65px;
        }

        @media (max-width: 1000px) {
            .coffeetalk {
                padding-bottom: 8px;
            }

        }

        @media (max-width: 500px) {
            .containerMain {
                margin: 5px 0;
            }

            .containerMainplus {
                margin: 0px 0px 0px 0px;
                background-color: #959088d5;
                border-radius: 0px;
                box-shadow: 4px 4px 0px 1px rgba(0, 0, 0, 0.45);
                -webkit-box-shadow: 4px 4px 0px 1px rgba(0, 0, 0, 0.45);
                -moz-box-shadow: 4px 4px 0px 1px rgba(0, 0, 0, 0.45);
                padding: 0px;
            }

            .bannerimage {
                width: 100%;
                max-width: 700px;
                align-content: center;
                height: auto;
                border-radius: 8px 8px 0 0;
                margin-bottom: 10px;
                object-fit: cover;
            }

        }
    </style>
</head>

<body>
    <main>
        <div class="topPanel" id="topPage">
            <a href="../index"><i class="fa-solid fa-house"></i>
                <div class="smallscreen"> Home</div>
            </a>
            <div class="rightSide">
                <a href="../website/websiteupdate">
                    <div>V<?php echo  $version; ?></div>
                </a>
            </div>
        </div>
        <div class="containerMainplus">

            <div class="limiter" style="color: white;">
                <br>
                <span class="bigtext">PLAYTHROUGHS</span>
            </div>
            <div class=" theTop">
                <header>
                    <div class="topPanel1">
                        <input type="text" id="searchInputwalk" placeholder=" Search playthrough">
                    </div>
                </header>
            </div>
            <div class="playthrough-wrapper">
                <a href="pokemonleafgreennuzlocke/leafgreennuzlockeplay" class="anchorgroup">
                    <div class="containerMain">
                        <img src="../images/leafgreenbanner.webp" class="bannerimage" alt="" width="300" height="150">
                        <span class="bigtext" style="display: block !important;">Pokemon Leafgreen Nuzlocke
                            (GBA)</span>
                    </div>
                </a>
                <a href="terrariabowrun/terrariabowrun" class="anchorgroup">
                    <div class="containerMain">
                        <img src="../images/terrariabanner.webp" class="bannerimage" alt="" width="300" height="150">
                        <span class="bigtext" style="display: block !important;">Terraria Bow Run - Expert Mode
                            (PC)</span>
                    </div>
                </a>
            </div>
            <div class="playthrough-wrapper">
                <a href="#" class="anchorgroup">
                    <div class="containerMain pokemoncrystal">
                        <img src="../images/pokemoncrystal.webp" class="bannerimage dead" alt="" width="300" height="150">
                        <span class="bigtext" style="display: block !important;">Pokemon Crystal Nuzlocke
                            (GBC)</span>
                    </div>
                </a>
                <a href="#" class="anchorgroup">
                    <div class="containerMain coffeetalk">
                        <img src="../images/coffeetalk.webp" class="bannerimage dead" alt="" width="300" height="150">
                        <span class="bigtext" style="display: block !important;">Coffee Talk (PC)</span>
                    </div>
                </a>
            </div>
            <div class="playthrough-wrapper">
                <a href="#" class="anchorgroup">
                    <div class="containerMain dinosaurking">
                        <img src="../images/dinosaurking.webp" class="bannerimage dead" alt="" width="300" height="150">
                        <span class="bigtext" style="display: block !important;">Dinosaur King (NDS)</span>
                    </div>
                </a>
                <a href="#" class="anchorgroup">
                    <div class="containerMain coromon">
                        <img src="../images/coromonbanner.webp" class="bannerimage dead" alt="" width="300" height="150">
                        <span class="bigtext" style="display: block !important;">Coromon (PC)</span>
                    </div>
                </a>
            </div>
            <div>
                <a href="#" class="anchorgroup" id="nogame" style="display: none;">
                    <div class="containerMain containerMainNoResult">
                        <span class="bigtext">No Playthrough Available
                        </span>
                    </div>
                </a>
            </div>
            <br>
        </div>

    </main>

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
    <script src="../js/app.js"></script>
</body>

</html>
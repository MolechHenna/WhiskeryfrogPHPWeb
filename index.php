<?php
include 'php/version.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="A repository for games that Whiskeryfrog has played on his YouTube channel">
    <title>Whiskeryfrog</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/whiskeryface.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/lite-yt-embed.css">
</head>

<body id="mainBody">
    <main>
        <div class="topPanel" id="topPage">
            <a href="index"><i class="fa-solid fa-house"></i>
                <div class="smallscreen"> Home</div>
            </a>
            <div class="rightSide">
                <a href="website/websiteupdate">
                    <div>V<?php echo  $version; ?></div>
                </a>
            </div>
        </div>
        <div class="containerMainplus">
            <div class="shaper">
                <div class="limiter" style="color: white;"><br>
                    <span class="bigtext">WELCOME TO MY CATALOGUE OF LET'S PLAYS</span>
                </div>
                <a href="playthroughs/playthrough" class="anchorgroup">
                    <div class="containerMain">
                        <div class="limiter">
                            <div class="wrapper">
                                <img src="images/leafgreenbanner.webp" class="item item1" alt="LeafGreen Banner" loading="lazy">
                                <img src="images/terrariabanner.webp" class="item item2 dead" alt="Terraria Banner" loading="lazy">
                                <img src="images/pokemoncrystal.webp" class="item item3 dead" alt="Pokemon Crystal Banner" loading="lazy">
                                <img src="images/coffeetalk.webp" class="item item4 dead" alt="Coffee TalkLeafGreen Banner" loading="lazy">
                                <img src="images/dinosaurking.webp" class="item item5 dead" alt="Dinosaur King LeafGreen Banner" loading="lazy">
                                <img src="images/coromonbanner.webp" class="item item6 dead" alt="Coromon LeafGreen Banner" loading="lazy">
                            </div>
                            <span class="bigtext">PLAYTHROUGHS
                            </span>
                        </div>
                    </div>
                </a>
                <hr class="linebreaker">
                <div class="limiter" style="color: white; ">
                    <span class="bigtext">My latest video on YouTube</span>
                </div>

                <lite-youtube videoid="7M3ql1IHEjo"></lite-youtube>

                <div class="subscriber-section">
                    <div class="youtube-button">
                        <i class="fa-brands fa-youtube"></i>
                        <p><span class="subscriber-count" id="subCount"></span>subscribers</p>
                    </div>
                </div>
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
    <?php
    $youtubeKey = 'AIzaSyAKZDq7y7jT-DenFTQA_TVxgKOuag55oMY ';
    $youtubeUser = 'UCWQhZn7Z-zg7VI_wpOLNKvA';

    // Make the API request
    $response = file_get_contents("https://www.googleapis.com/youtube/v3/channels?part=statistics&id={$youtubeUser}&key={$youtubeKey}");

    // Decode the JSON response
    $data = json_decode($response, true);

    // Extract the subscriber count
    $subCount = isset($data['items'][0]['statistics']['subscriberCount']) ? $data['items'][0]['statistics']['subscriberCount'] : 'N/A';
    ?>

    <script>
        const subCountElement = document.getElementById('subCount');
        subCountElement.innerHTML = "<?php echo $subCount; ?>";
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js" integrity="sha512-NQfB/bDaB8kaSXF8E77JjhHG5PM6XVRxvHzkZiwl3ddWCEPBa23T76MuWSwAJdMGJnmQqM0VeY9kFszsrBEFrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/app.js"></script>
    <script src="js/lite-yt-embed.js"></script>
</body>

</html>
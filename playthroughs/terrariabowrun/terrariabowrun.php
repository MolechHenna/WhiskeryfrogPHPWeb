<?php
include '../../php/version.php';
include 'php/bowsPopulate.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Whiskeryfrog Terraria Bow Run playthrough episodes and details inside said episode such as encounters, trainers and so much more.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Whiskeryfrog / Terraria Bow Run</title>
    <link rel="icon" href="../../images/whiskeryface.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="fonts/fonts.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" /> -->
</head>

<body>
    <div class="topPanel" id="topPage">
        <a href="../../index"><i class="fa-solid fa-house"></i>
            <div class="smallscreen"> Home</div>
        </a>
        <a href="../playthrough"><i class="fa-solid fa-gamepad"></i>
            <div class="smallscreen">Playthroughs</div>
        </a>
        <div class="openbtn">
            <a href="#" onclick="openNav()"><i class="fa-solid fa-bars"></i>
                <div class="smallscreen">Episodes</div>
            </a>
        </div>
        <div class="rightSide">
            <a href="../../website/websiteupdate">
                <div>V<?php echo  $version; ?></div>
            </a>
        </div>
    </div>


    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <div class="sidebaritems"><a href="#Introduction" class="tab-link" data-tab="Introduction">Introduction</a></div>
        <div class="sidebaritems"><a href="#Episode1" class="tab-link" data-tab="Episode1">Episode 1: A Bow Run That Does Not Start With Any Arrows!</a></div>
        <div class="sidebaritems"><a href="#Episode2" class="tab-link" data-tab="Episode2">Episode 2: Fishing For The Early META Pickaxe</a></div>
        <div class="sidebaritems"><a href="#Episode3" class="tab-link" data-tab="Episode3">Episode 3: UPGRADES People, UPGRADES</a></div>
        <div class="sidebaritems"><a href="#Episode4" class="tab-link" data-tab="Episode4">Episode 4: I Mine All Day</a></div>
        <div class="sidebaritems"><a href="#Episode5" class="tab-link" data-tab="Episode5">Episode 5: Double Trouble</a></div>
        <div class="sidebaritems"><a href="#Episode6" class="tab-link" data-tab="Episode6">Episode 6: NO! NOT THE BEES!</a></div>
        <div class="sidebaritems"><a href="#Episode7" class="tab-link" data-tab="Episode7">Episode 7: Brains and Bees</a></div>
        <div class="sidebaritems"><a href="#Episode7_5" class="tab-link" data-tab="Episode7_5">Episode 7.5: Hardmode Preparation</a></div>
        <div class="sidebaritems"><a href="#Episode8" class="tab-link" data-tab="Episode8">Episode 8: Flesh & Bone</a></div>
        <div class="sidebaritems"><a href="#Episode9" class="tab-link" data-tab="Episode9">Episode 9: Three Mech Bosses, One Episode</a></div>
        <div class="sidebaritems"><a href="#Episode10" class="tab-link" data-tab="Episode10">Episode 10: I'm Slowly Losing My Mind Over these Grind Sessions</a></div>
        <div class="sidebaritems"><a href="#Episode11" class="tab-link" data-tab="Episode11">Episode 11: Disaster Episode</a></div>
        <div class="sidebaritems"><a href="#Episode11_5" class="tab-link" data-tab="Episode11_5">Episode 11.5 : The Storm Before The Apocalypse</a></div>
        <div class="sidebaritems"><a href="#Episode12" class="tab-link" data-tab="Episode12">Episode 12 : The Corruption a of Man</a></div>
        <div class="sidebaritems"><a href="#Review" class="tab-link" data-tab="Review">Review</a></div>
    </div>
    <div id="main">
        <div class="containerMainplus">
            <div id="Introduction" class="tabcontent">
                <span class="bigtext">TERRARIA BOW RUN - EXPERT MODE</span>
                <div class="bannerimage">
                    <img src="sprites/terrarialogo.svg" class="logobanner" alt="Terraria Bow Run logo">
                </div>
                <div class="containerMain">
                    <p class="textjustify">Hello everyone and welcome to my Terraria Bow Run - Expert Mode series where I play Terraria on Expert mode but the only weapons I am allowed to use are Bows.</p>
                    <p class="textjustify">This was probably the first time I played something other than Minecraft or Pokémon on my channel which was a nice change of pace since I just finished my Pokémon LeafGreen Nuzlocke series on my channel.</p>
                    </p>
                    <p class="textjustify">Note that this playthrough first aired on YouTube on May 2, 2020 and ended on May 18, 2020 and the version of Terraria during that time was still 1.3.5.3.</p>
                    </p>
                    <p class="textjustify">This series will show you my journey throughout Terraria from building my first house to fighting the Moon Lord</p>
                    </p>
                </div>
                <hr class="hrbreaker">
                <span class="bigtext">BOWS, REPEATERS, AND ARROWS</span>
                <div class="containerMain">
                    <p class="textjustify">This is the list of weapons I am allowed during the playthrough.</p>
                    <div class="table-container">
                        <span class="bigtext">BOWS</span>
                        <div class="bows">
                            <?php populateWeapon($bows); ?>
                        </div>
                    </div>
                </div>
                <hr class="hrbreaker">
                <span class="bigtext">ITEMS, ACCESSORIES, ARMOUR</span>
                <div class="containerMain">
                    <p class="textjustify">These are items, armour, and others that can help the player during a Bow Run</p>

                </div>
                <hr class="hrbreaker">
                <div class="containerMain clickable" onclick="toggleElement('displayrules')">
                    <span class="bigtext">RULES</span>
                    <div id="displayrules" class="rules-content" style="height: 0;">
                        <hr class="hrbreaker">
                        <ul>
                            <li>
                                <p>I have to play in Expert mode which was the hardest difficulty during the recording of the series.</p>
                            </li>
                            <li>
                                <p>The only weapons I am allowed to use are Bows, Repeaters and Arrows which are listed in the Bows and Arrows section of the introduction.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="Episode1" class="tabcontent" style="display: none;">
                <div class="limiter" style="color: white;">
                    <br>
                    <span class="bigtext">POKEMON LEAFGREEN NUZLOCKE</span>
                </div>
                <span class="bigtext slightlysmall" style="color: white;">Introduction to the Playthrough Episode1</span>
                <img src="../../images/pokemonlogoleafgreenNoBg.webp" class="bannerimage bannerNewSize" alt="pokemon leafgreen nuzlocke logo">
                <div class="containerMain">
                    <p class="textjustify">During the pandemic, with nothing better to do, I decided to play and record my attempt at a Nuzlocke challenge in a Pokémon LeafGreen playthrough.</p>
                    <p class="textjustify">This series will detail my team composition, wild encounters, and trainers I fought. Each episode will also include my thoughts and reflections on the challenges I faced during my playthrough.
                    </p>
                </div>
            </div>
        </div>
    </div>
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
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('.example').each(function() {
                new DataTable(this, {
                    searching: false,
                    paging: false,
                    info: false,
                    scrollX: true
                });
            });
        });
    </script> -->
    <script src="js/app.js"></script>
</body>

</html>
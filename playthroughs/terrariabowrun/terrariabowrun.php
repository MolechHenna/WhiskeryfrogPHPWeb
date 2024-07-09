<?php
include '../../php/version.php';
include 'php/bowsPopulate.php';
include 'php/arrowPopulate.php';
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
    <link rel="stylesheet" href="../../css/lite-yt-embed.css">
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
    <main>
        <div id="main">
            <div class="containerMainplus">
                <div class="shaper">
                    <div id="Introduction" class="tabcontent">
                        <div class="shaper">
                            <span class="bigtext">TERRARIA BOW RUN - EXPERT MODE</span>
                            <div class="bannerimage">
                                <img src="sprites/terrarialogo.svg" class="logobanner" alt="Terraria Bow Run logo">
                            </div>
                            <div class="containerMain">
                                <p class="textjustify">Hello everyone and welcome to my Terraria Bow Run - Expert Mode series where I play Terraria on Expert mode but the only weapons I am allowed to use are Bows.</p>
                                <p class="textjustify">This was probably the first time I played something other than Minecraft or Pokémon on my channel which was a nice change of pace since I just finished my Pokémon LeafGreen Nuzlocke series on my channel.</p>
                                </p>
                                <p class="textjustify">Note that this playthrough first aired on YouTube on May 2, 2020 and ended on May 18, 2020 and the version of Terraria during that time was still on version <span style="color: yellow;">1.3.5.3.</span></p>
                                </p>
                                <p class="textjustify">This series will show you my journey throughout Terraria from building my first house to fighting the Moon Lord</p>
                                </p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">WORLD SETTINGS</span>
                            <div class="containerMain">
                                <p class="textjustify">These are the settings for the world that I created.</p>
                                <hr class="hrbreaker">
                                <p>World Size - Medium</p>
                                <p>Difficulty - Expert</p>
                                <p>World Evil - Random (Crimson)</p>
                                <p>World Name - Hit The Target</p>
                                <p>World Seed - 2.2.2.295402853</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">WEAPONS</span>
                            <div class="containerMain">
                                <p class="textjustify">This is the list of weapons I am allowed during the playthrough.</p>
                                <span class="mediumtext">BOWS</span>
                                <div class="prehardmodeBanner">Pre-hardmode</div>
                                <div class="bows">
                                    <?php populateWeapon($preHardmodeBows); ?>
                                </div>
                                <div class="hardmodeBanner">Hardmode</div>
                                <div class="bows">
                                    <?php populateWeapon($hardmodeBows); ?>
                                </div>
                                <hr class="hrbreaker">
                                <span class="mediumtext">REPEATERS</span>
                                <div class="hardmodeBanner">Hardmode</div>
                                <div class="bows">
                                    <?php populateWeapon($repeaters); ?>
                                </div>
                                <hr class="hrbreaker">
                                <span class="mediumtext">Arrows</span>
                                <div class="prehardmodeBanner">Pre-hardmode</div>
                                <div class="bows">
                                    <?php populateArrow($preHardmodeArrows); ?>
                                </div>
                                <div class="hardmodeBanner">Hardmode</div>
                                <div class="bows">
                                    <?php populateArrow($hardmodeArrows); ?>
                                </div>
                            </div>
                            <hr class="hrbreaker">
                            <div class="containerMain clickable" onclick="toggleElement('displayrules')">
                                <span class="mediumtext">RULES</span>
                                <div id="displayrules" class="rules-content" style="height: 0;">
                                    <hr class="hrbreaker">
                                    <ul>
                                        <li>
                                            <p>I have to play in Expert mode which was the hardest difficulty during the recording of the series.</p>
                                        </li>
                                        <li>
                                            <p>The only weapons I am allowed to use are Bows, Repeaters and Arrows which are listed in the weapons section of the introduction.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Episode1" class="tabcontent" style="display: none;">
                        <span class="mediumtext">Episode 1: A Bow Run That Does Not Start With Any Arrows!</span>
                        <lite-youtube class="youtubevideo" videoid="x0wNpI51TXk"></lite-youtube>
                        <div class="episode-button">
                            <a href="#Introduction" class="tab-link nextprev-button" data-tab="Introduction"><- Introduction</a>
                                    <a href="#Episode2" class="tab-link nextprev-button" data-tab="Episode2">Episode 1 -></a>
                        </div>
                        <div class="containerMain">
                            <p class="textjustify">The first episode started and ended with a whimper considering I was not too informed on how to create one of the primary weapons of an Archer which is the arrow.</p>
                        </div>
                        <hr class="hrbreaker">
                        <span class="mediumtext">HIGHLIGHTS</span>
                        <div class="highlight-container">
                            <div><img src="sprites/episodeimage/imageep1_1.webp" class="logobanner" alt="building a house"></div>
                            <div>
                                <p>I made my standard base which is near spawn so even if I die I would still be in a relatively safe area. Also, I made a couple of rooms in order for town NPCs to move in, in order to utilize their items especially the merchant since he sells arrows (at the time of recording, I did not know how you could craft arrows).</p>
                            </div>
                        </div>
                        <div class="highlight-container reverse">
                            <div>
                                <p>I found a cave and mined for a while for resources and also searched for valuable items and accessories in order to progress in game.</p>
                            </div>
                            <div><img src="sprites/episodeimage/imageep1_2.webp" class="logobanner" alt="building a house"></div>
                        </div>
                        <div class="highlight-container">
                            <div><img src="sprites/episodeimage/imageep1_3.webp" class="logobanner" alt="building a house"></div>
                            <div>
                                <p>The merchant finally moved in my base so I could buy a lot of arrows for my bow run in order to fight enemies properly.</p>
                            </div>
                        </div>
                        <hr class="hrbreaker">
                        <div class="containerMain clickable" onclick="toggleElement('displayepisode1')">
                            <span class="mediumtext">CHARACTER SETUP AT THE END OF THE EPISODE</span>
                            <div id="displayepisode1" class="rules-content" style="height: 0;">
                                <hr class="hrbreaker">
                                <div class="bowMasterDetails">
                                    <div>
                                        <div class="containerArmour padding-s">BowMaster64 / Life:100 <img src="sprites/others/PlayerHeart.png" class="" alt="heart"> / Mana:20 <img src="sprites/others/Mana.png" class="" alt="heart"></div>
                                        <img src="sprites/characters/episodeTerraria.png" class="characterStyle" alt="">
                                    </div>
                                    <div class="armourDetails">
                                        Armour
                                        <div class="containerArmour padding-s">
                                            4
                                        </div>
                                        <div class="containerArmour"><img src="sprites/armor/Shadewood_Helmet.png" class="" alt="Shadewood Helmet"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Shadewood_Breastplate.png" class="" alt="Shadewood Breastplate"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Boreal_Wood_Greaves.png" class="" alt="Boreal Wood Greeves"></div>
                                    </div>

                                </div>
                                <br>
                                Main Weapons
                                <div class="accessories">
                                    <div class="containerArmour"><img src="sprites/bows/Tungsten_Bow.png" class="" alt=""></div>
                                    <div class="containerArmour"><img src="sprites/arrows/Wooden_Arrow.webp" class="" alt=""></div>
                                    <div class="containerArmour"><img src="sprites/arrows/Jester's_Arrow.webp" class="" alt=""></div>
                                    <div class="containerArmour"><img src="sprites/arrows/Frostburn_Arrow.webp" class="" alt=""></div>
                                    <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                    <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                </div>
                                <br>
                                Accessories
                                <div class="accessories">
                                    <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                    <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                    <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                    <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                    <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                    <div class="containerArmour notdiv"><img src="#" class="" alt="">?</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Episode2" class="tabcontent" style="display: none;">
                        <div class="shaper">
                            <span class="mediumtext">Episode 2: Fishing For The Early META Pickaxe</span>
                            <lite-youtube class="youtubevideo" videoid="GwYaqM6AhFw"></lite-youtube>
                            <div class="episode-button">
                                <a href="#Episode1" class="tab-link nextprev-button" data-tab="Episode1"><- Episode 1</a>
                                        <a href="#Episode3" class="tab-link nextprev-button" data-tab="Episode3">Episode 3 -></a>
                            </div>
                            <div class="containerMain">
                                <p class="textjustify">This episode was monstly spent on me attempting to reach (and failing) the ocean biome of my world in order to get the best pre-hardmode pickaxe you can have (at the time of recording).</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>
                            <div class="highlight-container">
                                <div><img src="sprites/episodeimage/imageep2_1.webp" class="logobanner" alt="building a house"></div>
                                <div>
                                    <p>I got ambushed by enemies in the crimson biome which happened many times in this episode in order to get the ocean biome of my world. I also tried to get to the west side of the world but there was also a crimson biome on that side.</p>
                                </div>
                            </div>
                            <div class="highlight-container reverse">
                                <div>
                                    <p>I discovered the entrance of the dungeon in my world which is located on the east side of my world which I am not ready to enter just yet.</p>
                                </div>
                                <div><img src="sprites/episodeimage/imageep2_2.webp" class="logobanner" alt="building a house"></div>
                            </div>
                            <div class="highlight-container">
                                <div><img src="sprites/episodeimage/imageep2_3.webp" class="logobanner" alt="building a house"></div>
                                <div>
                                    <p>I finally reached the ocean biome of my world and started fishing for a Reaver shark which at the time, was the best pre-hardmode pickaxe you could get.</p>
                                </div>
                            </div>
                            <hr class="hrbreaker">
                            <div class="containerMain clickable" onclick="toggleElement('displayepisode2')">
                                <span class="mediumtext">CHARACTER SETUP AT THE END OF THE EPISODE</span>
                                <div id="displayepisode2" class="rules-content" style="height: 0;">
                                    <hr class="hrbreaker">
                                    <div class="bowMasterDetails">
                                        <div>
                                            <div class="containerArmour padding-s">BowMaster64 / Life:100 <img src="sprites/others/PlayerHeart.png" class="" alt="heart"> / Mana:20 <img src="sprites/others/Mana.png" class="" alt="heart"></div>
                                            <img src="sprites/characters/episodeTerraria.png" class="characterStyle" alt="">
                                        </div>
                                        <div class="armourDetails">
                                            Armour
                                            <div class="containerArmour padding-s">
                                                6
                                            </div>
                                            <div class="containerArmour"><img src="sprites/armor/Shadewood_Helmet.png" class="" alt="Shadewood Helmet"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Shadewood_Breastplate.png" class="" alt="Shadewood Breastplate"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Boreal_Wood_Greaves.png" class="" alt="Boreal Wood Greeves"></div>
                                        </div>
                                    </div>
                                    <br>
                                    Main Weapons
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/bows/Tungsten_Bow.png" class="" alt=""></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Wooden_Arrow.webp" class="" alt=""></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Jester's_Arrow.webp" class="" alt=""></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Frostburn_Arrow.webp" class="" alt=""></div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                    </div>
                                    <br>
                                    Accessories
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/armor/Tsunami_in_a_Bottle.png" class="" alt=""></div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                        <div class="containerArmour notdiv"><img src="#" class="" alt="">?</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Episode3" class="tabcontent" style="display: none;">
                        <div class="shaper">
                            <span class="mediumtext">Episode 3: UPGRADES People, UPGRADES</span>
                            <lite-youtube class="youtubevideo" videoid="PgW91aFswKQ"></lite-youtube>
                            <div class="episode-button">
                                <a href="#Episode2" class="tab-link nextprev-button" data-tab="Episode2"><- Episode 2</a>
                                        <a href="#Episode4" class="tab-link nextprev-button" data-tab="Episode4">Episode 4 -></a>
                            </div>
                            <div class="containerMain">
                                <p class="textjustify">This episode was me spending time mining for minerals in order to upgrade my current armour. </p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>
                            <div class="highlight-container">
                                <div><img src="sprites/episodeimage/imageep3_1.webp" class="logobanner" alt="building a house"></div>
                                <div>
                                    <p>I went to a cave and mined for more minerals and resources.</p>
                                </div>
                            </div>
                            <div class="highlight-container reverse">
                                <div>
                                    <p>I crafted a bunch of armour to upgrade my current one.</p>
                                </div>
                                <div><img src="sprites/episodeimage/imageep3_3.webp" class="logobanner" alt="building a house"></div>
                            </div>
                            <div class="highlight-container">
                                <div><img src="sprites/episodeimage/imageep3_2.webp" class="logobanner" alt="building a house"></div>
                                <div>
                                    <p>I went to a desert cave (antlion hill?) in order to mine for more resources.</p>
                                </div>
                            </div>
                            <hr class="hrbreaker">
                            <div class="containerMain clickable" onclick="toggleElement('displayepisode3')">
                                <span class="mediumtext">CHARACTER SETUP AT THE END OF THE EPISODE</span>
                                <div id="displayepisode3" class="rules-content" style="height: 0;">
                                    <hr class="hrbreaker">
                                    <div class="bowMasterDetails">
                                        <div>
                                            <div class="containerArmour padding-s">BowMaster64 / Life:140 <img src="sprites/others/PlayerHeart.png" class="" alt="heart"> / Mana:20 <img src="sprites/others/Mana.png" class="" alt="heart"></div>
                                            <img src="sprites/characters/episodeTerraria2.png" class="characterStyle" alt="">
                                        </div>
                                        <div class="armourDetails">
                                            Armour
                                            <div class="containerArmour padding-s">
                                                10
                                            </div>
                                            <div class="containerArmour"><img src="sprites/armor/Tungsten_Helmet.png" class="" alt="Tungsten Helmet"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Lead_Chainmail.png" class="" alt="Lead Chainmail"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Lead_Greaves.png" class="" alt="lead Greeves"></div>
                                        </div>

                                    </div>
                                    <br>
                                    Main Weapons
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/bows/Gold_Bow.png" class="" alt=""></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Wooden_Arrow.webp" class="" alt=""></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Jester's_Arrow.webp" class="" alt=""></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Frostburn_Arrow.webp" class="" alt=""></div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                    </div>
                                    <br>
                                    Accessories
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/armor/Tsunami_in_a_Bottle.png" class="" alt=""></div>
                                        <div class="containerArmour"><img src="sprites/armor/Aglet.png" class="" alt=""></div>
                                        <div class="containerArmour"><img src="sprites/armor/Shoe_Spikes.png" class="" alt=""></div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                        <div class="containerArmour notdiv"><img src="#" class="" alt="">?</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Episode4" class="tabcontent" style="display: none;">
                        <div class="shaper">
                            <span class="mediumtext">Episode 4: I Mine All Day</span>
                            <lite-youtube class="youtubevideo" videoid="cdW_gFCxoHo"></lite-youtube>
                            <div class="episode-button">
                                <a href="#Episode3" class="tab-link nextprev-button" data-tab="Episode3"><- Episode 3</a>
                                        <a href="#Episode5" class="tab-link nextprev-button" data-tab="Episode5">Episode 5 -></a>
                            </div>
                            <div class="containerMain">
                                <p class="textjustify">This episode was spent mostly mining and also prepraring myself for the upcoming boss fights that I will need to face in the early game.</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>
                            <div class="highlight-container">
                                <div><img src="sprites/episodeimage/imageep4_1.webp" class="logobanner" alt="building a house"></div>
                                <div>
                                    <p>I went to a snow biome cave and decided to mine and explore for resources and accessries that may come in handy during the boss fight. </p>
                                </div>
                            </div>
                            <div class="highlight-container reverse">
                                <div>
                                    <p>After mining, I built an arena beside my base to make the fight with the Eye of Cthulhu more managable.</p>
                                </div>
                                <div><img src="sprites/episodeimage/imageep4_2.webp" class="logobanner" alt="building a house"></div>
                            </div>
                            <div class="highlight-container">
                                <div><img src="sprites/episodeimage/imageep4_3.webp" class="logobanner" alt="building a house"></div>
                                <div>
                                    <p>For some reason I decided to break one of the crimson hearts inside a crimson biome for some reason. I think I was trying to summon the meteorite early in my game in order to atleast have a better armour set than what I currently have.</p>
                                </div>
                            </div>
                            <hr class="hrbreaker">
                            <div class="containerMain clickable" onclick="toggleElement('displayepisode4')">
                                <span class="mediumtext">CHARACTER SETUP AT THE END OF THE EPISODE</span>
                                <div id="displayepisode4" class="rules-content" style="height: 0;">
                                    <hr class="hrbreaker">
                                    <div class="bowMasterDetails">
                                        <div>
                                            <div class="containerArmour padding-s">BowMaster64 / Life:180 <img src="sprites/others/PlayerHeart.png" class="" alt="heart"> / Mana:20 <img src="sprites/others/Mana.png" class="" alt="heart"></div>
                                            <img src="sprites/characters/episodeTerraria3.png" class="characterStyle" alt="">
                                        </div>
                                        <div class="armourDetails">
                                            Armour
                                            <div class="containerArmour padding-s">
                                                10
                                            </div>
                                            <div class="containerArmour"><img src="sprites/armor/Viking_Helmet.png" class="" alt="Viking Helmet"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Lead_Chainmail.png" class="" alt="Lead Chainmail"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Lead_Greaves.png" class="" alt="Lead Greaves"></div>
                                        </div>
                                    </div>
                                    <br>
                                    Main Weapons
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/bows/Gold_Bow.png" class="" alt=""></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Wooden_Arrow.webp" class="" alt=""></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Jester's_Arrow.webp" class="" alt=""></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Frostburn_Arrow.webp" class="" alt=""></div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                    </div>
                                    <br>
                                    Accessories
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/armor/Tsunami_in_a_Bottle.png" class="" alt=""></div>
                                        <div class="containerArmour"><img src="sprites/armor/Aglet.png" class="" alt=""></div>
                                        <div class="containerArmour"><img src="sprites/armor/Shoe_Spikes.png" class="" alt=""></div>
                                        <div class="containerArmour"><img src="sprites/armor/Metal_Detector.png" class="" alt=""></div>
                                        <div class="containerArmour"><img src="sprites/armor/Flurry_Boots.png" class="" alt=""></div>
                                        <div class="containerArmour notdiv"><img src="#" class="" alt="">?</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Episode5" class="tabcontent" style="display: none;">
                        <div class="shaper">
                            <span class="mediumtext">Episode 5: Double Trouble</span>
                            <lite-youtube class="youtubevideo" videoid="q3YLO81w2TA"></lite-youtube>
                            <div class="episode-button">
                                <a href="#Episode4" class="tab-link nextprev-button" data-tab="Episode4"><- Episode 4</a>
                                        <a href="#Episode6" class="tab-link nextprev-button" data-tab="Episode6">Episode 6 -></a>
                            </div>
                            <div class="containerMain">
                                <p class="textjustify">Just like what the title and thumbnail would suggest, I fought two bosses separately in this episode in order to progress fast in my playthrough.</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>
                            <div class="highlight-container">
                                <div><img src="sprites/episodeimage/imageep5_1.webp" class="logobanner" alt="building a house"></div>
                                <div>
                                    <p>I found the meteorite crash and mined (mostly blew it up) its resources in order to upgrade my armour further. </p>
                                </div>
                            </div>
                            <div class="highlight-container reverse">
                                <div>
                                    <p>I fought (cheesed) King slime just so I can say I beat him. Fighting him is not really mandatory to progress but he does drop some loot that you can use for whatever reason.</p>
                                    <p><span style="color: yellow;">Strategy:</span> The cheese stategy for King Slime (which was removed on 1.4) is basically having a long rope, climb on top of it and throw grenades (I used a Bow and Arrow because I am on a Bow run) at King Slime and he basically cannot teleport to your location.</p>
                                </div>
                                <div><img src="sprites/episodeimage/imageep5_2.webp" class="logobanner" alt="building a house"></div>
                            </div>
                            <!-- <div class="containerMain">
                                <span class="mediumtext">KING SLIME <img src="sprites/monsters/Map_Icon_King_Slime.png" border="0" alt="King Slime" /></span>
                                <div class="boss-section">
                                    <div class="bowMasterDetails">
                                        <img src="sprites/monsters/King_Slime.gif" border="0" alt="King Slime" />
                                        <div class="armourDetails">
                                            <div class="containerArmour">Damage: 64</div>
                                            <div class="containerArmour">Max Life: 2800</div>
                                            <div class="containerArmour">Defense: 10</div>
                                            <div class="containerArmour">Knockback Resistance: 100%</div>
                                        </div>
                                    </div>
                                    <div class="expert-mode-banner">Expert-mode Loot</div>
                                    <div class="bossloot">
                                        <div class="loot">
                                            <img src="sprites/others/Lesser_Healing_Potion.png" class="" alt="lesser healing potion">
                                            <span>(5-15) 100%</span>
                                        </div>
                                        <div class="loot"><img src="sprites/others/King_Slime_Trophy.png" class="" alt="king slime trophy"><span>10%</span></div>
                                        <div class="loot expert-loot"><img src="sprites/others/Treasure_Bag_(King_Slime).png" class="" alt="treasure bag"><span>100%</span></div>
                                    </div>
                                    <div class="expert-mode-banner">Treasure Bag Loot</div>
                                    <div class="bossloot">
                                        <div class="loot"><img src="sprites/others/Royal_Gel.png" class="" alt="Royal Gel"><span>100%</span></div>
                                        <div class="loot"><img src="sprites/others/King_Slime_Mask.png" class="" alt="King Slime mask"><span>14.29%</span></div>
                                        <div class="loot"><img src="sprites/others/Slimy_Saddle.png" class="" alt="Slimy Saddle"><span>50%</span></div>
                                    </div>
                                    <div class="prehardmodeBanner">Two of the following items will be dropped</div>
                                    <div class="bossloot">
                                        <div class="loot"><img src="sprites/armor/Ninja_Hood.png" class="" alt="Ninja Hood"><span>67%</span></div>
                                        <div class="loot"><img src="sprites/armor/Ninja_Shirt.png" class="" alt="Ninja Shirt"><span>67%</span></div>
                                        <div class="loot"><img src="sprites/armor/Ninja_Pants.png" class="" alt="Ninja Pants"><span>67%</span></div>
                                        <div class="loot"><img src="sprites/others/Slime_Gun.png" class="" alt="Slime Gun"><span>50%</span></div>
                                    </div>
                                    <div class="bossloot">
                                        <div class="loot"><img src="sprites/others/Slime_Hook.png" class="" alt="Slime Hook"><span>50%</span></div>
                                        <div class="loot"><img src="sprites/others/Solidifier.png" class="" alt="Solidifier"><span>100%</span></div>
                                        <div class="loot"><img src="sprites/others/Gold_Coin.gif" class="" alt="Gold Coin"><span>(1) 100%</span></div>
                                    </div>
                                </div>
                            </div>
                            <br><br> -->
                            <div class="highlight-container">
                                <div><img src="sprites/episodeimage/imageep5_3.webp" class="logobanner" alt="building a house"></div>
                                <div>
                                    <p>Fought the Eye Of Cthulthu in order to get crimtane ore for me to upgrade my stuff.</p>
                                    <p><span style="color: yellow;">Strategy:</span> To have an easy time with the Eye of Cthulhu, make a long platform and make sure to have Hermes boots (or any of its variants) equipped in order to keep distance with EOC.</p>
                                </div>
                            </div>
                            <!-- <div class="containerMain">
                                <span class="mediumtext">EYE OF CTHULTHU <img src="sprites/monsters/Map_Icon_Eye_of_Cthulhu_(first_form).png" onmouseover="this.src='sprites/monsters/Map_Icon_Eye_of_Cthulhu_(second_form).png'" onmouseout="this.src='sprites/monsters/Map_Icon_Eye_of_Cthulhu_(first_form).png'" border="0" alt="Eye of Cthulhu" /></span>
                                <div class="boss-section">
                                    <div class="bowMasterDetails">
                                        <img src="sprites/monsters/Eye_of_Cthulhu_(Phase_1).gif" onmouseover="this.src='sprites/monsters/Eye_of_Cthulhu_(Second_Phase).gif'" onmouseout="this.src='sprites/monsters/Eye_of_Cthulhu_(Phase_1).gif'" border="0" alt="Eye of Cthulhu" />
                                        <div class="armourDetails">
                                            <div class="containerArmour">Damage: 30 - 36/40(<145 HP)</div>
                                                    <div class="containerArmour">Max Life: 3640</div>
                                                    <div class="containerArmour">Defense: 12 - 0</div>
                                                    <div class="containerArmour">Knockback Resistance: 100%</div>
                                            </div>
                                        </div>
                                        <div class="expert-mode-banner">Expert-mode Loot</div>
                                        <div class="bossloot">
                                            <div class="loot">
                                                <img src="sprites/others/Lesser_Healing_Potion.png" class="" alt="lesser healing potion">
                                                <span>(5-15) 100%</span>
                                            </div>
                                            <div class="loot"><img src="sprites/others/Eye_of_Cthulhu_Trophy.png" class="" alt="eye of cthulhu trophy"><span>10%</span></div>
                                            <div class="loot expert-loot"><img src="sprites/others/Treasure_Bag_(Eye_of_Cthulhu).png" class="" alt="treasure bag"><span>100%</span></div>
                                        </div>
                                        <div class="expert-mode-banner">Treasure Bag Loot</div>
                                        <div class="bossloot">
                                            <div class="loot"><img src="sprites/others/Shield_of_Cthulhu.png" class="" alt="Shield of Cthulthu"><span>100%</span></div>
                                            <div class="loot"><img src="sprites/others/Eye_of_Cthulhu_Mask.png" class="" alt="eye of cthulhu mask"><span>14.29%</span></div>
                                            <div class="loot"><img src="sprites/others/Binoculars.png" class="" alt="Binoculars"><span>3.33%</span></div>
                                            <div class="loot"><img src="sprites/others/Crimtane_Ore.png" class="" alt="Crimtane Ore"><span>(30-90) 100%</span></div>
                                            <div class="loot"><img src="sprites/others/Crimson_Seeds.png" class="" alt="Crimson Seeds"><span>(1-3) 100%</span></div>
                                            <div class="loot"><img src="sprites/others/Gold_Coin.gif" class="" alt="Gold Coin"><span>(3) 100%</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <hr class="hrbreaker">
                            <div class="containerMain clickable" onclick="toggleElement('displayepisode5')">
                                <span class="mediumtext">CHARACTER SETUP AT THE END OF THE EPISODE</span>
                                <div id="displayepisode5" class="rules-content" style="height: 0;">
                                    <hr class="hrbreaker">
                                    <div class="bowMasterDetails">
                                        <div>
                                            <div class="containerArmour padding-s">BowMaster64 / Life:220 <img src="sprites/others/PlayerHeart.png" class="" alt="heart"> / Mana:20 <img src="sprites/others/Mana.png" class="" alt="heart"></div>
                                            <img src="sprites/characters/episodeTerraria4.png" class="characterStyle" alt="">
                                        </div>
                                        <div class="armourDetails">
                                            Armour
                                            <div class="containerArmour padding-s">
                                                28
                                            </div>
                                            <div class="containerArmour"><img src="sprites/armor/Meteor_Helmet.png" class="" alt="Metero Helmet"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Meteor_Suit.png" class="" alt="Meteor Suit"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Meteor_Leggings.png" class="" alt="Meteor Leggings"></div>
                                        </div>
                                    </div>
                                    <br>
                                    Main Weapons
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/bows/Tendon_Bow.png" class="" alt="Tendon Bow"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Wooden_Arrow.webp" class="" alt="Wooden Arrow"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Jester's_Arrow.webp" class="" alt="Jester's Arrow"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Frostburn_Arrow.webp" class="" alt="Frostburn Arrow"></div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                    </div>
                                    <br>
                                    Accessories
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/armor/Tsunami_in_a_Bottle.png" class="" alt="Tsunami in a bottle"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Royal_Gel.png" class="" alt="royal gel"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Shield_of_Cthulhu.png" class="" alt="shield of cthulhu"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Shark_Tooth_Necklace.png" class="" alt="shark tooth necklace"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Flurry_Boots.png" class="" alt="flurry boots"></div>
                                        <div class="containerArmour notdiv"><img src="#" class="" alt="">?</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Episode6" class="tabcontent" style="display: none;">
                        <div class="shaper">
                            <span class="mediumtext">Episode 6: NO! NOT THE BEES!</span>
                            <lite-youtube class="youtubevideo" videoid="ttx-jv5cZ7k"></lite-youtube>
                            <div class="episode-button">
                                <a href="#Episode5" class="tab-link nextprev-button" data-tab="Episode5"><- Episode 5</a>
                                        <a href="#Episode7" class="tab-link nextprev-button" data-tab="Episode7">Episode 7 -></a>
                            </div>
                            <div class="containerMain">
                                <p class="textjustify">A lot of things happened in this episode where it's so many that I decided to sped up majority of the parts in this video. In hindsight, in my opinion I thing I should have just let it played it. Also, this is probably the best thumbnail I have ever created.</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>
                            <div class="highlight-container">
                                <div><img src="sprites/episodeimage/imageep6_1.webp" class="logobanner" alt="building a house"></div>
                                <div>
                                    <p>I fought the Goblin army and successfully defended most of my NPC from them.</p>
                                    <p><span style="color: yellow;">Strategy:</span> Just keep moving and make sure to use crowd control weapons or weapons that can pierce through more than one enemy.</p>
                                </div>
                            </div>
                            <div class="highlight-container reverse">
                                <div>
                                    <p>Explored the Jungle underground and rescued the Goblin Tinkerer which only spawns after a successfully finishing a Goblin army wave.</p>
                                </div>
                                <div><img src="sprites/episodeimage/imageep6_2.webp" class="logobanner" alt="building a house"></div>
                            </div>
                            <div class="highlight-container">
                                <div><img src="sprites/episodeimage/imageep6_3.webp" class="logobanner" alt="building a house"></div>
                                <div>
                                    <p>Found a Bee's nest and decided to fight Queen Bee although I failed.</p>
                                </div>
                            </div>
                            <div class="highlight-container reverse">
                                <div>
                                    <p>Made a hellevator and mined some hellstone ores to further upgrade my armour.</p>
                                </div>
                                <div><img src="sprites/episodeimage/imageep6_4.webp" class="logobanner" alt="building a house"></div>
                            </div>
                            <hr class="hrbreaker">
                            <div class="containerMain clickable" onclick="toggleElement('displayepisode6')">
                                <span class="mediumtext">CHARACTER SETUP AT THE END OF THE EPISODE</span>
                                <div id="displayepisode6" class="rules-content" style="height: 0;">
                                    <hr class="hrbreaker">
                                    <div class="bowMasterDetails">
                                        <div>
                                            <div class="containerArmour padding-s">BowMaster64 / Life:400 <img src="sprites/others/PlayerHeart.png" class="" alt="heart"> / Mana:20 <img src="sprites/others/Mana.png" class="" alt="heart"></div>
                                            <img src="sprites/characters/episodeTerraria5.png" class="characterStyle" alt="">
                                        </div>
                                        <div class="armourDetails">
                                            Armour
                                            <div class="containerArmour padding-s">
                                                25
                                            </div>
                                            <div class="containerArmour"><img src="sprites/armor/Molten_Helmet.png" class="" alt="Molten Helmet"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Molten_Breastplate.png" class="" alt="Molten Suit"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Meteor_Leggings.png" class="" alt="Meteor Leggings"></div>
                                        </div>
                                    </div>
                                    <br>
                                    Main Weapons
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/bows/Molten_Fury.png" class="" alt="Molten Fury Bow"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Wooden_Arrow.webp" class="" alt="Wooden Arrow"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Jester's_Arrow.webp" class="" alt="Jester's Arrow"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Frostburn_Arrow.webp" class="" alt="Frostburn Arrow"></div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                    </div>
                                    <br>
                                    Accessories
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/armor/Cloud_in_a_Bottle.webp" class="" alt="Cloud in a bottle"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Royal_Gel.png" class="" alt="royal gel"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Shield_of_Cthulhu.png" class="" alt="shield of cthulhu"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Obsidian_Skull_(old).webp" class="" alt="Obsidian skull"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Lightning_Boots.webp" class="" alt="Lighting boots"></div>
                                        <div class="containerArmour notdiv"><img src="#" class="" alt="">?</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Episode7" class="tabcontent" style="display: none;">
                        <div class="shaper">
                            <span class="mediumtext">Episode 7: Brains and Bees</span>
                            <lite-youtube class="youtubevideo" videoid="mB9AEMTt2QQ"></lite-youtube>
                            <div class="episode-button">
                                <a href="#Episode6" class="tab-link nextprev-button" data-tab="Episode6"><- Episode 6</a>
                                        <a href="#Episode7_5" class="tab-link nextprev-button" data-tab="Episode7_5">Episode 7.5 -></a>
                            </div>
                            <div class="containerMain">
                                <p class="textjustify">This episode was focused on me trying to defeat the next two bosses on my list. It was a pretty decent episode considering it only focused on two important things.</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>
                            <div class="highlight-container">
                                <div><img src="sprites/episodeimage/imageep7_1.webp" class="logobanner" alt="building a house"></div>
                                <div>
                                    <p>I fought the Queen bee on the jungle surface multiple times in order for me to get a better bow which is The Bee's Knees which is an extremely useful weapon againsts upcoming bosses.</p>
                                    <p><span style="color: yellow;">Strategy:</span> DON'T FIGHT THE QUEEN BEE ON THE SURFACE OF THE JUNGLE. If she is outside a Jungle underground, she will be on her enraged state where her attacks and movements are faster than normal. Also build a long platform that has many elevation in order to avoid her ranged attacks and especially her charge attacks.</p>
                                </div>
                            </div>
                            <!-- <div class="containerMain">
                                <span class="mediumtext">QUEEN BEE <img src="sprites/monsters/Map_Icon_Queen_Bee.png" border="0" alt="Queen Bee" /></span>
                                <div class="boss-section">
                                    <div class="bowMasterDetails">
                                        <img src="sprites/monsters/Queen_Bee_(old).gif" border="0" alt="Queen Bee" />
                                        <div class="armourDetails">
                                            <div class="containerArmour">Damage: 54(Melee)/44(Ranged)</div>
                                            <div class="containerArmour">Max Life: 4760</div>
                                            <div class="containerArmour">Defense: 8-28</div>
                                            <div class="containerArmour">Knockback Resistance: 100%</div>
                                        </div>
                                    </div>
                                    <div class="expert-mode-banner">Expert-mode Loot</div>
                                    <div class="bossloot">
                                        <div class="loot">
                                            <img src="sprites/others/Bottled_Honey.png" class="" alt="Bottled Honey">
                                            <span>(5-15) 100%</span>
                                        </div>
                                        <div class="loot"><img src="sprites/others/Queen_Bee_Trophy.png" class="" alt="Queen Bee trophy"><span>10%</span></div>
                                        <div class="loot expert-loot"><img src="sprites/others/Treasure_Bag_(Queen_Bee).png" class="" alt="treasure bag"><span>100%</span></div>
                                    </div>
                                    <div class="expert-mode-banner">Treasure Bag Loot</div>
                                    <div class="bossloot">
                                        <div class="loot"><img src="sprites/others/Hive_Pack.png" class="" alt="Hive Pack"><span>100%</span></div>
                                        <div class="loot"><img src="sprites/others/Queen_Bee_Mask.png" class="" alt="Queen Bee mask"><span>14.29%</span></div>
                                    </div>
                                    <div class="prehardmodeBanner">One of the following items will be dropped</div>
                                    <div class="bossloot">
                                        <div class="loot"><img src="sprites/others/Bee_Gun.png" class="" alt="Bee Gun"><span>33%</span></div>
                                        <div class="loot"><img src="sprites/others/Bee_Keeper.png" class="" alt="Bee Keeper"><span>33%</span></div>
                                        <div class="loot"><img src="sprites/bows/The_Bee's_Knees.png" class="" alt="Bee's Knees"><span>33%</span></div>
                                        <div class="loot"><img src="sprites/others/Honey_Comb.png" class="" alt="Honey Comb"><span>33%</span></div>
                                    </div>
                                    <div class="bossloot">
                                        <div class="loot"><img src="sprites/others/Nectar.png" class="" alt="Nectar"><span>11%</span></div>
                                        <div class="loot"><img src="sprites/others/Honeyed_Goggles.png" class="" alt="Honeyed Goggles"><span>11%</span></div>
                                        <div class="loot"><img src="sprites/others/Hive_Wand.png" class="" alt="Hive Wand"><span>100%</span></div>
                                    </div>
                                    <div class="prehardmodeBanner">And another one of the following items will be dropped</div>
                                    <div class="bossloot">
                                        <div class="loot"><img src="sprites/others/Bee_Hat.png" class="" alt="Bee Hat"><span>33%</span></div>
                                        <div class="loot"><img src="sprites/others/Bee_Shirt.png" class="" alt="Bee Shirt"><span>33%</span></div>
                                        <div class="loot"><img src="sprites/others/Bee_Pants.png" class="" alt="Bee Pants"><span>33%</span></div>
                                    </div>
                                    <div class="bossloot">
                                        <div class="loot"><img src="sprites/others/Beenade.png" class="" alt="Beenade"><span>(10-29) 100%</span></div>
                                        <div class="loot"><img src="sprites/others/Bee_Wax.png" class="" alt="Bee Wax"><span>(17-29) 100%</span></div>
                                        <div class="loot"><img src="sprites/others/Gold_Coin.gif" class="" alt="Gold Coin"><span>(10) 100%</span></div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br> -->
                            <div class="highlight-container reverse">
                                <div>
                                    <p>I went to a Crimson biome "cave" and decided to build an arena inside the "heart" and fought the Brain of Cthulhu which was challenging because of its tricky way of fighting you.</p>
                                    <p><span style="color: yellow;">Strategy:</span> Make sure to build an arena with an open space that also has many elevations for movement. Use weapons that can pierce through one target in order to get rid of Creepers fast in the BoC first phase. On its second phase, you would have to keep a sharp eye on which one of the four BoCs is, at first it is easy to tell because the fakes are less opaque than the real one but the lower its health the harder it is to spot. If you are having a hard time spotting it, just look at the minimap.</p>
                                </div>
                                <div><img src="sprites/episodeimage/imageep7_2.webp" class="logobanner" alt="building a house"></div>
                            </div>
                            <!-- <div class="containerMain">
                                <span class="mediumtext">BRAIN OF CTHULHU <img src="sprites/monsters/Map_Icon_Brain_of_Cthulhu.png" border="0" alt="Brain of Cthulhu" /></span>
                                <div class="boss-section">
                                    <div class="bowMasterDetails">
                                        <img src="sprites/monsters/Brain_of_Cthulhu_(First_Phase).gif" onmouseover="this.src='sprites/monsters/Brain_of_Cthulhu_(Second_Phase).gif'" onmouseout="this.src='sprites/monsters/Brain_of_Cthulhu_(First_Phase).gif'" border="0" alt="Brain of Cthulhu" />
                                        <div class="armourDetails">
                                            <div class="containerArmour">Damage: 54</div>
                                            <div class="containerArmour">Max Life: 2125</div>
                                            <div class="containerArmour">Defense: 14</div>
                                            <div class="containerArmour">Knockback Resistance: 100% - 60%</div>
                                        </div>
                                        <img src="sprites/monsters/Creeper_(old).png" border="0" alt="Creepers" />
                                        <div class="armourDetails">
                                            <div class="containerArmour">Damage: 36</div>
                                            <div class="containerArmour">Max Life: 170</div>
                                            <div class="containerArmour">Defense: 10</div>
                                            <div class="containerArmour">Knockback Resistance: 28%</div>
                                        </div>
                                    </div>
                                    <div class="bossloot">
                                        <div style="margin-right:10px;">
                                            <div class="expert-mode-banner">Expert-mode Loot - Brain of Cthulhu</div>
                                            <div class="bossloot">
                                                <div class="loot">
                                                    <img src="sprites/others/Lesser_Healing_Potion.png" class="" alt="Lesser Healing Potion">
                                                    <span>(5-15) 100%</span>
                                                </div>
                                                <div class="loot"><img src="sprites/others/Brain_of_Cthulhu_Trophy.png" class="" alt="Brain of Cthulhu trophy"><span>10%</span></div>
                                                <div class="loot expert-loot"><img src="sprites/others/Treasure_Bag_(Brain_of_Cthulhu).png" class="" alt="treasure bag"><span>100%</span></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="expert-mode-banner">Expert-mode Loot - Creeper</div>
                                            <div class="bossloot">
                                                <div class="loot">
                                                    <img src="sprites/others/Tissue_Sample.png" class="" alt="Tissue Sample">
                                                    <span>(2-5) 66.67%</span>
                                                </div>
                                                <div class="loot"><img src="sprites/others/Crimtane_Ore.png" class="" alt="Crimtane Ore"><span>(5-12) 66.67%</span></div>
                                                <div class="loot"><img src="sprites/others/PlayerHeart.png" class="" alt="Hearts"><span>50%</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="expert-mode-banner">Treasure Bag Loot</div>
                                    <div class="bossloot">
                                        <div class="loot"><img src="sprites/others/Brain_of_Confusion.png" class="" alt="Brain of Confusion"><span>100%</span></div>
                                        <div class="loot"><img src="sprites/others/Brain_of_Cthulhu_Mask.png" class="" alt="Brain of Cthulhu mask"><span>14.29%</span></div>
                                        <div class="loot"><img src="sprites/others/Crimtane_Ore.png" class="" alt="Crimtane Ore"><span>(40-90) 100%</span></div>
                                    </div>
                                    <div class="bossloot">
                                        <div class="loot"><img src="sprites/others/Tissue_Sample.png" class="" alt="Tissue Sample"><span>(10-19) 100%</span></div>
                                        <div class="loot"><img src="sprites/others/Bone_Rattle.png" class="" alt="Bone Rattle"><span>5%</span></div>
                                        <div class="loot"><img src="sprites/others/Gold_Coin.gif" class="" alt="Gold Coin"><span>(1) 100%</span></div>
                                    </div>
                                </div>
                            </div> -->
                            <hr class="hrbreaker">
                            <div class="containerMain clickable" onclick="toggleElement('displayepisode7')">
                                <span class="mediumtext">CHARACTER SETUP AT THE END OF THE EPISODE</span>
                                <div id="displayepisode7" class="rules-content" style="height: 0;">
                                    <hr class="hrbreaker">
                                    <div class="bowMasterDetails">
                                        <div>
                                            <div class="containerArmour padding-s">BowMaster64 / Life:400 <img src="sprites/others/PlayerHeart.png" class="" alt="heart"> / Mana:20 <img src="sprites/others/Mana.png" class="" alt="heart"></div>
                                            <img src="sprites/characters/episodeTerraria6.png" class="characterStyle" alt="">
                                        </div>
                                        <div class="armourDetails">
                                            Armour
                                            <div class="containerArmour padding-s">
                                                28
                                            </div>
                                            <div class="containerArmour"><img src="sprites/armor/Molten_Helmet.png" class="" alt="Molten Helmet"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Molten_Breastplate.png" class="" alt="Molten Suit"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Molten_Greaves.png" class="" alt="Molten Leggings"></div>
                                        </div>
                                    </div>
                                    <br>
                                    Main Weapons
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/bows/The_Bee's_Knees.png" class="" alt="The Bee's Knees"></div>
                                        <div class="containerArmour"><img src="sprites/bows/Molten_Fury.png" class="" alt="Molten Fury Bow"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Wooden_Arrow.webp" class="" alt="Wooden Arrow"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Jester's_Arrow.webp" class="" alt="Jester's Arrow"></div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                    </div>
                                    <br>
                                    Accessories
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/armor/Hive_Pack.png" class="" alt="Hive Pack"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Royal_Gel.png" class="" alt="royal gel"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Shield_of_Cthulhu.png" class="" alt="shield of cthulhu"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Shark_Tooth_Necklace.png" class="" alt="Shark Tooth Necklace"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Lightning_Boots.webp" class="" alt="Lighting boots"></div>
                                        <div class="containerArmour notdiv"><img src="#" class="" alt="">?</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Episode7_5" class="tabcontent" style="display: none;">
                        <div class="shaper">
                            <span class="mediumtext">Episode 7.5: Hardmode Preparation</span>
                            <lite-youtube class="youtubevideo" videoid="73Atqn_2Bvw"></lite-youtube>
                            <div class="episode-button">
                                <a href="#Episode7" class="tab-link nextprev-button" data-tab="Episode7"><- Episode 7</a>
                                        <a href="#Episode8" class="tab-link nextprev-button" data-tab="Episode8">Episode 8 -></a>
                            </div>
                            <div class="containerMain">
                                <p class="textjustify">This episode was mostly spent trying to prepare myself for the upcoming boss fights as well as preparing myself for hardmode.</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>
                            <div class="highlight-container">
                                <div><img src="sprites/episodeimage/imageep7_5_1.webp" class="logobanner" alt="building a house"></div>
                                <div>
                                    <p>I built a new base for me and my NPCs which has a flower farm on top of it. Also, the base kinda resembles an arrow which is an homage to the series.</p>
                                </div>
                            </div>
                            <div class="highlight-container reverse">
                                <div>
                                    <p>I built another base on the jungle biome of my world in order to prepare myself for hardmode where in 1.3 at night, you can buy Leaf Wings from the Witch Doctor</p>
                                </div>
                                <div><img src="sprites/episodeimage/imageep7_5_2.webp" class="logobanner" alt="building a house"></div>
                            </div>
                            <div class="highlight-container">
                                <div><img src="sprites/episodeimage/imageep7_5_3.webp" class="logobanner" alt="building a house"></div>
                                <div>
                                    <p>Created a mob grinder on the snow biome so I can farm Ice golems on hardmode.</p>
                                </div>
                            </div>
                            <div class="highlight-container reverse">
                                <div>
                                    <p>Created a long platform in the underworld in order to make the fight with the Wall of flesh easier. </p>
                                </div>
                                <div><img src="sprites/episodeimage/imageep7_5_4.webp" class="logobanner" alt="building a house"></div>
                            </div>
                            <hr class="hrbreaker">
                            <div class="containerMain clickable" onclick="toggleElement('displayepisode7_5')">
                                <span class="mediumtext">CHARACTER SETUP AT THE END OF THE EPISODE</span>
                                <div id="displayepisode7_5" class="rules-content" style="height: 0;">
                                    <hr class="hrbreaker">
                                    <div class="bowMasterDetails">
                                        <div>
                                            <div class="containerArmour padding-s">BowMaster64 / Life:400 <img src="sprites/others/PlayerHeart.png" class="" alt="heart"> / Mana:20 <img src="sprites/others/Mana.png" class="" alt="heart"></div>
                                            <img src="sprites/characters/episodeTerraria6.png" class="characterStyle" alt="">
                                        </div>
                                        <div class="armourDetails">
                                            Armour
                                            <div class="containerArmour padding-s">
                                                28
                                            </div>
                                            <div class="containerArmour"><img src="sprites/armor/Molten_Helmet.png" class="" alt="Molten Helmet"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Molten_Breastplate.png" class="" alt="Molten Suit"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Molten_Greaves.png" class="" alt="Molten Leggings"></div>
                                        </div>
                                    </div>
                                    <br>
                                    Main Weapons
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/bows/The_Bee's_Knees.png" class="" alt="The Bee's Knees"></div>
                                        <div class="containerArmour"><img src="sprites/bows/Molten_Fury.png" class="" alt="Molten Fury Bow"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Wooden_Arrow.webp" class="" alt="Wooden Arrow"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Jester's_Arrow.webp" class="" alt="Jester's Arrow"></div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                    </div>
                                    <br>
                                    Accessories
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/armor/Hive_Pack.png" class="" alt="Hive Pack"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Royal_Gel.png" class="" alt="royal gel"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Shield_of_Cthulhu.png" class="" alt="shield of cthulhu"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Obsidian_Skull_(old).webp" class="" alt="Obsidian Skull"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Lightning_Boots.webp" class="" alt="Lighting boots"></div>
                                        <div class="containerArmour notdiv"><img src="#" class="" alt="">?</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Episode8" class="tabcontent" style="display: none;">
                        <div class="shaper">
                            <span class="mediumtext">Episode 8: Flesh & Bone</span>
                            <lite-youtube class="youtubevideo" videoid="7HK1-7gxeGQ"></lite-youtube>
                            <div class="episode-button">
                                <a href="#Episode7_5" class="tab-link nextprev-button" data-tab="Episode7_5"><- Episode 7.5</a>
                                        <a href="#Episode9" class="tab-link nextprev-button" data-tab="Episode9">Episode 9 -></a>
                            </div>
                            <div class="containerMain">
                                <p class="textjustify">This episode was first spent recaping what I did on the last episode as well as some off-screen things that I have done with my world. Also, I dediced to fight the two remaining pre-hardmode bosses that are left.</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>
                            <div class="highlight-container">
                                <div><img src="sprites/episodeimage/imageep8_1.webp" class="logobanner" alt="Fighting Skeletron"></div>
                                <div>
                                    <p>I went to the entrance of the dungeon at night and fought Skeletron in order to gain access to the dungeon and upgrade my armour that is more fitting of a ranger class.</p>
                                    <p><span style="color: yellow;">Strategy:</span> Build a platform with many elevations. When fighting it, just keep moving especially if Skeletron does the spinning attack which if you are caught by it, will result to you being stun locked and then killed.</p>
                                </div>
                            </div>
                            <!-- <div class="containerMain">
                                <span class="mediumtext">SKELETRON <img src="sprites/monsters/Map_Icon_Skeletron.png" border="0" alt="Skeletron" /></span>
                                <div class="boss-section">
                                    <div class="bowMasterDetails">
                                        <img src="sprites/monsters/Skeletron_Head.png" alt="Skeletron" />
                                        <div class="armourDetails">
                                            <div class="containerArmour">Damage: 70</div>
                                            <div class="containerArmour">Max Life: 8800</div>
                                            <div class="containerArmour">Defense: 10+25 per hand alive, 0-25 per hand alive</div>
                                            <div class="containerArmour">Knockback Resistance: 100%</div>
                                        </div>
                                        <img src="sprites/monsters/Skeletron_Hand_(NPC)_(old).png" border="0" alt="Skeletron Hand" />
                                        <div class="armourDetails">
                                            <div class="containerArmour">Damage: 44</div>
                                            <div class="containerArmour">Max Life: 1560</div>
                                            <div class="containerArmour">Defense: 14</div>
                                            <div class="containerArmour">Knockback Resistance: 100%</div>
                                        </div>
                                    </div>
                                    <div class="expert-mode-banner">Expert-mode Loot - Skeletron</div>
                                    <div class="bossloot">
                                        <div class="bossloot">
                                            <div class="loot">
                                                <img src="sprites/others/Lesser_Healing_Potion.png" class="" alt="Lesser Healing Potion">
                                                <span>(5-15) 100%</span>
                                            </div>
                                            <div class="loot"><img src="sprites/others/Skeletron_Trophy.png" class="" alt="Skeletron trophy"><span>10%</span></div>
                                            <div class="loot expert-loot"><img src="sprites/others/Treasure_Bag_(Skeletron).png" class="" alt="treasure bag"><span>100%</span></div>
                                        </div>
                                    </div>
                                    <div class="expert-mode-banner">Treasure Bag Loot</div>
                                    <div class="bossloot">
                                        <div class="loot"><img src="sprites/others/Bone_Glove.png" class="" alt="Bone Glove"><span>100%</span></div>
                                    </div>
                                    <div class="prehardmodeBanner">One of the following items will be dropped</div>
                                    <div class="bossloot">
                                        <div class="loot"><img src="sprites/others/Skeletron_Mask.png" class="" alt="Skeleton Mask"><span>33%</span></div>
                                        <div class="loot"><img src="sprites/others/Skeletron_Hand.png" class="" alt="Skeletron hand"><span>33%</span></div>
                                        <div class="loot"><img src="sprites/others/Book_of_Skulls.png" class="" alt="Book of Skulls"><span>33%</span></div>
                                        <div class="loot"><img src="sprites/others/Gold_Coin.gif" class="" alt="Gold Coin"><span>(5) 100%</span></div>
                                    </div>
                                </div>
                            </div>
                            <br><br> -->
                            <div class="highlight-container reverse">
                                <div>
                                    <p>I built another base on the jungle biome of my world in order to prepare myself for hardmode where in 1.3 at night, you can buy Leaf Wings from the Witch Doctor</p>
                                    <p><span style="color: yellow;">Strategy:</span> Build a long hell bridge that spans halfway through the whole underworld. Use weapons that pierces enemies in order for your attacks to actually hit the Wall of Flesh itself instead of the Hungries and leeches.</p>
                                </div>
                                <div><img src="sprites/episodeimage/imageep8_2.webp" class="logobanner" alt="Fighting Wall of Flesh"></div>
                            </div>
                            <!-- <div class="containerMain">
                                <span class="mediumtext">WALL OF FLESH <img src="sprites/monsters/Map_Icon_Wall_of_Flesh.png" border="0" alt="Wall of Flesh" /></span>
                                <div class="boss-section">
                                    <div class="bowMasterDetails">
                                        <img src="sprites/monsters/Wall_of_Flesh.gif" alt="Wall of Flesh" />
                                        <div class="armourDetails">
                                            <div class="containerArmour">Damage: 150</div>
                                            <div class="containerArmour">Max Life: 11200</div>
                                            <div class="containerArmour">Defense: 18</div>
                                            <div class="containerArmour">Knockback Resistance: 100%</div>
                                        </div>
                                    </div>
                                    <div class="expert-mode-banner">Expert-mode Loot - Wall of Flesh</div>
                                    <div class="bossloot">
                                        <div class="bossloot">
                                            <div class="loot">
                                                <img src="sprites/others/Healing_Potion.png" class="" alt="Healing Potion">
                                                <span>(5-15) 100%</span>
                                            </div>
                                            <div class="loot"><img src="sprites/others/Wall_of_Flesh_Trophy.png" class="" alt="Wall of Flesh trophy"><span>10%</span></div>
                                            <div class="loot expert-loot"><img src="sprites/others/Treasure_Bag_(Wall_of_Flesh).png" class="" alt="treasure bag"><span>100%</span></div>
                                        </div>
                                    </div>
                                    <div class="expert-mode-banner">Treasure Bag Loot</div>
                                    <div class="bossloot">
                                        <div class="loot"><img src="sprites/others/Demon_Heart.png" class="" alt="Demon Heart"><span>100%</span></div>
                                        <div class="loot"><img src="sprites/others/Wall_of_Flesh_Mask.png" class="" alt="Wall of Flesh Mask"><span>14.29%</span></div>
                                        <div class="loot"><img src="sprites/others/Pwnhammer.png" class="" alt="Pwnhammer"><span>100%</span></div>
                                    </div>
                                    <div class="prehardmodeBanner">One of the following items will be dropped</div>
                                    <div class="bossloot">
                                        <div class="loot"><img src="sprites/others/Warrior_Emblem.png" class="" alt="Warrior Emblem"><span>25%</span></div>
                                        <div class="loot"><img src="sprites/others/Ranger_Emblem.png" class="" alt="Ranger Emblem"><span>25%</span></div>
                                        <div class="loot"><img src="sprites/others/Sorcerer_Emblem.png" class="" alt="Sorcerer Emblem"><span>25%</span></div>
                                        <div class="loot"><img src="sprites/others/Summoner_Emblem.png" class="" alt="Summoner Embem"><span>25%</span></div>
                                    </div>
                                    <div class="prehardmodeBanner">And also one of the following items will be dropped</div>
                                    <div class="bossloot">
                                        <div class="loot"><img src="sprites/others/Breaker_Blade.png" class="" alt="Breaker Blade"><span>33.33%</span></div>
                                        <div class="loot"><img src="sprites/others/Clockwork_Assault_Rifle.png" class="" alt="Clockwork Assault Rifle"><span>33.33%</span></div>
                                        <div class="loot"><img src="sprites/others/Laser_Rifle.png" class="" alt="Laser Rifle"><span>33.33%</span></div>
                                        <div class="loot"><img src="sprites/others/Gold_Coin.gif" class="" alt="Gold Coin"><span>(8) 100%</span></div>
                                    </div>
                                </div>
                            </div>
                            <br><br> -->
                            <div class="highlight-container">
                                <div><img src="sprites/episodeimage/imageep8_3.webp" class="logobanner" alt="Hallow Biome"></div>
                                <div>
                                    <p>After transforming my world into hardmode, I search and looked for where the Hallow spawned within my world.</p>
                                </div>
                            </div>
                            <hr class="hrbreaker">
                            <div class="containerMain clickable" onclick="toggleElement('displayepisode8')">
                                <span class="mediumtext">CHARACTER SETUP AT THE END OF THE EPISODE</span>
                                <div id="displayepisode8" class="rules-content" style="height: 0;">
                                    <hr class="hrbreaker">
                                    <div class="bowMasterDetails">
                                        <div>
                                            <div class="containerArmour padding-s">BowMaster64 / Life:400 <img src="sprites/others/PlayerHeart.png" class="" alt="heart"> / Mana:20 <img src="sprites/others/Mana.png" class="" alt="heart"></div>
                                            <img src="sprites/characters/episodeTerraria7.png" class="characterStyle" alt="">
                                        </div>
                                        <div class="armourDetails">
                                            Armour
                                            <div class="containerArmour padding-s">
                                                30
                                            </div>
                                            <div class="containerArmour"><img src="sprites/armor/Necro_Helmet.png" class="" alt="Necro Helmet"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Necro_Breastplate.png" class="" alt="necro breastplate"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Necro_Greaves.png" class="" alt="necro greaves"></div>
                                        </div>
                                    </div>
                                    <br>
                                    Main Weapons
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/bows/The_Bee's_Knees.png" class="" alt="The Bee's Knees"></div>
                                        <div class="containerArmour"><img src="sprites/bows/Molten_Fury.png" class="" alt="Molten Fury Bow"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Wooden_Arrow.webp" class="" alt="Wooden Arrow"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Jester's_Arrow.webp" class="" alt="Jester's Arrow"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Hellfire_Arrow.webp" class="" alt="Hellfire Arrow"></div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                    </div>
                                    <br>
                                    Accessories
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/armor/Hive_Pack.png" class="" alt="Hive Pack"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Royal_Gel.png" class="" alt="royal gel"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Shield_of_Cthulhu.png" class="" alt="shield of cthulhu"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Shark_Tooth_Necklace.png" class="" alt="Sharktooth Necklace"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Lightning_Boots.webp" class="" alt="Lighting boots"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Ranger_Emblem.webp" class="" alt="Lighting boots"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Episode9" class="tabcontent" style="display: none;">
                        <div class="shaper">
                            <span class="mediumtext">Episode 9: Three Mech Bosses, One Episode</span>
                            <lite-youtube class="youtubevideo" videoid="7FMItw5FlNg"></lite-youtube>
                            <div class="episode-button">
                                <a href="#Episode8" class="tab-link nextprev-button" data-tab="Episode8"><- Episode 8</a>
                                        <a href="#Episode10" class="tab-link nextprev-button" data-tab="Episode10">Episode 10 -></a>
                            </div>
                            <div class="containerMain">
                                <p class="textjustify">The episode was mostly sped up to prepare myself with early hardmode in order to fight the three mechanical bosses IN ONE EPISODE.</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>
                            <div class="highlight-container">
                                <div><img src="sprites/episodeimage/imageep9_1.webp" class="logobanner" alt="Fighting Skeletron"></div>
                                <div>
                                    <p>I first built a platform above mt base where I will fight The Destroyer. Then I fought The Destroyer which was the easiest boss out of the three mechanical bosses</p>
                                    <p><span style="color: yellow;">Strategy:</span> Build a platform way above ground and just make to sure to not get hit by the lasers and the head of the destroyer. The only real tip I could give with regards to weapons is use Daedalus Stormbow with Holy Arrows, THAT'S IT.</p>
                                </div>
                            </div>
                            <!-- <div class="containerMain">
                                <span class="mediumtext">THE DESTROYER <img src="sprites/monsters/Map_Icon_The_Destroyer.png" border="0" alt="The destroyer" /></span>
                                <div class="boss-section">
                                    <div class="bowMasterDetails">
                                        <img src="sprites/monsters/The_Destroyer.png" alt="Destroyer" />
                                        <div class="armourDetails">
                                            <div class="containerArmour">Damage: 280(Head), 93/72(Meelee/Laser Body), 68(Tail)</div>
                                            <div class="containerArmour">Max Life: 120000</div>
                                            <div class="containerArmour">Defense: 0(Head), 30(Body), 35(Tail)</div>
                                            <div class="containerArmour">Knockback Resistance: 100%</div>
                                        </div>
                                    </div>
                                    <div class="expert-mode-banner">Expert-mode Loot - Skeletron</div>
                                    <div class="bossloot">
                                        <div class="bossloot">
                                            <div class="loot">
                                                <img src="sprites/others/Lesser_Healing_Potion.png" class="" alt="Lesser Healing Potion">
                                                <span>(5-15) 100%</span>
                                            </div>
                                            <div class="loot"><img src="sprites/others/Skeletron_Trophy.png" class="" alt="Skeletron trophy"><span>10%</span></div>
                                            <div class="loot expert-loot"><img src="sprites/others/Treasure_Bag_(Skeletron).png" class="" alt="treasure bag"><span>100%</span></div>
                                        </div>
                                    </div>
                                    <div class="expert-mode-banner">Treasure Bag Loot</div>
                                    <div class="bossloot">
                                        <div class="loot"><img src="sprites/others/Bone_Glove.png" class="" alt="Bone Glove"><span>100%</span></div>
                                    </div>
                                    <div class="prehardmodeBanner">One of the following items will be dropped</div>
                                    <div class="bossloot">
                                        <div class="loot"><img src="sprites/others/Skeletron_Mask.png" class="" alt="Skeleton Mask"><span>33%</span></div>
                                        <div class="loot"><img src="sprites/others/Skeletron_Hand.png" class="" alt="Skeletron hand"><span>33%</span></div>
                                        <div class="loot"><img src="sprites/others/Book_of_Skulls.png" class="" alt="Book of Skulls"><span>33%</span></div>
                                        <div class="loot"><img src="sprites/others/Gold_Coin.gif" class="" alt="Gold Coin"><span>(5) 100%</span></div>
                                    </div>
                                </div>
                            </div>
                            <br><br> -->
                            <div class="highlight-container reverse">
                                <div>
                                    <p>I fought Skeletron Prime which was a bit more challenging but succeeded nonetheless</p>
                                    <p><span style="color: yellow;">Strategy:</span> The fight is similar with Skeletron where you just need to keep your distance and make sure to not get caught up with its spinning head attack.</p>
                                </div>
                                <div><img src="sprites/episodeimage/imageep9_2.webp" class="logobanner" alt="Fighting Wall of Flesh"></div>
                            </div>
                            <!-- <div class="containerMain">
                                <span class="mediumtext">SKELETRON PRIME <img src="sprites/monsters/Map_Icon_Wall_of_Flesh.png" border="0" alt="Wall of Flesh" /></span>
                                <div class="boss-section">
                                    <div class="bowMasterDetails">
                                        <img src="sprites/monsters/Wall_of_Flesh.gif" alt="Wall of Flesh" />
                                        <div class="armourDetails">
                                            <div class="containerArmour">Damage: 150</div>
                                            <div class="containerArmour">Max Life: 11200</div>
                                            <div class="containerArmour">Defense: 18</div>
                                            <div class="containerArmour">Knockback Resistance: 100%</div>
                                        </div>
                                    </div>
                                    <div class="expert-mode-banner">Expert-mode Loot - Wall of Flesh</div>
                                    <div class="bossloot">
                                        <div class="bossloot">
                                            <div class="loot">
                                                <img src="sprites/others/Healing_Potion.png" class="" alt="Healing Potion">
                                                <span>(5-15) 100%</span>
                                            </div>
                                            <div class="loot"><img src="sprites/others/Wall_of_Flesh_Trophy.png" class="" alt="Wall of Flesh trophy"><span>10%</span></div>
                                            <div class="loot expert-loot"><img src="sprites/others/Treasure_Bag_(Wall_of_Flesh).png" class="" alt="treasure bag"><span>100%</span></div>
                                        </div>
                                    </div>
                                    <div class="expert-mode-banner">Treasure Bag Loot</div>
                                    <div class="bossloot">
                                        <div class="loot"><img src="sprites/others/Demon_Heart.png" class="" alt="Demon Heart"><span>100%</span></div>
                                        <div class="loot"><img src="sprites/others/Wall_of_Flesh_Mask.png" class="" alt="Wall of Flesh Mask"><span>14.29%</span></div>
                                        <div class="loot"><img src="sprites/others/Pwnhammer.png" class="" alt="Pwnhammer"><span>100%</span></div>
                                    </div>
                                    <div class="prehardmodeBanner">One of the following items will be dropped</div>
                                    <div class="bossloot">
                                        <div class="loot"><img src="sprites/others/Warrior_Emblem.png" class="" alt="Warrior Emblem"><span>25%</span></div>
                                        <div class="loot"><img src="sprites/others/Ranger_Emblem.png" class="" alt="Ranger Emblem"><span>25%</span></div>
                                        <div class="loot"><img src="sprites/others/Sorcerer_Emblem.png" class="" alt="Sorcerer Emblem"><span>25%</span></div>
                                        <div class="loot"><img src="sprites/others/Summoner_Emblem.png" class="" alt="Summoner Embem"><span>25%</span></div>
                                    </div>
                                    <div class="prehardmodeBanner">And also one of the following items will be dropped</div>
                                    <div class="bossloot">
                                        <div class="loot"><img src="sprites/others/Breaker_Blade.png" class="" alt="Breaker Blade"><span>33.33%</span></div>
                                        <div class="loot"><img src="sprites/others/Clockwork_Assault_Rifle.png" class="" alt="Clockwork Assault Rifle"><span>33.33%</span></div>
                                        <div class="loot"><img src="sprites/others/Laser_Rifle.png" class="" alt="Laser Rifle"><span>33.33%</span></div>
                                        <div class="loot"><img src="sprites/others/Gold_Coin.gif" class="" alt="Gold Coin"><span>(8) 100%</span></div>
                                    </div>
                                </div>
                            </div>
                            <br><br> -->
                            <div class="highlight-container">
                                <div><img src="sprites/episodeimage/imageep9_3.webp" class="logobanner" alt="Hallow Biome"></div>
                                <div>
                                    <p>I fought The Twins which was the hardest of three Mechanical Bosses.</p>
                                    <p><span style="color: yellow;">Strategy:</span> Build a long run on the sky biome and make sure to keep your distance with them. Make sure to also not to move off bounds as they could potentially despawn, ending the fight prematurely.</p>
                                </div>
                            </div>
                            <!-- <div class="containerMain">
                                <span class="mediumtext">THE TWINS <img src="sprites/monsters/Map_Icon_Wall_of_Flesh.png" border="0" alt="Wall of Flesh" /></span>
                                <div class="boss-section">
                                    <div class="bowMasterDetails">
                                        <img src="sprites/monsters/Wall_of_Flesh.gif" alt="Wall of Flesh" />
                                        <div class="armourDetails">
                                            <div class="containerArmour">Damage: 150</div>
                                            <div class="containerArmour">Max Life: 11200</div>
                                            <div class="containerArmour">Defense: 18</div>
                                            <div class="containerArmour">Knockback Resistance: 100%</div>
                                        </div>
                                    </div>
                                    <div class="expert-mode-banner">Expert-mode Loot - Wall of Flesh</div>
                                    <div class="bossloot">
                                        <div class="bossloot">
                                            <div class="loot">
                                                <img src="sprites/others/Healing_Potion.png" class="" alt="Healing Potion">
                                                <span>(5-15) 100%</span>
                                            </div>
                                            <div class="loot"><img src="sprites/others/Wall_of_Flesh_Trophy.png" class="" alt="Wall of Flesh trophy"><span>10%</span></div>
                                            <div class="loot expert-loot"><img src="sprites/others/Treasure_Bag_(Wall_of_Flesh).png" class="" alt="treasure bag"><span>100%</span></div>
                                        </div>
                                    </div>
                                    <div class="expert-mode-banner">Treasure Bag Loot</div>
                                    <div class="bossloot">
                                        <div class="loot"><img src="sprites/others/Demon_Heart.png" class="" alt="Demon Heart"><span>100%</span></div>
                                        <div class="loot"><img src="sprites/others/Wall_of_Flesh_Mask.png" class="" alt="Wall of Flesh Mask"><span>14.29%</span></div>
                                        <div class="loot"><img src="sprites/others/Pwnhammer.png" class="" alt="Pwnhammer"><span>100%</span></div>
                                    </div>
                                    <div class="prehardmodeBanner">One of the following items will be dropped</div>
                                    <div class="bossloot">
                                        <div class="loot"><img src="sprites/others/Warrior_Emblem.png" class="" alt="Warrior Emblem"><span>25%</span></div>
                                        <div class="loot"><img src="sprites/others/Ranger_Emblem.png" class="" alt="Ranger Emblem"><span>25%</span></div>
                                        <div class="loot"><img src="sprites/others/Sorcerer_Emblem.png" class="" alt="Sorcerer Emblem"><span>25%</span></div>
                                        <div class="loot"><img src="sprites/others/Summoner_Emblem.png" class="" alt="Summoner Embem"><span>25%</span></div>
                                    </div>
                                    <div class="prehardmodeBanner">And also one of the following items will be dropped</div>
                                    <div class="bossloot">
                                        <div class="loot"><img src="sprites/others/Breaker_Blade.png" class="" alt="Breaker Blade"><span>33.33%</span></div>
                                        <div class="loot"><img src="sprites/others/Clockwork_Assault_Rifle.png" class="" alt="Clockwork Assault Rifle"><span>33.33%</span></div>
                                        <div class="loot"><img src="sprites/others/Laser_Rifle.png" class="" alt="Laser Rifle"><span>33.33%</span></div>
                                        <div class="loot"><img src="sprites/others/Gold_Coin.gif" class="" alt="Gold Coin"><span>(8) 100%</span></div>
                                    </div>
                                </div>
                            </div> -->
                            <hr class="hrbreaker">
                            <div class="containerMain clickable" onclick="toggleElement('displayepisode9')">
                                <span class="mediumtext">CHARACTER SETUP AT THE END OF THE EPISODE</span>
                                <div id="displayepisode9" class="rules-content" style="height: 0;">
                                    <hr class="hrbreaker">
                                    <div class="bowMasterDetails">
                                        <div>
                                            <div class="containerArmour padding-s">BowMaster64 / Life:400 <img src="sprites/others/PlayerHeart.png" class="" alt="heart"> / Mana:20 <img src="sprites/others/Mana.png" class="" alt="heart"></div>
                                            <img src="sprites/characters/episodeTerraria8.png" class="characterStyle" alt="">
                                        </div>
                                        <div class="armourDetails">
                                            Armour
                                            <div class="containerArmour padding-s">
                                                58
                                            </div>
                                            <div class="containerArmour"><img src="sprites/armor/Frost_Helmet.png" class="" alt="Frost Helmet"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Frost_Breastplate.png" class="" alt="Frost breastplate"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Frost_Leggings.png" class="" alt="Frost greaves"></div>
                                        </div>
                                    </div>
                                    <br>
                                    Main Weapons
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/repeaters/Hallowed_Repeater.png" class="" alt="Hallowed Repeater"></div>
                                        <div class="containerArmour"><img src="sprites/bows/Daedalus_Stormbow.png" class="" alt="Daedalus Stormbow"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Wooden_Arrow.webp" class="" alt="Wooden Arrow"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Ichor_Arrow.webp" class="" alt="Ichor Arrow"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Holy_Arrow.webp" class="" alt="Holy Arrow"></div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                    </div>
                                    <br>
                                    Accessories
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/armor/Obsidian_Shield.webp" class="" alt="Obsidian Shield"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Moon_Charm.png" class="" alt="Moon charm"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Shield_of_Cthulhu.png" class="" alt="shield of cthulhu"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Leaf_Wings.png" class="" alt="Leaf Wings"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Lightning_Boots.webp" class="" alt="Lighting boots"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Ranger_Emblem.webp" class="" alt="Lighting boots"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Episode10" class="tabcontent" style="display: none;">
                        <div class="shaper">
                            <span class="mediumtext">Episode 10: I'm Slowly Losing My Mind Over these Grind Sessions</span>
                            <lite-youtube class="youtubevideo" videoid="pRojiLIdK34"></lite-youtube>
                            <div class="episode-button">
                                <a href="#Episode9" class="tab-link nextprev-button" data-tab="Episode9"><- Episode 9</a>
                                        <a href="#Episode11" class="tab-link nextprev-button" data-tab="Episode11">Episode 11 -></a>
                            </div>
                            <div class="containerMain">
                                <p class="textjustify">The first episode started and ended with a whimper considering I was not too informed on how to create one of the primary weapons of an Archer which is the arrow</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>
                            <div class="highlight-container">
                                <div><img src="sprites/episodeimage/imageep10_1.webp" class="logobanner" alt="building a house"></div>
                                <div>
                                    <p>I built a surface glowing mushroom biome and a house so the Truffle NPC could move in.</p>
                                </div>
                            </div>
                            <div class="highlight-container reverse">
                                <div>
                                    <p>I built an artificial underground jungle biome in order for me to have a convenient "farm" for baits and Life fruit. I could also turn this jungle biome into a glowing mushroom biome in order to also farm Truffle worms.</p>
                                </div>
                                <div><img src="sprites/episodeimage/imageep10_3.webp" class="logobanner" alt="building a house"></div>
                            </div>
                            <div class="highlight-container">
                                <div><img src="sprites/episodeimage/imageep10_2.webp" class="logobanner" alt="building a house"></div>
                                <div>
                                    <p>Went back to the ocean biome and built an arena for Duke Fishron when the time has come to defeat it.</p>
                                </div>
                            </div>
                            <hr class="hrbreaker">
                            <div class="containerMain clickable" onclick="toggleElement('displayepisode10')">
                                <span class="mediumtext">CHARACTER SETUP AT THE END OF THE EPISODE</span>
                                <div id="displayepisode10" class="rules-content" style="height: 0;">
                                    <hr class="hrbreaker">
                                    <div class="bowMasterDetails">
                                        <div>
                                            <div class="containerArmour padding-s">BowMaster64 / Life:455 <img src="sprites/others/PlayerHeart.png" class="" alt="heart"> / Mana:20 <img src="sprites/others/Mana.png" class="" alt="heart"></div>
                                            <img src="sprites/characters/episodeTerraria9.png" class="characterStyle" alt="">
                                        </div>
                                        <div class="armourDetails">
                                            Armour
                                            <div class="containerArmour padding-s">
                                                58
                                            </div>
                                            <div class="containerArmour"><img src="sprites/armor/Frost_Helmet.png" class="" alt="Frost Helmet"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Frost_Breastplate.png" class="" alt="Frost breastplate"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Frost_Leggings.png" class="" alt="Frost greaves"></div>
                                        </div>
                                    </div>
                                    <br>
                                    Main Weapons
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/repeaters/Chlorophyte_Shotbow.png" class="" alt="Chlorophyte Showbow"></div>
                                        <div class="containerArmour"><img src="sprites/bows/Daedalus_Stormbow.png" class="" alt="Daedalus Stormbow"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Wooden_Arrow.webp" class="" alt="Wooden Arrow"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Ichor_Arrow.webp" class="" alt="Ichor Arrow"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Holy_Arrow.webp" class="" alt="Holy Arrow"></div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                    </div>
                                    <br>
                                    Accessories
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/armor/Magic_Quiver.png" class="" alt="Magic Quiver"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Moon_Charm.png" class="" alt="Moon charm"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Shield_of_Cthulhu.png" class="" alt="shield of cthulhu"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Leaf_Wings.png" class="" alt="Leaf Wings"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Lightning_Boots.webp" class="" alt="Lighting boots"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Ranger_Emblem.webp" class="" alt="Lighting boots"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Episode11" class="tabcontent" style="display: none;">
                        <div class="shaper">
                            <span class="mediumtext">Episode 11: Disaster Episode</span>
                            <lite-youtube class="youtubevideo" videoid="cCJdAIDKetU"></lite-youtube>
                            <div class="episode-button">
                                <a href="#Episode10" class="tab-link nextprev-button" data-tab="Episode10"><- Episode 10</a>
                                        <a href="#Episode11_5" class="tab-link nextprev-button" data-tab="Episode11_5">Episode 11.5 -></a>
                            </div>
                            <div class="containerMain">
                                <p class="textjustify">This episode has many speed up moments as well and the episode was spent mostly on fighting a lot of bosses.</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>
                            <div class="highlight-container">
                                <div><img src="sprites/episodeimage/imageep11_1.webp" class="logobanner" alt="Fighting Plantera"></div>
                                <div>
                                    <p>I fought Plantera in order to unlock the Temple as well as have access to the Shroomite armour set.</p>
                                    <p><span style="color: yellow;">Strategy:</span> Build very big arena inside of a Jungle Cavern, in my case you do not really need many elevations since you have wings by the time you are fighting it. Just keep your distance while dodging its projectiles as well as keep attacking it.</p>
                                </div>
                            </div>
                            <div class="highlight-container reverse">
                                <div>
                                    <p>I attempted to fight Duke Fishron so I can have a somewhat early Tsunami but failed becuase I suck at the game.</p>
                                </div>
                                <div><img src="sprites/episodeimage/imageep11_3.webp" class="logobanner" alt="Fighting Duke Fishron"></div>
                            </div>
                            <div class="highlight-container">
                                <div><img src="sprites/episodeimage/imageep11_2.webp" class="logobanner" alt="Fighting Golem"></div>
                                <div>
                                    <p>Fought the golem in order to finally have access to the end of the game.</p>
                                    <p><span style="color: yellow;">Strategy:</span> Build platform on top of the Golem room and make sure to keep on moving. That is the only tip I can give you considering the Golem is a pretty easy boss to fight, it was so easy that I did not even follow my own strategy for it.</p>
                                </div>
                            </div>
                            <hr class="hrbreaker">
                            <div class="containerMain clickable" onclick="toggleElement('displayepisode11')">
                                <span class="mediumtext">CHARACTER SETUP AT THE END OF THE EPISODE</span>
                                <div id="displayepisode11" class="rules-content" style="height: 0;">
                                    <hr class="hrbreaker">
                                    <div class="bowMasterDetails">
                                        <div>
                                            <div class="containerArmour padding-s">BowMaster64 / Life:500 <img src="sprites/others/PlayerHeart.png" class="" alt="heart"> / Mana:20 <img src="sprites/others/Mana.png" class="" alt="heart"></div>
                                            <img src="sprites/characters/episodeTerraria10.png" class="characterStyle" alt="">
                                        </div>
                                        <div class="armourDetails">
                                            Armour
                                            <div class="containerArmour padding-s">
                                                69
                                            </div>
                                            <div class="containerArmour"><img src="sprites/armor/Shroomite_Headgear.png" class="" alt="Shroomite Headgear"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Shroomite_Breastplate.png" class="" alt="Shroomite breastplate"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Shroomite_Leggings.png" class="" alt="Shroomite leggings"></div>
                                        </div>
                                    </div>
                                    <br>
                                    Main Weapons
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/repeaters/Chlorophyte_Shotbow.png" class="" alt="Chlorophyte Showbow"></div>
                                        <div class="containerArmour"><img src="sprites/bows/Daedalus_Stormbow.png" class="" alt="Daedalus Stormbow"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Ichor_Arrow.webp" class="" alt="Ichor Arrow"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Holy_Arrow.webp" class="" alt="Holy Arrow"></div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                    </div>
                                    <br>
                                    Accessories
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/armor/Magic_Quiver.png" class="" alt="Magic Quiver"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Avenger_Emblem.png" class="" alt="Avenger Emblem"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Shield_of_Cthulhu.png" class="" alt="shield of cthulhu"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Leaf_Wings.png" class="" alt="Leaf Wings"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Lightning_Boots.webp" class="" alt="Lighting boots"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Ranger_Emblem.webp" class="" alt="Lighting boots"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Episode11_5" class="tabcontent" style="display: none;">
                        <div class="shaper">
                            <span class="mediumtext">Episode 11.5 : The Storm Before The Apocalypse</span>
                            <lite-youtube class="youtubevideo" videoid="aRpMD91nRxg"></lite-youtube>
                            <div class="episode-button">
                                <a href="#Episode11" class="tab-link nextprev-button" data-tab="Episode11"><- Episode 11</a>
                                        <a href="#Episode12" class="tab-link nextprev-button" data-tab="Episode12">Episode 12 -></a>
                            </div>
                            <div class="containerMain">
                                <p class="textjustify">This episode was me preparing for the upcoming boss fights in the Late hardmode stage of the game.</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>
                            <div class="highlight-container">
                                <div><img src="sprites/episodeimage/imageep11_5_1.webp" class="logobanner" alt="Fighting Plantera"></div>
                                <div>
                                    <p>I went back inside the dungeon in order for me to craft the Master Ninja Gear which will be useful considering that any class that is not a melee class is very easy to kill so having it will increase my chance of survivability in the upcoming fights.</p>
                                </div>
                            </div>
                            <div class="highlight-container reverse">
                                <div>
                                    <p>I attempted to fight Duke Fishron again in order to get the Tsunami which it took a while before it dropped the bow.</p>
                                    <p><span style="color: yellow;">Strategy:</span> Build a long running platform with some elevation. JUST DO NOT GET HIT BY IT. Also, at its last phase, the best technique that I heard and seen is that to only move vertically since regardless of location, Duke Fishron will always teleport near the player to strike.</p>
                                </div>
                                <div><img src="sprites/episodeimage/imageep11_5_2.webp" class="logobanner" alt="Fighting Duke Fishron"></div>
                            </div>
                            <hr class="hrbreaker">
                            <div class="containerMain clickable" onclick="toggleElement('displayepisode11_5')">
                                <span class="mediumtext">CHARACTER SETUP AT THE END OF THE EPISODE</span>
                                <div id="displayepisode11_5" class="rules-content" style="height: 0;">
                                    <hr class="hrbreaker">
                                    <div class="bowMasterDetails">
                                        <div>
                                            <div class="containerArmour padding-s">BowMaster64 / Life:500 <img src="sprites/others/PlayerHeart.png" class="" alt="heart"> / Mana:20 <img src="sprites/others/Mana.png" class="" alt="heart"></div>
                                            <img src="sprites/characters/episodeTerraria11.png" class="characterStyle" alt="">
                                        </div>
                                        <div class="armourDetails">
                                            Armour
                                            <div class="containerArmour padding-s">
                                                69
                                            </div>
                                            <div class="containerArmour"><img src="sprites/armor/Shroomite_Headgear.png" class="" alt="Shroomite Headgear"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Shroomite_Breastplate.png" class="" alt="Shroomite breastplate"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Shroomite_Leggings.png" class="" alt="Shroomite leggings"></div>
                                        </div>
                                    </div>
                                    <br>
                                    Main Weapons
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/bows/Tsunami.png" class="" alt="Tsunami"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Ichor_Arrow.webp" class="" alt="Ichor Arrow"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Holy_Arrow.webp" class="" alt="Holy Arrow"></div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                    </div>
                                    <br>
                                    Accessories
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/armor/Magic_Quiver.png" class="" alt="Magic Quiver"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Avenger_Emblem.png" class="" alt="Avenger Emblem"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Master_Ninja_Gear.png" class="" alt="Master Ninja Gear"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Steampunk_Wings.png" class="" alt="Leaf Wings"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Celestial_Shell.png" class="" alt="Lighting boots"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Ranger_Emblem.webp" class="" alt="Lighting boots"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Episode12" class="tabcontent" style="display: none;">
                        <div class="shaper">
                            <span class="mediumtext">Episode 12 : The Corruption a of Man</span>
                            <lite-youtube class="youtubevideo" videoid="nJyIlqyE-XQ"></lite-youtube>
                            <div class="episode-button">
                                <a href="#Episode11_5" class="tab-link nextprev-button" data-tab="Episode11_5"><- Episode 11.5</a>
                                        <a href="Review" class="tab-link nextprev-button" data-tab="Review">Review -></a>
                            </div>
                            <div class="containerMain">
                                <p class="textjustify">This is the last episode of the series and this is where I fought againsts the Lunatic Cultist as well as the final boss of Terraria, The Moon Lord.</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>
                            <div class="highlight-container">
                                <div><img src="sprites/episodeimage/imageep12_1.webp" class="logobanner" alt="Fighting Plantera"></div>
                                <div>
                                    <p>I fought the Lunatic Cultist and had an absolute blast, literally and figuratively.</p>
                                    <p><span style="color: yellow;">Strategy:</span> Use your Skeletron arena to fight the Lunatic Cultist and basically just dodge his attacks.</p>
                                </div>
                            </div>
                            <div class="highlight-container reverse">
                                <div>
                                    <p>I fought all of celestial pillars some being harder than others.</p>
                                    <p><span style="color: yellow;">Strategy:</span> DON'T STOP MOVING! JUST KEEP MOVING, except for the Solar Pillar which movement will most likely get you killed.</p>
                                </div>
                                <div><img src="sprites/episodeimage/imageep12_2.webp" class="logobanner" alt="Fighting Duke Fishron"></div>
                            </div>
                            <div class="highlight-container">
                                <div><img src="sprites/episodeimage/imageep12_3.webp" class="logobanner" alt="Fighting Plantera"></div>
                                <div>
                                    <p>H̷̜̬̹̜͎̖̣̼̝̥̗͇̭͚́͂͗̏̋͂́͊̓̚̚͝ę̴̡̨̝̩͈̝̣͚͈̮̆̊̐͒̑͆̐̌̋͐͒̈́̎͜ͅľ̵̳̱̙̐̉̊̈͌̓͘͝p̶̨̧̮͙͕̱͖͔̬̰͖̘̻͐̒̕͜ ̴̨̡̢͉̖̩̗͉̩̗̖̺͕̣̭͌̉̂͆͋͌̈́̀̔͋̍̆̍̿̕M̴̥͖̬̳̰̦̠̤͔̲̥̉̃̂͑̇̆͜ͅe̷̛͔̼̩̜̓̎́̔̄͂́͒̒́̄̓͘</p>
                                    <p><span style="color: yellow;">Strategy:</span> J̶̧̢̤͚͉͎̞̗͍̲̦̺̥͑̅̄̋̔̽̌͛̍̀̽̓̍̕ů̴̡̦̺̲͍̪̭̲͕͇̒̑̋̍̊̾̈́̒̒́̈́̃̕͝ͅṣ̶̢̟͉̜̄͒͗̇̅̌͊́ͅṭ̵̦̜̣̪͙͖̺͙̠̫͐̒̓̍̑ ̵̜͙̇͐̂́̓́̏́̈́̾̾͋k̶̛̤͈̙͋̌̂͗̐̅e̵̪̺̮̼͎̮̱̞͖̎̉͒̌̀̓̒̇̆̃̅̚͝͝͠e̴̡͎̼̲̭͂̒̌̎́̉̎̓̆̍p̵̡̝̟͔̩̗̫̌̓̏̀̇̓ ̷̘̽̾̓t̶̰̬̤̄̓̏̏̊͊͠ṙ̵͕͎͈̻̹̥̠̩͂̀̀̓̍̇̕̚͜y̵̢̡̡̛̥͈̮̟͎̣̑͑̔͛i̴̡̠̰̝̫̫̳̖̱̤̗̟̿n̶̛͎̗̘̠̠̜̖͖̖̍̃̈́̂͜͝ͅg̶̢̨̨̛͔̦̹̣̬̳̙̼̱̩̹̎̅͛̿̊̅́,̴̢̢̭̥̭̂̔͐̑̅́͋̐͌͊ ̸͔͈̯̪͍̅͛͑̅͑́̀̽̎̏̂h̷͔̺̹̹̻̆̏́̆̆͆a̵̱͎̾̌̐̌̀̓͠v̵͈͓͙̰̮̮̠̬̝̠͔͉̹̀̈́̂͐̈́͆ͅͅe̵̡̠͈̼̗͙̓̂͆̊̉͑́͊̄͠ ̷̹̟̩͇̳͙̫̈͑̒́͗͂t̴̡̮̬̯̥̩̫̳̜͎̙̩̃̀̅̽h̶̡̢̝̩̯̞̥͈̋̓̄̈͘͝͝ḛ̶̻̫̿́̋͗̒̋̾ ̶̛̤͕̬̜͙̣͔͔͙̙̱̍̈̍̊͛͛̉́̉n̴̨̨̹̪͛͋́ų̷̘͕̻̰͎̪̹̘̰̰͇̖̞̀͛͂̊͂̅̎͠͠ͅŗ̶̥̯̫͈̻̱̟̺̖̆s̵̢͖͓̿̈́͂̃̑͒̍̀̐̄́̄̍̚͜ȩ̶̡̛̞͍̼̜̤̽͗͋̌̎̕͜ ̴̅̋̃͒́̓̒̀́͝͠ͅi̶̧̫͔͉̬̺̱̻͇̫̞̬̻̲̅̓̑̑͒̀̊̿͆́̕ṉ̴̨̛͈̞̱̺͕͈́̏̑̋̋̅̄̾͠ ̴̛̞͂́͛͂ẏ̴̨̛͍̗͙̻̥͍̄̏̇̓́́̃̕͝ó̶̡̝͕͚̞̘̩̘͝ư̸̧̮̖̞̖̰͔̼͗́̿͆̒͌̒̓̀̽r̴̨̺̙͉̯̞̝̞͓͊̒̂̓̈́̄̎͆̕̚͠͝ ̶͔͈̲̣̫͖́̈́͒͜͜a̴̭̩̼͈̜͖̖͂͑̈̋͋͂͂͗̆̅͗͑̾̕ͅr̸̢̛̟͚͙̟̼̲̝̯͎͍͔̩͈̎́͑̅̓͐̇͑́͂͘ͅę̶͙̬͕̂̂̌̈̔̿̍͝͝͝ǹ̴̨̟̞͉͖̟̩̟̠͙̭̳̼̤̀͂̽̿͒͂̈̊ȃ̸̙̤͓͇͛̿͜ ̵̨̛̤͎̬̲̱̥̝̜͂̔͂̓̈̿͌̎̈́͗t̵̹̋̓̎̆͆̃̉́̋̕͘̕̚o̷̧̥̦̼̠͉̘̯̰̩̠̬͐͂͋̾̊̓̆ ̴̢̨̼̦͇̝̮́̾̔͗́̒̿͠c̵͕̠̠̄̐͆h̸̡̩̮̰͚̅̽e̴̙̮̝̮̹̝͈͈͍̟̊́̐̓̋̎̇́̚̚͝ȩ̴̗̻̫͙̗̝̤̪͇̱̔͐̾ͅs̸̠̪̊̈̍̿̽̄̾͛͆̅ȩ̴̧͕̝͎͔̲̰̭̞͈͓̹͖̮̍̉̐͗͂̃̾̿̐͆̍͛̈͘͠ ̸̟̗̳̣͔̪̩͐̾̍̇͋̈́́̾̌͛̀̊͑̒ţ̸͕̙̺̬̤̣͔̮͗̇̎̕ȟ̵̘͙̻̬͂̎̃̎͒̓́̔̅̆̌̊͜͝e̸̪̫̣̯̗̒̔ ̸̦͔̮̦̼͓͓̙͌̈͆̂̈́͗͘ͅͅf̴̨̧̭̻̮̟̺̘͔̊͑ĭ̶̛͕̣̓̀̋͛̒̐̉̐̎͝ğ̷̗̻̺̦͕̻͇̋͒̿͆́͜h̸̨̡̛̳̰̩͙̫̥͇̣̠̦͇̗̓͐̚t̷̡̧͔̣̩̫͖̣̙͔̭̺̐̆̿̎̄̆̉͊͜.̸̢̧̫̝̣̘̥̳̣͎̩̲̳͛̔̚͜.</p>
                                </div>
                            </div>
                            <hr class="hrbreaker">
                            <div class="containerMain clickable" onclick="toggleElement('displayepisode12')">
                                <span class="mediumtext">CHARACTER SETUP AT THE END OF THE EPISODE</span>
                                <div id="displayepisode12" class="rules-content" style="height: 0;">
                                    <hr class="hrbreaker">
                                    <div class="bowMasterDetails">
                                        <div>
                                            <div class="containerArmour padding-s">BowMaster64 / Life:500 <img src="sprites/others/PlayerHeart.png" class="" alt="heart"> / Mana:20 <img src="sprites/others/Mana.png" class="" alt="heart"></div>
                                            <img src="sprites/characters/episodeTerraria12.png" class="characterStyle" alt="">
                                        </div>
                                        <div class="armourDetails">
                                            Armour
                                            <div class="containerArmour padding-s">
                                                66
                                            </div>
                                            <div class="containerArmour"><img src="sprites/armor/Vortex_Helmet.png" class="" alt="Vortex Headgear"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Shroomite_Breastplate.png" class="" alt="Shroomite breastplate"></div>
                                            <div class="containerArmour"><img src="sprites/armor/Shroomite_Leggings.png" class="" alt="Shroomite leggings"></div>
                                        </div>
                                    </div>
                                    <br>
                                    Main Weapons
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/bows/Tsunami.png" class="" alt="Tsunami"></div>
                                        <div class="containerArmour"><img src="sprites/bows/Phantasm.png" class="" alt="Phantasm"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Ichor_Arrow.webp" class="" alt="Ichor Arrow"></div>
                                        <div class="containerArmour"><img src="sprites/arrows/Holy_Arrow.webp" class="" alt="Holy Arrow"></div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                        <div class="containerArmour"><img src="#" class="" alt="">?</div>
                                    </div>
                                    <br>
                                    Accessories
                                    <div class="accessories">
                                        <div class="containerArmour"><img src="sprites/armor/Magic_Quiver.png" class="" alt="Magic Quiver"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Avenger_Emblem.png" class="" alt="Avenger Emblem"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Master_Ninja_Gear.png" class="" alt="Master Ninja Gear"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Steampunk_Wings.png" class="" alt="Steampunk Wings"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Obsidian_Shield.webp" class="" alt="Obsidian Shield"></div>
                                        <div class="containerArmour"><img src="sprites/armor/Destroyer_Emblem.webp" class="" alt="Destroyer Emblem"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Review" class="tabcontent" style="display: none;">
                        <div class="shaper">
                            <span class="mediumtext">TERRARIA BOW RUN (EXPERT MODE) REVIEW</span>
                            <div class="containerMain">
                                <span class="mediumtext">REVIEW</span>
                                <p class="textjustify">Based on the quality of videos in this series, I would say that this is probably
                                    the worst playthrough I have on my Channel. Each episodes seems rushed, the quality of the videos themselves are inconsistent
                                    from decent quality to bad, and most importantly, the series itself is not as comprehensive compared to my other playthroughs on my channel.
                                    I would also consider this the worst series on my channel due to my lack of skill when it comes to playing Terraria as a Ranger (Bow) and I often
                                    find myself struggling againsts bosses which added to the episodes being rushed. Overall, this challenge was HARD and a chore to beat due to the Ranger class being very
                                    fragile but the items and weapons made it somewhat bearable to a certain extent. Rating-wise, I would give this series a 5/10.</p>
                            </div>
                            <div class="containerMain">
                                <span class="mediumtext">WEAPON TIERLIST</span>
                                <p class="textjustify">This is a tierlist based on how good a Bow/Repeater and Arrow are during my playthrough of the series. The rating goes from S-tier, the best weapon I used and E-tier, for worst. This is my opinion so feel free disagree.</p>
                                <div class="bannerimage">
                                    <img src="sprites/weaponsTierlist.png" class="logobanner" alt="Weapons Tierlist">
                                </div>
                            </div>
                            <div class="containerMain">
                                <span class="mediumtext">BOSS TIERLIST</span>
                                <p class="textjustify">This is a tierlist based on how hard a boss was during my playthrough of the series. The rating goes from S-tier, the hardest up to and E-tier, for the easiest. This is my opinion so feel free disagree.</p>
                                <div class="bannerimage">
                                    <img src="sprites/bossTierlist.png" class="logobanner" alt="Bosses Tierlist">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    <script src="js/app.js"></script>
    <script src="../../js/lite-yt-embed.js"></script>
</body>

</html>
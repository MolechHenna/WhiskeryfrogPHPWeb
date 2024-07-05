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
                        <div class="shaper">
                            <span class="mediumtext">Episode 1: A Bow Run That Does Not Start With Any Arrows!</span>
                            <lite-youtube class="youtubevideo" videoid="x0wNpI51TXk"></lite-youtube>
                            <div class="containerMain">
                                <p class="textjustify">The first episode started and ended with a whimper considering I was not too informed on how to create one of the primary weapons of an Archer which is the arrow</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>

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
                    </div>
                    <div id="Episode2" class="tabcontent" style="display: none;">
                        <div class="shaper">
                            <span class="mediumtext">Episode 2: Fishing For The Early META Pickaxe</span>
                            <lite-youtube class="youtubevideo" videoid="GwYaqM6AhFw"></lite-youtube>
                            <div class="containerMain">
                                <p class="textjustify">The first episode started and ended with a whimper considering I was not too informed on how to create one of the primary weapons of an Archer which is the arrow</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>

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
                            <div class="containerMain">
                                <p class="textjustify">The first episode started and ended with a whimper considering I was not too informed on how to create one of the primary weapons of an Archer which is the arrow</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>

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
                            <div class="containerMain">
                                <p class="textjustify">The first episode started and ended with a whimper considering I was not too informed on how to create one of the primary weapons of an Archer which is the arrow</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>

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
                            <div class="containerMain">
                                <p class="textjustify">The first episode started and ended with a whimper considering I was not too informed on how to create one of the primary weapons of an Archer which is the arrow</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>

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
                            <div class="containerMain">
                                <p class="textjustify">The first episode started and ended with a whimper considering I was not too informed on how to create one of the primary weapons of an Archer which is the arrow</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>

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
                            <div class="containerMain">
                                <p class="textjustify">The first episode started and ended with a whimper considering I was not too informed on how to create one of the primary weapons of an Archer which is the arrow</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>

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
                            <div class="containerMain">
                                <p class="textjustify">The first episode started and ended with a whimper considering I was not too informed on how to create one of the primary weapons of an Archer which is the arrow</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>

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
                            <div class="containerMain">
                                <p class="textjustify">The first episode started and ended with a whimper considering I was not too informed on how to create one of the primary weapons of an Archer which is the arrow</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>

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
                            <div class="containerMain">
                                <p class="textjustify">The first episode started and ended with a whimper considering I was not too informed on how to create one of the primary weapons of an Archer which is the arrow</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>

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
                            <div class="containerMain">
                                <p class="textjustify">The first episode started and ended with a whimper considering I was not too informed on how to create one of the primary weapons of an Archer which is the arrow</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>

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
                            <div class="containerMain">
                                <p class="textjustify">The first episode started and ended with a whimper considering I was not too informed on how to create one of the primary weapons of an Archer which is the arrow</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>

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
                            <div class="containerMain">
                                <p class="textjustify">The first episode started and ended with a whimper considering I was not too informed on how to create one of the primary weapons of an Archer which is the arrow</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>

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
                            <div class="containerMain">
                                <p class="textjustify">The first episode started and ended with a whimper considering I was not too informed on how to create one of the primary weapons of an Archer which is the arrow</p>
                            </div>
                            <hr class="hrbreaker">
                            <span class="mediumtext">HIGHLIGHTS</span>

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
                                    the worst playthorugh I have on my Channel. Each episodes seems rushed, the quality of the videos themselves are inconsistent
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
        <main>
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
            <script src="js/app.js"></script>
            <script src="../../js/lite-yt-embed.js"></script>
</body>

</html>
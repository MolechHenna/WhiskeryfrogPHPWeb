<?php
include '../../php/version.php';
include 'phpfolder/pokedexlf.php';
include 'phpfolder/menuspritelf.php';
include 'phpfolder/pokemontypeslf.php';
include 'phpfolder/deathslf.php';
include 'phpfolder/partylf.php';
include 'phpfolder/wildpokemonlf.php';
include 'phpfolder/trainerlf.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Whiskeryfrog LeafGreen Nuzlocke playthrough episodes and details inside said episode such as encounters, trainers and so much more.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Whiskeryfrog / Leafgreen Nuzlocke</title>
    <link rel="icon" href="../../images/whiskeryface.png" type="image/x-icon">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../css/lite-yt-embed.css">

    <style>
        @media (max-width: 500px) {
            .containerMain {
                display: grid;
                gap: 5%;
                background-color: rgba(5, 5, 5, 0.8) !important;
                color: #e6e6e6 !important;
                padding: 5px;
                padding-top: 10px;
                margin: 0px 0px 0px 0px;
                border-radius: 8px;
                box-shadow: 10px 0px 0px 0px rgba(0, 0, 0, 0.45);
                -webkit-box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.45);
                -moz-box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.45);
            }

            .containerMainplus {
                padding: 1px;
                margin: 1px 1px 1px 1px;
                background-color: #959088d5;
                border-radius: 0px;
                box-shadow: 4px 4px 0px 1px rgba(0, 0, 0, 0.45);
                -webkit-box-shadow: 4px 4px 0px 1px rgba(0, 0, 0, 0.45);
                -moz-box-shadow: 4px 4px 0px 1px rgba(0, 0, 0, 0.45);
                border: solid 0px white;
            }

            .containerMain2 {
                background-color: rgba(109, 108, 108, 0.509);
                padding: 1px;
                margin: 0px 0px 0px 0px;
                border-radius: 8px;
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <main>
        <div class="topPanel" id="topPage">
            <a href="../../index"><i class="fa-solid fa-house"></i>
                <div class="smallscreen"> Home</div>
            </a>
            <a href="../playthrough"><i class="fa-solid fa-gamepad"></i>
                <div class="smallscreen">Playthroughs</div>
            </a>

            <div class="rightSide">
                <a href="../../website/websiteupdate">
                    <div>V<?php echo  $version; ?></div>
                </a>
            </div>
        </div>
        <div class="theTop">
            <header>
                <div class="dropdown">
                    <button id="dropdownButton" onclick="myFunction()" class="dropbtn"><i class="fas fa-search"></i>
                        Introduction</button>
                    <div id="myDropdown" class="dropdown-content" style="overflow-y: scroll; overflow-x: hidden;">
                        <input type="text" placeholder="Search episode" id="myInput" onkeyup="filterFunction()">
                        <a href="#Introduction" class="tab-link" data-tab="Introduction">Introduction</a>
                        <a href="#Episode1" class="tab-link" data-tab="Episode 1">Episode 1 - This series will most
                            likely be cancelled halfway through</a>
                        <a href="#Episode2" class="tab-link" data-tab="Episode 2">Episode 2 - Very
                            Loooooooooooooooooooooooooooooooooooooooooooong forest</a>
                        <a href="#Episode3" class="tab-link" data-tab="Episode 3">Episode 3 - Good thing I started with
                            Squirtle</a>
                        <a href="#Episode4" class="tab-link" data-tab="Episode 4">Episode 4 - I Sped Up Most Pokémon
                            Battles in this Episode</a>
                        <a href="#Episode5" class="tab-link" data-tab="Episode 5">Episode 5 - Look Closely at the
                            Thumbnail</a>
                        <a href="#Episode6" class="tab-link" data-tab="Episode 6">Episode 6 - Not Too Thankful that my
                            Starter is Squirtle</a>
                        <a href="#Episode7" class="tab-link" data-tab="Episode 7">Episode 7 - Vermillion dollars</a>
                        <a href="#Episode8" class="tab-link" data-tab="Episode 8">Episode 8 - That Time I "GAME ENDED"
                            my Rival's Raticate</a>
                        <a href="#Episode9" class="tab-link" data-tab="Episode 9">Episode 9 - Normal Rat V.S. Electric
                            Rat</a>
                        <a href="#Episode10" class="tab-link" data-tab="Episode 10">Episode 10 - Trainer Beatdown</a>
                        <a href="#Episode11" class="tab-link" data-tab="Episode 11">Episode 11 - Dank Tunnel</a>
                        <a href="#Episode12" class="tab-link" data-tab="Episode 12">Episode 12 - Nothing Much, Just
                            Trainers</a>
                        <a href="#Episode13" class="tab-link" data-tab="Episode 13">Episode 13 - This Gym is
                            Surprisingly Tough Without A Decent Fire Type</a>
                        <a href="#Episode14" class="tab-link" data-tab="Episode 14">Episode 14 - Good Thing This isn't
                            Twitch Plays Pokémon</a>
                        <a href="#Episode15" class="tab-link" data-tab="Episode 15">Episode 15 - Can Pokémon Talk when
                            They're Dead?</a>
                        <a href="#Episode16" class="tab-link" data-tab="Episode 16">Episode 16 - Trainer Mayhem</a>
                        <a href="#Episode17" class="tab-link" data-tab="Episode 17">Episode 17 - A Disastrous RAID</a>
                        <a href="#Episode18" class="tab-link" data-tab="Episode 18">Episode 18 - Dojo Danger</a>
                        <a href="#Episode19" class="tab-link" data-tab="Episode 19">Episode 19 - Ninja Saga</a>
                        <a href="#Episode20" class="tab-link" data-tab="Episode 20">Episode 20 - SaBRUHna</a>
                        <a href="#Episode21" class="tab-link" data-tab="Episode 21">Episode 21 - "LOOK GUYS I DID
                            MISSINGNO GLITCH IN POKÉMON LEAFGREEN"</a>
                        <a href="#Episode22" class="tab-link" data-tab="Episode 22">Episode 22 - GOING INSIDE AN
                            ABANDONED MANSION AT 3:00am NOT CLICKBAIT</a>
                        <a href="#Episode23" class="tab-link" data-tab="Episode 23">Episode 23 - I Blaine Myself for
                            this Channel's Irrelevance</a>
                        <a href="#Episode24" class="tab-link" data-tab="Episode 24">Episode 24 - I, (Giorno) Giovanni,
                            Have a Dream</a>
                        <a href="#Episode25" class="tab-link" data-tab="Episode 25">Episode 25 - That One Beach Episode
                            of an Anime</a>
                        <a href="#Episode26" class="tab-link" data-tab="Episode 26">Episode 26 - Road to Victory</a>
                        <a href="#Episode27" class="tab-link" data-tab="Episode 27">Episode 27 - Lorelei is Surprisingly
                            Tough</a>
                        <a href="#Episode28" class="tab-link" data-tab="Episode 28">Episode 28 - Bruh, no</a>
                        <a href="#Episode29" class="tab-link" data-tab="Episode 29">Episode 29 - AgaBRUH</a>
                        <a href="#Episode30" class="tab-link" data-tab="Episode 30">Episode 30 - "You don't get to be
                            Champion of the Pokemon League"</a>
                        <a href="#Finale" class="tab-link" data-tab="Finale">FINALE - FINALLY! I FINISHED A SERIES IN
                            THIS CHANNEL!</a>
                        <a href="#Review" class="tab-link" data-tab="Review">Pokémon Leaf Green Nuzlocke Review</a>
                    </div>
                </div>
            </header>
        </div>
        <div class="containerMainplus">
            <div class="shaper">
                <div id="Introduction" class="tabcontent">
                    <div class="limiter" style="color: white;">
                        <br>
                        <span class="bigtext">POKEMON LEAFGREEN NUZLOCKE</span>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">Introduction to the Playthrough</span>
                    <img src="../../images/pokemonlogoleafgreenNoBg.webp" class="bannerimage bannerNewSize" alt="pokemon leafgreen nuzlocke logo" width="634" height="434">
                    <div class="containerMain">
                        <p class="textjustify">During the pandemic, with nothing better to do, I decided to play and record my attempt at a Nuzlocke challenge in a Pokémon LeafGreen playthrough.</p>
                        <p class="textjustify">This series will detail my team composition, wild encounters, and trainers I fought. Each episode will also include my thoughts and reflections on the challenges I faced during my playthrough.
                        </p>

                    </div>
                    <hr class="linebreaker">
                    <span class="bigtext slightlysmall" style="color: white;">INSTRUCTIONS</span>
                    <div class="containerMain">
                        <div class="limiter">
                            <span class="bigtext">1. Episodes</span>
                            <hr class="linebreaker">
                            <a href="#thetoppage">
                                <div class="dropdown">
                                    <button onclick="glowButton()" class="dropbtn"><i class="fas fa-search"></i>
                                        Introduction</button>
                                </div>
                            </a>
                            <p class="textjustify">Clicking this tab at the top of the page will show you every single episode within my Pokémon LeafGreen Nuzlocke. Clicking on an episode will display details about that episode, such as encounters per route, trainers fought, your team composition at the end of the episode, and any deaths that have occurred so far in the series.
                            </p>
                        </div>
                    </div>
                    <div class="containerMain">
                        <div class="limiter">
                            <span class="bigtext">2. Encounters Section</span>
                            <hr class="linebreaker">
                            <button id="showAll0" class="showbtn"><img class="buttonimg" src="sprites/allEncounters.png" alt="show all button" width="100" height="100"></button>
                            <p>Clicking the grass button will show you all of the possible encounters per route.
                            </p>
                            <button id="showCaught0" class="showbtn"><img class="buttonimg" src="sprites/caughtIcon.png" alt="show caught button" width="100" height="100"></button>
                            <p>Clicking the Pokéball button only shows you the successful encounter per route.
                            </p>
                            <br>
                            <span class="bigtext slightlysmall titlealign ">Route 1
                            </span>
                            <p class="textjustify titlealign"></p>
                            <div class="grasspokemon"><i class="fa-solid fa-seedling"></i> Grass Encounters</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($testroute, $tableWildHeaders); ?>
                            </div>
                        </div>

                    </div>
                    <div class="containerMain">
                        <div class="limiter">
                            <span class="bigtext">3. Trainers Section</span>
                            <hr class="linebreaker">
                            <div class="col containerMain2" onclick="toggleElement('displaytesttable')">
                                <div class="limiter">
                                    <span class="bigtext slightlysmall titlealign  importantname">TOADMAN (Rival)
                                        <span><--- Trainer Name</span>
                                        </span>
                                        <div class="difficultycontainer">
                                            <div class="first normal"></div>
                                            <div class="normal"></div>
                                            <div class="normal"></div>
                                            <div class="nofill"></div>
                                            <div class="last nofill slightspace"></div> <span><--- <a href="#difficulty" style="color:white;">Difficulty</a></span>
                                        </div>
                                        <img src="sprites/Blue1.webp" width="64" height="64" alt="Trainer Blue">
                                        <p class="titlealign">Insight
                                        </p>
                                        <div id="displaytesttable" class="rules-content" style="overflow-x: auto; height: 0;">
                                            <table border="1" class="customTable trainerTable">
                                                <tbody>
                                                    <tr>
                                                        <td>Bulbasaur</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class="nopad" src="sprites/firered-leafgreen/1.png" width="64" height="64" alt="bulbasaur">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lv.5</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class="nopad" src="sprites/types/grass-poison.png" width="32" height="25" alt="Grass Poison type">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                            </div>
                            <p class="">You can show a trainer's team composition by
                                clicking on the container containing them.
                            </p>
                        </div>
                    </div>
                    <hr class="linebreaker">
                    <span class="bigtext slightlysmall" style="color: white;">SYMBOLS</span>
                    <div class="containerMain">
                        <div class="limiter">
                            <br>
                            <div class="giftpokemon"><i class="fa-solid fa-gift"></i> Gift Encounters</div><br>
                            <div class="grasspokemon"><i class="fa-solid fa-seedling"></i> Grass Encounters</div><br>
                            <div class="surfpokemon"><i class="fa-solid fa-water"></i> Surfing Encounters</div><br>
                            <div class="fishpokemon"><i class="fa-solid fa-fish"></i> Fishing (Old/Good/Super Rods)
                                Encounters
                            </div><br>
                            <div class="cavepokemon"><i class="fa-solid fa-mountain"></i> Cave Encounters</div><br>
                            <div class="giftpokemon"><i class="fa-solid fa-building"></i> Building Encounters</div><br>
                            <p>
                                <b>Not Encountered</b>
                            </p>
                            <table border="1" class="customTable">
                                <tbody>
                                    <thead>
                                        <th> Pokémon </th>
                                        <th> Level </th>
                                        <th> Type </th>
                                        <th> Encounter Rate </th>
                                        <th> Insight </th>
                                    </thead>
                                    <tr class="">
                                        <td>Bulbasaur <br> <img src="sprites/firered-leafgreen/1.png" alt="bulbasaur">
                                        </td>
                                        <td>5</td>
                                        <td><img src="sprites/types/grass-poison.png" alt="grass poison type" class="">
                                        </td>
                                        <td>Gift</td>
                                        <td>The best choice for this region if you want to have an easier time with the
                                            Nuzlocke
                                            and in the game in general.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>
                                <b>Successfully Caught</b>
                            </p>
                            <table border="1" class="customTable">
                                <tbody>
                                    <thead>
                                        <th> Pokémon </th>
                                        <th> Level </th>
                                        <th> Type </th>
                                        <th> Encounter Rate </th>
                                        <th> Insight </th>
                                    </thead>
                                    <tr class="succenc">
                                        <td>Bulbasaur <br> <img src="sprites/firered-leafgreen/1.png" alt="bulbasaur">
                                        </td>
                                        <td>5</td>
                                        <td><img src="sprites/types/grass-poison.png" alt="grass poison type" class="">
                                        </td>
                                        <td>Gift</td>
                                        <td>The best choice for this region if you want to have an easier time with the
                                            Nuzlocke
                                            and in the game in general.</td>
                                    </tr>
                                </tbody>
                            </table><br>
                            <p>
                                <b>Already Caught</b>
                            </p>
                            <table border="1" class="customTable">
                                <tbody>
                                    <thead>
                                        <th> Pokémon </th>
                                        <th> Level </th>
                                        <th> Type </th>
                                        <th> Encounter Rate </th>
                                        <th> Insight </th>
                                    </thead>
                                    <tr class="caughtpokemon">
                                        <td>Bulbasaur <br> <img src="sprites/firered-leafgreen/1.png" alt="bulbasaur">
                                        </td>
                                        <td>5</td>
                                        <td><img src="sprites/types/grass-poison.png" alt="grass poison type" class="">
                                        </td>
                                        <td>Gift</td>
                                        <td>The best choice for this region if you want to have an easier time with the
                                            Nuzlocke
                                            and in the game in general.</td>
                                    </tr>
                                </tbody>
                            </table><br>
                            <p>
                                <b>Failed Encounter</b>
                            </p>
                            <table border="1" class="customTable">
                                <tbody>
                                    <thead>
                                        <th> Pokémon </th>
                                        <th> Level </th>
                                        <th> Type </th>
                                        <th> Encounter Rate </th>
                                        <th> Insight </th>
                                    </thead>
                                    <tr class="failenc">
                                        <td>Bulbasaur <br> <img src="sprites/firered-leafgreen/1.png" alt="bulbasaur">
                                        </td>
                                        <td>5</td>
                                        <td><img src="sprites/types/grass-poison.png" alt="grass poison type" class="">
                                        </td>
                                        <td>Gift</td>
                                        <td>The best choice for this region if you want to have an easier time with the
                                            Nuzlocke
                                            and in the game in general.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <hr class="linebreaker">
                    <span class="bigtext slightlysmall" style="color: white;">DIFFICULTY OF
                        TRAINERS</span>
                    <div class="containerMain">
                        <div class="tabledifficult">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="difficultycontainer">
                                                <div class="first xeasy"></div>
                                                <div class="nofill"></div>
                                                <div class="nofill"></div>
                                                <div class="nofill"></div>
                                                <div class="last nofill slightspace"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <p style="text-align: left !important; font-weight: bold;">
                                                Extremely Easy - Not really a challenge
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="difficultycontainer">
                                                <div class="first easy"></div>
                                                <div class="easy"></div>
                                                <div class="nofill"></div>
                                                <div class="nofill"></div>
                                                <div class="last nofill slightspace"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <p style="text-align: left !important; font-weight: bold;">
                                                Easy - Not a challenge but with minor issues
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="difficultycontainer">
                                                <div class="first normal"></div>
                                                <div class="normal"></div>
                                                <div class="normal"></div>
                                                <div class="nofill"></div>
                                                <div class="last nofill slightspace"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <p style="text-align: left !important; font-weight: bold;">
                                                Normal - A fair fight where my team and my opponent's team are evenly
                                                matched.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="difficultycontainer">
                                                <div class="first hard"></div>
                                                <div class="hard"></div>
                                                <div class="hard"></div>
                                                <div class="hard"></div>
                                                <div class="last nofill slightspace"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <p style="text-align: left !important; font-weight: bold;">
                                                Hard - A fight where I struggled a bit due to certain things.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="difficultycontainer">
                                                <div class="first challenging"></div>
                                                <div class="challenging"></div>
                                                <div class="challenging"></div>
                                                <div class="challenging"></div>
                                                <div class="last challenging slightspace"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <p style="text-align: left !important; font-weight: bold;">
                                                Challenging - I struggled throughout the fight in an unfair manner.
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p id="difficulty" class="">Note that just because a fight is easy, it does not mean there were
                            no deaths during
                            the fight. On the other hand, a difficult fight does not necessarily mean there were deaths.
                        </p>
                    </div>
                    <hr class="linebreaker">
                    <div class="containerMain">
                        <span class="bigtext clickable" onclick="toggleElement('displayrules')">Rules for the
                            Playthrough</span>
                        <div id="displayrules" class="rules-content" style="height: 0;">
                            <hr class="linebreaker2">
                            <ul>
                                <li>A fainted Pokémon is considered dead and must be boxed or released forever.</li>
                                <li>You can only catch the first Pokemon encounter in any route or area. (I will be
                                    playing with dupes clause in which if you already have that Pokémon you no longer
                                    need to catch it in order for you to not get a duplicate as well as evolution clause
                                    which is similar to dupes clause but it counts the whole evolution line for that
                                    Pokémon.)</li>
                                <li>(Optional) Nickname your Pokémon</li>
                            </ul>
                        </div>
                    </div>

                    <div class="containerMain" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayextrarules')">Extra Rules</span>
                        <div id="displayextrarules" class="rules-content" style="height: 0;">
                            <hr class="linebreaker2">
                            <ul>
                                <li>No use of Healing items during battle.</li>
                                <li>The game must be in "SET" mode.</li>
                                <li>I cannot deposit a Pokémon unless it is dead.</li>
                                <li> A level limit is implemented before battling a gym.
                                    <ul>
                                        <li>Brock - Lv.14</li>
                                        <li>Misty - Lv.21</li>
                                        <li>Lt. Surge - Lv.24</li>
                                        <li>Erika - Lv.29</li>
                                        <li>Koga - Lv.43</li>
                                        <li>Sabrina - Lv.43</li>
                                        <li>Blaine - Lv.47</li>
                                        <li>Giovanni - Lv.50</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="Episode 1" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Episode 1 - This series
                        will most likely be cancelled halfway through"</span>
                    <lite-youtube class="youtubevideo" videoid="z7nrU5ErHpk"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Introduction" class="tab-link nextprev-button" data-tab="Introduction"><- Introduction</a>
                                <a href="#Episode2" class="tab-link nextprev-button" data-tab="Episode 2">Episode 1 -></a>
                    </div>
                    <p class="" style="color: white;">This is the first episode of the playthrough. The
                        things that I did in this episode is that
                        I picked my starter and battled my rival as soon as he chose his. I had to pick up a package
                        from Viridian City's PokéMart and give it to Professor Oak in order to receive my Pokédex as
                        well as a set of Pokéballs which I can now properly start my Nuzlocke challenge. Now that the
                        Nuzlocke challenge
                        is properly started, I then decided to catch my encounters for Route 1, Route 2, Route 22, and
                        Viridian forest.</p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <button id="showAll1" class="showbtn"><img class="buttonimg" src="sprites/allEncounters.png" alt="show all button"></button>
                    <button id="showCaught1" class="showbtn"><img class="buttonimg" src="sprites/caughtIcon.png" alt="show caught button"></button>
                    <div class="col containerMain prof">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Professor Oak's Lab
                            </span>
                            <p class="">In this Nuzlocke challenge,
                                although not explicitly stated in the rules, my starter Pokémon is determined by my
                                ID number. If the last digit of my ID number is 1-3, I choose Bulbasaur; 4-6,
                                Charmander; and 7-9, Squirtle. It's one of the most crucial decisions in the game.
                            </p>
                            <div class="giftpokemon"><i class="fa-solid fa-gift"></i> Gift Pokémon</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($oaklab, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>

                    <div class="col containerMain route1">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign ">Route 1
                            </span>
                            <p class="textjustify titlealign"></p>
                            <div class="grasspokemon"><i class="fa-solid fa-seedling"></i> Grass Encounters</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($route1, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col containerMain route2">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 2
                            </span>
                            <p class="textjustify titlealign">There are two parts to this
                                route, one at the beginning and one at the end of viridian forest. You can count
                                them as separate but I'm counting it as just one since the encounters are similar.
                            </p>
                            <div class="grasspokemon"><i class="fa-solid fa-seedling"></i> Grass Encounters</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($route2, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col containerMain route22">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign ">Route 22
                            </span>
                            <p class="textjustify titlealign">Almost all of the encounters
                                here are decent but Mankey is really the one that you want to get in this route
                                especially if you chose Charmander.</p>
                            <div class="grasspokemon"><i class="fa-solid fa-seedling"></i> Grass Encounters</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($route22, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col containerMain viridian">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign ">Viridian Forest
                            </span>
                            <p class="textjustify titlealign">The encounters are just mostly
                                bugs but Pikachu is probably the best one to encounter however it is quite rare.</p>
                            <div class="grasspokemon"><i class="fa-solid fa-seedling"></i> Grass Encounters</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($viridian, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain prof">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Professor Oak's Lab
                            </span>
                            <?php trainerCard($oaklabTrainer); ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span style="color: white;" class="bigtext clickable" onclick="toggleElement('displayparty1')">Party at the end of the
                            Episode</span>
                        <div id="displayparty1" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party1); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span style="color: white;" class="bigtext clickable" onclick="toggleElement('displaydeath1')">
                            <i class="fa-solid fa-skull"></i> Death/s <i class="fa-solid fa-skull"></i> [Spoilers]
                        </span>
                        <div id="displaydeath1" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death1, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 2" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 2 -
                        Very Looooooooong forest"</span>
                    <lite-youtube class="youtubevideo" videoid="99NT8e4OhVY"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode1" class="tab-link nextprev-button" data-tab="Episode 1"><- Episode 1</a>
                                <a href="#Episode3" class="tab-link nextprev-button" data-tab="Episode 3">Episode 3 -></a>
                    </div>
                    <p class="" style="color: white;">The second episode starts with me with training up all
                        of my Pokemon to level 10 in order to keep up with my starter's level. After training, I
                        immediately challenged my Rival for the 2nd time which went well because of my training. After
                        that, I fought through Viridian forest in order to get to the next city which is Pewter city in
                        order to challenge the first Gym leader.</p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall">No new encounter for this episode.
                            </span>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>

                    <div class="col containerMain route22">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 22
                            </span>
                            <?php trainerCard($route22trainer); ?>
                        </div>
                    </div>
                    <div class="col containerMain viridian">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Viridian Forest
                            </span>
                            <?php trainerCard($viridiantrainer); ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span style="color: white;" class="bigtext clickable" onclick="toggleElement('displayparty2')">Party at the end of the
                            Episode</span>
                        <div id="displayparty2" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span style="color: white;" class="bigtext clickable" onclick="toggleElement('displaydeath2')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath2" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death1, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 3" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 3 -
                        Good thing I started with Squirtle"</span>
                    <lite-youtube class="youtubevideo" videoid="aY8DG28Y7MM"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode2" class="tab-link nextprev-button" data-tab="Episode 2"><- Episode 2</a>
                                <a href="#Episode4" class="tab-link nextprev-button" data-tab="Episode 4">Episode 4 -></a>
                    </div>
                    <p class="" style="color: white;">This episode I challenged the Pewter City gym and right
                        after that I headed to route 3 and challenged a bunch of trainers to go to the next main area
                        which is Mt.Moon.</p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <button id="showAll3" class="showbtn"><img class="buttonimg" src="sprites/allEncounters.png" alt="show all button"></button>
                    <button id="showCaught3" class="showbtn"><img class="buttonimg" src="sprites/caughtIcon.png" alt="show caught button"></button>
                    <div class="row">
                        <div class=" col containerMain">
                            <div class="limiter">
                                <span class="bigtext slightlysmall titlealign">Route 3
                                </span>
                                <p class="textjustify titlealign">A pretty good time for you to have another team member
                                    and you have plenty to choose from.</p>
                                <div class="grasspokemon"><i class="fa-solid fa-seedling"></i> Grass Encounters</div>
                                <div style="overflow-x: auto;">
                                    <?php populateWild($route3, $tableWildHeaders); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>

                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Pewter City Gym
                            </span>
                            <?php trainerCard($pewterGym); ?>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 3
                            </span>
                            <?php trainerCard($route3Trainer); ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span style="color: white;" class="bigtext clickable" onclick="toggleElement('displayparty3')">Party at the end of the
                            Episode</span>
                        <div id="displayparty3" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party3_1); ?>
                                <?php populateParty($party3_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span style="color: white;" class="bigtext clickable" onclick="toggleElement('displaydeath3')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath3" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death1, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 4" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 4 -
                        I Sped Up Most Pokémon Battles in this Episode"</span>
                    <lite-youtube class="youtubevideo" videoid="04JGG7xF-fs"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode3" class="tab-link nextprev-button" data-tab="Episode 3"><- Episode 3</a>
                                <a href="#Episode5" class="tab-link nextprev-button" data-tab="Episode 5">Episode 5 -></a>
                    </div>
                    <p class="" style="color: white;">This episode is pretty much spent going through Mt.Moon
                        which was very long and tidious but I managed to get through it as well as reaching Cerulean
                        city.</p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <button id="showAll4" class="showbtn"><img class="buttonimg" src="sprites/allEncounters.png" alt="show all button"></button>
                    <button id="showCaught4" class="showbtn"><img class="buttonimg" src="sprites/caughtIcon.png" alt="show caught button"></button>
                    <div class=" col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Mt. Moon
                            </span>
                            <p class="textjustify titlealign">There are plenty of Pokémon to encounter here and you
                                can plan out which you can get based on the location within Mt. Moon. There are
                                different encounters depending on the floor but I will count them as one location.
                            </p>
                            <div class="cavepokemon"><i class="fa-solid fa-mountain"></i> Cave Encounters</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($mtMoon, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class=" col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Route 3 Pokémon Center
                            </span>
                            <p class="textjustify titlealign">You can get a Magikarp by buying it from a man inside
                                the Pokémon center and it is up to you whether to count this as a separate encounter
                                from your normal encounter on Route 3
                            </p>
                            <div class="giftpokemon"><i class="fa-solid fa-gift"></i> Gift Encounters</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($route3PKMNCenter, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class=" col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Route 4
                            </span>
                            <p class="textjustify titlealign">Not as impressive as Mt. Moon but you really cannot
                                complain with the encounters you are given on a Nuzlocke.
                            </p>
                            <div class="grasspokemon"><i class="fa-solid fa-seedling"></i> Grass Encounters</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($route4, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>

                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 3
                            </span>
                            <?php trainerCard($route3Trainer2); ?>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Mt. Moon
                            </span>
                            <?php trainerCard($mtMoonTrainer); ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty4')">Party at the end of the
                            Episode</span>
                        <div id="displayparty4" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party4_1); ?>
                                <?php populateParty($party4_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath4')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath4" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death1, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 5" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 5 -
                        Look Closely at the Thumbnail"</span>
                    <lite-youtube class="youtubevideo" videoid="fnuHq8D2c1Y"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode4" class="tab-link nextprev-button" data-tab="Episode 4"><- Episode 4</a>
                                <a href="#Episode6" class="tab-link nextprev-button" data-tab="Episode 6">Episode 6 -></a>
                    </div>
                    <p class="" style="color: white;">The episode was first spend fighting my rival again and
                        then fought through the nugget bridge which has a surprise at the end. After that I also went to
                        Bill's house in order to get an S.S Anne ticket which will be used later on. The encounters that
                        I got here are from route 24 and route 25 which has identical encounters. Also, look at
                        thumbnail closely.</p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <button id="showAll5" class="showbtn"><img class="buttonimg" src="sprites/allEncounters.png" alt="show all button"></button>
                    <button id="showCaught5" class="showbtn"><img class="buttonimg" src="sprites/caughtIcon.png" alt="show caught button"></button>
                    <div class=" col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Route 24
                            </span>
                            <p class="textjustify titlealign">A lot of things to encounter in case you missed some
                                prior to this route. The only thing new for me here are Bellsprout and Abra which
                                the latter is tough to catch.
                            </p>
                            <div class="grasspokemon"><i class="fa-solid fa-mountain"></i> Grass Encounters</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($route24, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class=" col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Route 25
                            </span>
                            <p class="textjustify titlealign">Similar encounters to Route 24 but some Pokemon have a
                                slightly higher level. Also, the only new encounter here for me is Abra so I do not
                                really have a choice.
                            </p>
                            <div class="grasspokemon"><i class="fa-solid fa-mountain"></i> Grass Encounters</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($route25, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Cerulean City
                            </span>
                            <?php trainerCard($ceruleanTrainer); ?>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 24
                            </span>
                            <?php trainerCard($route24Trainer); ?>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 25
                            </span>
                            <?php trainerCard($route25Trainer); ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty5')">Party at the end of the
                            Episode</span>
                        <div id="displayparty5" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party5_1); ?>
                                <?php populateParty($party5_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath5')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath5" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death2, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 6" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 6 -
                        Not Too Thankful that my Starter is Squirtle"</span>
                    <lite-youtube class="youtubevideo" videoid="VJvnkvnBDIs"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode5" class="tab-link nextprev-button" data-tab="Episode 5"><- Episode 5</a>
                                <a href="#Episode7" class="tab-link nextprev-button" data-tab="Episode 7">Episode 7 -></a>
                    </div>
                    <p class="" style="color: white;">This episode is somewhat isolated considering that I
                        just trained in the beginning and fought the Cerulean gym and immediately
                        ended the episode right afer that.</p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <div class="containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall">No new encounter for this episode.
                            </span>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Cerulean City Gym
                            </span>
                            <?php trainerCard($ceruleanGymTrainer); ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty6')">Party at the end of the
                            Episode</span>
                        <div id="displayparty6" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party6_1); ?>
                                <?php populateParty($party6_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath6')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath6" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death3, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 7" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 7 -
                        Vermillion dollars"</span>
                    <lite-youtube class="youtubevideo" videoid="39azBpM_r14"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode6" class="tab-link nextprev-button" data-tab="Episode 6"><- Episode 6</a>
                                <a href="#Episode8" class="tab-link nextprev-button" data-tab="Episode 8">Episode 8 -></a>
                    </div>
                    <p class="" style="color: white;">Just like what the title suggests, the episode was
                        spent going Vermillion city which I had to through route 5 and route 6. Alongside that, I also
                        fought through trainers just to get to Vermillion city. I also did not settled in it since I
                        also went through Digglet's cave and route 11 and also fought the trainer's there, IT WAS A LOT.
                    </p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <button id="showAll7" class="showbtn"><img class="buttonimg" src="sprites/allEncounters.png" alt="show all button"></button>
                    <button id="showCaught7" class="showbtn"><img class="buttonimg" src="sprites/caughtIcon.png" alt="show caught button"></button>
                    <div class=" col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Route 5
                            </span>
                            <p class="textjustify titlealign">There is really only one new encounter that I could
                                get here which I came so close to almost not catching due to my dupes clause limit
                                of 5 for this playthrough.
                            </p>
                            <div class="grasspokemon"><i class="fa-solid fa-seedling"></i> Grass Encounters</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($route5, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class=" col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Route 6
                            </span>
                            <p class="textjustify titlealign"> I did not realize that the encounter here (for the
                                grass encounters atleast) is similar to route 5 so I wasted my encounter here.
                            </p>
                            <div class="grasspokemon"><i class="fa-solid fa-seedling"></i> Grass Encounters</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($route6, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class=" col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Diglett's Cave
                            </span>
                            <p class="textjustify titlealign">You can pretty much gurrantee that the encounter here
                                are Diglett and a rare chance to get an overleveled Dugtrio which I cannot use
                                currently in this challenge due to the level that you will get this Pokemon at.
                                <br><br>
                                All of the encounters here are pretty good considering the upcoming fight with the
                                next gym leader.
                            </p>
                            <div class="cavepokemon"><i class="fa-solid fa-mountain"></i> Cave Encounters</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($diglettcave, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class=" col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Route 11
                            </span>
                            <p class="textjustify titlealign">It has decent Pokemon within it especially Sandshrew
                                (if you need an extra ground type) and Drowzee which is atleast a decent Psychic
                                type.
                            </p>
                            <div class="grasspokemon"><i class="fa-solid fa-seedling"></i> Grass Encounters</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($route11, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Cerulean City
                            </span>
                            <?php trainerCard($ceruleanTrainer2); ?>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 6
                            </span>
                            <?php trainerCard($route6Trainer); ?>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 11
                            </span>
                            <?php trainerCard($route11Trainer); ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty7')">Party at the end of the
                            Episode</span>
                        <div id="displayparty7" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party7_1); ?>
                                <?php populateParty($party7_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath7')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath7" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death3, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 8" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 8 -
                        That Time I "GAME ENDED" my Rival's Raticate"</span>
                    <lite-youtube class="youtubevideo" videoid="6TtZLgiaI0w"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode7" class="tab-link nextprev-button" data-tab="Episode 7"><- Episode 7</a>
                                <a href="#Episode9" class="tab-link nextprev-button" data-tab="Episode 9">Episode 9 -></a>
                    </div>
                    <p class="" style="color: white;">In this episode went to the S.S Anne and fought some
                        trainers as well as my rival who I assume that his Raticate was killed by me during our fight
                        (or not) and got the HM for cut from the captain in order to fight the gym leader of Vermillion
                        city.
                    </p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall">No new encounter for this episode.
                            </span>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">S.S. Anne
                            </span>
                            <?php trainerCard($ssAnneTrainer); ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty8')">Party at the end of the
                            Episode</span>
                        <div id="displayparty8" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party8_1); ?>
                                <?php populateParty($party8_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath8')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath8" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death3, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 9" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 9 -
                        Normal Rat V.S. Electric Rat"</span>
                    <lite-youtube class="youtubevideo" videoid="_qhjVqA1kco"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode8" class="tab-link nextprev-button" data-tab="Episode 8"><- Episode 8</a>
                                <a href="#Episode10" class="tab-link nextprev-button" data-tab="Episode 10">Episode 10 -></a>
                    </div>
                    <p class="" style="color: white;">I fought through the entirety of Vermillion city gym,
                        that's pretty much it.
                    </p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall">No new encounter for this episode.
                            </span>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Vermillion City Gym
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">Just a heads up, you should buy a lot of paralyz
                                heals for this whole gym because of the ability static.
                            </span>
                            <?php trainerCard($vermillionGymTrainer); ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty9')">Party at the end of the
                            Episode</span>
                        <div id="displayparty9" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party9_1); ?>
                                <?php populateParty($party9_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath9')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath9" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death3, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 10" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 10 -
                        Trainer Beatdown"</span>
                    <lite-youtube class="youtubevideo" videoid="klH7wJdonIM"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode9" class="tab-link nextprev-button" data-tab="Episode 9"><- Episode 9</a>
                                <a href="#Episode11" class="tab-link nextprev-button" data-tab="Episode 11">Episode 11 -></a>
                    </div>
                    <p class="" style="color: white;">I am not really sure why I called it trainer beatdown
                        considering I only went through route 9 which has only a handful of trainers.
                    </p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <button id="showAll10" class="showbtn"><img class="buttonimg" src="sprites/allEncounters.png" alt="show all button"></button>
                    <button id="showCaught10" class="showbtn"><img class="buttonimg" src="sprites/caughtIcon.png" alt="show caught button"></button>
                    <div class=" col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Route 9
                            </span>
                            <p class="textjustify titlealign">I have already caught all of the possible encounters
                                here.
                            </p>
                            <div style="overflow-x: auto;">
                                <?php populateWild($route9, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class=" col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Route 10
                            </span>
                            <p class="textjustify titlealign"> A really good time to have an electric type Pokemon
                                if you have already caught the other two encounters here.
                            </p>
                            <div style="overflow-x: auto;">
                                <?php populateWild($route10, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 9
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">I'm not really sure why I called this episode
                                trainer beatdown when I only fought a handle of trainers.
                            </span>
                            <?php trainerCard($route9Trainer); ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty10')">Party at the end of
                            the
                            Episode</span>
                        <div id="displayparty10" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party10_1); ?>
                                <?php populateParty($party10_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath10')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath10" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death3, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 11" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 11 -
                        Dank Tunnel"</span>
                    <lite-youtube class="youtubevideo" videoid="jV0cdqCj0SM"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode10" class="tab-link nextprev-button" data-tab="Episode 10"><- Episode 10</a>
                                <a href="#Episode12" class="tab-link nextprev-button" data-tab="Episode 12">Episode 12 -></a>
                    </div>
                    <p class="" style="color: white;">I went through Rock tunnel which was pretty dark and I
                        can barely navigate through it but at the end I managed to reach Lavender town.
                    </p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <button id="showAll11" class="showbtn"><img class="buttonimg" src="sprites/allEncounters.png" alt="show all button"></button>
                    <button id="showCaught11" class="showbtn"><img class="buttonimg" src="sprites/caughtIcon.png" alt="show caught button"></button>
                    <div class="containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Rock Tunnel
                            </span>
                            <p class="titlealign">Many decent Pokemon that you can catch here though I think the best
                                ones are the fighting types that can be caught here.
                            </p>
                            <div class="cavepokemon"><i class="fa-solid fa-mountain"></i> Cave Encounters</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($rocktunnel, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 10 (First Part)
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">I did not know that route 10 has two parts
                                which are the entrance to the Rock Tunnel and the exit. I will be splitting up these
                                two parts.
                            </span>
                            <?php trainerCard($route10Trainer1); ?>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Rock Tunnel
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">The Rock Tunnel was so dark and confusing that
                                I am pretty sure I missed a couple of trainers. It is to be expected as I was kinda
                                rushing the episode.
                            </span>
                            <?php trainerCard($rocktunnelTrainer); ?>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 10 (Second Part)
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">This is the second part of route 10 which has more
                                trainers.
                            </span>
                            <?php trainerCard($route10Trainer2); ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty11')">Party at the end of
                            the
                            Episode</span>
                        <div id="displayparty11" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party11_1); ?>
                                <?php populateParty($party11_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath11')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath11" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death3, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 12" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 12 -
                        Nothing Much, Just Trainers"</span>
                    <lite-youtube class="youtubevideo" videoid="NECzipb3f1Q"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode11" class="tab-link nextprev-button" data-tab="Episode 11"><- Episode 11</a>
                                <a href="#Episode13" class="tab-link nextprev-button" data-tab="Episode 13">Episode 13 -></a>
                    </div>
                    <p class="" style="color: white;">I went to the Pokémon tower first and only fought my
                        Rival there and I had to skip all of the trainers there and fight them another time. Next is
                        that I went through route 8, got my encounter and fought a lot of trainers and then reached
                        Celadon city which is where the next gym leader is.
                    </p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <button id="showAll12" class="showbtn"><img class="buttonimg" src="sprites/allEncounters.png" alt="show all button"></button>
                    <button id="showCaught12" class="showbtn"><img class="buttonimg" src="sprites/caughtIcon.png" alt="show caught button"></button>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Route 8
                            </span>
                            <p class="titlealign">You have probably encountered all of the Pokémon available here.
                                But
                                there is a chance that you could get a Vulpix (Growlithe if FireRed) here.
                            </p>
                            <div class="grasspokemon"><i class="fa-solid fa-seeling"></i> Grass Encounters</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($route8, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Route 7
                            </span>
                            <p class="titlealign">Pretty much encountered all of the Pokémon available here which I
                                didn't know during the video.
                            </p>
                            <div class="grasspokemon"><i class="fa-solid fa-seeling"></i> Grass Encounters</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($route7, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Pokémon Tower
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">In this location, I decided to skip all of the
                                trainers here besides my rival for some reason.
                            </span>
                            <?php trainerCard($pokemonTowerTrainer1); ?>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 8
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">The Rock Tunnel was so dark and confusing that
                                I am pretty sure I missed a couple of trainers. It is to be expected as I was kinda
                                rushing the episode.
                            </span>
                            <?php trainerCard($route8Trainer); ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty12')">Party at the end of
                            the
                            Episode</span>
                        <div id="displayparty12" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party12_1); ?>
                                <?php populateParty($party12_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath12')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath12" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death3, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 13" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 13 -
                        This Gym is Surprisingly Tough Without A Decent Fire"</span>
                    <lite-youtube class="youtubevideo" videoid="E-PzmNIxJHU"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode12" class="tab-link nextprev-button" data-tab="Episode 12"><- Episode 12</a>
                                <a href="#Episode14" class="tab-link nextprev-button" data-tab="Episode 14">Episode 14 -></a>
                    </div>
                    <p class="" style="color: white;">Like what the title suggested, I fought the Celadon
                        city gym but I had to get the HM for fly first in order to atleast make Crocodile more useful
                        during the fight because I don't have any fire type with me which made the battle a little
                        tricky.
                    </p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall">No new encounter for this episode.
                            </span>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 16
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">There is only one trainer available here (atleast
                                in this part of it) and they
                                might give you some trouble if you are not prepared.
                            </span>
                            <?php trainerCard($route16Trainer1); ?>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Celadon City Gym
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">
                            </span>
                            <?php trainerCard($celadongymTrainer); ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty13')">Party at the end of
                            the
                            Episode</span>
                        <div id="displayparty13" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party13_1); ?>
                                <?php populateParty($party13_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath13')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath13" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death3, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 14" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 14 -
                        Good Thing This isn't Twitch Plays Pokémon"</span>
                    <lite-youtube class="youtubevideo" videoid="oE_9iu3atUA"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode13" class="tab-link nextprev-button" data-tab="Episode 13"><- Episode 13</a>
                                <a href="#Episode15" class="tab-link nextprev-button" data-tab="Episode 15">Episode 15 -></a>
                    </div>
                    <p class="" style="color: white;">I went inside the game corner and fought a suspicious
                        looking rocket grunt and found a hidden entrance to a rocket hideout. I breezed through the
                        grunts and fought their leader Giovanni which gave me a Silph scope after the fight.
                    </p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall">No new encounter for this episode.
                            </span>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Rocket Hideout
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">Expect to fight a lot of fodder rocket grunts
                                here, there will be many of them.
                            </span>
                            <?php trainerCard($rocketHideoutTrainer) ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty14')">Party at the end of
                            the
                            Episode</span>
                        <div id="displayparty14" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party14_1); ?>
                                <?php populateParty($party14_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath14')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath14" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death3, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 15" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 15 -
                        Can Pokémon Talk when They're Dead?"</span>
                    <lite-youtube class="youtubevideo" videoid="zf8jWrXtPtk"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode14" class="tab-link nextprev-button" data-tab="Episode 14"><- Episode 14</a>
                                <a href="#Episode16" class="tab-link nextprev-button" data-tab="Episode 16">Episode 16 -></a>
                    </div>
                    <p class="" style="color: white;">I went back to Lavender town to finish my rampage in
                        the Pokémon tower. I fought through possessed trainers and right at the end of he 6th floor, I
                        fought a ghost that turns out to be a Marowak by using the silph scope which can speak for some
                        reason. After that there were Rocket grunts on the very top floor which I also fought through in
                        order to save Mr. Fuji which was apparantly kidnapped by them.
                    </p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <button id="showAll15" class="showbtn"><img class="buttonimg" src="sprites/allEncounters.png" alt="show all button"></button>
                    <button id="showCaught15" class="showbtn"><img class="buttonimg" src="sprites/caughtIcon.png" alt="show caught button"></button>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Pokémon Tower
                            </span>
                            <p class="titlealign">Most of the encounters here are Ghastlys though there is a small
                                chance that you might encounter a Cubone, and depending on the floor, the higher the
                                encounter rate for Cubone.
                            </p>
                            <div class="giftpokemon"><i class="fa-solid fa-building"></i> Building Encounters</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($pokemontower, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Pokémon Tower
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">Same with the last episode, you will be fighting a
                                lot of trainers that have similar Pokémon.
                            </span>
                            <?php trainerCard($pokemonTowerTrainer2) ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty15')">Party at the end of
                            the
                            Episode</span>
                        <div id="displayparty15" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party15_1); ?>
                                <?php populateParty($party15_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath15')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath15" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death4, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 16" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 16 -
                        Trainer Mayhem"</span>
                    <lite-youtube class="youtubevideo" videoid="BQR6Hu9VTKA"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode15" class="tab-link nextprev-button" data-tab="Episode 15"><- Episode 15</a>
                                <a href="#Episode17" class="tab-link nextprev-button" data-tab="Episode 17">Episode 17 -></a>
                    </div>
                    <p class="" style="color: white;">The amount of trainers that I fought through this
                        episode was way too much! Hence the title name. Also, the amount of trainers that I fought in
                        this episode is nothing compared to what you will see on the next episode.
                    </p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <button id="showAll16" class="showbtn"><img class="buttonimg" src="sprites/allEncounters.png" alt="show all button"></button>
                    <button id="showCaught16" class="showbtn"><img class="buttonimg" src="sprites/caughtIcon.png" alt="show caught button"></button>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Route 12
                            </span>
                            <p class="titlealign">Not a lot of Pokémon to choose from, though there is a "free"
                                snorlax
                                on this route if you want it.
                            </p>
                            <div class="grasspokemon"><i class="fa-solid fa-seedling"></i> Grass Encounters</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($route12, $tableWildHeaders); ?>
                                <br>
                                <div class="fishpokemon"><i class="fa-solid fa-fish"></i> Super Rod Encounters</div>
                                <?php populateWild($route12superrod, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Route 13
                            </span>
                            <p class="titlealign">Some decent Pokémon especially if you got the super rod from the
                                house earlier in route 12. I ran into a Bellsprout first and then decided to skip this
                                area because I thought it has identical encounters with route 12.
                            </p>
                            <div class="grasspokemon"><i class="fa-solid fa-seedling"></i> Grass Encounters</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($route13, $tableWildHeaders); ?>
                                <br>
                                <div class="fishpokemon"><i class="fa-solid fa-fish"></i> Super Rod Encounters</div>
                                <?php populateWild($route13superrod, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 12
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">This is the start of the long journey from
                                Lavender town to Fuchsia city.
                            </span>
                            <?php trainerCard($route12Trainer); ?>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 13
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">You still have a long way to go.
                            </span>
                            <?php trainerCard($route13Trainer); ?>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 14
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">This route is a bit weird considering that it is
                                somewhat merged with route 13.
                            </span>
                            <?php trainerCard($route14Trainer); ?>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 15
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">Almost to Fuschia City!
                            </span>
                            <?php trainerCard($route15Trainer); ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty16')">Party at the end of
                            the
                            Episode</span>
                        <div id="displayparty16" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party16_1); ?>
                                <?php populateParty($party16_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath16')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath16" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death5, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 17" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 17 -
                        A Disastrous RAID"</span>
                    <lite-youtube class="youtubevideo" videoid="oOP7F5n4yCg"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode16" class="tab-link nextprev-button" data-tab="Episode 16"><- Episode 16</a>
                                <a href="#Episode18" class="tab-link nextprev-button" data-tab="Episode 18">Episode 18 -></a>
                    </div>
                    <p class="" style="color: white;">By far the longest and poorly structured episode in the
                        whole series. Way too many trainers, important deaths, training in-between the episode, and just
                        hard to keep up with. This is
                        basically the shibuya incident of the series.
                    </p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <button id="showAll17" class="showbtn"><img class="buttonimg" src="sprites/allEncounters.png" alt="show all button"></button>
                    <button id="showCaught17" class="showbtn"><img class="buttonimg" src="sprites/caughtIcon.png" alt="show caught button"></button>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Safari Zone
                            </span>
                            <p class="titlealign">A lot of rare Pokémon to encounter though your chances of getting them
                                are very slim. I also did not think through the rules on this one though it is exclusive
                                to FireRed and LeafGreen where some poeple thing that each area of the safari zone
                                should have its own exclusive encounters which I did not do (I went with the classic
                                encounter method).
                            </p>
                            <div class="grasspokemon"><i class="fa-solid fa-seedling"></i> Grass Encounters - Area 1
                            </div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($safariZoneArea1, $tableWildHeaders); ?>
                            </div>
                            <br>
                            <div class="grasspokemon"><i class="fa-solid fa-seedling"></i> Grass Encounters - Area 2
                            </div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($safariZoneArea2, $tableWildHeaders); ?>
                            </div>
                            <br>
                            <div class="grasspokemon"><i class="fa-solid fa-seedling"></i> Grass Encounters - Area 3
                            </div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($safariZoneArea3, $tableWildHeaders); ?>
                            </div>
                            <br>
                            <div class="grasspokemon"><i class="fa-solid fa-seedling"></i> Grass Encounters - Area 4
                            </div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($safariZoneArea4, $tableWildHeaders); ?>
                                <br>
                                <div class="fishpokemon"><i class="fa-solid fa-fish"></i> Super Rod Encounters
                                </div>
                                <?php populateWild($safariZonesuperrod, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Route 17
                            </span>
                            <p class="titlealign">I already caught most of the Pokemon here except for one which I then
                                caught. Also, in case you did not notice, I caught my encounter here during a sped-up
                                portion of the video.
                            </p>
                            <div class="grasspokemon"><i class="fa-solid fa-seedling"></i> Grass Encounters</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($route17, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Vermillion City
                            </span>
                            <p class="titlealign">You can encounter some Pokémon here if you have a fishing rod.
                            </p>
                            <div class="fishpokemon"><i class="fa-solid fa-fish"></i> Super Rod Encounters</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($vermillionCitysuperrod, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Fuchsia City
                            </span>
                            <p class="titlealign">I will be completely honest, I am not even sure if it was this episode
                                I encountered something in Fuchsia city which happened during the speed up portion of
                                the video.
                            </p>
                            <div class="fishpokemon"><i class="fa-solid fa-fish"></i> Super Rod Encounters</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($fuchsiacitysuperrod, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Silph Co.
                            </span>
                            <p class="titlealign">You can get a very special and strong Pokémon in this building by
                                talking to an NPC. This NPC is located within the 7th floor of Silph Co.
                            </p>
                            <div class="giftpokemon"><i class="fa-solid fa-building"></i> Gift Pokémon</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($silphco, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 15
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">Cleaning up the trainers back here becaused I
                                skipped a lot of them.
                            </span>
                            <?php trainerCard($route15Trainer2) ?>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 18
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">An incredibly small route with trainers that are
                                good to train with if you have a vs. seeker.
                            </span>
                            <?php trainerCard($route18Trainer) ?>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 17 (Cycling Road)
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">This is basically a cycling road but with too many
                                trainers in it as well as gravity slowing you down when you go up.
                            </span>
                            <?php trainerCard($route17Trainer) ?>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 16 (Cycling Road)
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">Route 16 has two parts basically, one is within
                                the cycling road and the other is outside where you can encounter another snorlax.
                            </span>
                            <?php trainerCard($route16Trainer2) ?>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Silph Co.
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">Prepare to fight a lot of fodder Rocket Grunts but
                                at least it will be the last time you will fight them.
                            </span>
                            <?php trainerCard($silphcoTrainer) ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty17')">Party at the end of
                            the
                            Episode</span>
                        <div id="displayparty17" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party17_1); ?>
                                <?php populateParty($party17_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath17')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath17" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death6, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 18" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 18 -
                        Dojo Danger"</span>
                    <lite-youtube class="youtubevideo" videoid="gjpmWqYxJ-A"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode17" class="tab-link nextprev-button" data-tab="Episode 17"><- Episode 17</a>
                                <a href="#Episode19" class="tab-link nextprev-button" data-tab="Episode 19">Episode 19 -></a>
                    </div>
                    <p class="" style="color: white;">A little more chill compared to the last episode
                        considering the amount of Pokémon I encountered and trainers battled in this episode.
                    </p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <button id="showAll18" class="showbtn"><img class="buttonimg" src="sprites/allEncounters.png" alt="show all button"></button>
                    <button id="showCaught18" class="showbtn"><img class="buttonimg" src="sprites/caughtIcon.png" alt="show caught button"></button>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Saffron City (Dojo)
                            </span>
                            <p class="titlealign">After defeating all of the trainers and the karate master, you are
                                basically asked which Pokémon you would choose.
                            </p>
                            <div class="giftpokemon"><i class="fa-solid fa-building"></i> Gift Pokémon</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($saffronCity, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Saffron City
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">You have to fight through all of the trainers and
                                lastly the karate master
                            </span>
                            <?php trainerCard($saffronCityTrainer); ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty18')">Party at the end of
                            the
                            Episode</span>
                        <div id="displayparty18" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party18_1); ?>
                                <?php populateParty($party18_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath18')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath18" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death6, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 19" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 19 -
                        Ninja Saga"</span>
                    <lite-youtube class="youtubevideo" videoid="sZa7vQEctDo"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode18" class="tab-link nextprev-button" data-tab="Episode 18"><- Episode 18</a>
                                <a href="#Episode20" class="tab-link nextprev-button" data-tab="Episode 20">Episode 20 -></a>
                    </div>
                    <p class="" style="color: white;">I just battled through Koga's gym and that was it.
                    </p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall">No new encounter for this episode.
                            </span>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Fuchsia City Gym
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">You would be surprised by the amount of non poison
                                types used in this gym.
                            </span>
                            <?php trainerCard($fuchsiaCityTrainer); ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty19')">Party at the end of
                            the
                            Episode</span>
                        <div id="displayparty19" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party19_1); ?>
                                <?php populateParty($party19_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath19')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath19" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death6, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 20" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 20 -
                        SaBRUHna"</span>
                    <lite-youtube class="youtubevideo" videoid="ERiUE5cJOLg"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode19" class="tab-link nextprev-button" data-tab="Episode 19"><- Episode 19</a>
                                <a href="#Episode21" class="tab-link nextprev-button" data-tab="Episode 21">Episode 21 -></a>
                    </div>
                    <p class="" style="color: white;">Not really sure why I gave this episode that title. Maybe, it has
                        something to do with how hard the fight was?
                    </p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall">No new encounter for this episode.
                            </span>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Saffron City Gym
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">The gym layout is a bit confusing so good luck or
                                follow my lead(DON'T).
                            </span>
                            <?php trainerCard($saffronCityGymTrainer); ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty20')">Party at the end of
                            the
                            Episode</span>
                        <div id="displayparty20" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party20_1); ?>
                                <?php populateParty($party20_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath20')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath20" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death7, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 21" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 21 -
                        "LOOK GUYS I DID MISSINGNO GLITCH IN POKÉMON LEAFGREEN"</span>
                    <lite-youtube class="youtubevideo" videoid="kQQN4n5lUUY"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode20" class="tab-link nextprev-button" data-tab="Episode 20"><- Episode 20</a>
                                <a href="#Episode22" class="tab-link nextprev-button" data-tab="Episode 22">Episode 22 -></a>
                    </div>
                    <p class="" style="color: white;">Clickbait title, I have fallen off.
                    </p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <button id="showAll21" class="showbtn"><img class="buttonimg" src="sprites/allEncounters.png" alt="show all button"></button>
                    <button id="showCaught21" class="showbtn"><img class="buttonimg" src="sprites/caughtIcon.png" alt="show caught button"></button>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Route 19
                            </span>
                            <p class="titlealign">The best encounters here are found through fishing.
                            </p>
                            <div class="surfpokemon"><i class="fa-solid fa-water"></i> Surf Pokémon</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($route19, $tableWildHeaders); ?>
                                <div class="fishpokemon"><i class="fa-solid fa-fish"></i> Super Rod Pokémon</div>
                                <?php populateWild($route19superrod, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Pallet Town
                            </span>
                            <p class="titlealign">The only way you can get your encounters here are through fishing.
                            </p>
                            <div class="surfpokemon"><i class="fa-solid fa-water"></i> Surf Pokémon</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($pallettown, $tableWildHeaders); ?>
                                <div class="fishpokemon"><i class="fa-solid fa-fish"></i> Super Rod Pokémon</div>
                                <?php populateWild($pallettownsuperrod, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Route 21
                            </span>
                            <p class="titlealign">Just another generic surfing area with a tiny bit of land that you can
                                catch something on.
                            </p>
                            <div class="grasspokemon"><i class="fa-solid fa-seedling"></i> Grass Pokémon</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($route21, $tableWildHeaders); ?>
                                <div class="surfpokemon"><i class="fa-solid fa-fish"></i> Surf Pokémon</div>
                                <?php populateWild($route21surf, $tableWildHeaders); ?>
                                <div class="fishpokemon"><i class="fa-solid fa-fish"></i> Super Rod Pokémon</div>
                                <?php populateWild($route21superrod, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Cinnabar Island
                            </span>
                            <p class="titlealign">You can probably get missingno here.
                            </p>
                            <div class="surfpokemon"><i class="fa-solid fa-water"></i> Surf Pokémon</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($cinnabarisland, $tableWildHeaders); ?>
                                <div class="fishpokemon"><i class="fa-solid fa-fish"></i> Super Rod Pokémon</div>
                                <?php populateWild($cinnabarislandsuperrod, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Cinnabar Mansion
                            </span>
                            <p class="titlealign">Lot's of Pokémon to get here if you plan your encounters correctly.
                            </p>
                            <div class="giftpokemon"><i class="fa-solid fa-building"></i> Building Pokémon</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($mansion, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Route 20
                            </span>
                            <p class="titlealign">Just more surfing
                            </p>
                            <div class="surfpokemon"><i class="fa-solid fa-water"></i> Surf Pokémon</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($route20, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Seafoam Islands
                            </span>
                            <p class="titlealign">You can try and catch a legendary here if you allow it in your
                                Nuzlocke run.
                            </p>
                            <div class="cavepokemon"><i class="fa-solid fa-cave"></i> Cave Pokémon - 1F</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($seafoamislands, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 19
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">Just a few trainer to beat nothing more
                            </span>
                            <?php trainerCard($route19Trainer); ?>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 21
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">This are would be a breeze if you have an electric
                                type.
                            </span>
                            <?php trainerCard($route21Trainer); ?>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 20
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">More surfing trainers
                            </span>
                            <?php trainerCard($route20Trainer); ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty21')">Party at the end of
                            the
                            Episode</span>
                        <div id="displayparty21" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party21_1); ?>
                                <?php populateParty($party21_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath21')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath21" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death7, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 22" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 22 -
                        GOING INSIDE AN ABANBONED MANSION AT 3:00am NOT CLICKBAIT</span>
                    <lite-youtube class="youtubevideo" videoid="8XeBrcVb8Zc"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode21" class="tab-link nextprev-button" data-tab="Episode 21"><- Episode 21</a>
                                <a href="#Episode23" class="tab-link nextprev-button" data-tab="Episode 23">Episode 23 -></a>
                    </div>
                    <p class="" style="color: white;">Another clickbait title, I have truly fallen off. Also, I trained
                        at the end of the episode.
                    </p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall">No new encounter for this episode.
                            </span>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Cinnabar Mansion
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">All I have to beat are a bunch of clickbaiting
                                trainers about how they entered an abandoned mansion.
                            </span>
                            <?php trainerCard($cinnabarMansionTrainer); ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty22')">Party at the end of
                            the
                            Episode</span>
                        <div id="displayparty22" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party22_1); ?>
                                <?php populateParty($party22_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath22')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath22" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death7, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 23" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 23 -
                        I Blaine Myself for this Channel's Irrelevance</span>
                    <lite-youtube class="youtubevideo" videoid="OfCklToL4gc"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode22" class="tab-link nextprev-button" data-tab="Episode 22"><- Episode 22</a>
                                <a href="#Episode24" class="tab-link nextprev-button" data-tab="Episode 24">Episode 24 -></a>
                    </div>
                    <p class="" style="color: white;">I have been making videos for about 6 years at this point in time
                        yet my channel is still pretty stagnant so yeah, that is why I titled it that way. Also, I
                        battled through Cinnabar Island's gym. Also also, I trained a bit at the end of the episode.
                    </p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall">No new encounter for this episode.
                            </span>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Cinnabar Island Gym
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">You can skip the trainers by answering the
                                questions correctly in the quiz if you want to skip the trainers b3t, I still battled
                                them for EXP.
                            </span>
                            <?php trainerCard($cinnabarGymTrainer); ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty23')">Party at the end of
                            the
                            Episode</span>
                        <div id="displayparty23" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party23_1); ?>
                                <?php populateParty($party23_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath23')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath23" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death7, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 24" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 24 -
                        I, (Giorno) Giovanni, Have a Dream</span>
                    <lite-youtube class="youtubevideo" videoid="ZcsQ8u02F30"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode23" class="tab-link nextprev-button" data-tab="Episode 23"><- Episode 23</a>
                                <a href="#Episode25" class="tab-link nextprev-button" data-tab="Episode 25">Episode 25 -></a>
                    </div>
                    <p class="" style="color: white;">I challenged the very last gym in the Kanto region and also headed
                        towards route 23 for the badge check in order to properly proceed to victory road. Though at the
                        end, I did a bit of segway and went to the Sevii islands to clear my mind for a bit.
                    </p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall">No new encounter for this episode.
                            </span>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Viridian City Gym
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">The last gym in order to finally challenge the
                                elite four and the champion. I skipped most of the trainers so I can move on faster with
                                my life.
                            </span>
                            <?php trainerCard($viridianGymTrainer); ?>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Route 22 (Again)
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">A small road block before victory road.
                            </span>
                            <?php trainerCard($route22Trainer2); ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty24')">Party at the end of
                            the
                            Episode</span>
                        <div id="displayparty24" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party24_1); ?>
                                <?php populateParty($party24_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath24')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath24" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death7, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 25" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 25 -
                        That One Beach Episode of an Anime</span>
                    <lite-youtube class="youtubevideo" videoid="X_VYsIDXHI8"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode24" class="tab-link nextprev-button" data-tab="Episode 24"><- Episode 24</a>
                                <a href="#Episode26" class="tab-link nextprev-button" data-tab="Episode 26">Episode 26 -></a>
                    </div>
                    <p class="" style="color: white;">Think of this episode as the filler arc of the series where
                        instead of going forward to the victory road and the Indigo Plateau, I decided to go to the
                        Sevii islands first in order to unwind.
                    </p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <button id="showAll25" class="showbtn"><img class="buttonimg" src="sprites/allEncounters.png" alt="show all button"></button>
                    <button id="showCaught25" class="showbtn"><img class="buttonimg" src="sprites/caughtIcon.png" alt="show caught button"></button>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Kindle Road
                            </span>
                            <p class="titlealign">
                            </p>
                            <div class="grasspokemon"><i class="fa-solid fa-seedling"></i> Grass Pokémon</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($kindleroad, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Cape Brink
                            </span>
                            <p class="titlealign">Just some normal Pokémon to catch.
                            </p>
                            <div class="grasspokemon"><i class="fa-solid fa-seedling"></i> Grass Pokémon</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($capebrink, $tableWildHeaders); ?>
                                <div class="fishpokemon"><i class="fa-solid fa-fish"></i> Super Rod Pokémon</div>
                                <?php populateWild($capebrinksuperrod, $tableWildHeaders); ?>
                                <div class="fishpokemon"><i class="fa-solid fa-fish"></i> Good Rod Pokémon</div>
                                <?php populateWild($capebrinkgoodrod, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Bond Bridge
                            </span>
                            <p class="titlealign">No new encounters except Venonat which I did not encounter
                            </p>
                            <div class="grasspokemon"><i class="fa-solid fa-seedling"></i> Grass Pokémon</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($bondbridge, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Berry Forest
                            </span>
                            <p class="titlealign">Just more bugs in case you missed them. Also, a special creepy
                                Pokémon.
                            </p>
                            <div class="grasspokemon"><i class="fa-solid fa-seedling"></i> Grass Pokémon</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($berryforest, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Kindle Road
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">You can fight a lot of good trainers here that you
                                could actually use to train for the Elite Four especially if have a VS. Seeker.
                            </span>
                            <?php trainerCard($kindleroadTrainer); ?>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Three Island
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">Just a group of thugs you will never see again.
                                They do not even have names.
                            </span>
                            <?php trainerCard($threeislandTrainer); ?>
                        </div>
                    </div>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Bond Bridge
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">More trainers to battle through.
                            </span>
                            <?php trainerCard($bondbridgeTrainer); ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty25')">Party at the end of
                            the
                            Episode</span>
                        <div id="displayparty25" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party25_1); ?>
                                <?php populateParty($party25_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath25')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath25" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death7, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 26" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 26 -
                        Road to Victory</span>
                    <lite-youtube class="youtubevideo" videoid="qnyAicICCgA"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode25" class="tab-link nextprev-button" data-tab="Episode 25"><- Episode 25</a>
                                <a href="#Episode27" class="tab-link nextprev-button" data-tab="Episode 27">Episode 27 -></a>
                    </div>
                    <p class="" style="color: white;">I continued my main adventure through the victory road in order
                        finally challenge the Elite four.
                    </p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall">No new encounter for this episode.
                            </span>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign  ">Victory Road
                            </span>
                            <br>
                            <span class=" slightlysmall titlealign  ">The final hurdle in my journey.
                            </span>
                            <?php trainerCard($victoryRoadTrainer); ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty26')">Party at the end of
                            the
                            Episode</span>
                        <div id="displayparty26" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party26_1); ?>
                                <?php populateParty($party26_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath26')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath26" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death7, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 27" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 27 -
                        Lorelei is Surprisingly Tough</span>
                    <lite-youtube class="youtubevideo" videoid="rmUrzubaPCo"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode26" class="tab-link nextprev-button" data-tab="Episode 26"><- Episode 26</a>
                                <a href="#Episode28" class="tab-link nextprev-button" data-tab="Episode 28">Episode 28 -></a>
                    </div>
                    <p class="" style="color: white;">In the first part of the episode I captured my encounter in
                        Victory Road which skipped last episode and then trained off screen to keep up with the levels
                        of the Elite four. The main thing in this episode is that I challenged Lorelei which is the
                        first of the Elite four.
                    </p>
                    <span class="bigtext slightlysmall" style="color: white;">All encounters in this
                        episode</span>
                    <button id="showAll27" class="showbtn"><img class="buttonimg" src="sprites/allEncounters.png" alt="show all button"></button>
                    <button id="showCaught27" class="showbtn"><img class="buttonimg" src="sprites/caughtIcon.png" alt="show caught button"></button>
                    <div class="col containerMain">
                        <div class="limiter">
                            <span class="bigtext slightlysmall titlealign">Victory Road
                            </span>
                            <p class="titlealign">
                            </p>
                            <div class="cavepokemon"><i class="fa-solid fa-mountain"></i> Cave Pokémon - 2F</div>
                            <div style="overflow-x: auto;">
                                <?php populateWild($victoryroad, $tableWildHeaders); ?>
                            </div>
                        </div>
                    </div>
                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <?php trainerCard($loreleiTrainer) ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty27')">Party at the end of
                            the
                            Episode</span>
                        <div id="displayparty27" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party27_1); ?>
                                <?php populateParty($party27_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath27')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath27" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death7, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 28" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 28 -
                        Bruh, no</span>
                    <lite-youtube class="youtubevideo" videoid="Axi1QaG4GtU"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode27" class="tab-link nextprev-button" data-tab="Episode 27"><- Episode 27</a>
                                <a href="#Episode29" class="tab-link nextprev-button" data-tab="Episode 29">Episode 29 -></a>
                    </div>
                    <p class="" style="color: white;">Up next is Bruno the 2nd Elite four and a master of fighting
                        types.
                    </p>

                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <?php trainerCard($brunoTrainer) ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty28')">Party at the end of
                            the
                            Episode</span>
                        <div id="displayparty28" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party28_1); ?>
                                <?php populateParty($party28_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath28')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath28" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death7, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 29" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 29 -
                        Agatha</span>
                    <lite-youtube class="youtubevideo" videoid="ifyfxoo2UKI"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode28" class="tab-link nextprev-button" data-tab="Episode 28"><- Episode 28</a>
                                <a href="#Episode30" class="tab-link nextprev-button" data-tab="Episode 30">Episode 30 -></a>
                    </div>
                    <p class="" style="color: white;">Up next is Agatha the 3rd Elite four and a master of ghost
                        types.
                    </p>

                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <?php trainerCard($agathaTrainer) ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty29')">Party at the end of
                            the
                            Episode</span>
                        <div id="displayparty29" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party29_1); ?>
                                <?php populateParty($party29_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath29')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath29" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death7, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Episode 30" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - Episode 30 -
                        "You don't get to be Champion of the Pokemon League"</span>
                    <lite-youtube class="youtubevideo" videoid="wz_crI8G2gM"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode29" class="tab-link nextprev-button" data-tab="Episode 29"><- Episode 29</a>
                                <a href="Finale" class="tab-link nextprev-button" data-tab="Finale">Finale -></a>
                    </div>
                    <p class="" style="color: white;">Up next is the last of the Elite 4, the dragon type master, Lance.
                    </p>

                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <?php trainerCard($lanceTrainer) ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displayparty30')">Party at the end of
                            the
                            Episode</span>
                        <div id="displayparty30" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($party30_1); ?>
                                <?php populateParty($party30_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeath30')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeath30" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death7, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Finale" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">"Pokémon LeafGreen Nuzlocke - FINALE -
                        FINALLY! I FINISHED A SERIES IN THIS CHANNEL!</span>
                    <lite-youtube class="youtubevideo" videoid="W2917TKe4OQ"></lite-youtube>
                    <div class="episode-button">
                        <a href="#Episode30" class="tab-link nextprev-button" data-tab="Episode 30"><- Episode 30</a>
                                <a href="Review" class="tab-link nextprev-button" data-tab="Review">Review -></a>
                    </div>
                    <p class="" style="color: white;">This is the last episode of the series and this is where I
                        challenged the final trainer before becoming champion, my rival Toadman.
                    </p>

                    <span class="bigtext slightlysmall" style="color: white;">All trainers fought in this episode</span>
                    <div class="col containerMain">
                        <div class="limiter">
                            <?php trainerCard($championTrainer) ?>
                        </div>
                    </div>
                    <div class="containerMain party" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaypartyfinale')">Party at the end
                            of
                            the
                            Episode</span>
                        <div id="displaypartyfinale" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateParty($partyfinale_1); ?>
                                <?php populateParty($partyfinale_2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="containerMain death" style="margin-top: 18px;">
                        <span class="bigtext clickable" onclick="toggleElement('displaydeathfinale')"><i class="fa-solid fa-skull"></i>
                            Death/s <i class="fa-solid fa-skull"></i> [Spoilers]</span>
                        <div id="displaydeathfinale" class="rules-content" style="height: 0;">
                            <div style="overflow-x: auto; overflow-y: auto;">
                                <?php populateDeath($death8, $tableHeaders); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Review" class="tabcontent" style="display: none;">
                    <span class="bigtext slightlysmall" style="color: white;">Pokémon LeafGreen Nuzlocke Review</span>
                    <hr class="linebreaker">
                    <p class="" style="color: white;">This part of the website will just show you my overall thoughs
                        with regards to the game itself.
                    </p>
                    <div class="containerMain">
                        <div class="shaper">
                            <span class="bigtext slightlysmall" style="color: white;">Review</span>
                            <p class="textjustify" style=" color: white;">This series was actually the very first one
                                that I have properly finished on my channel. If I'm being honest, this Pokémon game is
                                probably the easiest to Nuzlocke, as the overall difficulty is not too high. My
                                experience with the challenge was pretty smooth sailing, and most of the deaths that
                                happened during the series were mostly my fault. Overall, this game is EASY to Nuzlocke,
                                and I recommend starting your Nuzlocke challenge with this game. Rating-wise, I would
                                give it a 9/10 in terms of overall experience.
                            </p>
                        </div>
                    </div>
                    <div class="containerMain">
                        <div class="shaper">
                            <span class="bigtext slightlysmall" style="color: white;">Tierlist</span>
                            <p class="textjustify" style=" color: white;">This is a general tier list that I created with regards to how good a Pokémon is in this specific game and challenge. Note that this is only my opinion, and it may differ from how you would tier a certain evolution line.
                            </p>
                            <div class="tabledifficult">
                                <table class="tableteir">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="textjustify" style="color:red;">S Tier</span>
                                            </td>
                                            <td>
                                                <span class="textjustify" style="color: white;">These are excellent Pokémon to have on your team and will guarantee smooth sailing against challenges.
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="textjustify" style="color:orange;">A Tier</span>
                                            </td>
                                            <td>
                                                <span class="textjustify" style="color: white">Good Pokémon to have in your team. Overall, very versatile and can fulfill certain roles in your team.</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class=" textjustify" style="color:green;">B Tier</span>
                                            </td>
                                            <td>
                                                <span class="textjustify" style="color: white;">Pretty good but are usually only good for one thing in your team.</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="textjustify" style="color:blue;">C Tier</span>
                                            </td>
                                            <td>
                                                <span class="textjustify" style="color: white;">Decent and fairly average, but other Pokémon can perform their role more effectively.</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="textjustify" style="color:magenta;">D Tier</span>
                                            </td>
                                            <td>
                                                <span class="textjustify" style="color: white;">While somewhat decent, the effort required to make them viable outweighs their usefulness.</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="textjustify" style="color:yellow;">E Tier </span>
                                            </td>
                                            <td>
                                                <span class="textjustify" style="color: white;">Bad Pokémon to use in this region and challenge.</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="textjustify" style="color:gray;">Last Tier </span>
                                            </td>
                                            <td>
                                                <span class="textjustify" style="color: white;">No proper opinion since I have not used them in any of my challenge or personal runs in Pokémon LeafGreen in general.</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <img src="../../images/tierlist.png" style="max-width: 100%; height: auto;" alt="pokemon leafgreen nuzlocke logo" width="1140" height="1144">
                        </div>
                    </div>
                </div>
            </div>
            <br>
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
    <script src="../../js/app.js"></script>
    <script src="js/changetab.js"></script>
    <script src="js/wildpokemonlf.js"></script>
    <script src="../../js/lite-yt-embed.js"></script>
</body>

</html>
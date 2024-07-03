<?php

//trainersprites
$bugCatcher = "sprites/7.png";
$camperMale = "sprites/Spr_FRLG_Camper.png";
$camperFemale = "sprites/39.png";
$lass = "sprites/Spr_FRLG_Lass.png";
$youngster = "sprites/Spr_FRLG_Youngster.png";
$nerd = "sprites/53.png";
$rocketGruntMale = "sprites/57.png";
$hiker = "sprites/26.png";
$swimmerMale = "sprites/Spr_FRLG_Swimmer_M.png";
$gambler = "sprites/24.png";
$engineer = "sprites/22.png";
$gentleman = "sprites/gentleman.png";
$sailor = "sprites/sailor.png";
$fisherman = "sprites/fisherman.png";
$pokemaniac = "sprites/pokemaniac.png";
$twins = "sprites/twins.png";
$biker = "sprites/biker.png";
$youngCouple = "sprites/Spr_FRLG_Young_Couple.png";
$beauty = "sprites/Spr_FRLG_Beauty.png";
$cooltrainerFemale = "sprites/Spr_FRLG_Cooltrainer_F.png";
$chaneller = "sprites/chaneller.png";
$rocker = "sprites/Spr_FRLG_Rocker.png";
$birdKeeper = "sprites/4.png";
$crushkin = "sprites/crushkin.png";
$cueball = "sprites/cueball.png";
$scientist = "sprites/scientist.png";
$juggler = "sprites/juggler.png";
$blackbelt = "sprites/blackbelt.png";
$tamer = "sprites/tamer.png";
$psychicMale = "sprites/psychicMale.png";
$swimmerFemale = "sprites/swimmerFemale.png";
$scubaSquad = "sprites/scubaSquad.png";
$burglar = "sprites/burglar.png";
$cooltrainerMale = "sprites/cooltrainerMale.png";
$crushgirl = "sprites/crushgirl.png";
$aromagirl = "sprites/aromagirl.png";
$scubaFemale = "sprites/scubaFemale.png";
$coolcouple = "sprites/coolcouple.png";
//important trainers
$rivalsprite1 = "sprites/Blue1.webp";
$brocksprite = "sprites/Brock_FRLG.webp";
$mistysprite = "sprites/31.png";
$rivalsprite2 = "sprites/rival2.png";
$ltsurgesprite = "sprites/ltsurge.png";
$erikasprite = "sprites/Spr_FRLG_Erika.png";
$giovannisprite = "sprites/giovannie.png";
$kogasprite = "sprites/koga.png";
$sabrinasprite = "sprites/sabrina.png";
$blainesprite = "sprites/blaine.png";
$loreleisprite = "sprites/lorelei.png";
$brunosprite = "sprites/bruno.png";
$agathasprite = "sprites/agatha.png";
$lancesprite = "sprites/lance.png";
$championsprite = "sprites/champion.png";

$xeasy = '<div class="difficultycontainer">
            <div class="first xeasy"></div>
            <div class="nofill"></div>
            <div class="nofill"></div>
            <div class="nofill"></div>
            <div class="last nofill slightspace"></div>
            </div>';

$easy = '<div class="difficultycontainer">
            <div class="first easy"></div>
            <div class="easy"></div>
            <div class="nofill"></div>
            <div class="nofill"></div>
            <div class="last nofill slightspace"></div>
            </div>';

$normal = '<div class="difficultycontainer">
            <div class="first normal"></div>
            <div class="normal"></div>
            <div class="normal"></div>
            <div class="nofill"></div>
            <div class="last nofill slightspace"></div>
            </div>';

$hard = '<div class="difficultycontainer">
            <div class="first hard"></div>
            <div class="hard"></div>
            <div class="hard"></div>
            <div class="hard"></div>
            <div class="last nofill slightspace"></div>
            </div>';

$challenging = '<div class="difficultycontainer">
                <div class="first challenging"></div>
                <div class="challenging"></div>
                <div class="challenging"></div>
                <div class="challenging"></div>
                <div class="last challenging slightspace"></div>
                </div>';

function trainerCard($trainerData)
{
    foreach ($trainerData as $data) {
        echo '<div class="col containerMain2" style="margin-top:10px;" onclick="toggleElement(\'display' . htmlspecialchars($data["id"]) . '\')">';
        echo "<div class='limiter'>";
        echo "<span class='bigtext slightlysmall titlealign " . ($data["classimp"]) . "'>" . htmlspecialchars($data["name"]) . "</span>";
        echo ($data["difficulty"]);
        echo " <img class='pixelate-filter' src='" . htmlspecialchars($data["image"]) . "' width='64' height='64' alt='" . htmlspecialchars($data["name"]) . "'>";
        echo " <p class='titlealign'>" . ($data["insight"]) . "</p>";
        echo "<div id='display" . htmlspecialchars($data["id"]) . "' class='rules-content' style='overflow-x: auto; height: 0;'>";
        echo '<table class="customTable trainerTable">';
        echo "<tbody>";
        echo '<tr class="altTrainerRow">';
        foreach ($data["party1"] as $pokemon) {
            echo '<td>' . htmlspecialchars($pokemon["pokemon"]->menuName) . '</td>';
        }
        echo '</tr>';
        echo '<tr>';
        foreach ($data["party1"] as $pokemon) {
            echo '<td><img class="nopad pixelate-filter" src="' . htmlspecialchars($pokemon["pokemon"]->menuImage) . '" /></td>';
        }
        echo '</tr>';
        echo '<tr class="altTrainerRow">';
        foreach ($data["party1"] as $pokemon) {
            echo '<td>' . htmlspecialchars($pokemon["level"]) . '</td>';
        }
        echo '</tr>';
        echo '<tr>';
        foreach ($data["party1"] as $pokemon) {
            echo '<td><img class="nopad pixelate-filter" src="' . htmlspecialchars($pokemon["pokemon"]->menuType) . '" /></td>';
        }
        echo '</tr>';

        if (count($data["party2"]) > 0) {
            echo '<tr class="altTrainerRow">';
            foreach ($data["party2"] as $pokemon2) {
                echo '<td>' . htmlspecialchars($pokemon2["pokemon"]->menuName) . '</td>';
            }
            echo '</tr>';
            echo '<tr>';
            foreach ($data["party2"] as $pokemon2) {
                echo '<td><img class="nopad pixelate-filter" src="' . htmlspecialchars($pokemon2["pokemon"]->menuImage) . '" /></td>';
            }
            echo '</tr>';
            echo '<tr class="altTrainerRow">';
            foreach ($data["party2"] as $pokemon2) {
                echo '<td>' . htmlspecialchars($pokemon2["level"]) . '</td>';
            }
            echo '</tr>';
            echo '<tr>';
            foreach ($data["party2"] as $pokemon2) {
                echo '<td><img class="nopad pixelate-filter" src="' . htmlspecialchars($pokemon2["pokemon"]->menuType) . '" /></td>';
            }
        } else {
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
}
//EPISODE1
$oaklabTrainer = [
    [
        "name" => 'TOADMAN (Rival)',
        "id" => 'rival1',
        "image" => $rivalsprite1,
        "insight" => 'This will be the very first battle you undertake in this challenge. If you ask me, you can choose not to consider this battle part of the challenge since, technically, the challenge only starts once you can begin catching Pokémon in the wild. Therefore, losing here does not really matter (if you want to, at least).',
        "classimp" => 'importantname',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $bulbasaurMenuSpec,
                "level" => 'Lv.5',
            ]
        ],
        "party2" => []
    ]
];
//EPISODE2
$route22trainer = [
    [
        "name" => 'TOADMAN (Rival)',
        "id" => 'rival2',
        "image" => $rivalsprite1,
        "insight" => 'This is the second time you will challenge your rival in a battle, and it is completely optional since you can just go straight ahead of Viridian Forest and move on with your adventure. This fight is not that hard if you prepare accordingly and catch some Pokémon that can help with your rival\'s two party members.',
        "classimp" => 'importantname',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $pidgeyMenuSpec,
                "level" => 'Lv.9',
            ],
            [
                "pokemon" => $bulbasaurMenuSpec,
                "level" => 'Lv.9',
            ]
        ],
        "party2" => []
    ]
];
$viridiantrainer = [
    [
        "name" => 'Rick',
        "id" => 'rick',
        "image" => $bugCatcher,
        "insight" => "It's just bugs. If you chose Charmander, this would be a piece of cake, but if you chose the other two, it is still very easy. Just don't forget your antidotes; you're gonna need them.",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $weedleMenu,
                "level" => 'Lv.6',
            ],
            [
                "pokemon" => $caterpieMenu,
                "level" => 'Lv.6',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Doug',
        "id" => 'doug',
        "image" => $bugCatcher,
        "insight" => "You really need to that antidote now.",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $weedleMenu,
                "level" => 'Lv.7',
            ],
            [
                "pokemon" => $kakunaMenu,
                "level" => 'Lv.7',
            ],
            [
                "pokemon" => $weedleMenu,
                "level" => 'Lv.7',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Anthony',
        "id" => 'anthony',
        "image" => $bugCatcher,
        "insight" => "Just Press A.",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $caterpieMenu,
                "level" => 'Lv.7',
            ],
            [
                "pokemon" => $caterpieMenu,
                "level" => 'Lv.8',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Charlie',
        "id" => 'charlie',
        "image" => $bugCatcher,
        "insight" => "Even easier, but with more EXP because of Metapods.",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $metapodMenu,
                "level" => 'Lv.7',
            ],
            [
                "pokemon" => $caterpieMenu,
                "level" => 'Lv.7',
            ],
            [
                "pokemon" => $metapodMenu,
                "level" => 'Lv.7',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Sammy',
        "id" => 'sammy',
        "image" => $bugCatcher,
        "insight" => "After all you've gone through, this guy just has a Weedle",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $weedleMenu,
                "level" => 'Lv.9',
            ]
        ],
        "party2" => []
    ]
];
//EPISODE3
$pewterGym = [
    [
        "name" => 'Liam',
        "id" => 'liam',
        "image" => $camperMale,
        "insight" => "This is the only gym trainer in the Pewter City gym, and it's actually skippable if you want to. It's also extremely easy if you have a water- or grass-type Pokémon.",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $geodudeMenu,
                "level" => 'Lv.10',
            ],
            [
                "pokemon" => $sandshrewMenu,
                "level" => 'Lv.11',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Brock',
        "id" => 'brock',
        "image" => $brocksprite,
        "insight" => "The easiest gym leader you will ever face is if you chose Squirtle or Bulbasaur. Charmander could also stand a chance with its Metal Claw, although you would need to be careful with it.",
        "classimp" => 'importantname',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $geodudeMenuSpec,
                "level" => 'Lv.12',
            ],
            [
                "pokemon" => $onixMenuSpec,
                "level" => 'Lv.14',
            ]
        ],
        "party2" => []
    ]
];
$route3Trainer = [
    [
        "name" => 'Janice',
        "id" => 'janice',
        "image" => $lass,
        "insight" => "It's probably an easy match considering you already fought a gym leader prior to this fight.",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $pidgeyMenu,
                "level" => 'Lv.9',
            ],
            [
                "pokemon" => $pidgeyMenu,
                "level" => 'Lv.9',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Colton',
        "id" => 'colton',
        "image" => $bugCatcher,
        "insight" => "Having a Bug Catcher this late will not really cause you any problems.",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $caterpieMenu,
                "level" => 'Lv.10',
            ],
            [
                "pokemon" => $weedleMenu,
                "level" => 'Lv.10',
            ],
            [
                "pokemon" => $caterpieMenu,
                "level" => 'Lv.10',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Ben',
        "id" => 'ben',
        "image" => $youngster,
        "insight" => "I guess he just really likes his shorts?",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.11',
            ],
            [
                "pokemon" => $ekansMenu,
                "level" => 'Lv.11',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Greg',
        "id" => 'greg',
        "image" => $bugCatcher,
        "insight" => "Another Bug Catcher",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $weedleMenu,
                "level" => 'Lv.9',
            ],
            [
                "pokemon" => $kakunaMenu,
                "level" => 'Lv.9',
            ],
            [
                "pokemon" => $caterpieMenu,
                "level" => 'Lv.9',
            ],
            [
                "pokemon" => $metapodMenu,
                "level" => 'Lv.9',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Sally',
        "id" => 'sally',
        "image" => $lass,
        "insight" => "Another trainer for grinding, I'm pretty sure you guys get the gist of this route. Though, be careful of Nidoran♀ with Poison Point.",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.10',
            ],
            [
                "pokemon" => $nidoranFMenu,
                "level" => 'Lv.10',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'James',
        "id" => 'james',
        "image" => $bugCatcher,
        "insight" => "BUG!",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $caterpieMenu,
                "level" => 'Lv.11',
            ],
            [
                "pokemon" => $metapodMenu,
                "level" => 'Lv.11',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Robin',
        "id" => 'robin',
        "image" => $lass,
        "insight" => "Just a Jigglypuff, nothing too crazy",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $jigglypuffMenu,
                "level" => 'Lv.14',
            ]
        ],
        "party2" => []
    ]
];
//EPISODE4
$route3Trainer2 = [
    [
        "name" => 'Calvin',
        "id" => 'calvin',
        "image" => $youngster,
        "insight" => "I'm basicallly just cleaning up here.",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $spearowMenu,
                "level" => 'Lv.14',
            ]
        ],
        "party2" => []
    ]
];
$mtMoonTrainer = [
    [
        "name" => 'Iris',
        "id" => 'iris',
        "image" => $lass,
        "insight" => "Not the champion from Black 2 and White 2.",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $clefairyMenu,
                "level" => 'Lv.14',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Jovan',
        "id" => 'jovan',
        "image" => $nerd,
        "insight" => "If you aren't prepared, this fight will be much more difficult, considering he has a Magnemite which is very tanky.",
        "classimp" => '',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $magnemiteMenu,
                "level" => 'Lv.11',
            ],
            [
                "pokemon" => $voltorbMenu,
                "level" => 'Lv.11',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Robby',
        "id" => 'robby',
        "image" => $bugCatcher,
        "insight" => "Another Bug-catcher, nothing too special.",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $caterpieMenu,
                "level" => 'Lv.10',
            ],
            [
                "pokemon" => $metapodMenu,
                "level" => 'Lv.10',
            ],
            [
                "pokemon" => $caterpieMenu,
                "level" => 'Lv.10',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntMtMoon1',
        "image" => $rocketGruntMale,
        "insight" => "It's your very first Rocket grunt battle. Honestly, nothing too special.",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $sandshrewMenu,
                "level" => 'Lv.11',
            ],
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.11',
            ],
            [
                "pokemon" => $zubatMenu,
                "level" => 'Lv.11',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Kent',
        "id" => 'kent',
        "image" => $bugCatcher,
        "insight" => "What is up with these Bug-catchers",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $weedleMenu,
                "level" => 'Lv.11',
            ],
            [
                "pokemon" => $kakunaMenu,
                "level" => 'Lv.11',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Miriam',
        "id" => 'miriam',
        "image" => $lass,
        "insight" => "You know what, I'm going to stop adding these side comments for trainers who are just fodders.",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $oddishMenu,
                "level" => 'Lv.11',
            ],
            [
                "pokemon" => $bellsproutMenu,
                "level" => 'Lv.11',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntMtMoon2',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $zubatMenu,
                "level" => 'Lv.11',
            ],
            [
                "pokemon" => $ekansMenu,
                "level" => 'Lv.11',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Josh',
        "id" => 'josh',
        "image" => $youngster,
        "insight" => "I forgot to speed this up in the video.",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.10',
            ],
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.10',
            ],
            [
                "pokemon" => $zubatMenu,
                "level" => 'Lv.10',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Marcos',
        "id" => 'marcos',
        "image" => $hiker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $geodudeMenu,
                "level" => 'Lv.10',
            ],
            [
                "pokemon" => $geodudeMenu,
                "level" => 'Lv.10',
            ],
            [
                "pokemon" => $onixMenu,
                "level" => 'Lv.10',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntMtMoon3',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.13',
            ],
            [
                "pokemon" => $sandshrewMenu,
                "level" => 'Lv.13',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntMtMoon4',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.13',
            ],
            [
                "pokemon" => $zubatMenu,
                "level" => 'Lv.13',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Miguel',
        "id" => 'miguel',
        "image" => $nerd,
        "insight" => "despacito",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $grimerMenu,
                "level" => 'Lv.12',
            ],
            [
                "pokemon" => $voltorbMenu,
                "level" => 'Lv.12',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.12',
            ]
        ],
        "party2" => []
    ]
];
//EPISODE5
$ceruleanTrainer = [
    [
        "name" => 'TOADMAN (Rival)',
        "id" => 'rival3',
        "image" => $rivalsprite1,
        "insight" => "If you're not prepared for this fight, it might cause you some trouble. But would you lose? Nah, you'd win. In all seriousness, the only members that could cause trouble are Pidgeotto and Bulbasaur, especially if you don't have any Pokémon effective against them.",
        "classimp" => 'importantname',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $pidgeottoMenuSpec,
                "level" => 'Lv.17',
            ],
            [
                "pokemon" => $abraMenuSpec,
                "level" => 'Lv.16',
            ],
            [
                "pokemon" => $rattataMenuSpec,
                "level" => 'Lv.15',
            ],
            [
                "pokemon" => $bulbasaurMenuSpec,
                "level" => 'Lv.18',
            ]
        ],
        "party2" => []
    ]
];
$route24Trainer = [
    [
        "name" => 'Cale',
        "id" => 'cale',
        "image" => $bugCatcher,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $caterpieMenu,
                "level" => 'Lv.10',
            ],
            [
                "pokemon" => $weedleMenu,
                "level" => 'Lv.10',
            ],
            [
                "pokemon" => $metapodMenu,
                "level" => 'Lv.10',
            ],
            [
                "pokemon" => $kakunaMenu,
                "level" => 'Lv.10',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Ali',
        "id" => 'ali',
        "image" => $lass,
        "insight" => "Just be extra careful with her Grass-types, but overall she's mostly easy considering your Pokémon.",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $pidgeyMenu,
                "level" => 'Lv.12',
            ],
            [
                "pokemon" => $oddishMenu,
                "level" => 'Lv.12',
            ],
            [
                "pokemon" => $bellsproutMenu,
                "level" => 'Lv.12',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Timmy',
        "id" => 'timmy',
        "image" => $youngster,
        "insight" => "I don't know what to say other than be careful with Ekans.",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $sandshrewMenu,
                "level" => 'Lv.14',
            ],
            [
                "pokemon" => $ekansMenu,
                "level" => 'Lv.14',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Reli',
        "id" => 'reli',
        "image" => $lass,
        "insight" => "It's a breeze, except both Nidorans pack Poison Point, so be careful.",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $nidoranMMenu,
                "level" => 'Lv.16',
            ],
            [
                "pokemon" => $nidoranFMenu,
                "level" => 'Lv.16',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Ethan',
        "id" => 'ethan',
        "image" => $camperMale,
        "insight" => "A flying move should do the trick",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $mankeyMenu,
                "level" => 'Lv.18',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntRoute24',
        "image" => $rocketGruntMale,
        "insight" => "Psychic-type moves are the key to this battle.",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $ekansMenu,
                "level" => 'Lv.15',
            ],
            [
                "pokemon" => $zubatMenu,
                "level" => 'Lv.15',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Shane',
        "id" => 'shane',
        "image" => $camperMale,
        "insight" => "Flying-type moves should do the trick",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.14',
            ],
            [
                "pokemon" => $ekansMenu,
                "level" => 'Lv.14',
            ]
        ],
        "party2" => []
    ]
];
$route25Trainer = [
    [
        "name" => 'Franklin',
        "id" => 'franklin',
        "image" => $hiker,
        "insight" => "Just be careful with Machop, it can probably knock out any Normal-type Pokémon you have.",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.15',
            ],
            [
                "pokemon" => $geodudeMenu,
                "level" => 'Lv.15',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Joey',
        "id" => 'joey',
        "image" => $youngster,
        "insight" => "Not the iconic Youngster Joey from Pokemon Crystal and also not threatening at all.",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.15',
            ],
            [
                "pokemon" => $spearowMenu,
                "level" => 'Lv.15',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Wayne',
        "id" => 'wayne',
        "image" => $hiker,
        "insight" => "Water-type and Grass-type moves should do the trick",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $onixMenu,
                "level" => 'Lv.17',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Dan',
        "id" => 'dan',
        "image" => $youngster,
        "insight" => "He has a Slowpoke, which is tanky, but it's the only Pokémon he has, so it shouldn't be much trouble. ",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $slowpokeMenu,
                "level" => 'Lv.17',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Kelsey',
        "id" => 'kelsey',
        "image" => $camperFemale,
        "insight" => "Poison Point Nidorans, what more can I say.",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $nidoranMMenu,
                "level" => 'Lv.15',
            ],
            [
                "pokemon" => $nidoranFMenu,
                "level" => 'Lv.15',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Nob',
        "id" => 'nob',
        "image" => $hiker,
        "insight" => "Free EXP. Also, what a name.",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $geodudeMenu,
                "level" => 'Lv.13',
            ],
            [
                "pokemon" => $geodudeMenu,
                "level" => 'Lv.13',
            ],
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.13',
            ],
            [
                "pokemon" => $geodudeMenu,
                "level" => 'Lv.13',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Flint',
        "id" => 'flint',
        "image" => $camperMale,
        "insight" => "What's up with these team compositions? By now, I'm pretty sure we've encountered this exact combination many times already.",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.14',
            ],
            [
                "pokemon" => $ekansMenu,
                "level" => 'Lv.14',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Chad',
        "id" => 'chad',
        "image" => $youngster,
        "insight" => "Not really a chad in my opinion",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $ekansMenu,
                "level" => 'Lv.14',
            ],
            [
                "pokemon" => $sandshrewMenu,
                "level" => 'Lv.14',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Haley',
        "id" => 'haley',
        "image" => $lass,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $oddishMenu,
                "level" => 'Lv.13',
            ],
            [
                "pokemon" => $pidgeyMenu,
                "level" => 'Lv.13',
            ],
            [
                "pokemon" => $oddishMenu,
                "level" => 'Lv.13',
            ]
        ],
        "party2" => []
    ]
];
//EPISODE6
$ceruleanGymTrainer = [
    [
        "name" => 'Luis',
        "id" => 'luis',
        "image" => $swimmerMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $horseaMenu,
                "level" => 'Lv.16',
            ],
            [
                "pokemon" => $shellderMenu,
                "level" => 'Lv.16',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Diana',
        "id" => 'diana',
        "image" => $camperFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $goldeenMenu,
                "level" => 'Lv.19',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Misty',
        "id" => 'misty',
        "image" => $mistysprite,
        "insight" => "This fight is likely the first one I'd consider somewhat challenging, given the options available during the playthrough.",
        "classimp" => 'importantname',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $staryuMenuSpec,
                "level" => 'Lv.18',
            ],
            [
                "pokemon" => $starmieMenuSpec,
                "level" => 'Lv.21',
            ]
        ],
        "party2" => []
    ]
];
//EPISODE7
$ceruleanTrainer2 = [
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketCeruleanCity',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.17',
            ],
            [
                "pokemon" => $drowzeeMenu,
                "level" => 'Lv.17',
            ]
        ],
        "party2" => []
    ]
];
$route6Trainer = [
    [
        "name" => 'Keigo',
        "id" => 'keigo',
        "image" => $bugCatcher,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $weedleMenu,
                "level" => 'Lv.16',
            ],
            [
                "pokemon" => $caterpieMenu,
                "level" => 'Lv.16',
            ],
            [
                "pokemon" => $weedleMenu,
                "level" => 'Lv.16',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Ricky',
        "id" => 'ricky',
        "image" => $camperMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $squirtleMenu,
                "level" => 'Lv.20',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Nancy',
        "id" => 'nancy',
        "image" => $camperFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.16',
            ],
            [
                "pokemon" => $pikachuMenu,
                "level" => 'Lv.16',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Elijah',
        "id" => 'elijah',
        "image" => $bugCatcher,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $butterfreeMenu,
                "level" => 'Lv.20',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Isabelle',
        "id" => 'isabelle',
        "image" => $camperFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $pidgeyMenu,
                "level" => 'Lv.16',
            ],
            [
                "pokemon" => $pidgeyMenu,
                "level" => 'Lv.16',
            ],
            [
                "pokemon" => $pidgeyMenu,
                "level" => 'Lv.16',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Jeff',
        "id" => 'jeff',
        "image" => $camperMale,
        "insight" => "My name a Jeff",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $spearowMenu,
                "level" => 'Lv.16',
            ],
            [
                "pokemon" => $raticateMenu,
                "level" => 'Lv.16',
            ]
        ],
        "party2" => []
    ]
];
$route11Trainer = [
    [
        "name" => 'Eddie',
        "id" => 'eddie',
        "image" => $youngster,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $ekansMenu,
                "level" => 'Lv.21',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Dillon',
        "id" => 'dillon',
        "image" => $youngster,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $sandshrewMenu,
                "level" => 'Lv.19',
            ],
            [
                "pokemon" => $zubatMenu,
                "level" => 'Lv.19',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Jasper',
        "id" => 'jasper',
        "image" => $gambler,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $bellsproutMenu,
                "level" => 'Lv.18',
            ],
            [
                "pokemon" => $oddishMenu,
                "level" => 'Lv.18',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Braxton',
        "id" => 'braxton',
        "image" => $engineer,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $magnemiteMenu,
                "level" => 'Lv.21',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Hugo',
        "id" => 'hugo',
        "image" => $gambler,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $poliwagMenu,
                "level" => 'Lv.18',
            ],
            [
                "pokemon" => $horseaMenu,
                "level" => 'Lv.18',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Bernie',
        "id" => 'bernie',
        "image" => $engineer,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $magnemiteMenu,
                "level" => 'Lv.18',
            ],
            [
                "pokemon" => $magnemiteMenu,
                "level" => 'Lv.18',
            ],
            [
                "pokemon" => $magnetonMenu,
                "level" => 'Lv.18',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Dave',
        "id" => 'dave',
        "image" => $youngster,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $nidoranMMenu,
                "level" => 'Lv.18',
            ],
            [
                "pokemon" => $nidorinoMenu,
                "level" => 'Lv.18',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Dirk',
        "id" => 'dirk',
        "image" => $engineer,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $voltorbMenu,
                "level" => 'Lv.18',
            ],
            [
                "pokemon" => $magnemiteMenu,
                "level" => 'Lv.18',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Yasu',
        "id" => 'yasu',
        "image" => $youngster,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.17',
            ],
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.17',
            ],
            [
                "pokemon" => $raticateMenu,
                "level" => 'Lv.17',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Darian',
        "id" => 'darian',
        "image" => $engineer,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $growlitheMenu,
                "level" => 'Lv.18',
            ],
            [
                "pokemon" => $vulpixMenu,
                "level" => 'Lv.18',
            ]
        ],
        "party2" => []
    ]
];
//EPISODE8
$ssAnneTrainer = [
    [
        "name" => 'Thomas',
        "id" => 'thomas',
        "image" => $gentleman,
        "insight" => "It's not that difficult, especially since I have Gilamonstr. Though for some reason, I never used it in this fight.",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $growlitheMenu,
                "level" => 'Lv.18',
            ],
            [
                "pokemon" => $growlitheMenu,
                "level" => 'Lv.19',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Arthur',
        "id" => 'arthur',
        "image" => $gentleman,
        "insight" => "Just be careful with the Nidorans that have both Poison Point and Poison Sting.",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $nidoranMMenu,
                "level" => 'Lv.19',
            ],
            [
                "pokemon" => $nidoranFMenu,
                "level" => 'Lv.19',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Ann',
        "id" => 'ann',
        "image" => $lass,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $pidgeyMenu,
                "level" => 'Lv.18',
            ],
            [
                "pokemon" => $nidoranFMenu,
                "level" => 'Lv.18',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Tyler',
        "id" => 'tyler',
        "image" => $youngster,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $nidoranMMenu,
                "level" => 'Lv.21',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Trevor',
        "id" => 'trevor',
        "image" => $sailor,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.17',
            ],
            [
                "pokemon" => $tentacoolMenu,
                "level" => 'Lv.17',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Edmond',
        "id" => 'edmond',
        "image" => $sailor,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.18',
            ],
            [
                "pokemon" => $shellderMenu,
                "level" => 'Lv.18',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Dale',
        "id" => 'dale',
        "image" => $fisherman,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $goldeenMenu,
                "level" => 'Lv.17',
            ],
            [
                "pokemon" => $tentacoolMenu,
                "level" => 'Lv.17',
            ],
            [
                "pokemon" => $goldeenMenu,
                "level" => 'Lv.17',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Brooks',
        "id" => 'brooks',
        "image" => $gentleman,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $pikachuMenu,
                "level" => 'Lv.23',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Dawn',
        "id" => 'dawn',
        "image" => $lass,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.18',
            ],
            [
                "pokemon" => $pikachuMenu,
                "level" => 'Lv.18',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Lamar',
        "id" => 'lamar',
        "image" => $gentleman,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $growlitheMenu,
                "level" => 'Lv.17',
            ],
            [
                "pokemon" => $ponytaMenu,
                "level" => 'Lv.17',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'TOADMAN (Rival)',
        "id" => 'rival4',
        "image" => $rivalsprite2,
        "insight" => "This fight can get tricky if you don't strategize well, but overall it's not too bad. ",
        "classimp" => 'importantname',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $pidgeottoMenuSpec,
                "level" => 'Lv.19',
            ],
            [
                "pokemon" => $raticateMenuSpec,
                "level" => 'Lv.16',
            ],
            [
                "pokemon" => $kadabraMenuSpec,
                "level" => 'Lv.18',
            ],
            [
                "pokemon" => $ivysaurMenuSpec,
                "level" => 'Lv.20',
            ]
        ],
        "party2" => []
    ]
];
//EPISODE9
$vermillionGymTrainer = [
    [
        "name" => 'Dwayne',
        "id" => 'dwayne',
        "image" => $sailor,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $pikachuMenu,
                "level" => 'Lv.21',
            ],
            [
                "pokemon" => $pikachuMenu,
                "level" => 'Lv.21',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Baily',
        "id" => 'baily',
        "image" => $engineer,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $voltorbMenu,
                "level" => 'Lv.21',
            ],
            [
                "pokemon" => $magnemiteMenu,
                "level" => 'Lv.21',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Tucker',
        "id" => 'tucker',
        "image" => $gentleman,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $pikachuMenu,
                "level" => 'Lv.23',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Lt. Surge',
        "id" => 'ltsurge',
        "image" => $ltsurgesprite,
        "insight" => "These Pokémon are quite speedy, so be on your guard.  Expect to be paralysed in this fight.  Not using items in battle definitely added some challenge.",
        "classimp" => 'importantname',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $voltorbMenuSpec,
                "level" => 'Lv.21',
            ],
            [
                "pokemon" => $pikachuMenuSpec,
                "level" => 'Lv.18',
            ],
            [
                "pokemon" => $raichuMenuSpec,
                "level" => 'Lv.24',
            ]
        ],
        "party2" => []
    ]
];
//EPISODE10
$route9Trainer = [
    [
        "name" => 'Alicia',
        "id" => 'alicia',
        "image" => $camperFemale,
        "insight" => "An easy fight considering I have a lot of Pokémon effective against Grass and Poison-types.",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $oddishMenu,
                "level" => 'Lv.18',
            ],
            [
                "pokemon" => $bellsproutMenu,
                "level" => 'Lv.18',
            ],
            [
                "pokemon" => $oddishMenu,
                "level" => 'Lv.18',
            ],
            [
                "pokemon" => $bellsproutMenu,
                "level" => 'Lv.18',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Jeremy',
        "id" => 'jeremy',
        "image" => $hiker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.20',
            ],
            [
                "pokemon" => $onixMenu,
                "level" => 'Lv.20',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Chris',
        "id" => 'chris',
        "image" => $camperMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $growlitheMenu,
                "level" => 'Lv.21',
            ],
            [
                "pokemon" => $charmanderMenu,
                "level" => 'Lv.21',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Brent',
        "id" => 'brent',
        "image" => $bugCatcher,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $beedrillMenu,
                "level" => 'Lv.19',
            ],
            [
                "pokemon" => $beedrillMenu,
                "level" => 'Lv.19',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Conner',
        "id" => 'conner',
        "image" => $bugCatcher,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $caterpieMenu,
                "level" => 'Lv.20',
            ],
            [
                "pokemon" => $weedleMenu,
                "level" => 'Lv.20',
            ],
            [
                "pokemon" => $venonatMenu,
                "level" => 'Lv.20',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Drew',
        "id" => 'drew',
        "image" => $camperMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.19',
            ],
            [
                "pokemon" => $sandshrewMenu,
                "level" => 'Lv.19',
            ],
            [
                "pokemon" => $ekansMenu,
                "level" => 'Lv.19',
            ],
            [
                "pokemon" => $sandshrewMenu,
                "level" => 'Lv.19',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Brice',
        "id" => 'brice',
        "image" => $hiker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $geodudeMenu,
                "level" => 'Lv.20',
            ],
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.20',
            ],
            [
                "pokemon" => $geodudeMenu,
                "level" => 'Lv.20',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Caitlin',
        "id" => 'caitlin',
        "image" => $camperFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $meowthMenu,
                "level" => 'Lv.23',
            ]
        ],
        "party2" => []
    ]
];
//EPISODE11
$route10Trainer1 = [
    [
        "name" => 'Heidi',
        "id" => 'heidi',
        "image" => $camperFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $pikachuMenu,
                "level" => 'Lv.20',
            ],
            [
                "pokemon" => $clefairyMenu,
                "level" => 'Lv.20',
            ]
        ],
        "party2" => []
    ]
];
$rocktunnelTrainer = [
    [
        "name" => 'Ashton',
        "id" => 'ashton',
        "image" => $pokemaniac,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $cuboneMenu,
                "level" => 'Lv.23',
            ],
            [
                "pokemon" => $slowpokeMenu,
                "level" => 'Lv.23',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Winston',
        "id" => 'winston',
        "image" => $pokemaniac,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $slowpokeMenu,
                "level" => 'Lv.25',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Marth',
        "id" => 'marth',
        "image" => $camperFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $oddishMenu,
                "level" => 'Lv.22',
            ],
            [
                "pokemon" => $bulbasaurMenu,
                "level" => 'Lv.22',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Eric',
        "id" => 'eric',
        "image" => $hiker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.20',
            ],
            [
                "pokemon" => $onixMenu,
                "level" => 'Lv.20',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Oliver',
        "id" => 'oliver',
        "image" => $hiker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $onixMenu,
                "level" => 'Lv.20',
            ],
            [
                "pokemon" => $onixMenu,
                "level" => 'Lv.20',
            ],
            [
                "pokemon" => $geodudeMenu,
                "level" => 'Lv.20',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Lucas',
        "id" => 'lucas',
        "image" => $hiker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $geodudeMenu,
                "level" => 'Lv.21',
            ],
            [
                "pokemon" => $gravelerMenu,
                "level" => 'Lv.21',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Sofia',
        "id" => 'sofia',
        "image" => $camperFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $jigglypuffMenu,
                "level" => 'Lv.21',
            ],
            [
                "pokemon" => $pidgeyMenu,
                "level" => 'Lv.21',
            ],
            [
                "pokemon" => $meowthMenu,
                "level" => 'Lv.21',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Dudely',
        "id" => 'dudely',
        "image" => $hiker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $geodudeMenu,
                "level" => 'Lv.21',
            ],
            [
                "pokemon" => $geodudeMenu,
                "level" => 'Lv.21',
            ],
            [
                "pokemon" => $gravelerMenu,
                "level" => 'Lv.21',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Cooper',
        "id" => 'cooper',
        "image" => $pokemaniac,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $slowpokeMenu,
                "level" => 'Lv.20',
            ],
            [
                "pokemon" => $slowpokeMenu,
                "level" => 'Lv.20',
            ],
            [
                "pokemon" => $slowpokeMenu,
                "level" => 'Lv.20',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Leah',
        "id" => 'leah',
        "image" => $camperFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $bellsproutMenu,
                "level" => 'Lv.22',
            ],
            [
                "pokemon" => $clefairyMenu,
                "level" => 'Lv.22',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Dana',
        "id" => 'dana',
        "image" => $camperFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $meowthMenu,
                "level" => 'Lv.20',
            ],
            [
                "pokemon" => $oddishMenu,
                "level" => 'Lv.20',
            ],
            [
                "pokemon" => $pidgeyMenu,
                "level" => 'Lv.20',
            ]
        ],
        "party2" => []
    ]
];
$route10Trainer2 = [
    [
        "name" => 'Carol',
        "id" => 'carol',
        "image" => $camperFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $pidgeyMenu,
                "level" => 'Lv.21',
            ],
            [
                "pokemon" => $pidgeottoMenu,
                "level" => 'Lv.21',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Clark',
        "id" => 'clark',
        "image" => $hiker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $geodudeMenu,
                "level" => 'Lv.21',
            ],
            [
                "pokemon" => $onixMenu,
                "level" => 'Lv.21',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Herman',
        "id" => 'herman',
        "image" => $pokemaniac,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $cuboneMenu,
                "level" => 'Lv.21',
            ],
            [
                "pokemon" => $slowpokeMenu,
                "level" => 'Lv.21',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Trent',
        "id" => 'trent',
        "image" => $hiker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $onixMenu,
                "level" => 'Lv.19',
            ],
            [
                "pokemon" => $gravelerMenu,
                "level" => 'Lv.19',
            ]
        ],
        "party2" => []
    ]
];
//EPISODE12
$pokemonTowerTrainer1 = [
    [
        "name" => 'TOADMAN (Rival)',
        "id" => 'rival5',
        "image" => $rivalsprite2,
        "insight" => "It's not exactly easy, but not super difficult either. However, the Gyarados was a real challenge since I lack Pokémon effective against it.",
        "classimp" => 'importantname',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $pidgeottoMenuSpec,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $gyaradosMenuSpec,
                "level" => 'Lv.23',
            ],
            [
                "pokemon" => $growlitheMenuSpec,
                "level" => 'Lv.22',
            ]
        ],
        "party2" => [
            [
                "pokemon" => $kadabraMenuSpec,
                "level" => 'Lv.20',
            ],
            [
                "pokemon" => $ivysaurMenuSpec,
                "level" => 'Lv.25',
            ]
        ]
    ]
];
$route8Trainer = [
    [
        "name" => 'Julia',
        "id" => 'julia',
        "image" => $lass,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $clefairyMenu,
                "level" => 'Lv.22',
            ],
            [
                "pokemon" => $clefairyMenu,
                "level" => 'Lv.22',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rich',
        "id" => 'rich',
        "image" => $gambler,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $growlitheMenu,
                "level" => 'Lv.22',
            ],
            [
                "pokemon" => $vulpixMenu,
                "level" => 'Lv.22',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Glenn',
        "id" => 'glenn',
        "image" => $nerd,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $grimerMenu,
                "level" => 'Lv.22',
            ],
            [
                "pokemon" => $mukMenu,
                "level" => 'Lv.22',
            ],
            [
                "pokemon" => $grimerMenu,
                "level" => 'Lv.22',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Megan',
        "id" => 'megan',
        "image" => $lass,
        "insight" => "Not really difficult, just way too many Pokémon.",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $pidgeyMenu,
                "level" => 'Lv.19',
            ],
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.19',
            ],
            [
                "pokemon" => $nidoranFMenu,
                "level" => 'Lv.19',
            ],
            [
                "pokemon" => $meowthMenu,
                "level" => 'Lv.19',
            ],
            [
                "pokemon" => $pikachuMenu,
                "level" => 'Lv.19',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Andrea',
        "id" => 'andrea',
        "image" => $lass,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $meowthMenu,
                "level" => 'Lv.24',
            ],
            [
                "pokemon" => $meowthMenu,
                "level" => 'Lv.24',
            ],
            [
                "pokemon" => $meowthMenu,
                "level" => 'Lv.24',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Leslie',
        "id" => 'leslie',
        "image" => $nerd,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.26',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Eli & Anne',
        "id" => 'eliandanne',
        "image" => $twins,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $clefairyMenu,
                "level" => 'Lv.22',
            ],
            [
                "pokemon" => $jigglypuffMenu,
                "level" => 'Lv.22',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Paige',
        "id" => 'paige',
        "image" => $lass,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $nidoranFMenu,
                "level" => 'Lv.23',
            ],
            [
                "pokemon" => $nidorinaMenu,
                "level" => 'Lv.23',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Jaren',
        "id" => 'jaren',
        "image" => $biker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $grimerMenu,
                "level" => 'Lv.24',
            ],
            [
                "pokemon" => $grimerMenu,
                "level" => 'Lv.24',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Ricardo',
        "id" => 'ricardo',
        "image" => $biker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.22',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.22',
            ],
            [
                "pokemon" => $grimerMenu,
                "level" => 'Lv.23',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Stan',
        "id" => 'stan',
        "image" => $gambler,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $poliwagMenu,
                "level" => 'Lv.22',
            ],
            [
                "pokemon" => $poliwagMenu,
                "level" => 'Lv.22',
            ],
            [
                "pokemon" => $poliwhirlMenu,
                "level" => 'Lv.22',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Aidan',
        "id" => 'aidan',
        "image" => $nerd,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $voltorbMenu,
                "level" => 'Lv.20',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.20',
            ],
            [
                "pokemon" => $voltorbMenu,
                "level" => 'Lv.20',
            ],
            [
                "pokemon" => $magnemiteMenu,
                "level" => 'Lv.20',
            ]
        ],
        "party2" => []
    ]
    //glenn-aidan
];
//EPISODE13
$route16Trainer1 = [
    [
        "name" => 'Lea & Jed',
        "id" => 'leaandjed',
        "image" => $youngCouple,
        "insight" => "My team was somewhat underleveled and this double battle gave me a challenge even though their Pokémon type is only fire type.",
        "classimp" => '',
        "difficulty" => $hard,
        "party1" => [
            [
                "pokemon" => $ninetalesMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $rapidashMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ]
];
$celadongymTrainer = [
    [
        "name" => 'Kay',
        "id" => 'kay',
        "image" => $lass,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $bellsproutMenu,
                "level" => 'Lv.23',
            ],
            [
                "pokemon" => $weepinbellMenu,
                "level" => 'Lv.23',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Bridget',
        "id" => 'bridget',
        "image" => $beauty,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $oddishMenu,
                "level" => 'Lv.21',
            ],
            [
                "pokemon" => $oddishMenu,
                "level" => 'Lv.21',
            ],
            [
                "pokemon" => $bellsproutMenu,
                "level" => 'Lv.21',
            ],
            [
                "pokemon" => $bellsproutMenu,
                "level" => 'Lv.21',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Tina',
        "id" => 'tina',
        "image" => $camperFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $bulbasaurMenu,
                "level" => 'Lv.24',
            ],
            [
                "pokemon" => $ivysaurMenu,
                "level" => 'Lv.24',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Tamia',
        "id" => 'tamia',
        "image" => $beauty,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $bellsproutMenu,
                "level" => 'Lv.24',
            ],
            [
                "pokemon" => $bellsproutMenu,
                "level" => 'Lv.24',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Mary',
        "id" => 'mary',
        "image" => $cooltrainerFemale,
        "insight" => "Way too many Pokémon for regular trainer in a gym.",
        "classimp" => '',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $bellsproutMenu,
                "level" => 'Lv.22',
            ],
            [
                "pokemon" => $oddishMenu,
                "level" => 'Lv.22',
            ],
            [
                "pokemon" => $weepinbellMenu,
                "level" => 'Lv.22',
            ],
            [
                "pokemon" => $gloomMenu,
                "level" => 'Lv.22',
            ],
            [
                "pokemon" => $ivysaurMenu,
                "level" => 'Lv.22',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Lisa',
        "id" => 'lisa',
        "image" => $lass,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $oddishMenu,
                "level" => 'Lv.23',
            ],
            [
                "pokemon" => $gloomMenu,
                "level" => 'Lv.23',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Lori',
        "id" => 'lori',
        "image" => $beauty,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $exeggcuteMenu,
                "level" => 'Lv.24',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Erika',
        "id" => 'erika',
        "image" => $erikasprite,
        "insight" => "",
        "classimp" => 'importantname',
        "difficulty" => $hard,
        "party1" => [
            [
                "pokemon" => $victreebelMenuSpec,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $tangelaMenuSpec,
                "level" => 'Lv.24',
            ],
            [
                "pokemon" => $vileplumeMenuSpec,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ]
];
//EPISODE14
$rocketHideoutTrainer = [
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntHideout1',
        "image" => $rocketGruntMale,
        "insight" => "Trust me, you will be fighting grunts that have very similar team variation to this grunt.",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $raticateMenu,
                "level" => 'Lv.20',
            ],
            [
                "pokemon" => $zubatMenu,
                "level" => 'Lv.20',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntHideout2',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $raticateMenu,
                "level" => 'Lv.21',
            ],
            [
                "pokemon" => $raticateMenu,
                "level" => 'Lv.21',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntHideout3',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $drowzeeMenu,
                "level" => 'Lv.21',
            ],
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.21',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntHideout7',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $zubatMenu,
                "level" => 'Lv.17',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.17',
            ],
            [
                "pokemon" => $grimerMenu,
                "level" => 'Lv.17',
            ],
            [
                "pokemon" => $zubatMenu,
                "level" => 'Lv.17',
            ],
            [
                "pokemon" => $raticateMenu,
                "level" => 'Lv.17',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntHideout5',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $grimerMenu,
                "level" => 'Lv.20',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.20',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.20',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntHideout4',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.19',
            ],
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.19',
            ],
            [
                "pokemon" => $raticateMenu,
                "level" => 'Lv.19',
            ],
            [
                "pokemon" => $raticateMenu,
                "level" => 'Lv.19',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntHideout8',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.21',
            ],
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.21',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntHideout9',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.20',
            ],
            [
                "pokemon" => $raticateMenu,
                "level" => 'Lv.20',
            ],
            [
                "pokemon" => $drowzeeMenu,
                "level" => 'Lv.20',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntHideout10',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.21',
            ],
            [
                "pokemon" => $zubatMenu,
                "level" => 'Lv.21',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntHideout11',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $sandshrewMenu,
                "level" => 'Lv.23',
            ],
            [
                "pokemon" => $ekansMenu,
                "level" => 'Lv.23',
            ],
            [
                "pokemon" => $sandslashMenu,
                "level" => 'Lv.23',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntHideout12',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $ekansMenu,
                "level" => 'Lv.23',
            ],
            [
                "pokemon" => $sandshrewMenu,
                "level" => 'Lv.23',
            ],
            [
                "pokemon" => $arbokMenu,
                "level" => 'Lv.23',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Giovanni',
        "id" => 'giovanni1',
        "image" => $giovannisprite,
        "insight" => "This will be your first time fighting him, and honestly, it's a bit disappointing.",
        "classimp" => 'importantname',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $onixMenuSpec,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $rhyhornMenuSpec,
                "level" => 'Lv.24',
            ],
            [
                "pokemon" => $kangaskhanMenuSpec,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ]

];
//EPISODE15
$pokemonTowerTrainer2 = [
    [
        "name" => 'Patricia',
        "id" => 'patricia',
        "image" => $chaneller,
        "insight" => "This will not be the last time you fight a team similar to this.",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $gastlyMenu,
                "level" => 'Lv.22',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Carly',
        "id" => 'carly',
        "image" => $chaneller,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $gastlyMenu,
                "level" => 'Lv.24',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Hope',
        "id" => 'hope',
        "image" => $chaneller,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $gastlyMenu,
                "level" => 'Lv.23',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Laurel',
        "id" => 'laurel',
        "image" => $chaneller,
        "insight" => "Finally! Some variation... kinda",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $gastlyMenu,
                "level" => 'Lv.23',
            ],
            [
                "pokemon" => $gastlyMenu,
                "level" => 'Lv.23',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Jody',
        "id" => 'jody',
        "image" => $chaneller,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $gastlyMenu,
                "level" => 'Lv.22',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Paula',
        "id" => 'paula',
        "image" => $chaneller,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $gastlyMenu,
                "level" => 'Lv.24',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Ruth',
        "id" => 'ruth',
        "image" => $chaneller,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $gastlyMenu,
                "level" => 'Lv.22',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Karina',
        "id" => 'karina',
        "image" => $chaneller,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $gastlyMenu,
                "level" => 'Lv.24',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Janae',
        "id" => 'janae',
        "image" => $chaneller,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $gastlyMenu,
                "level" => 'Lv.22',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Tammy',
        "id" => 'tammy',
        "image" => $chaneller,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $haunterMenu,
                "level" => 'Lv.23',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Angelica',
        "id" => 'angelica',
        "image" => $chaneller,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $gastlyMenu,
                "level" => 'Lv.22',
            ],
            [
                "pokemon" => $gastlyMenu,
                "level" => 'Lv.22',
            ],
            [
                "pokemon" => $gastlyMenu,
                "level" => 'Lv.22',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Jennifer',
        "id" => 'jennifer',
        "image" => $chaneller,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $gastlyMenu,
                "level" => 'Lv.24',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Emilia',
        "id" => 'emilia',
        "image" => $chaneller,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $gastlyMenu,
                "level" => 'Lv.24',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntTower1',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $zubatMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $zubatMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $golbatMenu,
                "level" => 'Lv.25',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntTower2',
        "image" => $rocketGruntMale,
        "insight" => "Just be very careful with the selfdistructing Koffing. Trust me, I learned it the hard way.",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $drowzeeMenu,
                "level" => 'Lv.26',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntTower3',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $zubatMenu,
                "level" => 'Lv.23',
            ],
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.23',
            ],
            [
                "pokemon" => $raticateMenu,
                "level" => 'Lv.23',
            ],
            [
                "pokemon" => $zubatMenu,
                "level" => 'Lv.23',
            ]
        ],
        "party2" => []
    ]

];
//EPISODE16
$route12Trainer = [
    [
        "name" => 'Ned',
        "id" => 'ned',
        "image" => $fisherman,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $goldeenMenu,
                "level" => 'Lv.22',
            ],
            [
                "pokemon" => $poliwagMenu,
                "level" => 'Lv.22',
            ],
            [
                "pokemon" => $goldeenMenu,
                "level" => 'Lv.22',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Chip',
        "id" => 'chip',
        "image" => $fisherman,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $tentacoolMenu,
                "level" => 'Lv.24',
            ],
            [
                "pokemon" => $goldeenMenu,
                "level" => 'Lv.24',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Hank',
        "id" => 'hank',
        "image" => $fisherman,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $goldeenMenu,
                "level" => 'Lv.27',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Elliot',
        "id" => 'elliot',
        "image" => $fisherman,
        "insight" => "Finally! Some variation... kinda",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $poliwagMenu,
                "level" => 'Lv.21',
            ],
            [
                "pokemon" => $shellderMenu,
                "level" => 'Lv.21',
            ],
            [
                "pokemon" => $goldeenMenu,
                "level" => 'Lv.21',
            ],
            [
                "pokemon" => $horseaMenu,
                "level" => 'Lv.21',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Gia & Jes',
        "id" => 'giaandjes',
        "image" => $youngCouple,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $nidoranFMenu,
                "level" => 'Lv.24',
            ],
            [
                "pokemon" => $nidoranMMenu,
                "level" => 'Lv.24',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Luca',
        "id" => 'luca',
        "image" => $rocker,
        "insight" => "Be careful with static.",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $voltorbMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $electrodeMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Justin',
        "id" => 'justin',
        "image" => $camperMale,
        "insight" => "Be careful with Poison Point, Again...",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $nidoranMMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $nidorinoMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Andrew',
        "id" => 'andrew',
        "image" => $fisherman,
        "insight" => "Just Magikarp",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $magikarpMenu,
                "level" => 'Lv.24',
            ],
            [
                "pokemon" => $magikarpMenu,
                "level" => 'Lv.24',
            ]
        ],
        "party2" => []
    ]
];
$route13Trainer = [
    [
        "name" => 'Alma',
        "id" => 'alma',
        "image" => $camperFemale,
        "insight" => "Identical to Fisherman Ned's team for some reason.",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $goldeenMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $poliwagMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $goldeenMenu,
                "level" => 'Lv.28',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Sebastian',
        "id" => 'sebastian',
        "image" => $birdKeeper,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $pidgeyMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $pidgeottoMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Susie',
        "id" => 'susie',
        "image" => $camperFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $pidgeyMenu,
                "level" => 'Lv.24',
            ],
            [
                "pokemon" => $meowthMenu,
                "level" => 'Lv.24',
            ],
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.24',
            ],
            [
                "pokemon" => $pikachuMenu,
                "level" => 'Lv.24',
            ],
            [
                "pokemon" => $meowthMenu,
                "level" => 'Lv.24',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Sheila',
        "id" => 'sheila',
        "image" => $beauty,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $clefairyMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $meowthMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Lola',
        "id" => 'lola',
        "image" => $beauty,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.27',
            ],
            [
                "pokemon" => $pikachuMenu,
                "level" => 'Lv.27',
            ],
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.27',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Valerie',
        "id" => 'valerie',
        "image" => $camperFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $poliwagMenu,
                "level" => 'Lv.30',
            ],
            [
                "pokemon" => $poliwagMenu,
                "level" => 'Lv.30',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Perry',
        "id" => 'perry',
        "image" => $birdKeeper,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $spearowMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $pidgeyMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $pidgeyMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $spearowMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $spearowMenu,
                "level" => 'Lv.25',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Gwen',
        "id" => 'gwen',
        "image" => $camperFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $pidgeyMenu,
                "level" => 'Lv.27',
            ],
            [
                "pokemon" => $meowthMenu,
                "level" => 'Lv.27',
            ],
            [
                "pokemon" => $pidgeyMenu,
                "level" => 'Lv.27',
            ],
            [
                "pokemon" => $pidgeottoMenu,
                "level" => 'Lv.27',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Robert',
        "id" => 'robert',
        "image" => $birdKeeper,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $pidgeyMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $pidgeottoMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $spearowMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $fearowMenu,
                "level" => 'Lv.26',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Jared',
        "id" => 'jared',
        "image" => $biker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.28',
            ]
        ],
        "party2" => []
    ]
];
$route14Trainer = [
    [
        "name" => 'Carter',
        "id" => 'carter',
        "image" => $birdKeeper,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $pidgeyMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $doduoMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $pidgeottoMenu,
                "level" => 'Lv.28',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Mitch',
        "id" => 'mitch',
        "image" => $birdKeeper,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $pidgeyMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $spearowMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $pidgeyMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $fearowMenu,
                "level" => 'Lv.26',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Marlon',
        "id" => 'marlon',
        "image" => $birdKeeper,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $spearowMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $doduoMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $fearowMenu,
                "level" => 'Lv.28',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Beck',
        "id" => 'beck',
        "image" => $birdKeeper,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $pidgeottoMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $fearowMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Donald',
        "id" => 'donald',
        "image" => $birdKeeper,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $farfetchdMenu,
                "level" => 'Lv.33',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Benny',
        "id" => 'benny',
        "image" => $birdKeeper,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $spearowMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $fearowMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Kiri & Jan',
        "id" => 'kiriandkan',
        "image" => $twins,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $squirtleMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $charmanderMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Gerald',
        "id" => 'gerald',
        "image" => $biker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $mukMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Lukas',
        "id" => 'lukas',
        "image" => $biker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $grimerMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.26',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Malik',
        "id" => 'malik',
        "image" => $biker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Isaac',
        "id" => 'isaac',
        "image" => $biker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $grimerMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $grimerMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.28',
            ]
        ],
        "party2" => []
    ]
];
$route15Trainer = [
    [
        "name" => 'Becky',
        "id" => 'becky',
        "image" => $camperFemale,
        "insight" => "Be careful with static.",
        "classimp" => '',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $pikachuMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $raichuMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Ron & Mya',
        "id" => 'ronandmya',
        "image" => $crushkin,
        "insight" => "If you're not prepared, you're in for a rough time.",
        "classimp" => '',
        "difficulty" => $hard,
        "party1" => [
            [
                "pokemon" => $hitmonchanMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $hitmonleeMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Celia',
        "id" => 'celia',
        "image" => $camperFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $clefairyMenu,
                "level" => 'Lv.33',
            ]
        ],
        "party2" => []
    ]
];
//EPISODE17
$route15Trainer2 = [
    [
        "name" => 'Yazmin',
        "id" => 'yazmin',
        "image" => $camperFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $bellsproutMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $oddishMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $tangelaMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Edwin',
        "id" => 'edwin',
        "image" => $birdKeeper,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $pidgeottoMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $farfetchdMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $doduoMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $pidgeyMenu,
                "level" => 'Lv.26',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Chester',
        "id" => 'chester',
        "image" => $birdKeeper,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $dodrioMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $doduoMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $doduoMenu,
                "level" => 'Lv.28',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Kindra',
        "id" => 'kindra',
        "image" => $camperFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $gloomMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $oddishMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $oddishMenu,
                "level" => 'Lv.28',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Olivia',
        "id" => 'olivia',
        "image" => $beauty,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $bulbasaurMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $ivysaurMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Grace',
        "id" => 'grace',
        "image" => $beauty,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $pidgeottoMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $wigglytuffMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Alex',
        "id" => 'alex',
        "image" => $biker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $grimerMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $weezingMenu,
                "level" => 'Lv.28',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Ernest',
        "id" => 'ernest',
        "image" => $biker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $weezingMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $grimerMenu,
                "level" => 'Lv.25',
            ]
        ],
        "party2" => []
    ]
];
$route18Trainer = [
    [
        "name" => 'Jacob',
        "id" => 'jacob',
        "image" => $birdKeeper,
        "insight" => "A good place to train if you have a VS.Seeker",
        "classimp" => '',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $spearowMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $spearowMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $fearowMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $spearowMenu,
                "level" => 'Lv.26',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Wilton',
        "id" => 'wilton',
        "image" => $birdKeeper,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $spearowMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $fearowMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Ramiro',
        "id" => 'ramiro',
        "image" => $birdKeeper,
        "insight" => "Be very careful because of the potential level gap.",
        "classimp" => '',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $dodrioMenu,
                "level" => 'Lv.34',
            ]
        ],
        "party2" => []
    ]
];
$route17Trainer = [
    [
        "name" => 'William',
        "id" => 'william',
        "image" => $biker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $weezingMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $weezingMenu,
                "level" => 'Lv.25',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Corey',
        "id" => 'corey',
        "image" => $cueball,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $primeapeMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $machokeMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Zeek',
        "id" => 'zeek',
        "image" => $cueball,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $machokeMenu,
                "level" => 'Lv.33',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Nikolas',
        "id" => 'nikolas',
        "image" => $biker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $voltorbMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $voltorbMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Raul',
        "id" => 'raul',
        "image" => $cueball,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $mankeyMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $primeapeMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Isaiah',
        "id" => 'isaiah',
        "image" => $cueball,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $machampMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Virgil',
        "id" => 'virgil',
        "image" => $biker,
        "insight" => "Will not bury the light.",
        "classimp" => '',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $weezingMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $weezingMenu,
                "level" => 'Lv.28',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Billy',
        "id" => 'billy',
        "image" => $biker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $mukMenu,
                "level" => 'Lv.33',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Jamal',
        "id" => 'jamal',
        "image" => $cueball,
        "insight" => "Normal-types' worst nightmare!",
        "classimp" => '',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $mankeyMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $mankeyMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $machampMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.26',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Jaxon',
        "id" => 'jaxon',
        "image" => $biker,
        "insight" => "Too much bulk, be very careful.",
        "classimp" => '',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $weezingMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $mukMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ]
];
$route16Trainer2 = [
    [
        "name" => 'Lao',
        "id" => 'lao',
        "image" => $biker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $grimerMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Koji',
        "id" => 'koji',
        "image" => $cueball,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $mankeyMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.28',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Hideo',
        "id" => 'hideo',
        "image" => $biker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $weezingMenu,
                "level" => 'Lv.33',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Luke',
        "id" => 'luke',
        "image" => $cueball,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $mankeyMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Camron',
        "id" => 'camron',
        "image" => $cueball,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $mankeyMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Ruben',
        "id" => 'ruben',
        "image" => $biker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $weezingMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $weezingMenu,
                "level" => 'Lv.28',
            ]
        ],
        "party2" => []
    ]
];
$silphcoTrainer = [
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntSilph1',
        "image" => $rocketGruntMale,
        "insight" => "Too many Pokémon.",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $golbatMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $zubatMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $zubatMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $raticateMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $zubatMenu,
                "level" => 'Lv.25',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Jerry',
        "id" => 'jerry',
        "image" => $scientist,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $magnemiteMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $voltorbMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $magnetonMenu,
                "level" => 'Lv.28',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntSilph2',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $cuboneMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $zubatMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Parker',
        "id" => 'parker',
        "image" => $scientist,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $grimerMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $electrodeMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntSilph3',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $weezingMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $golbatMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.28',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntSilph4',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $raticateMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $arbokMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $golbatMenu,
                "level" => 'Lv.26',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntSilph5',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $cuboneMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $cuboneMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Joshua',
        "id" => 'joshua',
        "image" => $scientist,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $electrodeMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $mukMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntSilph6',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $raticateMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $zubatMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $golbatMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.26',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntSilph7',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $machokeMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $machokeMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntSilph8',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $zubatMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $zubatMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $golbatMenu,
                "level" => 'Lv.28',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Taylor',
        "id" => 'taylor',
        "image" => $scientist,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $voltorbMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $magnetonMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $magnemiteMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.25',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rodney',
        "id" => 'rodney',
        "image" => $scientist,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $electrodeMenu,
                "level" => 'Lv.33',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntSilph9',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $drowzeeMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntSilph10',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $ekansMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $zubatMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $cuboneMenu,
                "level" => 'Lv.28',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntSilph11',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $machokeMenu,
                "level" => 'Lv.33',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Travis',
        "id" => 'travis',
        "image" => $scientist,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $magnemiteMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntSilph12',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $zubatMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $rattataMenu,
                "level" => 'Lv.25',
            ],
            [
                "pokemon" => $ekansMenu,
                "level" => 'Lv.25',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntSilph13',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $golbatMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $drowzeeMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $hypnoMenu,
                "level" => 'Lv.28',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Ed',
        "id" => 'ed',
        "image" => $scientist,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $voltorbMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $magnetonMenu,
                "level" => 'Lv.28',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntSilph14',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $arbokMenu,
                "level" => 'Lv.33',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntSilph15',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $hypnoMenu,
                "level" => 'Lv.33',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Jose',
        "id" => 'jose',
        "image" => $scientist,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $electrodeMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $weezingMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntSilph16',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $raticateMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $hypnoMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $raticateMenu,
                "level" => 'Lv.28',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntSilph17',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $drowzeeMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $grimerMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.28',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Beau',
        "id" => 'beau',
        "image" => $scientist,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $magnetonMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $weezingMenu,
                "level" => 'Lv.26',
            ],
            [
                "pokemon" => $magnemiteMenu,
                "level" => 'Lv.26',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Dalton',
        "id" => 'dalton',
        "image" => $juggler,
        "insight" => "What on earth is a juggler doing here?",
        "classimp" => '',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $kadabraMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $mrMimeMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntSilph18',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $sandshrewMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $sandshrewMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'TOADMAN (Rival)',
        "id" => 'rival6',
        "image" => $rivalsprite2,
        "insight" => "That was surprisingly easier than the last time I fought him.",
        "classimp" => 'importantname',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $pidgeotMenuSpec,
                "level" => 'Lv.37',
            ],
            [
                "pokemon" => $gyaradosMenuSpec,
                "level" => 'Lv.38',
            ],
            [
                "pokemon" => $growlitheMenuSpec,
                "level" => 'Lv.35',
            ]
        ],
        "party2" => [
            [
                "pokemon" => $alakazamMenuSpec,
                "level" => 'Lv.35',
            ],
            [
                "pokemon" => $venusaurMenuSpec,
                "level" => 'Lv.40',
            ]
        ]
    ],
    [
        "name" => 'Rocket Grunt',
        "id" => 'rocketGruntSilph19',
        "image" => $rocketGruntMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $cuboneMenu,
                "level" => 'Lv.32',
            ],
            [
                "pokemon" => $drowzeeMenu,
                "level" => 'Lv.32',
            ],
            [
                "pokemon" => $marowakMenu,
                "level" => 'Lv.32',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Giovanni',
        "id" => 'giovanni2',
        "image" => $giovannisprite,
        "insight" => "",
        "classimp" => 'importantname',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $nidorinoMenuSpec,
                "level" => 'Lv.37',
            ],
            [
                "pokemon" => $kangaskhanMenuSpec,
                "level" => 'Lv.35',
            ],
            [
                "pokemon" => $rhyhornMenuSpec,
                "level" => 'Lv.37',
            ],
            [
                "pokemon" => $nidoqueenMenuSpec,
                "level" => 'Lv.41',
            ]
        ],
        "party2" => []
    ]
];
//EPISODE18
$saffronCityTrainer = [
    [
        "name" => 'Hitoshi',
        "id" => 'hitoshi',
        "image" => $blackbelt,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.31',
            ],
            [
                "pokemon" => $mankeyMenu,
                "level" => 'Lv.31',
            ],
            [
                "pokemon" => $primeapeMenu,
                "level" => 'Lv.31',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Hideki',
        "id" => 'hideki',
        "image" => $blackbelt,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.32',
            ],
            [
                "pokemon" => $machokeMenu,
                "level" => 'Lv.32',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Aaron',
        "id" => 'aaron',
        "image" => $blackbelt,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $primeapeMenu,
                "level" => 'Lv.36',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Mike',
        "id" => 'mike',
        "image" => $blackbelt,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $mankeyMenu,
                "level" => 'Lv.31',
            ],
            [
                "pokemon" => $mankeyMenu,
                "level" => 'Lv.31',
            ],
            [
                "pokemon" => $primeapeMenu,
                "level" => 'Lv.31',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Koichi',
        "id" => 'koichi',
        "image" => $blackbelt,
        "insight" => "I'm not sure why I decided not to speed up the fight here. After defeating him, you get to choose between Hitmonlee or Hitmonchan.",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $hitmonleeMenu,
                "level" => 'Lv.37',
            ],
            [
                "pokemon" => $hitmonchanMenu,
                "level" => 'Lv.37',
            ]
        ],
        "party2" => []
    ]
];
//EPISODE19
$fuchsiaCityTrainer = [
    [
        "name" => 'Kayden',
        "id" => 'kayden',
        "image" => $juggler,
        "insight" => "How is this team allowed in this Gym.",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $hypnoMenu,
                "level" => 'Lv.38',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Kirk',
        "id" => 'kirk',
        "image" => $juggler,
        "insight" => "Just HOW ARE THESE SUPPOSE TO BE POISON TYPES?",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $drowzeeMenu,
                "level" => 'Lv.31',
            ],
            [
                "pokemon" => $drowzeeMenu,
                "level" => 'Lv.31',
            ],
            [
                "pokemon" => $kadabraMenu,
                "level" => 'Lv.31',
            ],
            [
                "pokemon" => $drowzeeMenu,
                "level" => 'Lv.31',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Edgar',
        "id" => 'edgar',
        "image" => $tamer,
        "insight" => "Now some real Poison-types",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $arbokMenu,
                "level" => 'Lv.33',
            ],
            [
                "pokemon" => $sandslashMenu,
                "level" => 'Lv.33',
            ],
            [
                "pokemon" => $arbokMenu,
                "level" => 'Lv.33',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Phil',
        "id" => 'phil',
        "image" => $tamer,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $sandslashMenu,
                "level" => 'Lv.34',
            ],
            [
                "pokemon" => $arbokMenu,
                "level" => 'Lv.34',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Shawn',
        "id" => 'shawn',
        "image" => $juggler,
        "insight" => "Just when you thought the Psychic-types are done.",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $drowzeeMenu,
                "level" => 'Lv.34',
            ],
            [
                "pokemon" => $hypnoMenu,
                "level" => 'Lv.34',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Koga',
        "id" => 'koga',
        "image" => $kogasprite,
        "insight" => "A cake walk if you use a Psychic-type Pokémon.",
        "classimp" => 'importantname',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $koffingMenuSpec,
                "level" => 'Lv.37',
            ],
            [
                "pokemon" => $mukMenuSpec,
                "level" => 'Lv.39',
            ],
            [
                "pokemon" => $koffingMenuSpec,
                "level" => 'Lv.37',
            ],
            [
                "pokemon" => $weezingMenuSpec,
                "level" => 'Lv.43',
            ]
        ],
        "party2" => []
    ]
];
//EPISODE20
$saffronCityGymTrainer = [
    [
        "name" => 'Cameron',
        "id" => 'cameron',
        "image" => $psychicMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $slowpokeMenu,
                "level" => 'Lv.33',
            ],
            [
                "pokemon" => $slowpokeMenu,
                "level" => 'Lv.33',
            ],
            [
                "pokemon" => $slowbroMenu,
                "level" => 'Lv.33',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Johan',
        "id" => 'johan',
        "image" => $psychicMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $kadabraMenu,
                "level" => 'Lv.31',
            ],
            [
                "pokemon" => $slowpokeMenu,
                "level" => 'Lv.31',
            ],
            [
                "pokemon" => $mrMimeMenu,
                "level" => 'Lv.31',
            ],
            [
                "pokemon" => $kadabraMenu,
                "level" => 'Lv.31',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Tyron',
        "id" => 'tyron',
        "image" => $psychicMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $mrMimeMenu,
                "level" => 'Lv.34',
            ],
            [
                "pokemon" => $kadabraMenu,
                "level" => 'Lv.34',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Tasha',
        "id" => 'tasha',
        "image" => $chaneller,
        "insight" => "Be very careful with destiny bond. (I'm not sure if her Pokémon has it.)",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $gastlyMenu,
                "level" => 'Lv.33',
            ],
            [
                "pokemon" => $gastlyMenu,
                "level" => 'Lv.33',
            ],
            [
                "pokemon" => $haunterMenu,
                "level" => 'Lv.33',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Preston',
        "id" => 'preston',
        "image" => $psychicMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $slowbroMenu,
                "level" => 'Lv.38',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Amanda',
        "id" => 'amanda',
        "image" => $chaneller,
        "insight" => "Be very careful with destiny bond.",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $gastlyMenu,
                "level" => 'Lv.34',
            ],
            [
                "pokemon" => $haunterMenu,
                "level" => 'Lv.34',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Sabrina',
        "id" => 'sabrina',
        "image" => $sabrinasprite,
        "insight" => "Don't let her Pokémon setup on you.",
        "classimp" => 'importantname',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $kadabraMenuSpec,
                "level" => 'Lv.38',
            ],
            [
                "pokemon" => $mrmimeMenuSpec,
                "level" => 'Lv.37',
            ],
            [
                "pokemon" => $venomothMenuSpec,
                "level" => 'Lv.38',
            ],
            [
                "pokemon" => $alakazamMenuSpec,
                "level" => 'Lv.43',
            ]
        ],
        "party2" => []
    ]
];
//EPISODE21
$route19Trainer = [
    [
        "name" => 'Richard',
        "id" => 'richard',
        "image" => $swimmerMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $tentacoolMenu,
                "level" => 'Lv.30',
            ],
            [
                "pokemon" => $shellderMenu,
                "level" => 'Lv.30',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Reece',
        "id" => 'reece',
        "image" => $swimmerMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $goldeenMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $horseaMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $staryuMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Tony',
        "id" => 'tony',
        "image" => $swimmerMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $horseaMenu,
                "level" => 'Lv.30',
            ],
            [
                "pokemon" => $horseaMenu,
                "level" => 'Lv.30',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'David',
        "id" => 'david',
        "image" => $swimmerMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $goldeenMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $shellderMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $seakingMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Douglas',
        "id" => 'douglas',
        "image" => $swimmerMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $horseaMenu,
                "level" => 'Lv.27',
            ],
            [
                "pokemon" => $tentacoolMenu,
                "level" => 'Lv.27',
            ],
            [
                "pokemon" => $tentacoolMenu,
                "level" => 'Lv.27',
            ],
            [
                "pokemon" => $goldeenMenu,
                "level" => 'Lv.27',
            ]
        ],
        "party2" => []
    ]
];
$route21Trainer = [
    [
        "name" => 'Wade',
        "id" => 'wade',
        "image" => $fisherman,
        "insight" => "Just Magikarp",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $magikarpMenu,
                "level" => 'Lv.27',
            ],
            [
                "pokemon" => $magikarpMenu,
                "level" => 'Lv.27',
            ],
            [
                "pokemon" => $magikarpMenu,
                "level" => 'Lv.27',
            ],
            [
                "pokemon" => $magikarpMenu,
                "level" => 'Lv.27',
            ],
            [
                "pokemon" => $magikarpMenu,
                "level" => 'Lv.27',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Ronald',
        "id" => 'ronald',
        "image" => $fisherman,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $seakingMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $goldeenMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $seakingMenu,
                "level" => 'Lv.28',
            ],
            [
                "pokemon" => $seakingMenu,
                "level" => 'Lv.28',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Lil & Ian',
        "id" => 'lilandian',
        "image" => $scubaSquad,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $seadraMenu,
                "level" => 'Lv.33',
            ],
            [
                "pokemon" => $starmieMenu,
                "level" => 'Lv.33',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Spencer',
        "id" => 'spencer',
        "image" => $swimmerMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $seadraMenu,
                "level" => 'Lv.33',
            ],
            [
                "pokemon" => $tentacruelMenu,
                "level" => 'Lv.33',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Claude',
        "id" => 'claude',
        "image" => $fisherman,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $shellderMenu,
                "level" => 'Lv.31',
            ],
            [
                "pokemon" => $cloysterMenu,
                "level" => 'Lv.31',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Nolan',
        "id" => 'nolan',
        "image" => $fisherman,
        "insight" => "Think Mark!",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $seakingMenu,
                "level" => 'Lv.33',
            ],
            [
                "pokemon" => $goldeenMenu,
                "level" => 'Lv.33',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Jack',
        "id" => 'jack',
        "image" => $swimmerMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $starmieMenu,
                "level" => 'Lv.37',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Roland',
        "id" => 'roland',
        "image" => $swimmerMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $poliwhirlMenu,
                "level" => 'Lv.32',
            ],
            [
                "pokemon" => $tentacoolMenu,
                "level" => 'Lv.32',
            ],
            [
                "pokemon" => $seadraMenu,
                "level" => 'Lv.32',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Jerome',
        "id" => 'jerome',
        "image" => $swimmerMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $staryuMenu,
                "level" => 'Lv.33',
            ],
            [
                "pokemon" => $wartortleMenu,
                "level" => 'Lv.33',
            ]
        ],
        "party2" => []
    ]
];
$route20Trainer = [
    [
        "name" => 'Melissa',
        "id" => 'melissa',
        "image" => $swimmerFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $poliwagMenu,
                "level" => 'Lv.31',
            ],
            [
                "pokemon" => $seakingMenu,
                "level" => 'Lv.31',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Missy',
        "id" => 'missy',
        "image" => $camperFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $goldeenMenu,
                "level" => 'Lv.31',
            ],
            [
                "pokemon" => $seakingMenu,
                "level" => 'Lv.31',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Dean',
        "id" => 'dean',
        "image" => $swimmerMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $staryuMenu,
                "level" => 'Lv.35',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Nora',
        "id" => 'nora',
        "image" => $swimmerFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $shellderMenu,
                "level" => 'Lv.30',
            ],
            [
                "pokemon" => $shellderMenu,
                "level" => 'Lv.30',
            ],
            [
                "pokemon" => $cloysterMenu,
                "level" => 'Lv.30',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Roger',
        "id" => 'roger',
        "image" => $birdKeeper,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $fearowMenu,
                "level" => 'Lv.30',
            ],
            [
                "pokemon" => $fearowMenu,
                "level" => 'Lv.30',
            ],
            [
                "pokemon" => $pidgeottoMenu,
                "level" => 'Lv.30',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Irene',
        "id" => 'irene',
        "image" => $camperFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $tentacoolMenu,
                "level" => 'Lv.30',
            ],
            [
                "pokemon" => $horseaMenu,
                "level" => 'Lv.30',
            ],
            [
                "pokemon" => $seelMenu,
                "level" => 'Lv.30',
            ]
        ],
        "party2" => []
    ]
];
//EPISODE22
$cinnabarMansionTrainer = [
    [
        "name" => 'Johnson',
        "id" => 'johnson',
        "image" => $youngster,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $ekansMenu,
                "level" => 'Lv.33',
            ],
            [
                "pokemon" => $ekansMenu,
                "level" => 'Lv.33',
            ],
            [
                "pokemon" => $raticateMenu,
                "level" => 'Lv.34',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Arnie',
        "id" => 'arnie',
        "image" => $burglar,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $charmanderMenu,
                "level" => 'Lv.34',
            ],
            [
                "pokemon" => $charmeleonMenu,
                "level" => 'Lv.34',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Braydon',
        "id" => 'braydon',
        "image" => $scientist,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $magnemiteMenu,
                "level" => 'Lv.34',
            ],
            [
                "pokemon" => $magnetonMenu,
                "level" => 'Lv.34',
            ],
            [
                "pokemon" => $voltorbMenu,
                "level" => 'Lv.33',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Ted',
        "id" => 'ted',
        "image" => $scientist,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $electrodeMenu,
                "level" => 'Lv.29',
            ],
            [
                "pokemon" => $weezingMenu,
                "level" => 'Lv.29',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Lewis',
        "id" => 'lewis',
        "image" => $burglar,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $growlitheMenu,
                "level" => 'Lv.34',
            ],
            [
                "pokemon" => $ponytaMenu,
                "level" => 'Lv.34',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Ivan',
        "id" => 'ivan',
        "image" => $scientist,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $magnemiteMenu,
                "level" => 'Lv.34',
            ],
            [
                "pokemon" => $electrodeMenu,
                "level" => 'Lv.34',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Simon',
        "id" => 'simon',
        "image" => $burglar,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $ninetalesMenu,
                "level" => 'Lv.38',
            ]
        ],
        "party2" => []
    ]
];
//EPISODE23
$cinnabarGymTrainer = [
    [
        "name" => 'Quinn',
        "id" => 'quinn',
        "image" => $burglar,
        "insight" => "The answer is YES",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $growlitheMenu,
                "level" => 'Lv.36',
            ],
            [
                "pokemon" => $vulpixMenu,
                "level" => 'Lv.36',
            ],
            [
                "pokemon" => $ninetalesMenu,
                "level" => 'Lv.36',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Erik',
        "id" => 'erik',
        "image" => $nerd,
        "insight" => "For some reason does not have an assigned quiz so you can totally skip this one.",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $vulpixMenu,
                "level" => 'Lv.36',
            ],
            [
                "pokemon" => $vulpixMenu,
                "level" => 'Lv.36',
            ],
            [
                "pokemon" => $ninetalesMenu,
                "level" => 'Lv.36',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Avery',
        "id" => 'avery',
        "image" => $nerd,
        "insight" => "This answer is NO",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $ponytaMenu,
                "level" => 'Lv.34',
            ],
            [
                "pokemon" => $charmanderMenu,
                "level" => 'Lv.34',
            ],
            [
                "pokemon" => $vulpixMenu,
                "level" => 'Lv.34',
            ],
            [
                "pokemon" => $primeapeMenu,
                "level" => 'Lv.34',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Ramon',
        "id" => 'ramon',
        "image" => $burglar,
        "insight" => "The answer is NO",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $ponytaMenu,
                "level" => 'Lv.41',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Derek',
        "id" => 'derek',
        "image" => $nerd,
        "insight" => "The answer is NO",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $rapidashMenu,
                "level" => 'Lv.41',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Dusty',
        "id" => 'dusty',
        "image" => $burglar,
        "insight" => "The answer is YES",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $vulpixMenu,
                "level" => 'Lv.37',
            ],
            [
                "pokemon" => $growlitheMenu,
                "level" => 'Lv.37',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Zac',
        "id" => 'zac',
        "image" => $nerd,
        "insight" => "The answer is NO",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $growlitheMenu,
                "level" => 'Lv.37',
            ],
            [
                "pokemon" => $vulpixMenu,
                "level" => 'Lv.37',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Blaine',
        "id" => 'blaine',
        "image" => $blainesprite,
        "insight" => "Don't forget your burn heal!",
        "classimp" => 'importantname',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $growlitheMenuSpec,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $ponytaMenuSpec,
                "level" => 'Lv.40',
            ],
            [
                "pokemon" => $rapidashMenuSpec,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $arcanineMenuSpec,
                "level" => 'Lv.47',
            ]
        ],
        "party2" => []
    ]
];
//EPISODE24
$viridianGymTrainer = [
    [
        "name" => 'Yuji',
        "id" => 'yuji',
        "image" => $cooltrainerMale,
        "insight" => "The answer is YES",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $sandslashMenu,
                "level" => 'Lv.38',
            ],
            [
                "pokemon" => $gravelerMenu,
                "level" => 'Lv.38',
            ],
            [
                "pokemon" => $onixMenu,
                "level" => 'Lv.38',
            ],
            [
                "pokemon" => $gravelerMenu,
                "level" => 'Lv.38',
            ],
            [
                "pokemon" => $marowakMenu,
                "level" => 'Lv.38',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Warren',
        "id" => 'warren',
        "image" => $cooltrainerMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $marowakMenu,
                "level" => 'Lv.37',
            ],
            [
                "pokemon" => $marowakMenu,
                "level" => 'Lv.37',
            ],
            [
                "pokemon" => $rhyhornMenu,
                "level" => 'Lv.38',
            ],
            [
                "pokemon" => $nidorinaMenu,
                "level" => 'Lv.39',
            ],
            [
                "pokemon" => $nidoqueenMenu,
                "level" => 'Lv.39',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Takashi',
        "id" => 'takashi',
        "image" => $blackbelt,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $machokeMenu,
                "level" => 'Lv.38',
            ],
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.38',
            ],
            [
                "pokemon" => $machokeMenu,
                "level" => 'Lv.38',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Giovanni',
        "id" => 'giovanni3',
        "image" => $giovannisprite,
        "insight" => "I just used Rattlesnek and won",
        "classimp" => 'importantname',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $rhyhornMenuSpec,
                "level" => 'Lv.45',
            ],
            [
                "pokemon" => $dugtrioMenuSpec,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $nidoqueenMenuSpec,
                "level" => 'Lv.44',
            ]
        ],
        "party2" => [
            [
                "pokemon" => $nidokingMenuSpec,
                "level" => 'Lv.45',
            ],
            [
                "pokemon" => $rhyhornMenuSpec,
                "level" => 'Lv.50',
            ]
        ]
    ]
];
$route22Trainer2 = [
    [
        "name" => 'TOADMAN (Rival)',
        "id" => 'rival7',
        "image" => $rivalsprite2,
        "insight" => "Surprisingly easier than the last time I fought him.",
        "classimp" => 'importantname',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $pidgeotMenuSpec,
                "level" => 'Lv.47',
            ],
            [
                "pokemon" => $rhyhornMenuSpec,
                "level" => 'Lv.45',
            ],
            [
                "pokemon" => $gyaradosMenuSpec,
                "level" => 'Lv.45',
            ]
        ],
        "party2" => [
            [
                "pokemon" => $growlitheMenuSpec,
                "level" => 'Lv.45',
            ],
            [
                "pokemon" => $alakazamMenuSpec,
                "level" => 'Lv.47',
            ],
            [
                "pokemon" => $venusaurMenuSpec,
                "level" => 'Lv.53',
            ]
        ]
    ]
];
//EPISODE25
$kindleroadTrainer = [
    [
        "name" => 'Abigail',
        "id" => 'abigail',
        "image" => $swimmerFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $psyduckMenu,
                "level" => 'Lv.35',
            ],
            [
                "pokemon" => $psyduckMenu,
                "level" => 'Lv.36',
            ],
            [
                "pokemon" => $golduckMenu,
                "level" => 'Lv.37',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Claire',
        "id" => 'claire',
        "image" => $camperFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $meowthMenu,
                "level" => 'Lv.35',
            ],
            [
                "pokemon" => $meowthMenu,
                "level" => 'Lv.35',
            ],
            [
                "pokemon" => $pikachuMenu,
                "level" => 'Lv.35',
            ],
            [
                "pokemon" => $clefairyMenu,
                "level" => 'Lv.35',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Bryce',
        "id" => 'bryce',
        "image" => $camperMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $nidorinoMenu,
                "level" => 'Lv.36',
            ],
            [
                "pokemon" => $raticateMenu,
                "level" => 'Lv.36',
            ],
            [
                "pokemon" => $sandslashMenu,
                "level" => 'Lv.36',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Tanya',
        "id" => 'tanya',
        "image" => $crushgirl,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $hitmonleeMenu,
                "level" => 'Lv.38',
            ],
            [
                "pokemon" => $hitmonchanMenu,
                "level" => 'Lv.38',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Garrett',
        "id" => 'garrett',
        "image" => $swimmerMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $shellderMenu,
                "level" => 'Lv.35',
            ],
            [
                "pokemon" => $cloysterMenu,
                "level" => 'Lv.35',
            ],
            [
                "pokemon" => $wartortleMenu,
                "level" => 'Lv.38',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Mik & Kia',
        "id" => 'mikandkia',
        "image" => $crushkin,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $machokeMenu,
                "level" => 'Lv.39',
            ],
            [
                "pokemon" => $primeapeMenu,
                "level" => 'Lv.39',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Hugh',
        "id" => 'hugh',
        "image" => $blackbelt,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.37',
            ],
            [
                "pokemon" => $machokeMenu,
                "level" => 'Lv.37',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Shea',
        "id" => 'shea',
        "image" => $blackbelt,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.38',
            ],
            [
                "pokemon" => $machokeMenu,
                "level" => 'Lv.38',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Maria',
        "id" => 'maria',
        "image" => $swimmerFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $seadraMenu,
                "level" => 'Lv.37',
            ],
            [
                "pokemon" => $seadraMenu,
                "level" => 'Lv.37',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Tommy',
        "id" => 'tommy',
        "image" => $fisherman,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $goldeenMenu,
                "level" => 'Lv.35',
            ],
            [
                "pokemon" => $goldeenMenu,
                "level" => 'Lv.35',
            ],
            [
                "pokemon" => $seakingMenu,
                "level" => 'Lv.35',
            ],
            [
                "pokemon" => $seakingMenu,
                "level" => 'Lv.35',
            ],
            [
                "pokemon" => $seakingMenu,
                "level" => 'Lv.35',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Finn',
        "id" => 'finn',
        "image" => $swimmerMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $starmieMenu,
                "level" => 'Lv.38',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Sharon',
        "id" => 'sharon',
        "image" => $crushgirl,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $mankeyMenu,
                "level" => 'Lv.37',
            ],
            [
                "pokemon" => $primeapeMenu,
                "level" => 'Lv.37',
            ]
        ],
        "party2" => []
    ]
];
$threeislandTrainer = [
    [
        "name" => 'Goon',
        "id" => 'goon1',
        "image" => $biker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.37',
            ],
            [
                "pokemon" => $grimerMenu,
                "level" => 'Lv.37',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Goon',
        "id" => 'goon2',
        "image" => $biker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $koffingMenu,
                "level" => 'Lv.38',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Goon',
        "id" => 'goon3',
        "image" => $biker,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $grimerMenu,
                "level" => 'Lv.38',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Paxton',
        "id" => 'paxton',
        "image" => $cueball,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $weezingMenu,
                "level" => 'Lv.39',
            ],
            [
                "pokemon" => $mukMenu,
                "level" => 'Lv.39',
            ]
        ],
        "party2" => []
    ]
];
$bondbridgeTrainer = [
    [
        "name" => 'Joy & Meg',
        "id" => 'joyandmeg',
        "image" => $twins,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $clefairyMenu,
                "level" => 'Lv.37',
            ],
            [
                "pokemon" => $clefairyMenu,
                "level" => 'Lv.37',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Violet',
        "id" => 'violet',
        "image" => $aromagirl,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $bulbasaurMenu,
                "level" => 'Lv.36',
            ],
            [
                "pokemon" => $ivysaurMenu,
                "level" => 'Lv.36',
            ],
            [
                "pokemon" => $ivysaurMenu,
                "level" => 'Lv.36',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Alexis',
        "id" => 'alexis',
        "image" => $scubaFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $staryuMenu,
                "level" => 'Lv.34',
            ],
            [
                "pokemon" => $staryuMenu,
                "level" => 'Lv.34',
            ],
            [
                "pokemon" => $krabbyMenu,
                "level" => 'Lv.34',
            ],
            [
                "pokemon" => $staryuMenu,
                "level" => 'Lv.34',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Amira',
        "id" => 'amira',
        "image" => $scubaFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $poliwagMenu,
                "level" => 'Lv.34',
            ],
            [
                "pokemon" => $poliwhirlMenu,
                "level" => 'Lv.35',
            ],
            [
                "pokemon" => $poliwagMenu,
                "level" => 'Lv.34',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Nikki',
        "id" => 'nikki',
        "image" => $aromagirl,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $bellsproutMenu,
                "level" => 'Lv.37',
            ],
            [
                "pokemon" => $weepinbellMenu,
                "level" => 'Lv.37',
            ]
        ],
        "party2" => []
    ]
];
//EPISODE26
$victoryRoadTrainer = [
    [
        "name" => 'Naomi',
        "id" => 'naomi',
        "image" => $cooltrainerFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $persianMenu,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $ponytaMenu,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $rapidashMenu,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $vulpixMenu,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $ninetalesMenu,
                "level" => 'Lv.42',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Rolando',
        "id" => 'rolando',
        "image" => $cooltrainerMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $raticateMenu,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $ivysaurMenu,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $wartortleMenu,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $charmeleonMenu,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $charizardMenu,
                "level" => 'Lv.42',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Daisuke',
        "id" => 'daisuke',
        "image" => $blackbelt,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $machokeMenu,
                "level" => 'Lv.43',
            ],
            [
                "pokemon" => $machopMenu,
                "level" => 'Lv.43',
            ],
            [
                "pokemon" => $machokeMenu,
                "level" => 'Lv.43',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Nelson',
        "id" => 'nelson',
        "image" => $juggler,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $drowzeeMenu,
                "level" => 'Lv.41',
            ],
            [
                "pokemon" => $hypnoMenu,
                "level" => 'Lv.41',
            ],
            [
                "pokemon" => $kadabraMenu,
                "level" => 'Lv.41',
            ],
            [
                "pokemon" => $kadabraMenu,
                "level" => 'Lv.41',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Gregory',
        "id" => 'gregory',
        "image" => $juggler,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $mrMimeMenu,
                "level" => 'Lv.48',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Vincent',
        "id" => 'vincent',
        "image" => $tamer,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $persianMenu,
                "level" => 'Lv.44',
            ],
            [
                "pokemon" => $golduckMenu,
                "level" => 'Lv.44',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'George',
        "id" => 'george',
        "image" => $cooltrainerMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $exeggutorMenu,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $sandslashMenu,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $cloysterMenu,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $electrodeMenu,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $arcanineMenu,
                "level" => 'Lv.42',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Dawson',
        "id" => 'dawson',
        "image" => $pokemaniac,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $charmeleonMenu,
                "level" => 'Lv.40',
            ],
            [
                "pokemon" => $laprasMenu,
                "level" => 'Lv.40',
            ],
            [
                "pokemon" => $lickitungMenu,
                "level" => 'Lv.40',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Alexa',
        "id" => 'alexa',
        "image" => $cooltrainerFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $clefairyMenu,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $jigglypuffMenu,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $persianMenu,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $dewgongMenu,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $chanseyMenu,
                "level" => 'Lv.42',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Colby',
        "id" => 'colby',
        "image" => $cooltrainerMale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $kinglerMenu,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $poliwhirlMenu,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $tentacruelMenu,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $seadraMenu,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $blastoiseMenu,
                "level" => 'Lv.42',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Caroline',
        "id" => 'caroline',
        "image" => $cooltrainerFemale,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $bellsproutMenu,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $weepinbellMenu,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $victreebelMenu,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $parasMenu,
                "level" => 'Lv.42',
            ],
            [
                "pokemon" => $parasectMenu,
                "level" => 'Lv.42',
            ]
        ],
        "party2" => []
    ],
    [
        "name" => 'Ray & Tyra',
        "id" => 'rayandtyra',
        "image" => $coolcouple,
        "insight" => "",
        "classimp" => '',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $nidokingMenu,
                "level" => 'Lv.45',
            ],
            [
                "pokemon" => $nidoqueenMenu,
                "level" => 'Lv.45',
            ]
        ],
        "party2" => []
    ]
];
//EPISODE27
$loreleiTrainer = [
    [
        "name" => 'Lorelei',
        "id" => 'lorelei',
        "image" => $loreleisprite,
        "insight" => "Surprisingly tough, just like the title says.",
        "classimp" => 'importantname',
        "difficulty" => $normal,
        "party1" => [
            [
                "pokemon" => $dewgongMenuSpec,
                "level" => 'Lv.52',
            ],
            [
                "pokemon" => $cloysterMenuSpec,
                "level" => 'Lv.51',
            ],
            [
                "pokemon" => $slowbroMenuSpec,
                "level" => 'Lv.52',
            ]
        ],
        "party2" => [
            [
                "pokemon" => $jynxMenuSpec,
                "level" => 'Lv.54',
            ],
            [
                "pokemon" => $laprasMenuSpec,
                "level" => 'Lv.54',
            ]
        ]
    ]
];
//EPISODE28
$brunoTrainer = [
    [
        "name" => 'Bruno',
        "id" => 'bruno',
        "image" => $brunosprite,
        "insight" => "The battle was so easy that you can tell by how short the episode was.",
        "classimp" => 'importantname',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $onixMenuSpec,
                "level" => 'Lv.51',
            ],
            [
                "pokemon" => $hitmonchanMenuSpec,
                "level" => 'Lv.53',
            ],
            [
                "pokemon" => $hitmonleeMenuSpec,
                "level" => 'Lv.53',
            ]
        ],
        "party2" => [
            [
                "pokemon" => $onixMenuSpec,
                "level" => 'Lv.54',
            ],
            [
                "pokemon" => $machampMenuSpec,
                "level" => 'Lv.56',
            ]
        ]
    ]
];
//EPISODE29
$agathaTrainer = [
    [
        "name" => 'Agatha',
        "id" => 'agatha',
        "image" => $agathasprite,
        "insight" => "Even shorter than the last episode.",
        "classimp" => 'importantname',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $gengarMenuSpec,
                "level" => 'Lv.54',
            ],
            [
                "pokemon" => $golbatMenuSpec,
                "level" => 'Lv.54',
            ],
            [
                "pokemon" => $haunterMenuSpec,
                "level" => 'Lv.53',
            ]
        ],
        "party2" => [
            [
                "pokemon" => $arbokMenuSpec,
                "level" => 'Lv.56',
            ],
            [
                "pokemon" => $gengarMenuSpec,
                "level" => 'Lv.58',
            ]
        ]
    ]
];
//EPISODE30
$lanceTrainer = [
    [
        "name" => 'Lance',
        "id" => 'lance',
        "image" => $lancesprite,
        "insight" => "I only used lapras",
        "classimp" => 'importantname',
        "difficulty" => $xeasy,
        "party1" => [
            [
                "pokemon" => $gyaradosMenuSpec,
                "level" => 'Lv.56',
            ],
            [
                "pokemon" => $dragonairMenuSpec,
                "level" => 'Lv.54',
            ],
            [
                "pokemon" => $dragonairMenuSpec,
                "level" => 'Lv.54',
            ]
        ],
        "party2" => [
            [
                "pokemon" => $aerodactylMenuSpec,
                "level" => 'Lv.58',
            ],
            [
                "pokemon" => $dragoniteMenuSpec,
                "level" => 'Lv.60',
            ]
        ]
    ]
];
//EPISODEFINALE
$championTrainer = [
    [
        "name" => 'Champion TOADMAN',
        "id" => 'champion',
        "image" => $championsprite,
        "insight" => "It was easy but at what cost?",
        "classimp" => 'importantname',
        "difficulty" => $easy,
        "party1" => [
            [
                "pokemon" => $pidgeotMenuSpec,
                "level" => 'Lv.59',
            ],
            [
                "pokemon" => $alakazamMenuSpec,
                "level" => 'Lv.57',
            ],
            [
                "pokemon" => $rhydonMenuSpec,
                "level" => 'Lv.59',
            ]
        ],
        "party2" => [
            [
                "pokemon" => $gyaradosMenuSpec,
                "level" => 'Lv.59',
            ],
            [
                "pokemon" => $arcanineMenuSpec,
                "level" => 'Lv.61',
            ],
            [
                "pokemon" => $venusaurMenuSpec,
                "level" => 'Lv.63',
            ]
        ]
    ]
];

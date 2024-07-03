<?php
$tableWildHeaders = ["Pokémon", "Level", "Type", "Encounter Rate", "Insight"];

function populateWild($tableData, $tableWildHeaders)
{

    echo '<table border="1" class="customTable pokemon-table">';
    echo '<thead><tr>';
    foreach ($tableWildHeaders as $header) {
        echo '<th>' . $header . '</th>';
    }
    echo '</tr></thead>';
    echo '<tbody>';
    foreach ($tableData as $data) {
        switch (htmlspecialchars($data["ifCaught"])) {
            case "success":
                $ifCaught = "succenc";
                break;
            case "already":
                $ifCaught = "caughtpokemon";
                break;
            case "failed":
                $ifCaught = "failenc";
                break;
            default:
                $ifCaught = "";
                break;
        }
        echo '<tr class="' . $ifCaught . '">';
        echo '<td>' . htmlspecialchars($data["pokemon"]->name) . '<br>' . '<img class="nopad pixelate-filter" src="' . htmlspecialchars($data["pokemon"]->image) . '" /></td>';
        echo '<td>' . ($data["level"]) . '</td>';
        echo '<td><img class="nopad pixelate-filter" src="' . htmlspecialchars($data["pokemon"]->type) . '" /></td>';
        echo '<td>' . ($data["encounterRate"]) . '</td>';
        echo '<td>' . htmlspecialchars($data["pokemon"]->insight) . '</td>';
        echo '</span> </tr>';
    }
    echo '</tbody>';
    echo '</table>';
}

$testroute = [
    [
        "pokemon" => $pidgey0,
        "level" => "2-5",
        "encounterRate" => "50%",
        "ifCaught" => "success"
    ],
    [
        "pokemon" => $rattata0,
        "level" => "2-4",
        "encounterRate" => "50%",
        "ifCaught" => ""
    ]
];

$oaklab = [
    [
        "pokemon" => $bulbasaur0,
        "level" => "5",
        "encounterRate" => "Gift",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $charmander0,
        "level" => "5",
        "encounterRate" => "Gift",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $squirtle0,
        "level" => "5",
        "encounterRate" => "Gift",
        "ifCaught" => "success"
    ]
];
$route1 = [
    [
        "pokemon" => $pidgey0,
        "level" => "2-5",
        "encounterRate" => "50%",
        "ifCaught" => "success"
    ],
    [
        "pokemon" => $rattata0,
        "level" => "2-4",
        "encounterRate" => "50%",
        "ifCaught" => ""
    ]
];
$route2 = [
    [
        "pokemon" => $pidgey0,
        "level" => "2-5",
        "encounterRate" => "45%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $rattata0,
        "level" => "2-5",
        "encounterRate" => "45%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $caterpie0,
        "level" => "4-5",
        "encounterRate" => "5%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $weedle0,
        "level" => "4-5",
        "encounterRate" => "5%",
        "ifCaught" => "success"
    ]
];
$route22 = [
    [
        "pokemon" => $rattata0,
        "level" => "2-5",
        "encounterRate" => "45%",
        "ifCaught" => "success"
    ],
    [
        "pokemon" => $mankey0,
        "level" => "2-5",
        "encounterRate" => "45%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $spearow0,
        "level" => "3-5",
        "encounterRate" => "10%",
        "ifCaught" => ""
    ]
];
$viridian = [
    [
        "pokemon" => $caterpie0,
        "level" => "3-5",
        "encounterRate" => "40%",
        "ifCaught" => "success"
    ],
    [
        "pokemon" => $weedle0,
        "level" => "3-5",
        "encounterRate" => "40%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $metapod0,
        "level" => "3-5",
        "encounterRate" => "10%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $kakuna0,
        "level" => "5",
        "encounterRate" => "5%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $pikachu0,
        "level" => "3-5",
        "encounterRate" => "5%",
        "ifCaught" => ""
    ]
];
$route3 = [
    [
        "pokemon" => $spearow0,
        "level" => "6-8",
        "encounterRate" => "35%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $pidgey0,
        "level" => "6-7",
        "encounterRate" => "30%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $nidoranf0,
        "level" => "6-7",
        "encounterRate" => "14%",
        "ifCaught" => "success"
    ],
    [
        "pokemon" => $jigglypuff0,
        "level" => "3-7",
        "encounterRate" => "10%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $mankey0,
        "level" => "7",
        "encounterRate" => "10%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $nidoranm0,
        "level" => "6",
        "encounterRate" => "1%",
        "ifCaught" => ""
    ]
];
$mtMoon = [
    [
        "pokemon" => $zubat0,
        "level" => "1f: 7-10,<br> B2f: 8-11",
        "encounterRate" => "1f: 69%,<br> B2f: 49%",
        "ifCaught" => "success"
    ],
    [
        "pokemon" => $geodude0,
        "level" => "1f: 7-9,<br> B2f: 9-10",
        "encounterRate" => "1f: 25%,<br> B2f: 30%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $paras0,
        "level" => "1f: 8,<br> B1f: 5-10,<br> B2f: 10-12",
        "encounterRate" => "1f: 5%,<br> B1f: 100%,<br> B2f: 15%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $clefairy0,
        "level" => "8",
        "encounterRate" => "1f: 1%,<br> B2f: 6%",
        "ifCaught" => ""
    ]
];
$route3PKMNCenter = [
    [
        "pokemon" => $magikarp0,
        "level" => "5",
        "encounterRate" => "Gift",
        "ifCaught" => "success"
    ]
];
$route4 = [
    [
        "pokemon" => $rattata0,
        "level" => "8-12",
        "encounterRate" => "35%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $spearow0,
        "level" => "8-12",
        "encounterRate" => "35%",
        "ifCaught" => "success"
    ],
    [
        "pokemon" => $sandshrew0,
        "level" => "6-12",
        "encounterRate" => "25%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $mankey0,
        "level" => "10-12",
        "encounterRate" => "5%",
        "ifCaught" => ""
    ]
];
$route24 = [
    [
        "pokemon" => $bellsprout0,
        "level" => "12-14",
        "encounterRate" => "25%",
        "ifCaught" => "success"
    ],
    [
        "pokemon" => $caterpie0,
        "level" => "7",
        "encounterRate" => "20%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $weedle0,
        "level" => "7",
        "encounterRate" => "20%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $pidgey0,
        "level" => "11-13",
        "encounterRate" => "15%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $abra0,
        "level" => "8-12",
        "encounterRate" => "15%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $metapod0,
        "level" => "8",
        "encounterRate" => "4%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $kakuna0,
        "level" => "8",
        "encounterRate" => "1%",
        "ifCaught" => "already"
    ]
];
$route25 = [
    [
        "pokemon" => $bellsprout0,
        "level" => "12-14",
        "encounterRate" => "25%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $caterpie0,
        "level" => "7",
        "encounterRate" => "20%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $weedle0,
        "level" => "7",
        "encounterRate" => "20%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $pidgey0,
        "level" => "11-13",
        "encounterRate" => "15%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $abra0,
        "level" => "8-12",
        "encounterRate" => "15%",
        "ifCaught" => "failed"
    ],
    [
        "pokemon" => $metapod0,
        "level" => "8",
        "encounterRate" => "4%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $kakuna0,
        "level" => "8",
        "encounterRate" => "1%",
        "ifCaught" => "already"
    ]
];
$route5 = [
    [
        "pokemon" => $pidgey0,
        "level" => "13-16",
        "encounterRate" => "40%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $meowth0,
        "level" => "10-16",
        "encounterRate" => "35%",
        "ifCaught" => "success"
    ],
    [
        "pokemon" => $bellsprout0,
        "level" => "13-16",
        "encounterRate" => "25%",
        "ifCaught" => "already"
    ]
];
$route6 = [
    [
        "pokemon" => $pidgey0,
        "level" => "13-16",
        "encounterRate" => "40%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $meowth0,
        "level" => "10-16",
        "encounterRate" => "35%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $bellsprout0,
        "level" => "13-16",
        "encounterRate" => "25%",
        "ifCaught" => "already"
    ]
];
$diglettcave = [
    [
        "pokemon" => $diglett0,
        "level" => "15-22",
        "encounterRate" => "95%",
        "ifCaught" => "success"
    ],
    [
        "pokemon" => $dugtrio0,
        "level" => "29-31",
        "encounterRate" => "5%",
        "ifCaught" => ""
    ]
];
$route11 = [
    [
        "pokemon" => $sandshrew0,
        "level" => "12-15",
        "encounterRate" => "40%",
        "ifCaught" => "success"
    ],
    [
        "pokemon" => $spearow0,
        "level" => "13-17",
        "encounterRate" => "35%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $drowzee0,
        "level" => "11-15",
        "encounterRate" => "25%",
        "ifCaught" => ""
    ]
];
$route9 = [
    [
        "pokemon" => $rattata0,
        "level" => "14-17",
        "encounterRate" => "40%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $spearow0,
        "level" => "13-17",
        "encounterRate" => "35%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $sandshrew0,
        "level" => "11-17",
        "encounterRate" => "25%",
        "ifCaught" => "already"
    ]
];
$route10 = [
    [
        "pokemon" => $voltorb0,
        "level" => "14-17",
        "encounterRate" => "40%",
        "ifCaught" => "success"
    ],
    [
        "pokemon" => $spearow0,
        "level" => "13-17",
        "encounterRate" => "35%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $sandshrew0,
        "level" => "11-17",
        "encounterRate" => "25%",
        "ifCaught" => "already"
    ]
];
$rocktunnel = [
    [
        "pokemon" => $geodude0,
        "level" => "15-17",
        "encounterRate" => "35%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $zubat0,
        "level" => "15-16",
        "encounterRate" => "30%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $mankey0,
        "level" => "16-17",
        "encounterRate" => "15%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $machop0,
        "level" => "1f: 16-17, <br> B1f: 17",
        "encounterRate" => "1f: 15%, <br> B1f: 10%",
        "ifCaught" => "success"
    ],
    [
        "pokemon" => $onix0,
        "level" => "13-15",
        "encounterRate" => "1f: 5%, <br> B1f: 10%",
        "ifCaught" => ""
    ]
];
$route8 = [
    [
        "pokemon" => $pidgey0,
        "level" => "18-20",
        "encounterRate" => "30%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $meowth0,
        "level" => "18-20",
        "encounterRate" => "30%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $sandshrew0,
        "level" => "17-19",
        "encounterRate" => "20%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $vulpix0,
        "level" => "15-18",
        "encounterRate" => "20%",
        "ifCaught" => "success"
    ]
];
$route7 = [
    [
        "pokemon" => $meowth0,
        "level" => "17-20",
        "encounterRate" => "40%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $pidgey0,
        "level" => "19-22",
        "encounterRate" => "30%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $sandshrew0,
        "level" => "19-22",
        "encounterRate" => "20%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $vulpix0,
        "level" => "18-20",
        "encounterRate" => "10%",
        "ifCaught" => "already"
    ]
];
$pokemontower = [
    [
        "pokemon" => $ghastly0,
        "level" => "3f-4f-5f: 13-19, <br> 6f: 14-19, <br> 7f: 15-19",
        "encounterRate" => "3f: 90%, <br> 4f-5f: 86%, <br> 6f: 85%, <br>7f: 75%",
        "ifCaught" => "success"
    ],
    [
        "pokemon" => $cubone0,
        "level" => "3f-4f-5f: 15-17, <br> 6f-7f: 17-19",
        "encounterRate" => "3f-4f-5f-6f: 9%, <br> 7f: 10%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $haunter0,
        "level" => "3f-4f-5f: 20, <br> 6f: 21-23, <br> 7f: 23-25",
        "encounterRate" => "3f: 1%,<br> 4f-5f: 5%, <br> 6f: 6%, <br> 7f: 15%",
        "ifCaught" => ""
    ]
];
$route12 = [
    [
        "pokemon" => $bellsprout0,
        "level" => "22-26",
        "encounterRate" => "35%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $pidgey0,
        "level" => "23-27",
        "encounterRate" => "30%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $venonat0,
        "level" => "24-26",
        "encounterRate" => "30%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $weepinbell0,
        "level" => "28-30",
        "encounterRate" => "5%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $snorlax0,
        "level" => "30",
        "encounterRate" => "special",
        "ifCaught" => "success"
    ]
];
$route12superrod = [
    [
        "pokemon" => $krabby0,
        "level" => "15-35",
        "encounterRate" => "84%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $gyarados0,
        "level" => "15-25",
        "encounterRate" => "15%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $slowpoke0,
        "level" => "25-35",
        "encounterRate" => "1%",
        "ifCaught" => ""
    ]
];
$route13 = [
    [
        "pokemon" => $bellsprout0,
        "level" => "22-26",
        "encounterRate" => "35%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $venonat0,
        "level" => "24-26",
        "encounterRate" => "30%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $pidgey0,
        "level" => "25-27",
        "encounterRate" => "20%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $pidgeotto0,
        "level" => "29",
        "encounterRate" => "5%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $weepinbell0,
        "level" => "28-30",
        "encounterRate" => "5%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $ditto0,
        "level" => "25",
        "encounterRate" => "5%",
        "ifCaught" => ""
    ]
];
$route13superrod = [
    [
        "pokemon" => $krabby0,
        "level" => "15-35",
        "encounterRate" => "84%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $gyarados0,
        "level" => "15-25",
        "encounterRate" => "15%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $slowpoke0,
        "level" => "25-35",
        "encounterRate" => "1%",
        "ifCaught" => ""
    ]
];
$safariZoneArea1 = [
    [
        "pokemon" => $nidoranf0,
        "level" => "22",
        "encounterRate" => "20%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $exeggcute0,
        "level" => "24-25",
        "encounterRate" => "20%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $rhyhorn0,
        "level" => "25",
        "encounterRate" => "20%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $venonat0,
        "level" => "22",
        "encounterRate" => "15%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $nidorina0,
        "level" => "31",
        "encounterRate" => "10%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $nidorino0,
        "level" => "31",
        "encounterRate" => "5%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $parasect0,
        "level" => "30",
        "encounterRate" => "5%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $pinsir0,
        "level" => "23",
        "encounterRate" => "4%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $chansey0,
        "level" => "23",
        "encounterRate" => "1%",
        "ifCaught" => ""
    ]
];
$safariZoneArea2 = [
    [
        "pokemon" => $nidoranf0,
        "level" => "24",
        "encounterRate" => "20%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $doduo0,
        "level" => "26",
        "encounterRate" => "20%",
        "ifCaught" => "failed"
    ],
    [
        "pokemon" => $exeggcute0,
        "level" => "23-25",
        "encounterRate" => "20%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $paras0,
        "level" => "22",
        "encounterRate" => "15%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $nidorina0,
        "level" => "33",
        "encounterRate" => "15%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $nidoranm0,
        "level" => "24",
        "encounterRate" => "5%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $parasect0,
        "level" => "25",
        "encounterRate" => "5%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $kangaskhan0,
        "level" => "25",
        "encounterRate" => "4%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $pinsir0,
        "level" => "28",
        "encounterRate" => "1%",
        "ifCaught" => ""
    ]
];
$safariZoneArea3 = [
    [
        "pokemon" => $nidoranf0,
        "level" => "30",
        "encounterRate" => "20%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $exeggcute0,
        "level" => "25-27",
        "encounterRate" => "20%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $rhyhorn0,
        "level" => "26",
        "encounterRate" => "20%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $paras0,
        "level" => "23",
        "encounterRate" => "15%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $nidorina0,
        "level" => "30",
        "encounterRate" => "10%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $nidorino0,
        "level" => "30",
        "encounterRate" => "5%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $venomoth0,
        "level" => "32",
        "encounterRate" => "5%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $chansey0,
        "level" => "26",
        "encounterRate" => "4%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $tauros0,
        "level" => "32",
        "encounterRate" => "1%",
        "ifCaught" => ""
    ]
];
$safariZoneArea4 = [
    [
        "pokemon" => $nidoranf0,
        "level" => "22",
        "encounterRate" => "20%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $doduo0,
        "level" => "26",
        "encounterRate" => "20%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $exeggcute0,
        "level" => "25-27",
        "encounterRate" => "20%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $venonat0,
        "level" => "23",
        "encounterRate" => "15%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $nidorina0,
        "level" => "30",
        "encounterRate" => "10%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $nidoranm0,
        "level" => "30",
        "encounterRate" => "5%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $venomoth0,
        "level" => "32",
        "encounterRate" => "5%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $tauros0,
        "level" => "25",
        "encounterRate" => "4%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $kangaskhan0,
        "level" => "28",
        "encounterRate" => "1%",
        "ifCaught" => ""
    ]
];
$safariZonesuperrod = [
    [
        "pokemon" => $goldeen0,
        "level" => "15-25",
        "encounterRate" => "40%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $seaking0,
        "level" => "20-30",
        "encounterRate" => "40%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $dratini0,
        "level" => "15-25",
        "encounterRate" => "15%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $slowpoke0,
        "level" => "15-35",
        "encounterRate" => "4%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $dragonair0,
        "level" => "25-35",
        "encounterRate" => "1%",
        "ifCaught" => ""
    ]
];
$fuchsiacitysuperrod = [
    [
        "pokemon" => $goldeen0,
        "level" => "15-25",
        "encounterRate" => "40%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $seaking0,
        "level" => "20-30",
        "encounterRate" => "40%",
        "ifCaught" => "success"
    ],
    [
        "pokemon" => $gyarados0,
        "level" => "15-25",
        "encounterRate" => "15%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $slowpoke0,
        "level" => "15-35",
        "encounterRate" => "5%",
        "ifCaught" => ""
    ]
];
$route17 = [
    [
        "pokemon" => $doduo0,
        "level" => "24-28",
        "encounterRate" => "35%",
        "ifCaught" => "success"
    ],
    [
        "pokemon" => $spearow0,
        "level" => "20-22",
        "encounterRate" => "30%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $raticate0,
        "level" => "25-29",
        "encounterRate" => "25%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $rattata0,
        "level" => "22",
        "encounterRate" => "5%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $fearow0,
        "level" => "25-27",
        "encounterRate" => "5%",
        "ifCaught" => "already"
    ]
];
$vermillionCitysuperrod = [
    [
        "pokemon" => $staryu0,
        "level" => "15-25",
        "encounterRate" => "40%",
        "ifCaught" => "success"
    ],
    [
        "pokemon" => $krabby0,
        "level" => "15-25",
        "encounterRate" => "40%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $gyarados0,
        "level" => "15-25",
        "encounterRate" => "15%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $horsea0,
        "level" => "25-30",
        "encounterRate" => "4%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $slowpoke0,
        "level" => "25-35",
        "encounterRate" => "1%",
        "ifCaught" => ""
    ]
];
$silphco = [
    [
        "pokemon" => $lapras0,
        "level" => "25",
        "encounterRate" => "Gift",
        "ifCaught" => "success"
    ]
];
$saffronCity = [
    [
        "pokemon" => $hitmonlee0,
        "level" => "30",
        "encounterRate" => "Gift",
        "ifCaught" => "success"
    ],
    [
        "pokemon" => $hitmonchan0,
        "level" => "30",
        "encounterRate" => "Gift",
        "ifCaught" => ""
    ]
];
$route19 = [
    [
        "pokemon" => $tentacool0,
        "level" => "5-40",
        "encounterRate" => "100%",
        "ifCaught" => "success"
    ]
];
$route19superrod = [
    [
        "pokemon" => $krabby0,
        "level" => "15-30",
        "encounterRate" => "84%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $gyarados0,
        "level" => "15-25",
        "encounterRate" => "15%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $slowpoke0,
        "level" => "25-35",
        "encounterRate" => "1%",
        "ifCaught" => ""
    ]
];
$pallettown = [
    [
        "pokemon" => $tentacool0,
        "level" => "5-40",
        "encounterRate" => "100%",
        "ifCaught" => "already"
    ]
];
$pallettownsuperrod = [
    [
        "pokemon" => $staryu0,
        "level" => "15-25",
        "encounterRate" => "40%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $krabby0,
        "level" => "15-25",
        "encounterRate" => "40%",
        "ifCaught" => "success"
    ],
    [
        "pokemon" => $gyarados0,
        "level" => "15-25",
        "encounterRate" => "15%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $kingler0,
        "level" => "25-35",
        "encounterRate" => "4%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $slowpoke0,
        "level" => "25-35",
        "encounterRate" => "1%",
        "ifCaught" => ""
    ]
];
$route21 = [
    [
        "pokemon" => $tangela0,
        "level" => "15-25",
        "encounterRate" => "40%",
        "ifCaught" => "success"
    ]
];
$route21surf = [
    [
        "pokemon" => $tentacool0,
        "level" => "5-40",
        "encounterRate" => "100%",
        "ifCaught" => "already"
    ]
];
$route21superrod = [
    [
        "pokemon" => $krabby0,
        "level" => "15-30",
        "encounterRate" => "84%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $gyarados0,
        "level" => "15-25",
        "encounterRate" => "15%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $slowpoke0,
        "level" => "25-35",
        "encounterRate" => "1%",
        "ifCaught" => ""
    ]
];
$cinnabarisland = [
    [
        "pokemon" => $tentacool0,
        "level" => "5-40",
        "encounterRate" => "100%",
        "ifCaught" => "already"
    ]
];
$cinnabarislandsuperrod = [
    [
        "pokemon" => $staryu0,
        "level" => "15-25",
        "encounterRate" => "40%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $krabby0,
        "level" => "15-25",
        "encounterRate" => "40%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $gyarados0,
        "level" => "15-25",
        "encounterRate" => "15%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $kingler0,
        "level" => "25-35",
        "encounterRate" => "4%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $slowpoke0,
        "level" => "25-35",
        "encounterRate" => "1%",
        "ifCaught" => ""
    ]
];
$mansion = [
    [
        "pokemon" => $raticate0,
        "level" => "32-36",
        "encounterRate" => "30%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $grimer0,
        "level" => "28-30",
        "encounterRate" => "30%",
        "ifCaught" => "success"
    ],
    [
        "pokemon" => $rattata0,
        "level" => "26-28",
        "encounterRate" => "1f-3f: 15%, <br> B1f: 5%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $vulpix0,
        "level" => "30-32",
        "encounterRate" => "15%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $koffing0,
        "level" => "28",
        "encounterRate" => "5%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $muk0,
        "level" => "32",
        "encounterRate" => "5%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $ditto0,
        "level" => "30",
        "encounterRate" => "B1f: 10%",
        "ifCaught" => ""
    ]
];
$route20 = [
    [
        "pokemon" => $tentacool0,
        "level" => "5-40",
        "encounterRate" => "100%",
        "ifCaught" => "already"
    ]
];
$seafoamislands = [
    [
        "pokemon" => $slowpoke0,
        "level" => "26-33",
        "encounterRate" => "55%",
        "ifCaught" => "success"
    ],
    [
        "pokemon" => $zubat0,
        "level" => "22-26",
        "encounterRate" => "34%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $golbat0,
        "level" => "26-30",
        "encounterRate" => "11%",
        "ifCaught" => "already"
    ]
];
$kindleroad = [
    [
        "pokemon" => $ponyta0,
        "level" => "31-34",
        "encounterRate" => "30%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $spearow0,
        "level" => "30-32",
        "encounterRate" => "25%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $fearow0,
        "level" => "36",
        "encounterRate" => "10%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $meowth0,
        "level" => "31",
        "encounterRate" => "10%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $geodude0,
        "level" => "31",
        "encounterRate" => "10%",
        "ifCaught" => "failed"
    ],
    [
        "pokemon" => $persian0,
        "level" => "37-40",
        "encounterRate" => "5%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $rapidash0,
        "level" => "37-40",
        "encounterRate" => "5%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $slowpoke0,
        "level" => "34",
        "encounterRate" => "5%",
        "ifCaught" => "already"
    ]
];
$capebrink = [
    [
        "pokemon" => $bellsprout0,
        "level" => "30-32",
        "encounterRate" => "30%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $spearow0,
        "level" => "31",
        "encounterRate" => "20%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $weepinbell0,
        "level" => "36-38",
        "encounterRate" => "15%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $fearow0,
        "level" => "36",
        "encounterRate" => "10%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $meowth0,
        "level" => "31",
        "encounterRate" => "10%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $persian0,
        "level" => "37-40",
        "encounterRate" => "5%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $slowpoke0,
        "level" => "31",
        "encounterRate" => "5%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $slowbro0,
        "level" => "37-40",
        "encounterRate" => "5%",
        "ifCaught" => "already"
    ]
];
$capebrinksuperrod = [
    [
        "pokemon" => $poliwag0,
        "level" => "15-25",
        "encounterRate" => "40%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $poliwhirl0,
        "level" => "20-30",
        "encounterRate" => "40%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $gyarados0,
        "level" => "15-25",
        "encounterRate" => "15%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $slowpoke0,
        "level" => "15-35",
        "encounterRate" => "15%",
        "ifCaught" => "already"
    ]
];
$capebrinkgoodrod = [
    [
        "pokemon" => $poliwag0,
        "level" => "5-15",
        "encounterRate" => "60%",
        "ifCaught" => "success"
    ],
    [
        "pokemon" => $goldeen0,
        "level" => "5-15",
        "encounterRate" => "20%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $magikarp0,
        "level" => "5-15",
        "encounterRate" => "20%",
        "ifCaught" => "already"
    ]
];
$bondbridge = [
    [
        "pokemon" => $pidgey0,
        "level" => "29-32",
        "encounterRate" => "30%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $bellsprout0,
        "level" => "31",
        "encounterRate" => "20%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $pidgeotto0,
        "level" => "34-40",
        "encounterRate" => "15%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $weepinbell0,
        "level" => "36",
        "encounterRate" => "10%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $meowth0,
        "level" => "31",
        "encounterRate" => "10%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $venonat0,
        "level" => "34",
        "encounterRate" => "5%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $persian0,
        "level" => "37-40",
        "encounterRate" => "5%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $slowpoke0,
        "level" => "31",
        "encounterRate" => "5%",
        "ifCaught" => "already"
    ]
];
$berryforest = [
    [
        "pokemon" => $pidgeotto0,
        "level" => "37",
        "encounterRate" => "20%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $weepinbell0,
        "level" => "35",
        "encounterRate" => "20%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $pidgey0,
        "level" => "32",
        "encounterRate" => "10%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $bellsprout0,
        "level" => "30",
        "encounterRate" => "10%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $venonat0,
        "level" => "34",
        "encounterRate" => "10%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $drowzee0,
        "level" => "34",
        "encounterRate" => "10%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $venomoth0,
        "level" => "37-40",
        "encounterRate" => "5%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $slowpoke0,
        "level" => "31",
        "encounterRate" => "5%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $hypno0,
        "level" => "Normal: 37-40, <br> Special: 30",
        "encounterRate" => "Normal: 5%, <br> Special: 100%",
        "ifCaught" => "success"
    ],
    [
        "pokemon" => $exeggcute0,
        "level" => "35",
        "encounterRate" => "5%",
        "ifCaught" => ""
    ]
];
$victoryroad = [
    [
        "pokemon" => $machop0,
        "level" => "34",
        "encounterRate" => "20%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $geodude0,
        "level" => "34",
        "encounterRate" => "20%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $onix0,
        "level" => "45-48",
        "encounterRate" => "20%",
        "ifCaught" => ""
    ],
    [
        "pokemon" => $zubat0,
        "level" => "34",
        "encounterRate" => "10%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $primeape0,
        "level" => "42",
        "encounterRate" => "10%",
        "ifCaught" => "success"
    ],
    [
        "pokemon" => $sandslash0,
        "level" => "46",
        "encounterRate" => "5%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $golbat0,
        "level" => "46",
        "encounterRate" => "5%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $machoke0,
        "level" => "46",
        "encounterRate" => "5%",
        "ifCaught" => "already"
    ],
    [
        "pokemon" => $marowak0,
        "level" => "46-48",
        "encounterRate" => "5%",
        "ifCaught" => ""
    ]
];

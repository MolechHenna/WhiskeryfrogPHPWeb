<?php

function populateParty($tableData)
{
    echo '<table border="1" class="customTable">';
    echo '<tbody>';
    echo '<tr>';
    foreach ($tableData as $data) {
        echo '<td>' . htmlspecialchars($data['name']) . '</td>';
    }
    echo '</tr>';
    echo '<tr>';
    foreach ($tableData as $data) {
        echo '<td><img class="nopad pixelate-filter" src="' . htmlspecialchars($data["image"]) . '" /></td>';
    }
    echo '</tr>';
    echo '<tr>';
    foreach ($tableData as $data) {
        echo '<td>' . htmlspecialchars($data['level']) . '</td>';
    }
    echo '</tr>';
    echo '<tr>';
    foreach ($tableData as $data) {
        echo '<td><img class="nopad pixelate-filter" src="' . htmlspecialchars($data["type"]) . '" /></td>';
    }
    echo '</tr>';
    echo '<tbody>';
    echo '</table>';
}

//episode1
$party1 = [
    [
        "name" => "GILAMONSTR",
        "image" => $squirtle,
        "level" => "Lv.9",
        "type" => $water
    ],
    [
        "name" => "LIZARD",
        "image" => $weedle,
        "level" => "Lv.4",
        "type" => $bugPoison
    ],
    [
        "name" => "NEWT",
        "image" => $rattata,
        "level" => "Lv.3",
        "type" => $normal
    ],
    [
        "name" => "CAIMAN",
        "image" => $caterpie,
        "level" => "Lv.4",
        "type" => $bug
    ]
];
//episode2
$party2 = [
    [
        "name" => "GILAMONSTR",
        "image" => $squirtle,
        "level" => "Lv.12",
        "type" => $water
    ],
    [
        "name" => "LIZARD",
        "image" => $beedrill,
        "level" => "Lv.10",
        "type" => $bugPoison
    ],
    [
        "name" => "NEWT",
        "image" => $rattata,
        "level" => "Lv.10",
        "type" => $normal
    ],
    [
        "name" => "CAIMAN",
        "image" => $butterfree,
        "level" => "Lv.10",
        "type" => $bugFlying
    ]
];
//episode3
$party3_1 = [
    [
        "name" => "GILAMONSTR",
        "image" => $wartortle,
        "level" => "Lv.16",
        "type" => $water
    ],
    [
        "name" => "LIZARD",
        "image" => $beedrill,
        "level" => "Lv.14",
        "type" => $bugPoison
    ],
    [
        "name" => "NEWT",
        "image" => $rattata,
        "level" => "Lv.14",
        "type" => $normal
    ]
];
$party3_2 = [
    [
        "name" => "CAIMAN",
        "image" => $butterfree,
        "level" => "Lv.15",
        "type" => $bugFlying
    ],
    [
        "name" => "IGUANA",
        "image" => $nidoranf,
        "level" => "Lv.7",
        "type" => $poison
    ]
];
//episode4
$party4_1 = [
    [
        "name" => "GILAMONSTR",
        "image" => $wartortle,
        "level" => "Lv.17",
        "type" => $water
    ],
    [
        "name" => "LIZARD",
        "image" => $beedrill,
        "level" => "Lv.14",
        "type" => $bugPoison
    ],
    [
        "name" => "NEWT",
        "image" => $rattata,
        "level" => "Lv.14",
        "type" => $normal
    ]
];
$party4_2 = [
    [
        "name" => "CAIMAN",
        "image" => $butterfree,
        "level" => "Lv.15",
        "type" => $bugFlying
    ],
    [
        "name" => "IGUANA",
        "image" => $nidorina,
        "level" => "Lv.16",
        "type" => $poison
    ],
    [
        "name" => "FLYLIZARD",
        "image" => $zubat,
        "level" => "Lv.10",
        "type" => $poisonFlying
    ]
];
//episode5
$party5_1 = [
    [
        "name" => "GILAMONSTR",
        "image" => $wartortle,
        "level" => "Lv.20",
        "type" => $water
    ],
    [
        "name" => "GECKO",
        "image" => $bellsprout,
        "level" => "Lv.13",
        "type" => $grassPoison
    ],
    [
        "name" => "NEWT",
        "image" => $rattata,
        "level" => "Lv.14",
        "type" => $normal
    ]
];
$party5_2 = [
    [
        "name" => "CAIMAN",
        "image" => $butterfree,
        "level" => "Lv.20",
        "type" => $bugFlying
    ],
    [
        "name" => "IGUANA",
        "image" => $nidorina,
        "level" => "Lv.18",
        "type" => $poison
    ],
    [
        "name" => "FLYLIZARD",
        "image" => $zubat,
        "level" => "Lv.13",
        "type" => $poisonFlying
    ]
];
//episode6
$party6_1 = [
    [
        "name" => "GILAMONSTR",
        "image" => $wartortle,
        "level" => "Lv.21",
        "type" => $water
    ],
    [
        "name" => "GECKO",
        "image" => $bellsprout,
        "level" => "Lv.18",
        "type" => $grassPoison
    ],
    [
        "name" => "NEWT",
        "image" => $raticate,
        "level" => "Lv20",
        "type" => $normal
    ]
];
$party6_2 = [
    [
        "name" => "CAIMAN",
        "image" => $butterfree,
        "level" => "Lv.20",
        "type" => $bugFlying
    ],
    [
        "name" => "IGUANA",
        "image" => $nidorina,
        "level" => "Lv.20",
        "type" => $poison
    ],
    [
        "name" => "CROCODILE",
        "image" => $fearow,
        "level" => "Lv.20",
        "type" => $normalFlying
    ]
];
//episode7
$party7_1 = [
    [
        "name" => "GILAMONSTR",
        "image" => $wartortle,
        "level" => "Lv.21",
        "type" => $water
    ],
    [
        "name" => "GECKO",
        "image" => $weepinbell,
        "level" => "Lv.23",
        "type" => $grassPoison
    ],
    [
        "name" => "NEWT",
        "image" => $raticate,
        "level" => "Lv21",
        "type" => $normal
    ]
];
$party7_2 = [
    [
        "name" => "CAIMAN",
        "image" => $butterfree,
        "level" => "Lv.21",
        "type" => $bugFlying
    ],
    [
        "name" => "IGUANA",
        "image" => $nidorina,
        "level" => "Lv.21",
        "type" => $poison
    ],
    [
        "name" => "CROCODILE",
        "image" => $fearow,
        "level" => "Lv.20",
        "type" => $normalFlying
    ]
];
//episode8
$party8_1 = [
    [
        "name" => "GILAMONSTR",
        "image" => $wartortle,
        "level" => "Lv.23",
        "type" => $water
    ],
    [
        "name" => "GECKO",
        "image" => $weepinbell,
        "level" => "Lv.23",
        "type" => $grassPoison
    ],
    [
        "name" => "NEWT",
        "image" => $raticate,
        "level" => "Lv22",
        "type" => $normal
    ]
];
$party8_2 = [
    [
        "name" => "CAIMAN",
        "image" => $butterfree,
        "level" => "Lv.21",
        "type" => $bugFlying
    ],
    [
        "name" => "IGUANA",
        "image" => $nidorina,
        "level" => "Lv.22",
        "type" => $poison
    ],
    [
        "name" => "CROCODILE",
        "image" => $fearow,
        "level" => "Lv.22",
        "type" => $normalFlying
    ]
];
//episode9
$party9_1 = [
    [
        "name" => "GILAMONSTR",
        "image" => $wartortle,
        "level" => "Lv.23",
        "type" => $water
    ],
    [
        "name" => "GECKO",
        "image" => $weepinbell,
        "level" => "Lv.23",
        "type" => $grassPoison
    ],
    [
        "name" => "NEWT",
        "image" => $raticate,
        "level" => "Lv24",
        "type" => $normal
    ]
];
$party9_2 = [
    [
        "name" => "CAIMAN",
        "image" => $butterfree,
        "level" => "Lv.21",
        "type" => $bugFlying
    ],
    [
        "name" => "IGUANA",
        "image" => $nidorina,
        "level" => "Lv.22",
        "type" => $poison
    ],
    [
        "name" => "CROCODILE",
        "image" => $fearow,
        "level" => "Lv.22",
        "type" => $normalFlying
    ]
];
//episode10
$party10_1 = [
    [
        "name" => "GILAMONSTR",
        "image" => $wartortle,
        "level" => "Lv.24",
        "type" => $water
    ],
    [
        "name" => "GECKO",
        "image" => $weepinbell,
        "level" => "Lv.23",
        "type" => $grassPoison
    ],
    [
        "name" => "NEWT",
        "image" => $raticate,
        "level" => "Lv24",
        "type" => $normal
    ]
];
$party10_2 = [
    [
        "name" => "CAIMAN",
        "image" => $butterfree,
        "level" => "Lv.24",
        "type" => $bugFlying
    ],
    [
        "name" => "IGUANA",
        "image" => $nidorina,
        "level" => "Lv.22",
        "type" => $poison
    ],
    [
        "name" => "CROCODILE",
        "image" => $fearow,
        "level" => "Lv.24",
        "type" => $normalFlying
    ]
];
//episode11
$party11_1 = [
    [
        "name" => "GILAMONSTR",
        "image" => $wartortle,
        "level" => "Lv.28",
        "type" => $water
    ],
    [
        "name" => "GECKO",
        "image" => $weepinbell,
        "level" => "Lv.26",
        "type" => $grassPoison
    ],
    [
        "name" => "NEWT",
        "image" => $raticate,
        "level" => "Lv24",
        "type" => $normal
    ]
];
$party11_2 = [
    [
        "name" => "CAIMAN",
        "image" => $butterfree,
        "level" => "Lv.24",
        "type" => $bugFlying
    ],
    [
        "name" => "IGUANA",
        "image" => $nidorina,
        "level" => "Lv.22",
        "type" => $poison
    ],
    [
        "name" => "CROCODILE",
        "image" => $fearow,
        "level" => "Lv.24",
        "type" => $normalFlying
    ]
];
//episode12
$party12_1 = [
    [
        "name" => "GILAMONSTR",
        "image" => $wartortle,
        "level" => "Lv.28",
        "type" => $water
    ],
    [
        "name" => "GECKO",
        "image" => $weepinbell,
        "level" => "Lv.27",
        "type" => $grassPoison
    ],
    [
        "name" => "NEWT",
        "image" => $raticate,
        "level" => "Lv26",
        "type" => $normal
    ]
];
$party12_2 = [
    [
        "name" => "CAIMAN",
        "image" => $butterfree,
        "level" => "Lv.25",
        "type" => $bugFlying
    ],
    [
        "name" => "IGUANA",
        "image" => $nidorina,
        "level" => "Lv.27",
        "type" => $poison
    ],
    [
        "name" => "CROCODILE",
        "image" => $fearow,
        "level" => "Lv.26",
        "type" => $normalFlying
    ]
];
//episode13
$party13_1 = [
    [
        "name" => "GILAMONSTR",
        "image" => $wartortle,
        "level" => "Lv.29",
        "type" => $water
    ],
    [
        "name" => "GECKO",
        "image" => $weepinbell,
        "level" => "Lv.27",
        "type" => $grassPoison
    ],
    [
        "name" => "NEWT",
        "image" => $raticate,
        "level" => "Lv27",
        "type" => $normal
    ]
];
$party13_2 = [
    [
        "name" => "CAIMAN",
        "image" => $butterfree,
        "level" => "Lv.26",
        "type" => $bugFlying
    ],
    [
        "name" => "IGUANA",
        "image" => $nidorina,
        "level" => "Lv.28",
        "type" => $poison
    ],
    [
        "name" => "CROCODILE",
        "image" => $fearow,
        "level" => "Lv.28",
        "type" => $normalFlying
    ]
];
//episode14
$party14_1 = [
    [
        "name" => "GILAMONSTR",
        "image" => $wartortle,
        "level" => "Lv.29",
        "type" => $water
    ],
    [
        "name" => "GECKO",
        "image" => $weepinbell,
        "level" => "Lv.28",
        "type" => $grassPoison
    ],
    [
        "name" => "NEWT",
        "image" => $raticate,
        "level" => "Lv28",
        "type" => $normal
    ]
];
$party14_2 = [
    [
        "name" => "CAIMAN",
        "image" => $butterfree,
        "level" => "Lv.30",
        "type" => $bugFlying
    ],
    [
        "name" => "IGUANA",
        "image" => $nidorina,
        "level" => "Lv.29",
        "type" => $poison
    ],
    [
        "name" => "CROCODILE",
        "image" => $fearow,
        "level" => "Lv.28",
        "type" => $normalFlying
    ]
];
//episode15
$party15_1 = [
    [
        "name" => "GILAMONSTR",
        "image" => $wartortle,
        "level" => "Lv.30",
        "type" => $water
    ],
    [
        "name" => "GECKO",
        "image" => $weepinbell,
        "level" => "Lv.28",
        "type" => $grassPoison
    ],
    [
        "name" => "KOMODO",
        "image" => $sandshrew,
        "level" => "Lv.12",
        "type" => $ground
    ]
];
$party15_2 = [
    [
        "name" => "CAIMAN",
        "image" => $butterfree,
        "level" => "Lv.30",
        "type" => $bugFlying
    ],
    [
        "name" => "IGUANA",
        "image" => $nidorina,
        "level" => "Lv.30",
        "type" => $poison
    ],
    [
        "name" => "CROCODILE",
        "image" => $fearow,
        "level" => "Lv.30",
        "type" => $normalFlying
    ]
];
//episode16
$party16_1 = [
    [
        "name" => "GILAMONSTR",
        "image" => $wartortle,
        "level" => "Lv.30",
        "type" => $water
    ],
    [
        "name" => "EGG",
        "image" => $voltorb,
        "level" => "Lv.16",
        "type" => $electric
    ],
    [
        "name" => "KOMODO",
        "image" => $sandslash,
        "level" => "Lv.22",
        "type" => $ground
    ]
];
$party16_2 = [
    [
        "name" => "ANACONDA",
        "image" => $snorlax,
        "level" => "Lv.32",
        "type" => $normal
    ],
    [
        "name" => "IGUANA",
        "image" => $nidorina,
        "level" => "Lv.31",
        "type" => $poison
    ],
    [
        "name" => "CROCODILE",
        "image" => $fearow,
        "level" => "Lv.32",
        "type" => $normalFlying
    ]
];
//episode17
$party17_1 = [
    [
        "name" => "GILAMONSTR",
        "image" => $blastoise,
        "level" => "Lv.39",
        "type" => $water
    ],
    [
        "name" => "EGG",
        "image" => $electrode,
        "level" => "Lv.38",
        "type" => $electric
    ],
    [
        "name" => "KOMODO",
        "image" => $sandslash,
        "level" => "Lv.39",
        "type" => $ground
    ]
];
$party17_2 = [
    [
        "name" => "RATTLESNEK",
        "image" => $starmie,
        "level" => "Lv.37",
        "type" => $waterPsychic
    ],
    [
        "name" => "IGUANA",
        "image" => $nidorina,
        "level" => "Lv.36",
        "type" => $poison
    ],
    [
        "name" => "CROCODILE",
        "image" => $fearow,
        "level" => "Lv.38",
        "type" => $normalFlying
    ]
];
//episode18
$party18_1 = [
    [
        "name" => "GILAMONSTR",
        "image" => $blastoise,
        "level" => "Lv.40",
        "type" => $water
    ],
    [
        "name" => "EGG",
        "image" => $electrode,
        "level" => "Lv.40",
        "type" => $electric
    ],
    [
        "name" => "KOMODO",
        "image" => $sandslash,
        "level" => "Lv.40",
        "type" => $ground
    ]
];
$party18_2 = [
    [
        "name" => "RATTLESNEK",
        "image" => $starmie,
        "level" => "Lv.39",
        "type" => $waterPsychic
    ],
    [
        "name" => "IGUANA",
        "image" => $nidorina,
        "level" => "Lv.40",
        "type" => $poison
    ],
    [
        "name" => "CROCODILE",
        "image" => $fearow,
        "level" => "Lv.40",
        "type" => $normalFlying
    ]
];
//episode19
$party19_1 = [
    [
        "name" => "GILAMONSTR",
        "image" => $blastoise,
        "level" => "Lv.40",
        "type" => $water
    ],
    [
        "name" => "EGG",
        "image" => $electrode,
        "level" => "Lv.40",
        "type" => $electric
    ],
    [
        "name" => "KOMODO",
        "image" => $sandslash,
        "level" => "Lv.40",
        "type" => $ground
    ]
];
$party19_2 = [
    [
        "name" => "RATTLESNEK",
        "image" => $starmie,
        "level" => "Lv.41",
        "type" => $waterPsychic
    ],
    [
        "name" => "IGUANA",
        "image" => $nidorina,
        "level" => "Lv.40",
        "type" => $poison
    ],
    [
        "name" => "CROCODILE",
        "image" => $fearow,
        "level" => "Lv.40",
        "type" => $normalFlying
    ]
];
//episode20
$party20_1 = [
    [
        "name" => "CHAMELEON",
        "image" => $hitmonlee,
        "level" => "Lv.25",
        "type" => $fighting
    ],
    [
        "name" => "EGG",
        "image" => $electrode,
        "level" => "Lv.40",
        "type" => $electric
    ],
    [
        "name" => "MESOSAURUS",
        "image" => $lapras,
        "level" => "Lv.25",
        "type" => $waterIce
    ]
];
$party20_2 = [
    [
        "name" => "RATTLESNEK",
        "image" => $starmie,
        "level" => "Lv.41",
        "type" => $waterPsychic
    ],
    [
        "name" => "IGUANA",
        "image" => $nidorina,
        "level" => "Lv.40",
        "type" => $poison
    ],
    [
        "name" => "BOA",
        "image" => $doduo,
        "level" => "Lv.24",
        "type" => $normalFlying
    ]
];
//episode21
$party21_1 = [
    [
        "name" => "CHAMELEON",
        "image" => $hitmonlee,
        "level" => "Lv.40",
        "type" => $fighting
    ],
    [
        "name" => "EGG",
        "image" => $electrode,
        "level" => "Lv.46",
        "type" => $electric
    ],
    [
        "name" => "MESOSAURUS",
        "image" => $lapras,
        "level" => "Lv.40",
        "type" => $waterIce
    ]
];
$party21_2 = [
    [
        "name" => "RATTLESNEK",
        "image" => $starmie,
        "level" => "Lv.42",
        "type" => $waterPsychic
    ],
    [
        "name" => "IGUANA",
        "image" => $nidorina,
        "level" => "Lv.40",
        "type" => $poison
    ],
    [
        "name" => "BOA",
        "image" => $dodrio,
        "level" => "Lv.42",
        "type" => $normalFlying
    ]
];
//episode22
$party22_1 = [
    [
        "name" => "CHAMELEON",
        "image" => $hitmonlee,
        "level" => "Lv.47",
        "type" => $fighting
    ],
    [
        "name" => "EGG",
        "image" => $electrode,
        "level" => "Lv.47",
        "type" => $electric
    ],
    [
        "name" => "MESOSAURUS",
        "image" => $lapras,
        "level" => "Lv.47",
        "type" => $waterIce
    ]
];
$party22_2 = [
    [
        "name" => "RATTLESNEK",
        "image" => $starmie,
        "level" => "Lv.44",
        "type" => $waterPsychic
    ],
    [
        "name" => "IGUANA",
        "image" => $nidorina,
        "level" => "Lv.47",
        "type" => $poison
    ],
    [
        "name" => "BOA",
        "image" => $dodrio,
        "level" => "Lv.47",
        "type" => $normalFlying
    ]
];
//episode23
$party23_1 = [
    [
        "name" => "CHAMELEON",
        "image" => $hitmonlee,
        "level" => "Lv.50",
        "type" => $fighting
    ],
    [
        "name" => "EGG",
        "image" => $electrode,
        "level" => "Lv.50",
        "type" => $electric
    ],
    [
        "name" => "MESOSAURUS",
        "image" => $lapras,
        "level" => "Lv.50",
        "type" => $waterIce
    ]
];
$party23_2 = [
    [
        "name" => "RATTLESNEK",
        "image" => $starmie,
        "level" => "Lv.48",
        "type" => $waterPsychic
    ],
    [
        "name" => "IGUANA",
        "image" => $nidorina,
        "level" => "Lv.50",
        "type" => $poison
    ],
    [
        "name" => "BOA",
        "image" => $dodrio,
        "level" => "Lv.50",
        "type" => $normalFlying
    ]
];
//episode24
$party24_1 = [
    [
        "name" => "CHAMELEON",
        "image" => $hitmonlee,
        "level" => "Lv.50",
        "type" => $fighting
    ],
    [
        "name" => "EGG",
        "image" => $electrode,
        "level" => "Lv.50",
        "type" => $electric
    ],
    [
        "name" => "MESOSAURUS",
        "image" => $lapras,
        "level" => "Lv.50",
        "type" => $waterIce
    ]
];
$party24_2 = [
    [
        "name" => "RATTLESNEK",
        "image" => $starmie,
        "level" => "Lv.50",
        "type" => $waterPsychic
    ],
    [
        "name" => "IGUANA",
        "image" => $nidorina,
        "level" => "Lv.50",
        "type" => $poison
    ],
    [
        "name" => "BOA",
        "image" => $dodrio,
        "level" => "Lv.50",
        "type" => $normalFlying
    ]
];
//episode25
$party25_1 = [
    [
        "name" => "CHAMELEON",
        "image" => $hitmonlee,
        "level" => "Lv.51",
        "type" => $fighting
    ],
    [
        "name" => "EGG",
        "image" => $electrode,
        "level" => "Lv.50",
        "type" => $electric
    ],
    [
        "name" => "MESOSAURUS",
        "image" => $lapras,
        "level" => "Lv.50",
        "type" => $waterIce
    ]
];
$party25_2 = [
    [
        "name" => "RATTLESNEK",
        "image" => $starmie,
        "level" => "Lv.50",
        "type" => $waterPsychic
    ],
    [
        "name" => "IGUANA",
        "image" => $nidoqueen,
        "level" => "Lv.53",
        "type" => $poisonGround
    ],
    [
        "name" => "BOA",
        "image" => $dodrio,
        "level" => "Lv.50",
        "type" => $normalFlying
    ]
];
//episode26
$party26_1 = [
    [
        "name" => "CHAMELEON",
        "image" => $hitmonlee,
        "level" => "Lv.51",
        "type" => $fighting
    ],
    [
        "name" => "EGG",
        "image" => $electrode,
        "level" => "Lv.52",
        "type" => $electric
    ],
    [
        "name" => "MESOSAURUS",
        "image" => $lapras,
        "level" => "Lv.51",
        "type" => $waterIce
    ]
];
$party26_2 = [
    [
        "name" => "RATTLESNEK",
        "image" => $starmie,
        "level" => "Lv.53",
        "type" => $waterPsychic
    ],
    [
        "name" => "IGUANA",
        "image" => $nidoqueen,
        "level" => "Lv.53",
        "type" => $poisonGround
    ],
    [
        "name" => "BOA",
        "image" => $dodrio,
        "level" => "Lv.53",
        "type" => $normalFlying
    ]
];
//episode27
$party27_1 = [
    [
        "name" => "CHAMELEON",
        "image" => $hitmonlee,
        "level" => "Lv.59",
        "type" => $fighting
    ],
    [
        "name" => "EGG",
        "image" => $electrode,
        "level" => "Lv.59",
        "type" => $electric
    ],
    [
        "name" => "MESOSAURUS",
        "image" => $lapras,
        "level" => "Lv.59",
        "type" => $waterIce
    ]
];
$party27_2 = [
    [
        "name" => "RATTLESNEK",
        "image" => $starmie,
        "level" => "Lv.59",
        "type" => $waterPsychic
    ],
    [
        "name" => "IGUANA",
        "image" => $nidoqueen,
        "level" => "Lv.59",
        "type" => $poisonGround
    ],
    [
        "name" => "BOA",
        "image" => $dodrio,
        "level" => "Lv.59",
        "type" => $normalFlying
    ]
];
//episode28
$party28_1 = [
    [
        "name" => "CHAMELEON",
        "image" => $hitmonlee,
        "level" => "Lv.59",
        "type" => $fighting
    ],
    [
        "name" => "EGG",
        "image" => $electrode,
        "level" => "Lv.59",
        "type" => $electric
    ],
    [
        "name" => "MESOSAURUS",
        "image" => $lapras,
        "level" => "Lv.59",
        "type" => $waterIce
    ]
];
$party28_2 = [
    [
        "name" => "RATTLESNEK",
        "image" => $starmie,
        "level" => "Lv.59",
        "type" => $waterPsychic
    ],
    [
        "name" => "IGUANA",
        "image" => $nidoqueen,
        "level" => "Lv.59",
        "type" => $poisonGround
    ],
    [
        "name" => "BOA",
        "image" => $dodrio,
        "level" => "Lv.59",
        "type" => $normalFlying
    ]
];
//episode29
$party29_1 = [
    [
        "name" => "CHAMELEON",
        "image" => $hitmonlee,
        "level" => "Lv.59",
        "type" => $fighting
    ],
    [
        "name" => "EGG",
        "image" => $electrode,
        "level" => "Lv.59",
        "type" => $electric
    ],
    [
        "name" => "MESOSAURUS",
        "image" => $lapras,
        "level" => "Lv.59",
        "type" => $waterIce
    ]
];
$party29_2 = [
    [
        "name" => "RATTLESNEK",
        "image" => $starmie,
        "level" => "Lv.60",
        "type" => $waterPsychic
    ],
    [
        "name" => "IGUANA",
        "image" => $nidoqueen,
        "level" => "Lv.59",
        "type" => $poisonGround
    ],
    [
        "name" => "BOA",
        "image" => $dodrio,
        "level" => "Lv.59",
        "type" => $normalFlying
    ]
];
//episode30
$party30_1 = [
    [
        "name" => "CHAMELEON",
        "image" => $hitmonlee,
        "level" => "Lv.59",
        "type" => $fighting
    ],
    [
        "name" => "EGG",
        "image" => $electrode,
        "level" => "Lv.59",
        "type" => $electric
    ],
    [
        "name" => "MESOSAURUS",
        "image" => $lapras,
        "level" => "Lv.60",
        "type" => $waterIce
    ]
];
$party30_2 = [
    [
        "name" => "RATTLESNEK",
        "image" => $starmie,
        "level" => "Lv.60",
        "type" => $waterPsychic
    ],
    [
        "name" => "IGUANA",
        "image" => $nidoqueen,
        "level" => "Lv.59",
        "type" => $poisonGround
    ],
    [
        "name" => "BOA",
        "image" => $dodrio,
        "level" => "Lv.59",
        "type" => $normalFlying
    ]
];
//finale
$partyfinale_1 = [
    [
        "name" => "CHAMELEON",
        "image" => $hitmonlee,
        "level" => "Lv.59",
        "type" => $fighting
    ],
    [
        "name" => "EGG",
        "image" => $electrode,
        "level" => "Lv.59",
        "type" => $electric
    ],
    [
        "name" => "MESOSAURUS",
        "image" => $lapras,
        "level" => "Lv.60",
        "type" => $waterIce
    ]
];
$partyfinale_2 = [
    [
        "name" => "RATTLESNEK",
        "image" => $starmie,
        "level" => "Lv.60",
        "type" => $waterPsychic
    ],
    [
        "name" => "IGUANA",
        "image" => $nidoqueen,
        "level" => "Lv.59",
        "type" => $poisonGround
    ]
];

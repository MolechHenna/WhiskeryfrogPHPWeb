<?php

$tableHeaders = ["Name", "Pokémon", "Episode", "Reason"];

function populateDeath($tableData, $tableHeaders)
{
    echo '<table border="1" class="customTable">';
    echo '<thead><tr>';
    foreach ($tableHeaders as $header) {
        echo '<th>' . $header . '</th>';
    }
    echo '</tr></thead>';
    echo '<tbody>';
    foreach ($tableData as $data) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($data["name"]) . '</td>';
        echo '<td><img class="nopad pixelate-filter dead" src="' . htmlspecialchars($data["image"]) . '" /></td>';
        echo '<td>' . htmlspecialchars($data["episode"]) . '</td>';
        echo '<td>' . htmlspecialchars($data["reason"]) . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
}

$death1 = [
    [
        "name" => "ALLIGATOR",
        "image" => $pidgey, // Assuming the image file is named 'pidgey.png'
        "episode" => "Episode 1",
        "reason" => "Died due to a wild poisoned Pidgey that is almost dead yet somehow landed a critical hit."
    ]
];

$death2 = $death1;
$death2[] = [
    "name" => "LIZARD",
    "image" => $beedrill,
    "episode" => "Episode 5",
    "reason" => "Died due to an almost dead Rattata that has quick attack. I completely forgot about quick attack."
];

$death3 = $death2;
$death3[] = [
    "name" => "FLYLIZARD",
    "image" => $zubat,
    "episode" => "Episode 6",
    "reason" => "Died due to a Pidgey during training of all places. Also forgot about quick attack."
];

$death4 = $death3;
$death4[] = [
    "name" => "NEWT",
    "image" => $raticate,
    "episode" => "Episode 15",
    "reason" => "Explosion from a Koffing."
];

$death5 = $death4;
$death5[] = [
    "name" => "GECKO",
    "image" => $weepinbell,
    "episode" => "Episode 16",
    "reason" => "Died trying to catch a Snorlax"
];
$death5[] = [
    "name" => "CAIMAN",
    "image" => $butterfree,
    "episode" => "Episode 16",
    "reason" => "Died while fighting a Muk that one shots me with Sludge."
];

$death6 = $death5;
$death6[] = [
    "name" => "ANACONDA",
    "image" => $snorlax,
    "episode" => "Episode 17",
    "reason" => "Died while fighting a Weezing that landed a critical hit Sludge on me. That was Weezing was almost dead and somehow killed ANACONDA"
];
$death6[] = [
    "name" => "CONSTRICTR",
    "image" => $vulpix,
    "episode" => "Episode 17",
    "reason" => "Died during training when fighting a Doduo that landed Fury Attack 4 times."
];

$death7 = $death6;
$death7[] = [
    "name" => "CROCODILE",
    "image" => $fearow,
    "episode" => "Episode 20",
    "reason" => "Destiny bond from a gym trainer."
];
$death7[] = [
    "name" => "GILAMONSTR",
    "image" => $blastoise,
    "episode" => "Episode 20",
    "reason" => "Died from a Calm Mind, Critical hit Psychic from an Alakazam."
];
$death7[] = [
    "name" => "KOMODO",
    "image" => $sandslash,
    "episode" => "Episode 20",
    "reason" => "Same with GILAMONSTR"
];

$death8 = $death7;
$death8[] = [
    "name" => "BOA",
    "image" => $dodrio,
    "episode" => "Finale",
    "reason" => "Hydro Pump from the champion's Gyarados."
];

<?php

include 'bowInfo.php';


function populateWeapon($weaponInfo)
{
    foreach ($weaponInfo as $data) {
        echo '<div class="bow1">';
        echo '<div class="bowImage"><img src="' . htmlspecialchars($data['weapon']->image) . '" alt="' . htmlspecialchars($data['weapon']->name) . '" class="pixelate-filter" /></div>';
        echo '<div class="' . htmlspecialchars($data['weapon']->rarity) . '">' . htmlspecialchars($data['weapon']->name) . '</div>';
        echo '<div class="bowDetails">';
        echo '<div>Damage: <span class="floatingRight">' . htmlspecialchars($data['weapon']->damage) . '</span></div>';
        echo '<div>Velocity: <span class="floatingRight">' . htmlspecialchars($data['weapon']->velocity) . '</span></div>';
        echo '<div>Use time: <span class="floatingRight">' . htmlspecialchars($data['weapon']->usetime) . '</span></div>';
        echo '<div>Knockback: <span class="floatingRight">' . htmlspecialchars($data['weapon']->knockback) . '</span></div>';
        echo '<div>Crit %: <span class="floatingRight">' . htmlspecialchars($data['weapon']->critrate) . '</span></div>';
        echo '<div>Sell: <span class="floatingRight">' . ($data['weapon']->sell) . '</span></div>';
        echo '</div>';
        echo '<div>Materials:</div>';
        echo '<div>' . ($data['weapon']->materials) . '</div>';
        echo '</div>';
    }
}

$preHardmodeBows = [
    [
        "weapon" => $woodenBowInfo
    ],
    [
        "weapon" => $borealWoodBowInfo
    ],
    [
        "weapon" => $copperBowInfo
    ],
    [
        "weapon" => $palmWoodBowInfo
    ],
    [
        "weapon" => $richMahoganyBowInfo
    ],
    [
        "weapon" => $tinBowInfo
    ],
    [
        "weapon" => $ebonwoodBowInfo
    ],
    [
        "weapon" => $ironBowInfo
    ],
    [
        "weapon" => $shadewoodBowInfo
    ],
    [
        "weapon" => $leadBowInfo
    ],
    [
        "weapon" => $silverBowInfo
    ],
    [
        "weapon" => $tungstenBowInfo
    ],
    [
        "weapon" => $goldBowInfo
    ],
    [
        "weapon" => $platinumBowInfo
    ],
    [
        "weapon" => $demonBowInfo
    ],
    [
        "weapon" => $tendonBowInfo
    ],
    [
        "weapon" => $hellwingBowInfo
    ],
    [
        "weapon" => $theBeesKneesInfo
    ],
    [
        "weapon" => $moltenFuryInfo
    ],
];
$hardmodeBows = [
    [
        "weapon" => $pearlwoodBowInfo
    ],
    [
        "weapon" => $daedalusStormbowInfo
    ],
    [
        "weapon" => $iceBowInfo
    ],
    [
        "weapon" => $shadowflameBowInfo
    ],
    [
        "weapon" => $marrowInfo
    ],
    [
        "weapon" => $phantomPhoenixInfo
    ],
    [
        "weapon" => $pulseBowInfo
    ],
    [
        "weapon" => $tsunamiInfo
    ],
    [
        "weapon" => $aerialBaneInfo
    ],
    [
        "weapon" => $phantasmInfo
    ]
];
$repeaters = [
    [
        "weapon" => $cobaltRepeaterInfo
    ],
    [
        "weapon" => $palladiumRepeaterInfo
    ],
    [
        "weapon" => $mythrilRepeaterInfo
    ],
    [
        "weapon" => $orichalcumRepeaterInfo
    ],
    [
        "weapon" => $adamantiteRepeaterInfo
    ],
    [
        "weapon" => $titaniumRepeaterInfo
    ],
    [
        "weapon" => $hallowedRepeaterInfo
    ],
    [
        "weapon" => $chlorophyteShotbowInfo
    ],
    [
        "weapon" => $stakeLauncherInfo
    ],
];

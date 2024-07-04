<?php

include 'arrowInfo.php';


function populateArrow($weaponInfo)
{
    foreach ($weaponInfo as $data) {
        echo '<div class="bow1">';
        echo '<div class="image"><img src="' . htmlspecialchars($data['weapon']->image) . '" alt="' . htmlspecialchars($data['weapon']->name) . '" class="pixelate-filter"/></div>';
        echo '<div class="' . htmlspecialchars($data['weapon']->rarity) . '">' . htmlspecialchars($data['weapon']->name) . '</div>';
        echo '<div class="bowDetails">';
        echo '<div>Damage: <span class="floatingRight">' . htmlspecialchars($data['weapon']->damage) . '</span></div>';
        echo '<div>Velocity: <span class="floatingRight">' . htmlspecialchars($data['weapon']->velocity) . '</span></div>';
        echo '<div>Velocity Multiplier: <span class="floatingRight">' . htmlspecialchars($data['weapon']->velocityMultiplier) . '</span></div>';
        echo '<div>Knockback: <span class="floatingRight">' . htmlspecialchars($data['weapon']->knockback) . '</span></div>';
        echo '<div>Sell: <span class="floatingRight">' . ($data['weapon']->sell) . '</span></div>';
        echo '</div>';
        echo '<div>Materials:</div>';
        echo '<div>' . ($data['weapon']->materials) . '</div>';
        echo '</div>';
    }
}

$preHardmodeArrows = [
    [
        "weapon" => $woodenArrowInfo
    ],
    [
        "weapon" => $flamingArrowInfo
    ],
    [
        "weapon" => $frostburnArrowInfo
    ],
    [
        "weapon" => $boneArrowInfo
    ],
    [
        "weapon" => $unholyArrowInfo
    ],
    [
        "weapon" => $jesterArrowInfo
    ],
    [
        "weapon" => $hellfireArrowInfo
    ]
];
$hardmodeArrows = [
    [
        "weapon" => $endlessQuiverInfo
    ],
    [
        "weapon" => $holyArrowInfo
    ],
    [
        "weapon" => $cursedArrowInfo
    ],
    [
        "weapon" => $ichorArrowInfo
    ],
    [
        "weapon" => $venomArrowInfo
    ],
    [
        "weapon" => $chlorophyteArrowInfo
    ],
    [
        "weapon" => $stakeInfo
    ],
    [
        "weapon" => $luminiteArrowInfo
    ],
];

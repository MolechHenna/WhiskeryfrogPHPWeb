<?php

include 'bowInfo.php';


function populateWeapon($weaponInfo)
{
    foreach ($weaponInfo as $data) {
        echo '<div class="bow1">';
        echo '<div class="bowImage"><img src="' . htmlspecialchars($data['weapon']->image) . '" alt="' . htmlspecialchars($data['weapon']->name) . '" class="" /></div>';
        echo '<div class="' . htmlspecialchars($data['weapon']->rarity) . '">' . htmlspecialchars($data['weapon']->name) . '</div>';
        echo '<div class="bowDetails">';
        echo '<div>Damage: <span class="floatingRight">' . htmlspecialchars($data['weapon']->damage) . '</span></div>';
        echo '<div>Velocity: <span class="floatingRight">' . htmlspecialchars($data['weapon']->velocity) . '</span></div>';
        echo '<div>Use time: <span class="floatingRight">' . htmlspecialchars($data['weapon']->usetime) . '</span></div>';
        echo '<div>Crit %: <span class="floatingRight">' . htmlspecialchars($data['weapon']->critrate) . '</span></div>';
        echo '<div>Sell: <span class="floatingRight">' . ($data['weapon']->sell) . '</span></div>';
        echo '</div>';
        echo '<div>Materials:</div>';
        echo '<div>' . ($data['weapon']->materials) . '</div>';
        echo '</div>';
    }
}

$bows = [
    [
        "weapon" => $woodenBowInfo
    ],
    [
        "weapon" => $woodenBowInfo
    ],
    [
        "weapon" => $woodenBowInfo
    ],
    [
        "weapon" => $woodenBowInfo
    ],
];

<?php
//Arrows
$woodenArrowImg = "sprites/arrows/Wooden_Arrow.webp";
$flamingArrowImg = "sprites/arrows/Flaming_Arrow.webp";
$boneArrowImg = "sprites/arrows/Bone_Arrow.webp";
$unholyArrowImg = "sprites/arrows/Unholy_Arrow.webp";
$jesterArrowImg = "sprites/arrows/Jester's_Arrow.webp";
$hellfireArrowImg = "sprites/arrows/Hellfire_Arrow.webp";
$endlessQuiverImg = "sprites/arrows/Endless_Quiver.webp";
$holyArrowImg = "sprites/arrows/Holy_Arrow.webp";
$cursedArrowImg = "sprites/arrows/Cursed_Arrow.webp";
$ichorArrowImg = "sprites/arrows/Ichor_Arrow.webp";
$venomArrowImg = "sprites/arrows/Venom_Arrow.webp";
$chlorophyteArrowImg = "sprites/arrows/Chlorophyte_Arrow.webp";
$luminiteArrowImg = "sprites/arrows/Luminite_Arrow.webp";
$frostburnArrowImg = "sprites/arrows/Frostburn_Arrow.webp";
$stakeImg = "sprites/arrows/Stake.png";




$stoneBlock = "<img src='sprites/others/Stone_Block.png' alt=''>";

class ArrowInfo
{
    public $name;
    public $rarity;
    public $image;
    public $damage;
    public $velocity;
    public $velocityMultiplier;
    public $knockback;
    public $sell;
    public $materials;

    function __construct($name, $rarity, $image, $damage, $velocity, $velocityMultiplier, $knockback, $sell, $materials)
    {
        $this->name = $name;
        $this->rarity = $rarity;
        $this->image = $image;
        $this->damage = $damage;
        $this->velocity = $velocity;
        $this->velocityMultiplier = $velocityMultiplier;
        $this->knockback = $knockback;
        $this->sell = $sell;
        $this->materials = $materials;
    }
}

//BOWS
$woodenArrowInfo = new ArrowInfo(
    "Wooden Arrow",
    $white,
    $woodenArrowImg,
    "5",
    "3",
    "1",
    "2",
    "1" . $copperCoin,
    $workBench . '(Any' . $wood . ' + ' . $stoneBlock . ' ) = x25'
);
$flamingArrowInfo = new ArrowInfo(
    "Flaming Arrow",
    $white,
    $flamingArrowImg,
    "7",
    "3.5",
    "1",
    "2",
    "2" . $copperCoin,
    '( <img src="' . $woodenArrowImg . '" alt=""> x5 + ' . $torch . ' ) = x5'
);
$frostburnArrowInfo = new ArrowInfo(
    "Frostburn Arrow",
    $white,
    $frostburnArrowImg,
    "7",
    "3.75",
    "1",
    "2.2",
    "3" . $copperCoin,
    '( <img src="' . $woodenArrowImg . '" alt=""> x10 + ' . $iceTorch . ' ) = x10'
);
$boneArrowInfo = new ArrowInfo(
    "Bone Arrow",
    $white,
    $boneArrowImg,
    "8",
    "3.5",
    "1",
    "2.5",
    "3" . $copperCoin,
    'Sold for 15' . $copperCoin . ' by the ' . $skeletonMerchant . 'during moon phases 1, 2, 5, and 6,'
);
$unholyArrowInfo = new ArrowInfo(
    "Unholy Arrow",
    $blue,
    $unholyArrowImg,
    "12",
    "3.4",
    "1",
    "3",
    "8" . $copperCoin,
    $ironAnvil . '/' . $leadAnvil . '(<img src="' . $woodenArrowImg . '" alt=""> x5 + ' . $wormTooth . '/' . $vertebra . ' ) = x5'
);
$jesterArrowInfo = new ArrowInfo(
    "Jester's Arrow",
    $blue,
    $jesterArrowImg,
    "10",
    "0.5",
    "2",
    "4",
    "20" . $copperCoin,
    '( <img src="' . $woodenArrowImg . '" alt=""> x20 + ' . $fallenStar . ' ) = x20'
);
$hellfireArrowInfo = new ArrowInfo(
    "Hellfire Arrow",
    $green,
    $hellfireArrowImg,
    "13",
    "6.5",
    "1",
    "8",
    "20" . $copperCoin,
    $ironAnvil . '/' . $leadAnvil . '(<img src="' . $woodenArrowImg . '" alt=""> x100 + ' . $hellstoneBar . ' ) = x100'
);

$endlessQuiverInfo = new ArrowInfo(
    "Endless Quiver",
    $white,
    $endlessQuiverImg,
    "5",
    "3",
    "1",
    "2",
    "1" . $goldCoin,
    $crystalBall . '( <img src="' . $woodenArrowImg . '" alt=""> x3996 )'
);
$holyArrowInfo = new ArrowInfo(
    "Holy Arrow",
    $orange,
    $holyArrowImg,
    "13",
    "3.5",
    "1",
    "2",
    "16" . $copperCoin,
    $mythrilAnvil . '/' . $orichalcumAnvil . '(<img src="' . $woodenArrowImg . '" alt=""> x200 + ' . $pixieDust . 'x3 + ' . $unicornHorn . ' ) = x200'
);
$cursedArrowInfo = new ArrowInfo(
    "Cursed Arrow",
    $orange,
    $cursedArrowImg,
    "17",
    "4",
    "1",
    "3",
    "8" . $copperCoin,
    $mythrilAnvil . '/' . $orichalcumAnvil . '(<img src="' . $woodenArrowImg . '" alt=""> x150 + ' . $cursedFlame . ') = x150'
);
$ichorArrowInfo = new ArrowInfo(
    "Ichor Arrow",
    $orange,
    $ichorArrowImg,
    "16",
    "4.25",
    "2",
    "4.2",
    "8" . $copperCoin,
    $mythrilAnvil . '/' . $orichalcumAnvil . '(<img src="' . $woodenArrowImg . '" alt=""> x150 + ' . $ichor . ') = x150'
);
$venomArrowInfo = new ArrowInfo(
    "Venom Arrow",
    $orange,
    $venomArrowImg,
    "19",
    "4.3",
    "2",
    "4.2",
    "1" . $copperCoin,
    $mythrilAnvil . '/' . $orichalcumAnvil . '(<img src="' . $woodenArrowImg . '" alt=""> x35 + ' . $vialOfVenom . ') = x35'
);
$chlorophyteArrowInfo = new ArrowInfo(
    "Chlorophyte Arrow",
    $lime,
    $chlorophyteArrowImg,
    "16",
    "4.5",
    "2",
    "3.5",
    "20" . $copperCoin,
    $mythrilAnvil . '/' . $orichalcumAnvil . '(' . $chlorophyteBar . ') = x150'
);
$stakeInfo = new ArrowInfo(
    "Stake",
    $white,
    $stakeImg,
    "25",
    "3",
    "4",
    "4.5",
    "3" . $copperCoin,
    'Sold for 15' . $copperCoin . ' by the ' . $armsDealer . ' and ' . $witchDoctor . ' when <img src="' . $stakeLauncher . '" alt="stake launcher"> is in inventory.'
);
$luminiteArrowInfo = new ArrowInfo(
    "Luminite Arrow",
    $cyan,
    $luminiteArrowImg,
    "15",
    "3",
    "2",
    "3.5",
    "2" . $copperCoin,
    $ancientManipulator . '(' . $luminiteBar . ') = x333'
);

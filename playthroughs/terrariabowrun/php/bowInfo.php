<?php
//rarity
$white = "rarityWhite";
//coins
$copperCoin = "<img src='sprites/others/Copper_Coin.gif' alt='Copper coin' class='' />";
//craftingtable
$workBench = '<img src="sprites/others/Work_Bench.png" alt="Work bench" class="" />';
//material
$wood = '<img src="sprites/others/Wood.png" alt="Wood" class="" />';
//bow
$woodenBowImg = "sprites/bows/Wooden_Bow.png";



class BowInfo
{
    public $name;
    public $rarity;
    public $image;
    public $damage;
    public $velocity;
    public $usetime;
    public $critrate;
    public $sell;
    public $materials;

    function __construct($name, $rarity, $image, $damage, $velocity, $usetime, $critrate, $sell, $materials)
    {
        $this->name = $name;
        $this->rarity = $rarity;
        $this->image = $image;
        $this->damage = $damage;
        $this->velocity = $velocity;
        $this->usetime = $usetime;
        $this->critrate = $critrate;
        $this->sell = $sell;
        $this->materials = $materials;
    }
}

$woodenBowInfo = new BowInfo(
    "Wooden Bow",
    $white,
    $woodenBowImg,
    "4",
    "6.1",
    "30",
    "4",
    "20" . $copperCoin,
    $workBench . '(10' . $wood . ')'
);

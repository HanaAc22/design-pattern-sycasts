<?php

namespace App\AttackType;

use App\Dice;

class FireBoltType implements AttackType
{

    public function preformAttack(int $baseDamege): int
    {
       return Dice::roll(10) +  Dice::roll(10) +  Dice::roll(10);
    }
}
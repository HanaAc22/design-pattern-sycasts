<?php

namespace App\AttackType;

use App\Dice;

class BowType implements AttackType
{

    public function preformAttack(int $baseDamege): int
    {
        $criticalChance = Dice::roll(100);
        return $criticalChance > 70 ? $baseDamege * 3 : $baseDamege;
    }
}
<?php

namespace App\AttackType;

use App\Dice;

class TwoHandedSwordType implements AttackType
{
    public function preformAttack(int $baseDamege): int
    {
        $twoHandledSwordDamage = Dice::roll(12) + Dice::roll(12);
        return $baseDamege + $twoHandledSwordDamage;
    }

}
<?php

namespace App\AttackType;

interface AttackType
{
    //creating an interface & at least one implementation of this interface
    public function preformAttack(int $baseDamege): int;
}
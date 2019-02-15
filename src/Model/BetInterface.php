<?php
/**
 * Created by PhpStorm.
 * User: Bryce
 * Date: 15/02/2019
 * Time: 13:40
 */

namespace App\Model;


interface BetInterface
{
    public function getGainMultiplier(CaseRoulette $caseRoulette): int;
    public function getPlayer(): PlayerInterface;
    public function getAmount(): int;
}
<?php
namespace JeanGael\DiceBundle\Service;

class DiceBoard
{

    /**
     * @Route("/", name="homepage")
     */
    public function throwAdice($faces,$bonus)
    {
        $diceRaw = rand(1,$faces);
        $diceRes = $diceRaw + $bonus;
        return $diceRes;
    }
}

<?php
namespace JeanGael\DiceBundle\Service;

class DiceBoard
{

    /**
     * @Route("/", name="homepage")
     */
    public function throwPublic($faces,$bonus)
    {
        $diceRaw = rand(1,$faces);
        $diceRes = $diceRaw + $bonus;
        $this->logger->info('IN Dice : result = ' . $diceRes . ' [was: ' . $diceRaw . '+' . $bonus . '] ', array());
        return $diceRes;
    }
}

<?php declare(strict_types=1);

namespace TicTacToe;

class Opponent implements PlayerInterface
{    
    /**
     * board - Board class object
     *
     * @var object
     */
    private $board;

    public function __construct(Board $board)
    {
        $this->board = $board;
    }
    
    /**
     * nextStep - Generate random opponent step
     *
     * @return void
     */
    public function nextStep(): void
    {
        $this->board->hasFreeSteps();
        $freeSteps = $this->board->getFreeSteps();

        if(!empty($freeSteps)) {
            $randomStep = array_rand($freeSteps, 1);
            $extractRandom = explode('|', $freeSteps[$randomStep]);
            $this->board->setStep((int) $extractRandom[0], (int) $extractRandom[1], 'O');
        }
    }
}

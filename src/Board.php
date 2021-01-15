<?php declare(strict_types=1);

namespace TicTacToe;

/**
 * Game board class
 */
class Board implements BoardInterface
{
    /**
     * board - Game board array
     *
     * @var array
     */
    protected array $board = [
        ['', '', ''],
        ['', '', ''],
        ['', '', ''],
    ];
    
    /**
     * freeSteps - Empty steps
     *
     * @var array
     */
    protected array $freeSteps = [];

    /**
     * Get the value of board
     */ 
    public function getBoard()
    {
        return $this->board;
    }

    /**
     * Set the value of board
     *
     * @return  self
     */ 
    public function setBoard($board)
    {
        $this->board = $board;

        return $this;
    }

    /**
     * Get the value of freeSteps
     */ 
    public function getFreeSteps()
    {
        return $this->freeSteps;
    }

    /**
     * Set the value of freeSteps
     *
     * @return  self
     */ 
    public function setFreeSteps($freeSteps)
    {
        $this->freeSteps = $freeSteps;

        return $this;
    }
    
    /**
     * setStep - Game board step setter
     *
     * @param  int $row
     * @param  int $column
     * @param  string $mark
     * @return self
     */
    public function setStep(int $row, int $column, string $mark): self
    {
        $this->board[$row][$column] = $mark;

        return $this;
    }
    
    /**
     * hasFreeSteps - Generate empty free steps
     *
     * @return void
     */
    public function hasFreeSteps(): void
    {
        $steps = [];

        foreach ($this->board as $freeRow => $row) {
            foreach ($row as $freeColumn => $column) {
                if($column == '') {
                    $steps[] = $freeRow.'|'.$freeColumn;
                }
            }
        }

        $this->setFreeSteps($steps);
    }
}

<?php declare(strict_types=1);

namespace TicTacToe;

class Player implements PlayerInterface
{
    /**
     * board - Board class object
     *
     * @var object
     */
    private $board;

    /**
     * row
     *
     * @var int
     */
    private int $row;

    /**
     * column
     *
     * @var int
     */
    private int $column;
    
    public function __construct(Board $board, $row, $column)
    {
        $this->board = $board;
        $this->row = $row;
        $this->column = $column;
    }
    
    /**
     * nextStep - Set user step in board
     *
     * @return void
     */
    public function nextStep(): void
    {
        $this->board->setStep($this->row, $this->column, 'X');
    }
}

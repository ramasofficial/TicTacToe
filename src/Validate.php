<?php declare(strict_types=1);

namespace TicTacToe;

class Validate implements ValidateInterface
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
    private $row;

    /**
     * column
     *
     * @var int
     */
    private $column;

    public function __construct(Board $board, int $row, int $column)
    {
        $this->board = $board;
        $this->row = $row;
        $this->column = $column;
    }
    
    /**
     * validateStep - Validate existing step
     *
     * @return bool
     */
    public function validateStep(): bool
    {
        $board = $this->board->getBoard();

        // Check existing row & column in array
        if(!isset($board[$this->row][$this->column])) {
            return false;
        }

        // Check column is empty?
        if($board[$this->row][$this->column] != '') {
            return false;
        }

        return true;
    }
}

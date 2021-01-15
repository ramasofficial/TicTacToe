<?php declare(strict_types=1);

namespace TicTacToe;

/**
 * Game class
 */
class Game implements GameInterface
{
    public function __construct(WinnerInterface $winner, Board $board, int $row, int $column)
    {
        $this->winner = $winner;
        $this->board = $board;
        $this->row = $row;
        $this->column = $column;
    }

    public function play(): void
    {
        // Check winner before go
        $this->winner->checkWinner($this->board);

        // Validate step
        $validate = new Validate($this->board, $this->row, $this->column);
        $playerGo = false;

        // Check if not exist winner and step is a validate
        if(!$this->winner->getWinner() && $validate->validateStep()) {
            $player = new Player($this->board, $this->row, $this->column);
            $player->nextStep();
            $playerGo = true;
        }

        // Opponent go
        $this->winner->checkWinner($this->board);
        if(!$this->winner->getWinner() && $playerGo) {
            $opponent = new Opponent($this->board);
            $opponent->nextStep();
        }

        // Check winner after opponent go
        $this->winner->checkWinner($this->board);
    }
}

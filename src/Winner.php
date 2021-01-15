<?php declare(strict_types=1);

namespace TicTacToe;

class Winner implements WinnerInterface
{
    /**
     * winner - The winner
     *
     * @var string
     */
    private string $winner = '';
    
    /**
     * checkWinner - Checks the chances of winning
     *
     * @param  Board $board
     * @return void
     */
    public function checkWinner(Board $board): void
    {
        $boardCheck = $board->getBoard();
        $board->hasFreeSteps();
        $winner = '';
        
        // Checks available opportunities
        if($boardCheck[0][0] == $boardCheck[0][1] && $boardCheck[0][1]  == $boardCheck[0][2]) {
            $winner = $boardCheck[0][0];
        } else if($boardCheck[1][0] == $boardCheck[1][1] && $boardCheck[1][1] == $boardCheck[1][2]) {
            $winner = $boardCheck[1][0];
        } else if($boardCheck[2][0] == $boardCheck[2][1] && $boardCheck[2][1] == $boardCheck[2][2]) {
            $winner = $boardCheck[2][0];
        } else if($boardCheck[0][0] == $boardCheck[1][0] && $boardCheck[1][0] == $boardCheck[2][0]) {
            $winner = $boardCheck[0][0];
        } else if($boardCheck[0][1] == $boardCheck[1][1] && $boardCheck[1][1] == $boardCheck[2][1]) {
            $winner = $boardCheck[0][1];
        } else if($boardCheck[0][2] == $boardCheck[1][2] && $boardCheck[1][2] == $boardCheck[2][2]) {
            $winner = $boardCheck[0][2];
        } else if($boardCheck[0][0] == $boardCheck[1][1] && $boardCheck[1][1] == $boardCheck[2][2]) {
            $winner = $boardCheck[0][0];
        } else if($boardCheck[0][2] == $boardCheck[1][1] && $boardCheck[1][1] == $boardCheck[2][0]) {
            $winner = $boardCheck[0][2];
        } else if(count($board->getFreeSteps()) === 0) {
            $winner = "It's a tie!";
        }

        // Set winner
        $this->winner = $winner;
    }

    /**
     * Get the value of winner
     */ 
    public function getWinner(): string
    {
        return $this->winner;
    }
}

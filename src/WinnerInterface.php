<?php declare(strict_types=1);

namespace TicTacToe;

/**
 * Winner interface
 */
interface WinnerInterface
{
    public function checkWinner(Board $board): void;
    public function getWinner(): string;
}

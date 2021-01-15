<?php declare(strict_types=1);

namespace TicTacToe;

/**
 * Player interface
 */
interface PlayerInterface
{
    public function nextStep(): void;
}

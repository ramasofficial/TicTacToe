<?php declare(strict_types=1);

namespace TicTacToe;

/**
 * Validate interface
 */
interface ValidateInterface
{
    public function validateStep(): bool;
}

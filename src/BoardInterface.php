<?php declare(strict_types=1);

namespace TicTacToe;

/**
 * Board interface
 */
interface BoardInterface
{
    public function setStep(int $row, int $column, string $mark): self;
    public function hasFreeSteps(): void;
}

<?php

session_start();

require_once __DIR__ . '/../vendor/autoload.php';

// Load twig templates
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader);

// Load Game, Board and Winner classes
use TicTacToe\Game;
use TicTacToe\Board;
use TicTacToe\Winner;

$board = new Board();
$winner = new Winner();

// Checking if the user is taking a step
if(isset($_GET['next_step'])) {

    if(!empty($_SESSION['board'])) {
        $board->setBoard($_SESSION['board']);
    }

    $game = new Game($winner, $board, (int) $_GET['row'], (int) $_GET['column']);
    $game->play();

    $_SESSION['board'] = $board->getBoard();
} else {
    // Destroying session, if user not do the step
    session_destroy();
}

// Get board array
$boardArray = $board->getBoard();

// Return rendered twig template
echo $twig->render('index.html.twig', [
    'board' => $boardArray,
    'winner' => $winner->getWinner(),
]);

?>

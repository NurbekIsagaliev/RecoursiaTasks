<?php
/*Задача 2. Больше - меньше.
Игра больше меньше между двумя игроками. При каждой партии игроки загадывают числа от 0 до 9999. 
Один из игроков выносит догадку о том, что его число больше или меньше загаданного числа соперника. 
Если он отгадал, то к его счету добавляется 1 балл. Разыграть 5 партий. Вывести имя победителя. 
Игроки отгадывают по очереди.*/
class Player {
    public $name;
    public $score = 0;

    public function __construct($name) {
        $this->name = $name;
    }

    public function increaseScore() {
        $this->score++;
    }

    public function getScore() {
        return $this->score;
    }
}

$player1 = new Player("Игрок 1");
$player2 = new Player("Игрок 2");

$players = [$player1, $player2];

for ($round = 1; $round <= 5; $round++) {
    echo "Раунд $round\n";

    $numberPlayer1 = rand(0, 9999);
    $numberPlayer2 = rand(0, 9999);

    echo "{$player1->name} загадал число: $numberPlayer1\n";
    echo "{$player2->name} загадал число: $numberPlayer2\n";

    $guessPlayer1 = rand(0, 1) === 0 ? "Больше" : "Меньше";
    $guessPlayer2 = rand(0, 1) === 0 ? "Больше" : "Меньше";

    echo "{$player1->name} думает, что число соперника $guessPlayer1\n";
    echo "{$player2->name} думает, что число соперника $guessPlayer2\n";

    if (($guessPlayer1 === "Больше" && $numberPlayer1 > $numberPlayer2) ||
        ($guessPlayer1 === "Меньше" && $numberPlayer1 < $numberPlayer2)) {
        $player1->increaseScore();
        echo "{$player1->name} угадал!\n";
    } else {
        $player2->increaseScore();
        echo "{$player2->name} угадал!\n";
    }

    echo "\n";
}

$winner = $player1->getScore() > $player2->getScore() ? $player1 : $player2;
echo "Победитель: {$winner->name} с счетом {$winner->getScore()} баллов!\n";

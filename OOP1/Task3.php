<?php
/*Задача 3. Игра в дурака.
Есть колода из 36 игральных карт (от 6 до тузов). Перемешать колоду карт и раздать на четырех игроков. 
Вывести на экран козырь. И ФИО игрока у кого больше шансов выиграть.
*/
class Card {
    public $rank; // 6, 7, 8, 9, 10, Валет, Дама, Король, Туз
    public $suit; // Пики, Трефы, Бубны, Черви

    public function __construct($rank, $suit) {
        $this->rank = $rank;
        $this->suit = $suit;
    }
}

class Player {
    public $name;
    public $hand = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function addCardToHand($card) {
        $this->hand[] = $card;
    }

    public function getHand() {
        return $this->hand;
    }
}

$ranks = ["6", "7", "8", "9", "10", "Валет", "Дама", "Король", "Туз"];
$suits = ["Пики", "Трефы", "Бубны", "Черви"];

$deck = [];
foreach ($suits as $suit) {
    foreach ($ranks as $rank) {
        $deck[] = new Card($rank, $suit);
    }
}

shuffle($deck);

$players = [new Player("Игрок 1"), new Player("Игрок 2"), new Player("Игрок 3"), new Player("Игрок 4")];

for ($i = 0; $i < 36; $i++) {
    $currentPlayer = $players[$i % 4];
    $currentPlayer->addCardToHand($deck[$i]);
}

$trumpCard = array_pop($deck);

echo "Козырь: {$trumpCard->rank} {$trumpCard->suit}\n\n";

$winningChances = [];
foreach ($players as $player) {
    $winningChances[$player->name] = 0;

    foreach ($player->getHand() as $card) {
        if ($card->suit === $trumpCard->suit && array_search($card->rank, $ranks) > array_search($trumpCard->rank, $ranks)) {
            $winningChances[$player->name]++;
        }
    }
}

arsort($winningChances);
$mostLikelyWinner = key($winningChances);

echo "Игрок с наибольшими шансами выиграть: $mostLikelyWinner\n";

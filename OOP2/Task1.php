<?php
/*Задача 1. Кукольный театр.
Интерфейсы кукольного театра:

PerformInterface - все объекты реализующие данный интерфейс умеют выступать

Субъекты кукольного театра: 

Кукла:
интерфейсы: PerformInterface
характеристики: тип, пол, возраст, цвет, текст.
умеет: выступать - проговаривает собственный текст.

Кукловод:
интерфейсы: PerformInterface
характеристики: пол, тип голоса, талант (1-10), куклы (2 шт). 
умеет: выступать - запускает выступление каждой куклы поочереди.

Актер:
интерфейсы: PerformInterface
характеристики: пол, возраст, текст.
умеет: выступать - проговаривает собственный текст.

Постановка
характеристики: очередь (массив) из объектов PerformInterface (Актеры, Кукловоды)
умеет:  добавлять к очереди объект PerformInterface, запускать выступление.

Зритель:
характеристики: реакция (текст описывающий эмоцию: Браво! На бис! И т.д.)
умеет: аплодировать.

Театр:
характеристики: Постановка, Зрители
умеет: запускать театр (сначала Постановка, потом реакция Зрителей)*/
interface PerformInterface {
      public function perform();
}

class Doll implements PerformInterface {
    private $type;
    private $gender;
    private $age;
    private $color;
    private $text;

    public function __construct($type, $gender, $age, $color, $text) {
        $this->type = $type;
        $this->gender = $gender;
        $this->age = $age;
        $this->color = $color;
        $this->text = $text;
    }

    public function perform() {
        echo $this->text .'<br>';
    }
}

class Puppeteer implements PerformInterface {
    private $gender;
    private $voiceType;
    private $talent;
    private $dolls;

    public function __construct($gender, $voiceType, $talent) {
        $this->gender = $gender;
        $this->voiceType = $voiceType;
        $this->talent = $talent;
        $this->dolls = [];
    }

    public function addDoll(Doll $doll) {
        $this->dolls[] = $doll;
    }

    public function perform() {
        foreach ($this->dolls as $doll) {
            $doll->perform();
        }
    }
}

class Actor implements PerformInterface {
    private $gender;
    private $age;
    private $text;

    public function __construct($gender, $age, $text) {
        $this->gender = $gender;
        $this->age = $age;
        $this->text = $text;
    }

    public function perform() {
        echo $this->text . '<br>';
    }
}

class Performance {
    private $queue = [];

    public function addToQueue(PerformInterface $performer) {
        $this->queue[] = $performer;
    }

    public function start() {
        foreach ($this->queue as $performer) {
            $performer->perform();
        }
    }
}

class Viewer {
    private $reaction;

    public function __construct($reaction) {
        $this->reaction = $reaction;
    }

    public function applaud() {
        echo $this->reaction .'<br>';
    }
}

class Theater {
    private $performance;
    private $audience = [];

    public function setPerformance(Performance $performance) {
        $this->performance = $performance;
    }

    public function addViewer(Viewer $viewer) {
        $this->audience[] = $viewer;
    }

    public function run() {
        $this->performance->start();
        foreach ($this->audience as $viewer) {
            $viewer->applaud();
        }
    }
}

$performance = new Performance();
$actor = new Actor("мужской", 30, "Это игра актера.");
$doll1 = new Doll("кукольный", "женский", 5, "красный", "Я кукла!");
$doll2 = new Doll("кукольный", "мужской", 3, "синий", "Привет от куклы!");
$puppeteer = new Puppeteer("мужской", "глубокий", 8);

$puppeteer->addDoll($doll1);
$puppeteer->addDoll($doll2);

$performance->addToQueue($actor);
$performance->addToQueue($puppeteer);

$viewer1 = new Viewer("Браво!");
$viewer2 = new Viewer("На бис!");

$theater = new Theater();
$theater->setPerformance($performance);
$theater->addViewer($viewer1);
$theater->addViewer($viewer2);

$theater->run();







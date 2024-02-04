<?php
/*Задача 1. Генератор людей.
Придумайте 3 массива для имен, фамилий и отчеств. Опишите класс людей Human как объектов с совокупностью 
трех свойств (name, surname, patronymic). Собрать массив из 20 людей со случайным набором ФИО.
*/
$names1 = ["Иван", "Михаил", "Алексей", "Дмитрий", "Сергей"];
$surnames1 = ["Иванов", "Петров", "Сидоров", "Морозов", "Волков"];
$patronymics1 = ["Иванович", "Михайлович", "Алексеевич", "Олегович", "Сергеевич"];

$names2 = ["Анна", "Екатерина", "Мария", "Ольга", "Елена"];
$surnames2 = ["Козлова", "Смирнова", "Федорова", "Иванова", "Соколова"];
$patronymics2 = ["Петровна", "Александровна", "Дмитриевна", "Игоревна", "Валентиновна"];

class Human
{
    public $name;
    public $surname;
    public $patronymic;

    public function __construct($name, $surname, $patronymic)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
    }

    public function getFullName()
    {
        return "$this->surname $this->name $this->patronymic";
    }
}

$people = [];

for ($i = 0; $i < 10; $i++) {
    $randomName1 = $names1[array_rand($names1)];
    $randomSurname1 = $surnames1[array_rand($surnames1)];
    $randomPatronymic1 = $patronymics1[array_rand($patronymics1)];

    $human1 = new Human($randomName1, $randomSurname1, $randomPatronymic1);
    $people[] = $human1;
}

for ($i = 0; $i < 10; $i++) {
    $randomName2 = $names2[array_rand($names2)];
    $randomSurname2 = $surnames2[array_rand($surnames2)];
    $randomPatronymic2 = $patronymics2[array_rand($patronymics2)];

    $human = new Human($randomName2, $randomSurname2, $randomPatronymic2);
    $people[] = $human;
}

foreach ($people as $person) {
    echo $person->getFullName() . "<br>";
}

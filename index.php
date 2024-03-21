<?php

require_once __DIR__ . '/vendor/autoload.php';

$faker = \Faker\Factory::create();


echo "<!DOCTYPE html>";
echo "<html lang='pt-BR'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<title>Dados Fake</title>";
echo "</head>";
echo "<body>";

echo "<h1>Dados Fake</h1>";

for ($i = 0; $i < 10; $i++) {
    echo "<p><strong>Nome:</strong> " . $faker->name . "<br>";
    echo "<strong>Endereço:</strong> " . $faker->address . "<br>";
    echo "<strong>E-mail:</strong> " . $faker->email . "</p>";
    echo "<hr>";
}

echo "</body>";
echo "</html>";

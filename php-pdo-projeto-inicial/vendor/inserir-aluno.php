<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infra\Persist\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::CreateConnection();

$student = new Student(
    null,
    'Victor Hugo',
    new \DateTimeImmutable('2000-07-20')
);

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name',$student->name());
$statement->bindValue(':birth_date',$student->birthDate()->format('Y-m-d'));

if($statement->execute()){
    echo 'Aluno incluido';
}



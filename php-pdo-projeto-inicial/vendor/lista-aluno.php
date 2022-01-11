<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infra\Persist\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::CreateConnection();

$statement = $pdo->query(statement: 'SELECT * FROM students;');

$studentList =  $statement->fetchAll(PDO::FETCH_ASSOC);
$studentList = [];

foreach($studentDataList as $studentData) {
    $studentList[] = new Student($studentData['id'],
    $studentData['name'],
     new \DateTimeImmutable($studentData['birth_date'])
    );
}


var_dump($studentList);
<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infra\Persist\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::CreateConnection();

$student = new Student(
    null,
    'Vinicius Dias',
    new \DateTimeImmutable('1997-10-15')
);

echo $student->age();

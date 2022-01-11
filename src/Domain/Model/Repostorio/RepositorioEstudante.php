<?php

namespace Alura\Pdo\Domain\Model\Repositorio;

use Alura\Pdo\Domain\Model\Student;
use DateTimeInterface;

interface RepositorioEstudante
{
    public function todosEstudante(): array;
    public function aniversariosEstudantes(DateTimeInterface $aniversario): array;
    public function salvar(Student $student): bool;
    public function remover(Student $student): bool; 
}
<?php

namespace Alura\Pdo\Infra\Repositorio;

use Alura\Pdo\Domain\Model\Repositorio\RepositorioEstudante;
use Alura\Pdo\Domain\Model\Student;
use DateTimeInterface;

class PdoRepositorioEstudante implements RepositorioEstudante
{
    public function todosEstudante(): array
    {
        return;
    }

    public function aniversariosEstudantes(\DateTimeInterface $aniversario): array
    {

    }

    public function salvar(Student $student): bool
    {

    }

    public function remover(Student $student): bool
    {
        
    }
}
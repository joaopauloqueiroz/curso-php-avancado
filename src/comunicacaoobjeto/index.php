<?php
//comunicação entre 3 objetos
class Treinaweb
{
    protected $salas = [];

    public function setSalas(SalaDeAula $sala)
    {
        $this->salas[] = $sala;
    }
}

class SalaDeAula
{
    protected $turma;
    protected $alunos = [];

    public function __construct($turma)
    {
        $this->turma = $turma;
    }

    public function addAluno(Aluno $aluno)
    {
        $this->alunos[] = $aluno;
    }
}

class Aluno
{
    protected $aluno;

    public function __construct($aluno)
    {
        $this->aluno = $aluno;
    }
}

$empresa = new Treinaweb;
$sala = new SalaDeAula('A 02-08-2018');
$sala->addAluno(new Aluno('Joao Paulo'));
$sala->addAluno(new Aluno('Joao'));
$sala->addAluno(new Aluno('Paulo'));

$empresa->setSalas($sala);

echo "<pre>";
print_r($empresa);

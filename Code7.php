<?php
    
     class Caracteristicas 
    {
        public $curso;
        public $idade;
        
        public function __construct(string $curso, int $idade)
        {
            $this -> curso = $curso;
            $this -> idade = $idade;
        }    
    }
    
    $Aluno1 = new Caracteristicas("Engenharia da Computacao", 20);
    $Aluno2 = new Caracteristicas("Engenharia da Computacao", 20);
    $Aluno3 = new Caracteristicas("Engenharia da Computacao", 20);

    $alunos = [$Aluno1, $Aluno2, $Aluno3];
    print_r($alunos);

    
    class Aluno extends Caracteristicas
    {
    
        public $nome;
        public $matricula;
        public $nota;
    
    
        public function __construct(string $nome, int $matricula, int $nota)
        {
            parent:: __construct("Engenharia da Computacao", 20);
            $this -> nome = $nome;
            $this -> matricula = $matricula;
            $this -> nota = $nota;
        }
    }

    $Aluno1 = new Aluno("Lara", 10001, 7);
    $Aluno2 = new Aluno("Marcos", 10002, 9);
    $Aluno3 = new Aluno("Luiz", 10003, 5);

    $alunos = [$Aluno1, $Aluno2, $Aluno3];
    print_r($alunos);


?>




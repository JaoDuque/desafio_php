<?php

echo "-----------------------------REGRAS---------------------------------------------".PHP_EOL;
echo "|          Todas as notas maiores do que 10 serão consideras 10                |".PHP_EOL;
echo "|    Todas as notas negativas ou não digitadas serão consideradas 0            |".PHP_EOL;
echo "--------------------------------------------------------------------------------".PHP_EOL;

    echo "Informe a turma:".PHP_EOL;
    $turma = fgets(STDIN);
   
    echo "Digite a quantidade de alunos:".PHP_EOL;
     $qtdalunos = fgets(STDIN);
    
    echo "-------------------------------------------------------------------------------".PHP_EOL;
    echo "|                             Digite as notas                                 |".PHP_EOL;
    echo "-------------------------------------------------------------------------------".PHP_EOL;
    
   for($i = 0; $i < $qtdalunos; $i++){
    $alunoNum = $i+1;
    echo "Aluno $alunoNum=".PHP_EOL;
  
    $nota1 = fgets(STDIN);
    $nota2 = fgets(STDIN);
   
    if ($nota1 >= 10) $nota1 = 10;
    if ($nota1 <= 0) $nota1 = 0;
    if ($nota2 >= 10) $nota2 = 10;
    if ($nota2 <= 0) $nota2 = 0;
   }
   
   $medianotas = $qtdalunos 
   $mediageral = 
   echo "-------------------------------------------------------------------------------".PHP_EOL;
   echo "|Turma: $turma";
   echo "-------------------------------------------------------------------------------".PHP_EOL;
   echo "|Média de todas as notas:";
   echo "-------------------------------------------------------------------------------".PHP_EOL;
   echo "|Média de todas as médias:";
   echo "-------------------------------------------------------------------------------".PHP_EOL;
   echo "|                               MÉDIA DOS ALUNOS                              |";
   echo "-------------------------------------------------------------------------------".PHP_EOL;


  
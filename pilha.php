<?php
//pilha
//Arquivo referente ao curso  PHP Exceptions: Tratamento de erros da Alura.
//debug_backtrace()  ->  Mostra a trilha da pilha

/*
Fatal error: Quando não há tratamento de erro e o php matou o processo
*/

function funcao1(){
    echo "Entrei na função 1". PHP_EOL;
    try{
        funcao2();
    } catch(DivisionByZeroError | RuntimeException $problema){
        echo $problema->getMessage(). PHP_EOL;
        echo $problema->getLine(). PHP_EOL;
        echo $problema->getTraceAsString(). PHP_EOL;
    }
    echo "Saindo da função 1". PHP_EOL;
}

function funcao2(){

    echo "Entrei na função 2". PHP_EOL;
    for($i = 0; $i <= 5; $i++){
        echo $i. PHP_EOL;
    }
   /* $divisao = intdiv(5, 0);
    $arrayFixo = new SplFixedArray(2);
    $arrayFixo[3] = "valor";*/

    /*
     * Lançamento de Excessão
     * Utilizamos o throw como lançar
     */
    $excepetion  = new RuntimeException();
    throw $excepetion;
    echo "Saindo da função 2".PHP_EOL;
}

echo 'Iniciando programa principal'.PHP_EOL;
funcao1();
echo 'Finalizando programa principal'.PHP_EOL;
?>
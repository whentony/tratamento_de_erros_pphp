<?php
/*
try{
    echo "Executando um Finally" . PHP_EOL;
}catch (Throwable $exception){
    echo "Cair no catch ". PHP_EOL;

    // O finally é executado sempre, independente se cair no catch

} finally {
    echo "finally". PHP_EOL;
}*/
echo a();
function a(){
    /*
     * Exemplo de uso realmente necessário de finally
     */
    try{
        throw  new Exception();
        return "0";

    }catch (Throwable $exception){
        return "1";
    } finally {
        echo "Final da Função";
    }
}
<?php 
//2. Crie uma função que recebe uma palavra(string) e retorna se a 
// palavra é um palíndromo ou não.

function ehPalíndromo($palavra){

    $palavra = strtolower(str_replace(' ','',$palavra));
    $invertida = strrev($palavra);

    if ($palavra === $invertida){

        return 'A palavra é um palíndromo.';

    } else{

        return 'A palavra não é um palíndromo.';

    }
}

?>

<form method="post">

    Digite uma palavra: <input type="text" name="palavra">
    <input type="submit" value="Verificar">
</form>

<?php 
     
     if(isset($_POST['palavra'])){
        $palavra = $_POST['palavra'];
        echo ehPalíndromo($palavra);
     }

?>
<?php 
//1.Receba o nome, idade e e-mail de uma pessoa.
function validaE_mail ($e_mail){
    return filter_var($e_mail, FILTER_VALIDATE_EMAIL);
}

function maiorDeIdade($idade){
    return $idade >= 18;
}

function mensagem($idade, $e_mail, $nome){
    if(!validaE_mail($e_mail)) {
        return "E-mail inválido.";
    } 
    if(!maiorDeIdade($idade)){
        return "$nome, você é menor de idade.";
    }
    return "$nome, seus dados estão corretos.";
}
?>
 
<form method="post">
    Nome: <input type="text" name="nome"><br> <!-- Nome do usuário -->
    Idade: <input type="number" name="idade"><br> <!-- Idade do usuário -->
    E-mail: <input type="email" name="email" required><br> <!-- E-mail do usuário -->
    <input type="submit" value="Enviar">
</form> 

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $e_mail = $_POST['email'];

    echo mensagem($idade, $e_mail, $nome);
}
?>
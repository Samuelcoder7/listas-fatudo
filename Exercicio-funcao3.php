<?php 

function Saudacao($Genero,$nome){
    if($Genero == "Masculino"){
        return "$nome, seja bem-vindo!";
    } else {
        return "$nome, seja bem-vinda!";
    }
}

   

?> 
<form action="" method="post">
    <label for="nome">Nome:</label> <!-- Campo para o nome -->
    <input type="text" id="nome" name="nome" required placeholder="Digite seu nome"> <!-- Campo obrigatório e com placeholder específico -->

    <!-- Campo para seleção de gênero -->
    <label for="genero">Gênero:</label>
    <select id="genero" name="genero" required> <!-- Campo obrigatório para gênero -->
        <option value="Masculino">Masculino</option> <!-- Opção Masculino -->
        <option value="Feminino">Feminino</option>   <!-- Opção Feminino -->
    </select>

    <input type="submit" value="Enviar">
</form>

<?php 
    // Verifica se o formulário foi enviado
   if($_SERVER["REQUEST_METHOD"] == "POST"){ 
       $nome = $_POST["nome"]; // Obtém o nome do formulário
       $genero = $_POST["genero"];// Obtém o gênero do formulário
       echo Saudacao($genero, $nome);// Chama a função de saudação
   }

?>
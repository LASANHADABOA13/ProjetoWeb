<?php
// Verifica se usuário escolheu algum número
if(isset($_POST["numeros"]))
{
    echo "Os números de sua preferência são:<BR>";

    // Faz loop pelo array dos numeros
    foreach($_POST["numeros"] as $numero)
    {
        echo "- " . $numero . "<BR>";
    }
}
else
{
    echo "Você não escolheu número preferido!<br>";
}

// Verifica se usuário quer receber novidades
if(isset($_POST["news"]))
{
    echo "Você deseja receber as novidades por email!";
}
else
{
    echo "Você não quer receber novidades por email...";
}

// formulario teste
var_dump($_GET);

echo 'Nome: ' . ($_GET['nome'] ?? '') . "<br>"; echo 'E-mail: ' . ($_GET['email'] ?? '') . "<br>";
?>
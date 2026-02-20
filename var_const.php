<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Const_var</title>
</head>
<body>
    <?php 
     /*int = numero,
    string = caractere,
    boleano = true/false
    float = 0.0 */

    $aluno = "Arnoldo Shuaseneguer";
    $idade = "130";

    //const instuição ="cetam"
define("instuição","Centro de Educação Tecnologica do Amazonas");

echo "Olá aluno $aluno $idade Bem Vindo ao Cetam ". instuição;

?>
    
</body>
</html>
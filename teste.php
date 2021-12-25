<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="calculo.php" method="get">
             Primeiro numero:
<input name="num1" type="text" />
<br /> <br />
             Segundo numero:
<input name="num2" type="text" />
<br /> <br />
             Operacao:
             <br />
             <input type="radio" name="operacao" value="soma" checked> soma
<br>
<input type="radio" name="operacao" value="subtracao"> subtração
<br>
<input type="radio" name="operacao" value="multiplicacao" checked> multipicação
<br>
<input type="radio" name="operacao" value="divisao"> divisão
<br>
<input type="radio" name="operacao" value="potencia"> potência
<br /> <br />
<input type="submit" value="submeter" />
<br /> <br />
         </form>
</body>
</html>
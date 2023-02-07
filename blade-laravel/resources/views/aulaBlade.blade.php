<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula Blade</title>
</head>
<body>
    <h4>Aula Blade 1</h4>
    <h5>1+3 = {{2+2}}</h5> <!--Pode-se usar expressões no blade-->
    <h5>{{-- function()--}}</h5> <!--Comentários no blade é representado por dois hifens--> 
    <p>Código html: {{ $html }}</p> <!---->
    <p>Código html interpretado: {!! $html !!}</p> <!--Interpretar html no blade -->

    <hr>
    <h4>Aula Blade 2</h4>
    <h5>{{$nome == 'teste' ? 'Sim' : 'Não'}}</h5> <!-- If ternário -->

    @if($nome == 'Mauricio') <!--Verificação por diretiva por bloco-->
        <h3>Sim</h3>
    @elseif($nome == 'teste')
        <h3>teste elseif</h3>
    @else    
        <h3>Não é nenhum</h3>
    @endif    

    <hr>

    <h4>Aula Blade 3</h4>

    @for($i=1;$i<=10;$i++)
        <p>O valor de i é: {{$i}}</p>
    

</body>
</html>
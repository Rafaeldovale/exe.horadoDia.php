<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hora do Dia</title>
</head>
<body>
    <h1> Hora do Dia </h1>
    <form action="index.php" method="POST">
        <input type="time" name="hora"><br>
        <input type="date" name="data"><br>
        <button>mostrar</button><br>
    </form>
    <?php
        $time = $_POST['hora'];
        $date = $_POST['data'];
        //echo $date."<br>";
        //echo $time."<br>";

        if($time>00 && $time < 12){
            echo "Bom dia Programador! Já são: $time horas do dia $date<br>";
            echo "<img src='http://localhost/horariophp/img/amanhecer.jpg'/>";
        }else if($time >= 12 && $time < 18){
            echo "Boa tarde Programador! Já são $time: horas <br>$date<br>";
            echo "<img src='http://localhost/horariophp/img/entardecer.jpg'/>";
        }else{
            echo "Já são: $time horas do dia $date, hora de descansar! Boa noite!<br>";
            echo "<img src='http://localhost/horariophp/img/anoitecer.jpg'/>";
        }
    ?>
 
</body>
<footer>
<?php 
    date_default_timezone_set('America/Sao_Paulo');    
    $datahora = date('d-m-Y h:i:s a', time());  
    echo "A data e a hora real no Brasil são $datahora.\n";

    /*$Object = new DateTime();  
    $datahora = $Object->format("d-m-Y h:i:s a");  
    echo "A data e a hora no Brasil são $datahora.";*/
    ?>
</footer>
</html>
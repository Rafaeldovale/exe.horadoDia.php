<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <title>Hora do Dia</title>
</head>
<body>
    <div class="class">
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
            echo "<img src='http://localhost/horariophp/img/amanhecer.jpg'/>
            <style>body{ background-image: url(http://localhost/horariophp/img/amanhecer.jpg);</sytle>}";
        }else if($time >= 12 && $time < 18){
            echo "<h2>Boa tarde Programador! Já são $time: horas <br>$date<br><h2>";
            echo "<img src='http://localhost/horariophp/img/entardecer.jpg'/>
            <style>body{ background-image: url(http://localhost/horariophp/img/entardecer.jpg);</sytle>}";
        }else{
            echo "<h2>Já são: $time horas do dia $date, hora de descansar! Boa noite!</h2><br>";
            echo "<img src='http://localhost/horariophp/img/anoitecer.jpg'/>
            <style>body{ background-image: url(http://localhost/horariophp/img/anoitecer.jpg);</sytle>}";
        }
    ?>
    </div>
</body>
<footer>
    <?php 
        date_default_timezone_set('America/Sao_Paulo');    
        $datahora = date('d-m-Y h:i:s a', time());  
        echo "A data e a hora no Brasil são $datahora.\n";

        /*$Object = new DateTime();  
        $datahora = $Object->format("d-m-Y h:i:s a");  
        echo "A data e a hora no Brasil são $datahora.";*/
        ?>
</footer>
</html>
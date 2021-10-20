<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercicio Estranho</title>
    </head>
    <body>
        <form action="Exercicio Estranho.php" method="GET">
            <label>Número 1</label>
            <input type="number" name="a"><br>
            <label>Número 2</label>
            <input type="number" name="b"><br>
            <label>Número 3</label>
            <input type="number" name="c"><br>
            <label>Número 4</label>
            <input type="number" name="d"><br>
            <label>Número 5</label>
            <input type="number" name="e"><br>
            <label>Número 6</label>
            <input type="number" name="f"><br>
            <label>Número 7</label>
            <input type="number" name="g"><br>
            <label>Número 8</label>
            <input type="number" name="h"><br>
            <label>Número 9</label>
            <input type="number" name="i"><br>
            <label>Número 10</label>
            <input type="number" name="j"><br>
            <button type="submit">Send</button>
        <?php
            $a = $_GET['a'];
            $b = $_GET['b'];
            $c = $_GET['c'];
            $d = $_GET['d'];
            $e = $_GET['e'];
            $f = $_GET['f'];
            $g = $_GET['g'];
            $h = $_GET['h'];
            $i = $_GET['i'];
            $j = $_GET['j'];

            if($a % 2 == 0)
            print "$a é par, ";
            if($a % 2 != 0)
            print "$a é impar, ";
            if($b % 2 == 0)
            print "$b é par, ";
            if($b % 2 != 0)
            print "$b é impar, "; 
            if($c % 2 == 0)
            print "$c é par, ";
            if($c % 2 != 0)
            print "$c é impar, "; 
            if($d % 2 == 0)
            print "$d é par, ";
            if($d % 2 != 0)
            print "$d é impar, "; 
            if($e % 2 == 0)
            print "$e é par, ";
            if($e % 2 != 0)
            print "$e é impar, "; 
            if($f % 2 == 0)
            print "$f é par, ";
            if($f % 2 != 0)
            print "$f é impar, "; 
            if($g % 2 == 0)
            print "$g é par, ";
            if($g % 2 != 0)
            print "$g é impar, "; 
            if($h % 2 == 0)
            print "$h é par, ";
            if($h % 2 != 0)
            print "$h é impar, "; 
            if($i % 2 == 0)
            print "$i é par, ";
            if($i % 2 != 0)
            print "$i é impar, ";
            if($j % 2 == 0)
            print "$j é par, ";
            if($j % 2 != 0)
            print "$j é impar, ";    
        ?>
    </body>
</html>
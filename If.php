<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>IF</title>
    </head>
    <body>
        <form action="IF.php" method="GET">
            <label>Informe um Numero</label>
            <input type="number" name="a"><br>
            <button type="submit">Send</button>
        <?php
            $numero = $_GET['a'];

            if($numero % 2 == 0)
            print "O número $numero é divisível por 2, ";
            if($numero % 2 != 0)
            print "O número $numero não é divisível por 2, "; 

            if($numero % 5 == 0)
            print "é divisível por 5, ";
            if($numero % 5 != 0)
            print "não é divisível por 5, "; 

            if($numero % 10 == 0)
            print "e é divisível por 10";
            if($numero % 10 != 0)
            print "e não é divisível por 10"; 
        ?>
    </body>
</html>
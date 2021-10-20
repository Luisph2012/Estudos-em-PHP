<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Switch</title>
    </head>
    <body>
        <?php
            switch (date("w")){
                case 1:
                    $dia_da_semana = "Segunda";
                    break;
                case 2:
                    $dia_da_semana = "Terca";
                    break;
                case 3:
                    $dia_da_semana = "Quarta";
                    break;
                case 4:
                    $dia_da_semana = "Quinta";
                    break;
                case 5:
                    $dia_da_semana = "Sexta";
                    break;
                case 6:
                    $dia_da_semana = "Sabado";
                    break;            
                default:
                    $dia_da_semana = "Domingo";
                    break;}
            print "de Segunda, Terça, Quarta, Quinta, Sexta, Sábado e Domingo<br> Hoje é $dia_da_semana.";
        ?>
    </body>
</html>
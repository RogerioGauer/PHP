<html>
 <head>
     <meta charset="UTF-8">
     <title>
         Exerc.08PHP
     </title>
 </head>

 <body>
     <h1>Exerc.08PHP</h1>    

     <form>
        Peso: <input name="peso">
        <br>
        <br>
        Altura: <input name="altura">
        <br>
        <br>
        <input type="submit">
     </form>
     <hr color=black>

     <?php
     /* 
     Tabela de IMC:

     Abaixo de 17        = Muito abaixo do peso;
     Entre 17 e 18,49    = Abaixo do peso;
     Entre 18,50 e 24,99 = Peso normal;
     Entre 25 e 29,99    = Acima do peso;
     Entre 30 e 34,99    = Obesidade I;
     Entre 35 e 39,99    = Obesidade II (severa);
     Acima de 40         = Obesidade III (mórbida); 
     */
 
     if((isset($_GET["peso"])) && (isset($_GET["altura"]))) 
     {
        $peso = $_GET["peso"];
        $altura = $_GET["altura"];
        $imc = $peso / ($altura * $altura);
        echo "O IMC é " . $imc;
        echo "<br>";

        if($imc < 17)
        {
            echo "Muito abaixo do peso";
        }
        else
        {
            if($imc <=18.49)
            {
                echo "Abaixo do peso";
            }
            else
            {
                if($imc <=24.99)
                {
                    echo "Peso normal";
                }  
                else
                {
                    if($imc <= 29.99)
                    {
                        echo "Acima do peso";
                    }
                    else
                    {
                        if($imc <=34.99)
                        {
                            echo "Obesidade I";
                        }
                        else
                        {
                            if($imc <= 39.99)
                            {
                                echo "Obesidade II (severa)";
                            }
                            else
                            {
                                echo "Obesidade III (mórbida)";
                            }
                        }
                    }               
                } 
            }          
        }
     }
     ?>          
 </body>
</html>
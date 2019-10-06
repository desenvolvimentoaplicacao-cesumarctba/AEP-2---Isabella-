<html>
    <head>
        <title>Pessoa</title>
    </head>
    <body>
    <pre>
        <?php

            require_once 'AEP2.php';
            
            $p1= new Pessoa('isa','21/06/2001',12435256132,1.59,52.3);
            $p1->calculaImc();
            $p1->validaCpf();
            $p1->calculaIdade();
            
            //print_r($p1);

        ?>
    </pre>
    </body>
</html>

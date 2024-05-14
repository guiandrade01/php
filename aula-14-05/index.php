<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1> Array Laços </h1>

    <div class="div1">
        <h2> Array com for </h2>
        <pre>
            <?php
                $a1=array("Guilherme", "Andrade");
                for($a=0; $a<2; $a++){
                    echo "<br> $a1[$a] <br>";
                }
            ?>
        </pre>
    </div>
    
    <div class="div2">
        <h2> Array com foreach </h2>

        <h3> Ex 1: </h3>
        <pre> 
            <?php
                $a2=array(10,9,8,7);
                foreach($a2 as $dados){
                    echo "<br> $dados <br>";
                }
            ?>

        </pre>

        <h3>  Ex 2: </h3>
        <pre>
            <?php
                $a3=array("Maria"=>25, "João"=>44, "Jose"=>12, "Neusa"=>73);
                foreach($a3 as $dados){
                    echo "<br> $dados <br>";
                }
            ?>
        </pre>

        <h3>  Ex 3: </h3>
        <pre>
            <?php
                foreach($a3 as $dados => $valor){
                    echo "<br> $dados: tem $valor anos <br>";
                }
            ?>
        </pre>
    </div>
    <div class="div3">
        <h2> Print </h2>
        <h3>  Ex 1: </h3>
        <pre>
            <?php
                echo"<br> Maria tem: ";
                print_r($a3["Maria"]);
                echo"<br> João tem: ";
                print_r($a3["João"]);
                echo"<br> Jose tem: ";
                print_r($a3["Jose"]);
                echo"<br> Neusa tem: ";
                print_r($a3["Neusa"]);
            ?>
        </pre>
        
        <h3>  Ex 2: </h3>
        <pre>
            <?php
                $a4=array("Maria" => array("endereco"=>"Rua abc", "Bairro"=>"Bairro 1", "Cidade"=>"Caculé"),
                            "João" => array("endereco"=>"Rua 123", "Bairro"=>"Bairro 2", "Cidade"=>"São Paulo"),
                            "Zeca" => array("endereco"=>"Rua 456", "Bairro"=>"Bairro 3", "Cidade"=>"Rio")
                );

                echo"<br> Endereço de Maria: ";
                print_r($a4 ["Maria"]["endereco"]);
                echo"<br> Bairro de Maria: ";
                print_r($a4 ["Maria"]["Bairro"]);
            ?>      
        </pre>

        <h3>  Ex 3: </h3>
        <pre>
            <?php
                echo"<br> Endereço de Maria: ";
                print_r($a4 ["Maria"]["endereco"]);
            ?>
        </pre>

        <h3>  Ex 4: </h3>
        <pre>
            <?php
                echo"<br> Cidade de Zeca: ";
                print_r($a4 ["Zeca"]["Cidade"]);
            ?>

            <?php
                echo"<br> Bairro de João: ";
                print_r($a4 ["João"]["Bairro"]);
            ?>
        </pre>

        <h3>  Ex 5: </h3>
        <pre>
            <?php
                echo"<br> Endereço de Maria: ";
                print_r($a4 ["Maria"]["endereco"]);
                echo"<br> Bairro de Maria: ";
                print_r($a4 ["Maria"]["Bairro"]);
                echo"<br> Cidade de Maria: ";
                print_r($a4 ["Maria"]["Cidade"]);
            ?>
        </pre>
    </div>
</body>
</html>
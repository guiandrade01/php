<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="div1">
        <h1> 4.6 Constantes: </h1>
        <?php
            define("PI", 3.1415);
            echo PI;
        ?>

        <h2> 4.6.1 Constantes Pré-definidas: </h2>
        <?php
            function funcConsts(){
                echo "ARQUIVO: ".__FILE__."<br>";
                echo "DIRETÓRIO: ".__DIR__."<br>";
                echo "LINHA: ".__LINE__."<br>";
                echo "FUNÇÃO: ".__FUNCTION__."<br>";
            }

            funcConsts();
        ?>

        <?php
            echo "<br>";
            class veiculo{
                private $marca;
                function __construct(){
                    echo "CLASSE: ".__CLASS__."<br>";
                }
            
                function setMarca($marca) {$this->marca = $marca;
                    echo"MÉTODO: ".__METHOD__."<br>";
                }
            }

            $obj = new veiculo();
            $obj->setMarca("Wolksvagem");
        ?>

        <h2> 4.7 Variaveis Superglobais (pré-definidas) </h2>
        <?php
            $vars_pre = get_defined_vars();
            print_r($vars_pre);
        ?>

        <h2> 4.8 Função - PHP </h2>
        <?php
            function nome_funcao($par_1 = 0, $par_2 = "vazio") {
                echo "Código da Função <br>";
                return "Dado de Retorno: ".$par_1."/".$par_2;
            }

            $retorno = nome_funcao();
            echo $retorno."<br><br>";
            $retorno = nome_funcao(12, "Bill Gates");
            echo $retorno."<br><br>";
        ?>
    </div>
    <div class="div2">
        <h2> Atividade 1 </h2>
            <?php
                function sem_parametro() { 
                    $par_1 = 5;
                    $par_2 = 10;
                    $valor = 5 + 10;
                    echo "sem_parametro = $valor <br>";
                }

                sem_parametro()
            ?>

        <h2> Atividade 2 </h2>
            <?php
                function com_parametro($par_1 = 5, $par_2 = 10) {
                    $valor = $par_1 + $par_2;
                    echo "com_parametro = $valor <br>";
                }

                com_parametro()
            ?>

        <h2> Atividade 3 </h2>
        <?php
            function equacao($par_1 = 5, $par_2 = 10, $par_3 = 2) {
                $valor = ($par_1 + $par_2) * $par_3;
                echo "equacao_parametro = $valor <br>";
            }

            equacao()
        ?>
    </div>
        

    <div class="div3">
        <h2> Equação 1 </h2>
        <?php
            function quatro_operacao($p1, $p2) {
                $valor = $p1 * ($p1 + $p2) / ($p2 - $p1);
                return $valor;
            }

            echo quatro_operacao (10, 5);
        ?>

        <h2> Equação 2 </h2>
        <?php
            function num_quadrado($p1) {
                $valor = $p1 ** 2;
                return $valor;
            }

            echo num_quadrado (5);
        ?>
    </div>
</body>
</html>
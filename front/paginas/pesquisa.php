<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa - O-LINKe Medical</title>

    <link rel="stylesheet" href="../paginas/apontamento.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: #b5b5b5; width: 100%; height: 100%;">
    
    <?php // CONEXAO COM O BANCO DE DADOS
        $serverName = "localhost";
        $user = "root";
        $password = "";
        $dataBase = "banco_tcc_apont";
        $connection = null;
        
        try {
            $connection = new PDO("mysql:host=$serverName; dbname=$dataBase; charset=utf8", $user, $password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        } catch (PDOException $ex) {
            $errorMsg = "Erro ao tentar realizar conexão. ERRO: " . $ex->getMessage();
        }
    ?>

    <?php include 'template.php';?>

    <h5 class="text-center mx-auto py-3" style="background-color: rgb(63, 0, 113); color: #fff;">PESQUISA</h5>
    
    <div class="container">
        <form action="" method="post">
            <?php // CONFERE CONEXAO, SE O BANCO NAO CONECTAR APARECE A MENSAGEM DE ERRO E QUAL ERRO.
                if(is_null($connection)){
                    echo "<div class='alert alert-danger my-3 text-center fw-bold'> $errorMsg </div>";
                    // Encerra o script php
                    exit();
                }
            ?>
            
            <div class="row text-center">
                <div class="col">    
                	<label for="" class="form-label fw-bold text-center">Pesquise:</label>
                    <div class="input-group mb-2">
                        <input name="pesquisar" type="text" class="form-control rounded-end">
                        <button type="submit" class="btn btn-success ">Pesquisar</button>
                    </div>
                </div>
            </div>

            

        </form>

        <?php
            $pesquisar = filter_input(INPUT_POST, "pesquisar", FILTER_DEFAULT);
            
            $sql = "SELECT numero_ordem, codigo, quantidade, lote, nome_operador FROM nop 
                    INNER JOIN operadores ON nop.operador_id = operadores.id_operador 
                    WHERE numero_ordem = :numeroOrdem OR lote LIKE :lote";
            $parametros = [
                "numeroOrdem" => $pesquisar,
                "lote" => "%$pesquisar%"
            ];

            $stmt = $connection->prepare($sql);
            $stmt->execute($parametros);
    
            $nop = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            if (count($nop) == 0) {
                echo "<div class='alert alert-danger text-center fw-bold'> Nenhum registro encontrado... </div>";
            } else {
                foreach($nop as $numeroOrdem){
                    $resposta =  "Número Ordem: " . $numeroOrdem['numero_ordem'] . " | " . 
                                    "Código: " . $numeroOrdem['codigo'] . " | " . 
                                    "Quantidade: " . $numeroOrdem['quantidade'] . " | " . 
                                    "Lote: " . $numeroOrdem['lote'] . " | " . 
                                    "Operador: " . $numeroOrdem['nome_operador'] . " <br> ";
                }
            }
        ?>

        <div class="alert alert-info text-center fw-bold">
            <?= $resposta ?>
        </div>
        
    </div>
</body>
</html>
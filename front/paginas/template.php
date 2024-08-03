<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apontamento - O-LINKe Medical</title>

    <link rel="stylesheet" href="../apontamento.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="index.php" method="post">
            <header class="topo d-flex justify-content-center align-items-center" style="background-color: rgb(63, 0, 113);"> <!-- style="background-color: rgb(63, 0, 113);" -->
                <h1 class="text-center py-2 px-3" style="background-color: white; ">
                    <span class="primeira_cor px-0">O∾L</span><span class="segunda_cor">I</span><span class="primeira_cor">NKe</span> 
                </h1>    
            </header> <hr>     

            <nav class="navegacao">
                <div class="row" style="text-align: center;">
                    <div class="col">
                        <button id="btnApontamento" name="btnApontamento"><a href="apontamento.php">Apontamento</a></button>
                    </div>
                    <div class="col">
                        <button id="btnPesquisa" name="btnPesquisa"><a href="pesquisa.php">Pesquisa</a></button>
                    </div>
                    <div class="col">
                        <button id="btnOperadores" name="btnOperadores"><a href="operadores.php">Operadores</a></button> <!--opr = Operadores-->
                    </div>
                </div>    
            </nav>
        </form>
    </div>
</body>
</html>
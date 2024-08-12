<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index - O-LINKe Medical</title>

    <link rel="stylesheet" href="../paginas/apontamento.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: #b5b5b5; width: 100%; height: 100%;">
    <div class="container">
        <form action="index.php" method="post">
            <header class="topo d-flex justify-content-center align-items-center mt-0" style="background-color: rgb(63, 0, 113);"> <!-- style="background-color: rgb(63, 0, 113);" -->
                <h1 class="text-center py-2 px-3 mt-2" style="background-color: white; ">
                    <span class="primeira_cor px-0" style="color: rgb(63, 0, 113);">O∾L</span><span class="segunda_cor" style="color: #96ac60;">I</span><span class="primeira_cor">NKe</span> 
                </h1>    
            </header> 

            <div class="row text-center">
                <div class="col-4 py-5">
                    <a href="apontamento.php" class="text-decoration-none">
                        <div class="icon">
                            <i class="bi bi-save"> <br> 
                                <div class="text">Apontamento</div>
                            </i>
                        </div>    
                    </a>
                </div>
                <div class="col-4 py-5">
                    <a href="pesquisa.php" class="text-decoration-none">
                        <div class="icon">
                            <i class="bi bi-search"> <br> 
                                <div class="text">Pesquisa</div>
                            </i>
                        </div>
                    </a>
                </div>
                <div class="col-4 py-5">
                    <a href="operadores.php" class="text-decoration-none">
                        <div class="icon">
                            <i class="bi bi-universal-access"> <br> 
                                <div class="text">Operadores</div>
                            </i>
                        </div>
                    </a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
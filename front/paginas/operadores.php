<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores - O-LINKe Medical</title>

    <link rel="stylesheet" href="../paginas/apontamento.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: #b5b5b5; width: 100%; height: 100%;">
    <div class="container">
        <form action="" method="post">
        
            <?php include 'template.php';?>

            <h5 class="text-center mx-auto py-3" style="background-color: rgb(63, 0, 113); color: #fff;">OPERADORES</h5>

            <div class="row">
                <div class="col">
                    <select name="turnos" class="text-center d-block w-25 h-100 my-1 mx-auto rounded-pill">
                        <option value="">Selecione um Turno</option>
                        <option value="primeiro_turno" <?= (isset($_POST['turnos']) && ($_POST['turnos']) == 'primeiro_turno') ? 'selected' : null ?>>1° Turno</option>
                        <option value="segundo_turno" <?= (isset($_POST['turnos']) && ($_POST['turnos']) == 'segundo_turno') ? 'selected' : null ?>>2° Turno</option>
                    </select>
                </div>
            </div>
        </form>
            
        <?php 
            $turnos = filter_input(INPUT_POST, "turnos", FILTER_SANITIZE_STRING);

            if(isset($turnos) == false || empty($turnos) == false){
                $alertColor = "danger";
                $resposta = "Selecione um Turno";
            } else {
                switch($turnos){
                    case "primeiro_turno":
                        $alertColor = "success";
                        $resposta = "<div class='text-center'>Primeiro turno selecionado </div>";
                        break;
                    case "segundo_turno":
                        $alertColor = "info";
                        $resposta = "Tchau";
                        break;
                        default:
                        echo"Teste falhou";
                }
            }
        ?>

        <div class="mt-3 alert alert-<?=$alertColor?>">
            <?=$resposta?>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores - O-LINKe Medical</title>

    <link rel="stylesheet" href="../apontamento.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: #b5b5b5; width: 100%; height: 100%;">
    <div class="container">
        <form action="index.php" method="post">
        
            <?php include 'template.php';?>

            <div class="row">
                <div class="col">
                    <select name="turnos" id="turnos" class="text-center d-block w-25 h-100 my-1 mx-auto rounded-pill">
                        <option value="">Selecione um Turno</option>
                        <option value="primeiro_turno" <?= (isset($_POST['$turnos']) && ($_POST['$turnos']) == "primeiro_turno") ? 'selected' : null ?>>1° Turno</option>
                        <option value="segundo_turno" <?= (isset($_POST['$turnos']) && ($_POST['$turnos']) == "segundo_turno") ? 'selected' : null ?>>2° Turno</option>
                    </select>
                </div>
            </div>
        </form>
            
        <?php 
            $turnos = filter_input(INPUT_POST, 'turnos', FILTER_SANITIZE_STRING);

            switch($turnos){
                case "primeiro_turno":
                    echo"Oi";
                    break;
                case "segundo_turno":
                    echo"Tchau";
                    break;
                    default:
                    echo"Teste falhou";
            }
           
        ?>
    </div>
</body>
</html>
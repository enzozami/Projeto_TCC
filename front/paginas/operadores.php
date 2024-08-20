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
    
<?php include 'template.php';?>

<h5 class="text-center mx-auto py-3" style="background-color: rgb(63, 0, 113); color: #fff;">OPERADORES</h5>

    <div class="container">
        <form action="" method="post">
            <div class="row">
                <div class="col">
                    <select name="turnos" id="turnos" class="text-center d-block w-25 h-100 my-1 mx-auto rounded-pill" onchange="this.form.submit()"> <!-- onchange -->
                        <option value="">Selecione um Turno</option>
                        <option value="primeiro_turno" <?= (isset($_POST['turnos']) && ($_POST['turnos']) == 'primeiro_turno') ? 'selected' : null ?>>1° Turno</option>
                        <option value="segundo_turno" <?= (isset($_POST['turnos']) && ($_POST['turnos']) == 'segundo_turno') ? 'selected' : null ?>>2° Turno</option>
                    </select>
                </div>
                <div id="error-message-turno" style="color: red; display: none">Turno inválido.</div>
            </div>
            <div class="row">
                <div id="primeiro_turno" class="col text-center my-3" style="display: none;">
                    <label for="turno1" class="label-control">Primeiro Turno:</label>
                    <select name="turno1" id="turno1" class="form-control rounded-pill" >
                        
                    </select>
                </div>
            </div>
            <div class="row">
                <div id="segundo_turno" class="col text-center my-3" style="display: none;">
                    <label for="turno2" class="label-control">Segundo Turno:</label>
                    <select name="turno2" id="turno2" class="form-control rounded-pill">

                    </select>
                </div>
            </div>
        </form>
            
        <?php 
            $turnos = filter_input(INPUT_POST, "turnos", FILTER_SANITIZE_STRING);

            if(isset($turnos) == false || empty($turnos)){
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
                        $resposta = "<div class='text-center'>Segundo turno selecionado</div>";
                        break;
                    default:
                        $alertColor = "danger";
                        $resposta = "Turno inválido.";
                }
            }
        ?>

        <div class="mt-3 alert alert-<?=$alertColor?> text-center">
            <?= $resposta ?>
        </div>
    </div>

    <script>
        document.getElementById('turnos').addEventListener('change', function(){
            
            var turnos = this.value;
            var primeiro_turnoDiv = document.getElementById('primeiro_turno');
            var segundo_turnoDiv = document.getElementById('segundo_turno');

            if(turnos == "primeiro_turno"){
                primeiro_turnoDiv.style.display = 'block';
                segundo_turnoDiv.style.display = 'none';
            } else if(turnos == "segundo_turno"){
                primeiro_turnoDiv.style.display = 'none';
                segundo_turnoDiv.style.display = 'block';
            } else {
                primeiro_turnoDiv.style.display = 'none';
                segundo_turnoDiv.style.display = 'none';
            }
        });
        
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apontamento - O-LINKe Medical</title>

    <link rel="stylesheet" href="apontamento.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: #b5b5b5; width: 100%; height: 100%;">
    <div class="container">
        <form action="index.php" method="post">
            <header class="topo">
                <h1>
                    <span class="primeira_cor">O∾L</span><span class="segunda_cor">I</span><span class="primeira_cor">NKe</span> 
                </h1> <hr> 
            </header>    
            
            
            <nav class="navegacao">
                <div class="row" style="text-align: center;">
                    <div class="col">
                        <a href="apontamento">Apontamento</a>
                    </div>
                    <div class="col">
                        <a href="pesquisa">Pesquisa</a>
                    </div>
                    <div class="col">
                        <a href="opr">Operadores</a> <!--opr = Operadores-->
                    </div>
                </div>    
            </nav>
            <hr>
                <h6 class="h5">APONTAMENTO</h6>

            <div class="row" id="primeira_parte">
                <div class="col">
                    <label for="nop" class="form-label">Número Ordem: </label>
                    <input type="text" id="nop" class="form-control" pattern="^[0-9]{6}[A-Z]{2}[0-9]{3}$" title="Número Ordem" required>
                    <div id="error-message-nop" style="color: red; display: none">Entrada Inválida.</div>
                </div>

                <div class="col">
                    <label for="codigo" class="form-label">Código: </label>
                    <input type="number" step="any" id="codigo" class="form-control">
                </div>
                
                <div class="col">
                    <label for="quantidade" class="form-label">Quantidade: </label>
                    <input type="number" step="any" id="quantidade" class="form-control" pattern="^[0-9]{4}$" title="Quantidade" required>
                    <div id="" style="color: red; display: none;"></div>
                </div>

            </div>

            <div class="row" id="segunda_parte">
                <div class="col">
                    <label for="operador" class="form-label">Operador: </label>
                    <input type="number" step="any" id="operador" class="form-control" pattern="^[0-9]{2}$" title="Operador" required>
                    <div id="error-message-operador" style="color: red; display: none"></div>
                </div>

                <div class="col">
                    <label for="operacao" class="form-label">Operação: </label>
                    <select name="operacao" id="operacao" class="form-control rounded-pill" onchange="teste()" required>
                        <option value="">Selecione uma operação</option>
                        <option value="usi">Usinagem</option>
                        <option value="reb">Rebarbar</option>
                        <option value="lav">Lavagem</option>
                        <option value="poli">Polimento</option>
                        <option value="in">Inspeção</option>
                        <option value="est">Esterialização</option>
                        <option value="estoque">Estoque</option>
                    </select>
                    <div id="error-message-operacao" style="color: red; display: none">Operação inválida.</div>
                </div>

                <div id="maquina-div" class="col" style="display: none">
                    <label for="maquina" class="form-label">Máquina: </label>
                    <select name="maquina" id="maquina" class="form-control rounded-pill">
                        <option value="">Selecione uma máquina</option>
                        <option value="torno_l20">M-21</option>
                        <option value="torno_l20_2">M-31</option>
                        <option value="torno_C16">M-13</option>
                        <option value="torno_C16_2">M-14</option>
                        <option value="torno_C16_3">M-15</option>
                        <option value="centro_torneamento_star">M-05</option>
                        <option value="centro_usinagem_760"></option>
                        <option value="centro_usinagem_660"></option>
                        <option value="brother">Brother</option>
                    </select>
                    <div class="error-message-maquina" style="color: red; display: none">Máquina inválida.</div>
                </div>
            </div>   
            <br><br>
            <button class="btn btn-success my-2 w-25 d-block mx-auto">Salvar</button> 
        </form>

        <?php 
            $nop = filter_input(INPUT_POST, 'nop', FILTER_SANITIZE_STRING);
            $codigo = filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_NUMBER_INT);
            $operacao = filter_input(INPUT_POST, 'operacao', FILTER_SANITIZE_NUMBER_INT);
            $operador = filter_input(INPUT_POST, 'operador', FILTER_SANITIZE_NUMBER_INT);
            $maquina = filter_input(INPUT_POST, 'maquina', FILTER_SANITIZE_STRING);
            $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
        
            
        ?>

    </div>
    
    <script src="apontamento.js"></script>
    <script>

        /*function teste() {
            alert('teste');
            var operacao = this.value;
            var maquinaDiv = document.getElementById('maquina-div');
            
            if(operacao == "usi"){
                maquinaDiv.style.display = 'block';
                isValid = false;
            } else {
                maquinaDiv.style.display = 'none';
                document.getElementById('maquina').selectedIndex = 0; // reinicia para o padrao se o campo 'usi' for desselecionado
            }
            
        }*/

        document.getElementById('operacao').addEventListener('change', function() {
            
    var operacao = this.value;
    var maquinaDiv = document.getElementById('maquina-div');
    
    if(operacao == "usi"){
        maquinaDiv.style.display = 'block';
        isValid = false;
    } else {
        maquinaDiv.style.display = 'none';
        document.getElementById('maquina').selectedIndex = 0; // reinicia para o padrao se o campo 'usi' for desselecionado
    }
    });
    </script>
</body>
</html>
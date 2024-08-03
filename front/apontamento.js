document.querySelector('form').addEventListener('submit', function(event){
    var isValid = true;

    var nop = document.getElementById('nop');
    var operacao = document.getElementById('operacao');
    var operador = document.getElementById('operador');

    if(!nop.value.match(/^[0-9]{6}[A-Z]{2}[0-9]{3}$/)){
        document.getElementById('error-message-nop').style.display = 'block';
        isValid = false;
    } else {
        document.getElementById('error-message-nop').style.display = 'none';
    }

    if(!operacao.value === ""){
        document.getElementById('error-message-operacao').style.display = 'block';
        isValid = false;
    } else {
        document.getElementById('error-message-operacao').style.display = 'none';
    }

    if(!operador.value.match(/^[0-9]{2}$/)){
        document.getElementById('error-message-operador').style.display = 'block';
        isValid = false;
    } else {
        document.getElementById('error-message-operador').style.display = 'none';
    }

    if(!isValid){
        event.preventDefault();
    }
});


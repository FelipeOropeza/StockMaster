function AumentarQtd() {
    let $valor = parseInt(document.getElementById('qtd').value);

    let $soma = 1;

    let $result = $valor + $soma;
    document.getElementById('qtd').value = $result;
    console.log($result);
}

function DiminuirQtd() {
    let $valor = parseInt(document.getElementById('qtd').value);
    let $soma = 1;

    if ($valor <= 1) {
        document.getElementById('qtd').value = 1;
    }
    else {
        let $result = $valor - $soma;
        document.getElementById('qtd').value = $result;
        console.log($result);
    }
}
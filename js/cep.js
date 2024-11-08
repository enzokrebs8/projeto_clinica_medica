function buscaCep(){
    let cep = document.getElementById('txtCep').value;
    if(cep !== ""){
        let url = `https://brasilapi.com.br/api/cep/v1/`+ cep;
        let req = new XMLHttpRequest();
        req.open('GET', url);
        req.send();

        req.onload = function(){
            if(req.status === 200){
                let endereco = JSON.parse(req.response);
                document.getElementById('txtRua').value = endereco.street;
                document.getElementById('txtBairro').value = endereco.neighborhood;
                document.getElementById('txtCidade').value = endereco.city;
                document.getElementById('txtEstado').value = endereco.state;
            }
            else if(req.status === 404){
                alert("CEP Inválido!");
            }
            else{
                alert("Erro ao buscar CEP!");
            }
        }
    }
}

window.onload = function(){
    let cep = document.getElementById('cep');
    cep.addEventListener('blur', buscaCep);
}
const formBusca = document.querySelector("#form-busca");
const campoBusca = document.querySelector("#campo-busca");
const lista = document.querySelector("#resultados");

lista.classList.add('visually-hidden');

campoBusca.addEventListener("input", function(){

    if ( this.value != '' ) {
        fetch('resultados.php', {
            method: 'POST',
            body: new FormData(formBusca)
        })
        .then(function(response) {
            return response.text()
        })
        .then(function(dados) {
            console.log(dados);
            lista.classList.remove('visually-hidden');
            lista.innerHTML = dados;
        })
    } else {
        lista.classList.add('visually-hidden');
        lista.innerHTML = '';
    }   
});

document.addEventListener('DOMContentLoaded', function(){
    document.querySelector("#upload").addEventListener("change", function(imagem){
        const arquivo = imagem.target.files.item(0);
        const endereco =new FileReader();
        endereco.onloadend = function() {
            document.querySelector("#img").setAttribute("src", endereco.result);
        }
        endereco.readAsDataURL(arquivo);
    });
});
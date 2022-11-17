let lista = document.getElementById("lista")

window.addEventListener('DOMContentLoaded', (e) => {
    fetch('./data/get-imoveis.php', {method: 'get'})
    .then(data => data.json())
    .then(imovel => {
        imovel.forEach(i => {
            let imovel = document.createElement('div');
            imovel.classList = "imovel";
            imovel.innerHTML = `<p id="imovel_tipo">${i.tipo}</p>
                                <p id="imovel_endereco">${i.endereco}</p>
                                <p id="imovel_quartos">Quartos: ${i.quartos}</p>
                                <p id="imovel_descricao">${i.descricao}</p>
                                <div class="informacao">
                                    <div id="imovel_preco"><img src="./img/dinheiro.svg"><p>R$${i.preco}</p></div>
                                    ${i.tipo == "Casa" ? `<div id="imovel_quintal"><img src="./img/quintal.svg"><p>${i.quintal}</p></div>`: ''}
                                    ${i.tipo == "Apartamento"? `<div id="imovel_condominio"><img src="./img/condominio.svg"><p>R$${i.condominio}</p></div>`: ''}
                                </div>`
            lista.appendChild(imovel)
        });
    })
})
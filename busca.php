<h3>Buscar por CEP 2:</h3>

<div>
    <label>CEP =></label>
    <input placeholder="Coloque o CEP" type="text" id="cep">
</div>
<br>
<div>
    <button id="buscar"> BUSCAR </button>
</div>
<br>
<div>
    <p>Cidade🏙️: <span id="cidade"> </span> </p>
    <p>Estado💩: <span id="estado"> </span> </p>
    <p>DDD📱: <span id="ddd"> </span> </p>
</div>

<script>
    const cep = document.querySelector("#cep");

    document.querySelector("#buscar").addEventListener('click', function(){
        const opcoes = {
            method:"GET",
            mode:"cors",
            cache:"default"
        }

        fetch(`https://viacep.com.br/ws/${cep.value}/json/`, opcoes)
        .then(
            response=>{ response.json()
            .then(data => {
                document.querySelector("#cidade").textContent = data['localidade'];
                document.querySelector("#estado").textContent = data['uf'];
                document.querySelector("#ddd").textContent = data['ddd'];
            });
            }
        )
        
    });
    
</script>
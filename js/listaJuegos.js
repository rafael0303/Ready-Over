function btnComprar(id){
    idGame = id;
    
    let compraDiv = document.getElementById('compra');
    let titulo = document.getElementById('titulo');
    let item = document.getElementById('item');
    let precio = document.getElementById('precio');
    let desarrollador = document.getElementById('desarrollador');
    let fecha = document.getElementById('fecha');

    $.ajax({
        url: 'obtenerListaJuegos.php',
        type: 'POST',
        data: { id },
        success: function(response){
            let games = JSON.parse(response);            
            games.forEach(game => {              
                
                titulo.innerHTML = `<h1>${game.title}</h1>`;
                titleGame = game.title;

                item.innerHTML = `<img src="${game.image}" alt="">`;
                imageGame = game.image;

                precio.innerHTML = `<h3>Precio:</h3><p>$${game.price}.00</p>`;
                unitPrice = game.price;
                
                desarrollador.innerHTML = `<h3>Desarrollador:</h3><p>${game.developer}</p>`;
                fecha.innerHTML = `<h3>Fecha de lanzamiento:</h3><p>${game.release_date}</p>`
                compraDiv.style.visibility = 'visible';
            });
            
        }
    });
}


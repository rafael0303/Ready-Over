function clickeo(id){

	let item = document.getElementById(id);
	let atr = item.getAttribute('check');
	let prod = document.getElementById('products');
	let cadena = '<div><a href="">BORRAR FILTROS</a></div>';

	if(atr == 'false'){
		item.style.backgroundColor = 'lightgrey';
		item.setAttribute('check','true');

		for(var i=0; i<juegos.length; i++){
			let cat = juegos[i].getAttribute('category');
			
			if(id == cat){
				lista.push(juegos[i]);
				cadena += juegos[i].outerHTML;
			}
		}
	}else{
		item.style.backgroundColor = '#fafafa';
		item.setAttribute('check','false');
	}
	prod.innerHTML = cadena;

}

function show(div){
	let item = document.getElementById(div);
	switch(div){
		case 'genre':
			let divGenre = document.getElementById('listGenre');
			divGenre.style.display = (divGenre.style.display=='none') ? 'block' : 'none';
		break;

		case 'features':
			let divFeatures = document.getElementById('listFeatures');
			divFeatures.style.display = (divFeatures.style.display=='block') ? 'none' : 'block';
		break;

		case 'rating':
			let divRating = document.getElementById('listRating');
			divRating.style.display = (divRating.style.display=='block') ? 'none' : 'block';
		break;
	}
	
	if (show == 'false') {
		item.style.display = 'block';
		item.setAttribute('show','true');
	}
}

function cerrar(){
	let comp = document.getElementById('compra');
	let err = document.getElementById('error');
	err.style.visibility = 'hidden';
	comp.style.visibility = 'hidden';
	
}

function comprar(id, nombre, img, price, desarrolladora, año){
	   	
    let comp = document.getElementById('compra');
	let p = document.getElementById('precio');
	let it = document.getElementById('item');
	let ti = document.getElementById('titulo');
	let des = document.getElementById('desarrollador');
	let fec = document.getElementById('fecha');

	ti.setAttribute('idGame',id);
	ti.innerHTML = '<h1>'+nombre+'</h1>';
	it.innerHTML = '<img alt="" src='+img+'>';
	p.innerHTML = '<h3>Precio:</h3><p>'+price+'</p>';
	des.innerHTML = '<h3>Desarrollador:</h3><p>'+desarrolladora+'</p>';
	fec.innerHTML = '<h3>Fecha de lanzamiento:</h3><p>'+año+'</p>';
	comp.style.visibility = 'visible';

}

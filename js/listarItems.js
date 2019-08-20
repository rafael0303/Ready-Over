function listarItems(user){
    window.usuarioTemporal = user;
    window.subTotal = 0;
    list = document.getElementById('listItems');
    st = document.getElementById('subTotal');
    t = document.getElementById('total');


	$.ajax({
       url: 'cartList.php',
        type: 'POST',
        data: { user },
        success: function(response){
			
		    let items = JSON.parse(response);            
            let template = '';
            items.forEach(item => {
                template += `<tr>
                    <td class="imagen"><img src="${item.image_game}" alt=""></td>
                    <td class="titulo">${item.title_game}</td>
                    <td class="precio">$${item.unit_price}.00</td>
                    <td class="cantidad"><input type="number" id="${item.id}" onchange="actualizarValor(${item.id}, ${item.unit_price})" class="form-control inputQuantity" value="${item.quantity}"></td>
                    <td class="sub_total" id="sub_total">$${item.sub_total}.00</td>
                    <td class="quitar"><img src="img/quitar.png" alt="" onclick="quitarItem(${item.id})"></td>
                </tr>`;
                subTotal += parseFloat(item.sub_total);
            });
                list.innerHTML = template;
                st.innerHTML = `<h2>Sub-total</h2><h4>$${subTotal}.00</h4>`;
                t.innerHTML = `<h1>Total:</h1><h2>$${parseFloat(subTotal)+250}.00</h2>`;

        }
    });       
}

function actualizarValor(id, precio){
        
    let num = $('#'+id).val();

    $.ajax({
        url: 'cambiarCantidad.php',
        type: 'POST',
        data: { num: num, id: id, precio: precio},
        success: function(response){
            listarItems(usuarioTemporal);
        }
    });
}

function quitarItem(id){
    $.ajax({
        url: 'quitarItem.php',
        type: 'POST',
        data: { id },
        success: function(response){            
            listarItems(usuarioTemporal);
        }
    });
}

function comprar(){
    if(usuarioTemporal != ''){
        alert('Compra realizada con éxito');
    }else{
        alert('Necesitas iniciar sesión');
    }
}
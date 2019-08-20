function agregarAlCarrito() {
    let err = document.getElementById('error');
    if(conexion){
        let idG = idGame;
        let titleG = titleGame;
        let imageG = imageGame;
        let idUs = idUser;
        let unitP = unitPrice;

        $.ajax({
            url: 'agregarAlCarrito.php',
            type: 'POST',
            data: { id: idG, titulo: titleG, imagen: imageG, usuario: idUs, precioUnitario: unitP },
            success: function(response){
                console.log(response);
            }
        });
        

        window.open("carrito.html","_self");
    }else{
        err.style.visibility = 'visible';
    }
}

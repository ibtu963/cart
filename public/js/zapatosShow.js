const listaPan = document.getElementById("item");
onGetPan((querySnapshot) => {
    // let html = "";
    // listaPan.innerHTML = "";
    querySnapshot.forEach((doc) => {
      const infoPan = doc.data();
      // console.log(doc.data());
      // console.log(infoPan);
      console.log(doc.id);
      // listaPan.innerHTML += `<div>  <h2>${infoPan.idProducto} </h2></div>`;

      listaPan.innerHTML += `<div class="four columns">
                <div class="card">
                    <img src="${infoPan.imgUrl}" class="u-full-width">
                    <div class="info-card">
                        <h4 data-id= "${doc.id}">${infoPan.nombre}</h4>
                        <p>${infoPan.detalles}</p>
                        <img src="img/estrellas.png" >
                        <p class="stockPan">Disponible: <span>${infoPan.cantidadStock}</span></p>
                        <label for="cantidad" class="label-cantidad"> Cantidad: </label>
                        <input id="cantidad" class="numPan" type="number" name="cantidad" />
                        <p class="precio">$<span class="u-pull-right">${infoPan.precioVenta}</span></p>
                        
                        <a href="#" 
                        class="u-full-width button-primary button input agregar-carrito                        
                        ">Agregar Al Carrito</a>
                    </div>
                </div>
            </div>`;
    });
    // listaPan.innerHTML = html;
  });
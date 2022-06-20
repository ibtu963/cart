
let productsInCart = [];
const parentElement = document.querySelector("#buyItems");
const cartSumPrice = document.querySelector("#sum-pris");
const productos = document.querySelectorAll(".product-under");

productos.forEach(productos =>{
    productos.addEventListener('click', (e)=>{
        if(e.target.classList.contains('addToCar')){
           // prompt("Hola");
           const userID = productos.querySelector(".userId").innerHTML;
            const productID = productos.querySelector(".productId").innerHTML;
            const productName = productos.querySelector(".productName").innerHTML;
            const productPrice = productos.querySelector(".price").innerHTML;
            //const productImg= productos.querySelector(".img").src;
            let productToCart ={
                id: productID,
                name: productName,
            //    image: productImg,
                count: 1,
                price: +productPrice,
                basePrice:+productPrice,
            }
            console.log(productToCart);
            console.log(userID);
            
        }
    })
})
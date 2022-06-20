
<?php

function obtenerProductosEnCarrito($idSesion)
{
    $bd = obtenerConexion();
    $sentencia = $bd->prepare("SELECT sneakers.id, sneakers.name, sneakers.precio
     FROM sneakers
     INNER JOIN carrito_usuarios
     ON sneakers.id = carrito_usuarios.id_item
     WHERE carrito_usuarios.id_user = ?");
    $sentencia->execute([$idSesion]);
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
}


function obtenerProductos()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query("SELECT id, name, descripcion, precio FROM sneakers");
    return $sentencia->fetchAll();
}
function obtenerConexion()
{
    return Database::make(DATABASE);
}

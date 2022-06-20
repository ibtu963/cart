<?php require(APPROOT . '/views/partials/head.php'); ?>
<?php include (APPROOT . '/new/funciones.php'); 
$pro = obtenerProductosEnCarrito(strtoupper($_SESSION['user_id']));
?>
<div class=" relative overflow-x-auto shadow-md sm:rounded-lg pt-10 ">
  <div class ="text-amber-600 text-center"> Hola <?= strtoupper($_SESSION['user_name']) ?> tu pedido es el siguiente</div>
  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
    <tr>
    <th scope="col" class="px-6 py-3">
    Nombre
    </th>
    <th scope="col" class="px-6 py-3">
    Cantidad
    </th>
    <th scope="col" class="px-6 py-3">
    Subtotal
    </th>
    <th scope="col" class="px-6 py-3">
    Precio
    </th>
    </tr>
  </thead>
<tbody>
<?php 
foreach($data as $var){?>
  <?php if($var->id_user == strtoupper($_SESSION['user_id'])){?>
  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
    <?php foreach($pro as $p) {
      if($var->id_item == $p->id){
        print($p->name) ;
      }
      }?>
    </th>
    <td class="px-6 py-4">
    <?php print($var->cantidad) ?>
    </td>
    <td class="px-6 py-4">
    <?php print($var->subtotal) ?>
    </td>
    <td class="px-6 py-4">
    <?php print($var->subtotal/$var->cantidad) ?>
    </td>
  </tr>
<?php 
}?>
            <?php 
}?>
 </tbody>
</table>
</div>
  <button class ="bg-blue-500/80 hover:bg-blue-300/60 px-6 py-2 rounded-md text-white font-medium tracking-wider transition addToCar"                                 >
    <i class="fa fa-cart-plus"></i>&nbsp;Comprar
  </button> 


<?php require(APPROOT . '/views/partials/footer.php'); ?>
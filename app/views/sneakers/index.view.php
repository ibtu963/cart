<?php require(APPROOT . '/views/partials/head.php'); ?>

<div class="h-screen bg-gray-200 grid grid-cols-4 items-center justify-center gap-10">
  <?php foreach($data as $var){?>
    <form action="<?php echo URLROOT; ?>/carritos/addCart" method="post">
      <div class="bg-red text-gray-700 w-72 min-h-[10rem] shadow-lg rounded-md overflow-hidden product-under"> 
         <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($var->imagen) .' "/>'; ?> 
         <input type="hidden" id="id_user" name="id_user" value="<?= strtoupper($_SESSION['user_id']) ?>">
         <input type="hidden" id="id_item" name="id_item" value="<?php echo $var->id ?>">

        <div class="p-5 flex flex-col gap-3 "> 
            <div class="flex items-center gap-2">
              <span class="px-3 py-1 rounded-full text-xs bg-gray-300">En Stock </span>
              <span class="px-3 py-1 rounded-full text-xs bg-gray-300"> Original </span>
           </div>
           <div class="text-2xl overflow-ellipsis overflow-hidden whitespace-nowrap productName"> <?php print($var->name) ?> 
           </div>
              <div class="is-size-3 price">
                <input type="hidden" id="price" name="price" value="<?php echo $var->precio ?>"><?php echo $var->precio ?>
              </div>
              <input name="cant" type="number" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding
                   border border-solid border-gray-300 rounded transition ease-in-out  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  id="cant" placeholder="Ingresa la cantidad"/>
              <div class="mt-5 flex gap-2">
                      <button class ="bg-blue-500/80 hover:bg-blue-300/60 px-6 py-2 rounded-md text-white font-medium tracking-wider transition addToCar"                                 >
                          <i class="fa fa-cart-plus"></i>&nbsp;Agregar al carrito
                      </button> 
                      <button class="flex-grow flex justify-center items-center bg-gray-300/60 hover:bg-gray-300/80 transition rounded-md">
                          <img src="<?php echo URLROOT; ?>\css\boxicons-2.1.2\svg\solid\bxs-heart.svg" alt="">
                      </button>  

              </div>
         </div>
       </div>
    </form>  

<?php 
}?>

</div>

<?php require(APPROOT . '/views/partials/footer.php'); ?>
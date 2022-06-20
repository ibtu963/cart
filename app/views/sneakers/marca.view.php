<?php require(APPROOT . '/views/partials/head.php'); ?>
<?php $marcas = array() ?>
<div class="h-screen bg-gray-200 grid grid-cols-4 items-center justify-center gap-1s">
  <?php foreach($data as $var){
    $valor = $var->marca;

    $marcas[] = $valor;
    }
    $s =array_unique($marcas);
    foreach($s as $m){
      // print($m);
     
   ?>
   
  
      <div class="bg-red text-gray-700 w-72 min-h-[5rem] shadow-lg rounded-md overflow-hidden product-under"> 
      <div class="text-2xl text-center overflow-ellipsis overflow-hidden whitespace-nowrap productName"> 
        <?php print($m) ?>  </div>
        <div class="p-5 flex flex-col gap-3 "> 
            <div class="flex items-center gap-2">
              <span class="px-3 py-1 rounded-full text-xs bg-gray-300">En Stock </span>
              <span class="px-3 py-1 rounded-full text-xs bg-gray-300"> Original </span>
           </div>
        </div>
        
      </div>
<?php } ?>

</div>

<?php require(APPROOT . '/views/partials/footer.php'); ?>

<header class="pt-36 pt-16 xl:pt-20 2xl:pt-24">
    <nav
      class="
        flex
        items-center
        justify-between
        flex-wrap
        py-3
        px-10
        fixed
        w-full
        z-10
        top-0
        bg-secondary
      "
      x-data="{ isOpen: false }"
      @keydown.escape="isOpen = false"
      :class="{ 'shadow-lg bg-secondary' : isOpen , 'bg-secondary' : !isOpen}"
    >
   
    <!--Logo etc-->
      <div class="flex items-center flex-shrink-0 text-white mr-6">
        <a class="" target="_blank"  href="<?php echo URLROOT; ?>">
          <img class="w-20" src="<?php echo URLROOT; ?>/images/logo2.png" alt="" />
        </a>
      </div>

      <!--Toggle button (hidden on large screens)-->
      <div       x-data="{ isOpen: false }">
      <button
        @click="isOpen = !isOpen"
        type="button"
        class="
          block
          lg:hidden
          px-2
          text-gray-500
          hover:text-white
          focus:outline-none focus:text-white
        "
        :class="{ 'transition transform-180': isOpen }"
      >
        
        <svg 
         x-show="!isOpen"
          class="h-6 w-6 fill-current text-accent-color"
          xmlns="http://www.w3.org/2000/svg" >
          viewBox="0 0 24 24"
          <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path>
        </svg>

        <svg
        @click="isOpen = !isOpen"
          x-show="isOpen"
          class="h-6 w-6 fill-current text-accent-color"
          clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"  xmlns="http://www.w3.org/2000/svg">
          viewBox="0 0 24 24"
          <path d="m21 3.998c0-.478-.379-1-1-1h-16c-.62 0-1 .519-1 1v16c0 .621.52 1 1 1h16c.478 0 1-.379 1-1zm-16.5.5h15v15h-15zm7.491 6.432 2.717-2.718c.146-.146.338-.219.53-.219.404 0 .751.325.751.75 0 .193-.073.384-.22.531l-2.717 2.717 2.728 2.728c.147.147.22.339.22.531 0 .427-.349.75-.75.75-.192 0-.385-.073-.531-.219l-2.728-2.728-2.728 2.728c-.147.146-.339.219-.531.219-.401 0-.75-.323-.75-.75 0-.192.073-.384.22-.531l2.728-2.728-2.722-2.722c-.146-.147-.219-.338-.219-.531 0-.425.346-.749.75-.749.192 0 .384.073.53.219z" fill-rule="nonzero"/>
        </svg>
      </button>
     
    </div>
      

      <!--Menu-->
      <div
        class="w-full flex-grow lg:flex lg:items-center lg:w-auto text-accent-color"
        :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }"
        @click.away="isOpen = false"
        x-show.transition="true"
        
      >
        <ul x-data="{ isOpen: true}"
        class="
            pt-6
            lg:pt-0
            list-reset
            lg:flex
            justify-end
            flex-1
            items-center
            h-screen
            lg:h-auto"
        >
          <li class="mr-3">
            <a  class="
                inline-block
                py-2
                px-4
                text-gray-400
                no-underline
                hover:text-red-500 hover:text-underline
                font-bold
                transform
                transition
                hover:translate-y-1
              "
              href="<?php echo URLROOT; ?>"
              @click="isOpen = ! isOpen"
            
              >INICIO
            </a>
          </li>
          <li class="mr-3">
            <a  class="
                inline-block
                text-gray-400
                no-underline
                hover:text-red-500 hover:text-underline
                py-2
                px-4
                transform
                transition
                hover:translate-y-1
              "
              href="<?php echo URLROOT; ?>/sneakers/index"
              @click="isOpen = ! isOpen"
              >PRODUCTOS
            </a>
          </li>
       
          <li class="mr-3">
            <a
              class="
                inline-block
                text-gray-400
                no-underline
                hover:text-red-500 hover:text-underline
                py-2
                px-4
                transform
                transition
                hover:translate-y-1
              "
              href="<?php echo URLROOT; ?>/sneakers/marca"
              @click="isOpen = ! isOpen"
              >MARCAS
            </a>
          </li>
          <?php if( !isset($_SESSION['user_id']) ) : ?>
          <li class="mr-3">
            <a
              class="
                inline-block
                text-gray-400
                no-underline
                hover:text-red-500 hover:text-underline
                py-2
                px-4
                transform
                transition
                hover:translate-y-1
              "
              href="<?php echo URLROOT; ?>/users/login"
              @click="isOpen = false"
              >LOGIN
            </a>
          </li>
          <li class="mr-3">
            <a
              class="
                inline-block
                text-white
                no-underline
                hover:text-gray-200 hover:text-underline
                py-2
                px-4
                bg-red-500
                rounded-xl
                transform
                transition
                hover:translate-y-1 hover:shadow-md
              "
              href="<?php echo URLROOT; ?>/users/signup"
              @click="isOpen = false"
              >REGISTRATE
            </a>
          </li>
          <?php endif; ?>
          <!-- Perfil del usuario -->
          <?php if( isset($_SESSION['user_id']) ) : ?>
            <li class="mr-3">
            <a
              class="
              inline-block
                text-gray-400
                no-underline
                hover:text-red-500 hover:text-underline
                py-2
                px-4
                transform
                transition
                hover:translate-y-1
              "
              href="<?php echo URLROOT; ?>/users/profile"
              @click="isOpen = false"
              ><?= strtoupper($_SESSION['user_name']) ?>
            </a>
          </li>
          <li class="mr-3">
            <a
              class="
                inline-block
                text-white
                no-underline
                hover:text-gray-200 hover:text-underline
                py-2
                px-4
                bg-red-500
                rounded-xl
                transform
                transition
                hover:translate-y-1 hover:shadow-md
              "
              href="<?php echo URLROOT; ?>/users/logout"
              @click="isOpen = false"
              >LOGOUT
            </a>
          </li>
          <?php endif; ?>          
        </ul>
      </div>

      <!-- FAVORITOS (WISH LIST) -->
      <div x-data="{ open: false }">
      <button class="whis-list" >
   


      </button>
      </div>
      <!-- CARRITO (CART) -->
      <button type="submit">
      <a
              class="
              inline-block
                text-gray-400
                no-underline
                hover:text-red-500 hover:text-underline
                py-2
                px-4
                transform
                transition
                hover:translate-y-1
              "
              href="<?php echo URLROOT; ?>/carritos/index"
             >
           
            <svg  
            class="h-6 w-6 fill-current text-main ml-6  hover:text-red-500 hover:text-underline  hover:translate-y-1"
        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M10 19.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5zm3.5-1.5c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm1.336-5l1.977-7h-16.813l2.938 7h11.898zm4.969-10l-3.432 12h-12.597l.839 2h13.239l3.474-12h1.929l.743-2h-4.195z"/>
      </svg>
      </a>
      </button>
      
    </nav>    
  </header>
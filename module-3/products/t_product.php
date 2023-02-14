<?php
    function product($product){
        echo "<a href='#' class='group'>
            <div class='aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8'>
                <img src={$product['image']} alt='Tall slender porcelain bottle with natural clay textured body and cork stopper.' class='h-full w-full object-cover object-center group-hover:opacity-75'>
            </div>
            <h3 class='mt-4 text-sm text-gray-700'>{$product['title']}</h3>
            <p class='mt-1 text-lg font-medium text-gray-900'>{$product['price']}</p>
        </a>";
    }
?>
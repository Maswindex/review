<?php

    $cupcakes = array(
        'grasshopper'=>'The Grasshopper',
        'maple'=>'Whiskey Maple Bacon',
        'carrot'=>'Carrot Walnut',
        'caramel'=>'Salted Caramel Cupcake',
        'velvet'=>'Red Velvet',
        'lemon'=>'Lemon Drop',
        'tiramisu'=>'Tiramisu');

    foreach($cupcakes as $cupcake => $flavor){
        echo '<input type="checkbox" name="flavors[]" value=' . $cupcake . '> ' . $flavor . '<br>';
    }

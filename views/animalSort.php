<?php
    $animals = array('boa', 'panda', 'alpaca');

    function sortPrint(&$array){
        natcasesort($array);
        foreach($array as $element){
            echo ' ' . $element;
        }  echo '<br>';
    }

    function addElem($element, &$array){
        echo 'adding ' . $element . '...<br>';
        if(!in_array($element, $array)){
            $array[] = $element;
        } else {
            echo 'array already contains ' . $element . '<br';
        }
    }
    sortPrint($animals);
    addElem('goat', $animals);
    sortPrint($animals);
    addElem('cat', $animals);
    sortPrint($animals);
    addElem('Panda', $animals);
    sortPrint($animals);
    addElem('goat', $animals);
    sortPrint($animals);
    addElem('Snake', $animals);
    sortPrint($animals);
?>
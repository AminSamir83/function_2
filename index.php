<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 07/11/2018
 * Time: 17:34
 */
function produit(){
    $nbarg = func_num_args();
    $prod=1;
    for ($i=0; $i <$nbarg; $i++) {
        if (func_get_arg($i)===0) { continue;} else
        {$prod *= func_get_arg($i) ;}
    }
    return $prod;
}
echo "le produit est : ", produit(1, 0, 5, 4, 3), "<br />";
?>
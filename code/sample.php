<?php
function showCustomer(){
    $arr_customer = ["Nelson", "Micky", "Arne"];
    foreach($arr_customer as $kunde){
        echo "<li>$kunde</li>";
    }
}
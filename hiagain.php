<?php

function yazdir(){
    static $value=10;
    echo $value ."<br>";
    $value++;

}

function ucgen($val){
    for($i=0;$i<$val;$i++){
        for($j=0;$j<$i;$j++){
            echo "O ";
        }
        echo "<br>";
    }
}

ucgen(15);
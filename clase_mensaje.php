<?php
class mensaje {


    public $mensaje;

    public function msjJson($_dato = '', $class ='alert alert-danger'){

if ($_dato !== ''){
    $msj = $_dato;
}else{
    $msj = $this->mensaje;
}


if (isset($msj) and $msj != ''){
    echo "<div class='$class' role='alert'>";
    $result = new jsonUtil();
    $result->dato = $msj;
    $msj1 = $result->isJson();

    
if ($msj1  !== false) {
    
        //$msj = $result->decodificaJson($msj);
        foreach ($msj as $value){
            echo $value.'<br>';
        }

    }else if(is_array($msj)){

        foreach ($msj as $value){
            echo $value.'<br>';
        }
    }else{
        echo $msj.'<br>';
    }

echo '</div>';

    }


}
}

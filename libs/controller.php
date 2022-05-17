<?php
class Controller{

    function __construct(){
        //al crear un controller se llama a la vista
        $this->view = new view();
    }

    //Función que nos permitirá cargar el modelo que queramos
    //Toma el nombre del modelo a cargar de la url, y si ese modelo exise, lo instancia
    function loadModel($model){
        $url = 'models/' . $model . 'Model.php';

        if(file_exists($url)){
            require_once $url;

            $modelName = $model.'Model';
            $this->model = new $modelName();
        }

    }
}

?>
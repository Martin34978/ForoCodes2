<?php

class App{

    function __construct(){
        //Mira si está definda la variable url, si no, le asigna null
        $url = isset($_GET['url']) ? $_GET['url']: null;
        //quitamos las barras laterales del fin, quedándonos
        //la url separada por barras
        $url = rtrim($url, '/');
        //Metemos cada parte de la url en un array usando las barras
        //cómo separadores
        $url = explode('/', $url);

        //Si la url viene sin parámetros, carga el controller por defecto
        if(empty($url[0])){
            $fileController = 'controllers/categories.php';
            require_once $fileController;
            $controller = new Categories();
            $controller->loadModel('categories');
            $controller->render();
            return false;
        }

        //Si viene con parámetros, necesitamos coger esa string para pasarselo al controlador
        $fileController = 'controllers/' . $url[0] . '.php';

        if(file_exists($fileController)){
            require_once $fileController;

            $controller = new $url[0];
            $controller->loadModel($url[0]); //W::Estoy haciendo que todos los controladores tengan un modelo!!!

            //Ahora buscamos si hay algún método que tenga que usar ese controlador
            if(isset($url[1])){
                if(method_exists($controller, $url[1])){
                    if(isset($url[2])){
                        //Buscamos cuantos parámetros hay
                        $nparam = count($url) -2;
                        $params = [];

                        //Blucle for para llenar el arreglo $params con todos los parámetros
                        for($i = 0; $i < $nparam; $i ++){
                            array_push($params, $url[$i + 2]);
                        }
                        $controller->{$url[1]}($params);

                    }else{
                        //no tiene parámetros
                        $controller->{$url[1]}();
                    }

                }else{
                    //Error, no existe el método
                }

            }else{
                //Si no hay paramatros, los carga por defecto
                $controller->render();
            }
        }else{
            //Si no encuentra el controllador, debe tirar error
        }
    }
}

?>
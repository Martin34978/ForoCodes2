<?php
include_once 'models/category.php';
class TopicsModel extends Model{
    //Este modelo carga las categorías
    function __construct(){
        parent::__construct();

    }

    public function getTopics(){
        $items = [];
        $catID = $_GET['catID'];
        try {
            $query = $this->db->connect()->query("SELECT * FROM topic WHERE catID = $catID");
            //Va metiendo los valores de la tabla en los atributos del objeto Tarea
            //Al final devuelve un array con los objetos
            while($row = $query->fetch()){
                $item = new Topics();
                $item->topicID = $row['topicID'];
                $item->topicName = $row['topicName'];
                $item->topicDate = $row['topicDate'];
                
                array_push($items, $item);
            }

            return $items;

        } catch (PDOException $e) {
            return [];
        }
    }
}
?>
<?php
include_once 'models/reply.php';
class RepliesModel extends Model{
    //Este modelo carga las categorías
    function __construct(){
        parent::__construct();

    }

    public function getReplies(){
        $items = [];
        $topicID = $_GET['topicID'];
        try {
            $query = $this->db->connect()->query("SELECT * FROM reply WHERE topicID = $topicID");
            //Va metiendo los valores de la tabla en los atributos del objeto Tarea
            //Al final devuelve un array con los objetos
            while($row = $query->fetch()){
                $item = new Replies();
                $item->userID = $row['userID'];
                $item->replyContent = $row['replyContent'];
                $item->replyDate = $row['replyDate'];                

                array_push($items, $item);
            }

            return $items;

        } catch (PDOException $e) {
            return [];
        }
    }
}
?>
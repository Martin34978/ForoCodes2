<?php
include_once 'models/category.php';
class CategoriesModel extends Model{
    //Este modelo carga las categorías
    function __construct(){
        parent::__construct();

    }

    public function getCategory(){
        $items = [];

        try {
            $query = $this->db->connect()->query("SELECT * FROM category");
            //Va metiendo los valores de la tabla en los atributos del objeto Tarea
            //Al final devuelve un array con los objetos
            while($row = $query->fetch()){
                $item = new Categories();
                $item->catID = $row['catID'];
                $item->catName = $row['catName'];
                $item->catDesc = $row['catDesc'];

                array_push($items, $item);
            }

            return $items;

        } catch (PDOException $e) {
            return [];
        }
    }
}
?>
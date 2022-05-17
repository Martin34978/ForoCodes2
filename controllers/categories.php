<?php
class Categories extends Controller{

    function __construct(){
        parent::__construct();
    
    }

    function render(){
        $category = $this->model->getCategory();
        $this->view->category = $category;
        $this->view->render('category/index');
    }
}
?>
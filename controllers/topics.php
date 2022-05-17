<?php
class Topics extends Controller{

    function __construct(){
        parent::__construct();
    
    }

    function render(){
        $topic = $this->model->getTopics();
        $this->view->topic = $topic;
        $this->view->render('topic/index');
    }
}
?>
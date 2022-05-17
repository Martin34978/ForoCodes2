<?php
class Replies extends Controller{

    function __construct(){
        parent::__construct();
    
    }

    function render(){
        $reply = $this->model->getReplies();
        $this->view->reply = $reply;
        $this->view->render('reply/index');
    }
}
?>
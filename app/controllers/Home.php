<?php 
class Home extends Controller{

    public $data = [];

    public function __construct() {

    }

    public function index() {
        $this->data['title'] = 'Trang chủ';
        $this->data['content'] = 'home/index';
        $this->render('layouts/client_layout', $this->data);
    }
    

}